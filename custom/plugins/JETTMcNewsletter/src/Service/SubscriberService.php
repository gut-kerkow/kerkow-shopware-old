<?php

namespace Jett\McNewsletter\Service;

use DateTime;
use DateTimeInterface;
use Jett\McNewsletter\Converter\RecipientToMemberConverter;
use Jett\McNewsletter\Core\API\Client\Client;
use Jett\McNewsletter\Core\API\Exception\InvalidApiKeyException;
use Jett\McNewsletter\Core\API\Exception\ResponseException;
use Jett\McNewsletter\Exception\NoSettingsFoundException;
use Jett\McNewsletter\Exception\NoSubscriberFoundException;
use Jett\McNewsletter\Setting\JettSetting;
use Shopware\Core\Content\Newsletter\Aggregate\NewsletterRecipient\NewsletterRecipientEntity;
use Shopware\Core\Content\Newsletter\SalesChannel\NewsletterSubscribeRoute;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\EntitySearchResult;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\MultiFilter;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\RangeFilter;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Sorting\FieldSorting;
use Shopware\Core\System\SalesChannel\SalesChannelEntity;

class SubscriberService
{
    public const LOG_MESSAGE = 'Subscriber has been synchronized';
    public const LOG_MESSAGE_STATUS_CHANGED = 'Subscriber status has been changed to %s';
    public const LOG_MESSAGE_INVALID_API_KEY = 'The given api key %s is invalid';

    /**
     * @var SettingService
     */
    private $settingsService;

    /**
     * @var EntityRepositoryInterface
     */
    private $salesChannelRepository;

    /**
     * @var EntityRepositoryInterface
     */
    private $newsletterRecipientRepository;

    /**
     * @var RecipientToMemberConverter
     */
    private $recipientToMemberConverter;

    /**
     * @var LogService
     */
    private $logService;

    public function __construct(
        SettingService $settingsService,
        EntityRepositoryInterface $salesChannelRepository,
        EntityRepositoryInterface $newsletterRecipientRepository,
        RecipientToMemberConverter $recipientToMemberConverter,
        LogService $logService
    ) {
        $this->settingsService = $settingsService;
        $this->salesChannelRepository = $salesChannelRepository;
        $this->newsletterRecipientRepository = $newsletterRecipientRepository;
        $this->recipientToMemberConverter = $recipientToMemberConverter;
        $this->logService = $logService;
    }

    public function syncSubscribers(): void
    {
        $salesChannels = $this->getAllChannels();
        /** @var SalesChannelEntity $channel */
        foreach ($salesChannels as $channel) {
            try {
                $settings = $this->settingsService->getSettings($channel->getId());
            } catch (NoSettingsFoundException $e) {
                try {
                    $settings = $this->settingsService->getSettings(null);
                } catch (NoSettingsFoundException $e) {
                    continue;
                }
            }

            if (!$settings->isActive()) {
                continue;
            }

            try {
                $client = $this->getAPIClient($settings);
            } catch (InvalidApiKeyException $e) {
                $this->logService->saveLog
                (
                    $channel->getId(),
                    LogService::LOG_STATUS_FAILED,
                    sprintf(static::LOG_MESSAGE_INVALID_API_KEY, $settings->getApiKey()),
                    ['salesChannel' => $channel->getName()]
                );
                continue;
            }

            $lastSyncRun = $settings->getLastSyncRun();

            if (is_null($lastSyncRun)) {
                $lastSyncRun = new DateTime();
                $lastSyncRun->setTimestamp(0);
            }

            $recipients = $this->getAllRecipientsForChannel($channel->getId(), $lastSyncRun, $settings->getSyncLimit());

            /** @var NewsletterRecipientEntity $recipient */
            foreach ($recipients as $recipient) {
                $this->syncSubscriber($recipient, $settings, $client);
                $lastSyncRun = $recipient->getUpdatedAt() != null ? $recipient->getUpdatedAt() : $recipient->getCreatedAt();
            }

            $settings->setLastSyncRun($lastSyncRun);
            $this->settingsService->saveSetting($settings);
        }
    }

    private function syncSubscriber(NewsletterRecipientEntity $recipient, JettSetting $settings, Client $client): void
    {
        $member = $this->recipientToMemberConverter->convert($recipient);

        try {
            $client->membersCreateOrUpdate($settings->getListId(), $member);
        } catch (ResponseException $e) {
            $this->logService->saveLog
            (
                $recipient->getSalesChannelId(),
                LogService::LOG_STATUS_FAILED,
                static::LOG_MESSAGE,
                [
                    'email' => $this->anonymizeEmail($recipient->getEmail()),
                    'salesChannel' => ($recipient->getSalesChannel() ? $recipient->getSalesChannel()->getName() : null)
                ]
            );

            return;
        }

        $this->logService->saveLog
        (
            $recipient->getSalesChannelId(),
            LogService::LOG_STATUS_SUCCESS,
            static::LOG_MESSAGE,
            [
                'email' => $this->anonymizeEmail($recipient->getEmail()),
                'salesChannel' => ($recipient->getSalesChannel() ? $recipient->getSalesChannel()->getName() : null)
            ]
        );
    }

