<?php


namespace Jett\McNewsletter\Core\API\Transfer;

class ResponseList extends AbstractTransfer
{
    /** @var int */
    public $total;

    /** @var array */
    public $items;
}
