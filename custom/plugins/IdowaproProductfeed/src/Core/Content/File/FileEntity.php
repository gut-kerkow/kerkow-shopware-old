<?php declare(strict_types=1);

namespace Productfeed\Core\Content\File;

use DateTime;
use Productfeed\Core\Content\Productfeed\ProductfeedEntity;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class FileEntity extends Entity
{
    use EntityIdTrait;

    /** @var string */
    protected $name;

    /** @var string */
    protected $fileName;

    /** @var string */
    protected $fileType;

    /** @var string */
    protected $executionType;

    /** @var string */
    protected $deliveryState;

    /** @var string */
    protected $message;

    /** @var string */
    protected $state;

    /** @var string */
    protected $productfeedId;

    /** @var ProductfeedEntity */
    protected $productfeed;

    /** @var string */
    protected $deliveryProtocol;

    /** @var string|null */
    protected $hostUrl;


    /** @var string|null */
    protected $hostDirectory;


    /** @var string|null */
    protected $hostUsername;

    /** @var string|null */
    protected $stackTrace;

    /** @var DateTime|null */
    protected $deliveryTimestamp;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return FileEntity
     */
    public function setName(string $name): FileEntity
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHostDirectory(): ?string
    {
        return $this->hostDirectory;
    }

    /**
     * @param string $hostDirectory
     * @return FileEntity
     */
    public function setHostDirectory(string $hostDirectory): FileEntity
    {
        $this->hostDirectory = $hostDirectory;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return FileEntity
     */
    public function setFilename(string $fileName): FileEntity
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return ProductfeedEntity
     */
    public function getProductfeed(): ProductfeedEntity
    {
        return $this->productfeed;
    }

    /**
     * @param ProductfeedEntity $productfeed
     * @return FileEntity
     */
    public function setProductfeed(ProductfeedEntity $productfeed): FileEntity
    {
        $this->productfeed = $productfeed;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileType(): string
    {
        return $this->fileType;
    }

    /**
     * @param string $fileType
     * @return FileEntity
     */
    public function setFileType(string $fileType): FileEntity
    {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * @return string
     */
    public function getExecutionType(): string
    {
        return $this->executionType;
    }

    /**
     * @param string $executionType
     * @return FileEntity
     */
    public function setExecutionType(string $executionType): FileEntity
    {
        $this->executionType = $executionType;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductfeedId(): string
    {
        return $this->productfeedId;
    }

    /**
     * @param string $productfeedId
     * @return FileEntity
     */
    public function setProductfeedId(string $productfeedId): FileEntity
    {
        $this->productfeedId = $productfeedId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryState(): string
    {
        return $this->deliveryState;
    }

    /**
     * @param string $deliveryState
     * @return FileEntity
     */
    public function setDeliveryState(string $deliveryState): FileEntity
    {
        $this->deliveryState = $deliveryState;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return FileEntity
     */
    public function setMessage(string $message): FileEntity
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return FileEntity
     */
    public function setState(string $state): FileEntity
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryProtocol(): ?string
    {
        return $this->deliveryProtocol;
    }

    /**
     * @param string|null $deliveryProtocol
     * @return FileEntity
     */
    public function setDeliveryProtocol(?string $deliveryProtocol): FileEntity
    {
        $this->deliveryProtocol = $deliveryProtocol;
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
     * @return FileEntity
     */
    public function setHostUrl(?string $hostUrl): FileEntity
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
     * @return FileEntity
     */
    public function setHostUsername(?string $hostUsername): FileEntity
    {
        $this->hostUsername = $hostUsername;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStackTrace(): ?string
    {
        return $this->stackTrace;
    }

    /**
     * @param string|null $stackTrace
     * @return FileEntity
     */
    public function setStackTrace(?string $stackTrace): FileEntity
    {
        $this->stackTrace = $stackTrace;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getDeliveryTimestamp(): ?DateTime
    {
        return $this->deliveryTimestamp;
    }

    /**
     * @param DateTime|null $deliveryTimestamp
     */
    public function setDeliveryTimestamp(?DateTime $deliveryTimestamp): void
    {
        $this->deliveryTimestamp = $deliveryTimestamp;
    }
}
