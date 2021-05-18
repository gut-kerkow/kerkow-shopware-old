<?php


namespace Jett\McNewsletter\Core\API\Converter;

use Jett\McNewsletter\Core\API\Transfer\AbstractTransfer;
use Jett\McNewsletter\Core\API\Transfer\Audience;

class AudienceConverter extends AbstractConverter
{
    public const LIST_ITEMS_KEY = 'lists';

    /**
     * @inheritDoc
     */
    protected static function convertData(array $data): AbstractTransfer
    {
        $audience = new Audience();
        $audience->id = isset($data['id']) ? $data['id'] : null;
        $audience->name = isset($data['name']) ? $data['name'] : null;

        return $audience;
    }

    /**
     * @inheritDoc
     */
    protected static function convertTransferToData(AbstractTransfer $transfer): array
    {
        // TODO: Implement convertTransfer() method.
        return [];
    }
}
