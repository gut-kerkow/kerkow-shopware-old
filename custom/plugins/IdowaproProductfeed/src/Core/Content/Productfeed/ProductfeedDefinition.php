<?php declare(strict_types=1);

namespace Productfeed\Core\Content\Productfeed;

use Productfeed\Core\Content\File\FileDefinition;
use Productfeed\Core\Content\NotificationEmail\NotificationEmailDefinition;
use Productfeed\Core\Content\ProductfeedProductStream\ProductfeedProductStreamDefinition;
use Productfeed\Core\Content\ProductfeedProductStream\ProductfeedProductStreamEntity;
use Shopware\Core\Content\ProductStream\ProductStreamDefinition;
use Shopware\Core\Content\Rule\RuleDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\BoolField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\CascadeDelete;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IntField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\JsonField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToManyAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\System\SalesChannel\SalesChannelDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\AllowHtml;
use Shopware\Core\Framework\DataAbstractionLayer\Field\LongTextField;
use Shopware\Core\System\Country\CountryDefinition;
use Shopware\Core\System\Currency\CurrencyDefinition;
use Shopware\Core\System\Language\LanguageDefinition;

class ProductfeedDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'productfeed_productfeed';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getCollectionClass(): string
    {
        return ProductfeedCollection::class;
    }

    public function getEntityClass(): string
    {
        return ProductfeedEntity::class;
    }

    protected function defineFields(): FieldCollection
    {
        /*
         * IdField id
         * StringField name
         */
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new Required(), new PrimaryKey()),
            (new StringField('name', 'name'))->addFlags(new Required()),
            (new BoolField('enabled', 'enabled'))->addFlags(new Required()),
            (new StringField('filename', 'filename'))->addFlags(new Required()),
            (new StringField('filetype', 'filetype'))->addFlags(new Required()),
            (new LongTextField('template', 'template'))->addFlags(new Required(), new AllowHtml()),
            (new StringField('execution_mode', 'executionMode'))->addFlags(new Required()),
            new IntField('interval', 'interval'),
            (new BoolField('delivery_enabled', 'deliveryEnabled'))->addFlags(new Required()),
            new StringField('file_transfer_protocol', 'fileTransferProtocol'),
            new StringField('host_url', 'hostUrl'),
            new StringField('host_username', 'hostUsername'),
            new StringField('host_password', 'hostPassword'),
            new StringField('host_directory_path', 'hostDirectoryPath'),
            (new BoolField('notifications_enabled', 'notificationsEnabled'))->addFlags(new Required()),
            new JsonField('filter', 'filter'),
            new BoolField('message_when_create_success', 'messageWhenCreateSuccess'),
            new BoolField('message_when_create_error', 'messageWhenCreateError'),
            new BoolField('message_when_delivery_success', 'messageWhenDeliverySuccess'),
            new BoolField('message_when_delivery_error', 'messageWhenDeliveryError'),

            (new BoolField('rule_filter_enabled', 'ruleFilterEnabled'))->addFlags(new Required()),
            (new BoolField('product_stream_filter_enabled', 'productStreamFilterEnabled'))->addFlags(new Required()),

            new FkField(
                'rule_id',
                'ruleId',
                RuleDefinition::class
            ),

            (new ManyToOneAssociationField(
                'rule',
                'rule_id',
                RuleDefinition::class,
                'id',
                false
            ))->addFlags(new CascadeDelete()),

            (new FkField(
                'sales_channel_id',
                'salesChannelId',
                SalesChannelDefinition::class
            ))->addFlags(new Required()),

            new ManyToOneAssociationField(
                'salesChannel',
                'sales_channel_id',
                SalesChannelDefinition::class,
                'id',
                false
            ),

            new FkField(
                'language_id',
                'languageId',
                LanguageDefinition::class
            ),

            new ManyToOneAssociationField(
                'language',
                'language_id',
                LanguageDefinition::class,
                'id',
                false
            ),

            new FkField(
                'currency_id',
                'currencyId',
                CurrencyDefinition::class
            ),

            new ManyToOneAssociationField(
                'currency',
                'currency_id',
                CurrencyDefinition::class,
                'id',
                false
            ),

            new FkField(
                'country_id',
                'countryId',
                CountryDefinition::class
            ),

            new ManyToOneAssociationField(
                'country',
                'country_id',
                CountryDefinition::class,
                'id',
                false
            ),


            (new OneToManyAssociationField('notifications', NotificationEmailDefinition::class, 'productfeed_id'))
                ->addFlags(new CascadeDelete()),

            (new OneToManyAssociationField('files', FileDefinition::class, 'productfeed_id'))
                ->addFlags(new CascadeDelete()),

            (new OneToManyAssociationField('productfeedProductStreams', ProductfeedProductStreamDefinition::class, 'productfeed_id'))
                ->addFlags(new CascadeDelete()),
        ]);
    }
}
