<?php

declare(strict_types=1);

namespace Kerkow\ProductBundles\Core\Content\ProductBundles;

use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FloatField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToManyAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslatedField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslationsAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Kerkow\ProductBundles\Core\Content\ProductBundles\Aggregate\BundleProduct\BundleProductDefinition;
use Kerkow\ProductBundles\Core\Content\ProductBundles\Aggregate\BundleTranslation\BundleTranslationDefinition;

class ProductBundlesDefinition extends EntityDefinition
{
    public function getEntityName(): string
    {
        return 'kerkow_product_bundles';
    }

    public function getEntityClass(): string
    {
        return ProductBundlesEntity::class;
    }

    public function getCollectionClass(): string
    {
        return ProductBundlesCollection::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new Required(), new PrimaryKey()),
            new TranslatedField('name'),
            (new StringField('discount_type', 'discountType'))->addFlags(new Required()),
            (new FloatField('discount', 'discount'))->addFlags(new Required()),
            new TranslationsAssociationField(BundleTranslationDefinition::class, 'kerkow_product_bundles_id'),
            new ManyToManyAssociationField('products', ProductDefinition::class, BundleProductDefinition::class, 'kerkow_product_bundles_id', 'product_id'),
        ]);
    }
}
