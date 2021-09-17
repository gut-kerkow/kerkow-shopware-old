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
use Shopware\Core\Checkout\Cart\CartDataCollectorInterface;
use Shopware\Core\Checkout\Cart\Delivery\Struct\DeliveryInformation;
use Shopware\Core\Checkout\Cart\LineItem\CartDataCollection;
use Shopware\Core\Checkout\Cart\LineItem\LineItem;
use Shopware\Core\Checkout\Cart\LineItem\QuantityInformation;
use Shopware\Core\Checkout\Cart\Price\QuantityPriceCalculator;
use Shopware\Core\Checkout\Cart\Price\Struct\QuantityPriceDefinition;
use Shopware\Core\Content\Product\Cart\ProductCartProcessor;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\System\SalesChannel\Entity\SalesChannelRepositoryInterface;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Core\System\SystemConfig\SystemConfigService;

class CartDataCollector implements CartDataCollectorInterface
{
    /**
     * ...
     *
     * @var EntityRepositoryInterface
     */
    protected $optionRepository;

    /**
     * ...
     *
     * @var EntityRepositoryInterface
     */
    protected $productRepository;

    /**
     * ...
     *
     * @var SalesChannelRepositoryInterface
     */
    protected $salesChannelProductRepository;

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
     * @param EntityRepositoryInterface $optionRepository
     * @param EntityRepositoryInterface $productRepository
     * @param SalesChannelRepositoryInterface $salesChannelProductRepository
     * @param QuantityPriceCalculator $quantityPriceCalculator
     * @param SystemConfigService $systemConfigService
     */
    public function __construct(
        EntityRepositoryInterface $optionRepository,
        EntityRepositoryInterface $productRepository,
        SalesChannelRepositoryInterface $salesChannelProductRepository,
        QuantityPriceCalculator $quantityPriceCalculator,
        SystemConfigService $systemConfigService
    )
    {
        // set params
        $this->optionRepository = $optionRepository;
        $this->productRepository = $productRepository;
        $this->salesChannelProductRepository = $salesChannelProductRepository;
        $this->quantityPriceCalculator = $quantityPriceCalculator;
        $this->systemConfigService = $systemConfigService;
    }

    /**
     * {@inheritDoc}
     */
    public function collect(CartDataCollection $data, Cart $original, SalesChannelContext $salesChannelContext, CartBehavior $behavior): void
    {
        // do we want to skip recalculation?
        if ($behavior->hasPermission(ProductCartProcessor::SKIP_PRODUCT_RECALCULATION)) {
            // skip it
            return;
        }

        // get every line item because every line item may have our child
        $lineItems = $original->getLineItems();

        // do we even have some?
        if ($lineItems->count() === 0) {
            // we dont
            return;
        }

        // loop every line item
        foreach ($lineItems as $lineItem) {
            // loop every child to get those prices
            foreach ($lineItem->getChildren() as $child) {
                // not an option?
                if ($child->getType() !== LineItemFactoryServiceInterface::OPTION_LINE_ITEM_TYPE) {
                    // ignore it
                    continue;
                }

                // set default information
                $child->setDeliveryInformation($this->getDeliveryInformation($lineItem, $salesChannelContext));
                $child->setQuantityInformation($this->getQuantityInformation($lineItem, $salesChannelContext));

                // create price definition
                switch ($child->getPayloadValue('dvsnProductOptionSurchargeType')) {
                    case ProductOptionEntity::SURCHARGE_TYPE_PERCENTAL:
                        $definition = new QuantityPriceDefinition(
                            $child->getPayloadValue('dvsnProductOptionSurcharge'),
                            $salesChannelContext->buildTaxRules($lineItem->getPayloadValue('taxId')),
                            ($child->getPayloadValue('dvsnProductOptionSurchargeCalculation') === ProductOptionEntity::SURCHARGE_CALCULATION_ONCE)
                                ? 1
                                : $child->getQuantity()
                        );
                        
                        break;

                    case ProductOptionEntity::SURCHARGE_TYPE_ABSOLUTE:
                        $surcharge = $child->getPayloadValue('dvsnProductOptionSurcharge');
                        $surcharge = $surcharge * $salesChannelContext->getCurrency()->getFactor();

                        $definition = new QuantityPriceDefinition(
                            $surcharge,
                            $salesChannelContext->buildTaxRules($child->getPayloadValue('dvsnProductOptionTaxId')),
                            ($child->getPayloadValue('dvsnProductOptionSurchargeCalculation') === ProductOptionEntity::SURCHARGE_CALCULATION_ONCE)
                                ? 1
                                : $child->getQuantity()
                        );

                        break;

                    default:
                        throw new \Exception('unknown type');
                        break;
                }

                // set price definition
                $child->setPriceDefinition($definition);
            }
        }
    }

    /**
     * ...
     *
     * @param LineItem $lineItem
     * @param SalesChannelContext $salesChannelContext
     *
     * @return DeliveryInformation
     */
    private function getDeliveryInformation(LineItem $lineItem, SalesChannelContext $salesChannelContext): DeliveryInformation
    {
        // create new information
        return new DeliveryInformation(
            $lineItem->getQuantity(),
            1,
            false
        );
    }

    /**
     * ...
     *
     * @param LineItem $lineItem
     * @param SalesChannelContext $salesChannelContext
     *
     * @return QuantityInformation
     */
    private function getQuantityInformation(LineItem $lineItem, SalesChannelContext $salesChannelContext): QuantityInformation
    {
        // return quantity information
        return (new QuantityInformation())
            ->setMaxPurchase(99)
            ->setMinPurchase(1)
            ->setPurchaseSteps(1);
    }
}
