<?php declare(strict_types=1);

namespace Productfeed\Core\Content\NotificationEmail;

use Productfeed\Core\Content\Productfeed\ProductfeedDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class NotificationEmailDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'productfeed_notification';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getCollectionClass(): string
    {
        return NotificationEmailCollection::class;
    }

    public function getEntityClass(): string
    {
        return NotificationEmailEntity::class;
    }

    protected function defineFields(): FieldCollection
    {
        /*
         * IdField id
         * StringField name
         */
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new Required(), new PrimaryKey()),
            (new StringField('email_address', 'emailAddress'))->addFlags(new Required()),

            (new FkField('productfeed_id', 'productfeedId', ProductfeedDefinition::class)),
            new ManyToOneAssociationField('productfeed', 'productfeed_id', ProductfeedDefinition::class, 'id', false),
        ]);
    }
}
