<?php declare(strict_types=1);

namespace Shopware\Core\System\NumberRange\Aggregate\NumberRangeTranslation;

use Shopware\Core\Framework\DataAbstractionLayer\TranslationEntity;
use Shopware\Core\System\NumberRange\NumberRangeEntity;

class NumberRangeTranslationEntity extends TranslationEntity
{
    /**
     * @var string
     */
    protected $numberRangeId;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var NumberRangeEntity|null
     */
    protected $numberRange;

    /**
     * @var array|null
     */
    protected $customFields;

    public function getNumberRangeId(): string
    {
        return $this->numberRangeId;
    }

    public function setNumberRangeId(string $numberRangeId): void
    {
        $this->numberRangeId = $numberRangeId;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getNumberRange(): ?NumberRangeEntity
    {
        return $this->numberRange;
    }

    public function setNumberRange(?NumberRangeEntity $numberRange): void
    {
        $this->numberRange = $numberRange;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getApiAlias(): string
    {
        return 'number_range_translation';
    }
}