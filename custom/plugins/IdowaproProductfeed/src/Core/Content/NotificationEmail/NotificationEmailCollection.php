<?php declare(strict_types=1);

namespace Productfeed\Core\Content\NotificationEmail;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void              add(NotificationEmailEntity $entity)
 * @method void              set(string $key, NotificationEmailEntity $entity)
 * @method NotificationEmailEntity[]    getIterator()
 * @method NotificationEmailEntity[]    getElements()
 * @method NotificationEmailEntity|null get(string $key)
 * @method NotificationEmailEntity|null first()
 * @method NotificationEmailEntity|null last()
 */
class NotificationEmailCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return NotificationEmailEntity::class;
    }
}
