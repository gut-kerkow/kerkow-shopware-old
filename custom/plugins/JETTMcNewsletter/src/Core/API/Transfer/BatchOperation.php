<?php


namespace Jett\McNewsletter\Core\API\Transfer;

class BatchOperation extends AbstractTransfer
{
    /** @var string */
    public $method;

    /** @var string */
    public $path;

    /** @var string */
    public $operation_id;

    /** @var string */
    public $params;

    /** @var string */
    public $body;
}
