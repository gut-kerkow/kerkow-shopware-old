<?php

declare(strict_types=1);

namespace Jett\McNewsletter\Service;

use Jett\McNewsletter\Criteria\JettCriteria;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Sorting\FieldSorting;

class LogService
{
    public const LOG_STATUS_SUCCESS = true;
    public const LOG_STATUS_FAILED = false;

    /**
     * @var JettCriteria
     */
    private $criteria;

    public function __construct(
        EntityRepositoryInterface $jettLogRepository,
        JettCriteria $criteria
    ) {
        $this->jettLogRepository = $jettLogRepository;
        $this->criteria = $criteria;
    }

    /**
     * @param string|null $salesChannelId
     * @param bool $status
     * @param string $message
     * @param array|null $payload
     */
    public function saveLog(?string $salesChannelId, bool $status, string $message, ?array $payload = null)
    {
        $this->jettLogRepository->create(
            [
                [
                    'salesChannelId' => $salesChannelId,
                    'status' => $status,
                    'message' => $message,
                    'payload' => (!is_null($payload) ? json_encode($payload) : null),
                ]
            ],
            \Shopware\Core\Framework\Context::createDefaultContext()
        );
    }

    /**
     * @param string|null $salesChannelId
     * @param int $page
     * @param int $limit
     * @return \Shopware\Core\Framework\DataAbstractionLayer\Search\EntitySearchResult
     */
    public function getLogs(?string $salesChannelId, int $page = 1, int $limit = 25)
    {
        $criteria = new Criteria();

        if (!is_null($salesChannelId)) {
            $criteria = $this->criteria->getSalesChannelCriteria($salesChannelId);
        }

        $criteria->setLimit($limit);
        $criteria->setOffset(($page - 1) * $limit);
        $criteria->addSorting(new FieldSorting('createdAt', FieldSorting::DESCENDING));
        $criteria->setTotalCountMode(Criteria::TOTAL_COUNT_MODE_EXACT);

        return $this->jettLogRepository->search($criteria, \Shopware\Core\Framework\Context::createDefaultContext());
    }
}
