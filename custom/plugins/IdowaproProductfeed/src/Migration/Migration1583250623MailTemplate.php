<?php declare(strict_types=1);

namespace Productfeed\Migration;

use Doctrine\DBAL\Connection;
use Productfeed\Core\Content\MailTemplate\MailTemplateTypes;
use Shopware\Core\Defaults;
use Shopware\Core\Framework\Migration\MigrationStep;
use Shopware\Core\Framework\Uuid\Uuid;

class Migration1583250623MailTemplate extends MigrationStep
{

    protected const EMAIL_TEMPLATE_PREFIX = 'feedgeneratorNotificationEmail';
    protected const EMAIL_TEMPLATE_TYPE_HTML = 'Html';
    protected const EMAIL_TEMPLATE_TYPE_PLAIN = 'Plain';
    protected const EMAIL_TEMPLATE_FILE_EXT = '.html.twig';


    public function getCreationTimestamp(): int
    {
        return 1583250623;
    }

    public function update(Connection $connection): void
    {
        $mailTemplateTypeId = Uuid::randomBytes();
        $mailTemplateId = Uuid::randomBytes();



        $alreadyExists = $this->checkIfMailTemplateAlreadyExists($connection);
        if ($alreadyExists) {
            return;
        }
        
        $defaultLanguage = Uuid::fromHexToBytes(Defaults::LANGUAGE_SYSTEM); // $this->fetchLanguageId('en-GB', $connection);


        $connection->insert(
            'mail_template_type',
            [
                'id'                 => $mailTemplateTypeId,
                'technical_name'     => MailTemplateTypes::MAILTYPE_FEED_GENERATOR,
                'available_entities' => json_encode(
                    [
                        'productfeed'      => 'productfeed_productfeed',
                        'saleschannel'  => 'sales_channel'
                    ]
                ),
                'created_at'         => date(Defaults::STORAGE_DATE_TIME_FORMAT),
            ]
        );

        $connection->insert(
            'mail_template_type_translation',
            [
                'mail_template_type_id' => $mailTemplateTypeId,
                'name'                  => 'Feed Generator',
                'language_id'           => $defaultLanguage,
                'created_at'            => date(Defaults::STORAGE_DATE_TIME_FORMAT),
            ]
        );

        $connection->insert(
            'mail_template',
            [
                'id'                    => $mailTemplateId,
                'mail_template_type_id' => $mailTemplateTypeId,
                'system_default'        => true,
                'created_at'            => date(Defaults::STORAGE_DATE_TIME_FORMAT),
            ]
        );

        $connection->insert(
            'mail_template_translation',
            [
                'mail_template_id' => $mailTemplateId,
                'language_id'      => $defaultLanguage,
                'subject'          => '{{productfeed.name}}',
                'description'      => 'A template for email notification',
                'sender_name'      => '{{salesChannel.name}}',
                'content_html'     => $this->getEmailTemplate(self::EMAIL_TEMPLATE_TYPE_HTML),
                'content_plain'    => $this->getEmailTemplate(self::EMAIL_TEMPLATE_TYPE_PLAIN),
                'created_at'       => date(Defaults::STORAGE_DATE_TIME_FORMAT),
            ]
        );
    }

    public function updateDestructive(Connection $connection): void
    {

    }

    /**
     * @param string $templateContentType Use class constants here for type HTML or PLAIN
     *
     * @return false|string
     */
    protected function getEmailTemplate($templateContentType)
    {
        return file_get_contents(
            sprintf(
                '%s/../Resources/email/%s%s%s',
                __DIR__,
                self::EMAIL_TEMPLATE_PREFIX,
                $templateContentType,
                self::EMAIL_TEMPLATE_FILE_EXT
            )
        );
    }

    protected function checkIfMailTemplateAlreadyExists(Connection $connection) 
    {
        $result = $connection->fetchFirstColumn(
            "SELECT * FROM mail_template_type where technical_name = :tName", 
            ['tName' => MailTemplateTypes::MAILTYPE_FEED_GENERATOR]
        );

        return count($result) >= 1;
    }
}
