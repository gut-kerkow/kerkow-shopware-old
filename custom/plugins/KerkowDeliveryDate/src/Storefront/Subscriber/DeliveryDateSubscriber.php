<?php

namespace Kerkow\DeliveryDate\Storefront\Subscriber;

use DateTime;
use Kerkow\DeliveryDate\Helper\DeliveryDateHelper;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Page\Checkout\Cart\CheckoutCartPageLoadedEvent;
use Shopware\Storefront\Page\Checkout\Confirm\CheckoutConfirmPageLoadedEvent;
use Shopware\Storefront\Page\Product\ProductPageLoadedEvent;
use Shopware\Storefront\Page\PageLoadedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class DeliveryDateSubscriber implements EventSubscriberInterface
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
            CheckoutConfirmPageLoadedEvent::class => 'onPageLoaded',
            ProductPageLoadedEvent::class => 'onPageLoaded',
            CheckoutCartPageLoadedEvent::class => 'onPageLoaded'
        ];
    }

    /**
     * ...
     *
     * @param PageLoadedEvent $event
     * @param SalesChannelContext $context
     */
    public function onPageLoaded($event)
    {

        $context = $event->getSalesChannelContext();

        // Calculate Delivery Time for each shipping method
        $date = new DateTime();


        $shippingMethods = [];
        // Fetch all available shipping methods

        if (null != $context->getCustomer()) {
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
            $data = date("d M Y", $data);
            array_push($general_holidays, $data);
        }

        $earliestDeliveryDates = [];
        foreach ($shippingMethods as $method) {
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
                $data = date("d M Y", $data);
                array_push($custom_holidays, $data);
            }

            // Fetch Packingdays
            $packing_weekdays = [];
            if (isset($context->getSalesChannel()->getCustomFields()["custom_deliverydate_packDays"])) {
                $packing_weekdays = $context->getSalesChannel()->getCustomFields()["custom_deliverydate_packDays"];
            }

            // Fetch deliverable weekdays
            $deliverable_weekdays = [];
            if (isset($method->getCustomFields()["custom_delivery_dates_weekdays"])) {
                $deliverable_weekdays = $method->getCustomFields()["custom_delivery_dates_weekdays"];
            }

            // Fetch deadline hour
            $deadline = 0;
            if (isset($method->getCustomFields()["custom_delivery_dates_deadline"])) {
                $deadline = $method->getCustomFields()["custom_delivery_dates_deadline"];
            }

            // Fetch number of days is needed to pack an order
            $prepDays = 0;
            if (isset($method->getCustomFields()["custom_delivery_dates_prepDays"])) {
                $prepDays = $method->getCustomFields()["custom_delivery_dates_prepDays"];
            }

            // Fetch the reion to display
            $region = "";
            if (isset($method->getCustomFields()["custom_delivery_dates_region"])) {
                $region = $method->getCustomFields()["custom_delivery_dates_region"];
            }

            array_push($earliestDeliveryDates, $this->deliveryDateHelper->getNextDeliverableDay($date, $packing_weekdays, $general_holidays, $custom_holidays, $deliverable_weekdays, $deadline, $region, $prepDays));
        }

        // $deliverable_dates, $holidays, $latest_hour, $holiday_mode, $isAngel, $customWeekdays

        // assign to page
        $event->getPage()->assign([
            'deliveryDateData' => $earliestDeliveryDates
        ]);
    }
}
