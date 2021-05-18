<?php


namespace Jett\McNewsletter\Core\API\Transfer;

class Batch extends AbstractTransfer
{
    public const STATUS_PENDING = 'pending';
    public const STATUS_PREPROCESSING = 'preprocessing';
    public const STATUS_STARTED = 'started';
    public const STATUS_FINALIZING = 'finalizing';
    public const STATUS_FINISHED = 'finished';

    /** @var string */
    public $id;

    /** @var array */
    public $operations;

    /** @var string */
    public $status;

    /** @var int */
    public $totalOperations;

    /** @var int */
    public $finishedOperations;

    /** @var int */
    public $erroredOperations;

    /** @var string */
    public $submittedAt;

    /** @var string */
    public $completedAt;

    /** @var string */
    public $responseBodyUrl;
}
