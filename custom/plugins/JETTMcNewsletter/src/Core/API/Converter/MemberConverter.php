<?php


namespace Jett\McNewsletter\Core\API\Converter;

use Jett\McNewsletter\Core\API\Transfer\AbstractTransfer;
use Jett\McNewsletter\Core\API\Transfer\Member;

class MemberConverter extends AbstractConverter
{
    public const LIST_ITEMS_KEY = 'members';

    /**
     * @inheritDoc
     */
    protected static function convertData(array $data): AbstractTransfer
    {
        $member = new Member();

        $member->id = isset($data['id']) ? $data['id'] : null;
        $member->email = isset($data['email_address']) ? $data['email_address'] : null;
        $member->emailType = isset($data['email_type']) ? $data['email_type'] : null;
        $member->status = isset($data['status']) ? $data['status'] : null;
        $member->uniqueEmailId = isset($data['unique_email_id']) ? $data['unique_email_id'] : null;
        $member->unsubscribeReason = isset($data['unsubscribe_reason']) ? $data['unsubscribe_reason'] : null;
        $member->webId = isset($data['web_id']) ? $data['web_id'] : null;
        $member->mergeFields = $data['merge_fields'] ?? [];

        return $member;
    }

    /**
     * @inheritDoc
     */
    protected static function convertTransferToData(AbstractTransfer $transfer): array
    {
        /** @var Member $transfer */
        return [
            'id' => $transfer->id,
            'email_address' => $transfer->email,
            'email_type' => $transfer->emailType,
            'status' => $transfer->status,
            'unique_email_id' => $transfer->uniqueEmailId,
            'unsubscribe_reason' => $transfer->unsubscribeReason,
            'web_id' => $transfer->webId,
            'status_if_new' => $transfer->status,
            'merge_fields' => $transfer->mergeFields,
        ];
    }
}
