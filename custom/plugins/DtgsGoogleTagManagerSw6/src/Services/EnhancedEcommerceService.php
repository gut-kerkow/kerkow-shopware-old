<?php declare(strict_types=1);

namespace Dtgs\GoogleTagManager\Services;

use Dtgs\GoogleTagManager\Components\Helper\CategoryHelper;
use Dtgs\GoogleTagManager\Components\Helper\LoggingHelper;
use Dtgs\GoogleTagManager\Components\Helper\ManufacturerHelper;
use Dtgs\GoogleTagManager\Components\Helper\PriceHelper;
use Dtgs\GoogleTagManager\Components\Helper\ProductHelper;
use Shopware\Core\Checkout\Cart\LineItem\LineItem;
use Shopware\Core\Checkout\Cart\LineItem\LineItemCollection;
use Shopware\Core\Checkout\Cart\Price\Struct\CalculatedPrice;
use Shopware\Core\Checkout\Order\OrderEntity;
use Shopware\Core\Checkout\Promotion\Cart\PromotionProcessor;
use Shopware\Core\Content\Product\SalesChannel\Listing\ProductListingResult;
use Shopware\Core\Content\Product\SalesChannel\SalesChannelProductEntity;
use Shopware\Core\Framework\DataAbstractionLayer\Search\EntitySearchResult;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Core\System\SystemConfig\SystemConfigService;
use Shopware\Storefront\Page\Checkout\Cart\CheckoutCartPageLoadedEvent;
use Shopware\Storefront\Page\Checkout\Confirm\CheckoutConfirmPageLoadedEvent;
use Shopware\Storefront\Page\Checkout\Register\CheckoutRegisterPageLoadedEvent;
use Symfony\Component\DependencyInjection\ContainerInterface;

class EnhancedEcommerceService
{
    private $systemConfigService;
    /**
     * @var ContainerInterface $container
     */
    private $container;
    private $priceHelper;
    private $loggingHelper;
    /**
     * @var ProductHelper
     */
    private $productHelper;
    /**
    /**
     * @var CategoryHelper
     */
    private $categoryHelper;
    /**
     * @var ManufacturerHelper
     */
    private $manufacturerHelper;

    public function __construct(SystemConfigService $systemConfigService,
                                ContainerInterface $container,
                                ProductHelper $productHelper,
                                CategoryHelper $categoryHelper,
                                ManufacturerHelper $manufacturerHelper,
                                PriceHelper $priceHelper,
                                LoggingHelper $loggingHelper)
    {
        $this->container = $container;
        $this->systemConfigService = $systemConfigService;
        $this->productHelper = $productHelper;
        $this->categoryHelper = $categoryHelper;
        $this->manufacturerHelper = $manufacturerHelper;
        $this->priceHelper = $priceHelper;
        $this->loggingHelper = $loggingHelper;
    }

    /**
     * Maybe move to general helper
     *
     * Helper to get plugin specific config
     *
     * @return array|mixed|null
     */
    public function getGtmConfig($salesChannelId) {
        return $tagManagerConfig = $this->systemConfigService->get('DtgsGoogleTagManagerSw6.config', $salesChannelId);
    }

    /**
     * @param $enhancedEcomTags
     * @return false|string
     */
    public function prepareTagsForView($enhancedEcomTags)
    {
        return json_encode($enhancedEcomTags);
    }

    /**
     * since 6.0.5
     *
     * @param array $tags
     * @param string $event_name
     * @return array
     */
    private function addEeEvent($tags, $event_name = '')
    {
        $event_array = [];
        if($event_name != '') $event_array = ['event' => $event_name];

        return array_merge(
            $event_array,
            ['ecommerce' => $tags]
        );
    }

    /**
     * @param SalesChannelProductEntity $product
     * @param SalesChannelContext $context
     * @return mixed
     * @throws \Exception
     */
    public function getDetailTags(SalesChannelProductEntity $product, SalesChannelContext $context) {

        $enhanced_ecom_tags = [];
        //Currency Code
        $enhanced_ecom_tags['currencyCode'] = $context->getCurrency()->getIsoCode();

        //New in 1.3.5 - select if brutto/netto
        $price = ($product->getCalculatedPrices()->count()) ? $product->getCalculatedPrices()->first()->getUnitPrice() : $product->getCalculatedPrice()->getUnitPrice();
        $brutto_price = (is_float($price)) ? $price : str_replace(',', '.', $price);

        $taxRate = $product->getCalculatedPrice()->getTaxRules()->first();
        if($taxRate) {
            $tax = $taxRate->getTaxRate();
        }
        else {
            //Bugfix for tax free countries, V6.1.4
            $tax = 0;
        }

        $product_data = [
            'name'      =>  $product->getTranslation('name'),
            'id'        =>  $product->getProductNumber(),
            'price'     =>  (float) $this->priceHelper->getPrice($brutto_price, $tax),
        ];

        //Product Category - Changed to SEO Category in V6.1.22
        $seoCategory = $product->getSeoCategory();
        if($seoCategory) {
            $product_data['category'] = $seoCategory->getTranslation('name');
        }

        if($product->getManufacturer())
            $product_data['brand'] = $product->getManufacturer()->getTranslation('name');

        $enhanced_ecom_tags['detail']['products'] = [$product_data];

        /**
         * Related und Similar Articles: tbd
         */

        $enhanced_ecom_tags = $this->addEeEvent($enhanced_ecom_tags, '');
        return $enhanced_ecom_tags;

    }

