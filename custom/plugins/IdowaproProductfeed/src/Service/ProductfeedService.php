<?php

declare(strict_types=1);

namespace Productfeed\Service;

use DateTime;
use Exception;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Productfeed\Core\Content\Enums\DeliveryState;
use Productfeed\Core\Content\Enums\ExecutionType;
use Productfeed\Core\Content\Enums\FeedState;
use Productfeed\Core\Content\Enums\FileType;
use Productfeed\Core\Content\Enums\NotificationEvents;
use Productfeed\Core\Content\Excpetion\BaseException;
use Productfeed\Core\Content\Excpetion\CsvEscaperException;
use Productfeed\Core\Content\Excpetion\FilterExcpetionValueNotFound;
use Productfeed\Core\Content\Excpetion\RuleKeyNotFoundException;
use Productfeed\Core\Content\File\FileEntity;
use Productfeed\Core\Content\Productfeed\ProductfeedCollection;
use Productfeed\Core\Content\Productfeed\ProductfeedEntity;
use Shopware\Core\Checkout\Payment\PaymentMethodCollection;
use Shopware\Core\Checkout\Payment\PaymentMethodEntity;
use Shopware\Core\Content\Category\CategoryEntity;
use Shopware\Core\Content\Product\ProductCollection;
use Shopware\Core\Content\Product\ProductEntity;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\Dbal\Common\RepositoryIterator;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Exception\InconsistentCriteriaIdsException;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\Uuid\Uuid;
use Throwable;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFilter;
use Twig\TwigTest;

class ProductfeedService
{
    protected ProductfeedNotificationService $notificationService;

    protected ProductfeedFilterService $filterService;

    protected EntityRepositoryInterface $fileRepository;

    protected EntityRepositoryInterface $categoryRepository;

    protected EntityRepositoryInterface $productRepository;

    protected EntityRepositoryInterface $productfeedRepository;

    protected EntityRepositoryInterface $paymentMethodRepository;

    protected ProductfeedProductExtensionService $productExtensionService;
    
    protected Logger $logger;

    public function __construct(
        ProductfeedNotificationService $notificationService,
        ProductfeedFilterService $filterService,
        EntityRepositoryInterface $fileRepository,
        EntityRepositoryInterface $productRepository,
        EntityRepositoryInterface $categoryRepository,
        EntityRepositoryInterface $productfeedRepository,
        EntityRepositoryInterface $paymentMethodRepository,
        ProductfeedProductExtensionService $productExtensionService,
        Logger $logger
    ) {
        $this->notificationService = $notificationService;
        $this->filterService = $filterService;
        $this->fileRepository = $fileRepository;
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->productfeedRepository = $productfeedRepository;
        $this->paymentMethodRepository = $paymentMethodRepository;
        $this->productExtensionService = $productExtensionService;

        $this->logger = $logger;
        $this->initLogger();
    }

    protected function initLogger()
    {
        $dir =  __DIR__ . '/../../../../../var/log/';
        $file = $dir . 'productfeed.log';
        try {
            if (!file_exists($dir)) {
                $dirExist = mkdir($dir, 0755, true);
                if (!$dirExist) {
                    return;
                }
            }
            if (!file_exists($file)) {
                $fileCreated = touch($file);
                if (!$fileCreated) {
                    return;
                }
            }
            $this->logger->pushHandler(new StreamHandler($file));
        } catch (Exception $e) {
            // somehow an error occured while creating log file
            // no logs can be provided
        }
    }

    /**
     * @param string $executionType
     * @param string|null $id
     * @return bool|string true if everything was ok, otherwise false
     * @throws InconsistentCriteriaIdsException
     */
    public function createProductfeed(string $executionType, string $productFeedId = null, Context $context)
    {
        $entities = $this->getProductFeeds($context);

        $success = true;
        $errorMsg = null;

        foreach ($entities as $feed) {
            if (!$this->checkIfFeedShouldBeGenerated($feed, $executionType, $productFeedId)) {
                continue;
            }

            $tempRes = $this->generateFeed($feed, $executionType, $context);
            if ($tempRes !== true) {
                $success = false;
                $errorMsg = $tempRes;
            }
        }

        if ($errorMsg) {
            return $errorMsg;
        }
        return $success;
    }

