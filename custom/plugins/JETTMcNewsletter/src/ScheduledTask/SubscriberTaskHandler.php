<?php


namespace Jett\McNewsletter\ScheduledTask;

use Jett\McNewsletter\Service\SubscriberService;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\MessageQueue\ScheduledTask\ScheduledTaskHandler;

class SubscriberTaskHandler extends ScheduledTaskHandler
{
    /**
     * @var SubscriberService
     */
    private $subscriberService;

    public function __construct(EntityRepositoryInterface $entityRepositoryInterface, SubscriberService $subscriberService)
    {
        parent::__construct($entityRepositoryInterface);
        $this->subscriberService = $subscriberService;
    }

    public static function getHandledMessages(): iterable
    {
        return [SubscriberTask::class];
    }

    public function run(): void
    {
        $this->subscriberService->syncSubscribers();
    }
}
