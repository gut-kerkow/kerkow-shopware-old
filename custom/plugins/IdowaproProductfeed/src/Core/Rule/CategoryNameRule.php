<?php declare(strict_types=1);

namespace Productfeed\Core\Rule;

use Shopware\Core\Framework\Rule\Exception\UnsupportedOperatorException;
use Shopware\Core\Framework\Rule\Rule;
use Shopware\Core\Framework\Rule\RuleScope;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;

class CategoryNameRule extends Rule
{
    public const NAME = 'category-name';

    protected ?string $operator;

    protected ?string $value;

    public function __construct(string $operator = self::OPERATOR_EQ, ?string $value = null)
    {
        parent::__construct();

        $this->operator = $operator;
        $this->value = $value;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function match(RuleScope $scope): bool
    {
        return true;
    }

    public function getConstraints(): array
    {
        return [
            'operator' => [
                new NotBlank(),
                new Choice([
                    self::OPERATOR_EQ,
                    self::OPERATOR_NEQ,
                ]),
            ],
            'value' => [new NotBlank()],
        ];
    }
}
