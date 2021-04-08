<?php

/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

namespace Dvsn\ProductOption\Subscriber\Storefront\Page\Product;

use Dvsn\ProductOption\Core\Content\ProductOption\ProductOptionEntity;
use Dvsn\ProductOption\Service\ProductOptionCollectorServiceInterface;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;
use Shopware\Core\System\SystemConfig\SystemConfigService;
use Shopware\Storefront\Page\Product\ProductPageLoadedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Contracts\Translation\TranslatorInterface;

class ProductPageSubscriber implements EventSubscriberInterface
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
     * @var EntityRepository
     */
    protected $productOptionRepository;

    /**
     * ...
     *
     * @var SystemConfigService
     */
    protected $systemConfigService;

    /**
     * ...
     *
     * @var Session
     */
    protected $session;

    /**
     * ...
     *
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * ...
     *
     * @param ProductOptionCollectorServiceInterface $productOptionCollectorService
     * @param EntityRepository $productOptionRepository
     * @param SystemConfigService $systemConfigService
     * @param Session $session
     * @param TranslatorInterface $translator
     */
    public function __construct(
        ProductOptionCollectorServiceInterface $productOptionCollectorService,
        EntityRepository $productOptionRepository,
        SystemConfigService $systemConfigService,
        Session $session,
        TranslatorInterface $translator
    ) {
        // set params
        $this->productOptionCollectorService = $productOptionCollectorService;
        $this->productOptionRepository = $productOptionRepository;
        $this->systemConfigService = $systemConfigService;
        $this->session = $session;
        $this->translator = $translator;
    }

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents(): array
    {
        return [
            ProductPageLoadedEvent::class => 'onPageLoaded'
        ];
    }

    /**
     * ...
     *
     * @param ProductPageLoadedEvent $event
     */
    public function onPageLoaded(ProductPageLoadedEvent $event)
    {
        // plugin has to be active
        if ((boolean) $this->systemConfigService->get('DvsnProductOption.config.status', $event->getSalesChannelContext()->getSalesChannel()->getId()) === false) {
            // nothing to do
            return;
        }

        // get params
        $salesChannelContext = $event->getSalesChannelContext();
        $product = $event->getPage()->getProduct();

        // get the product options
        $options = $this->productOptionCollectorService->get(
            $product,
            $salesChannelContext
        )->getElements();

        /** @var ProductOptionEntity $option */
        foreach ($options as $option) {
            $price = 0.0;

            switch ($option->getSurchargeType()) {
                case ProductOptionEntity::SURCHARGE_TYPE_ABSOLUTE:
                    $price = $option->getSurcharge();
                    $price = $price * $salesChannelContext->getCurrency()->getFactor();
                    break;

                case ProductOptionEntity::SURCHARGE_TYPE_PERCENTAL:
                    $price = $product->getCalculatedPrice()->getUnitPrice();
                    $price = ($price / 100) * $option->getSurcharge();
                    $price = round($price, 2);
                    break;
            }

            $option->setPrice($price);
        }

        // assign to page
        $event->getPage()->assign([
            'dvsnProductOptions' => $options,
            'dvsnProductOptionConfiguration' => $this->systemConfigService->get('DvsnProductOption.config', $salesChannelContext->getSalesChannel()->getId())
        ]);
    }
}
