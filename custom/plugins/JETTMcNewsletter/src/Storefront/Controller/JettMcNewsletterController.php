<?php

declare(strict_types=1);

namespace Jett\McNewsletter\Storefront\Controller;

use Jett\McNewsletter\Converter\RecipientToMemberConverter;
use Jett\McNewsletter\Exception\NoSubscriberFoundException;
use Jett\McNewsletter\Service\SettingService;
use Jett\McNewsletter\Service\SubscriberService;
use Shopware\Core\Content\Newsletter\SalesChannel\NewsletterSubscribeRoute;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @RouteScope(scopes={"storefront"})
 */
class JettMcNewsletterController extends StorefrontController
{
    /**
     * @var SettingService
     */
    private $settingService;

    /**
     * @var SubscriberService
     */
    private $subscriberService;

    /**
     * JettMcNewsletterController constructor.
     * @param SettingService $settingService
     * @param SubscriberService $subscriberService
     */
    public function __construct(SettingService $settingService, SubscriberService $subscriberService)
    {
        $this->settingService = $settingService;
        $this->subscriberService = $subscriberService;
    }

    /**
     * @Route("/JettMcNewsletter", name="frontend.jettmcnewseltter", options={"seo"="false"}, defaults={"csrf_protected"=false}, methods={"POST", "GET"})
     */
    public function setSyncStatus(Request $request, SalesChannelContext $context): Response
    {

        if (!$request->isMethod('POST')) {
            return new JsonResponse();
        }

        $webhookUrlId = $request->get('jettId', null);
        $salesChannelId = $context->getSalesChannel()->getId();
        $data = $request->get('data', null);
        $requestType = $request->get('type', null);

        $salesChannelSettings = $this->settingService->getSettings($salesChannelId);

        if ($salesChannelSettings->getWebhookUrlId() != $webhookUrlId) {
            return new JsonResponse();
        }

        try {
             $this->subscriberService->setSubscriberStatus
             (
                 $salesChannelId,
                 $data['email'],
                 ($requestType === RecipientToMemberConverter::STATUS_SUBSCRIBED ? NewsletterSubscribeRoute::STATUS_OPT_IN : NewsletterSubscribeRoute::STATUS_OPT_OUT)
             );
        } catch (NoSubscriberFoundException $e) {

        }

        return new JsonResponse();
    }
}
