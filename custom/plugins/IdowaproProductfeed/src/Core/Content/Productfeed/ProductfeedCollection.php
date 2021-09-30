<?php declare(strict_types=1);

namespace Productfeed\Core\Content\Productfeed;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void              add(ProductfeedEntity $entity)
 * @method void              set(string $key, ProductfeedEntity $entity)
 * @method ProductfeedEntity[]    getIterator()
 * @method ProductfeedEntity[]    getElements()
 * @method ProductfeedEntity|null get(string $key)
 * @method ProductfeedEntity|null first()
 * @method ProductfeedEntity|null last()
 */
class ProductfeedCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductfeedEntity::class;
    }
}