    protected function getProductFeeds(Context $context): ProductfeedCollection
    {
        $criteria = new Criteria();
        $criteria->addAssociations([
            'salesChannel',
            'salesChannel.shippingMethods',
            'salesChannel.shippingMethod',
            'salesChannel.shippingMethods.prices',
            'salesChannel.shippingMethods.prices.currencyPrice',
            'salesChannel.currency',
            'salesChannel.country',
            'rule',
            'files',
            'salesChannel.shippingMethod',
            'salesChannel.shippingMethod.prices',
            'language',
            'currency',
            'country',
            'country.taxRules.tax.rules.tax',
            'country.states'
        ]);
        return $this->productfeedRepository->search($criteria, $context)->getEntities();
    }

    protected function checkIfFeedShouldBeGenerated(ProductfeedEntity $feed, string $executionType, ?string $productFeedId): bool
    {
        if (!$feed->isEnabled()) {
            return false;
        }

        if ($feed->getExecutionMode() !== $executionType) {
            return false;
        }

        if (!$this->checkIfProductFeedIdIsCorrectForProductFeed($productFeedId, $feed, $executionType)) {
            return false;
        }

        if (!$this->checkIfProductFeedShouldBeExecutedByCron($executionType, $feed)) {
            return false;
        }

        return true;
    }

    protected function checkIfProductFeedIdIsCorrectForProductFeed(?string $productFeedId, ProductfeedEntity $feed, string $executionType): bool
    {
        if ($executionType !== ExecutionType::MANUAL) {
            return true;
        }

        if (is_null($productFeedId)) {
            return false;
        }

        if ($productFeedId !== $feed->getId()) {
            return false;
        }
        return true;
    }

    protected function checkIfProductFeedShouldBeExecutedByCron(string $executionType, ProductfeedEntity $feed): bool
    {
        if ($executionType !== ExecutionType::CRON) {
            return true;
        }

        if ($feed->getFiles()->count() == 0) {
            return true;
        }

        $latestFile = $feed->getFiles()->first();
        // get the latest file
        foreach ($feed->getFiles() as $comp) {
            if ($comp->getCreatedAt() > $latestFile->getCreatedAt()) {
                $latestFile = $comp;
            }
        }

        $diffToLatestCreation = (new \DateTime())->getTimestamp() - ($latestFile->getCreatedAt())->getTimestamp();

        $feedInterval = $feed->getInterval() / 1000;

        if ($feedInterval >= $diffToLatestCreation) {
            return false;
        }

        return true;
    }

