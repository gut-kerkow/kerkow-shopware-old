<?php

declare(strict_types=1);

namespace Kerkow\ZipShop\Storefront\Subscriber;

use Shopware\Storefront\Pagelet\Footer\FooterPageletLoadedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class FooterZipSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents(): array
    {
        return [
            FooterPageletLoadedEvent::class => 'onStorefrontLoaded'
        ];
    }

    public function onStorefrontLoaded(FooterPageletLoadedEvent $event): void
    {
        $pagelet = $event->getPagelet();
        $extensions = $event->getPagelet()->getExtensions();

        if ($event->getRequest()->cookies->has('postalcode_denied')) {
            $extensions['hide_zip_modal'] = true;
            $pagelet->setExtensions($extensions);
            return;
        }
        if ($event->getRequest()->cookies->has('postalcode')) {
            $postalcode = $event->getRequest()->cookies->get('postalcode');
            $extensions['postalcode'] = $postalcode;
            $pagelet->setExtensions($extensions);
        }
    }
}
