<?php

declare(strict_types=1);

namespace Productfeed\Core\Api;

use Productfeed\Core\Content\Enums\DeliveryState;
use Productfeed\Core\Content\Enums\ExecutionType;
use Productfeed\Core\Content\Enums\FeedState;
use Productfeed\Core\Content\Enums\FileTransferProtocol;
use Productfeed\Core\Content\Enums\FileType;
use Productfeed\Core\Content\Enums\NotificationEvents;
use Productfeed\Service\ProductfeedService;
use Productfeed\Service\ProductfeedTemplateService;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Exception\InconsistentCriteriaIdsException;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @RouteScope(scopes={"api"})
 */
class ProductfeedController extends AbstractController
{
    protected EntityRepositoryInterface $productfeedRepository;

    protected EntityRepositoryInterface $notificationRepository;

    protected EntityRepositoryInterface $fileRepository;

    protected ProductfeedService $productfeedService;

    protected ProductfeedTemplateService $templateService;

    /**
     *
     * @param EntityRepositoryInterface $productfeedRepository
     * @param EntityRepositoryInterface $fileRepository
     * @param EntityRepositoryInterface $notificationRepository
     * @param ProductfeedService $productfeedService
     */
    public function __construct(
        EntityRepositoryInterface $productfeedRepository,
        EntityRepositoryInterface $fileRepository,
        EntityRepositoryInterface $notificationRepository,
        ProductfeedService $productfeedService,
        ProductfeedTemplateService $templateService
    )
    {
        $this->productfeedRepository = $productfeedRepository;
        $this->fileRepository = $fileRepository;
        $this->notificationRepository = $notificationRepository;
        $this->productfeedService = $productfeedService;
        $this->templateService = $templateService;
    }

    /**
     * @Route("/api/_action/productfeed/generate/{id}", name="api.custom.productfeed.generate", methods={"GET"})
     * @param Context $context
     * @param string $id id of the feedgenerator
     * @return JsonResponse
     * @throws InconsistentCriteriaIdsException
     */
    public function generate(Context $context, string $id): JsonResponse
    {
        $result = $this->productfeedService->createProductfeed(ExecutionType::MANUAL, $id, $context);
        if ($result === true) {
            return new JsonResponse(['data' => 'success']);
        } else if (!is_null($result)) {
            return new JsonResponse(['data' => $result], 400);
        }
        return new JsonResponse(['data' => 'something went wrong, go to logs to see more information'], 400);
    }

    /**
     * @Route("/api/_action/productfeed/getDeliveryStates", name="api.custom.productfeed.getDeliveryStates",
     *     methods={"GET"})
     * @return JsonResponse
     */
    public function getDeliveryStates(): JsonResponse
    {
        return new JsonResponse([
            DeliveryState::DELIVERED, DeliveryState::NOT_DELIVERED_YET, DeliveryState::ERROR, DeliveryState::DISABLED
        ]);
    }


    /**
     * @Route("/api/_action/productfeed/getExecutionTypes", name="api.custom.productfeed.getExecutionTypes",
     *     methods={"GET"})
     * @return JsonResponse
     */
    public function getExecutionTypes(): JsonResponse
    {
        return new JsonResponse([
            ExecutionType::CRON, ExecutionType::MANUAL
        ]);
    }

    /**
     * @Route("/api/_action/productfeed/getFeedStates", name="api.custom.productfeed.getFeedStates",
     *     methods={"GET"})
     * @return JsonResponse
     */
    public function getFeedStates(): JsonResponse
    {
        return new JsonResponse([
            FeedState::ERROR, FeedState::SUCCESS
        ]);
    }

    /**
     * @Route("/api/_action/productfeed/getFileTransferProtocols",
     *     name="api.custom.productfeed.getFileTransferProtocols", methods={"GET"})
     * @return JsonResponse
     */
    public function getFileTransferProtocols(): JsonResponse
    {
        return new JsonResponse([
            FileTransferProtocol::FTP, FileTransferProtocol::SFTP
        ]);
    }

    /**
     * @Route("/api/_action/productfeed/getFileTypes", name="api.custom.productfeed.getFileTypes",
     *     methods={"GET"})
     * @return JsonResponse
     */
    public function getFileTypes(): JsonResponse
    {
        return new JsonResponse([
            FileType::CSV, FileType::TXT, FileType::XML
        ]);
    }

    /**
     * @Route("/api/_action/productfeed/getNotificationEvents",
     *     name="api.custom.productfeed.getNotificationEvents", methods={"GET"})
     * @return JsonResponse
     */
    public function getNotificationEvents(): JsonResponse
    {
        return new JsonResponse([
            NotificationEvents::CREATE_SUCCESS, NotificationEvents::CREATE_ERROR, NotificationEvents::DELIVERY_SUCCESS,
            NotificationEvents::DELIVERY_ERROR
        ]);
    }

    /**
     * @Route("/api/_action/productfeed/googleTemplate",
     *     name="api.custom.productfeed.googleTemplate", methods={"GET"})
     * @return JsonResponse
     */
    public function getGoogleTemplate(): JsonResponse
    {
        $context = Context::createDefaultContext();
        $defaults = $this->templateService->getGoogleDefaults($context);
        return new JsonResponse($defaults);
    }

    /**
     * @Route("/api/_action/productfeed/idealoTemplate",
     *     name="api.custom.productfeed.idealoTemplate", methods={"GET"})
     * @return JsonResponse
     */
    public function getIdealoTemplate(): JsonResponse
    {
        $context = Context::createDefaultContext();
        $defaults = $this->templateService->getIdealoDefaults($context);
        return new JsonResponse($defaults);
    }
}