    /**
     * generates a feed, stores it in db and sends notifications
     * @param ProductfeedEntity $feed
     * @param string $executionType
     * @return bool|string true if generation was successfull, otherwise false
     */
    protected function generateFeed(ProductfeedEntity $feed, string $executionType, Context $context)
    {
        $this->logger->info("generating feed " . $feed->getName());

        // Set delivery state
        if ($feed->isDeliveryEnabled()) {
            $deliveryState = DeliveryState::NOT_DELIVERED_YET;
        } else {
            $deliveryState = DeliveryState::DISABLED;
        }

        // declare variables
        $msg = null;
        $exception = null;
        $file = null;

        // generate feed
        try {
            /** @var FileEntity $file */
            $file = $this->createFeedFile($feed, $executionType, $context);
            $feedString = $this->createFeed($feed, $file, $context);
            $file->setDeliveryState($deliveryState);
            $this->notificationService->notifyEvent(
                NotificationEvents::CREATE_SUCCESS,
                $file,
                $feed,
                $this->logger
            );
            $file->setMessage('Feed has been generated');
            $state = FeedState::SUCCESS;
            $this->logger->info('feed ' . $feed->getName() . ' has been generated successfully');
        } catch (Throwable $e) {
            $this->logger->error('feed ' . $feed->getName() . ' error while creating feed \n' . $e->getMessage());
            $msg = $e->getMessage();
            $state = FeedState::ERROR;
            $exception = $e;
        }

        if ($state === FeedState::ERROR) {
            $file = new FileEntity();
            $file->setState($state);
            $file->setMessage($msg);
            $file->setDeliveryState(DeliveryState::DISABLED);
            $file->setProductfeed($feed);
            $file->setProductfeedId($feed->getId());
            $file->setStackTrace($exception->getTraceAsString());
            try {
                $this->notificationService->notifyEvent(
                    NotificationEvents::CREATE_ERROR,
                    $file,
                    $feed,
                    $this->logger
                );
            } catch(Throwable $e) {
                // don't exit when sending email does not work
                $file->setMessage('product-feed.general.errorSendingMail');
                $file->setState(FeedState::ERROR);
                $file->setStackTrace($e->getTraceAsString());
            }
        } else {
            $file->setStackTrace(null);
        }

        if ($state === FeedState::SUCCESS) {
            try {
                $this->deliverFeed($feed, $file, $feedString);
            } catch(Throwable $e) {
                $file->setMessage('product-feed.general.errorDeliveringFeed');
                $file->setState(FeedState::ERROR);
                $file->setDeliveryState(DeliveryState::ERROR);
                $file->setStackTrace($e->getTraceAsString());
            }
        }

        // store in database
        $this->fileRepository->create(
            [[
                'id' => Uuid::randomHex(),
                'name' => $feed->getName(),
                'fileName' => $state === FeedState::SUCCESS ? $file->getFilename() : null,
                'fileType' => $state === FeedState::SUCCESS ? $feed->getFiletype() : null,
                'executionType' => $executionType,
                'state' => $state,
                'productfeedId' => $feed->getId(),
                'deliveryProtocol' => $feed->getFileTransferProtocol(),
                'hostUrl' => $feed->getHostUrl(),
                'hostUsername' => $feed->getHostUsername(),
                'hostDirectory' => $feed->getHostDirectoryPath(),
                'deliveryState' => $file->getDeliveryState(),
                'message' => $file->getMessage(),
                'stackTrace' => $file->getStackTrace(),
                'deliveryTimestamp' => $file->getDeliveryTimestamp()
            ]],
            Context::createDefaultContext()
        );

        if ($state === FeedState::SUCCESS) {
            return true;
        }
        if (!is_null($file->getMessage())) {
            return $file->getMessage();
        }
        return false;
    }

    /**
     * creates a feed and stores it into db and sends notification for creating success/error
     * @param ProductfeedEntity $feed
     * @param string $executionType
     * @return FileEntity the feed for delivery
     * @throws FilterExcpetionValueNotFound
     * @throws InconsistentCriteriaIdsException
     * @throws LoaderError
     * @throws RuleKeyNotFoundException
     * @throws RuntimeError
     * @throws SyntaxError
     */
    protected function createFeed(ProductfeedEntity $feed, FileEntity $file, Context $context): string
    {
        $feedString = $this->generateFeedString($feed, $context);
        $this->logger->info("feed string was genererated successfully");

        $dir = './feeds';
        if (is_dir('./public')) {
            $dir = './public' . $dir;
        }

        $this->logger->info("checking public/feeds directory and create it if necessary");
        // check if directory exists
        if (!is_dir($dir)) {
            $this->logger->info("directory does not exists");
            if (!mkdir($dir, 0777, true) && !is_dir($dir)) {
                $this->logger->info("directory could not be created");
                throw new BaseException(sprintf('Directory "%s could not be created', 'feeds'));
            } else {
                $this->logger->info("directory was created");
            }
        } else {
            $this->logger->info("directory already exists");
        }

        // check if directory is writeable
        if (!is_writable($dir)) {
            $this->logger->info("directory is not writeable");
            throw new BaseException('product-feed.logs.detail.directoryPublicFeedsHasNoWritePermissons');
        } else {
            $this->logger->info("directory is writeable");
        }

        // store feed file
        $handle = fopen($dir . '/' . $file->getFilename(), 'wa+');
        fwrite($handle, $feedString);
        $this->logger->info("file was written");

        return $feedString;
    }

