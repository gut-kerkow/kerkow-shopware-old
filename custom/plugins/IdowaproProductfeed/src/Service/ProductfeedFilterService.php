<?php

declare(strict_types=1);

namespace Productfeed\Service;

use Productfeed\Core\Content\Excpetion\FilterExcpetionValueNotFound;
use Productfeed\Core\Content\Excpetion\RuleKeyNotFoundException;
use Productfeed\Core\Content\Productfeed\ProductfeedEntity;
use Productfeed\Core\Content\ProductfeedProductStream\ProductfeedProductStreamCollection;
use Productfeed\Core\Content\ProductfeedProductStream\ProductfeedProductStreamEntity;
use Productfeed\Core\Rule\CategoryNameRule;
use Productfeed\Core\Rule\ManufacturerNameRule;
use Productfeed\Core\Rule\ProductEnabledRule;
use Productfeed\Core\Rule\ProductIdRule;
use Productfeed\Core\Rule\ProductNameRule;
use Productfeed\Core\Rule\ProductOfCategoryRule;
use Productfeed\Core\Rule\ProductPriceRule;
use Shopware\Core\Content\Product\ProductCollection;
use Shopware\Core\Content\Product\ProductEntity;
use Shopware\Core\Content\ProductStream\ProductStreamCollection;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;

class ProductfeedFilterService
{


    protected EntityRepositoryInterface $productfeedProductStreamRepository;

    public function __construct(
        EntityRepositoryInterface $productfeedProductStreamRepository
    ) {
        $this->productfeedProductStreamRepository = $productfeedProductStreamRepository;   
    }

    /**
     * @param ProductCollection $products
     * @param string $filter in JSON format
     * @return ProductEntity[]
     * @throws RuleKeyNotFoundException
     * @throws FilterExcpetionValueNotFound
     * @throws \Exception when the iterator for the productcollection throws a exception (shopware)
     */
    public function filterProducts(ProductCollection $products, ProductfeedEntity $feed, Context $context): ProductCollection
    {
        $filtered = new ProductCollection();
        $streams = $this->loadStreams($feed, $context);
        foreach ($products->getIterator() as $product) {

            if ($this->filterProduct($product, $feed, $streams)) {
                $filtered->add($product);
            }
        }
        return $filtered;
    }

    protected function filterProduct(ProductEntity $product, ProductfeedEntity $feed, $streams): bool
    {
        if ($feed->isRuleFilterEnabled()) {
            if (!$this->filterProductByRule($product, (object)$feed->getFilter())) {
                return false;
            }
        }

        if ($feed->isProductStreamFilterEnabled()) {
            if (!$this->filterProductByProductStreamFilter($product, $streams)) {
                return false;
            }
        }

        return true;
    }

    protected function filterProductByProductStreamFilter(ProductEntity $product, ProductStreamCollection $streams): bool
    {
        foreach($streams as $stream) {
            foreach ($product->getStreams() as $comp) {
                if ($stream->getId() === $comp->getId()) {
                    return true;
                }
            }
        }

        return false;
    }

    protected function loadStreams(ProductfeedEntity $feed, Context $context): ProductStreamCollection
    {
        $criteria = new Criteria();
        $criteria->addAssociation('productStream');
        $criteria->addFilter(new EqualsFilter('productfeedId', $feed->getId()));

        /** @var ProductfeedProductStreamCollection $productfeedProductStreams */
        $productfeedProductStreams = $this->productfeedProductStreamRepository->search($criteria, $context)->getEntities();

        /** @var ProductStreamCollection $productfeedProductStreams */
        $streams = array_map(function(ProductfeedProductStreamEntity $entity) { return $entity->getProductStream(); }, $productfeedProductStreams->getElements());
        $collection = new ProductStreamCollection($streams);
        return $collection;
    }

    /**
     * @param ProductEntity $product
     * @param mixed $condition
     * @return bool
     * @throws RuleKeyNotFoundException when the condition type is not known
     * @throws FilterExcpetionValueNotFound
     */
    private function filterProductByRule(ProductEntity $product, $condition): bool
    {
        if (property_exists($condition, 'or')) {
            foreach ($condition->or as $c) {
                if ($this->filterProductByRule($product, (object)$c)) {
                    return true;
                }
            }
            return false;
        }

        if (property_exists($condition, 'and')) {
            foreach ($condition->and as $c) {
                if (!$this->filterProductByRule($product, (object)$c)) {
                    return false;
                }
            }
            return true;
        }
        if (!property_exists($condition, 'type')) {
            $val = null;
            foreach($condition as $key => $value) {
                $val = $value;
            }
            return $this->filterProductByRule($product, (object)$val);
        }

        try {
            $value = $this->searchProperty($condition->type, $product);
            return $this->compare(
                $value,
                $condition->operator,
                $condition->value
            );
        } catch (FilterExcpetionValueNotFound $e) {
            return false;
        }
    }

    /**
     * @param mixed $toCompare
     * @param string $operator
     * @param mixed $value
     * @return bool
     */
    private function compare($toCompare, string $operator, $value): bool
    {
        switch ($operator) {
            case '=':
                if (is_array($value)) {
                    return !empty(array_intersect($toCompare, $value));
                }
                return $toCompare == $value;
            case '!=':
                return $toCompare != $value;
            case '>':
                return $toCompare > $value;
            case '>=':
                return $toCompare >= $value;
            case '<':
                return $toCompare < $value;
            case '<=':
                return $toCompare <= $value;
            default:
                return true;
        }
    }

    /**
     * @param string $key
     * @param mixed $object ProductEntity/CategoryEntity
     * @return mixed
     * @throws FilterExcpetionValueNotFound
     */
    private function searchProperty(string $key, $object)
    {
        try {
            switch ($key) {
                case ProductPriceRule::NAME:
                    return $object->getPrice()->getElements()[array_key_first($object->getPrice()->getElements())]
                        ->getGross();
                case CategoryNameRule::NAME:
                case ProductNameRule::NAME:
                    return $object->getName();
                case ProductOfCategoryRule::NAME:
                    return $object->getCategoryTree();
                case ProductIdRule::NAME:
                    return $object->getId();
                case ManufacturerNameRule::NAME:
                    return $object->getManufacturer()->getName();
                case ProductEnabledRule::NAME:
                    return $object->getActive();
                default:
                    throw new RuleKeyNotFoundException(json_encode(['key' => $key]) .
                        'no value was found for that key', 400);
            }
        } catch (\Throwable $e) {
            throw new FilterExcpetionValueNotFound('error while searching value for key \'' . $key . '\''
                . ', ' . json_encode(['message' => $e->getMessage()])
                . ', ' . json_encode(['product/category id: ' => $object->getId()])
            );
        }
    }
}
