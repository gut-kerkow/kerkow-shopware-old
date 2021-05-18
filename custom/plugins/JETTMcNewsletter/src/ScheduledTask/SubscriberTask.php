<?php


namespace Jett\McNewsletter\ScheduledTask;

use Shopware\Core\Framework\MessageQueue\ScheduledTask\ScheduledTask;

class SubscriberTask extends ScheduledTask
{
    public static function getTaskName(): string
    {
        return 'jett.mc_newsletter.subscriber_task';
    }

    public static function getDefaultInterval(): int
    {
        return 60;
    }
}