    protected function createFeedFile(ProductfeedEntity $feed, string $executionType, Context $context): FileEntity
    {
        $file = new FileEntity();
        $file->setId(Uuid::randomHex());


        $file->setProductfeed($feed);
        $file->setProductfeedId($feed->getId());
        $file->setExecutionType($executionType);
        $file->setFilename($feed->getFilename() . '.' . FileType::getFileExtension($feed->getFiletype()));
        $file->setFileType($feed->getFiletype());
        $file->setState(FeedState::SUCCESS);
        return $file;
    }

    /**
     * delviers a feed to the host and sends notifications for success/error
     * @param ProductfeedEntity $feed
     * @param FileEntity $file
     * @param string $feedString the rendered feed as string
     */
    protected function deliverFeed(ProductfeedEntity $feed, FileEntity $file, string $feedString): void
    {
        if (!$feed->isDeliveryEnabled()) {
            return;
        }

        if ($file->getState() === FeedState::ERROR) {
            return;
        }

        // phpseclib won't work otherwise
        require_once __DIR__ . '/../../vendor/autoload.php';

        $server = $feed->getHostUrl();
        $user = $feed->getHostUsername();
        $password = $feed->getHostPassword();
        $fileName = $file->getFilename();

        if (is_null($server) || is_null($user) || is_null($password)) {
            throw new Exception("(s)ftp configuration invalid");
        }

        try {
            $sftp = new \phpseclib\Net\SFTP($server);
            if (!$sftp->login($user, $password)) {
                throw new BaseException(
                    $server . ' ' . $user . ', login failed'
                );
            }
            $remotePath = $sftp->pwd . $fileName;
            $result = $sftp->put($remotePath, $feedString, \phpseclib\Net\SFTP::SOURCE_STRING);
            if (!$result) {
                throw new BaseException('error when uploading to ftp server');
            }

            $this->sendDeliveryNotificationSuccess($feed, $file);
            $this->logger->info('feed ' . $feed->getName() . ' has been delivered successfully');
        } catch (Throwable $e) {
            $this->sendDeliveryNotificationFailed($feed, $file, $e);
            $this->logger->error('error while delivering feed ' . $feed->getName());
            $this->logger->error($e->getMessage());
        }
    }

    protected function sendDeliveryNotificationSuccess(ProductfeedEntity $feed, FileEntity $file): void
    {
        $file->setDeliveryState(DeliveryState::DELIVERED);
        $file->setDeliveryTimestamp(new DateTime());
        $this->notificationService->notifyEvent(
            NotificationEvents::DELIVERY_SUCCESS,
            $file,
            $feed,
            $this->logger
        );
    }

    protected function sendDeliveryNotificationFailed(ProductfeedEntity $feed, FileEntity $file, Throwable $e): void
    {
        $file->setDeliveryState(DeliveryState::ERROR);
        $file->setStackTrace($e->getTraceAsString());
        $file->setMessage($e->getMessage());
        $this->notificationService->notifyEvent(
            NotificationEvents::DELIVERY_ERROR,
            $file,
            $feed,
            $this->logger
        );
    }

    protected function generateFeedString(ProductfeedEntity $feed, Context $context): string
    {
        ini_set('memory_limit','4G');
        
        $criteria = new Criteria();
        $criteria->addAssociations([
            'properties',
            'properties.group',
            'options',
            'media',
            'prices',
            'price',
            'deliveryTime',
            'tax.rules.country',
            'translations',
            'manufacturer',
            'streams'
        ]);
        $criteria->setLimit(500);

        $iterator = new RepositoryIterator($this->productRepository, $context, $criteria);

        $allProducts = new ProductCollection();
        while (($result = $iterator->fetch()) !== null) {
            $products = $result->getEntities();

            if ($feed->getFilter()) {
                $products = $this->filterService->filterProducts($products, $feed, $context);
            }


            // add properties to the product entities to use them in twig
            /** @var ProductEntity $product */
            foreach ($products as $product) {
                $this->productExtensionService->addAttributesToProduct($product, $context, $feed);
                $allProducts->add($product);
            }

        }
        return $this->generateTemplate($allProducts, $feed, $context);
    }

