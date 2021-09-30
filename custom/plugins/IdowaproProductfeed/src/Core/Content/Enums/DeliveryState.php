<?php declare(strict_types=1);

namespace Productfeed\Core\Content\Enums;

abstract class DeliveryState
{
    const DISABLED = 'delivery_state_disabled';
    const DELIVERED = 'delivery_state_delivered';
    const ERROR = 'delivery_state_error';
    const NOT_DELIVERED_YET = 'delivery_state_not_delivered_yet';


    /**
     * @param string $type
     * @return string
     */
    public static function getFormattedDeliveryState(string $type): string {
       switch($type) {
           case DeliveryState::DISABLED:
               return 'disabled';
           case DeliveryState::DELIVERED:
               return 'delivered';
           case DeliveryState::ERROR:
               return 'error';
           case DeliveryState::NOT_DELIVERED_YET:
               return 'not delivered yet';
           default:
                return '';   
       }
    }
}
