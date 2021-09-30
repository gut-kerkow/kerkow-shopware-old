<?php declare(strict_types=1);

namespace Productfeed\Core\Content\File;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void              add(FileEntity $entity)
 * @method void              set(string $key, FileEntity $entity)
 * @method FileEntity[]    getIterator()
 * @method FileEntity[]    getElements()
 * @method FileEntity|null get(string $key)
 * @method FileEntity|null first()
 * @method FileEntity|null last()
 */
class FileCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return FileEntity::class;
    }
}
