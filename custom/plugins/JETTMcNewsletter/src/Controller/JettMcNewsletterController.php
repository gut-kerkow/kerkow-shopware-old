<?php

declare(strict_types=1);

namespace Jett\McNewsletter\Controller;

use GuzzleHttp\Exception\ClientException;
use Jett\McNewsletter\Core\API\Exception\InvalidApiKeyException;
use Jett\McNewsletter\Exception\NoSettingsFoundException;
use Jett\McNewsletter\Service\LogService;
use Jett\McNewsletter\Service\SettingService;
use Jett\McNewsletter\Service\WebhookService;
use Jett\McNewsletter\Setting\JettSetting;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @RouteScope(scopes={"api"})
 */
class JettMcNewsletterController extends AbstractController
{
    public const LOG_MESSAGE_WEBHOOK_CREATE_FAILED = 'The registration of the webhook failed';
    public const LOG_MESSAGE_GET_LISTS_FAILED = 'The retrieval of the lists failed. Please check your api key';

    /**
     * @var SettingService
     */
    private $settingService;
    /**
     * @var LogService
     */
    private $logService;

    /**
     * @var WebhookService
     */
    private $webhookService;

    /**
     * JettMcNewsletterController constructor.
     * @param SettingService $settingService
     * @param LogService $logService
     * @param WebhookService $webhookService
     */
    public function __construct(SettingService $settingService, LogService $logService, WebhookService $webhookService)
    {
        $this->settingService = $settingService;
        $this->logService = $logService;
        $this->webhookService = $webhookService;
    }

    /**
     * @RouteScope(scopes={"api"})
     * @Route("/api/v{version}/jettmcnewsletter/save-setting", name="api.action.jettmcnewsletter.save-setting", methods={"POST"})
     */
    public function saveSetting(Request $request, Context $context): JsonResponse
    {
        $params = $request->request->get('params');

        $setting = new JettSetting();
        if (isset($params['settingId'])) {
            $setting->setId($params['settingId']);
        }

        $setting->setSalesChannelId(isset($params['salesChannelId']) ? $params['salesChannelId'] : null);
        $setting->setActive(isset($params['active']) ? $params['active'] : false);
        $setting->setApiKey(isset($params['apiKey']) ? $params['apiKey'] : null);
        $setting->setListId(isset($params['listId']) ? $params['listId'] : null);
        $setting->setSyncLimit(isset($params['syncLimit']) ? $params['syncLimit'] : null);
        $setting->setLastSyncRun(isset($params['lastSyncRun']) ? new \DateTime($params['lastSyncRun']) : null);
        $setting->setDoiOption(isset($params['doiOption']) ? (int) $params['doiOption'] : null);

        try {
            $currentSetting = $this->settingService->getSettings($setting->getSalesChannelId());
        } catch (NoSettingsFoundException $e) {}

        $result = $this->settingService->saveSetting($setting);

        $setting = $this->settingService->getSettings($setting->getSalesChannelId());

        try {
            $this->webhookService->handleWebhook($setting, $currentSetting);
        } catch (ClientException $e) {
            $this->logService->saveLog
            (
                $setting->getSalesChannelId(),
                LogService::LOG_STATUS_FAILED,
                self::LOG_MESSAGE_WEBHOOK_CREATE_FAILED,
                ['message' => substr($e->getMessage(), 0, 200)]
            );
            return new JsonResponse(['message' => self::LOG_MESSAGE_WEBHOOK_CREATE_FAILED], 500);
        }

        return new JsonResponse($setting);
    }

    /**
     * @RouteScope(scopes={"api"})
     * @Route("/api/v{version}/jettmcnewsletter/get-settings", name="api.action.jettmcnewsletter.get-settings", methods={"GET"})
     */
    public function getSettings(Request $request, Context $context): JsonResponse
    {
        $salesChannelId = $request->get('salesChannelId');
        try {
            $result = $this->settingService->getSettings($salesChannelId);
        } catch (NoSettingsFoundException $exception) {
            $result = new JettSetting();
        }

        return new JsonResponse($result);
    }

    /**
     * @Route("/api/v{version}/jettmcnewsletter/get-lists", name="api.action.jettmcnewsletter.get-lists", methods={"POST"})
     */
    public function getLists(Request $request, Context $context): JsonResponse
    {
        $params = $request->request->get('params');
        $apiKey = $params['apiKey'];

        if ($apiKey === null) {
            return new JsonResponse();
        }

        try {
            $lists = $this->settingService->getLists($apiKey);
        } catch (InvalidApiKeyException $e) {
            return new JsonResponse(['message' => $e->getMessage()], 500);
        } catch (\Exception $e) {
            return new JsonResponse(['message' => self::LOG_MESSAGE_GET_LISTS_FAILED], 500);
        }

        return new JsonResponse($lists);
    }

    /**
     * @Route("/api/v{version}/jettmcnewsletter/get-list", name="api.action.jettmcnewsletter.get-list", methods={"POST"})
     */
    public function getList(Request $request, Context $context): JsonResponse
    {
        $params = $request->request->get('params');
        $apiKey = $params['apiKey'];
        $listId = $params['listId'];

        if ($apiKey === null) {
            return new JsonResponse();
        }

        $lists = $this->settingService->getList($apiKey, $listId);

        return new JsonResponse($lists);
    }

    /**
     * @Route("/api/v{version}/jettmcnewsletter/get-logs", name="api.action.jettmcnewsletter.get-logs", methods={"GET"})
     */
    public function getLogs(Request $request, Context $context): JsonResponse
    {
        $page = (int)$request->get('page');
        $limit = (int)$request->get('limit');
        $salesChannelId = $request->get('salesChannelId');

        $logs = $this->logService->getLogs($salesChannelId, $page, $limit);

        return new JsonResponse($logs);
    }
}
