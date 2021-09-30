<?php declare(strict_types=1);

namespace Productfeed\Core\Content\ProductfeedProductStream;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void               add(ProductfeedProductStreamEntity $entity)
 * @method void               set(string $key, ProductfeedProductStreamEntity $entity)
 * @method ProductfeedProductStreamEntity[]    getIterator()
 * @method ProductfeedProductStreamEntity[]    getElements()
 * @method ProductfeedProductStreamEntity|null get(string $key)
 * @method ProductfeedProductStreamEntity|null first()
 * @method ProductfeedProductStreamEntity|null last()
 */
class ProductfeedProductStreamCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductfeedProductStreamEntity::class;
    }
}