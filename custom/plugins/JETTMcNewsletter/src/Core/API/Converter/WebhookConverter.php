<?php

namespace Jett\McNewsletter\Core\API\Converter;

use Jett\McNewsletter\Core\API\Transfer\AbstractTransfer;
use Jett\McNewsletter\Core\API\Transfer\Webhook;

class WebhookConverter extends AbstractConverter
{
    public const LIST_ITEMS_KEY = 'webhooks';

    /**
     * @param array $data
     * @return AbstractTransfer
     */
    protected static function convertData(array $data): AbstractTransfer
    {
        $webhook = new Webhook();

        $webhook->id = isset($data['id']) ? $data['id'] : null;
        $webhook->url = isset($data['url']) ? $data['url'] : null;
        $webhook->events = isset($data['events']) ? $data['events'] : null;
        $webhook->sources = isset($data['sources']) ? $data['sources'] : null;
        $webhook->listId = isset($data['list_id']) ? $data['list_id'] : null;

        return $webhook;
    }

    /**
     * @param AbstractTransfer $transfer
     * @return array
     */
    protected static function convertTransferToData(AbstractTransfer $transfer): array
    {
        /** @var Webhook $transfer */
        return [
            'url' => $transfer->url,
            'events' => $transfer->events,
            'sources' => $transfer->sources,
        ];
    }
}
