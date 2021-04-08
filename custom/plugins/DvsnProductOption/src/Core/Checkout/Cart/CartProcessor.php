<?php

/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

namespace Dvsn\ProductOption\Core\Checkout\Cart;

use Dvsn\ProductOption\Core\Content\ProductOption\ProductOptionEntity;
use Dvsn\ProductOption\Service\LineItemFactoryServiceInterface;
use Shopware\Core\Checkout\Cart\Cart;
use Shopware\Core\Checkout\Cart\CartBehavior;
use Shopware\Core\Checkout\Cart\CartProcessorInterface;
use Shopware\Core\Checkout\Cart\LineItem\CartDataCollection;
use Shopware\Core\Checkout\Cart\Price\QuantityPriceCalculator;
use Shopware\Core\Checkout\Cart\Price\Struct\PriceCollection;
use Shopware\Core\Checkout\Cart\Price\Struct\QuantityPriceDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Core\System\SystemConfig\SystemConfigService;

class CartProcessor implements CartProcessorInterface
{
    /**
     * ...
     *
     * @var EntityRepositoryInterface
     */
    protected $productRepository;

    /**
     * ...
     *
     * @var QuantityPriceCalculator
     */
    private $quantityPriceCalculator;

    /**
     * ...
     *
     * @var SystemConfigService
     */
    protected $systemConfigService;

    /**
     * ...
     *
     * @param EntityRepositoryInterface $productRepository
     * @param QuantityPriceCalculator $quantityPriceCalculator
     * @param SystemConfigService $systemConfigService
     */
    public function __construct(EntityRepositoryInterface $productRepository, QuantityPriceCalculator $quantityPriceCalculator, SystemConfigService $systemConfigService)
    {
        // set params
        $this->productRepository = $productRepository;
        $this->quantityPriceCalculator = $quantityPriceCalculator;
        $this->systemConfigService = $systemConfigService;
    }

    /**
     * {@inheritDoc}
     */
    public function process(CartDataCollection $data, Cart $original, Cart $toCalculate, SalesChannelContext $context, CartBehavior $behavior): void
    {
        // get every line item
        $lineItems = $original->getLineItems();

        // do we even have line items?
        if ($lineItems->count() === 0) {
            // we dont
            return;
        }

        // loop every item
        foreach ($lineItems as $lineItem) {
            // every option child price to sum them up after
            $prices = [];

            // loop every child
            foreach ($lineItem->getChildren() as $child) {
                // not an option?
                if ($child->getType() !== LineItemFactoryServiceInterface::OPTION_LINE_ITEM_TYPE) {
                    // ignore it
                    continue;
                }

                /** @var QuantityPriceDefinition $definition */
                $definition = $child->getPriceDefinition();

                // percental surcharge can only be calculated here
                if ($child->getPayloadValue('dvsnProductOptionSurchargeType') === ProductOptionEntity::SURCHARGE_TYPE_PERCENTAL) {
                    // create a new definition with the product as base
                    $definition = new QuantityPriceDefinition(
                        ($lineItem->getPrice()->getUnitPrice() / 100) * $definition->getPrice(),
                        $definition->getTaxRules(),
                        $definition->getPrecision(),
                        $definition->getQuantity(),
                        $definition->isCalculated(),
                        $definition->getReferencePriceDefinition(),
                        $definition->getListPrice()
                    );
                }

                // calculate the price of the child
                $child->setPrice(
                    $this->quantityPriceCalculator->calculate(
                        $definition,
                        $context
                    )
                );

                // and add it
                $prices[] = $child->getPrice();
            }

            // we do not have option children
            if (count($prices) === 0) {
                // ignore it
                continue;
            }

            // add product price
            $prices[] = $lineItem->getPrice();

            // sum everything up (incl. taxes)
            $priceCollection = new PriceCollection(
                $prices
            );

            // set our price
            $lineItem->setPrice(
                $priceCollection->sum()
            );
        }
    }
}
