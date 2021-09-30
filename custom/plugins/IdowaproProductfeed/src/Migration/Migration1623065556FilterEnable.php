<?php declare(strict_types=1);

namespace Productfeed\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1623065556FilterEnable extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1623065556;
    }

    public function update(Connection $connection): void
    {
        $connection->executeStatement('
            ALTER TABLE `productfeed_productfeed`
            ADD `rule_filter_enabled` BOOL NOT NULL;

        ');

        $connection->executeStatement('
            ALTER TABLE `productfeed_productfeed`
            ADD `product_stream_filter_enabled` BOOL NOT NULL;
        ');
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
