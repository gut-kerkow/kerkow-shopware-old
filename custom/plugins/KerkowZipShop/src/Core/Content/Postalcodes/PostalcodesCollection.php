<?php

declare(strict_types=1);

namespace Kerkow\ZipShop\Core\Content\Postalcodes;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void              add(PostalcodesEntity $entity)
 * @method void              set(string $key, PostalcodesEntity $entity)
 * @method PostalcodesEntity[]    getIterator()
 * @method PostalcodesEntity[]    getElements()
 * @method PostalcodesEntity|null get(string $key)
 * @method PostalcodesEntity|null first()
 * @method PostalcodesEntity|null last()
 */
class PostalcodesCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PostalcodesEntity::class;
    }
}
