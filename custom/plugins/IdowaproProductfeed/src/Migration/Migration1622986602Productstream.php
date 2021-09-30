<?php declare(strict_types=1);

namespace Productfeed\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1622986602Productstream extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1622986602;
    }

    public function update(Connection $connection): void
    {
        $connection->executeStatement('
            CREATE TABLE IF NOT EXISTS productfeed_product_stream (
              `id` BINARY(16) NOT NULL,
              `product_stream_id` BINARY(16) NOT NULL,
              `productfeed_id` BINARY(16) NOT NULL,
              `created_at` DATETIME(3) NOT NULL,
              `updated_at` DATETIME(3) NULL,
              PRIMARY KEY (`id`),
              CONSTRAINT `fk.productfeed_productstream.product_stream_id` FOREIGN KEY (`product_stream_id`) REFERENCES `product_stream` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
              CONSTRAINT `fk.productfeed_productstream.productfeed_id` FOREIGN KEY (`productfeed_id`) REFERENCES `productfeed_productfeed` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ');
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
