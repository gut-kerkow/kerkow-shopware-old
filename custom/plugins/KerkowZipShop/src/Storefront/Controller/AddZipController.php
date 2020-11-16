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
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Shopware\Storefront\Framework\Cache\Annotation\HttpCache;
use Symfony\Component\HttpFoundation\Cookie;

/**
 * @RouteScope(scopes={"storefront"})
 */
class AddZipController extends StorefrontController
{


    /**
     * @HttpCache()
     * @Route("/zip/add", name="frontend.custom.addZip", options={"seo"="false"}, methods={"GET"}, defaults={"XmlHttpRequest"=true})
     */
    public function addZip(Request $request, SalesChannelContext $context)
    {
        $response = new Response();
        $param = $request->get('zip');
        if ($param == "denied") {
            $response->headers->setCookie(new Cookie('postalcode_denied', "true", strtotime('now + 1 days'), '/', null, false, false));
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
                $response->headers->setCookie(new Cookie("postalcode", strval($result), strtotime('now + 14 days'), '/', null, false, false));
                $response->headers->setCookie(new Cookie("postalcode_valid", "1", strtotime('now + 14 days'), '/', null, false, false));
            } else {
                $response->headers->setCookie(new Cookie("postalcode", strval($param), strtotime('now + 14 days'), '/', null, false, false));
                $response->headers->setCookie(new Cookie("postalcode_valid", "0", strtotime('now + 14 days'), '/', null, false, false));
                $result = false;
            }
        }
        $response->send();
        return new JsonResponse([
            "postalcode" => $result
        ]);
    }

    /**
     * @HttpCache()
     * @Route("/zip-header/add", name="frontend.custom.addZipHeader", options={"seo"="false"}, methods={"GET"}, defaults={"XmlHttpRequest"=true})
     */
    public function addZipHeader(Request $request, SalesChannelContext $context)
    {
        $response = new Response();
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
            $response->headers->setCookie(new Cookie("postalcode", strval($result), strtotime('now + 14 days'), '/', null, false, false));
            $response->headers->setCookie(new Cookie("postalcode_valid", "1", strtotime('now + 14 days'), '/', null, false, false));
            $postalcode_error = false;
        } else {
            $response->headers->setCookie(new Cookie("postalcode", strval($param), strtotime('now + 14 days'), '/', null, false, false));
            $response->headers->setCookie(new Cookie("postalcode_valid", "0", strtotime('now + 14 days'), '/', null, false, false));
            $postalcode_error = true;
            $result = $param;
        }
        $response->send();
        return $this->renderStorefront('@KerkowZipShop/storefront/layout/header/header-zip-menu-form.html.twig', ['postalcode' => $result, 'postalcode_error' => $postalcode_error]);
    }

    /**
     * @HttpCache()
     * @Route("/zip-header/remove", name="frontend.custom.removeZip", options={"seo"="false"}, methods={"GET"}, defaults={"XmlHttpRequest"=true})
     */
    public function removeZip(Request $request, SalesChannelContext $context)
    {
        $response = new Response();
        $response->headers->removeCookie("postalcode");
        $response->headers->removeCookie("postalcode_valid");
        $response->headers->clearCookie("postalcode");
        $response->headers->clearCookie("postalcode_valid");
        $response->send();
        $postalcode_error = false;
        $result = false;

        return $this->renderStorefront('@KerkowZipShop/storefront/layout/header/header-zip-menu-form.html.twig', ['postalcode' => $result, 'postalcode_error' => $postalcode_error]);
    }
}
