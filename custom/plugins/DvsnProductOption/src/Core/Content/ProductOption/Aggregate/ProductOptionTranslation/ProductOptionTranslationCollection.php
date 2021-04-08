<?php

/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

namespace Dvsn\ProductOption\Core\Content\ProductOption\Aggregate\ProductOptionTranslation;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

class ProductOptionTranslationCollection extends EntityCollection
{
    /**
     * ...
     *
     * @param string $id
     *
     * @return $this
     */
    public function filterByLanguageId(string $id): self
    {
        return $this->filter(function (ProductOptionTranslationEntity $productOptionTranslationEntity) use ($id) {
            return $productOptionTranslationEntity->getLanguageId() === $id;
        });
    }

    /**
     * {@inheritDoc}
     */
    protected function getExpectedClass(): string
    {
        return ProductOptionTranslationEntity::class;
    }
}
