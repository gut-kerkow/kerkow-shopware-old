<?php

declare(strict_types=1);

namespace Productfeed\Service;

use ONGR\ElasticsearchDSL\Sort\FieldSort;
use Shopware\Core\Defaults;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Sorting\FieldSorting;

class ProductfeedTemplateService
{
    protected EntityRepositoryInterface $countryRepository;

    public function __construct(
        EntityRepositoryInterface $countryRepository
    ) {
        $this->countryRepository = $countryRepository;   
    }

    public function getGoogleDefaults(Context $context): array
    {
        return [
            'name' => 'Google Template',
            'filename' => 'google-feed',
            'template' => $this->getGoogleTemplate(),
            'languageId' => Defaults::LANGUAGE_SYSTEM,
            'currencyId' => Defaults::CURRENCY,
            'countryId' => $this->getDefaultCountryId($context)
        ];
    }

    public function getIdealoDefaults(Context $context): array
    {
        return [
            'name' => 'Idealo Template',
            'filename' => 'idealo-feed',
            'template' => $this->getIdealoTemplate(),
            'languageId' => Defaults::LANGUAGE_SYSTEM,
            'currencyId' => Defaults::CURRENCY,
            'countryId' => $this->getDefaultCountryId($context)
        ];
    }

    protected function getGoogleTemplate(): string
    {
        return $this->getContentOfFile("google.csv.twig");
    }

    protected function getIdealoTemplate(): string
    {
        return $this->getContentOfFile("idealo.csv.twig");
    }

    protected function getContentOfFile(string $file): string
    {
        return file_get_contents(
            sprintf(
                '%s/../Resources/template/%s',
                __DIR__,
                $file
            )
        );
    }

    protected function getDefaultCountryId(Context $context): string
    {
        $criteria = new Criteria();
        $criteria->addSorting(new FieldSorting('position', FieldSorting::ASCENDING));
        $criteria->addFilter(new EqualsFilter('active', true));
        $criteria->setLimit(1);

        $country = $this->countryRepository->search($criteria, $context)->first();
        return $country->getId();
    }
}
