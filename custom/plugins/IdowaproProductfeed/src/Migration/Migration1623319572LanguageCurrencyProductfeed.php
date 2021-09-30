<?php declare(strict_types=1);

namespace Productfeed\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1623319572LanguageCurrencyProductfeed extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1623319572;
    }

    public function update(Connection $connection): void
    {
        $connection->executeStatement('
            ALTER TABLE `productfeed_productfeed` 
            ADD `language_id` BINARY(16) NULL;

            ALTER TABLE `productfeed_productfeed` 
            ADD `currency_id` BINARY(16) NULL;

            ALTER TABLE `productfeed_productfeed` 
            ADD `country_id` BINARY(16) NULL;
        ');
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
