<?php

declare(strict_types=1);

namespace Kerkow\DeliveryDate\Storefront\Subscriber;

use Shopware\Core\Checkout\Cart\Event\CheckoutOrderPlacedEvent;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;


class OrderDeliveryDateSubscriber implements EventSubscriberInterface
{
    /** @var RequestStack */
    private $requestStack;



    /**
     * @var EntityRepositoryInterface
     */
    protected $orderRepository;

    public function __construct(RequestStack $requestStack, EntityRepositoryInterface $orderRepository)
    {
        $this->requestStack = $requestStack;
        $this->orderRepository = $orderRepository;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CheckoutOrderPlacedEvent::class => 'onCheckoutFinish',
        ];
    }



    public function onCheckoutFinish(CheckoutOrderPlacedEvent $event): void
    {
        // This function writes the Delivery Date to database

        $order = $event->getOrder();
        $customFields = $order->getCustomFields();
        $request = $this->requestStack->getCurrentRequest();
        $context = $event->getContext();
        $customFields["delivery_date"] = $request->request->get("deliveryDate");
        if ($request->request->has("deliverySlot")) {
            $customFields["delivery_slot"] = $request->request->get("deliverySlot");
        }

        $this->orderRepository->upsert(
            [
                [
                    'id' => $order->getId(),
                    'customFields' => $customFields,
                ],
            ],
            $context
        );

        $extensions["request"] = $request;
    }
}
