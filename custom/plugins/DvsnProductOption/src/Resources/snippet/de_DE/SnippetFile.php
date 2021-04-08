<?php

/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

namespace Dvsn\ProductOption\Resources\snippet\de_DE;

use Shopware\Core\System\Snippet\Files\SnippetFileInterface;

class SnippetFile implements SnippetFileInterface
{
    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {
        return 'storefront.de-DE';
    }

    /**
     * {@inheritDoc}
     */
    public function getPath(): string
    {
        return __DIR__ . '/storefront.de_DE.json';
    }

    /**
     * {@inheritDoc}
     */
    public function getIso(): string
    {
        return 'de-DE';
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
