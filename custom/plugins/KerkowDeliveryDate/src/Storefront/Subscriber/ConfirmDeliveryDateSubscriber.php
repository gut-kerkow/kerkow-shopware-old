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
            $shippingMethod = $event->getSalesChannelContext()->getShippingMethod()->getName();
            $shippingNotChanged = $persistedData["shippingMethodBeforeChange"] == $shippingMethod;
            if (($createdAt->diff($now)->i <= 10) && $shippingNotChanged) {
                $extensions['customDeliveryDate'] = new DateTime($persistedData['deliveryDate']);
                if ($shippingMethod == "Angel") {
                    if (array_key_exists("deliverySlot", $persistedData)) {
                        $extensions['customDeliverySlot'] = $persistedData['deliverySlot'];
                    } else {
                        $extensions['customDeliverySlot'] = "18to20";
                    }
                }
                $extensions['createdAt'] = $createdAt->diff($now);
            }
        } else {
            return;
        }


        $event->getPage()->setExtensions($extensions);
    }
}
