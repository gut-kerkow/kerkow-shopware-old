<?php

declare(strict_types=1);

namespace Productfeed\Service;

use Exception;
use Monolog\Logger;
use Shopware\Core\Content\Product\Cart\ProductLineItemFactory;
use Productfeed\Core\Content\Productfeed\ProductfeedEntity;
use Shopware\Core\Checkout\Cart\Cart;
use Shopware\Core\Checkout\Cart\CartBehavior;
use Shopware\Core\Checkout\Cart\Delivery\DeliveryBuilder;
use Shopware\Core\Checkout\Cart\Delivery\DeliveryCalculator;
use Shopware\Core\Checkout\Cart\Delivery\DeliveryProcessor;
use Shopware\Core\Checkout\Cart\Delivery\Struct\DeliveryCollection;
use Shopware\Core\Checkout\Cart\Delivery\Struct\DeliveryInformation;
use Shopware\Core\Checkout\Cart\Delivery\Struct\ShippingLocation;
use Shopware\Core\Checkout\Cart\LineItem\CartDataCollection;
use Shopware\Core\Checkout\Cart\LineItem\LineItem;
use Shopware\Core\Checkout\Cart\LineItem\LineItemCollection;
use Shopware\Core\Checkout\Cart\LineItem\QuantityInformation;
use Shopware\Core\Checkout\Cart\Price\Struct\CalculatedPrice;
use Shopware\Core\Content\Product\Aggregate\ProductTranslation\ProductTranslationEntity;
use Shopware\Core\Content\Product\ProductEntity;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\ContainsFilter;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Core\System\SalesChannel\Context\AbstractSalesChannelContextFactory;
use Shopware\Core\Checkout\Cart\SalesChannel\CartService;
use Shopware\Core\Checkout\Cart\Tax\Struct\CalculatedTaxCollection;
use Shopware\Core\Checkout\Cart\Tax\Struct\TaxRuleCollection;
use Shopware\Core\Checkout\Customer\Aggregate\CustomerAddress\CustomerAddressEntity;
use Shopware\Core\Checkout\Customer\CustomerEntity;
use Shopware\Core\Checkout\Shipping\ShippingMethodEntity;
use Shopware\Core\Content\Product\SalesChannel\Price\ProductPriceCalculator;
use Shopware\Core\Defaults;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;
use Shopware\Core\Framework\Uuid\Uuid;
use Shopware\Core\System\Country\CountryEntity;
use \Shopware\Core\System\Currency\CurrencyEntity;
use Shopware\Core\System\Currency\CurrencyFormatter;
use Shopware\Core\System\Tax\TaxCollection;

class ProductfeedProductExtensionService
{

    protected EntityRepositoryInterface $propertyGroupRepository;

    protected EntityRepositoryInterface $seoUrlRepository;

    protected EntityRepositoryInterface $categoryRepository;

    protected AbstractSalesChannelContextFactory $salesChannelContextFactory;

    protected CartService $cartService;

    protected CurrencyFormatter $currencyFormatter;

    protected DeliveryCalculator $deliveryCalculator;

    protected DeliveryBuilder $deliveryBuilder;

    protected EntityRepositoryInterface $taxRepository;

    protected EntityRepositoryInterface $customerRepository;

    protected EntityRepositoryInterface $salutationRepository;

    protected ProductPriceCalculator $productPriceCalculator;

    public function __construct(
        EntityRepositoryInterface $propertyGroupRepository,
        EntityRepositoryInterface $seoUrlRepository,
        EntityRepositoryInterface $categoryRepository,
        CartService $cartService,
        AbstractSalesChannelContextFactory $abstractSalesChannelContextFactory,
        CurrencyFormatter $currencyFormatter,
        DeliveryCalculator $deliveryCalculator,
        DeliveryBuilder $deliveryBuilder,
        EntityRepositoryInterface $taxRepository,
        EntityRepositoryInterface $customerRepository,
        EntityRepositoryInterface $salutationRepository,
        ProductPriceCalculator $productPriceCalculator
    ) {
        $this->propertyGroupRepository = $propertyGroupRepository;
        $this->seoUrlRepository = $seoUrlRepository;
        $this->categoryRepository = $categoryRepository;
        $this->cartService = $cartService;
        $this->salesChannelContextFactory = $abstractSalesChannelContextFactory;
        $this->currencyFormatter = $currencyFormatter;
        $this->deliveryCalculator = $deliveryCalculator;
        $this->deliveryBuilder = $deliveryBuilder;
        $this->taxRepository = $taxRepository;
        $this->customerRepository = $customerRepository;
        $this->salutationRepository = $salutationRepository;
        $this->productPriceCalculator = $productPriceCalculator;
    }

