<?php

/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

namespace Dvsn\ProductOption\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1595171361 extends MigrationStep
{
    /**
     * {@inheritDoc}
     */
    public function getCreationTimestamp(): int
    {
        return 1595171361;
    }

    /**
     * {@inheritDoc}
     */
    public function update(Connection $connection): void
    {
        // create custom entity
        $query = '
            CREATE TABLE IF NOT EXISTS `dvsn_product_option` (
                `id` BINARY(16) NOT NULL,
                `active` TINYINT(1) NOT NULL,
                `number` VARCHAR(255) NOT NULL,
                `surcharge` DECIMAL(10,2) NOT NULL,
                `surcharge_type` VARCHAR(255) NOT NULL,
                `surcharge_calculation` VARCHAR(255) NOT NULL,
                `icon` VARCHAR(255) NOT NULL,
                `media_id` BINARY(16) NULL DEFAULT NULL,
                `tax_id` BINARY(16) NULL DEFAULT NULL,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3),
                PRIMARY KEY (`id`),
                CONSTRAINT `fk.dvsn_product_option.tax_id` FOREIGN KEY (`tax_id`)
                    REFERENCES `tax` (`id`) ON DELETE SET NULL,
                CONSTRAINT `fk.dvsn_product_option.media_id` FOREIGN KEY (`media_id`)
                    REFERENCES `media` (`id`) ON DELETE SET NULL
            )
            ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

            CREATE TABLE IF NOT EXISTS `dvsn_product_option_translation` (
                `dvsn_product_option_id` BINARY(16) NOT NULL,
                `language_id` BINARY(16) NOT NULL,
                `name` VARCHAR(255) NULL DEFAULT NULL,
                `description` VARCHAR(255) NULL DEFAULT NULL,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3),
                PRIMARY KEY (`dvsn_product_option_id`, `language_id`),
                CONSTRAINT `fk.dvsn_product_option_translation.dvsn_product_option_id` FOREIGN KEY (`dvsn_product_option_id`)
                    REFERENCES `dvsn_product_option` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
                CONSTRAINT `fk.dvsn_product_option_translation.language_id` FOREIGN KEY (`language_id`)
                    REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
            )
            ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
        ';
        $connection->executeUpdate($query);
    }

    /**
     * {@inheritDoc}
     */
    public function updateDestructive(Connection $connection): void
    {
    }
}
