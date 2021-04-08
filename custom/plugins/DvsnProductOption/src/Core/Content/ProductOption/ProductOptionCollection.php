<?php

/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

namespace Dvsn\ProductOption\Core\Content\ProductOption;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

class ProductOptionCollection extends EntityCollection
{
    /**
     * {@inheritDoc}
     */
    protected function getExpectedClass(): string
    {
        return ProductOptionEntity::class;
    }
}
