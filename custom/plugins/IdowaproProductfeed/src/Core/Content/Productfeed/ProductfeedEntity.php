<?php declare(strict_types=1);

namespace Productfeed\Core\Content\Productfeed;

use Productfeed\Core\Content\File\FileCollection;
use Productfeed\Core\Content\NotificationEmail\NotificationEmailCollection;
use Shopware\Core\Content\Rule\RuleEntity;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use Shopware\Core\System\Country\CountryEntity;
use Shopware\Core\System\Currency\CurrencyEntity;
use Shopware\Core\System\Language\LanguageEntity;
use Shopware\Core\System\SalesChannel\SalesChannelEntity;

class ProductfeedEntity extends Entity
{
    use EntityIdTrait;

    /** @var string */
    protected $name;

    /** @var string */
    protected $filename;

    /** @var bool */
    protected $enabled;

    /** @var string */
    protected $filetype;

    /** @var string */
    protected $template;

    /** @var string */
    protected $executionMode;

    /** @var int|null */
    protected $interval;

    /** @var bool */

    protected $deliveryEnabled;

    /** @var string|null */

    protected $fileTransferProtocol;

    /** @var string|null */
    protected $hostUrl;

    /** @var string|null */
    protected $hostUsername;

    /** @var string|null */
    protected $hostPassword;

    /** @var string|null */
    protected $hostDirectoryPath;

    /** @var bool  */
    protected $notificationsEnabled;

    /** @var NotificationEmailCollection|null */
    protected $notifications;

    /** @var FileCollection|null */
    protected $files;

    /** @var array|null */
    protected $filter;

    /** @var bool|null */
    protected $messageWhenCreateSuccess;

    /** @var bool|null */
    protected $messageWhenCreateError;

    /** @var bool|null */
    protected $messageWhenDeliverySuccess;

    /** @var bool|null */
    protected $messageWhenDeliveryError;

    /** @var string */
    protected $salesChannelId;

    /** @var SalesChannelEntity */
    protected $salesChannel;

    /** @var string */
    protected $ruleId;

    /** @var RuleEntity */
    protected $rule;

    protected bool $ruleFilterEnabled;

    protected bool $productStreamFilterEnabled;

    protected ?string $languageId;

    protected ?LanguageEntity $language;

    protected ?string $currencyId;

    protected ?CurrencyEntity $currency;

    protected ?string $countryId;

    protected ?CountryEntity $country;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ProductfeedEntity
     */
    public function setName(string $name): ProductfeedEntity
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return FileCollection|null
     */
    public function getFiles(): ?FileCollection
    {
        return $this->files;
    }

