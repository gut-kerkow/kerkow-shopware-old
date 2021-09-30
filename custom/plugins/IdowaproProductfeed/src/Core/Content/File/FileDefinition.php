<?php declare(strict_types=1);

namespace Productfeed\Core\Content\File;

use Productfeed\Core\Content\Productfeed\ProductfeedDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\DateField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Field\LongTextField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;

class FileDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'productfeed_file';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getCollectionClass(): string
    {
        return FileCollection::class;
    }

    public function getEntityClass(): string
    {
        return FileEntity::class;
    }

    protected function defineFields(): FieldCollection
    {
        /*
         * IdField id
         * StringField name
         */
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new Required(), new PrimaryKey()),
            (new StringField('name', 'name'))->addFlags(new Required()),
            new StringField('filename', 'fileName'),
            new StringField('filetype', 'fileType'),
            (new StringField('execution_type', 'executionType'))->addFlags(new Required()),
            (new StringField('delivery_state', 'deliveryState'))->addFlags(new Required()),
            (new LongTextField('message', 'message'))->addFlags(new Required()),
            (new StringField('state', 'state'))->addFlags(new Required()),
            new StringField('delivery_protocol', 'deliveryProtocol'),
            new StringField('host_url', 'hostUrl'),
            new StringField('host_username', 'hostUsername'),
            new StringField('host_Directory', 'hostDirectory'),
            new LongTextField('error_stack_trace', 'stackTrace'),
            new DateField('delivery_timestamp', 'deliveryTimestamp'),


            (new FkField('productfeed_id', 'productfeedId', ProductfeedDefinition::class)),
            new ManyToOneAssociationField('productfeed', 'productfeed_id', ProductfeedDefinition::class, 'id', true),
        ]);
    }
}
