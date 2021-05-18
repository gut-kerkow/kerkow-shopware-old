<?php


namespace Jett\McNewsletter\Core\API\Converter;

use Jett\McNewsletter\Core\API\Transfer\AbstractTransfer;
use Jett\McNewsletter\Core\API\Transfer\Batch;

class BatchConverter extends AbstractConverter
{
    /**
     * @inheritDoc
     */
    protected static function convertData(array $data): AbstractTransfer
    {
        $batch = new Batch();

        $batch->id = isset($data['id']) ? $data['id'] : null;
        $batch->status = isset($data['status']) ? $data['status'] : null;
        $batch->totalOperations = isset($data['total_operations']) ? $data['total_operations'] : null;
        $batch->finishedOperations = isset($data['finished_operations']) ? $data['finished_operations'] : null;
        $batch->erroredOperations = isset($data['errored_operations']) ? $data['errored_operations'] : null;
        $batch->submittedAt = isset($data['submitted_at']) ? $data['submitted_at'] : null;
        $batch->completedAt = isset($data['completed_at']) ? $data['completed_at'] : null;
        $batch->responseBodyUrl = isset($data['response_body_url']) ? $data['response_body_url'] : null;

        return $batch;
    }

    /**
     * @inheritDoc
     */
    protected static function convertTransferToData(AbstractTransfer $transfer): array
    {
        /** @var Batch $transfer */
        return [
            'operations' => $transfer->operations,
        ];
    }
}
