<?php

/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

namespace Dvsn\ProductOption\Core\Content\ProductOption\Aggregate\ProductOptionTranslation;

use Dvsn\ProductOption\Core\Content\ProductOption\ProductOptionEntity;
use Shopware\Core\Framework\DataAbstractionLayer\TranslationEntity;

class ProductOptionTranslationEntity extends TranslationEntity
{
    /**
     * ...
     *
     * @var string
     */
    protected $name;

    /**
     * ...
     *
     * @var string|null
     */
    protected $description;

    /**
     * ...
     *
     * @var ProductOptionEntity
     */
    protected $productOption;

    /**
     * ...
     *
     * @var string
     */
    protected $productOptionId;

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter method for the property.
     *
     * @param string $name
     *
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }



    /**
     * Getter method for the property.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }



    /**
     * Setter method for the property.
     *
     * @param string|null $description
     *
     * @return void
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }



    /**
     * Getter method for the property.
     *
     * @return ProductOptionEntity
     */
    public function getProductOption()
    {
        return $this->productOption;
    }



    /**
     * Setter method for the property.
     *
     * @param ProductOptionEntity $productOption
     *
     * @return void
     */
    public function setProductOption(ProductOptionEntity $productOption): void
    {
        $this->productOption = $productOption;
    }



    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getProductOptionId()
    {
        return $this->productOptionId;
    }



    /**
     * Setter method for the property.
     *
     * @param string $productOptionId
     *
     * @return void
     */
    public function setProductOptionId(string $productOptionId): void
    {
        $this->productOptionId = $productOptionId;
    }



}
