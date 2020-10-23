<?php

declare(strict_types=1);


namespace Kerkow\DeliveryDate\Storefront\Subscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Shopware\Core\Checkout\Customer\CustomerEvents;
use Shopware\Core\Framework\Event\DataMappingEvent;


class RegisterNewsletterSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents(): array
    {
        return [
            CustomerEvents::MAPPING_REGISTER_CUSTOMER => 'addCustomField'
        ];
    }

    public function addCustomField(DataMappingEvent $event)
    {

        $inputData = $event->getInput();

        $outputData = $event->getOutput();

        $newsletter = $inputData->get('newsletter', false);

        $newsletter = ($newsletter) ? true : false;

        $outputData['newsletter'] = $newsletter;

        $event->setOutput($outputData);

        return true;
    }
}
