<?php

declare(strict_types=1);

namespace Kerkow\DeliveryDate\Storefront\Subscriber;

use DateTime;
use Shopware\Core\System\SalesChannel\Context\SalesChannelContextPersister;
use Shopware\Storefront\Page\Checkout\Confirm\CheckoutConfirmPageLoadedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class ConfirmDeliveryDateSubscriber implements EventSubscriberInterface
{
    /**
     * @var SalesChannelContextPersister
     */
    private $contextPersister;


    public function __construct(SalesChannelContextPersister $contextPersister)
    {
        $this->contextPersister = $contextPersister;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CheckoutConfirmPageLoadedEvent::class => 'OnProductPageLoaded'
        ];
    }

    public function OnProductPageLoaded(CheckoutConfirmPageLoadedEvent $event): void
    {
        // This functions sets a custom delivery Day for the customer

        $extensions = $event->getPage()->getExtensions();


        // Query for delivery day and slot
        $context = $event->getSalesChannelContext();
        $persistedData = $this->contextPersister->load($context->getToken());
        if (isset($persistedData['deliveryDate'])) {
            $now = new DateTime();
            $createdAt = new DateTime($persistedData['customDeliveryTimestamp']);

            if ($createdAt->diff($now)->i <= 10) {
                $extensions['customDeliveryDate'] = new DateTime($persistedData['deliveryDate']);
                $extensions['createdAt'] = $createdAt->diff($now);
            }
        } else {
            return;
        }


        $event->getPage()->setExtensions($extensions);
    }
}
