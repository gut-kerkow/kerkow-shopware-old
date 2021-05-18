<?php

declare(strict_types=1);

namespace Jett\McNewsletter\Service;

use Jett\McNewsletter\Core\API\Client\Client;
use Jett\McNewsletter\Core\API\Transfer\ResponseList;
use Jett\McNewsletter\Core\API\Transfer\Webhook;
use Jett\McNewsletter\Criteria\JettCriteria;
use Jett\McNewsletter\Setting\JettSetting;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\System\SalesChannel\Aggregate\SalesChannelDomain\SalesChannelDomainEntity;

class WebhookService
{
    /**
     * @var EntityRepositoryInterface
     */
    private $jettSettingRepository;
    /**
     * @var JettCriteria
     */
    private $criteria;
    /**
     * @var EntityRepositoryInterface
     */
    private $salesChannelDomainRepository;

    public function __construct(
        EntityRepositoryInterface $jettSettingRepository,
        JettCriteria $criteria,
        EntityRepositoryInterface $salesChannelDomainRepository
    )
    {
        $this->jettSettingRepository = $jettSettingRepository;
        $this->criteria = $criteria;
        $this->salesChannelDomainRepository = $salesChannelDomainRepository;
    }


    /**
     * @param JettSetting $setting
     * @param JettSetting $currentSetting
     * @throws \Jett\McNewsletter\Core\API\Exception\InvalidApiKeyException
     * @throws \Jett\McNewsletter\Core\API\Exception\ResponseException
     */
    public function handleWebhook(JettSetting $setting, ?JettSetting $currentSetting)
    {
        if ($currentSetting && $setting->getListId() != $currentSetting->getListId()) {

            $webhooks = $this->getWebhooks($currentSetting);

            foreach ($webhooks->items as $webhook) {
                if (strpos($webhook->url, 'JettMcNewsletter') !== false) {
                    $this->deleteWebhook($currentSetting, $webhook->id);
                }
            }
        }

        $this->registerWebhook($setting);
    }

    /**
     * @param JettSetting $setting
     * @return ResponseList
     * @throws \Jett\McNewsletter\Core\API\Exception\InvalidApiKeyException
     * @throws \Jett\McNewsletter\Core\API\Exception\ResponseException
     */
    private function getWebhooks(JettSetting $setting)
    {
        $client = new Client($setting->getApiKey());
        return $client->webhookList($setting->getListId());
    }


    /**
     * @param JettSetting $setting
     * @param string $webhookId
     * @return ResponseList
     * @throws \Jett\McNewsletter\Core\API\Exception\InvalidApiKeyException
     * @throws \Jett\McNewsletter\Core\API\Exception\ResponseException
     */
    private function deleteWebhook(JettSetting $setting, string $webhookId)
    {
        $client = new Client($setting->getApiKey());
        return $client->webhookDelete($setting->getListId(), $webhookId);
    }

    /**
     * @param JettSetting $setting
     */
    private function registerWebhook(JettSetting $setting)
    {
        $client = new Client($setting->getApiKey());

        $urls = $this->buildBasePaths($setting);

        $webhooks = $this->getWebhooks($setting);

        $uniqueId = uniqid();

        foreach ($urls as $salesChannelId => $url) {

            $jettMcWebhookFound = false;

            foreach ($webhooks->items as $webhook) {
                if (strpos($webhook->url, $salesChannelId) !== false) {
                    $jettMcWebhookFound = true;
                }
            }

            if ($jettMcWebhookFound) {
                continue;
            }

            $urlBuilded = $url . '/JettMcNewsletter?jettId=' . $uniqueId . '&salesChannelId=' . $salesChannelId;

            $webhook = new Webhook();
            $webhook->listId = $setting->getListId();
            $webhook->url = $urlBuilded;

            $response = $client->webhookCreate($webhook);

            $this->jettSettingRepository->update(
                [
                    [
                        'id' => $setting->getId(),
                        'webhookId' => $response->id,
                        'webhookUrlId' => $uniqueId
                    ],
                ],
                \Shopware\Core\Framework\Context::createDefaultContext()
            );
        }
    }

    /**
     * @param JettSetting $setting
     * @return array
     */
    private function buildBasePaths(JettSetting $setting)
    {
        $criteria = new Criteria();
        $urls = [];

        if (!is_null($setting->getSalesChannelId())) {
            $criteria = $this->criteria->getSalesChannelCriteria($setting->getSalesChannelId());
        }

        $salesChannelDomainResult = $this->salesChannelDomainRepository->search($criteria, \Shopware\Core\Framework\Context::createDefaultContext());

        /** @var SalesChannelDomainEntity $salesChannelDomain */
        foreach ($salesChannelDomainResult->getElements() as $salesChannelDomain) {
            $urls[$salesChannelDomain->getSalesChannelId()] = $salesChannelDomain->getUrl();
        }

        return $urls;
    }
}
