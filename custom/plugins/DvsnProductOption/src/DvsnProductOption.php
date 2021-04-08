<?php declare(strict_types=1);

/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

namespace Dvsn\ProductOption;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\ActivateContext;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;
use Shopware\Core\Framework\Plugin\Context\UpdateContext;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class DvsnProductOption extends Plugin
{
    /**
     * {@inheritDoc}
     */
    public function build(ContainerBuilder $container): void
    {
        // set plugin parameters
        $container->setParameter('dvsn.product_option.path', $this->getPath());

        // call parent
        parent::build($container);
    }

    /**
     * {@inheritDoc}
     */
    public function activate(ActivateContext $activateContext): void
    {
    }

    /**
     * {@inheritDoc}
     */
    public function install(InstallContext $installContext): void
    {
        // call installer
        $installer = new Setup\Install(
            $this,
            $installContext,
            $this->container->get(Connection::class),
            $this->container->get('custom_field_set.repository'),
            $this->container->get('custom_field.repository'),
            $this->container->get('number_range.repository'),
            $this->container->get('mail_template.repository'),
            $this->container->get('document_type.repository'),
            $this->container->get('document_base_config.repository')
        );
        $installer->install();

        // call updater
        $installer = new Setup\Update(
            $this,
            $installContext,
            $this->container->get(Connection::class),
            $this->container->get('custom_field_set.repository'),
            $this->container->get('custom_field.repository')
        );
        $installer->install();
    }

    /**
     * {@inheritDoc}
     */
    public function postInstall(InstallContext $installContext): void
    {
    }

    /**
     * {@inheritDoc}
     */
    public function update(UpdateContext $updateContext): void
    {
        // call updater
        $installer = new Setup\Update(
            $this,
            $updateContext,
            $this->container->get(Connection::class),
            $this->container->get('custom_field_set.repository'),
            $this->container->get('custom_field.repository')
        );
        $installer->update($updateContext->getCurrentPluginVersion());
    }

    /**
     * {@inheritDoc}
     */
    public function postUpdate(UpdateContext $updateContext): void
    {
    }

    /**
     * {@inheritDoc}
     */
    public function uninstall(UninstallContext $context): void
    {
        // call uninstaller
        $installer = new Setup\Uninstall(
            $this,
            $context,
            $this->container->get(Connection::class),
            $this->container->get('custom_field_set.repository'),
            $this->container->get('custom_field.repository')
        );
        $installer->uninstall();
    }
}
