<?php declare(strict_types=1);

namespace Productfeed\Core\Content\ProductfeedProductStream;

use Productfeed\Core\Content\Productfeed\ProductfeedDefinition;
use Shopware\Core\Content\ProductStream\ProductStreamDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class ProductfeedProductStreamDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'productfeed_product_stream';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return ProductfeedProductStreamEntity::class;
    }

    public function getCollectionClass(): string
    {
        return ProductfeedProductStreamCollection::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new Required(), new PrimaryKey()),
            (new FkField('productfeed_id', 'productfeedId', ProductfeedDefinition::class)),
            (new FkField('product_stream_id', 'productStreamId', ProductStreamDefinition::class)),

            (new ManyToOneAssociationField('productfeed', 'productfeed_id', ProductfeedDefinition::class)),
            (new ManyToOneAssociationField('productStream', 'product_stream_id', ProductStreamDefinition::class))
        ]);
    }
}