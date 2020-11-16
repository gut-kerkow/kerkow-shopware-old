<?php

declare(strict_types=1);

namespace Kerkow\ZipShop\Storefront\Subscriber;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Storefront\Page\Checkout\Register\CheckoutRegisterPageLoadedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class CheckoutRegisterPageSubscriber implements EventSubscriberInterface
{


    public function __construct(EntityRepositoryInterface $postalcodeRepository)
    {
        $this->postalcodeRepository = $postalcodeRepository;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CheckoutRegisterPageLoadedEvent::class => 'onCheckoutRegisterLoaded'
        ];
    }

    public function onCheckoutRegisterLoaded(CheckoutRegisterPageLoadedEvent $event): void
    {
        $extensions = $event->getPage()->getExtensions();
        if ($event->getRequest()->cookies->has('postalcode')) {
            $postalcode = $event->getRequest()->cookies->get('postalcode');
            // Check once again if posatlcode is valid
            // Call the service to query the zip

            /** @var EntityCollection $entities */
            $query = $this->postalcodeRepository->search(
                (new Criteria())->addFilter(new EqualsFilter('zip', $postalcode)),
                \Shopware\Core\Framework\Context::createDefaultContext()
            )->first();
            // Check if user entered a valid zip
            if ($query) {
                $result = $query;
                $extensions['postalcode_valid'] = true;
            } else {
                // Postalcode saved in session was not valid
                $extensions['postalcode_valid'] = false;
                $result = $postalcode;
            }

            $extensions['postalcode'] = $result;
            $event->getPage()->setExtensions($extensions);
        } else {
            $extensions['postalcode_valid'] = false;
            $event->getPage()->setExtensions($extensions);
        }
    }
}
