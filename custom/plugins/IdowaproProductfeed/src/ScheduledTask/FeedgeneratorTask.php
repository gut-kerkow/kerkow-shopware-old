<?php declare(strict_types=1);



namespace Productfeed\ScheduledTask;

use Shopware\Core\Framework\MessageQueue\ScheduledTask\ScheduledTask;

class FeedgeneratorTask extends ScheduledTask
{

    public static function getTaskName(): string
    {
        return 'productfeed.feedgenerator';
    }

    /**
     * @inheritDoc
     */
    public static function getDefaultInterval(): int
    {
        return 300;
    }
}
