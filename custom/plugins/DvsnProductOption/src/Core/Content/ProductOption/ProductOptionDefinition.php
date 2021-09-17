<?php

/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

namespace Dvsn\ProductOption\Core\Content\ProductOption;

use Dvsn\ProductOption\Core\Content\ProductOption\Aggregate\ProductOptionTranslation\ProductOptionTranslationDefinition;
use Shopware\Core\Content\Media\MediaDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\BoolField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\CreatedAtField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Runtime;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\SetNullOnDelete;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FloatField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslatedField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslationsAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\UpdatedAtField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\System\Tax\TaxDefinition;

class ProductOptionDefinition extends EntityDefinition
{
    /**
     * {@inheritDoc}
     */
    public function getEntityName(): string
    {
        return 'dvsn_product_option';
    }

    /**
     * {@inheritDoc}
     */
    public function getCollectionClass(): string
    {
        return ProductOptionCollection::class;
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityClass(): string
    {
        return ProductOptionEntity::class;
    }

    /**
     * {@inheritDoc}
     */
    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            // default fields
            (new IdField('id', 'id'))->addFlags(new PrimaryKey(), new Required()),
            (new BoolField('active', 'active'))->addFlags(new Required()),
            (new BoolField('hidden', 'hidden'))->addFlags(new Required()),
            (new BoolField('mandatory', 'mandatory'))->addFlags(new Required()),
            (new StringField('number', 'number'))->addFlags(new Required()),
            (new TranslatedField('name')),
            (new TranslatedField('description')),
            (new FloatField('surcharge', 'surcharge'))->addFlags(new Required()),
            (new StringField('surcharge_type', 'surchargeType'))->addFlags(new Required()),
            (new StringField('surcharge_calculation', 'surchargeCalculation'))->addFlags(new Required()),
            (new StringField('icon', 'icon'))->addFlags(new Required()),

            // additional runtime fields
            (new FloatField('price', 'price'))->addFlags(new Runtime()),

            // translations
            (new TranslationsAssociationField(ProductOptionTranslationDefinition::class, 'dvsn_product_option_id'))->addFlags(new Required()),

            // media
            (new FkField('media_id', 'mediaId', MediaDefinition::class)),
            (new ManyToOneAssociationField('media', 'media_id', MediaDefinition::class))->addFlags(new SetNullOnDelete()),

            // tax
            (new FkField('tax_id', 'taxId', TaxDefinition::class)),
            (new ManyToOneAssociationField('tax', 'tax_id', TaxDefinition::class))->addFlags(new SetNullOnDelete()),

            // inherited fields
            new CreatedAtField(),
            new UpdatedAtField(),
        ]);
    }
}
