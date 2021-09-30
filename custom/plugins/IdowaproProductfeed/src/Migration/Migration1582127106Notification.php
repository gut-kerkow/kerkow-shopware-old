<?php declare(strict_types=1);

namespace Productfeed\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1582127106Notification extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1582127106;
    }

    public function update(Connection $connection): void
    {
        $connection->executeStatement('
            CREATE TABLE IF NOT EXISTS `productfeed_notification` (
              `id` BINARY(16) NOT NULL,
              `email_address` VARCHAR(255) NOT NULL,
              `productfeed_id` BINARY(16) NOT NULL,
              `created_at` DATETIME(3) NOT NULL,
              `updated_at` DATETIME(3) NULL,
              PRIMARY KEY (`id`),
              CONSTRAINT `fk.productfeed_notification_productfeed.productfeed_id` FOREIGN KEY (`productfeed_id`) REFERENCES `productfeed_productfeed` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ');
    }

    public function updateDestructive(Connection $connection): void
    {
    }
}
