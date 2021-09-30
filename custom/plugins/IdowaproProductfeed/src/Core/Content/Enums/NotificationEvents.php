<?php declare(strict_types=1);

namespace Productfeed\Core\Content\Enums;

abstract class NotificationEvents
{
    const CREATE_SUCCESS = 'notification_events_create_success';
    const CREATE_ERROR = 'notification_events_create_error';
    const DELIVERY_SUCCESS = 'notification_events_delivery_success';
    const DELIVERY_ERROR = 'notification_events_delivery_error';
}
