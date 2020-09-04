<?php

declare(strict_types=1);

namespace Kerkow\ProductBundles\Core\Content\ProductBundles;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void              add(ProductBundlesEntity $entity)
 * @method void              set(string $key, ProductBundlesEntity $entity)
 * @method ProductBundlesEntity[]    getIterator()
 * @method ProductBundlesEntity[]    getElements()
 * @method ProductBundlesEntity|null get(string $key)
 * @method ProductBundlesEntity|null first()
 * @method ProductBundlesEntity|null last()
 */
class ProductBundlesCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductBundlesEntity::class;
    }
}
