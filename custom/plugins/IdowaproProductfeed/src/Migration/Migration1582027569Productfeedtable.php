<?php declare(strict_types=1);

namespace Productfeed\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1582027569Productfeedtable extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1582027569;
    }

    public function update(Connection $connection): void
    {
        $connection->executeStatement('
            CREATE TABLE IF NOT EXISTS `productfeed_productfeed` (
              `id` BINARY(16) NOT NULL,
              `name` VARCHAR(255) NOT NULL,
              `enabled` BOOL NOT NULL,
              `filename` VARCHAR(255) NOT NULL,
              `filetype` VARCHAR(50) NOT NULL,
              `template` MEDIUMTEXT NOT NULL,
              `execution_mode` VARCHAR(50) NOT NULL,
              `interval` BIGINT,
              `delivery_enabled` BOOL NOT NULL,
              `file_transfer_protocol` VARCHAR(50),
              `host_url` VARCHAR(255),
              `host_username` VARCHAR(255),
              `host_password` VARCHAR(255),
              `host_directory_path` VARCHAR(255),
              `notifications_enabled` BOOL NOT NULL,
              `filter` JSON,
              `sales_channel_id` BINARY(16) NOT NULL,
              `rule_id` BINARY(16),
              `message_when_create_success` BOOL,
              `message_when_create_error` BOOL,
              `message_when_delivery_success` BOOL,
              `message_when_delivery_error` BOOL,
              `created_at` DATETIME(3) NOT NULL,
              `updated_at` DATETIME(3) NULL,
              PRIMARY KEY (`id`),
              CONSTRAINT `fk.productfeed_productfeed_sales_channel_id` FOREIGN KEY (`sales_channel_id`) REFERENCES `sales_channel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
              CONSTRAINT `fk.productfeed_productfeed_rule_id` FOREIGN KEY (`rule_id`) REFERENCES `rule` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ');
    }

    public function updateDestructive(Connection $connection): void
    {
    }
}
