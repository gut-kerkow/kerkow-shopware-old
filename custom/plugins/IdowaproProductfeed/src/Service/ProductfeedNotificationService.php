<?php declare(strict_types=1);

namespace Productfeed\Service;

use Monolog\Logger;
use Productfeed\Core\Content\Enums\NotificationEvents;
use Productfeed\Core\Content\File\FileEntity;
use Productfeed\Core\Content\NotificationEmail\NotificationEmailEntity;
use Productfeed\Core\Content\Productfeed\ProductfeedEntity;
use Shopware\Core\Content\MailTemplate\Exception\SalesChannelNotFoundException;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Exception\InconsistentCriteriaIdsException;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\System\SalesChannel\SalesChannelEntity;

class ProductfeedNotificationService
{
    /** @var MailService */
    protected $mailService;

    /** @var EntityRepositoryInterface */
    protected $notificationEmailRepository;

    /**
     * NotificationService constructor.
     * @param MailService $mailService
     */
    public function __construct(
        ProductfeedMailService $mailService,
        EntityRepositoryInterface $notificationEmailRepository
    )
    {
        $this->mailService = $mailService;
        $this->notificationEmailRepository = $notificationEmailRepository;
    }

    /**
     * @param string $event
     * @param FileEntity $file
     * @param SalesChannelEntity $salesChannel
     * @param ProductfeedEntity $feed
     * @throws InconsistentCriteriaIdsException
     * @throws SalesChannelNotFoundException
     */
    public function notifyEvent(
        string $event,
        FileEntity $file,
        ProductfeedEntity $feed,
        Logger $logger
    ): void {
        if (!$feed->isNotificationsEnabled()) {
            return;
        }
        // end function if given NotificationEvent is not marked
        switch($event) {
            case NotificationEvents::CREATE_SUCCESS:
                if (!$feed->isMessageWhenCreateSuccess()) {
                    return;
                }
                break;
            case NotificationEvents::CREATE_ERROR:
                if (!$feed->isMessageWhenCreateError()) {
                    return;
                }
                break;
            case NotificationEvents::DELIVERY_SUCCESS:
                if (!$feed->isMessageWhenDeliverySuccess()) {
                    return;
                }
                break;
            case NotificationEvents::DELIVERY_ERROR:
                if (!$feed->isMessageWhenDeliveryError()) {
                    return;
                }
                break;
        }

        /** @var string[] $result */
        $result = $this->searchEmailAddressesForFile($file, $event);
        if (!empty($result)) {
            $this->mailService->sendEmails($file, $result, $feed->getSalesChannel(), $logger);
        }
    }

    /**
     * @param FileEntity $file
     * @param string $notificationEvent
     * @return string[]
     * @throws InconsistentCriteriaIdsException
     */
    private function searchEmailAddressesForFile(FileEntity $file, string $notificationEvent)
    {
        /** @var NotificationEmailEntity[] $elements */
        $elements = $this->notificationEmailRepository->search(new Criteria(), Context::createDefaultContext())
            ->getEntities()->getElements();

        $result = [];
        foreach ($elements as $element) {
            if ($element->getProductfeedId() === $file->getProductfeedId()) {
                $result[] = $element->getEmailAddress();
            }
        }
        return $result;
    }
}
