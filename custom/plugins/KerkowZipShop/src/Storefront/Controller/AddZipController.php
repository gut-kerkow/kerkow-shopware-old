<?php

declare(strict_types=1);

namespace Kerkow\ZipShop\Storefront\Controller;

use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\Framework\Validation\DataBag\RequestDataBag;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Shopware\Storefront\Framework\Cache\Annotation\HttpCache;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * @RouteScope(scopes={"storefront"})
 */
class AddZipController extends StorefrontController
{
    /**
     * @var Session
     */
    private $session;
    /**
     * @HttpCache()
     * @Route("/zip/add", name="frontend.custom.addZip", options={"seo"="false"}, methods={"GET"}, defaults={"XmlHttpRequest"=true})
     */
    public function addZip(Request $request, Session $session, SalesChannelContext $context)
    {
        $postalcode = $request->get('zip');
        // Call the service to query the zip
        /** @var EntityRepositoryInterface $postalcodeRepository */
        $postalcodeRepository = $this->container->get('kerkow_postalcodes.repository');
        /** @var EntityCollection $entities */
        $postalcode = $postalcodeRepository->search(
            (new Criteria())->addFilter(new EqualsFilter('zip', $postalcode)),
            \Shopware\Core\Framework\Context::createDefaultContext()
        )->first();
        // Check if user entered a valid zip
        if ($postalcode) {
            $result = $postalcode->getZip();
            $session->set('postalcode', $result);
        } else {
            $result = false;
        }
        return $this->renderStorefront('@KerkowZipShop/storefront/custom/response.html.twig', ['result' => $session->get('zip')]);
    }
}