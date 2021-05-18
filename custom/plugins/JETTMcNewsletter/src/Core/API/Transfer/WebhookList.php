<?php

namespace Jett\McNewsletter\Core\API\Transfer;

class WebhookList extends AbstractTransfer
{
    /** @var int */
    public $total;

    /** @var array */
    public $webhooks;

    /** @var string */
    public $listId;
}
