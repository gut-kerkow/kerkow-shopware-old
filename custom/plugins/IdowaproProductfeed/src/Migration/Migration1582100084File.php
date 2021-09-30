<?php declare(strict_types=1);

namespace Productfeed\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1582100084File extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1582100084;
    }

    public function update(Connection $connection): void
    {

        $connection->executeStatement('

            CREATE TABLE IF NOT EXISTS `productfeed_file` (
              `id` BINARY(16) NOT NULL,
              `name` VARCHAR(255) NOT NULL,
              `filename` VARCHAR(255),
              `filetype` VARCHAR(50),
              `execution_type` VARCHAR(50) NOT NULL,
              `delivery_state` VARCHAR(50) NOT NULL,
              `message` MEDIUMTEXT NOT NULL,
              `state` VARCHAR(50) NOT NULL,
              `delivery_protocol` VARCHAR(50),
              `host_url` VARCHAR(255),
              `host_username` VARCHAR(255),
              `host_directory` VARCHAR(255),
              `error_stack_trace` MEDIUMTEXT,
              `productfeed_id` BINARY(16) NOT NULL,
              `delivery_timestamp` DATETIME,
              `created_at` DATETIME(3) NOT NULL,
              `updated_at` DATETIME(3) NULL,
              PRIMARY KEY (`id`),
              CONSTRAINT `fk.productfeed_file_productfeed.productfeed_id` FOREIGN KEY (`productfeed_id`) REFERENCES `productfeed_productfeed` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ');

    }

    public function updateDestructive(Connection $connection): void
    {
    }
}
