<?php

/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

namespace Dvsn\ProductOption\Subscriber\Core\Checkout\Cart\SalesChannel;

use Dvsn\ProductOption\Core\Content\ProductOption\ProductOptionEntity;
use Dvsn\ProductOption\Service\LineItemFactoryServiceInterface;
use Dvsn\ProductOption\Service\ProductOptionCollectorServiceInterface;
use Shopware\Core\Checkout\Cart\Cart;
use Shopware\Core\Checkout\Cart\Event\LineItemAddedEvent;
use Shopware\Core\Checkout\Cart\LineItem\LineItem;
use Shopware\Core\Checkout\Cart\LineItem\LineItemCollection;
use Shopware\Core\Content\Product\SalesChannel\SalesChannelProductEntity;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\System\SalesChannel\Entity\SalesChannelRepository;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class CartService implements EventSubscriberInterface
{
    /**
     * ...
     *
     * @var ProductOptionCollectorServiceInterface
     */
    protected $productOptionCollectorService;

    /**
     * ...
     *
     * @var LineItemFactoryServiceInterface
     */
    protected $lineItemFactoryService;

    /**
     * ...
     *
     * @var SalesChannelRepository
     */
    protected $salesChannelProductRepository;

    /**
     * ...
     *
     * @var RequestStack
     */
    protected $requestStack;

    /**
     * ...
     *
     * @param ProductOptionCollectorServiceInterface $productOptionCollectorService
     * @param LineItemFactoryServiceInterface $lineItemFactoryService
     * @param SalesChannelRepository $salesChannelProductRepository
     * @param RequestStack $requestStack
     */
    public function __construct(
        ProductOptionCollectorServiceInterface $productOptionCollectorService,
        LineItemFactoryServiceInterface $lineItemFactoryService,
        SalesChannelRepository $salesChannelProductRepository,
        RequestStack $requestStack
    ) {
        // set params
        $this->productOptionCollectorService = $productOptionCollectorService;
        $this->lineItemFactoryService = $lineItemFactoryService;
        $this->salesChannelProductRepository = $salesChannelProductRepository;
        $this->requestStack = $requestStack;
    }

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents(): array
    {
        return [
            LineItemAddedEvent::class => 'onLineItemAdded'
        ];
    }

    /**
     * ...
     *
     * @param LineItemAddedEvent $event
     */
    public function onLineItemAdded(LineItemAddedEvent $event)
    {
        // get parameters
        $salesChannelContext = $event->getContext();
        $lineItem = $event->getLineItem();
        $cart = $event->getCart();
        $alreadyExists = $event->isMerged();

        // product already in cart?
        if ($alreadyExists === true) {
            // get every line item for this product
            $lineItems = $cart->getLineItems()->filter(function(LineItem $item) use ($lineItem) { return $item->getReferencedId() === $lineItem->getReferencedId(); });

            // loop every product within the cart
            foreach ($lineItems->getElements() as $currentLineItem) {
                // remove current children
                $currentLineItem->setChildren(new LineItemCollection());

                // and add our options
                $this->addChildren(
                    $currentLineItem,
                    $salesChannelContext,
                    $cart
                );
            }

            // done here
            return;
        }

        // new product -> add our options
        $this->addChildren(
            $lineItem,
            $salesChannelContext,
            $cart
        );
    }

    /**
     * ...
     *
     * @param LineItem $lineItem
     * @param SalesChannelContext $salesChannelContext
     * @param Cart $cart
     */
    private function addChildren(LineItem $lineItem, SalesChannelContext $salesChannelContext, Cart $cart)
    {
        // get the current request
        $request = $this->requestStack->getCurrentRequest();

        // do we even have options?!
        if (!$request->request->has('lineItemsOptions') || !is_array($request->request->get('lineItemsOptions'))) {
            // nothing to do
            return;
        }

        /** @var SalesChannelProductEntity $product */
        $product = $this->salesChannelProductRepository->search(
            new Criteria([$lineItem->getReferencedId()]),
            $salesChannelContext
        )->first();

        // get the selected options
        $selected = $request->request->get('lineItemsOptions');

        // get the entities
        $options = $this->productOptionCollectorService->get(
            $product,
            $salesChannelContext
        )->getElements();

        /** @var ProductOptionEntity $option */
        foreach ($options as $option) {
            // is this one selected?
            if (in_array($option->getId(), $selected)) {
                // create a line item
                $child = $this->lineItemFactoryService->create(
                    $option,
                    $lineItem,
                    $cart,
                    $salesChannelContext
                );

                // add as child
                $lineItem->addChild(
                    $child
                );
            }
        }
    }
}
