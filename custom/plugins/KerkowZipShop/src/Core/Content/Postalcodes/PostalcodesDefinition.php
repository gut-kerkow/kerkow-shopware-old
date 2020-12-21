<?php

declare(strict_types=1);

namespace Kerkow\ZipShop\Core\Content\Postalcodes;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class PostalcodesDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'postalcodes';

    public function getEntityName(): string
    {
        return 'kerkow_postalcodes';
    }

    public function getEntityClass(): string
    {
        return PostalcodesEntity::class;
    }

    public function getCollectionClass(): string
    {
        return PostalcodesCollection::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new Required(), new PrimaryKey()),
            (new StringField('zip', 'zip'))->addFlags(new Required()),
            (new StringField('city', 'city'))->addFlags(new Required())
        ]);
    }
}