    /**
     * SW6 ready
     *
     * @param SalesChannelContext $context
     * @return array
     */
    public function getBasicTags(SalesChannelContext $context) {

        $enhanced_ecom_tags = [];
        //Currency Code
        $enhanced_ecom_tags['currencyCode'] = $context->getCurrency()->getIsoCode();

        $enhanced_ecom_tags = $this->addEeEvent($enhanced_ecom_tags, '');
        return $enhanced_ecom_tags;

    }

    /**
     * SW6 ready
     *
     * @param $navigationId
     * @param EntitySearchResult $result
     * @param SalesChannelContext $context
     * @return array
     * @throws \Exception
     */
    public function getNavigationTags($navigationId, $listing, SalesChannelContext $context) {

        $enhanced_ecom_tags = [];
        //Currency Code
        $enhanced_ecom_tags['currencyCode'] = $context->getCurrency()->getIsoCode();

        $category = $this->categoryHelper->getCategoryById($navigationId, $context);

        //Impressions
        $enhanced_ecom_tags['impressions'] = $this->getImpressions($listing, 'Category', $category->getTranslation('name'));

        $enhanced_ecom_tags = $this->addEeEvent($enhanced_ecom_tags, '');
        return $enhanced_ecom_tags;

    }

    /**
     * SW6 ready
     *
     * @param $searchTerm
     * @param ProductListingResult $listing
     * @return array
     * @throws \Exception
     */
    public function getSearchTags($searchTerm, ProductListingResult $listing, SalesChannelContext $context) {

        $enhanced_ecom_tags = [];

        //Currency Code
        $enhanced_ecom_tags['currencyCode'] = $context->getCurrency()->getIsoCode();

        //Impressions
        $enhanced_ecom_tags['impressions'] = $this->getImpressions($listing->getEntities(), 'Search');

        $enhanced_ecom_tags = $this->addEeEvent($enhanced_ecom_tags, '');
        return $enhanced_ecom_tags;

    }

    /**
     * SW6 ready
     *
     * @param $cartOrOrder
     * @param $event
     * @return array
     * @throws \Exception
     */
    public function getCheckoutTags($cartOrOrder, $event) {

        $pluginConfig = $this->getGtmConfig($event->getSalesChannelContext()->getSalesChannel()->getId());
        $addCategoryNames = (isset($pluginConfig['eeAddCategorynameInCheckout'])) ? $pluginConfig['eeAddCategorynameInCheckout'] : false;

        $enhanced_ecom_tags = [];
        //Currency Code
        $enhanced_ecom_tags['currencyCode'] = $event->getSalesChannelContext()->getCurrency()->getIsoCode();

        //Detail Impressions
        $enhanced_ecom_tags['checkout'] = array();
        $enhanced_ecom_tags['checkout']['actionField'] = array(
            'step' => $this->getCheckoutStep($event),
        );
        $enhanced_ecom_tags['checkout']['products'] = $this->getBasketItems($cartOrOrder->getLineItems(), $event->getSalesChannelContext(), $addCategoryNames);

        $enhanced_ecom_tags = $this->addEeEvent($enhanced_ecom_tags, 'checkout');
        return $enhanced_ecom_tags;

    }

    /**
     * SW6 ready
     *
     * @param OrderEntity $order
     * @param SalesChannelContext $context
     * @return array
     * @throws \Exception
     */
    public function getPurchaseConfirmationTags(OrderEntity $order, SalesChannelContext $context) {

        $pluginConfig = $this->getGtmConfig($context->getSalesChannel()->getId());
        $addCategoryNames = (isset($pluginConfig['eeAddCategorynameInCheckout'])) ? $pluginConfig['eeAddCategorynameInCheckout'] : false;
        $useNetPrices = isset($pluginConfig['showPriceType']) && $pluginConfig['showPriceType'] == 'netto';

        $enhanced_ecom_tags = [];
        //Currency Code
        $enhanced_ecom_tags['currencyCode'] = $context->getCurrency()->getIsoCode();

        //added in 6.1.24
        $shipping = $order->getShippingCosts();
        if($shipping instanceof CalculatedPrice) $shipping_tax_rate = $shipping->getTaxRules()->first();
        else $shipping_tax_rate = null;

        if($shipping_tax_rate) {
            $shippingTax = $shipping_tax_rate->getTaxRate();
        }
        else {
            //Bugfix for tax free countries, V6.1.4
            $shippingTax = 0;
        }

        //added in 6.1.24
        $revenue = ($useNetPrices) ? $order->getAmountNet() : $order->getAmountTotal();

        $actionField = array(
            'id'        => $order->getOrderNumber(),
            'revenue'   => $revenue,
            'tax'       => $this->priceHelper->formatPrice($order->getAmountTotal() - $order->getAmountNet()),
            'shipping'  => (float) $this->priceHelper->getPrice($order->getShippingTotal(), $shippingTax),
        );

        $lineItems = $order->getLineItems()->filterByType(PromotionProcessor::LINE_ITEM_TYPE);
        if ($lineItems->count() >= 1) {
            $promoCode = $this->getPromotionCode($order->getLineItems());
            if($promoCode != '') {
                $actionField['coupon'] = $promoCode;
            }
        }

        //Finish fields
        $enhanced_ecom_tags['purchase'] = array();
        $enhanced_ecom_tags['purchase']['actionField'] = $actionField;
        $enhanced_ecom_tags['purchase']['products'] = $this->getBasketItems($order->getLineItems(), $context, $addCategoryNames);

        $enhanced_ecom_tags = $this->addEeEvent($enhanced_ecom_tags, 'shopwareGTM.orderCompleted');
        return $enhanced_ecom_tags;

    }

