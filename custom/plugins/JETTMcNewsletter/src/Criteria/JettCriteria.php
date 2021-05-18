<?php

namespace Jett\McNewsletter\Criteria;

use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;

class JettCriteria
{

    public function getSalesChannelCriteria(?string $salesChannelId): Criteria
    {
        $criteria = new \Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria();
        $criteria->addFilter(
            new EqualsFilter('salesChannelId', $salesChannelId)
        );
        $criteria->setLimit(1);

        return $criteria;
    }
}