    public function addAttributesToProduct(ProductEntity $product, Context $context, ProductfeedEntity $feed)
    {
        $languageId = $feed->getLanguageId();
        if (is_null($languageId)) {
            $languageId = Defaults::LANGUAGE_SYSTEM;
        }
        $currency = $feed->getCurrency();
        if (is_null($currency)) {
            $currency = $feed->getSalesChannel()->getCurrency();
        }
        $salesChannelContext = $this->salesChannelContextFactory->create(Uuid::randomHex(), $feed->getSalesChannelId());
        $salesChannelContext = new SalesChannelContext(
            $salesChannelContext->getContext(),
            $salesChannelContext->getToken(),
            $salesChannelContext->getDomainId(),
            $salesChannelContext->getSalesChannel(),
            $currency,
            $salesChannelContext->getCurrentCustomerGroup(),
            $salesChannelContext->getFallbackCustomerGroup(),
            $salesChannelContext->getTaxRules(),
            $salesChannelContext->getPaymentMethod(),
            $salesChannelContext->getShippingMethod(),
            $salesChannelContext->getShippingLocation(),
            $salesChannelContext->getCustomer(),
            $salesChannelContext->getItemRounding(),
            $salesChannelContext->getTotalRounding(),
            $salesChannelContext->getRuleIds()
        );

        $this->updateTranslations($product, $feed);

        $this->addPropertiesToProduct($product, $context);

        $this->addImageLinkToProductIfPossible($product);

        $this->addProductUrlIfPossible($product, $context);

        $this->addCatgoryStringToProduct($product, $context);

        $this->addPriceToProduct($product, $currency, $languageId, $context);

        $country = $feed->getCountry();
        if (is_null($country)) {
            $country = $feed->getSalesChannel()->getCountry();
        }
        $this->addDeliveryPriceToProduct($product, $feed, $salesChannelContext, $languageId, $currency, $context, $country);

        $this->addRealPrice($product, $currency, $salesChannelContext, $languageId, $context, $country);
    }

    protected function updateTranslations(ProductEntity $product, ProductfeedEntity $feed): void
    {
        $languageId = $feed->getLanguageId();
        if (is_null($languageId)) {
            $languageId = $feed->getSalesChannel()->getLanguageId();
        }

        $this->updateMetaDescripton($product, $languageId);

        $this->updateProductName($product, $languageId);

        $this->updateKeyWords($product, $languageId);

        $this->updateProductDescription($product, $languageId);

        $this->updateMetaTitle($product, $languageId);

        $this->updatePackUnit($product, $languageId);

        $this->updateCustomFields($product, $languageId);

        $this->updateSlotConfig($product, $languageId);

        $this->updatePackUnitPlural($product, $languageId);

        $this->updatecustomSearchKeywords($product, $languageId);
    }
    
    protected function updateMetaDescripton(ProductEntity $product, string $languageId): void
    {
        $metaDescription = $this->getProductsTranslations($product, $languageId)
            ->getMetaDescription();

        if (!empty($metaDescription)) {
            $product->setMetaDescription($metaDescription);
        }
    }

    protected function updateProductName(ProductEntity $product, string $languageId): void
    {
        $name = $this->getProductsTranslations($product, $languageId)
            ->getName();

        if (!empty($name)) {
            $product->setName($name);
        }
    }

    protected function updateKeyWords(ProductEntity $product, string $languageId): void
    {
        $keywords = $this->getProductsTranslations($product, $languageId)
            ->getKeywords();

        if (!empty($keywords)) {
            $product->setKeywords($keywords);
        }
    }

    protected function updateProductDescription(ProductEntity $product, string $languageId): void
    {
        $description = $this->getProductsTranslations($product, $languageId)
            ->getDescription();

        if (!empty($description)) {
            $product->setDescription(html_entity_decode($description));
        }
    }

    protected function updateMetaTitle(ProductEntity $product, string $languageId): void
    {
        $metaTitle = $this->getProductsTranslations($product, $languageId)
            ->getMetaTitle();

        if (!empty($metaTitle)) {
            $product->setMetaTitle($metaTitle);
        }
    }

    protected function updatePackUnit(ProductEntity $product, string $languageId): void
    {
        $packUnit = $this->getProductsTranslations($product, $languageId)
            ->getPackUnit();
        
        if (!empty($packUnit)) {
            $product->setPackUnit($packUnit);
        }
    }

    protected function updateCustomFields(ProductEntity $product, string $languageId): void
    {
        $customFields = $this->getProductsTranslations($product, $languageId)
            ->getCustomFields();

        if (!empty($customFields)) {
            $product->setCustomFields($customFields);
        }
    }

