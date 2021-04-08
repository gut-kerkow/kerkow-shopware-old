<?php

/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

namespace Dvsn\ProductOption\Setup;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;
use Shopware\Core\Framework\Uuid\Uuid;
use Shopware\Core\System\CustomField\Aggregate\CustomFieldSet\CustomFieldSetEntity;

class Uninstall
{
    /**
     * Main bootstrap object.
     *
     * @var Plugin
     */
    private $plugin;

    /**
     * ...
     *
     * @var UninstallContext
     */
    private $context;

    /**
     * ...
     *
     * @var Connection
     */
    private $connection;

    /**
     * ...
     *
     * @var EntityRepositoryInterface
     */
    private $customFieldSetRepository;

    /**
     * ...
     *
     * @var EntityRepositoryInterface
     */
    private $customFieldRepository;

    /**
     * ...
     *
     * @param Plugin                    $plugin
     * @param UninstallContext          $context
     * @param Connection                $connection
     * @param EntityRepositoryInterface $customFieldSetRepository
     * @param EntityRepositoryInterface $customFieldRepository
     */
    public function __construct(Plugin $plugin, UninstallContext $context, Connection $connection, EntityRepositoryInterface $customFieldSetRepository, EntityRepositoryInterface $customFieldRepository)
    {
        // set params
        $this->plugin = $plugin;
        $this->context = $context;
        $this->connection = $connection;
        $this->customFieldSetRepository = $customFieldSetRepository;
        $this->customFieldRepository = $customFieldRepository;
    }

    /**
     * ...
     */
    public function uninstall(): void
    {
        // keep user data?
        if ($this->context->keepUserData()) {
            // dont remove anything
            return;
        }

        // clear plugin data
        $this->removeCustomFields();
        $this->removeDbTables();
        $this->removeNumberRanges();
        $this->removeDocuments();
    }

    /**
     * ...
     */
    private function removeCustomFields(): void
    {
        // remove every custom field
        foreach (DataHolder\CustomFields::$customFields as $customField) {
            /** @var CustomFieldSetEntity $customFieldSet */
            $customFieldSet = $this->customFieldSetRepository->search(
                (new Criteria())
                    ->addFilter(new EqualsFilter('custom_field_set.name', $customField['name'])),
                $this->context->getContext()
            )->first();

            // not found?
            if (!$customFieldSet instanceof CustomFieldSetEntity) {
                // ignore it
                continue;
            }

            // remove it
            $this->customFieldSetRepository->delete(
                [['id' => $customFieldSet->getId()]],
                $this->context->getContext()
            );
        }
    }

    /**
     * ...
     */
    private function removeDbTables(): void
    {
        // every table to trop
        $drop = implode(" \n ", array_map(
            function($table) {return 'DROP TABLE IF EXISTS `' . $table . '`;';},
            DataHolder\DbTables::$tables
        ));

        // remove every table
        $query = '
            SET FOREIGN_KEY_CHECKS=0;
            ' . $drop . '
            SET FOREIGN_KEY_CHECKS=1;
        ';

        // and execute
        $this->connection->executeQuery($query);

        // remove columns
        foreach (DataHolder\DbTables::$columns as $column) {
            // split it by table and column
            $split = explode('.', $column);

            // remove inheritance
            $query = 'ALTER TABLE `' . $split[0] . '` DROP COLUMN `' . $split[1] . '`;';

            // and execute
            try {
                $this->connection->executeQuery($query);
            }
            catch (DBALException $exception) {}
        }
    }

    /**
     * ...
     */
    private function removeNumberRanges(): void
    {
        // loop every number range
        foreach (DataHolder\NumberRanges::$numberRanges as $numberRange) {
            // remove it
            $query = '
                SET FOREIGN_KEY_CHECKS=0;
                DELETE FROM number_range_translation WHERE number_range_id = :id;
                DELETE FROM number_range_state WHERE number_range_id = :id;
                DELETE FROM number_range_sales_channel WHERE number_range_id = :id;
                DELETE FROM number_range WHERE id = :id;
                SET FOREIGN_KEY_CHECKS=1;
            ';
            $this->connection->executeQuery($query, [
                'id' => Uuid::fromHexToBytes($numberRange['id'])
            ]);
        }

        // second loop for the type
        foreach (DataHolder\NumberRanges::$numberRanges as $numberRange) {
            // remove it
            $query = '
                SET FOREIGN_KEY_CHECKS=0;
                DELETE FROM number_range_type_translation WHERE number_range_type_id = :id;
                DELETE FROM number_range_type WHERE id = :id;
                SET FOREIGN_KEY_CHECKS=1;
            ';
            $this->connection->executeQuery($query, [
                'id' => Uuid::fromHexToBytes($numberRange['type']['id'])
            ]);
        }
    }

    /**
     * ...
     */
    private function removeDocuments(): void
    {
        // loop every sales channel to remove
        foreach (DataHolder\Documents::$documentTypes as $documentType) {
            // remove it
            $query = '
                SET FOREIGN_KEY_CHECKS=0;
                DELETE FROM document_base_config_sales_channel WHERE document_type_id = :id;
                SET FOREIGN_KEY_CHECKS=1;
            ';
            $this->connection->executeQuery($query, [
                'id' => Uuid::fromHexToBytes($documentType['id'])
            ]);
        }

        // loop every document type
        foreach (DataHolder\Documents::$documentTypes as $documentType) {
            // remove it
            $query = '
                SET FOREIGN_KEY_CHECKS=0;
                DELETE FROM document_type_translation WHERE document_type_id = :id;
                DELETE FROM document_type WHERE id = :id;
                SET FOREIGN_KEY_CHECKS=1;
            ';
            $this->connection->executeQuery($query, [
                'id' => Uuid::fromHexToBytes($documentType['id'])
            ]);
        }

        // loop every config
        foreach (DataHolder\Documents::$documentBaseConfigs as $documentBaseConfig) {
            // remove it
            $query = '
                SET FOREIGN_KEY_CHECKS=0;
                DELETE FROM document_base_config WHERE id = :id;
                SET FOREIGN_KEY_CHECKS=1;
            ';
            $this->connection->executeQuery($query, [
                'id' => Uuid::fromHexToBytes($documentBaseConfig['id'])
            ]);
        }
    }
}
