<?php

declare(strict_types=1);

namespace Kerkow\ZipShop\Core\Content\Postalcodes;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class PostalcodesEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var int
     */
    protected $zip;

    /**
     * @var string
     */
    protected $city;


    public function getZip(): ?int
    {
        return $this->zip;
    }

    public function setZip(int $zip): void
    {
        $this->zip = $zip;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }
}
