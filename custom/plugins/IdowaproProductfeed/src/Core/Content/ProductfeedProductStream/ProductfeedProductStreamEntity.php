<?php declare(strict_types=1);

namespace Productfeed\Core\Content\ProductfeedProductStream;

use Productfeed\Core\Content\Productfeed\ProductfeedEntity;
use Shopware\Core\Content\ProductStream\ProductStreamEntity;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class ProductfeedProductStreamEntity extends Entity
{
    use EntityIdTrait;

    protected string $productfeedId;

    protected string $productStreamId;

    protected ?ProductfeedEntity $productfeed;

    protected ?ProductStreamEntity $productStream;


    public function getProductfeedId(): string
    {
        return $this->productfeedId;
    }

    public function setProductfeedId(string $productfeedId)
    {
        $this->productfeedId = $productfeedId;
        return $this;
    }

    public function getProductStreamId(): string
    {
        return $this->productStreamId;
    }

    public function setProductStreamId(string $productStreamId)
    {
        $this->productStreamId = $productStreamId;
        return $this;
    }

    public function getProductfeed(): ?ProductfeedEntity
    {
        return $this->productfeed;
    }

    public function setProductfeed(?ProductfeedEntity $productfeed)
    {
        $this->productfeed = $productfeed;
        return $this;
    }

    public function getProductStream(): ?ProductStreamEntity
    {
        return $this->productStream;
    }

    public function setProductStream(?ProductStreamEntity $productStream)
    {
        $this->productStream = $productStream;
        return $this;
    }
}