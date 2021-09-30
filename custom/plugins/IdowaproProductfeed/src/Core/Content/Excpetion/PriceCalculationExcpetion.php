<?php declare(strict_types=1);

namespace Productfeed\Core\Content\Excpetion;

use Throwable;

class PriceCalculationExcpetion extends BaseException
{
    public function __construct(Throwable $previous = null)
    {
        parent::__construct('', 0, $previous);
    }
}
