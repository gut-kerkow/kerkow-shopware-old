<?php

namespace Sendcloud\Shipping\Entity\Customer;

use Shopware\Core\Checkout\Customer\CustomerEntity;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Exception\InconsistentCriteriaIdsException;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;

/**
 * Class CustomerRepository
 *
 * @package Sendcloud\Shipping\Entity\Customer
 */
class CustomerRepository
{
    /**
     * @var EntityRepositoryInterface
     */
    private $baseRepository;
    /**
     * CustomerRepository constructor.
     *
     * @param EntityRepositoryInterface $baseRepository
     */
    public function __construct(EntityRepositoryInterface $baseRepository)
    {
        $this->baseRepository = $baseRepository;
    }

    /**
     * Return customer by its id
     *
     * @param string $customerId
     *
     * @return CustomerEntity|null
     * @throws InconsistentCriteriaIdsException
     */
    public function getCustomerById(string $customerId): ?CustomerEntity
    {
        return $this->baseRepository->search(new Criteria([$customerId]), Context::createDefaultContext())->first();
    }
}
