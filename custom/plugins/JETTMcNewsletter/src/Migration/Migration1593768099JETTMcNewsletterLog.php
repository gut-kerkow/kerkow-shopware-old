<?php

declare(strict_types=1);

namespace Jett\McNewsletter\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1593768099JETTMcNewsletterLog extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1593768099;
    }

    public function update(Connection $connection): void
    {
        $connection->executeQuery('
            CREATE TABLE `jett_mcn_log` (
                `id` BINARY(16) NOT NULL,
                `sales_channel_id` VARCHAR(255) NULL,
                `status` INT NOT NULL,
                `message` VARCHAR(1000) NULL,
                `payload` TEXT NULL,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3) NULL,
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ');
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
