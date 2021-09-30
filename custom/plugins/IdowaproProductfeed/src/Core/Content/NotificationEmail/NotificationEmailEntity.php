<?php declare(strict_types=1);

namespace Productfeed\Core\Content\NotificationEmail;

use Productfeed\Core\Content\Productfeed\ProductfeedEntity;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class NotificationEmailEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string
     */
    protected $emailAddress;

    /**
     * @var string
     */
    protected $productfeedId;

    /**
     * @var ProductfeedEntity
     */
    protected $productfeed;

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return NotificationEmailEntity
     */
    public function setEmailAddress(string $emailAddress): NotificationEmailEntity
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductfeedId(): string
    {
        return $this->productfeedId;
    }

    /**
     * @param string $productfeedId
     * @return NotificationEmailEntity
     */
    public function setProductfeedId(string $productfeedId): NotificationEmailEntity
    {
        $this->productfeedId = $productfeedId;
        return $this;
    }

    /**
     * @return ProductfeedEntity
     */
    public function getProductfeed(): ProductfeedEntity
    {
        return $this->productfeed;
    }

    /**
     * @param ProductfeedEntity $productfeed
     * @return NotificationEmailEntity
     */
    public function setProductfeed(ProductfeedEntity $productfeed): NotificationEmailEntity
    {
        $this->productfeed = $productfeed;
        return $this;
    }


}





