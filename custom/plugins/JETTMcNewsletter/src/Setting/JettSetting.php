<?php

declare(strict_types=1);

namespace Jett\McNewsletter\Setting;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class JettSetting extends Entity
{
    use EntityIdTrait;

    /**
     * @var boolean
     */
    protected $active;

    /**
     * @var string
     */
    protected $salesChannelId;

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var string
     */
    protected $listId;

    /**
     * @var int
     */
    protected $syncLimit = 500;

    /**
     * @var string
     */
    protected $webhookUrlId;

    /**
     * @var \DateTimeInterface
     */
    protected $lastSyncRun;

    /**
     * @var int
     */
    protected $doiOption;

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    /**
     * @return string
     */
    public function getSalesChannelId(): ?string
    {
        return $this->salesChannelId;
    }

    /**
     * @param string $salesChannelId
     */
    public function setSalesChannelId(?string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    /**
     * @return string
     */
    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    /**
     * @param int $apiKey
     */
    public function setApiKey(?string $apiKey): void
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return string
     */
    public function getListId(): ?string
    {
        return $this->listId;
    }

    /**
     * @param string $listId
     */
    public function setListId(?string $listId): void
    {
        $this->listId = $listId;
    }

    /**
     * @return int
     */
    public function getSyncLimit(): ?int
    {
        return $this->syncLimit;
    }

    /**
     * @param int $syncLimit
     */
    public function setSyncLimit(?int $syncLimit): void
    {
        $this->syncLimit = $syncLimit;
    }

    /**
     * @return string
     */
    public function getWebhookUrlId(): ?string
    {
        return $this->webhookUrlId;
    }

    /**
     * @param string $webhookUrlId
     */
    public function setWebhookUrlId(?string $webhookUrlId): void
    {
        $this->webhookUrlId = $webhookUrlId;
    }

    /**
     * @return ?\DateTimeInterface
     */
    public function getLastSyncRun(): ?\DateTimeInterface
    {
        return $this->lastSyncRun;
    }

    /**
     * @param \DateTimeInterface $lastSyncRun
     */
    public function setLastSyncRun(?\DateTimeInterface $lastSyncRun): void
    {
        $this->lastSyncRun = $lastSyncRun;
    }

    /**
     * @return int
     */
    public function getDoiOption(): int
    {
        return $this->doiOption;
    }

    /**
     * @param int $doiOption
     */
    public function setDoiOption(int $doiOption): void
    {
        $this->doiOption = $doiOption;
    }
}
