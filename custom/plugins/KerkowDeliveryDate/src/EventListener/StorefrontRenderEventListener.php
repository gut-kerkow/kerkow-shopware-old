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

        $event->setParameter('deliveryInfos', $this->getDeliverableDate(
            $event->getSalesChannelContext()
        ));
    }



    private function getDeliverableDate(SalesChannelContext $context): array
    {


        // define holidays
        $holidays = [
            '22 Dec 2020',
            '23 Dec 2020',
            '24 Dec 2020',
            '25 Dec 2020',
            '26 Dec 2020',
            '31 Dec 2020',
            '01 Jan 2021',
            '08 Mar 2021',
            '30 Mar 2021',
            '02 Apr 2021',
            '05 Apr 2021',
            '01 May 2021',
            '13 May 2021',
            '24 May 2021',
            '03 Oct 2021',
            '23 Dec 2021',
            '24 Dec 2021',
            '25 Dec 2021',
            '26 Dec 2021',
            '27 Dec 2021',
            '31 Dec 2021',
            '01 Jan 2022',
        ];

        // additional angel holidays
        $angel_holidays = [
            '30 Nov 2021',
            '02 Dec 2021',
            '07 Dec 2021',
            '09 Dec 2021',
            '14 Dec 2021',
            '16 Dec 2021',
            '28 Dec 2021',
            '30 Dec 2021',
        ];

        $deliveryInfos = array();
        $isAngel = false;
        for ($k = 0; $k < 2; $k++) {
            if ($isAngel) {
                $holidays = array_merge($holidays, $angel_holidays);
            }

            // Define the deliverable days of the week
            if ($isAngel) {
                $deliverable_dates = [1, /*monday*/ 2, /*tuesday*/ 3, /*wednesday*/ 4, /*wednesday*/ 5, /*friday*/];
            } else {
                $deliverable_dates = [2, /*tuesday*/ 3, /*wednesday*/ 4, /*wednesday*/ 5, /*friday*/];
            }



            // Latest Order hour
            if ($isAngel) {
                $latest_hour = 5; // One here means 2'o clock in the morning
            } else {
                $latest_hour = 1; // One here means 2'o clock in the morning
            }


            // DateObject of Today
            //$date = new DateTime();
            $date = new DateTime();

            $deliveryInfos[] = $this->getNextDeliverableDay($date, $deliverable_dates, $holidays, $latest_hour, false, $isAngel);
            $isAngel = true;
        }


        return $deliveryInfos;
    }

    private function getNextDeliverableDay($date, $deliverable_dates, $holidays, $latest_hour, $holiday_mode, $isAngel)
    {

        if (!$holiday_mode) {
            // Check if packing-day (delivery date -1 day) is itself a holiday. Do it 3 times as it could be maximum 3 holidays in a row
            for ($k = 0; $k < 3; $k++) {

                if (in_array($date->format("d M Y"), $holidays, true) && !$isAngel) {
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
            // Check if it's friday/thursday after latest_hour            
            if ($day_of_week >= 4) {
                if ($isAngel) {
                    $date->modify('next monday');
                    if ($day_of_week >= 5) {
                        $date->modify('next wednesday');
                    }
                } else {
                    $date->modify('next tuesday');
                }
            } else {
                // If it's friday afer latest hour, make tuesday out of it

                $date->add(new DateInterval('P2D'));
            }
        } else {
            // check if it saturday or sunday
            if ($day_of_week >= 5 || $day_of_week == 0) {
                if ($isAngel) {
                    $date->modify('next monday');
                    if ($day_of_week >= 6 || $day_of_week == 0) {
                        $date->modify('next wednesday');
                    }
                } else {
                    $date->modify('next tuesday');
                }
            } else {

                $date->add(new DateInterval('P1D'));
            }
        }

        $day_of_week = $date->format('w');
        $last = clone $date;
        $last->modify('next tuesday');
        $packing_day = clone $date;
        if ($isAngel) {
            $last->modify('next monday');
        } else {
            $packing_day = $packing_day->sub(new DateInterval('P1D'));
        }

        foreach ($deliverable_dates as $day) {

            if ($day >= $day_of_week) {

                // Check if day is holiday
                $days_from_now = $day - $day_of_week;
                $next_deliverable_day = $date->add(new DateInterval('P' . $days_from_now . 'D'));
                $last = $next_deliverable_day;

                if (in_array($next_deliverable_day->format("d M Y"), $holidays, true)) {
                    // reset latest_hour
                    $latest_hour = 23;
                    $this->getNextDeliverableDay($last, $deliverable_dates, $holidays, $latest_hour, true, $isAngel);
                } elseif (in_array($packing_day->format("d M Y"), $holidays, true)) {
                    // reset latest_hour
                    $latest_hour = 23;
                    $this->getNextDeliverableDay($last, $deliverable_dates, $holidays, $latest_hour, true, $isAngel);
                }

                $area = $isAngel ? "berlin" : "germany";

                return ["date" => $last, "server_time" => new DateTime(), "area" => $area]; // found it, return quickly
            }
        }
    }
}
