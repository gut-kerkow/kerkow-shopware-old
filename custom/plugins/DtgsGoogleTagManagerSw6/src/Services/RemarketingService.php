<?php declare(strict_types=1);

namespace Dtgs\GoogleTagManager\Services;

use Dtgs\GoogleTagManager\Components\Helper\CategoryHelper;
use Dtgs\GoogleTagManager\Components\Helper\LoggingHelper;
use Dtgs\GoogleTagManager\Components\Helper\PriceHelper;
use Shopware\Core\Checkout\Cart\Cart;
use Shopware\Core\Checkout\Cart\LineItem\LineItem;
use Shopware\Core\Checkout\Order\OrderEntity;
use Shopware\Core\Content\Product\SalesChannel\SalesChannelProductEntity;
use Shopware\Core\Framework\DataAbstractionLayer\Search\EntitySearchResult;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Core\System\SystemConfig\SystemConfigService;

class RemarketingService
{
    private $systemConfigService;
    private $priceHelper;
    private $loggingHelper;
    /**
     * @var CategoryHelper
     */
    private $categoryHelper;

    public function __construct(SystemConfigService $systemConfigService,
                                CategoryHelper $categoryHelper,
                                PriceHelper $priceHelper,
                                LoggingHelper $loggingHelper)
    {
        $this->systemConfigService = $systemConfigService;
        $this->categoryHelper = $categoryHelper;
        $this->priceHelper = $priceHelper;
        $this->loggingHelper = $loggingHelper;
    }

    /**
     * @param $remarketingTags
     * @return false|string
     */
    public function prepareTagsForView($remarketingTags)
    {
        return json_encode($remarketingTags);
    }

    /**
     * SW6 ready
     *
     * @return array
     */
    public function getBasicTags()
    {
        //no explicit navigation Tags so far
        $remarketing_tags = [];
        $remarketing_tags['ecomm_pagetype'] = 'other';

        if($this->loggingHelper->loggingType('debug')) $this->loggingHelper->logMsg('Navigation-Tags: ' . json_encode($remarketing_tags));

        return $remarketing_tags;
    }

    /**
     * SW6 ready
     *
     * @param SalesChannelProductEntity $product
     * @param SalesChannelContext $context
     * @return array
     * @throws \Exception
     */
    public function getDetailTags(SalesChannelProductEntity $product, SalesChannelContext $context) {

        $remarketing_tags = array();

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

        $remarketing_tags['ecomm_pagetype'] = 'product';

        //Product Category - Changed to SEO Category in V6.1.22
        $seoCategory = $product->getSeoCategory();
        if($seoCategory) {
            $remarketing_tags['ecomm_pcat'] = [$seoCategory->getTranslation('name')];
        }

        $remarketing_tags['ecomm_prodid'] = $product->getProductNumber();
        $remarketing_tags['ecomm_pname'] = $product->getTranslation('name');
        $remarketing_tags['ecomm_pvalue'] =  (float) $this->priceHelper->getPrice($brutto_price, $tax);
        $remarketing_tags['ecomm_totalvalue'] = (float) $this->priceHelper->getPrice($brutto_price, $tax);

        return $remarketing_tags;

    }

    /**
     * SW6 ready
     *
     * @return array
     */
    public function getNavigationTags($navigationId, $listing, SalesChannelContext $context) {

        $remarketing_tags = [];

        $remarketing_tags['ecomm_pagetype'] = 'category';

        $category = $this->categoryHelper->getCategoryById($navigationId, $context);
        $remarketing_tags['ecomm_pcat'] = array($category->getTranslation('name'));

        $remarketing_tags['ecomm_prodid'] = array();
        foreach($listing as $prod) {
            /** @var SalesChannelProductEntity $prod */
            $productNumber = $prod->getProductNumber();
            $remarketing_tags['ecomm_prodid'][] = (!empty($productNumber)) ? $productNumber : $prod->getId();
        }
        return $remarketing_tags;

    }

    /**
     * SW6 ready
     *
     * @param Cart|OrderEntity $cartOrOrder
     * @return array
     * @throws \Exception
     */
    public function getCheckoutTags($cartOrOrder) {

        $remarketing_tags = array();
        $categoriesAsArray = array();
        $skuAsArray = array();
        $namesAsArray = array();
        $valuesAsArray = array();

        $taxRate = $cartOrOrder->getPrice()->getTaxRules()->first();
        if($taxRate) {
            $tax = $taxRate->getTaxRate();
        }
        else {
            //Bugfix for tax free countries, V6.1.4
            $tax = 0;
        }

        foreach($cartOrOrder->getLineItems() as $item) {
            /** @var LineItem $item */
            if(isset($item->getPayload()['productNumber'])) {
                $skuAsArray[] = $item->getPayload()['productNumber'];
                $namesAsArray[] = $item->getLabel();
                $valuesAsArray[] = (float) $this->priceHelper->getPrice($item->getPrice()->getUnitPrice(), $tax);
            }
        }

        $remarketing_tags['ecomm_pagetype'] = 'cart';
        $remarketing_tags['ecomm_pcat'] = $categoriesAsArray;
        $remarketing_tags['ecomm_prodid'] = $skuAsArray;
        $remarketing_tags['ecomm_pname'] = $namesAsArray;
        $remarketing_tags['ecomm_pvalue'] = $valuesAsArray;
        //total cart value
        if($this->priceHelper->getPriceType() == 'netto') $remarketing_tags['ecomm_totalvalue'] = (float) $cartOrOrder->getPrice()->getNetPrice();
        else $remarketing_tags['ecomm_totalvalue'] = (float) $cartOrOrder->getPrice()->getTotalPrice();

        return $remarketing_tags;

    }

    /**
     * SW6 ready
     *
     * @param OrderEntity $order
     * @return array
     * @throws \Exception
     */
    public function getPurchaseConfirmationTags(OrderEntity $order) {

        $remarketing_tags = $this->getCheckoutTags($order);
        //Hier muss nur ein Wert überschrieben werden
        $remarketing_tags['ecomm_pagetype'] = 'purchase';

        return $remarketing_tags;

    }

    /**
     * SW6 ready
     *
     * @return array
     */
    public function getSearchTags() {

        $remarketing_tags = $this->getBasicTags();
        //Hier muss nur ein Wert überschrieben werden
        $remarketing_tags['ecomm_pagetype'] = 'searchresults';

        return $remarketing_tags;

    }

}
