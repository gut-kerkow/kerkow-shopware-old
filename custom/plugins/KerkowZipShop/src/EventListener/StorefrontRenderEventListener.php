<?php

declare(strict_types=1);

namespace Kerkow\ZipShop\EventListener;

use Shopware\Storefront\Event\StorefrontRenderEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class StorefrontRenderEventListener implements EventSubscriberInterface
{


    public static function getSubscribedEvents(): array
    {
        return [
            StorefrontRenderEvent::class       => 'onRender'
        ];
    }

    public function onRender(StorefrontRenderEvent $event): void
    {
        // Read the Cookies
        $cookies = $event->getRequest()->cookies;

        $zipData = [];
        // Set the params
        if ($cookies->has("postalcode_denied")) {
            $zipData["doNotAskAgain"] = true;
        }
        if ($cookies->has("postalcode")) {
            $zipData["doNotAskAgain"] = true;
            $zipData["postalcode"] = $cookies->get('postalcode');
        }
        if ($cookies->has("postalcode_valid")) {
            $zipData["postalcodeValid"] = $cookies->get("postalcode_valid");
        }
        $event->setParameter("customerZip", $zipData);
    }
}
