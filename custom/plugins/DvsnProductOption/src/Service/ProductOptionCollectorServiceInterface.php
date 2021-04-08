<?php

/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

namespace Dvsn\ProductOption\Service;

use Dvsn\ProductOption\Core\Content\ProductOption\ProductOptionCollection;
use Shopware\Core\Content\Product\SalesChannel\SalesChannelProductEntity;
use Shopware\Core\System\SalesChannel\SalesChannelContext;

interface ProductOptionCollectorServiceInterface
{
    /**
     * ...
     *
     * @param SalesChannelProductEntity $parent
     * @param SalesChannelContext $salesChannelContext
     *
     * @return ProductOptionCollection
     */
    public function get(SalesChannelProductEntity $parent, SalesChannelContext $salesChannelContext): ProductOptionCollection;
}
