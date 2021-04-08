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
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsAnyFilter;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Core\Content\Product\SalesChannel\SalesChannelProductEntity;

class ProductOptionCollectorService implements ProductOptionCollectorServiceInterface
{
    /**
     * ...
     *
     * @var EntityRepository
     */
    protected $productOptionRepository;

    /**
     * ...
     *
     * @param EntityRepository $productOptionRepository
     */
    public function __construct(EntityRepository $productOptionRepository)
    {
        // set params
        $this->productOptionRepository = $productOptionRepository;
    }

    /**
     * {@inheritDoc}
     */
    public function get(SalesChannelProductEntity $parent, SalesChannelContext $salesChannelContext): ProductOptionCollection
    {
        // get the ids
        $ids = $this->getOptionIds($parent);

        // do we have any?
        if (count($ids) === 0) {
            // we dont
            return new ProductOptionCollection();
        }

        // set up criteria
        $criteria = (new Criteria())
            ->addAssociation('tax')
            ->addAssociation('media')
            ->addFilter(new EqualsFilter('active', true))
            ->addFilter(new EqualsAnyFilter('id', $ids));

        /** @var ProductOptionCollection $entities */
        $entities = $this->productOptionRepository->search(
            $criteria,
            $salesChannelContext->getContext()
        )->getEntities();

        // return it
        return $entities;
    }

    /**
     * ...
     *
     * @param SalesChannelProductEntity $product
     *
     * @return array
     */
    private function getOptionIds(SalesChannelProductEntity $product)
    {
        // get the default custom fields
        $customFields = (array) $product->getCustomFields();
        $translatedCustomFields = (array) $product->getTranslation('customFields');

        // every id
        $optionIds = [
            1 => null,
            2 => null,
            3 => null
        ];

        // every custom field
        foreach (array(1, 2, 3) as $i) {
            // try default
            $optionIds[$i] = (isset($customFields['dvsn_product_option_product_option_' . $i]) && !empty($customFields['dvsn_product_option_product_option_' . $i]))
                ? (string) $customFields['dvsn_product_option_product_option_' . $i]
                : null;

            // try translation
            $optionIds[$i] = (isset($translatedCustomFields['dvsn_product_option_product_option_' . $i]) && !empty($translatedCustomFields['dvsn_product_option_product_option_' . $i]))
                ? (string) $translatedCustomFields['dvsn_product_option_product_option_' . $i]
                : $optionIds[$i];
        }

        // filter null and only values
        return array_values(array_filter($optionIds));
    }
}
