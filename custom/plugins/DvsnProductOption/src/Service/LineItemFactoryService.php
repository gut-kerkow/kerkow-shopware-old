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
use Shopware\Core\Checkout\Cart\LineItem\QuantityInformation;
use Shopware\Core\Content\Media\MediaEntity;
use Shopware\Core\Framework\Uuid\Uuid;
use Shopware\Core\System\SalesChannel\SalesChannelContext;

class LineItemFactoryService implements LineItemFactoryServiceInterface
{
    /**
     * {@inheritDoc}
     */
    public function create(ProductOptionEntity $productOption, LineItem $parent, Cart $cart, SalesChannelContext $salesChannelContext): LineItem
    {
        // create a new line item
        $lineItem = new LineItem(
            Uuid::randomHex(),
            self::OPTION_LINE_ITEM_TYPE,
            $productOption->getId(),
            $parent->getQuantity()
        );

        // set it up
        $lineItem->setLabel($productOption->getTranslated()['name'])
            ->setGood(false)
            ->setStackable(false)
            ->setRemovable(false)
            ->setDescription(null)
            ->setQuantityInformation(new QuantityInformation())
            ->setCover(($productOption->getMedia() instanceof MediaEntity) ? $productOption->getMedia() : null)
            ->setPayloadValue('dvsnProductOption', true)
            ->setPayloadValue('dvsnProductOptionId', $productOption->getId())
            ->setPayloadValue('dvsnProductOptionSurcharge', $productOption->getSurcharge())
            ->setPayloadValue('dvsnProductOptionSurchargeType', $productOption->getSurchargeType())
            ->setPayloadValue('dvsnProductOptionSurchargeCalculation', $productOption->getSurchargeCalculation())
            ->setPayloadValue('dvsnProductOptionTaxId', $productOption->getTaxId())
            ->setPayloadValue('dvsnProductOptionIcon', $productOption->getIcon())
            ->setPayloadValue('productNumber', $productOption->getNumber())
            ->setPayloadValue('customFields', null)
            ->setPayloadValue('taxId', $productOption->getTaxId());

        // return it
        return $lineItem;
    }
}
