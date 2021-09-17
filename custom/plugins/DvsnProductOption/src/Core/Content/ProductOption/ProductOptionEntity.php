<?php

/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

namespace Dvsn\ProductOption\Core\Content\ProductOption;

use Dvsn\ProductOption\Core\Content\ProductOption\Aggregate\ProductOptionTranslation\ProductOptionTranslationCollection;
use Shopware\Core\Content\Media\MediaEntity;
use Shopware\Core\Content\Rule\RuleEntity;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use Shopware\Core\System\SalesChannel\SalesChannelEntity;
use Shopware\Core\System\Tax\TaxEntity;

class ProductOptionEntity extends Entity
{
    use EntityIdTrait;

    const SURCHARGE_TYPE_PERCENTAL = 'percental';
    const SURCHARGE_TYPE_ABSOLUTE = 'absolute';
    const SURCHARGE_CALCULATION_ONCE = 'once';
    const SURCHARGE_CALCULATION_QUANTITY = 'quantity';

    /**
     * ...
     *
     * @var bool
     */
    protected $active;

    /**
     * ...
     *
     * @var bool
     */
    protected $hidden;

    /**
     * ...
     *
     * @var bool
     */
    protected $mandatory;

    /**
     * ...
     *
     * @var string
     */
    protected $number;

    /**
     * ...
     *
     * @var string|null
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
     * @var float
     */
    protected $surcharge;

    /**
     * ...
     *
     * @var string
     */
    protected $surchargeType;


    /**
     * ...
     *
     * @var string
     */
    protected $surchargeCalculation;

    /**
     * ...
     *
     * @var string
     */
    protected $icon;

    /**
     * ...
     *
     * @var float
     */
    protected $price;

    /**
     * ...
     *
     * @var MediaEntity
     */
    protected $media;

    /**
     * ...
     *
     * @var string
     */
    protected $mediaId;

    /**
     * ...
     *
     * @var TaxEntity
     */
    protected $tax;

    /**
     * ...
     *
     * @var string
     */
    protected $taxId;

    /**
     * ...
     *
     * @var ProductOptionTranslationCollection
     */
    protected $translations;

    /**
     * Getter method for the property.
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Setter method for the property.
     *
     * @param bool $active
     *
     * @return void
     */
    public function setActive(bool $active): void
    {
        $this->active = $active;
    }



    /**
     * Getter method for the property.
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->hidden;
    }



    /**
     * Setter method for the property.
     *
     * @param bool $hidden
     *
     * @return void
     */
    public function setHidden(bool $hidden): void
    {
        $this->hidden = $hidden;
    }



    /**
     * Getter method for the property.
     *
     * @return bool
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }



    /**
     * Setter method for the property.
     *
     * @param bool $mandatory
     *
     * @return void
     */
    public function setMandatory(bool $mandatory): void
    {
        $this->mandatory = $mandatory;
    }




    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }



    /**
     * Setter method for the property.
     *
     * @param string $number
     *
     * @return void
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }



    /**
     * Getter method for the property.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }



    /**
     * Setter method for the property.
     *
     * @param string|null $name
     *
     * @return void
     */
    public function setName(?string $name): void
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
     * @return float
     */
    public function getSurcharge()
    {
        return $this->surcharge;
    }



    /**
     * Setter method for the property.
     *
     * @param float $surcharge
     *
     * @return void
     */
    public function setSurcharge(float $surcharge): void
    {
        $this->surcharge = $surcharge;
    }



    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getSurchargeType()
    {
        return $this->surchargeType;
    }



    /**
     * Setter method for the property.
     *
     * @param string $surchargeType
     *
     * @return void
     */
    public function setSurchargeType(string $surchargeType): void
    {
        $this->surchargeType = $surchargeType;
    }



    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getSurchargeCalculation()
    {
        return $this->surchargeCalculation;
    }



    /**
     * Setter method for the property.
     *
     * @param string $surchargeCalculation
     *
     * @return void
     */
    public function setSurchargeCalculation(string $surchargeCalculation): void
    {
        $this->surchargeCalculation = $surchargeCalculation;
    }



    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }



    /**
     * Setter method for the property.
     *
     * @param string $icon
     *
     * @return void
     */
    public function setIcon(string $icon): void
    {
        $this->icon = $icon;
    }



    /**
     * Getter method for the property.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }



    /**
     * Setter method for the property.
     *
     * @param float $price
     *
     * @return void
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }



    /**
     * Getter method for the property.
     *
     * @return MediaEntity
     */
    public function getMedia()
    {
        return $this->media;
    }



    /**
     * Setter method for the property.
     *
     * @param MediaEntity $media
     *
     * @return void
     */
    public function setMedia(MediaEntity $media): void
    {
        $this->media = $media;
    }



    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getMediaId()
    {
        return $this->mediaId;
    }



    /**
     * Setter method for the property.
     *
     * @param string $mediaId
     *
     * @return void
     */
    public function setMediaId(string $mediaId): void
    {
        $this->mediaId = $mediaId;
    }



    /**
     * Getter method for the property.
     *
     * @return TaxEntity
     */
    public function getTax()
    {
        return $this->tax;
    }



    /**
     * Setter method for the property.
     *
     * @param TaxEntity $tax
     *
     * @return void
     */
    public function setTax(TaxEntity $tax): void
    {
        $this->tax = $tax;
    }



    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getTaxId()
    {
        return $this->taxId;
    }



    /**
     * Setter method for the property.
     *
     * @param string $taxId
     *
     * @return void
     */
    public function setTaxId(string $taxId): void
    {
        $this->taxId = $taxId;
    }



    /**
     * Getter method for the property.
     *
     * @return ProductOptionTranslationCollection
     */
    public function getTranslations()
    {
        return $this->translations;
    }



    /**
     * Setter method for the property.
     *
     * @param ProductOptionTranslationCollection $translations
     *
     * @return void
     */
    public function setTranslations(ProductOptionTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }



}
