<?php declare(strict_types=1);

namespace Dtgs\GoogleTagManager\Services;

use Dtgs\GoogleTagManager\Components\Helper\CategoryHelper;
use Dtgs\GoogleTagManager\Components\Helper\LoggingHelper;
use Dtgs\GoogleTagManager\Components\Helper\PriceHelper;
use Exception;
use Shopware\Core\Checkout\Cart\LineItem\LineItem;
use Shopware\Core\Checkout\Cart\Tax\Struct\CalculatedTax;
use Shopware\Core\Checkout\Order\OrderEntity;
use Shopware\Core\Content\Category\CategoryCollection;
use Shopware\Core\Content\Product\SalesChannel\Listing\ProductListingResult;
use Shopware\Core\Content\Product\SalesChannel\SalesChannelProductEntity;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Core\System\SystemConfig\SystemConfigService;
use Symfony\Component\HttpFoundation\Request;

class DatalayerService
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
     * Maybe move to general helper
     *
     * @param array $generalTags
     * @param array $navigationTags
     * @param array $accountTags
     * @param array $detailTags
     * @param array $checkoutTags
     * @param array $customerTags
     * @param array $customGetTags
     * @param array $utmTags
     * @param array $searchTags
     * @return false|string
     */
    public function prepareTagsForView(
        array $generalTags,
        array $navigationTags,
        array $accountTags,
        array $detailTags,
        array $checkoutTags,
        array $customerTags,
        array $customGetTags,
        array $utmTags,
        array $searchTags
        )
    {
        $return = array_merge(
            $generalTags,
            $navigationTags,
            $accountTags,
            $detailTags,
            $checkoutTags,
            $customerTags,
            $customGetTags,
            $utmTags,
            $searchTags
        );

        return json_encode($return);
    }

    /**
     * SW6 ready
     *
     * since V2.5.0
     * multiple Tag Manager Container IDs
     * @return array|bool
     */
    public function getContainerIds($salesChannelId) {

        $tagManagerConfig = $this->getGtmConfig($salesChannelId);

        if(isset($tagManagerConfig['googleId']) && $tagManagerConfig['googleId'] != '') {
            $ids = explode(',', $tagManagerConfig['googleId']);
            return $ids;
        }

        return false;

    }

    /**
     * SW6 ready
     *
     * @param SalesChannelProductEntity $product
     * @param SalesChannelContext $context
     * @return array
     * @throws Exception
     */
	public function getDetailTags(SalesChannelProductEntity $product, SalesChannelContext $context) {

		$detailTags = [];

	    if($product->getId()) {
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

            $detailTags['productID'] = $product->getId();
            $detailTags['productName'] = $product->getTranslation('name');
            $detailTags['productPrice'] = $this->priceHelper->getPrice($brutto_price, $tax);
            $detailTags['productEAN'] = $product->getEan();
            $detailTags['productSku'] = $product->getProductNumber();

            //Product Category - Changed to SEO Category in V6.1.22
            $seoCategory = $product->getSeoCategory();
            if($seoCategory) {
                $detailTags['productCategory'] = $seoCategory->getTranslation('name');
            }

		}
        $detailTags['productCurrency'] = $context->getCurrency()->getIsoCode();

        //Since 2.2.3
        if($this->loggingHelper->loggingType('debug')) $this->loggingHelper->logMsg('Detail-Tags: ' . json_encode($detailTags));

	    return $detailTags;

	}

    /**
     * SW6 ready
     *
     * @return array
     */
    public function getNavigationTags()
    {
        //no explicit navigation Tags so far
        $tags = [];

        if($this->loggingHelper->loggingType('debug')) $this->loggingHelper->logMsg('Navigation-Tags: ' . json_encode($tags));

        return $tags;
    }

    /**
     * SW6 ready
     *
     * @return array
     */
    public function getAccountTags()
    {
        //no explicit account Tags so far
        $tags = [];

        if($this->loggingHelper->loggingType('debug')) $this->loggingHelper->logMsg('Account-Tags: ' . json_encode($tags));

        return $tags;
    }

    /**
     * SW6 ready
     *
     * @param $cartOrOrder (either Cart or Order)
     * @param SalesChannelContext $context
     * @return array
     * @throws Exception
     */
	public function getCheckoutTags($cartOrOrder, SalesChannelContext $context) {

        $checkoutTags = [];

		//Conversion Data
        $checkoutTags['conversionDate'] = date('Ymd');

		//New in 1.3.5 - select if brutto/netto
		if($this->priceHelper->getPriceType() == 'netto') $checkoutTags['conversionValue'] = $cartOrOrder->getPrice()->getNetPrice();
		else $checkoutTags['conversionValue'] = $cartOrOrder->getPrice()->getTotalPrice();

        $checkoutTags['conversionType'] = ''; //???
        $checkoutTags['conversionId'] = 'null';
        $checkoutTags['conversionAttributes'] = ''; //tbd

		//Transaction Data
        $checkoutTags['transactionId'] = 'null';
        $checkoutTags['transactionDate'] = date('Ymd');
        $checkoutTags['transactionType'] = ''; //???
        $checkoutTags['transactionAffiliation'] = $context->getSalesChannel()->getName(); //Shopname

		//New in 1.3.5 - select if brutto/netto
		if($this->priceHelper->getPriceType() == 'netto') $checkoutTags['transactionTotal'] = $cartOrOrder->getPrice()->getNetPrice();
		else $checkoutTags['transactionTotal'] = $cartOrOrder->getPrice()->getTotalPrice();

		$taxRate = $cartOrOrder->getPrice()->getCalculatedTaxes()->first();
		if($taxRate) {
            /** @var $taxRate CalculatedTax */
		    $checkoutTags['transactionTax'] = (float)$this->priceHelper->formatPrice($taxRate->getTax());
        }
		else {
            //Bugfix for tax free countries, V6.1.4
		    $checkoutTags['transactionTax'] = 0;
        }


		//New in 1.3.5 - select if brutto/netto
		if($this->priceHelper->getPriceType() == 'netto') {
            $taxRate = $cartOrOrder->getShippingCosts()->getTaxRules()->first();
            if($taxRate) {
                $tax = $taxRate->getTaxRate();
            }
            else {
                //Bugfix for tax free countries, V6.1.10
                $tax = 0;
            }
		    $checkoutTags['transactionShipping'] = $this->priceHelper->parseFloat($this->priceHelper->getPrice($cartOrOrder->getShippingCosts()->getTotalPrice(), $tax));
        }
		else $checkoutTags['transactionShipping'] = $this->priceHelper->parseFloat($cartOrOrder->getShippingCosts()->getTotalPrice());

        $checkoutTags['transactionPaymentType'] = $context->getPaymentMethod()->getTranslation('name');
        $checkoutTags['transactionCurrency'] = $context->getCurrency()->getIsoCode();

        //V6.1.5
        $deliveryType = $cartOrOrder->getDeliveries()->first();
        if($deliveryType) {
            $checkoutTags['transactionShippingMethod'] = ($cartOrOrder->getDeliveries()->first()->getShippingMethod()) ? $cartOrOrder->getDeliveries()->first()->getShippingMethod()->getName() : 'none';
        }
        else {
            $checkoutTags['transactionShippingMethod'] = 'none';
        }

        $checkoutTags['transactionProducts'] = array();

		//New in 1.3.5 - select if brutto/netto
		if($this->priceHelper->getPriceType() == 'netto') $priceIndex = 'netprice';
		else $priceIndex = 'price';

		//Transaction Product Data
		foreach($cartOrOrder->getLineItems() as $item) {
            if (isset($item->getPayload()['promotionId'])) {
                $voucher = $item->getPayload();
                $checkoutTags['transactionPromoCode'] = $voucher['code'];
            } else {
                /** @var LineItem $item */
                $checkoutTags['transactionProducts'][] = array(
                    'id' => $item->getId(),
                    'name' => $item->getLabel(),
                    'sku' => $item->getPayload()['productNumber'] ?? 'none',
                    //'category' => '', //nicht vorhanden im Array
                    'price' => $item->getPrice()->getUnitPrice(),
                    'quantity' => $item->getQuantity(),
                );
            }
		}

        //Since 2.2.3
		if($this->loggingHelper->loggingType('debug')) $this->loggingHelper->logMsg('Checkout-Tags: ' . json_encode($checkoutTags));

		return $checkoutTags;

	}

    /**
     * SW6 ready
     *
     * @param OrderEntity $order
     * @param SalesChannelContext $context
     * @param Request $request
     * @return array
     * @throws Exception
     */
	public function getFinishTags(OrderEntity $order, SalesChannelContext $context) {

        $checkoutTags = $this->getCheckoutTags($order, $context);
        $finishTags = [];

        $checkoutTags['conversionId'] = $order->getOrderNumber();
        $checkoutTags['transactionId'] = $order->getOrderNumber();

        $tags = array_merge(
            $checkoutTags,
            $finishTags
        );

        //Since 2.2.3
        if($this->loggingHelper->loggingType('debug')) $this->loggingHelper->logMsg('Checkout-Tags: ' . json_encode($tags));

        return $tags;

    }

    /**
     * SW6 ready
     *
     * @param $searchTerm
     * @param ProductListingResult $listing
     * @return array
     */
	public function getSearchTags($searchTerm, ProductListingResult $listing) {

        $tags = array();

	    $tags['siteSearchTerm'] = $searchTerm;
		$tags['siteSearchFrom'] = '';
		$tags['siteSearchCategory'] = '';
		$tags['siteSearchResults'] = $listing->getTotal();

		return $tags;

	}

}
