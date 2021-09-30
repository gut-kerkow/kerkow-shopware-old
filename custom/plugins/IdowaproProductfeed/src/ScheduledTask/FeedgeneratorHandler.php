<?php declare(strict_types=1);

namespace Productfeed\ScheduledTask;


use Productfeed\Core\Content\Enums\ExecutionType;
use Productfeed\Service\ProductfeedService;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\MessageQueue\ScheduledTask\ScheduledTaskHandler;

class FeedgeneratorHandler extends ScheduledTaskHandler
{

/** @var EntityRepositoryInterface $productfeedRepository */
    protected $productfeedRepository;

    /** @var ProductfeedService $productfeedService */
    protected $productfeedService;

    public function __construct(
        EntityRepositoryInterface $scheduledTaskRepository,
        EntityRepositoryInterface $productfeedRepository,
        ProductfeedService $productfeedService
    )
    {
        parent::__construct($scheduledTaskRepository);
        $this->productfeedRepository = $productfeedRepository;
        $this->productfeedService = $productfeedService;
    }


    public static function getHandledMessages(): iterable
    {
        return [ FeedgeneratorTask::class ];
    }

    public function run(): void
    {
        $this->productfeedService->createProductfeed(ExecutionType::CRON, null, Context::createDefaultContext());
    }
}
