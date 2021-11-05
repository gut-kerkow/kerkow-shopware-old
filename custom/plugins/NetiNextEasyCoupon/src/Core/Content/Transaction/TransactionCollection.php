<?php

declare(strict_types=1);

namespace NetInventors\NetiNextEasyCoupon\Core\Content\Transaction;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

class TransactionCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return TransactionEntity::class;
    }
}
