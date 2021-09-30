<?php declare(strict_types=1);

namespace Productfeed\Core\Content\Excpetion;

use DateTime;
use Exception;
use Throwable;

class BaseException extends Exception
{
    public function __construct(string $message = '', int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(array(
            'timestamp' => (new DateTime())->format(DATE_ATOM),
            'code' => $this->getCode(),
            'message' => $this->getMessage(),
            'stacke_trace' => $this->getTraceAsString()
        ));
    }


}
