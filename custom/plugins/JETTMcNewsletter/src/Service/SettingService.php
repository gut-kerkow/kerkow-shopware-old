<?php

declare(strict_types=1);

namespace Jett\McNewsletter\Service;

use Jett\McNewsletter\Core\API\Client\Client;
use Jett\McNewsletter\Core\API\Transfer\Audience;
use Jett\McNewsletter\Core\API\Transfer\ResponseList;
use Jett\McNewsletter\Criteria\JettCriteria;
use Jett\McNewsletter\Exception\NoSettingsFoundException;
use Jett\McNewsletter\Setting\JettSetting;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;

class SettingService
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
     * SettingService constructor.
     * @param EntityRepositoryInterface $jettSettingRepository
     * @param JettCriteria $criteria
     */
    public function __construct(
        EntityRepositoryInterface $jettSettingRepository,
        JettCriteria $criteria
    ) {
        $this->jettSettingRepository = $jettSettingRepository;
        $this->criteria = $criteria;
    }

    /**
     * @param string $apiKey
     * @return \Jett\McNewsletter\Core\API\Transfer\ResponseList
     * @throws \Jett\McNewsletter\Core\API\Exception\InvalidApiKeyException
     * @throws \Jett\McNewsletter\Core\API\Exception\ResponseException
     */
    public function getLists(string $apiKey): ResponseList
    {
        $client = new Client($apiKey);
        return $client->audienceList();
    }

    /**
     * @param string $apiKey
     * @param string $listId
     * @return ResponseList
     * @throws \Jett\McNewsletter\Core\API\Exception\InvalidApiKeyException
     * @throws \Jett\McNewsletter\Core\API\Exception\ResponseException
     */
    public function getList(string $apiKey, string $listId): Audience
    {
        $client = new Client($apiKey);
        return $client->audienceGet($listId);
    }

    /**
     * @param string|null $salesChannelId
     * @return \Shopware\Core\Framework\DataAbstractionLayer\Search\EntitySearchResult
     * @throws NoSettingsFoundException
     */
    public function getSettings(?string $salesChannelId): JettSetting
    {
        $criteria = $this->criteria->getSalesChannelCriteria($salesChannelId);
        $result = $this->jettSettingRepository->search($criteria, \Shopware\Core\Framework\Context::createDefaultContext());

        if ($result->getTotal() < 1) {
            $criteria = $this->criteria->getSalesChannelCriteria(null);
            $result = $this->jettSettingRepository->search($criteria, \Shopware\Core\Framework\Context::createDefaultContext());

            if ($result->getTotal() < 1) {
                throw new NoSettingsFoundException();
            }
        }

        return $result->first();
    }

    /**
     * @param JettSetting $setting
     * @return JettSetting
     * @throws \Jett\McNewsletter\Core\API\Exception\InvalidApiKeyException
     * @throws \Jett\McNewsletter\Core\API\Exception\ResponseException
     */
    public function saveSetting(JettSetting $setting): JettSetting
    {
        try {
            $currentSetting = $this->getSettings($setting->getSalesChannelId());

            $this->jettSettingRepository->update(
                [
                    [
                        'id' => $currentSetting->getId(),
                        'salesChannelId' => $setting->getSalesChannelId(),
                        'active' => $setting->isActive(),
                        'apiKey' => $setting->getApiKey(),
                        'listId' => $setting->getListId(),
                        'syncLimit' => $setting->getSyncLimit(),
                        'lastSyncRun' => $setting->getLastSyncRun(),
                        'doiOption' => $setting->getDoiOption()
                    ]
                ],
                \Shopware\Core\Framework\Context::createDefaultContext()
            );

        } catch (NoSettingsFoundException $e) {
            $this->jettSettingRepository->create(
                [
                    [
                        'salesChannelId' => $setting->getSalesChannelId(),
                        'active' => $setting->isActive(),
                        'apiKey' => $setting->getApiKey(),
                        'listId' => $setting->getListId(),
                        'syncLimit' => $setting->getSyncLimit(),
                        'lastSyncRun' => $setting->getLastSyncRun(),
                        'doiOption' => $setting->getDoiOption()
                    ]
                ],
                \Shopware\Core\Framework\Context::createDefaultContext()
            );
        }

        return $setting;
    }
}