    /**
     * @param $listing
     * @param string $listName
     * @param string $category
     * @return array
     * @throws \Exception
     */
    private function getImpressions($listing, $listName = 'Search', $category = '') {

        $tags = array();
        if(empty($listing)) return $tags;

        $i = 0;

        foreach($listing as $product) {
            /** @var SalesChannelProductEntity $product */
            $price = ($product->getCalculatedPrices()->count()) ? $product->getCalculatedPrices()->first()->getUnitPrice() : $product->getCalculatedPrice()->getUnitPrice();
            $brutto_price = (is_float($price)) ? $price : str_replace(',', '.', $price);

            $taxRate = $product->getCalculatedPrice()->getTaxRules()->first();
            if($taxRate) {
                $tax = $taxRate->getTaxRate();
            }
            else {
                //Bugfix for tax free countries, V6.1.4
                $tax = 0;
            }

            $item = array(
                'name'      =>  $product->getTranslation('name'),
                'id'        =>  $product->getProductNumber(),
                'price'     =>  (float) $this->priceHelper->getPrice($brutto_price, $tax),
                'brand'     =>  ($product->getManufacturer() !== null) ? $product->getManufacturer()->getTranslation('name') : '',
                'position'  =>  ++$i
            );
            if($listName) $item['list'] = $listName;
            if($category) $item['category'] = $category;
            $tags[] = $item;
        }

        return $tags;

    }

    /**
     * @param $listing
     * @param SalesChannelContext $context
     * @param bool $addCategoryNames
     * @return array
     */
    private function  getBasketItems($listing, SalesChannelContext $context, $addCategoryNames = false) {

        $tags = array();
        if(empty($listing)) return $tags;

        foreach($listing as $product) {
            /** @var LineItem $product */
            $taxRate = $product->getPrice()->getTaxRules()->first();
            if($taxRate) {
                $tax = $taxRate->getTaxRate();
            }
            else {
                //Bugfix for tax free countries, V6.1.4
                $tax = 0;
            }

            $payload = $product->getPayload();

            $productNumber = (isset($payload['productNumber'])) ? $payload['productNumber'] : 'voucher';

            $item = array(
                'name'      =>  $product->getLabel(),
                'id'        =>  $productNumber,
                'price'     =>  (float) $this->priceHelper->getPrice($product->getPrice()->getUnitPrice(), $tax),
                'quantity'  =>  $product->getQuantity(),
            );

            if(isset($payload['manufacturerId'])) {
                //V6.1.20: add manufacturer-name
                $manufacturer = $this->manufacturerHelper->getManufacturerById($payload['manufacturerId'], $context);
                if($manufacturer !== null) {
                    $item['brand'] = $manufacturer->getTranslation('name');
                }
            }

            //Product Category - Changed to SEO Category in V6.1.22
            if($addCategoryNames) {
                if($product->getReferencedId()) {
                    $salesChannelProduct = $this->productHelper->getSalesChannelProductEntityByProductId($product->getReferencedId(), $context);
                    if($salesChannelProduct !== null && $salesChannelProduct->getSeoCategory() !== null) {
                        $item['category'] = $salesChannelProduct->getSeoCategory()->getTranslation('name');
                    }
                }
            }

            $tags[] = $item;
        }

        return $tags;

    }

    /**
     * @param $event
     * @return int
     */
    private function getCheckoutStep($event) {

        $step = 0;

        switch (get_class($event)) {
            case CheckoutCartPageLoadedEvent::class:
                $step =  1;
                break;
            case CheckoutConfirmPageLoadedEvent::class:
                $step =  3;
                break;
            case CheckoutRegisterPageLoadedEvent::class:
                $step =  2;
                break;
            default:
                $step =  0;
                break;
        }

        return $step;

    }

    /**
     * @param $lineItems LineItemCollection
     */
    private function getPromotionCode($lineItems)
    {
        foreach ($lineItems as $lineItem) {

            $payload = $lineItem->getPayload();

            if (isset($payload['discountType'])) {
                return $payload['code'] ?? '';
            }

        }
    }

}