    /**
     * @param ProductCollection $products
     * @param ProductfeedEntity $feed
     * @param Context $context
     * @return string|null the rendered template
     */
    protected function generateTemplate(ProductCollection $products, ProductfeedEntity $feed, Context $context): ?string
    {
        $catagories = $this->getCategories($context);
        $paymentMethods = $this->getPaymentMethods($context);
        try {
            $name = Uuid::randomHex();
            $handle = fopen($name, 'wb');
            fwrite($handle, $feed->getTemplate());

            $twig = $this->createTwigInstance();
            $parameters = [
                'products' => $products,
                'categories' => $catagories,
                'paymentMethods' => $paymentMethods,
                'salesChannel' => $feed->getSalesChannel(),
                'shippingMethodPrice' => $feed->getSalesChannel()->getShippingMethod()->getPrices()->first()->getCurrencyPrice()->first()
            ];
            return $twig->render($name, $parameters);
        } finally {
            if (!empty($handle)) {
                fclose($handle);
            }
            if (!empty($name)) {
                unlink($name);
            }
        }

        return null;
    }

    protected function createTwigInstance(): \Twig\Environment
    {
        $loader = new FilesystemLoader('.');
        $twig = new Environment($loader, []);
        $twig->addFilter(new TwigFilter('cast_to_array', function ($stdClassObject) {
            $response = array();
            foreach ($stdClassObject as $key => $value) {
                $response[] = array($key, $value);
            }
            return $response;
        }));
        $twig->addFilter(new TwigFilter('json', function ($value) {
            return json_encode($value);
        }));
        $twig->addTest(new TwigTest('array', function ($value) {
            return is_array($value);
        }));
        $twig->getExtension(\Twig\Extension\EscaperExtension::class)->setEscaper('csv', function ($twigEnv, $string, $charset) {
            if ($string === null) {
                return 'NULL';
            }
            if (is_numeric($string)) {
                return $string;
            }
            $string = str_replace(array("\r\n", "\n", "\r"), '', $string);
            $result = $this->escapeCsv($string);
            if (!$result) {
                throw new CsvEscaperException('error while escaping ' . json_encode($string));
            }
            return $result;
        });
        return $twig;
    }

    /**
     * if the given data is a object it will be json encoded
     * @param $data
     * @return bool|string
     */
    protected function escapeCsv($data)
    {
        $f = fopen('php://memory', 'r+');
        if (is_object($data)) {
            $data = json_encode($data);
        }
        if (fputcsv($f, (array)$data) === false) {
            return false;
        }
        rewind($f);
        $csv_line = stream_get_contents($f);
        return rtrim($csv_line);
    }

    protected function getCategories(Context $context)
    {
        /** @var CategoryEntity[] $categories */
        $categories = $this->categoryRepository->search(new Criteria(), $context)->getEntities()->getElements();
        return $categories;
    }

    protected function getPaymentMethods(Context $context): object
    {
        // search payment methods
        $c = new Criteria();
        $c->addFilter(new EqualsFilter('active', true));
        /** @var PaymentMethodCollection $paymentMethodsEntities */
        $paymentMethodsEntities = $this->paymentMethodRepository->search($c, $context)->getEntities();
        $paymentMethods = (object)[];

        // remove whitespaces from payment names
        /** @var PaymentMethodEntity $paymentMethodEntity */
        foreach ($paymentMethodsEntities as $paymentMethodEntity) {
            $paymentMethods->{str_replace(' ', '_', $paymentMethodEntity->getName())} = '0.00';
        }

        return $paymentMethods;
    }
}