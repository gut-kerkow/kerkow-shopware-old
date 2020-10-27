<?php

declare(strict_types=1);

namespace Kerkow\DeliveryDate\EventListener;

use DateInterval;
use DateTime;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
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

        $event->setParameter('deliveryInfos', $this->getDelierableDate(
            $event->getSalesChannelContext()
        ));
    }



    private function getDelierableDate(SalesChannelContext $context): array
    {
        // Define the deliverable days of the week
        $deliverable_dates = [1, /*monda*/ 3, /*wednesday*/ 5 /*friday*/];

        // define holidays
        $holidays = [
            '24 Dec 2020',
            '25 Dec 2020',
            '26 Dec 2020',
            '31 Dec 2020',
            '01 Jan 2021',
            '08 Mar 2021',
            '02 Apr 2021',
            '05 Apr 2021',
            '01 May 2021',
            '13 May 2021',
            '24 May 2021',
            '03 Oct 2021',
            '24 Dec 2021',
            '25 Dec 2021',
            '26 Dec 2021',
            '31 Dec 2021',
        ];

        // Latest Order hour
        $latest_hour = 11; // Eleven here means 12'o clock

        // DateObject of Today
        $date = new DateTime();


        return $this->getNextDeliverableDay($date, $deliverable_dates, $holidays, $latest_hour, false);
    }

    private function getNextDeliverableDay($date, $deliverable_dates, $holidays, $latest_hour, $holiday_mode)
    {

        if (!$holiday_mode) {
            // Check if order day is itself a holiday. Do it 3 times as it could be maximum 3 holidays in a row
            for ($k = 0; $k < 3; $k++) {
                if (in_array($date->format("d M Y"), $holidays, true)) {
                    // reset latest_hour
                    $latest_hour = 23;
                    // Add a day
                    $date->add(new DateInterval('P1D'));
                }
            }
        }
        $day_of_week = $date->format('w');
        //Check if current time is before latest order hour

        if ($date->format('H') > $latest_hour) {
            // Check if it's friday after latest_hour
            if ($day_of_week >= 5) {

                $date->modify('next tuesday');
            } else {
                // If it's thursday afer latest hour, make monday out of it
                if ($day_of_week == 4) {
                    $date->modify('next monday');
                } else {

                    $date->add(new DateInterval('P2D'));
                }
            }
        } else {
            // check if it saturday or sunday
            if ($day_of_week == 6 || $day_of_week == 0) {
                $date->modify('next tuesday');
            } else {
                // If It's friday before latest_hour, make monday out of it
                if ($day_of_week == 5) {
                    $date->modify('next monday');
                } else {

                    $date->add(new DateInterval('P1D'));
                }
            }
        }

        $day_of_week = $date->format('w');
        $last = clone $date;
        $last->modify('next monday');



        foreach ($deliverable_dates as $day) {

            if ($day >= $day_of_week) {

                // Check if day is holiday
                $days_from_now = $day - $day_of_week;
                $next_deliverable_day = $date->add(new DateInterval('P' . $days_from_now . 'D'));
                $last = $next_deliverable_day;
                if (in_array($next_deliverable_day->format("d M Y"), $holidays, true)) {
                    // reset latest_hour
                    $latest_hour = 23;
                    $this->getNextDeliverableDay($last, $deliverable_dates, $holidays, $latest_hour, true);
                }

                return ["date" => $last]; // found it, return quickly
            }
        }
    }
}
