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
use Shopware\Core\Defaults;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Shopware\Core\Framework\Uuid\Uuid;

class Install
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
     * @var InstallContext
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
     * @var EntityRepositoryInterface
     */
    private $numberRangeRepository;

    /**
     * ...
     *
     * @var EntityRepositoryInterface
     */
    private $mailTemplateRepository;

    /**
     * ...
     *
     * @var EntityRepositoryInterface
     */
    private $documentTypeRepository;

    /**
     * ...
     *
     * @var EntityRepositoryInterface
     */
    private $documentBaseConfigRepository;

    /**
     * ...
     *
     * @param Plugin                    $plugin
     * @param InstallContext            $context
     * @param Connection                $connection
     * @param EntityRepositoryInterface $customFieldSetRepository
     * @param EntityRepositoryInterface $customFieldRepository
     * @param EntityRepositoryInterface $numberRangeRepository
     * @param EntityRepositoryInterface $mailTemplateRepository
     * @param EntityRepositoryInterface $documentTypeRepository
     * @param EntityRepositoryInterface $documentBaseConfigRepository
     */
    public function __construct(Plugin $plugin, InstallContext $context, Connection $connection, EntityRepositoryInterface $customFieldSetRepository, EntityRepositoryInterface $customFieldRepository, EntityRepositoryInterface $numberRangeRepository, EntityRepositoryInterface $mailTemplateRepository, EntityRepositoryInterface $documentTypeRepository, EntityRepositoryInterface $documentBaseConfigRepository)
    {
        // set params
        $this->plugin = $plugin;
        $this->context = $context;
        $this->connection = $connection;
        $this->customFieldSetRepository = $customFieldSetRepository;
        $this->customFieldRepository = $customFieldRepository;
        $this->numberRangeRepository = $numberRangeRepository;
        $this->mailTemplateRepository = $mailTemplateRepository;
        $this->documentTypeRepository = $documentTypeRepository;
        $this->documentBaseConfigRepository = $documentBaseConfigRepository;
    }

    /**
     * ...
     */
    public function install(): void
    {
        // install everything
        $this->installCustomFields();
        $this->installNumberRanges();
        $this->installEmailTemplates();
        $this->installDocuments();
    }

    /**
     * ...
     */
    private function installCustomFields(): void
    {
        // create custom fields
        foreach (DataHolder\CustomFields::$customFields as $customField) {
            // and save it and ignore exceptions
            try {
                $this->customFieldSetRepository->upsert(
                    [$customField],
                    $this->context->getContext()
                );
            }
            catch (\Exception $exception) {}
        }
    }

    /**
     * ...
     */
    private function installEmailTemplates(): void
    {
        // every number range
        foreach (DataHolder\MailTemplates::$mailTemplates as $mailTemplate) {
            // set translations
            $mailTemplate = $this->parseTranslations($mailTemplate);
            $mailTemplate['mailTemplateType'] = $this->parseTranslations($mailTemplate['mailTemplateType']);

            // create or update
            $this->mailTemplateRepository->upsert(
                [$mailTemplate],
                Context::createDefaultContext()
            );
        }
    }

    /**
     * ...
     */
    private function installNumberRanges(): void
    {
        // every number range
        foreach (DataHolder\NumberRanges::$numberRanges as $numberRange) {
            // set translations
            $numberRange = $this->parseTranslations($numberRange);
            $numberRange['type'] = $this->parseTranslations($numberRange['type']);

            // create or update
            $this->numberRangeRepository->upsert(
                [$numberRange],
                Context::createDefaultContext()
            );
        }
    }

    /**
     * ...
     */
    private function installDocuments(): void
    {
        // every number range
        foreach (DataHolder\Documents::$documentTypes as $documentType) {
            // set translations
            $documentType = $this->parseTranslations($documentType);

            // create or update
            $this->documentTypeRepository->upsert(
                [$documentType],
                Context::createDefaultContext()
            );
        }

        // every base config
        foreach (DataHolder\Documents::$documentBaseConfigs as $documentBaseConfig) {
            // create or update
            $this->documentBaseConfigRepository->upsert(
                [$documentBaseConfig],
                Context::createDefaultContext()
            );
        }

        // loop every sales channel
        foreach (DataHolder\Documents::$documentBaseConfigSalesChannels as $documentbaseConfigSalesChannel) {
            // insert
            $this->connection->insert(
                'document_base_config_sales_channel',
                [
                    'id' => Uuid::fromHexToBytes($documentbaseConfigSalesChannel['id']),
                    'document_base_config_id' => Uuid::fromHexToBytes($documentbaseConfigSalesChannel['documentBaseConfigId']),
                    'document_type_id' => Uuid::fromHexToBytes($documentbaseConfigSalesChannel['documentTypeId']),
                    'created_at' => (new \DateTime())->format(Defaults::STORAGE_DATE_TIME_FORMAT)
                ]
            );
        }
    }

    /**
     * ...
     *
     * @return array
     */
    private function getLanguages(): array
    {
        // get english language as byte
        $englishLanguageId = $this->connection->fetchColumn('
            SELECT lang.id
            FROM language lang
            INNER JOIN locale loc ON lang.translation_code_id = loc.id
            AND loc.code = \'en-GB\';
        ');

        // get german
        $germanLanguageId = $this->connection->fetchColumn('
            SELECT lang.id
            FROM language lang
            INNER JOIN locale loc ON lang.translation_code_id = loc.id
            AND loc.code = \'de-DE\';
        ');

        // return them
        return [
            'default' => Defaults::LANGUAGE_SYSTEM,
            'de' => (string) Uuid::fromBytesToHex($germanLanguageId),
            'en' => (string) Uuid::fromBytesToHex($englishLanguageId)
        ];
    }

    /**
     * ...
     *
     * @param array $data
     *
     * @return array
     */
    private function parseTranslations($data): array
    {
        // get langauges
        $languages = $this->getLanguages();

        // our translations
        $translations = [];

        // is the default translation not de or en?
        if (!in_array($languages['default'], [$languages['de'], $languages['en']], true)) {
            // insert as english
            $translations[] = array_merge(
                $data['translations']['en'],
                ['language' => ['id' => $languages['default']]]
            );
        }

        // add german
        $translations[] = array_merge(
            $data['translations']['de'],
            ['language' => ['id' => $languages['de']]]
        );

        // add english
        $translations[] = array_merge(
            $data['translations']['en'],
            ['language' => ['id' => $languages['en']]]
        );

        // and save to data
        $data['translations'] = $translations;

        // and return it
        return $data;
    }
}