    /**
     * @param FileCollection|null $files
     * @return ProductfeedEntity
     */
    public function setFiles(?FileCollection $files): ProductfeedEntity
    {
        $this->files = $files;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     * @return ProductfeedEntity
     */
    public function setEnabled(bool $enabled): ProductfeedEntity
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     * @return ProductfeedEntity
     */
    public function setFilename(string $filename): ProductfeedEntity
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @return string
     */
    public function getFiletype(): string
    {
        return $this->filetype;
    }

    /**
     * @param string $filetype
     * @return ProductfeedEntity
     */
    public function setFiletype(string $filetype): ProductfeedEntity
    {
        $this->filetype = $filetype;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->template;
    }

    /**
     * @param string $template
     * @return ProductfeedEntity
     */
    public function setTemplate(string $template): ProductfeedEntity
    {
        $this->template = $template;
        return $this;
    }

    /**
     * @return string
     */
    public function getExecutionMode(): string
    {
        return $this->executionMode;
    }

    /**
     * @param string $executionMode
     * @return ProductfeedEntity
     */
    public function setExecutionMode(string $executionMode): ProductfeedEntity
    {
        $this->executionMode = $executionMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getInterval(): int
    {
        return $this->interval;
    }

    /**
     * @param int $interval
     * @return ProductfeedEntity
     */
    public function setInterval(int $interval): ProductfeedEntity
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDeliveryEnabled(): bool
    {
        return $this->deliveryEnabled;
    }

    /**
     * @param bool $deliveryEnabled
     * @return ProductfeedEntity
     */
    public function setDeliveryEnabled(bool $deliveryEnabled): ProductfeedEntity
    {
        $this->deliveryEnabled = $deliveryEnabled;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFileTransferProtocol(): ?string
    {
        return $this->fileTransferProtocol;
    }

    /**
     * @param string|null $fileTransferProtocol
     * @return ProductfeedEntity
     */
    public function setFileTransferProtocol($fileTransferProtocol): ProductfeedEntity
    {
        $this->fileTransferProtocol = $fileTransferProtocol;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHostUrl(): ?string
    {
        return $this->hostUrl;
    }

    /**
     * @param string|null $hostUrl
     * @return ProductfeedEntity
     */
    public function setHostUrl($hostUrl): ProductfeedEntity
    {
        $this->hostUrl = $hostUrl;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHostUsername(): ?string
    {
        return $this->hostUsername;
    }

    /**
     * @param string|null $hostUsername
     * @return ProductfeedEntity
     */
    public function setHostUsername($hostUsername): ProductfeedEntity
    {
        $this->hostUsername = $hostUsername;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHostPassword(): ?string
    {
        return $this->hostPassword;
    }

    /**
     * @param string|null $hostPassword
     * @return ProductfeedEntity
     */
    public function setHostPassword($hostPassword): ProductfeedEntity
    {
        $this->hostPassword = $hostPassword;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHostDirectoryPath(): ?string
    {
        return $this->hostDirectoryPath;
    }

    /**
     * @param string|null $hostDirectoryPath
     * @return ProductfeedEntity
     */
    public function setHostDirectoryPath($hostDirectoryPath): ProductfeedEntity
    {
        $this->hostDirectoryPath = $hostDirectoryPath;
        return $this;
    }

    /**
     * @return NotificationEmailCollection|null
     */
    public function getNotifications(): ?NotificationEmailCollection
    {
        return $this->notifications;
    }

    /**
     * @param NotificationEmailCollection|null $notifications
     * @return ProductfeedEntity
     */
    public function setNotifications(?NotificationEmailCollection $notifications): ProductfeedEntity
    {
        $this->notifications = $notifications;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getFilter(): ?array
    {
        return $this->filter;
    }

    /**
     * @param array|null $filter
     * @return ProductfeedEntity
     */
    public function setFilter(?array $filter): ProductfeedEntity
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNotificationsEnabled(): bool
    {
        return $this->notificationsEnabled;
    }

    /**
     * @param bool $notificationsEnabled
     * @return ProductfeedEntity
     */
    public function setNotificationsEnabled(bool $notificationsEnabled): ProductfeedEntity
    {
        $this->notificationsEnabled = $notificationsEnabled;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isMessageWhenCreateSuccess(): ?bool
    {
        return $this->messageWhenCreateSuccess;
    }

    /**
     * @param bool|null $messageWhenCreateSuccess
     * @return ProductfeedEntity
     */
    public function setMessageWhenCreateSuccess(?bool $messageWhenCreateSuccess): ProductfeedEntity
    {
        $this->messageWhenCreateSuccess = $messageWhenCreateSuccess;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isMessageWhenCreateError(): ?bool
    {
        return $this->messageWhenCreateError;
    }

    /**
     * @param bool|null $messageWhenCreateError
     * @return ProductfeedEntity
     */
    public function setMessageWhenCreateError(?bool $messageWhenCreateError): ProductfeedEntity
    {
        $this->messageWhenCreateError = $messageWhenCreateError;
        return $this;
    }


    /**
     * @return bool|null
     */
    public function isMessageWhenDeliverySuccess(): ?bool
    {
        return $this->messageWhenDeliverySuccess;
    }

    /**
     * @param bool|null $messageWhenDeliverySuccess
     * @return ProductfeedEntity
     */
    public function setMessageWhenDeliverySuccess(?bool $messageWhenDeliverySuccess): ProductfeedEntity
    {
        $this->messageWhenDeliverySuccess = $messageWhenDeliverySuccess;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isMessageWhenDeliveryError(): ?bool
    {
        return $this->messageWhenDeliveryError;
    }

    /**
     * @param bool|null $messageWhenDeliveryError
     * @return ProductfeedEntity
     */
    public function setMessageWhenDeliveryError(?bool $messageWhenDeliveryError): ProductfeedEntity
    {
        $this->messageWhenDeliveryError = $messageWhenDeliveryError;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesChannelId(): string
    {
        return $this->salesChannelId;
    }

    /**
     * @param string $salesChannelId
     */
    public function setSalesChannelId(string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    /**
     * @return SalesChannelEntity
     */
    public function getSalesChannel(): SalesChannelEntity
    {
        return $this->salesChannel;
    }

    /**
     * @param SalesChannelEntity $salesChannel
     */
    public function setSalesChannel(SalesChannelEntity $salesChannel): void
    {
        $this->salesChannel = $salesChannel;
    }

    /**
     * @return string
     */
    public function getRuleId(): string
    {
        return $this->ruleId;
    }

    /**
     * @param string $ruleId
     * @return ProductfeedEntity
     */
    public function setRuleId(string $ruleId): ProductfeedEntity
    {
        $this->ruleId = $ruleId;
        return $this;
    }

    /**
     * @return RuleEntity
     */
    public function getRule(): RuleEntity
    {
        return $this->rule;
    }

    /**
     * @param RuleEntity $rule
     * @return ProductfeedEntity
     */
    public function setRule(RuleEntity $rule): ProductfeedEntity
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * @return bool
     */ 
    public function isRuleFilterEnabled(): bool
    {
        return $this->ruleFilterEnabled;
    }

    /**
     * @param bool $ruleFilterEnabled
     * @return  self
     */ 
    public function setRuleFilterEnabled(bool $ruleFilterEnabled): ProductfeedEntity
    {
        $this->ruleFilterEnabled = $ruleFilterEnabled;
        return $this;
    }

    /**
     * @return bool
     */ 
    public function isProductStreamFilterEnabled(): bool
    {
        return $this->productStreamFilterEnabled;
    }

    /**
     * @param bool $productStreamFilterEnabled
     * @return  self
     */ 
    public function setProductStreamFilterEnabled($productStreamFilterEnabled): ProductfeedEntity
    {
        $this->productStreamFilterEnabled = $productStreamFilterEnabled;
        return $this;
    }

    public function getLanguageId(): ?string
    {
        return $this->languageId;
    }

    public function setLanguageId(?string $languageId): ProductfeedEntity
    {
        $this->languageId = $languageId;
        return $this;
    }

    public function getLanguage(): ?LanguageEntity
    {
        return $this->language;
    }

    public function setLanguage(?LanguageEntity $language): ProductfeedEntity
    {
        $this->language = $language;
        return $this;
    }

    public function getCurrencyId(): ?string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(?string $currencyId): ProductfeedEntity
    {
        $this->currencyId = $currencyId;
        return $this;
    }

    public function getCurrency(): ?CurrencyEntity
    {
        return $this->currency;
    }

    public function setCurrency(?CurrencyEntity $currency): ProductfeedEntity
    {
        $this->currency = $currency;
        return $this;
    }

    public function getCountryId(): ?string
    {
        return $this->countryId;
    }

    public function setCountryId(?string $countryId): ProductfeedEntity
    {
        $this->countryId = $countryId;
        return $this;
    }

    public function getCountry(): ?CountryEntity
    {
        return $this->country;
    }

    public function setCountry(?CountryEntity $country): ProductfeedEntity
    {
        $this->country = $country;
        return $this;
    }
}
