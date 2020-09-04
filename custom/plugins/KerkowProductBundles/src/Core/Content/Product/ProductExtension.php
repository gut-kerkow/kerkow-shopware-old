<?php

declare(strict_types=1);

namespace Kerkow\ProductBundles\Core\Content\Product;

use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Inherited;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToManyAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Kerkow\ProductBundles\Core\Content\ProductBundles\Aggregate\BundleProduct\BundleProductDefinition;
use Kerkow\ProductBundles\Core\Content\ProductBundles\ProductBundlesDefinition;

class ProductExtension extends EntityExtension
{
    public function extendFields(FieldCollection $collection): void
    {
        $collection->add(
            (new ManyToManyAssociationField(
                'bundles',
                ProductBundlesDefinition::class,
                BundleProductDefinition::class,
                'product_id',
                'kerkow_product_bundles_id'
            ))->addFlags(new Inherited())
        );
    }

    public function getDefinitionClass(): string
    {
        return ProductDefinition::class;
    }
}
