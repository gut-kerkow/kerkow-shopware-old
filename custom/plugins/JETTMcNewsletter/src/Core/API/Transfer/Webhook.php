<?php

namespace Jett\McNewsletter\Core\API\Transfer;

class Webhook extends AbstractTransfer
{
    /** @var string */
    public $id;

    /** @var string */
    public $url;

    /** @var array */
    public $events = ['subscribe' => true, 'unsubscribe' => true, 'cleaned' => false, 'profile' => false, 'upemail' => false, 'campaign' => false];

    /** @var array */
    public $sources = ['user' => true, 'admin' => true, 'api' => false];

    /** @var string */
    public $listId;
}
