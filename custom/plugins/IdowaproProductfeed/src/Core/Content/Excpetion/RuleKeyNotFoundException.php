<?php declare(strict_types=1);

namespace Productfeed\Core\Content\Excpetion;

use Throwable;

class RuleKeyNotFoundException extends BaseException
{
    public function __construct(string $message = '', int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
