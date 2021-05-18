<?php

declare(strict_types=1);

namespace Jett\McNewsletter\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1585513405JETTMcNewsletter extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1585513405;
    }

    public function update(Connection $connection): void
    {
        $connection->executeQuery('
            CREATE TABLE `jett_mcn_setting` (
                `id` BINARY(16) NOT NULL,
                `active` INT NOT NULL DEFAULT 0,
                `sales_channel_id` VARCHAR(255) NULL,
                `api_key` VARCHAR(255) NULL,
                `list_id` VARCHAR(255) NULL,
                `sync_limit` INT NOT NULL DEFAULT 500,
                `webhook_url_id` VARCHAR(255) NULL,
                `last_sync_run` DATETIME(3) NULL,
                `doi_option` INT NOT NULL,
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