    private function getAllChannels()
    {
        return $this->salesChannelRepository->search(new Criteria([]), Context::createDefaultContext());
    }

    private function getAllRecipientsForChannel(string $salesChannelId, DateTimeInterface $lastSyncRun, int $syncLimit): EntitySearchResult
    {
        $criteria = new Criteria();
        $criteria->addFilter(
            new MultiFilter(
                MultiFilter::CONNECTION_AND,
                [
                    new EqualsFilter('salesChannelId', $salesChannelId),
                    new MultiFilter(
                        MultiFilter::CONNECTION_OR,
                        [
                            new RangeFilter('updatedAt', [RangeFilter::GT => $lastSyncRun->format('Y-m-d H:i:s.u')]),
                            new MultiFilter(
                                MultiFilter::CONNECTION_AND,
                                [
                                    new RangeFilter('createdAt', [RangeFilter::GT => $lastSyncRun->format('Y-m-d H:i:s.u')]),
                                    new EqualsFilter('updatedAt', null)
                                ]
                            )
                        ]
                    ),
                    new MultiFilter(
                        MultiFilter::CONNECTION_OR,
                        [
                            new EqualsFilter('status', NewsletterSubscribeRoute::STATUS_OPT_IN),
                            new EqualsFilter('status', NewsletterSubscribeRoute::STATUS_OPT_OUT),
                        ]
                    )
                ]
            )
        );

        $criteria->addSorting(new FieldSorting('updatedAt', 'ASC'));
        $criteria->addSorting(new FieldSorting('createdAt', 'ASC'));
        $criteria->setLimit($syncLimit);
        $criteria->addAssociation('salesChannel');

        return $this->newsletterRecipientRepository->search($criteria, Context::createDefaultContext());
    }

    /**
     * @param JettSetting $settings
     * @return Client
     * @throws InvalidApiKeyException
     */
    private function getAPIClient(JettSetting $settings): Client
    {
        return new Client($settings->getApiKey());
    }

    /**
     * @param $salesChannelId
     * @param $email
     * @param $status
     * @throws NoSubscriberFoundException
     */
    public function setSubscriberStatus(string $salesChannelId, string $email, string $status) {

        $criteria = new Criteria();
        $criteria->addFilter(
            new MultiFilter(
                MultiFilter::CONNECTION_AND,
                [
                    new EqualsFilter('salesChannelId', $salesChannelId),
                    new EqualsFilter('email', $email),
                ]
            )
        );

        $result = $this->newsletterRecipientRepository->search($criteria, Context::createDefaultContext());

        if ($result->getTotal() < 1) {
            throw new NoSubscriberFoundException();
        }

        /** @var NewsletterRecipientEntity $recipient */
        $recipient = $result->first();

        $this->newsletterRecipientRepository->update(
            [
                [
                    'id' => $recipient->getId(),
                    'status' => $status
                ]
            ],
            Context::createDefaultContext()
        );

        $this->logService->saveLog
        (
            $recipient->getSalesChannelId(),
            LogService::LOG_STATUS_SUCCESS,
            sprintf(static::LOG_MESSAGE_STATUS_CHANGED, $status),
            [
                'email' => $this->anonymizeEmail($recipient->getEmail()),
                'salesChannel' => ($recipient->getSalesChannel() ? $recipient->getSalesChannel()->getName() : null)
            ]
        );
    }

    /**
     * @param string $str
     * @param int $first
     * @param int $last
     * @return string
     */
    private function mask(string $str, int $first, int $last) {
        $len = strlen($str);
        $toShow = $first + $last;
        return substr($str, 0, $len <= $toShow ? 0 : $first).str_repeat("*", $len - ($len <= $toShow ? 0 : $toShow)).substr($str, $len - $last, $len <= $toShow ? 0 : $last);
    }

    /**
     * @param string $email
     * @return string
     */
    private function anonymizeEmail(string $email) {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return '';
        }

        $mail_parts = explode("@", $email);
        $domain_parts = explode('.', $mail_parts[1]);

        $mail_parts[0] = $this->mask($mail_parts[0], 2, 1); // show first 2 letters and last 1 letter
        $domain_parts[0] = $this->mask($domain_parts[0], 2, 1); // same here
        $mail_parts[1] = implode('.', $domain_parts);

        return implode("@", $mail_parts);
    }
}
