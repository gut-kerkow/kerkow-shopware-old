<?php

/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

namespace Dvsn\ProductOption\Resources\snippet\en_GB;

use Shopware\Core\System\Snippet\Files\SnippetFileInterface;

class SnippetFile implements SnippetFileInterface
{
    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {
        return 'storefront.en-GB';
    }

    /**
     * {@inheritDoc}
     */
    public function getPath(): string
    {
        return __DIR__ . '/storefront.en_GB.json';
    }

    /**
     * {@inheritDoc}
     */
    public function getIso(): string
    {
        return 'en-GB';
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor(): string
    {
        return 'dvsn.product_option';
    }

    /**
     * {@inheritDoc}
     */
    public function isBase(): bool
    {
        return false;
    }
}
