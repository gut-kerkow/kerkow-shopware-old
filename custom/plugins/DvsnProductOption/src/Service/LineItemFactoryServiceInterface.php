<?php

/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

namespace Dvsn\ProductOption\Service;

use Dvsn\ProductOption\Core\Content\ProductOption\ProductOptionEntity;
use Shopware\Core\Checkout\Cart\Cart;
use Shopware\Core\Checkout\Cart\LineItem\LineItem;
use Shopware\Core\System\SalesChannel\SalesChannelContext;

interface LineItemFactoryServiceInterface
{
    public const OPTION_LINE_ITEM_TYPE = 'dvsn-product-option';

    /**
     * ...
     *
     * @param ProductOptionEntity $productOption
     * @param LineItem $parent
     * @param Cart $cart
     * @param SalesChannelContext $salesChannelContext
     *
     * @return LineItem
     */
    public function create(ProductOptionEntity $productOption, LineItem $parent, Cart $cart, SalesChannelContext $salesChannelContext): LineItem;
}
