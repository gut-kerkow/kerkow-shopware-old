<?php

declare(strict_types=1);

namespace Kerkow\ZipShop\Storefront\Subscriber;

use Shopware\Storefront\Pagelet\Footer\FooterPageletLoadedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class FooterZipSubscriber implements EventSubscriberInterface
{

    /**
     * @var Session
     */
    private $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

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
        if ($this->session->has('postalcode_denied')) {
            $extensions['hide_zip_modal'] = true;
            $pagelet->setExtensions($extensions);
            return;
        }
        if ($this->session->has('postalcode')) {
            $postalcode = $this->session->get('postalcode');
            $extensions['postalcode'] = $postalcode;
            $pagelet->setExtensions($extensions);
        }
    }
}