    protected function updateSlotConfig(ProductEntity $product, string $languageId): void
    {
        $slotConfig = $this->getProductsTranslations($product, $languageId)
            ->getSlotConfig();

        if (!empty($slotConfig)) {
            $product->setSlotConfig($slotConfig);
        }
    }

    protected function updatePackUnitPlural(ProductEntity $product, string $languageId): void 
    {
        $packUnitPlural = $this->getProductsTranslations($product, $languageId)
            ->getPackUnitPlural();

        if (!empty($packUnitPlural)) {
            $product->setPackUnitPlural($packUnitPlural);
        }
    }

    protected function updateCustomSearchKeywords(ProductEntity $product, string $languageId): void
    {
        $customSearchKeywords = $this->getProductsTranslations($product, $languageId)
            ->getCustomSearchKeywords();

        if (!empty($customSearchKeywords)) {
            $product->setCustomSearchKeywords($customSearchKeywords);
        }
    }

    protected function getProductsTranslations(ProductEntity $product, string $languageId): ProductTranslationEntity
    {
        $translations = $product
            ->getTranslations();

        if (is_null($translations) || count($translations->getElements()) === 0) {
            throw new Exception($product->getId() . " has no translations");
        }
        
        $translation = $translations->filterByLanguageId($languageId)->first();

        if (is_null($translation)) {
            $translation = $translations->filterByLanguageId(Defaults::LANGUAGE_SYSTEM)->first();
        }

        return $translation;
    }

    protected function addPropertiesToProduct(ProductEntity $product, Context $context)
    {
        $customProperty = (object)[];

        foreach ($product->getProperties() as $propertyGroupOption) {

            $value = $propertyGroupOption->getName();
            $key = $propertyGroupOption->getGroup()->getName();

            // add property to product
            if (!property_exists($customProperty, $key)) {
                // as property
                $customProperty->{$key} = $value;

            } else {
                if (is_array($customProperty->{$key})) {
                    // push to array if there's already an array
                    $customProperty->{$key}[] = $value;
                } else {
                    // create array if property already exists for the product
                    $customProperty->{$key} = [$customProperty->{$key}, $value];
                }
            }
        }

        $product->{'customProperties'} = $customProperty;
    }

    protected function addImageLinkToProductIfPossible(ProductEntity $product): void
    {
        // add image url to product if it exists
        foreach ($product->getMedia() as $mediaProduct) {
            if ($mediaProduct->getPosition() === 0) {
                if ($mediaProduct->getMedia() !== null) {
                    $product->{'image_link'} = $mediaProduct->getMedia()->getUrl();
                }
            }
        }
    }

    protected function addProductUrlIfPossible(ProductEntity $product, Context $context): void
    {
        $c = new Criteria();
        $c->addFilter(new ContainsFilter('seoPathInfo', $product->getProductNumber()));
        /** @var SeoUrlEntity $result */
        $result = $this->seoUrlRepository->search($c, $context)->getEntities()->first();
        if ($result) {
            $product->{'url'} = $_ENV['APP_URL'] . '/' . $result->getSeoPathInfo();
        }
    }

    protected function addCatgoryStringToProduct(ProductEntity $product, Context $context): void
    {
        // add category to product
        $categoryString = '';
        if ($product->getCategoryTree()) {
            foreach ($product->getCategoryTree() as $categoryId) {
                if ($categoryString !== '') {
                    $categoryString .= ', ';
                }
                $criteria = new Criteria();
                $criteria->addFilter(new EqualsFilter('id', $categoryId));
                /** @var CategoryEntity $category */
                $category = $this->categoryRepository->search($criteria, $context)->getEntities()->first();
                $categoryString .= $category->getName();
            }
            $product->{'category'} = $categoryString;
        }
    }

    protected function addPriceToProduct(ProductEntity $product, CurrencyEntity $currency, string $languageId, Context $context): void
    {
        $price = $product->getCurrencyPrice($currency->getId());

        if ($price !== null) {
            $product->{'gross'} = $this->currencyFormatter->formatCurrencyByLanguage($price->getGross(), $currency->getIsoCode(), $languageId, $context);
            $product->{'net'} = $this->currencyFormatter->formatCurrencyByLanguage($price->getNet(), $currency->getIsoCode(), $languageId, $context);
        } else {
            $product->{'gross'} = 'NULL';
            $product->{'net'} = 'NULL';
        }
    }

