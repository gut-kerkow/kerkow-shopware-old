<?php

declare(strict_types=1);

namespace Kerkow\ProductBundles\Core\Content\ProductBundles\Aggregate\BundleTranslation;

use Kerkow\ProductBundles\Core\Content\ProductBundles\ProductBundlesEntity;
use Shopware\Core\Framework\DataAbstractionLayer\TranslationEntity;

class BundleTranslationEntity extends TranslationEntity
{
    /**
     * @var string
     */
    protected $bundleId;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var ProductBundlesEntity
     */
    protected $bundle;

    /**
     * @return string
     */
    public function getBundleId(): string
    {
        return $this->bundleId;
    }

    public function setBundleId(string $bundleId): void
    {
        $this->bundleId = $bundleId;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getBundle(): ProductBundlesEntity;
    {
        return $this->bundle;
    }

    public function setBundle(ProductBundlesEntity $bundle): void
    {
        $this->bundle = $bundle;
    }
}
