<?php

declare(strict_types=1);

namespace Kerkow\ZipShop\Storefront\Subscriber;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Storefront\Page\Checkout\Register\CheckoutRegisterPageLoadedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Session\Session;


class CheckoutRegisterPageSubscriber implements EventSubscriberInterface
{

    /**
     * @var Session
     */
    private $session;


    public function __construct(Session $session, EntityRepositoryInterface $postalcodeRepository)
    {
        $this->session = $session;
        $this->postalcodeRepository = $postalcodeRepository;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CheckoutRegisterPageLoadedEvent::class => 'onCheckoutRegisterLoaded'
        ];
    }

    public function onCheckoutRegisterLoaded(CheckoutRegisterPageLoadedEvent $event): void
    {
        $extensions = $event->getPage()->getExtensions();
        if ($this->session->has('postalcode')) {
            $postalcode = $this->session->get('postalcode');
            // Check once again if posatlcode is valid
            // Call the service to query the zip

            /** @var EntityCollection $entities */
            $postalcode = $this->postalcodeRepository->search(
                (new Criteria())->addFilter(new EqualsFilter('zip', $postalcode)),
                \Shopware\Core\Framework\Context::createDefaultContext()
            )->first();
            // Check if user entered a valid zip
            if ($postalcode) {
                $result = $postalcode;
                $extensions['postalcode_valid'] = true;
            } else {
                // Postalcode saved in session was not valid
                $extensions['postalcode_valid'] = false;
                $result = $postalcode;
            }

            $extensions['postalcode'] = $result;
            $event->getPage()->setExtensions($extensions);
        } else {
            $extensions['postalcode_valid'] = false;
            $event->getPage()->setExtensions($extensions);
        }
    }
}
