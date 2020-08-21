<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SwagMigrationAssistant\Profile\Shopware55\Converter;

use SwagMigrationAssistant\Migration\MigrationContextInterface;
use SwagMigrationAssistant\Profile\Shopware\Converter\CategoryAttributeConverter;
use SwagMigrationAssistant\Profile\Shopware\DataSelection\DataSet\CategoryAttributeDataSet;
use SwagMigrationAssistant\Profile\Shopware55\Shopware55Profile;

class Shopware55CategoryAttributeConverter extends CategoryAttributeConverter
{
    public function supports(MigrationContextInterface $migrationContext): bool
    {
        return $migrationContext->getProfile()->getName() === Shopware55Profile::PROFILE_NAME
            && $migrationContext->getDataSet()::getEntity() === CategoryAttributeDataSet::getEntity();
    }
}
