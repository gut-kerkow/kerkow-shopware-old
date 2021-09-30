<?php declare(strict_types=1);


namespace Productfeed\Service;

use Monolog\Logger;
use Productfeed\Core\Content\Enums\DeliveryState;
use Productfeed\Core\Content\Enums\FeedState;
use Productfeed\Core\Content\File\FileEntity;
use Productfeed\Core\Content\MailTemplate\MailTemplateTypes;
use Shopware\Core\Content\Mail\Service\MailService as ServiceMailService;
use Shopware\Core\Content\MailTemplate\Aggregate\MailTemplateType\MailTemplateTypeEntity;
use Shopware\Core\Content\MailTemplate\Exception\SalesChannelNotFoundException;
use Shopware\Core\Content\MailTemplate\MailTemplateEntity;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Exception\InconsistentCriteriaIdsException;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\Validation\DataBag\DataBag;
use Shopware\Core\System\SalesChannel\SalesChannelEntity;

class ProductfeedMailService
{

    protected EntityRepositoryInterface $mailTemplateRepository;

    protected ServiceMailService $mailService;

    protected EntityRepositoryInterface $salesChannelRepository;

    public function __construct(
        EntityRepositoryInterface $mailTemplateRepository,
        ServiceMailService $mailService,
        EntityRepositoryInterface $salesChannelRepository
    )
    {
        $this->mailTemplateRepository = $mailTemplateRepository;
        $this->mailService = $mailService;
        $this->salesChannelRepository = $salesChannelRepository;
    }

    /**
     * @param FileEntity $file
     * @param string[] $addresses
     * @param SalesChannelEntity $salesChannel
     * @throws InconsistentCriteriaIdsException
     * @throws SalesChannelNotFoundException
     */
    public function sendEmails(FileEntity $file, $addresses, SalesChannelEntity $salesChannel, Logger $logger): void
    {
        $context = Context::createDefaultContext();
        foreach ($addresses as $address) {
            $this->sendEmail($file, $address, $context, $salesChannel, $logger);
        }
    }

    /**
     * @param FileEntity $file
     * @param string $address
     * @param Context $context
     * @param SalesChannelEntity $salesChannel
     * @return bool
     * @throws InconsistentCriteriaIdsException
     * @throws SalesChannelNotFoundException
     */
    private function sendEmail(
        FileEntity $file,
        string $address,
        Context $context,
        SalesChannelEntity $salesChannel,
        Logger $logger
    ): bool {
        $data = new DataBag();
        $criteria = new Criteria();
        $criteria->addFilter(
            new EqualsFilter(
                'mailTemplateType.technicalName',
                MailTemplateTypes::MAILTYPE_FEED_GENERATOR
            )
        );
        $criteria->setLimit(1);
        /** @var MailTemplateEntity $mailTemplate */
        $mailTemplate = $this->mailTemplateRepository->search($criteria, $context)->first();

        $deliveryState = DeliveryState::getFormattedDeliveryState($file->getDeliveryState());
        $feedState = FeedState::getFormattedFeedState($file->getState());

        $data->set('senderName', $mailTemplate->getSenderName());
        $data->set('salesChannelId', $salesChannel->getId());
        $data->set('contentHtml', $mailTemplate->getContentHtml());
        $data->set('contentPlain', $mailTemplate->getContentPlain());
        $data->set('subject', $mailTemplate->getSubject());
        $data->set(
            'recipients',
            [
                $address => $mailTemplate->getSenderName()
            ]
        );

        $logger->info("sending mail, data: " . json_encode($data->all()));

        $message = $this->mailService->send(
            $data->all(),
            $context,
            [
                'productfeed'  => $file->getProductfeed(),
                'log' => $file,
                'feedState' => $feedState,
                'deliveryState' => $deliveryState
            ]
        );


        return $message ? true : false;
    }
}