    protected function addDeliveryPriceToProduct(
        ProductEntity $product, 
        ProductfeedEntity $feed, 
        SalesChannelContext $salesChannelContext,
        string $languageId,
        CurrencyEntity $currency,
        Context $context,
        CountryEntity $country
    ): void {
        $shippingMethod = $feed->getSalesChannel()->getShippingMethod();

        foreach ($feed->getSalesChannel()->getShippingMethods() as $shippingMethod) {
            $salesChannelContext = new SalesChannelContext(
                $salesChannelContext->getContext(),
                $salesChannelContext->getToken(),
                $salesChannelContext->getDomainId(),
                $salesChannelContext->getSalesChannel(),
                $salesChannelContext->getCurrency(),
                $salesChannelContext->getCurrentCustomerGroup(),
                $salesChannelContext->getFallbackCustomerGroup(),
                $salesChannelContext->getTaxRules(),
                $salesChannelContext->getPaymentMethod(),
                $shippingMethod,
                $salesChannelContext->getShippingLocation(),
                $salesChannelContext->getCustomer(),
                $salesChannelContext->getItemRounding(),
                $salesChannelContext->getTotalRounding(),
                $salesChannelContext->getRuleIds()
            );

            $deliveries = $this->createDeliveries($shippingMethod, $salesChannelContext, $this->defaultLineItem());
            $deliveries->first()->setShippingMethod($shippingMethod);

            $data = new CartDataCollection();
            $data->set(DeliveryProcessor::buildKey($shippingMethod->getId()), $shippingMethod);
            
            $this->deliveryCalculator->calculate($data, new Cart('placeholder', 'placeholder'), $deliveries, $salesChannelContext);
        }
        
            


        $minCost = null;
        foreach($deliveries as $delivery) {
            $deliveryCost = $delivery->getShippingCosts()->getTotalPrice();

            if ($delivery->getLocation()->getCountry() != $country) {
                continue;
            }
            
            if (is_null($minCost)) {
                $minCost = $deliveryCost;
            }

            if ($deliveryCost < $minCost) {
                $minCost = $deliveryCost;
            }
        }
        

        $product->{'shippingPrice'} = $this->currencyFormatter->formatCurrencyByLanguage($deliveryCost, $currency->getIsoCode(), $languageId, $context);
    }

    protected function createDeliveries(ShippingMethodEntity $shippingMethod, SalesChannelContext $salesChannelContext, LineItemCollection $lineItems): DeliveryCollection
    {
        $data = new CartDataCollection();
        $data->set(DeliveryProcessor::buildKey($shippingMethod->getId()), $shippingMethod);

        $cart = new Cart('placeholder', 'placeholder');
        $cart->setLineItems($lineItems);

        return $this->deliveryBuilder->build($cart, $data, $salesChannelContext, new CartBehavior());
    }

    protected function defaultLineItem(): LineItemCollection
    {
        $lineItem = new LineItem(Uuid::randomHex(), 'product');
        $lineItem->setDeliveryInformation(
            new DeliveryInformation(
                10,
                12.0,
                false,
                null,
                null
            )
        );
        $lineItem->setPrice(new CalculatedPrice(0, 0, new CalculatedTaxCollection(), new TaxRuleCollection()));
        $lineItems = new LineItemCollection([$lineItem]);
        return $lineItems;
    }

    /**
     * @param ProductEntity $product
     * @param ProductfeedEntity $feed
     * @return float
     * @throws PriceCalculationExcpetion
     */
    protected function addRealPrice(
        ProductEntity $product, 
        CurrencyEntity $currency, 
        SalesChannelContext $salesChannelContext, 
        string $languageId, 
        Context $context, 
        CountryEntity $country
    ): void {
        // generate cart
        $cartId = Uuid::randomHex();
        $cart = $this->cartService->createNew($salesChannelContext->getToken(), $cartId);

        // generate line item
        $lineItem = (new ProductLineItemFactory())->create($product->getId());

        // enrich the lineItem
        $lineItem->setRemovable(true)->setStackable(true)
            ->setDeliveryInformation(
                new DeliveryInformation(
                    $product->getStock(),
                    (float)$product->getWeight(),
                    (bool)$product->getShippingFree(),
                    $product->getRestockTime()
                )
            )->setQuantityInformation(new QuantityInformation());

        // set CartDataCollection of the cart
        $data = new CartDataCollection();
        $data->set('productfeed-' . $product->getId(), $product);
        $cart->setData($data);

        // add line item to the cart
        $cart = $this->cartService->add($cart, $lineItem, $salesChannelContext);
        $product->{'realPrice'} = $this->currencyFormatter->formatCurrencyByLanguage($cart->getPrice()->getTotalPrice(), $currency->getIsoCode(), $languageId, $context);

    }
}