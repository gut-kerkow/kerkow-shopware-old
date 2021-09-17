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

class Migration1629472523 extends MigrationStep
{
    /**
     * {@inheritDoc}
     */
    public function getCreationTimestamp(): int
    {
        return 1629472523;
    }

    /**
     * {@inheritDoc}
     */
    public function update(Connection $connection): void
    {
        // ...
        $query = '
            ALTER TABLE `dvsn_product_option`
                ADD `hidden` TINYINT(1) NOT NULL AFTER `active`,
                ADD `mandatory` TINYINT(1) NOT NULL AFTER `hidden`;
            
            UPDATE dvsn_product_option
                SET hidden = 0,
                    mandatory = 0;
        ';
        $connection->executeStatement($query);
    }

    /**
     * {@inheritDoc}
     */
    public function updateDestructive(Connection $connection): void
    {
    }
}
