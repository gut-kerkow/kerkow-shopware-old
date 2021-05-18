<?php

declare(strict_types=1);

namespace Jett\McNewsletter\Setting;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\BoolField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\DateTimeField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IntField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class JettSettingDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'jett_mcn_setting';

    /**
     * @return string
     */
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    /**
     * @return string
     */
    public function getCollectionClass(): string
    {
        return JettSettingCollection::class;
    }

    /**
     * @return string
     */
    public function getEntityClass(): string
    {
        return JettSetting::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new PrimaryKey(), new Required()),
            new BoolField('active', 'active'),
            new StringField('sales_channel_id', 'salesChannelId'),
            new StringField('api_key', 'apiKey'),
            new StringField('list_id', 'listId'),
            new IntField('sync_limit', 'syncLimit'),
            new StringField('webhook_url_id', 'webhookUrlId'),
            new DateTimeField('last_sync_run', 'lastSyncRun'),
            new IntField('doi_option', 'doiOption'),
        ]);
    }
}
