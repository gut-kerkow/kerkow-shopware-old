<?php

/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

namespace Dvsn\ProductOption\Core\Content\ProductOption\Aggregate\ProductOptionTranslation;

use Dvsn\ProductOption\Core\Content\ProductOption\ProductOptionDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityTranslationDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class ProductOptionTranslationDefinition extends EntityTranslationDefinition
{
    /**
     * {@inheritDoc}
     */
    public function getEntityName(): string
    {
        return 'dvsn_product_option_translation';
    }

    /**
     * {@inheritDoc}
     */
    public function getCollectionClass(): string
    {
        return ProductOptionTranslationCollection::class;
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityClass(): string
    {
        return ProductOptionTranslationEntity::class;
    }

    /**
     * {@inheritDoc}
     */
    public function getParentDefinitionClass(): string
    {
        return ProductOptionDefinition::class;
    }

    /**
     * {@inheritDoc}
     */
    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            // default fields
            (new StringField('name', 'name'))->addFlags(new Required()),
            (new StringField('description', 'description'))
        ]);
    }
}
