<?php

declare(strict_types=1);


namespace Kerkow\Storefront\Subscriber;

use DateTime;
use Shopware\Core\Framework\Context;
use Psr\EventDispatcher\EventDispatcherInterface;
use Shopware\Core\Framework\Uuid\Uuid;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Shopware\Core\Checkout\Customer\CustomerEvents;
use Shopware\Core\Content\Newsletter\Aggregate\NewsletterRecipient\NewsletterRecipientEntity;
use Shopware\Core\Content\Newsletter\Event\NewsletterRegisterEvent;
use Shopware\Core\Content\Newsletter\Exception\NewsletterRecipientNotFoundException;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\MultiFilter;
use Shopware\Core\Framework\Event\DataMappingEvent;
use Shopware\Core\System\SalesChannel\Context\SalesChannelContextPersister;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Page\Account\Overview\AccountOverviewPageLoadedEvent;
use Shopware\Storefront\Page\Checkout\Confirm\CheckoutConfirmPageLoadedEvent;





class RegisterNewsletterSubscriber implements EventSubscriberInterface
{

    /**
     * @var EntityRepositoryInterface
     */
    private $newsletterRecipientRepository;

    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * @var SalesChannelContextPersister
     */
    private $contextPersister;

    public function __construct(
        EntityRepositoryInterface $newsletterRecipientRepository,
        EventDispatcherInterface $eventDispatcher,
        SalesChannelContextPersister $contextPersister
    ) {
        $this->newsletterRecipientRepository = $newsletterRecipientRepository;
        $this->eventDispatcher = $eventDispatcher;
        $this->contextPersister = $contextPersister;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CustomerEvents::MAPPING_REGISTER_CUSTOMER => 'addToUserData',
            CheckoutConfirmPageLoadedEvent::class => 'subscriberCheckout',
            AccountOverviewPageLoadedEvent::class => 'subscriberRegistration'
        ];
    }

    public function addToUserData(DataMappingEvent $event)
    {

        $inputData = $event->getInput();

        $outputData = $event->getOutput();

        $newsletter = $inputData->get('newsletter', false);

        $newsletter = ($newsletter) ? true : false;

        $outputData['newsletter'] = $newsletter;

        $event->setOutput($outputData);

        return true;
    }

    public function subscriberRegistration(AccountOverviewPageLoadedEvent $event)
    {
        $this->subscribeToNewsletter($event);
    }

    public function subscriberCheckout(CheckoutConfirmPageLoadedEvent $event)
    {
        $this->subscribeToNewsletter($event);
    }

    public function subscribeToNewsletter($event)
    {
        $context = $event->getSalesChannelContext();
        $customer = $context->getCustomer();
        $subscribed = $customer->getNewsletter();
        $persistedData = $this->contextPersister->load($context->getToken(), $context->getSalesChannelId());
        $optinSent = array_key_exists("optinSent", $persistedData) ? true : false;


        if (!$subscribed || $optinSent) {
            return;
        }

        $data['email'] = $customer->getEmail();
        $data['languageId'] = $customer->getLanguageId();
        $data['storefrontUrl'] = $event->getRequest()->getBaseUrl();

        //Check if registration is new
        $createdAt = $customer->getCreatedAt();

        $now = new DateTime();
        if ($createdAt->diff($now)->i <= 1) {
            $recipientId = $this->getNewsletterRecipientId($customer->getEmail(), $context);


            if (isset($recipientId)) {
                /** @var NewsletterRecipientEntity $recipient */
                $recipient = $this->newsletterRecipientRepository->search(new Criteria([$recipientId]), $context->getContext())->first();
                if ($recipient->getConfirmedAt()) {
                    return;
                }
            }
            $data = $this->completeData($data, $context);

            $this->newsletterRecipientRepository->upsert([$data], $context->getContext());

            $recipient = $this->getNewsletterRecipient('email', $data['email'], $event->getContext());

            $url = $data['storefrontUrl'] . str_replace(
                [
                    '%%HASHEDEMAIL%%',
                    '%%SUBSCRIBEHASH%%',
                ],
                [
                    hash('sha1', $data['email']),
                    $data['hash'],
                ],
                '/newsletter-subscribe?em=%%HASHEDEMAIL%%&hash=%%SUBSCRIBEHASH%%'
            );

            $newsletterEvent = new NewsletterRegisterEvent($context->getContext(), $recipient, $url, $context->getSalesChannel()->getId());
            $this->eventDispatcher->dispatch($newsletterEvent);
            $parameters["optinSent"] = true;
            $this->contextPersister->save($context->getToken(), $parameters, $context->getSalesChannel()->getId());
        }
    }

    private function getNewsletterRecipientId(string $email, SalesChannelContext $context): ?string
    {
        $criteria = new Criteria();
        $criteria->addFilter(
            new MultiFilter(MultiFilter::CONNECTION_AND),
            new EqualsFilter('email', $email),
            new EqualsFilter('salesChannelId', $context->getSalesChannel()->getId())
        );
        $criteria->setLimit(1);

        return $this->newsletterRecipientRepository
            ->searchIds($criteria, $context->getContext())
            ->firstId();
    }

    private function completeData(array $data, SalesChannelContext $context): array
    {
        $id = $this->getNewsletterRecipientId($data['email'], $context);

        $data['id'] = $id ?: Uuid::randomHex();
        $data['salesChannelId'] = $context->getSalesChannel()->getId();
        $data['status'] = "notSet";
        $data['hash'] = Uuid::randomHex();

        return $data;
    }

    private function getNewsletterRecipient(string $identifier, string $value, Context $context): NewsletterRecipientEntity
    {
        $criteria = new Criteria();
        $criteria->addFilter(new EqualsFilter($identifier, $value));
        $criteria->setLimit(1);

        $newsletterRecipient = $this->newsletterRecipientRepository->search($criteria, $context)->getEntities()->first();

        if (empty($newsletterRecipient)) {
            throw new NewsletterRecipientNotFoundException($identifier, $value);
        }

        return $newsletterRecipient;
    }
}
