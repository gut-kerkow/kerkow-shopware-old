<?php declare(strict_types=1);

namespace Productfeed\Core\Content\Enums;

abstract class ExecutionType {
    const MANUAL = 'execution_type_manual';
    const CRON = 'execution_type_cron';
}
