<?php

declare(strict_types=1);

namespace Kerkow\ZipShop\Storefront\Subscriber;

use Shopware\Storefront\Pagelet\Header\HeaderPageletLoadedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class HeaderZipSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents(): array
    {
        return [
            HeaderPageletLoadedEvent::class => 'onStorefrontLoaded'
        ];
    }

    public function onStorefrontLoaded(HeaderPageletLoadedEvent $event): void
    {
        $extensions = $event->getPagelet()->getExtensions();
        if ($event->getRequest()->cookies->has('postalcode')) {
            //$this->session->clear();
            $postalcode = $event->getRequest()->cookies->get('postalcode');
            $postalcode_valid = $event->getRequest()->cookies->get('postalcode_valid');
            if ($postalcode_valid) {
                $extensions['postalcode_error'] = false;
            } else {
                $extensions['postalcode_error'] = true;
            }
            $extensions['postalcode'] = $postalcode;
            $event->getPagelet()->setExtensions($extensions);
        } else {
            $extensions['postalcode_error'] = false;
            $event->getPagelet()->setExtensions($extensions);
        }
    }
}
