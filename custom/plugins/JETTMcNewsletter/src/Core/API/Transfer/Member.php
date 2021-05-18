<?php


namespace Jett\McNewsletter\Core\API\Transfer;

class Member extends AbstractTransfer
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $uniqueEmailId;

    /**
     * @var integer
     */
    public $webId;

    /**
     * @var string
     */
    public $emailType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $unsubscribeReason;

    /**
     * @var array
     */
    public $mergeFields;
}
