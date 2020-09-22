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
        if ($this->session->has('postalcode')) {
            //$this->session->clear();

            $postalcode = $this->session->get('postalcode');
            $event->getPagelet()->setExtensions(["postalcode" => $postalcode]);
        } else {
            $postalcode_error = "not_available";
            $event->getPagelet()->setExtensions(["postalcode_error" => $postalcode_error]);
        }
    }
}
