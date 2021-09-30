<?php declare(strict_types=1);

namespace Productfeed\Core\Rule;

use Shopware\Core\Framework\Rule\Exception\UnsupportedOperatorException;
use Shopware\Core\Framework\Rule\Rule;
use Shopware\Core\Framework\Rule\RuleScope;
use Shopware\Core\Framework\Validation\Constraint\ArrayOfUuid;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;

class ProductOfCategoryRule extends Rule
{
    public const NAME = 'product-category';

    protected ?string $operator;

    protected ?string $values;

    public function __construct(string $operator = self::OPERATOR_EQ, ?string $values = null)
    {
        parent::__construct();

        $this->operator = $operator;
        $this->values = $values;
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
            'values' => [new NotBlank(),new ArrayOfUuid()],
        ];
    }
}
