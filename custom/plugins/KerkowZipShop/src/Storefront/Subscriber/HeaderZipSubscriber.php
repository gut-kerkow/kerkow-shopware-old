<?php

declare(strict_types=1);

namespace Kerkow\ZipShop\Storefront\Subscriber;

use Shopware\Storefront\Pagelet\Header\HeaderPageletLoadedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class HeaderZipSubscriber implements EventSubscriberInterface
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
            HeaderPageletLoadedEvent::class => 'onStorefrontLoaded'
        ];
    }

    public function onStorefrontLoaded(HeaderPageletLoadedEvent $event): void
    {
        if ($this->session->has('postalcode')) {
            //$this->session->clear();

            $postalcode = $this->session->get('postalcode');
            $event->getPagelet()->setExtensions(["postalcode" => $postalcode], ["postalcode_error" => false]);
        } else {
            $event->getPagelet()->setExtensions(["postalcode_error" => false]);
        }
    }
}
