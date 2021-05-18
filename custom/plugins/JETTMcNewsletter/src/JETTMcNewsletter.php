<?php
declare(strict_types=1);

namespace Jett\McNewsletter;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;

class JETTMcNewsletter extends Plugin
{

    /**
     * @param UninstallContext $context
     */
    public function uninstall(UninstallContext $context): void
    {
        parent::uninstall($context);

        if ($context->keepUserData()) {
            return;
        }

        $connection = $this->container->get(Connection::class);
        $connection->executeUpdate('DROP TABLE IF EXISTS `jett_mcn_setting`');
        $connection->executeUpdate('DROP TABLE IF EXISTS `jett_mcn_log`');
    }
}
