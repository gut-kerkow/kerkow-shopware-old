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
        $param = $request->get('zip');
        if ($param == "denied") {
            $session->set('postalcode_denied', true);
            $result = false;
        } else {

            // Call the service to query the zip
            /** @var EntityRepositoryInterface $postalcodeRepository */
            $postalcodeRepository = $this->container->get('kerkow_postalcodes.repository');
            /** @var EntityCollection $entities */
            $postalcode = $postalcodeRepository->search(
                (new Criteria())->addFilter(new EqualsFilter('zip', $param)),
                \Shopware\Core\Framework\Context::createDefaultContext()
            )->first();
            // Check if user entered a valid zip
            if ($postalcode) {
                $result = $postalcode->getZip();
                $session->set('postalcode', $result);
            } else {
                $session->set('postalcode', $param);
                $result = false;
            }
        }
        return new JsonResponse([
            "postalcode" => $result
        ]);
    }

    /**
     * @HttpCache()
     * @Route("/zip-header/add", name="frontend.custom.addZipHeader", options={"seo"="false"}, methods={"GET"}, defaults={"XmlHttpRequest"=true})
     */
    public function addZipHeader(Request $request, Session $session, SalesChannelContext $context)
    {
        $param = $request->get('zip');
        // Call the service to query the zip
        /** @var EntityRepositoryInterface $postalcodeRepository */
        $postalcodeRepository = $this->container->get('kerkow_postalcodes.repository');
        /** @var EntityCollection $entities */
        $postalcode = $postalcodeRepository->search(
            (new Criteria())->addFilter(new EqualsFilter('zip', $param)),
            \Shopware\Core\Framework\Context::createDefaultContext()
        )->first();
        // Check if user entered a valid zip
        if ($postalcode) {
            $result = $postalcode->getZip();
            $session->set('postalcode', $result);
            $postalcode_error = false;
        } else {
            $session->set('postalcode', $param);
            $postalcode_error = true;
            $result = $param;
        }
        return $this->renderStorefront('@KerkowZipShop/storefront/layout/header/header-zip-menu-form.html.twig', ['postalcode' => $result, 'postalcode_error' => $postalcode_error]);
    }

    /**
     * @HttpCache()
     * @Route("/zip-header/remove", name="frontend.custom.removeZip", options={"seo"="false"}, methods={"GET"}, defaults={"XmlHttpRequest"=true})
     */
    public function removeZip(Request $request, Session $session, SalesChannelContext $context)
    {
        $session->remove('postalcode');
        $postalcode_error = false;
        $result = false;

        return $this->renderStorefront('@KerkowZipShop/storefront/layout/header/header-zip-menu-form.html.twig', ['postalcode' => $result, 'postalcode_error' => $postalcode_error]);
    }
}
