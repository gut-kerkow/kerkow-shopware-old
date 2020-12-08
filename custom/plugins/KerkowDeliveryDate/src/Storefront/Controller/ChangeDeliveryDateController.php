<?php

declare(strict_types=1);

namespace Kerkow\DeliveryDate\Storefront\Controller;

use DateTime;
use Shopware\Core\Framework\Validation\DataBag\RequestDataBag;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\Request;
use Shopware\Core\System\SalesChannel\Context\SalesChannelContextPersister;
use Shopware\Core\System\SalesChannel\ContextTokenResponse;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\System\SalesChannel\Event\SalesChannelContextSwitchEvent;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;




/**
 * @RouteScope(scopes={"storefront"})
 */
class ChangeDeliveryDateController extends StorefrontController
{


    /**
     * @var SalesChannelContextPersister
     */
    protected $contextPersister;
    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    public function __construct(
        SalesChannelContextPersister $contextPersister,
        EventDispatcherInterface $eventDispatcher
    ) {
        $this->contextPersister = $contextPersister;
        $this->eventDispatcher = $eventDispatcher;
    }

    /**    
     * @Route("/delivery-date/change", name="frontend.custom.changeDeliveryDate", options={"seo"="false"}, methods={"POST"}, defaults={"XmlHttpRequest"=true})
     */
    public function changeDeliveryDate(Request $request, RequestDataBag $data, SalesChannelContext $context)
    {
        $parameters["deliveryDate"] = $data->get("deliveryDate");
        $parameters["deliverySlot"] = $data->get("deliverySlot");
        $now = new DateTime();
        $parameters["customDeliveryTimestamp"] = $now->format('Y-m-d H:i:s');

        $this->contextPersister->save($context->getToken(), $parameters);

        $event = new SalesChannelContextSwitchEvent($context, $data);
        $this->eventDispatcher->dispatch($event);
        new ContextTokenResponse($context->getToken());
        return $this->createActionResponse($request);
    }
}
