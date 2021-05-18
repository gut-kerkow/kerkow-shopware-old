<?php

declare(strict_types=1);

namespace Jett\McNewsletter\Log;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\BoolField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class JettLogDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'jett_mcn_log';

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
        return JettLogCollection::class;
    }

    /**
     * @return string
     */
    public function getEntityClass(): string
    {
        return JettLog::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new PrimaryKey(), new Required()),
            new StringField('sales_channel_id', 'salesChannelId'),
            new BoolField('status', 'status'),
            new StringField('message', 'message'),
            new StringField('payload', 'payload'),
        ]);
    }
}
