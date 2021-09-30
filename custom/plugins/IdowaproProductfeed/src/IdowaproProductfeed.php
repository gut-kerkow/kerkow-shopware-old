<?php declare(strict_types=1);

namespace Productfeed;
use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;

class IdowaproProductfeed extends Plugin
{
    public function uninstall(UninstallContext $context): void
    {
        parent::uninstall($context);

        if ($context->keepUserData()) {
            return;
        }

        $connection = $this->container->get(Connection::class);

        if (!$connection) {
            return;
        }

        $connection->executeStatement('DROP TABLE IF EXISTS `productfeed_notification`');
        $connection->executeStatement('DROP TABLE IF EXISTS `productfeed_file`');
        $connection->executeStatement('DROP TABLE IF EXISTS `productfeed_product_stream`');
        $connection->executeStatement('DROP TABLE IF EXISTS `productfeed_productfeed`');
        $connection->executeStatement('DELETE FROM `rule` WHERE `name` like "%_feed_generator_rule"');
        $connection->executeStatement('DELETE FROM `mail_template_type` WHERE `technical_name` like "feed_generator"');

    }
}
