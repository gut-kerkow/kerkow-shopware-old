<?php

namespace Kerkow\DeliveryDate\Helper;

use DateInterval;
use DateTime;

class DeliveryDateHelper
{


    public function getNextDeliverableDay($date, $packing_weekdays, $general_holidays, $custom_holidays, $deliverable_weekdays, $deadline, $region, $prepDays)
    {
        // Merge General and custom holidays
        $holidays = array_merge($general_holidays, $custom_holidays);

        //Check if current time is before latest order hour
        $earliest = clone $date;

        // First Check if the given date is a packing day
        // if its after the deadline, take the next day
        if ($earliest->format('H') > ($deadline - 1)) {
            $earliest->add(new DateInterval('P1D'));
        }

        $day_of_week = strtolower($earliest->format('l'));
        $packday = false;
        do {
            if ((in_array($day_of_week, $packing_weekdays, true))) {
                $packday = true;
            } else {
                $earliest->add(new DateInterval('P1D'));
                $day_of_week = strtolower($earliest->format('l'));
            }
        } while ($packday == false);


        // Now add the duation of delivery        
        $earliest->add(new DateInterval('P' . ($prepDays) . 'D'));

        $day_of_week = strtolower($earliest->format('l'));

        //return ["hour" => $date->format('H'), "day of week" => $day_of_week, "date" => $earliest, "general_holidays" => $general_holidays, "custom_holidays" => $custom_holidays, "deliverable_weekdays" => $deliverable_weekdays, "deadline" => $deadline, "prepDays" => $prepDays, "server_time" => new DateTime(), "area" => $region, "custom" => $deliverable_weekdays]; // found it, return quickly

        // Check if day is a deliverable weekday

        $delivery_date = false;
        do {
            if ((in_array($day_of_week, $deliverable_weekdays, true)) && (in_array($earliest->format("d M Y"), $holidays, true) == false)) {
                $delivery_date = true;
            } else {
                $earliest->add(new DateInterval('P1D'));
                $day_of_week = strtolower($earliest->format('l'));
            }
        } while ($delivery_date == false);



        return ["date" => $earliest, "server_time" => new DateTime(), "area" => $region]; // found it, return quickly

    }
}
