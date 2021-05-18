<?php


namespace Jett\McNewsletter\Converter;

use Jett\McNewsletter\Core\API\Transfer\Member;
use Shopware\Core\Content\Newsletter\Aggregate\NewsletterRecipient\NewsletterRecipientEntity;
use Shopware\Core\Content\Newsletter\SalesChannel\NewsletterSubscribeRoute;

class RecipientToMemberConverter
{
    public const STATUS_PENDING = 'pending';
    public const STATUS_SUBSCRIBED = 'subscribed';
    public const STATUS_UNSUBSCRIBED = 'unsubscribed';

    public const MERGE_FIELD_FIRST_NAME = 'FNAME';
    public const MERGE_FIELD_LAST_NAME = 'LNAME';

    public function convert(NewsletterRecipientEntity $recipient): Member
    {
        $member = new Member();
        $member->email = $recipient->getEmail();
        $member->status = $this->convertStatus($recipient->getStatus());
        $member->mergeFields = [
            static::MERGE_FIELD_FIRST_NAME => $recipient->getFirstName() ?? '',
            static::MERGE_FIELD_LAST_NAME => $recipient->getLastName() ?? '',
        ];

        return $member;
    }

    private function convertStatus(string $status): string
    {
        return [
            NewsletterSubscribeRoute::STATUS_NOT_SET => self::STATUS_PENDING,
            NewsletterSubscribeRoute::STATUS_OPT_IN => self::STATUS_SUBSCRIBED,
            NewsletterSubscribeRoute::STATUS_OPT_OUT => self::STATUS_UNSUBSCRIBED,
            NewsletterSubscribeRoute::STATUS_DIRECT => self::STATUS_SUBSCRIBED,
        ][$status];
    }
}
