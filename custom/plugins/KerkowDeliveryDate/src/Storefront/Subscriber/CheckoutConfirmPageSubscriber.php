<?php

namespace Kerkow\DeliveryDate\Storefront\Subscriber;

use DateInterval;
use DateTime;
use Kerkow\DeliveryDate\Helper\DeliveryDateHelper;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Page\Checkout\Confirm\CheckoutConfirmPageLoadedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class CheckoutConfirmPageSubscriber implements EventSubscriberInterface
{

    /**
     * @var DeliveryDateHelper
     */
    private $deliveryDateHelper;

    public function __construct(
        DeliveryDateHelper $deliveryDateHelper
    ) {
        $this->deliveryDateHelper = $deliveryDateHelper;
    }

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents(): array
    {
        return [
            CheckoutConfirmPageLoadedEvent::class => 'onPageLoaded'
        ];
    }

    /**
     * ...
     *
     * @param CheckoutConfirmPageLoadedEvent $event
     * @param SalesChannelContext $context
     */
    public function onPageLoaded(CheckoutConfirmPageLoadedEvent $event)
    {

        $configData = [];

        $context = $event->getSalesChannelContext();

        // Calculate Delivery Time for each shipping method
        $date = new DateTime();

        $shippingMethods = [];
        // Fetch all available shipping methods
        if (null !== $context->getShippingMethod()) {
            array_push($shippingMethods, $context->getShippingMethod());
        } else {
            $shippingMethods = $event->getPage()->getSalesChannelShippingMethods();
        }

        // Fetch general holidays from SalesChannel
        $generalHolidayData = [];
        if (isset($context->getSalesChannel()->getCustomFields()["custom_deliverydate_generalHolidays"])) {
            $generalHolidayData = explode(",", $context->getSalesChannel()->getCustomFields()["custom_deliverydate_generalHolidays"]);
        }

        // Create the array
        $general_holidays = [];

        // Transform input array to date format
        foreach ($generalHolidayData as $data) {
            if (!strtotime($data)) {
                continue;
            }
            $data = strtotime($data);
            $data = date("Y-m-d", $data);
            array_push($general_holidays, $data);
        }


        $method = $context->getShippingMethod();
        $salesChannel = $context->getSalesChannel();

        // Get custom holiday for shipping method


        $customHolidayData = [];
        if (isset($method->getCustomFields()["custom_delivery_dates_list"])) {
            $customHolidayData = explode(",", $method->getCustomFields()["custom_delivery_dates_list"]);
        }

        // Create the array
        $custom_holidays = [];

        // Transform input array to date format
        foreach ($customHolidayData as $data) {
            if (!strtotime($data)) {
                continue;
            }
            $data = strtotime($data);
            $data = date("Y-m-d", $data);
            array_push($custom_holidays, $data);
        }

        $configData["holidays"] = array_merge($custom_holidays, $general_holidays);


        // Fetch deliverable weekdays
        $deliverable_weekdays = [];
        if (isset($method->getCustomFields()["custom_delivery_dates_weekdays"])) {
            $deliverable_weekdays = $method->getCustomFields()["custom_delivery_dates_weekdays"];
        }

        $configData["weekdays"] = $deliverable_weekdays;

        // Fetch the reion to display
        $preOrderRange = 7;
        if (isset($salesChannel->getCustomFields()["custom_deliverydate_preOrderRange"])) {
            $preOrderRange = $salesChannel->getCustomFields()["custom_deliverydate_preOrderRange"];
        }

        $endOfOrderRange = clone $date;
        $endOfOrderRange->add(new DateInterval('P' . $preOrderRange . 'D'));

        $configData["endOfRange"] = $endOfOrderRange->format("Y-m-d");


        // assign to page
        $event->getPage()->assign([
            'endOfOrderRange' => $configData
        ]);
    }
}
