<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/oauth/authorize' => [[['_route' => 'api.oauth.authorize', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AuthController::authorize'], null, ['POST' => 0], null, false, false, null]],
        '/api/oauth/token' => [[['_route' => 'api.oauth.token', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AuthController::token'], null, ['POST' => 0], null, false, false, null]],
        '/payment/finalize-transaction' => [[['_route' => 'payment.finalize.transaction', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Checkout\\Payment\\Controller\\PaymentController::finalizeTransaction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'administration.index', 'auth_required' => false, '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/account/order' => [[['_route' => 'frontend.account.order.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderOverview'], null, ['GET' => 0], null, false, false, null]],
        '/account/payment' => [
            [['_route' => 'frontend.account.payment.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountPaymentController::paymentOverview'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.payment.save', '_controller' => 'Shopware\\Storefront\\Controller\\AccountPaymentController::savePayment'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account' => [[['_route' => 'frontend.account.home.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/account/profile' => [
            [['_route' => 'frontend.account.profile.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::profileOverview'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.profile.save', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::saveProfile'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/profile/email' => [[['_route' => 'frontend.account.profile.email.save', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::saveEmail'], null, ['POST' => 0], null, false, false, null]],
        '/account/profile/password' => [[['_route' => 'frontend.account.profile.password.save', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::savePassword'], null, ['POST' => 0], null, false, false, null]],
        '/account/address' => [[['_route' => 'frontend.account.address.page', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountAddressOverview'], null, ['GET' => 0], null, false, false, null]],
        '/account/address/create' => [[['_route' => 'frontend.account.address.create.page', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountCreateAddress'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/account/address-book' => [[['_route' => 'frontend.account.addressbook', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::addressBook'], null, ['POST' => 0], null, false, false, null]],
        '/account/login' => [
            [['_route' => 'frontend.account.login.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::loginPage'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.login', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::login'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/logout' => [[['_route' => 'frontend.account.logout.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/account/recover' => [
            [['_route' => 'frontend.account.recover.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::recoverAccountForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.recover.request', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::generateAccountRecovery'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/recover/password' => [
            [['_route' => 'frontend.account.recover.password.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::resetPasswordForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.recover.password.reset', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::resetPassword'], null, ['POST' => 0], null, false, false, null],
        ],
        '/checkout/promotion/add' => [[['_route' => 'frontend.checkout.promotion.add', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addPromotion'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/product/add-by-number' => [[['_route' => 'frontend.checkout.product.add-by-number', '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addProductByNumber'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/line-item/add' => [[['_route' => 'frontend.checkout.line-item.add', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addLineItems'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/cart' => [[['_route' => 'frontend.checkout.cart.page', '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::cartPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/confirm' => [[['_route' => 'frontend.checkout.confirm.page', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::confirmPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/finish' => [[['_route' => 'frontend.checkout.finish.page', '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::finishPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/order' => [[['_route' => 'frontend.checkout.finish.order', '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::order'], null, ['POST' => 0], null, false, false, null]],
        '/widgets/checkout/info' => [[['_route' => 'frontend.checkout.info', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::info'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/offcanvas' => [[['_route' => 'frontend.cart.offcanvas', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/configure' => [[['_route' => 'frontend.checkout.configure', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ContextController::configure'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/language' => [[['_route' => 'frontend.checkout.switch-language', '_controller' => 'Shopware\\Storefront\\Controller\\ContextController::switchLanguage'], null, ['POST' => 0], null, false, false, null]],
        '/cookie/offcanvas' => [[['_route' => 'frontend.cookie.offcanvas', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CookieController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/cookie/permission' => [[['_route' => 'frontend.cookie.permission', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CookieController::permission'], null, ['GET' => 0], null, false, false, null]],
        '/country/country-state-data' => [[['_route' => 'frontend.country.country.data', 'csrf_protected' => false, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CountryStateController::getCountryData'], null, ['POST' => 0], null, false, false, null]],
        '/csrf/generate' => [[['_route' => 'frontend.csrf.generateToken', 'csrf_protected' => false, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CsrfController::generateCsrf'], null, ['POST' => 0], null, false, false, null]],
        '/api-access' => [[['_route' => 'frontend.api-access', 'csrf_protected' => false, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CsrfController::getApiAccess'], null, ['GET' => 0], null, false, false, null]],
        '/form/contact' => [[['_route' => 'frontend.form.contact.send', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\FormController::sendContactForm'], null, ['POST' => 0], null, false, false, null]],
        '/form/newsletter' => [[['_route' => 'frontend.form.newsletter.register.handle', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\FormController::handleNewsletter'], null, ['POST' => 0], null, false, false, null]],
        '/maintenance' => [[['_route' => 'frontend.maintenance.page', '_controller' => 'Shopware\\Storefront\\Controller\\MaintenanceController::renderMaintenancePage'], null, ['GET' => 0], null, false, false, null]],
        '/' => [
            [['_route' => 'frontend.home.page', '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::home'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'root.fallback', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\FallbackController::rootFallback'], null, ['GET' => 0], null, false, false, null],
        ],
        '/widgets/menu/offcanvas' => [[['_route' => 'frontend.menu.offcanvas', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/newsletter-subscribe' => [[['_route' => 'frontend.newsletter.subscribe', '_controller' => 'Shopware\\Storefront\\Controller\\NewsletterController::subscribeMail'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/account/newsletter' => [[['_route' => 'frontend.account.newsletter', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NewsletterController::subscribeCustomer'], null, ['POST' => 0], null, false, false, null]],
        '/account/register' => [
            [['_route' => 'frontend.account.register.page', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::accountRegisterPage'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.register.save', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::register'], null, ['POST' => 0], null, false, false, null],
        ],
        '/checkout/register' => [[['_route' => 'frontend.checkout.register.page', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::checkoutRegisterPage'], null, ['GET' => 0], null, false, false, null]],
        '/registration/confirm' => [[['_route' => 'frontend.account.register.mail', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::confirmRegistration'], null, ['GET' => 0], null, false, false, null]],
        '/search' => [[['_route' => 'frontend.search.page', '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::search'], null, ['GET' => 0], null, false, false, null]],
        '/suggest' => [[['_route' => 'frontend.search.suggest', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::suggest'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/search' => [[['_route' => 'widgets.search.pagelet.v2', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::ajax'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sitemap.xml' => [[['_route' => 'frontend.sitemap.xml', '_format' => 'xml', '_controller' => 'Shopware\\Storefront\\Controller\\SitemapController::sitemapXml'], null, ['GET' => 0], null, false, false, null]],
        '/payone/webhook' => [[['_route' => 'payone_webhook', 'csrf_protected' => false, '_controller' => 'PayonePayment\\Controller\\WebhookController::execute'], null, ['POST' => 0], null, false, false, null]],
        '/payone/redirect' => [[['_route' => 'payone_redirect', 'csrf_protected' => false, '_controller' => 'PayonePayment\\Controller\\RedirectController::execute'], null, null, null, false, false, null]],
        '/account/card/overview' => [[['_route' => 'frontend.account.payone.card.page', '_controller' => 'PayonePayment\\Storefront\\Controller\\Account\\AccountCardController::cardOverview'], null, ['GET' => 0], null, false, false, null]],
        '/account/card/delete' => [[['_route' => 'frontend.account.payone.card.delete', '_controller' => 'PayonePayment\\Storefront\\Controller\\Account\\AccountCardController::deleteCard'], null, ['GET' => 0], null, false, false, null]],
        '/account/mandate/overview' => [[['_route' => 'frontend.account.payone.mandate.page', '_controller' => 'PayonePayment\\Storefront\\Controller\\Account\\AccountMandateController::mandateOverview'], null, ['GET' => 0], null, false, false, null]],
        '/account/mandate/download' => [[['_route' => 'frontend.account.payone.mandate.download', '_controller' => 'PayonePayment\\Storefront\\Controller\\Account\\AccountMandateController::downloadMandate'], null, ['GET' => 0], null, false, false, null]],
        '/payone/debit/manage-mandate' => [[['_route' => 'frontend.payone.debit.manage-mandate', 'XmlHttpRequest' => true, '_controller' => 'PayonePayment\\Storefront\\Controller\\Debit\\ManageMandateController::mandateOverview'], null, ['POST' => 0], null, false, false, null]],
        '/payone/paypal/express-checkout' => [[['_route' => 'frontend.account.payone.paypal.express-checkout', '_controller' => 'PayonePayment\\Storefront\\Controller\\Paypal\\PaypalExpressController::express'], null, ['GET' => 0], null, false, false, null]],
        '/payone/paypal/redirect-handler' => [[['_route' => 'frontend.account.payone.paypal.express-checkout-handler', '_controller' => 'PayonePayment\\Storefront\\Controller\\Paypal\\PaypalExpressController::redirectHandler'], null, ['GET' => 0], null, false, false, null]],
        '/payone/consent' => [[['_route' => 'frontend.account.payone.payolution.consent', 'XmlHttpRequest' => true, '_controller' => 'PayonePayment\\Storefront\\Controller\\Payolution\\PayolutionController::displayContentModal'], null, ['GET' => 0], null, false, false, null]],
        '/payone/invoicing/validate' => [[['_route' => 'frontend.payone.payolution.invoicing.validate', 'XmlHttpRequest' => true, '_controller' => 'PayonePayment\\Storefront\\Controller\\Payolution\\PayolutionController::validate'], null, ['POST' => 0], null, false, false, null]],
        '/payone/installment/calculation' => [[['_route' => 'frontend.payone.payolution.installment.calculation', 'XmlHttpRequest' => true, '_controller' => 'PayonePayment\\Storefront\\Controller\\Payolution\\PayolutionController::calculation'], null, ['POST' => 0], null, false, false, null]],
        '/payone/installment/download' => [[['_route' => 'frontend.payone.payolution.installment.download', 'XmlHttpRequest' => true, '_controller' => 'PayonePayment\\Storefront\\Controller\\Payolution\\PayolutionController::download'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi/(?'
                        .'|v(?'
                            .'|([^/]++)/_action/access\\-key/(?'
                                .'|intergration(*:66)'
                                .'|user(*:77)'
                                .'|sales\\-channel(*:98)'
                                .'|product\\-export(*:120)'
                            .')'
                            .'|(\\d+)/_search(*:142)'
                            .'|(\\d+)/_action/clone/([a-zA-Z-]+)/([0-9a-f]{32})(*:197)'
                            .'|(\\d+)/_action/version/([a-zA-Z-]+)/([0-9a-f]{32})(*:254)'
                            .'|(\\d+)/_action/version/merge/([a-zA-Z-]+)/([0-9a-f]{32})(*:317)'
                            .'|(\\d+)/_action/version/([^/]++)/([a-zA-Z-]+)/([^/]++)(*:377)'
                            .'|([^/]++)/_(?'
                                .'|action/(?'
                                    .'|c(?'
                                        .'|a(?'
                                            .'|che(?'
                                                .'|_(?'
                                                    .'|info(*:430)'
                                                    .'|warmup(*:444)'
                                                .')'
                                                .'|(*:453)'
                                            .')'
                                            .'|ptcha_list(*:472)'
                                        .')'
                                        .'|leanup(*:487)'
                                        .'|ontainer_cache(*:509)'
                                    .')'
                                    .'|index(?'
                                        .'|(*:526)'
                                        .'|ing(*:537)'
                                    .')'
                                    .'|s(?'
                                        .'|ync(*:553)'
                                        .'|tore/(?'
                                            .'|frw/(?'
                                                .'|start(*:581)'
                                                .'|login(*:594)'
                                                .'|finish(*:608)'
                                            .')'
                                            .'|l(?'
                                                .'|anguage\\-plugins(*:637)'
                                                .'|icense(?'
                                                    .'|\\-(?'
                                                        .'|domains(*:666)'
                                                        .'|violations(*:684)'
                                                    .')'
                                                    .'|s(*:694)'
                                                .')'
                                                .'|og(?'
                                                    .'|in(*:710)'
                                                    .'|out(*:721)'
                                                .')'
                                            .')'
                                            .'|d(?'
                                                .'|emo\\-data\\-plugins(*:753)'
                                                .'|ownload(*:768)'
                                            .')'
                                            .'|recommendation(?'
                                                .'|\\-regions(*:803)'
                                                .'|s(*:812)'
                                            .')'
                                            .'|verify\\-license\\-domain(*:844)'
                                            .'|p(?'
                                                .'|ing(*:859)'
                                                .'|lugin/search(*:879)'
                                            .')'
                                            .'|checklogin(*:898)'
                                            .'|updates(*:913)'
                                        .')'
                                        .'|cheduled\\-task/(?'
                                            .'|run(*:943)'
                                            .'|min\\-run\\-interval(*:969)'
                                        .')'
                                        .'|nippet\\-set(*:989)'
                                    .')'
                                    .'|plugin/(?'
                                        .'|u(?'
                                            .'|p(?'
                                                .'|load(*:1020)'
                                                .'|date(*:1033)'
                                            .')'
                                            .'|ninstall(*:1051)'
                                        .')'
                                        .'|de(?'
                                            .'|lete(*:1070)'
                                            .'|activate(*:1087)'
                                        .')'
                                        .'|refresh(*:1104)'
                                        .'|install(*:1120)'
                                        .'|activate(*:1137)'
                                    .')'
                                    .'|u(?'
                                        .'|pdate/(?'
                                            .'|check(?'
                                                .'|(*:1168)'
                                                .'|\\-requirements(*:1191)'
                                            .')'
                                            .'|plugin\\-compatibility(*:1222)'
                                            .'|d(?'
                                                .'|ownload\\-latest\\-update(*:1258)'
                                                .'|eactivate\\-plugins(*:1285)'
                                            .')'
                                            .'|unpack(*:1301)'
                                            .'|finish/([^/]++)(*:1325)'
                                        .')'
                                        .'|ser/(?'
                                            .'|user\\-recovery(?'
                                                .'|(*:1359)'
                                                .'|/(?'
                                                    .'|hash(*:1376)'
                                                    .'|password(*:1393)'
                                                .')'
                                            .')'
                                            .'|check\\-(?'
                                                .'|email\\-unique(*:1427)'
                                                .'|username\\-unique(*:1452)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|message\\-queue/consume(*:1486)'
                                    .'|database/(?'
                                        .'|sync\\-migration(*:1522)'
                                        .'|migrate(?'
                                            .'|(*:1541)'
                                            .'|\\-destructive(*:1563)'
                                        .')'
                                    .')'
                                .')'
                                .'|info/(?'
                                    .'|open(?'
                                        .'|api3\\.json(*:1600)'
                                        .'|\\-api\\-schema\\.json(*:1628)'
                                    .')'
                                    .'|entity\\-schema\\.json(*:1658)'
                                    .'|swagger\\.html(*:1680)'
                                    .'|config(*:1695)'
                                    .'|business\\-events\\.json(*:1726)'
                                .')'
                                .'|proxy/(?'
                                    .'|s(?'
                                        .'|ales\\-channel\\-api/([^/]++)/(.*)(*:1781)'
                                        .'|tore\\-api/([^/]++)/(.*)(*:1813)'
                                        .'|witch\\-customer(*:1837)'
                                    .')'
                                    .'|modify\\-shipping\\-costs(*:1870)'
                                    .'|disable\\-automatic\\-promotions(*:1909)'
                                    .'|enable\\-automatic\\-promotions(*:1947)'
                                .')'
                            .')'
                        .')'
                        .'|([^/]++)/_action/snippet(?'
                            .'|/filter(*:1993)'
                            .'|\\-set/(?'
                                .'|baseFile(*:2019)'
                                .'|author(*:2034)'
                            .')'
                        .')'
                        .'|v(?'
                            .'|([^/]++)/_action/(?'
                                .'|attribute\\-set/relations(*:2093)'
                                .'|s(?'
                                    .'|ystem\\-config(?'
                                        .'|/(?'
                                            .'|check(*:2131)'
                                            .'|schema(*:2146)'
                                            .'|batch(*:2160)'
                                        .')'
                                        .'|(*:2170)'
                                    .')'
                                    .'|tate\\-machine/([^/]++)/([^/]++)/state(?'
                                        .'|(*:2220)'
                                        .'|/([^/]++)(*:2238)'
                                    .')'
                                .')'
                                .'|number\\-range/(?'
                                    .'|reserve/([^/]++)(?:/([^/]++))?(*:2296)'
                                    .'|preview\\-pattern(?:/([^/]++))?(*:2335)'
                                .')'
                                .'|product(?'
                                    .'|/([^/]++)/combinations(*:2377)'
                                    .'|\\-export/(?'
                                        .'|validate(*:2406)'
                                        .'|preview(*:2422)'
                                    .')'
                                .')'
                                .'|m(?'
                                    .'|edia(?'
                                        .'|\\-folder/([^/]++)/dissolve(*:2470)'
                                        .'|/(?'
                                            .'|([^/]++)/(?'
                                                .'|upload(*:2501)'
                                                .'|rename(*:2516)'
                                            .')'
                                            .'|provide\\-name(*:2539)'
                                        .')'
                                    .')'
                                    .'|ail\\-template/(?'
                                        .'|send(*:2571)'
                                        .'|validate(*:2588)'
                                    .')'
                                .')'
                                .'|import\\-export/(?'
                                    .'|f(?'
                                        .'|eatures(*:2628)'
                                        .'|ile/download(*:2649)'
                                    .')'
                                    .'|pr(?'
                                        .'|epare(*:2669)'
                                        .'|ocess(*:2683)'
                                    .')'
                                    .'|cancel(*:2699)'
                                .')'
                            .')'
                            .'|(\\d+)/_action/seo\\-url\\-template/validate(*:2751)'
                            .'|(\\d+)/_action/seo\\-url\\-template/preview(*:2800)'
                            .'|(\\d+)/_action/seo\\-url\\-template/context(*:2849)'
                            .'|(\\d+)/_action/seo\\-url/canonical(*:2890)'
                            .'|(\\d+)/_action/seo\\-url\\-template/default/([^/]++)(*:2948)'
                            .'|([^/]++)/(?'
                                .'|_a(?'
                                    .'|ction/(?'
                                        .'|order(?'
                                            .'|/([^/]++)/(?'
                                                .'|c(?'
                                                    .'|onvert\\-to\\-cart(*:3024)'
                                                    .'|reditItem(*:3042)'
                                                .')'
                                                .'|recalculate(*:3063)'
                                                .'|product/([^/]++)(*:3088)'
                                                .'|lineItem(*:3105)'
                                                .'|([^/]++)/document/([^/]++)/preview(*:3148)'
                                                .'|document/([^/]++)(*:3174)'
                                                .'|state/([^/]++)(*:3197)'
                                            .')'
                                            .'|\\-address/([^/]++)/customer\\-address/([^/]++)(*:3252)'
                                            .'|_(?'
                                                .'|transaction/([^/]++)/state/([^/]++)(*:3300)'
                                                .'|delivery/([^/]++)/state/([^/]++)(*:3341)'
                                            .')'
                                        .')'
                                        .'|calculate\\-price(*:3368)'
                                        .'|document/([^/]++)/(?'
                                            .'|([^/]++)(*:3406)'
                                            .'|upload(*:3421)'
                                        .')'
                                        .'|p(?'
                                            .'|romotion/(?'
                                                .'|([^/]++)/codes/individual(?'
                                                    .'|(*:3475)'
                                                .')'
                                                .'|setgroup/(?'
                                                    .'|packager(*:3505)'
                                                    .'|sorter(*:3520)'
                                                .')'
                                            .')'
                                            .'|ayone(?'
                                                .'|/(?'
                                                    .'|refund\\-payment(*:3558)'
                                                    .'|capture\\-payment(*:3583)'
                                                .')'
                                                .'|_payment/(?'
                                                    .'|validate\\-api\\-credentials(*:3631)'
                                                    .'|get\\-state\\-machine\\-transition\\-actions(*:3680)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|theme/([^/]++)(?'
                                            .'|/(?'
                                                .'|configuration(*:3726)'
                                                .'|assign/([^/]++)(*:3750)'
                                                .'|reset(*:3764)'
                                                .'|fields(*:3779)'
                                                .'|structured\\-fields(*:3806)'
                                            .')'
                                            .'|(*:3816)'
                                        .')'
                                        .'|migration/(?'
                                            .'|d(?'
                                                .'|ownload\\-logs\\-of\\-run(*:3865)'
                                                .'|ata\\-selection(*:3888)'
                                            .')'
                                            .'|f(?'
                                                .'|etch\\-data(*:3912)'
                                                .'|inish\\-migration(*:3937)'
                                            .')'
                                            .'|update\\-(?'
                                                .'|write\\-progress(*:3973)'
                                                .'|media\\-files\\-progress(*:4004)'
                                                .'|connection\\-credentials(*:4036)'
                                            .')'
                                            .'|write\\-(?'
                                                .'|data(*:4060)'
                                                .'|premapping(*:4079)'
                                            .')'
                                            .'|process\\-media(*:4103)'
                                            .'|indexing(*:4120)'
                                            .'|ge(?'
                                                .'|nerate\\-premapping(*:4152)'
                                                .'|t\\-(?'
                                                    .'|profile(?'
                                                        .'|\\-information(*:4190)'
                                                        .'|s(*:4200)'
                                                    .')'
                                                    .'|gateways(*:4218)'
                                                    .'|state(*:4232)'
                                                    .'|reset\\-status(*:4254)'
                                                .')'
                                            .')'
                                            .'|c(?'
                                                .'|heck\\-connection(*:4285)'
                                                .'|reate\\-migration(*:4310)'
                                                .'|leanup\\-migration\\-data(*:4342)'
                                            .')'
                                            .'|takeover\\-migration(*:4371)'
                                            .'|a(?'
                                                .'|bort\\-migration(*:4399)'
                                                .'|ssign\\-themes(*:4421)'
                                            .')'
                                            .'|reset\\-checksums(*:4447)'
                                        .')'
                                    .')'
                                    .'|dmin/snippets(*:4471)'
                                .')'
                                .'|migration/get\\-grouped\\-logs\\-of\\-run(*:4518)'
                            .')'
                            .'|(\\d+)/acl\\-role/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:4612)'
                            .')'
                            .'|(\\d+)/acl\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4690)'
                            .'|(\\d+)/search/acl\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4774)'
                            .'|(\\d+)/search\\-ids/acl\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4863)'
                            .'|(\\d+)/acl\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4940)'
                            .'|(\\d+)/acl\\-user\\-role/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:5039)'
                            .')'
                            .'|(\\d+)/acl\\-user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5123)'
                            .'|(\\d+)/search/acl\\-user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5213)'
                            .'|(\\d+)/search\\-ids/acl\\-user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5308)'
                            .'|(\\d+)/acl\\-user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5391)'
                            .'|(\\d+)/category/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:5483)'
                            .')'
                            .'|(\\d+)/category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5560)'
                            .'|(\\d+)/search/category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5643)'
                            .'|(\\d+)/search\\-ids/category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5731)'
                            .'|(\\d+)/category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5807)'
                            .'|(\\d+)/category\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:5904)'
                            .')'
                            .'|(\\d+)/category\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5986)'
                            .'|(\\d+)/search/category\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6074)'
                            .'|(\\d+)/search\\-ids/category\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6167)'
                            .'|(\\d+)/category\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6248)'
                            .'|(\\d+)/category\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:6353)'
                            .')'
                            .'|(\\d+)/category\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6443)'
                            .'|(\\d+)/search/category\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6539)'
                            .'|(\\d+)/search\\-ids/category\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6640)'
                            .'|(\\d+)/category\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6729)'
                            .'|(\\d+)/cms\\-block/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:6823)'
                            .')'
                            .'|(\\d+)/cms\\-block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6902)'
                            .'|(\\d+)/search/cms\\-block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6987)'
                            .'|(\\d+)/search\\-ids/cms\\-block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7077)'
                            .'|(\\d+)/cms\\-block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7155)'
                            .'|(\\d+)/cms\\-page/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:7248)'
                            .')'
                            .'|(\\d+)/cms\\-page((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7326)'
                            .'|(\\d+)/search/cms\\-page((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7410)'
                            .'|(\\d+)/search\\-ids/cms\\-page((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7499)'
                            .'|(\\d+)/cms\\-page((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7576)'
                            .'|(\\d+)/cms\\-page\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:7682)'
                            .')'
                            .'|(\\d+)/cms\\-page\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7773)'
                            .'|(\\d+)/search/cms\\-page\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7870)'
                            .'|(\\d+)/search\\-ids/cms\\-page\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7972)'
                            .'|(\\d+)/cms\\-page\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8062)'
                            .'|(\\d+)/cms\\-section/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:8158)'
                            .')'
                            .'|(\\d+)/cms\\-section((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8239)'
                            .'|(\\d+)/search/cms\\-section((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8326)'
                            .'|(\\d+)/search\\-ids/cms\\-section((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8418)'
                            .'|(\\d+)/cms\\-section((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8498)'
                            .'|(\\d+)/cms\\-slot/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:8591)'
                            .')'
                            .'|(\\d+)/cms\\-slot((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8669)'
                            .'|(\\d+)/search/cms\\-slot((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8753)'
                            .'|(\\d+)/search\\-ids/cms\\-slot((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8842)'
                            .'|(\\d+)/cms\\-slot((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8919)'
                            .'|(\\d+)/cms\\-slot\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:9025)'
                            .')'
                            .'|(\\d+)/cms\\-slot\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9116)'
                            .'|(\\d+)/search/cms\\-slot\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9213)'
                            .'|(\\d+)/search\\-ids/cms\\-slot\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9315)'
                            .'|(\\d+)/cms\\-slot\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9405)'
                            .'|(\\d+)/country/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:9496)'
                            .')'
                            .'|(\\d+)/country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9572)'
                            .'|(\\d+)/search/country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9654)'
                            .'|(\\d+)/search\\-ids/country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9741)'
                            .'|(\\d+)/country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9816)'
                            .'|(\\d+)/country\\-state/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:9914)'
                            .')'
                            .'|(\\d+)/country\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9997)'
                            .'|(\\d+)/search/country\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10086)'
                            .'|(\\d+)/search\\-ids/country\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10181)'
                            .'|(\\d+)/country\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10264)'
                            .'|(\\d+)/country\\-state\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:10376)'
                            .')'
                            .'|(\\d+)/country\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10473)'
                            .'|(\\d+)/search/country\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10576)'
                            .'|(\\d+)/search\\-ids/country\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10684)'
                            .'|(\\d+)/country\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10780)'
                            .'|(\\d+)/country\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:10885)'
                            .')'
                            .'|(\\d+)/country\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10975)'
                            .'|(\\d+)/search/country\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11071)'
                            .'|(\\d+)/search\\-ids/country\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11172)'
                            .'|(\\d+)/country\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11261)'
                            .'|(\\d+)/currency/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:11354)'
                            .')'
                            .'|(\\d+)/currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11432)'
                            .'|(\\d+)/search/currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11516)'
                            .'|(\\d+)/search\\-ids/currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11605)'
                            .'|(\\d+)/currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11682)'
                            .'|(\\d+)/currency\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:11788)'
                            .')'
                            .'|(\\d+)/currency\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11879)'
                            .'|(\\d+)/search/currency\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11976)'
                            .'|(\\d+)/search\\-ids/currency\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12078)'
                            .'|(\\d+)/currency\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12168)'
                            .'|(\\d+)/custom\\-field/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:12266)'
                            .')'
                            .'|(\\d+)/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12349)'
                        .')'
                    .')'
                    .'|ccount/(?'
                        .'|order/(?'
                            .'|([^/]++)(*:12388)'
                            .'|cancel(*:12404)'
                            .'|edit/([^/]++)(*:12427)'
                            .'|payment/([^/]++)(*:12453)'
                            .'|update/([^/]++)(*:12478)'
                        .')'
                        .'|address/(?'
                            .'|([^/]++)(*:12508)'
                            .'|de(?'
                                .'|fault\\-([^/]++)/([^/]++)(*:12547)'
                                .'|lete/([^/]++)(*:12570)'
                            .')'
                            .'|create(*:12587)'
                            .'|([^/]++)(*:12605)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:12649)'
                    .'|wdt/([^/]++)(*:12671)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:12719)'
                            .'|router(*:12735)'
                            .'|exception(?'
                                .'|(*:12757)'
                                .'|\\.css(*:12772)'
                            .')'
                        .')'
                        .'|(*:12784)'
                    .')'
                .')'
                .'|/s(?'
                    .'|ales\\-channel\\-api/v([^/]++)/(?'
                        .'|_info/(?'
                            .'|open(?'
                                .'|api3\\.json(*:12859)'
                                .'|\\-api\\-schema\\.json(*:12888)'
                            .')'
                            .'|swagger\\.html(*:12912)'
                        .')'
                        .'|c(?'
                            .'|ontext(?'
                                .'|(*:12936)'
                            .')'
                            .'|ms\\-page/([^/]++)(*:12964)'
                            .'|heckout/(?'
                                .'|cart(?'
                                    .'|(*:12992)'
                                    .'|/(?'
                                        .'|product/([^/]++)(*:13022)'
                                        .'|code/([^/]++)(*:13045)'
                                        .'|line\\-item(?'
                                            .'|/([^/]++)(?'
                                                .'|(*:13080)'
                                            .')'
                                            .'|s/delete(*:13099)'
                                        .')'
                                    .')'
                                    .'|(*:13111)'
                                .')'
                                .'|order(?'
                                    .'|(*:13130)'
                                    .'|/([^/]++)/pay(*:13153)'
                                .')'
                                .'|guest\\-order(?'
                                    .'|(*:13179)'
                                    .'|/([^/]++)(*:13198)'
                                .')'
                            .')'
                            .'|ustomer(?'
                                .'|/(?'
                                    .'|log(?'
                                        .'|in(*:13232)'
                                        .'|out(*:13245)'
                                    .')'
                                    .'|order(*:13261)'
                                    .'|email(*:13276)'
                                    .'|password(*:13294)'
                                    .'|address(?'
                                        .'|(*:13314)'
                                        .'|/([^/]++)(?'
                                            .'|(*:13336)'
                                            .'|/default\\-(?'
                                                .'|shipping(*:13367)'
                                                .'|billing(*:13384)'
                                            .')'
                                        .')'
                                        .'|(*:13396)'
                                    .')'
                                .')'
                                .'|(*:13408)'
                            .')'
                        .')'
                        .'|product/([^/]++)/cross\\-selling(*:13451)'
                        .'|newsletter/(?'
                            .'|subscribe(*:13484)'
                            .'|confirm(*:13501)'
                            .'|unsubscribe(*:13522)'
                        .')'
                    .')'
                    .'|tore\\-api/v([^/]++)/(?'
                        .'|_info/(?'
                            .'|open(?'
                                .'|api3\\.json(*:13583)'
                                .'|\\-api\\-schema\\.json(*:13612)'
                            .')'
                            .'|swagger\\.html(*:13636)'
                        .')'
                        .'|c(?'
                            .'|o(?'
                                .'|nt(?'
                                    .'|ext(?'
                                        .'|(*:13666)'
                                    .')'
                                    .'|act\\-form(*:13686)'
                                .')'
                                .'|untry(*:13702)'
                            .')'
                            .'|urrency(*:13720)'
                            .'|ategory/([^/]++)(*:13746)'
                            .'|ms/([^/]++)(*:13767)'
                            .'|heckout/(?'
                                .'|cart(?'
                                    .'|(*:13795)'
                                    .'|/line\\-item(?'
                                        .'|(*:13819)'
                                    .')'
                                    .'|(*:13830)'
                                .')'
                                .'|order(*:13846)'
                            .')'
                        .')'
                        .'|language(*:13866)'
                        .'|s(?'
                            .'|alutation(*:13889)'
                            .'|e(?'
                                .'|arch(?'
                                    .'|(*:13910)'
                                    .'|\\-suggest(*:13929)'
                                .')'
                                .'|o\\-url(*:13946)'
                            .')'
                            .'|hipping\\-method(*:13972)'
                        .')'
                        .'|n(?'
                            .'|avigation/([^/]++)/([^/]++)(*:14014)'
                            .'|ewsletter/(?'
                                .'|confirm(*:14044)'
                                .'|subscribe(*:14063)'
                                .'|unsubscribe(*:14084)'
                            .')'
                        .')'
                        .'|p(?'
                            .'|roduct\\-listing/([^/]++)(*:14124)'
                            .'|ayment\\-method(*:14148)'
                        .')'
                        .'|handle\\-payment(*:14174)'
                        .'|account/(?'
                            .'|c(?'
                                .'|hange\\-(?'
                                    .'|p(?'
                                        .'|rofile(*:14219)'
                                        .'|a(?'
                                            .'|ssword(*:14239)'
                                            .'|yment\\-method/([^/]++)(*:14271)'
                                        .')'
                                    .')'
                                    .'|email(*:14288)'
                                .')'
                                .'|ustomer(*:14306)'
                            .')'
                            .'|log(?'
                                .'|in(*:14325)'
                                .'|out(*:14338)'
                            .')'
                            .'|re(?'
                                .'|gister(?'
                                    .'|\\-confirm(*:14372)'
                                    .'|(*:14382)'
                                .')'
                                .'|covery\\-password(?'
                                    .'|\\-confirm(*:14421)'
                                    .'|(*:14431)'
                                .')'
                            .')'
                        .')'
                        .'|order(?'
                            .'|/(?'
                                .'|state/cancel(*:14468)'
                                .'|payment(*:14485)'
                            .')'
                            .'|(*:14496)'
                        .')'
                    .')'
                .')'
                .'|/widgets/(?'
                    .'|account/order/detail/([^/]++)(*:14550)'
                    .'|cms(?'
                        .'|(?:/([^/]++))?(*:14580)'
                        .'|/navigation(?'
                            .'|(?:/([^/]++))?(*:14618)'
                            .'|/([^/]++)/filter(*:14644)'
                        .')'
                    .')'
                .')'
                .'|/checkout/line\\-item/(?'
                    .'|delete/([^/]++)(*:14696)'
                    .'|change\\-quantity/([^/]++)(*:14731)'
                .')'
                .'|/maintenance/singlepage/([^/]++)(*:14774)'
                .'|/navigation/([^/]++)(*:14804)'
                .'|/detail/([^/]++)(?'
                    .'|(*:14833)'
                    .'|/switch(*:14850)'
                .')'
                .'|/quickview/([^/]++)(*:14880)'
                .'|/product/([^/]++)/r(?'
                    .'|ating(*:14917)'
                    .'|eviews(*:14933)'
                .')'
                .'|/export/([^/]++)/([^/]++)(*:14969)'
            .')/?$}sD',
        14969 => '{^(?'
                .'|/api/v(?'
                    .'|(\\d+)/search/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15064)'
                    .'|(\\d+)/search\\-ids/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15158)'
                    .'|(\\d+)/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15240)'
                    .'|(\\d+)/custom\\-field\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:15343)'
                    .')'
                    .'|(\\d+)/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15431)'
                    .'|(\\d+)/search/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15525)'
                    .'|(\\d+)/search\\-ids/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15624)'
                    .'|(\\d+)/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15711)'
                    .'|(\\d+)/custom\\-field\\-set\\-relation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:15824)'
                    .')'
                    .'|(\\d+)/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15922)'
                    .'|(\\d+)/search/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16026)'
                    .'|(\\d+)/search\\-ids/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16135)'
                    .'|(\\d+)/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16232)'
                    .'|(\\d+)/customer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:16325)'
                    .')'
                    .'|(\\d+)/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16403)'
                    .'|(\\d+)/search/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16487)'
                    .'|(\\d+)/search\\-ids/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16576)'
                    .'|(\\d+)/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16653)'
                    .'|(\\d+)/customer\\-address/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:16755)'
                    .')'
                    .'|(\\d+)/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16842)'
                    .'|(\\d+)/search/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16935)'
                    .'|(\\d+)/search\\-ids/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17033)'
                    .'|(\\d+)/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17119)'
                    .'|(\\d+)/customer\\-group/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:17219)'
                    .')'
                    .'|(\\d+)/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17304)'
                    .'|(\\d+)/search/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17395)'
                    .'|(\\d+)/search\\-ids/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17491)'
                    .'|(\\d+)/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17575)'
                    .'|(\\d+)/customer\\-group\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:17688)'
                    .')'
                    .'|(\\d+)/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17786)'
                    .'|(\\d+)/search/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17890)'
                    .'|(\\d+)/search\\-ids/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17999)'
                    .'|(\\d+)/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18096)'
                    .'|(\\d+)/customer\\-recovery/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:18199)'
                    .')'
                    .'|(\\d+)/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18287)'
                    .'|(\\d+)/search/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18381)'
                    .'|(\\d+)/search\\-ids/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18480)'
                    .'|(\\d+)/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18567)'
                    .'|(\\d+)/customer\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:18665)'
                    .')'
                    .'|(\\d+)/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18748)'
                    .'|(\\d+)/search/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18837)'
                    .'|(\\d+)/search\\-ids/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18931)'
                    .'|(\\d+)/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19013)'
                    .'|(\\d+)/dead\\-message/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:19111)'
                    .')'
                    .'|(\\d+)/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19194)'
                    .'|(\\d+)/search/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19283)'
                    .'|(\\d+)/search\\-ids/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19377)'
                    .'|(\\d+)/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19459)'
                    .'|(\\d+)/delivery\\-time/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:19558)'
                    .')'
                    .'|(\\d+)/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19642)'
                    .'|(\\d+)/search/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19732)'
                    .'|(\\d+)/search\\-ids/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19827)'
                    .'|(\\d+)/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19910)'
                    .'|(\\d+)/delivery\\-time\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:20022)'
                    .')'
                    .'|(\\d+)/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20119)'
                    .'|(\\d+)/search/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20222)'
                    .'|(\\d+)/search\\-ids/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20330)'
                    .'|(\\d+)/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20426)'
                    .'|(\\d+)/document/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:20519)'
                    .')'
                    .'|(\\d+)/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20597)'
                    .'|(\\d+)/search/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20681)'
                    .'|(\\d+)/search\\-ids/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20770)'
                    .'|(\\d+)/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20847)'
                    .'|(\\d+)/document\\-base\\-config/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:20954)'
                    .')'
                    .'|(\\d+)/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21046)'
                    .'|(\\d+)/search/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21144)'
                    .'|(\\d+)/search\\-ids/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21247)'
                    .'|(\\d+)/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21338)'
                    .'|(\\d+)/document\\-base\\-config\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:21461)'
                    .')'
                    .'|(\\d+)/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21569)'
                    .'|(\\d+)/search/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21683)'
                    .'|(\\d+)/search\\-ids/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21802)'
                    .'|(\\d+)/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21909)'
                    .'|(\\d+)/document\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:22008)'
                    .')'
                    .'|(\\d+)/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22092)'
                    .'|(\\d+)/search/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22182)'
                    .'|(\\d+)/search\\-ids/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22277)'
                    .'|(\\d+)/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22360)'
                    .'|(\\d+)/document\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:22472)'
                    .')'
                    .'|(\\d+)/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22569)'
                    .'|(\\d+)/search/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22672)'
                    .'|(\\d+)/search\\-ids/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22780)'
                    .'|(\\d+)/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22876)'
                    .'|(\\d+)/event\\-action/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:22974)'
                    .')'
                    .'|(\\d+)/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23057)'
                    .'|(\\d+)/search/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23146)'
                    .'|(\\d+)/search\\-ids/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23240)'
                    .'|(\\d+)/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23322)'
                    .'|(\\d+)/import\\-export\\-file/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:23427)'
                    .')'
                    .'|(\\d+)/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23517)'
                    .'|(\\d+)/search/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23613)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23714)'
                    .'|(\\d+)/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23803)'
                    .'|(\\d+)/import\\-export\\-log/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:23907)'
                    .')'
                    .'|(\\d+)/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23996)'
                    .'|(\\d+)/search/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24091)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24191)'
                    .'|(\\d+)/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24279)'
                    .'|(\\d+)/import\\-export\\-profile/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:24387)'
                    .')'
                    .'|(\\d+)/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24480)'
                    .'|(\\d+)/search/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24579)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24683)'
                    .'|(\\d+)/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24775)'
                    .'|(\\d+)/import\\-export\\-profile\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:24896)'
                    .')'
                    .'|(\\d+)/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25002)'
                    .'|(\\d+)/search/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25114)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25231)'
                    .'|(\\d+)/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25336)'
                    .'|(\\d+)/integration/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:25432)'
                    .')'
                    .'|(\\d+)/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25513)'
                    .'|(\\d+)/search/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25600)'
                    .'|(\\d+)/search\\-ids/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25692)'
                    .'|(\\d+)/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25772)'
                    .'|(\\d+)/language/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:25865)'
                    .')'
                    .'|(\\d+)/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25943)'
                    .'|(\\d+)/search/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26027)'
                    .'|(\\d+)/search\\-ids/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26116)'
                    .'|(\\d+)/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26193)'
                    .'|(\\d+)/locale/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:26284)'
                    .')'
                    .'|(\\d+)/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26360)'
                    .'|(\\d+)/search/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26442)'
                    .'|(\\d+)/search\\-ids/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26529)'
                    .'|(\\d+)/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26604)'
                    .'|(\\d+)/locale\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:26708)'
                    .')'
                    .'|(\\d+)/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26797)'
                    .'|(\\d+)/search/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26892)'
                    .'|(\\d+)/search\\-ids/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26992)'
                    .'|(\\d+)/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27080)'
                    .'|(\\d+)/log\\-entry/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:27175)'
                    .')'
                    .'|(\\d+)/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27255)'
                    .'|(\\d+)/search/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27341)'
                    .'|(\\d+)/search\\-ids/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27432)'
                    .'|(\\d+)/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27511)'
                    .'|(\\d+)/mail\\-header\\-footer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:27616)'
                    .')'
                    .'|(\\d+)/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27706)'
                    .'|(\\d+)/search/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27802)'
                    .'|(\\d+)/search\\-ids/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27903)'
                    .'|(\\d+)/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27992)'
                    .'|(\\d+)/mail\\-header\\-footer\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:28110)'
                    .')'
                    .'|(\\d+)/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28213)'
                    .'|(\\d+)/search/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28322)'
                    .'|(\\d+)/search\\-ids/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28436)'
                    .'|(\\d+)/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28538)'
                    .'|(\\d+)/mail\\-template/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:28637)'
                    .')'
                    .'|(\\d+)/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28721)'
                    .'|(\\d+)/search/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28811)'
                    .'|(\\d+)/search\\-ids/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28906)'
                    .'|(\\d+)/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28989)'
                    .'|(\\d+)/mail\\-template\\-media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:29095)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29186)'
                    .'|(\\d+)/search/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29283)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29385)'
                    .'|(\\d+)/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29475)'
                    .'|(\\d+)/mail\\-template\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:29590)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29690)'
                    .'|(\\d+)/search/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29796)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29907)'
                    .'|(\\d+)/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30006)'
                    .'|(\\d+)/mail\\-template\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:30118)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30215)'
                    .'|(\\d+)/search/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30318)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30426)'
                    .'|(\\d+)/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30522)'
                    .'|(\\d+)/mail\\-template\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:30627)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30717)'
                    .'|(\\d+)/search/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30813)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30914)'
                    .'|(\\d+)/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31003)'
                    .'|(\\d+)/mail\\-template\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:31121)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31224)'
                    .'|(\\d+)/search/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31333)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31447)'
                    .'|(\\d+)/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31549)'
                    .'|(\\d+)/main\\-category/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:31648)'
                    .')'
                    .'|(\\d+)/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31732)'
                    .'|(\\d+)/search/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31822)'
                    .'|(\\d+)/search\\-ids/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31917)'
                    .'|(\\d+)/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32000)'
                    .'|(\\d+)/media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:32090)'
                    .')'
                    .'|(\\d+)/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32165)'
                    .'|(\\d+)/search/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32246)'
                    .'|(\\d+)/search\\-ids/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32332)'
                    .'|(\\d+)/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32406)'
                    .'|(\\d+)/media\\-default\\-folder/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:32513)'
                    .')'
                    .'|(\\d+)/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32605)'
                    .'|(\\d+)/search/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32703)'
                    .'|(\\d+)/search\\-ids/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32806)'
                    .'|(\\d+)/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32897)'
                    .'|(\\d+)/media\\-folder/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:32995)'
                    .')'
                    .'|(\\d+)/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33078)'
                    .'|(\\d+)/search/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33167)'
                    .'|(\\d+)/search\\-ids/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33261)'
                    .'|(\\d+)/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33343)'
                    .'|(\\d+)/media\\-folder\\-configuration/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:33456)'
                    .')'
                    .'|(\\d+)/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33554)'
                    .'|(\\d+)/search/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33658)'
                    .'|(\\d+)/search\\-ids/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33767)'
                    .'|(\\d+)/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33864)'
                    .'|(\\d+)/media\\-folder\\-configuration\\-media\\-thumbnail\\-size/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:34001)'
                    .')'
                    .'|(\\d+)/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34123)'
                    .'|(\\d+)/search/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34251)'
                    .'|(\\d+)/search\\-ids/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34384)'
                    .'|(\\d+)/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34505)'
                    .'|(\\d+)/media\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:34600)'
                    .')'
                    .'|(\\d+)/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34680)'
                    .'|(\\d+)/search/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34766)'
                    .'|(\\d+)/search\\-ids/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34857)'
                    .'|(\\d+)/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34936)'
                    .'|(\\d+)/media\\-thumbnail/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:35037)'
                    .')'
                    .'|(\\d+)/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35123)'
                    .'|(\\d+)/search/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35215)'
                    .'|(\\d+)/search\\-ids/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35312)'
                    .'|(\\d+)/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35397)'
                    .'|(\\d+)/media\\-thumbnail\\-size/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:35504)'
                    .')'
                    .'|(\\d+)/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35596)'
                    .'|(\\d+)/search/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35694)'
                    .'|(\\d+)/search\\-ids/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35797)'
                    .'|(\\d+)/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35888)'
                    .'|(\\d+)/media\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:35991)'
                    .')'
                    .'|(\\d+)/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36079)'
                    .'|(\\d+)/search/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36173)'
                    .'|(\\d+)/search\\-ids/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36272)'
                    .'|(\\d+)/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36359)'
                    .'|(\\d+)/message\\-queue\\-stats/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:36465)'
                    .')'
                    .'|(\\d+)/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36556)'
                    .'|(\\d+)/search/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36653)'
                    .'|(\\d+)/search\\-ids/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36755)'
                    .'|(\\d+)/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36845)'
                    .'|(\\d+)/newsletter\\-recipient/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:36951)'
                    .')'
                    .'|(\\d+)/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37042)'
                    .'|(\\d+)/search/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37139)'
                    .'|(\\d+)/search\\-ids/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37241)'
                    .'|(\\d+)/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37331)'
                    .'|(\\d+)/newsletter\\-recipient\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:37442)'
                    .')'
                    .'|(\\d+)/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37538)'
                    .'|(\\d+)/search/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37640)'
                    .'|(\\d+)/search\\-ids/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37747)'
                    .'|(\\d+)/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37842)'
                    .'|(\\d+)/number\\-range/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:37940)'
                    .')'
                    .'|(\\d+)/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38023)'
                    .'|(\\d+)/search/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38112)'
                    .'|(\\d+)/search\\-ids/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38206)'
                    .'|(\\d+)/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38288)'
                    .'|(\\d+)/number\\-range\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:38402)'
                    .')'
                    .'|(\\d+)/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38501)'
                    .'|(\\d+)/search/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38606)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38716)'
                    .'|(\\d+)/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38814)'
                    .'|(\\d+)/number\\-range\\-state/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:38919)'
                    .')'
                    .'|(\\d+)/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39009)'
                    .'|(\\d+)/search/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39105)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39206)'
                    .'|(\\d+)/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39295)'
                    .'|(\\d+)/number\\-range\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:39406)'
                    .')'
                    .'|(\\d+)/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39502)'
                    .'|(\\d+)/search/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39604)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39711)'
                    .'|(\\d+)/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39806)'
                    .'|(\\d+)/number\\-range\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:39910)'
                    .')'
                    .'|(\\d+)/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39999)'
                    .'|(\\d+)/search/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40094)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40194)'
                    .'|(\\d+)/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40282)'
                    .'|(\\d+)/number\\-range\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:40399)'
                    .')'
                    .'|(\\d+)/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40501)'
                    .'|(\\d+)/search/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40609)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40722)'
                    .'|(\\d+)/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40823)'
                    .'|(\\d+)/order/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:40913)'
                    .')'
                    .'|(\\d+)/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40988)'
                    .'|(\\d+)/search/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41069)'
                    .'|(\\d+)/search\\-ids/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41155)'
                    .'|(\\d+)/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41229)'
                    .'|(\\d+)/order\\-address/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:41328)'
                    .')'
                    .'|(\\d+)/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41412)'
                    .'|(\\d+)/search/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41502)'
                    .'|(\\d+)/search\\-ids/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41597)'
                    .'|(\\d+)/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41680)'
                    .'|(\\d+)/order\\-customer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:41780)'
                    .')'
                    .'|(\\d+)/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41865)'
                    .'|(\\d+)/search/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41956)'
                    .'|(\\d+)/search\\-ids/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42052)'
                    .'|(\\d+)/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42136)'
                .')'
            .')/?$}sD',
        42136 => '{^(?'
                .'|/api/v(?'
                    .'|(\\d+)/order\\-delivery/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:42242)'
                    .')'
                    .'|(\\d+)/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42327)'
                    .'|(\\d+)/search/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42418)'
                    .'|(\\d+)/search\\-ids/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42514)'
                    .'|(\\d+)/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42598)'
                    .'|(\\d+)/order\\-delivery\\-position/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:42708)'
                    .')'
                    .'|(\\d+)/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42803)'
                    .'|(\\d+)/search/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42904)'
                    .'|(\\d+)/search\\-ids/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43010)'
                    .'|(\\d+)/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43104)'
                    .'|(\\d+)/order\\-line\\-item/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:43206)'
                    .')'
                    .'|(\\d+)/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43293)'
                    .'|(\\d+)/search/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43386)'
                    .'|(\\d+)/search\\-ids/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43484)'
                    .'|(\\d+)/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43570)'
                    .'|(\\d+)/order\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:43665)'
                    .')'
                    .'|(\\d+)/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43745)'
                    .'|(\\d+)/search/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43831)'
                    .'|(\\d+)/search\\-ids/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43922)'
                    .'|(\\d+)/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44001)'
                    .'|(\\d+)/order\\-transaction/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:44104)'
                    .')'
                    .'|(\\d+)/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44192)'
                    .'|(\\d+)/search/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44286)'
                    .'|(\\d+)/search\\-ids/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44385)'
                    .'|(\\d+)/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44472)'
                    .'|(\\d+)/payment\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:44572)'
                    .')'
                    .'|(\\d+)/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44657)'
                    .'|(\\d+)/search/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44748)'
                    .'|(\\d+)/search\\-ids/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44844)'
                    .'|(\\d+)/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44928)'
                    .'|(\\d+)/payment\\-method\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:45041)'
                    .')'
                    .'|(\\d+)/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45139)'
                    .'|(\\d+)/search/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45243)'
                    .'|(\\d+)/search\\-ids/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45352)'
                    .'|(\\d+)/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45449)'
                    .'|(\\d+)/payone\\-payment\\-card/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:45555)'
                    .')'
                    .'|(\\d+)/payone\\-payment\\-card((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45646)'
                    .'|(\\d+)/search/payone\\-payment\\-card((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45743)'
                    .'|(\\d+)/search\\-ids/payone\\-payment\\-card((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45845)'
                    .'|(\\d+)/payone\\-payment\\-card((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45935)'
                    .'|(\\d+)/payone\\-payment\\-mandate/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:46044)'
                    .')'
                    .'|(\\d+)/payone\\-payment\\-mandate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46138)'
                    .'|(\\d+)/search/payone\\-payment\\-mandate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46238)'
                    .'|(\\d+)/search\\-ids/payone\\-payment\\-mandate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46343)'
                    .'|(\\d+)/payone\\-payment\\-mandate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46436)'
                    .'|(\\d+)/plugin/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:46527)'
                    .')'
                    .'|(\\d+)/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46603)'
                    .'|(\\d+)/search/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46685)'
                    .'|(\\d+)/search\\-ids/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46772)'
                    .'|(\\d+)/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46847)'
                    .'|(\\d+)/plugin\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:46951)'
                    .')'
                    .'|(\\d+)/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47040)'
                    .'|(\\d+)/search/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47135)'
                    .'|(\\d+)/search\\-ids/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47235)'
                    .'|(\\d+)/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47323)'
                    .'|(\\d+)/product/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:47415)'
                    .')'
                    .'|(\\d+)/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47492)'
                    .'|(\\d+)/search/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47575)'
                    .'|(\\d+)/search\\-ids/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47663)'
                    .'|(\\d+)/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47739)'
                    .'|(\\d+)/product\\-category/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:47841)'
                    .')'
                    .'|(\\d+)/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47928)'
                    .'|(\\d+)/search/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48021)'
                    .'|(\\d+)/search\\-ids/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48119)'
                    .'|(\\d+)/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48205)'
                    .'|(\\d+)/product\\-category\\-tree/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:48313)'
                    .')'
                    .'|(\\d+)/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48406)'
                    .'|(\\d+)/search/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48505)'
                    .'|(\\d+)/search\\-ids/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48609)'
                    .'|(\\d+)/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48701)'
                    .'|(\\d+)/product\\-configurator\\-setting/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:48816)'
                    .')'
                    .'|(\\d+)/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48916)'
                    .'|(\\d+)/search/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49022)'
                    .'|(\\d+)/search\\-ids/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49133)'
                    .'|(\\d+)/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49232)'
                    .'|(\\d+)/product\\-cross\\-selling/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:49340)'
                    .')'
                    .'|(\\d+)/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49433)'
                    .'|(\\d+)/search/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49532)'
                    .'|(\\d+)/search\\-ids/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49636)'
                    .'|(\\d+)/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49728)'
                    .'|(\\d+)/product\\-cross\\-selling\\-assigned\\-products/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:49856)'
                    .')'
                    .'|(\\d+)/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49969)'
                    .'|(\\d+)/search/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50088)'
                    .'|(\\d+)/search\\-ids/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50212)'
                    .'|(\\d+)/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50324)'
                    .'|(\\d+)/product\\-cross\\-selling\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:50445)'
                    .')'
                    .'|(\\d+)/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50551)'
                    .'|(\\d+)/search/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50663)'
                    .'|(\\d+)/search\\-ids/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50780)'
                    .'|(\\d+)/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50885)'
                    .'|(\\d+)/product\\-custom\\-field\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:50997)'
                    .')'
                    .'|(\\d+)/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51094)'
                    .'|(\\d+)/search/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51197)'
                    .'|(\\d+)/search\\-ids/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51305)'
                    .'|(\\d+)/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51401)'
                    .'|(\\d+)/product\\-export/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:51501)'
                    .')'
                    .'|(\\d+)/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51586)'
                    .'|(\\d+)/search/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51677)'
                    .'|(\\d+)/search\\-ids/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51773)'
                    .'|(\\d+)/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51857)'
                    .'|(\\d+)/product\\-keyword\\-dictionary/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:51970)'
                    .')'
                    .'|(\\d+)/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52068)'
                    .'|(\\d+)/search/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52172)'
                    .'|(\\d+)/search\\-ids/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52281)'
                    .'|(\\d+)/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52378)'
                    .'|(\\d+)/product\\-manufacturer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:52484)'
                    .')'
                    .'|(\\d+)/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52575)'
                    .'|(\\d+)/search/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52672)'
                    .'|(\\d+)/search\\-ids/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52774)'
                    .'|(\\d+)/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52864)'
                    .'|(\\d+)/product\\-manufacturer\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:52983)'
                    .')'
                    .'|(\\d+)/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53087)'
                    .'|(\\d+)/search/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53197)'
                    .'|(\\d+)/search\\-ids/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53312)'
                    .'|(\\d+)/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53415)'
                    .'|(\\d+)/product\\-media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:53514)'
                    .')'
                    .'|(\\d+)/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53598)'
                    .'|(\\d+)/search/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53688)'
                    .'|(\\d+)/search\\-ids/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53783)'
                    .'|(\\d+)/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53866)'
                    .'|(\\d+)/product\\-option/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:53966)'
                    .')'
                    .'|(\\d+)/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54051)'
                    .'|(\\d+)/search/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54142)'
                    .'|(\\d+)/search\\-ids/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54238)'
                    .'|(\\d+)/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54322)'
                    .'|(\\d+)/product\\-price/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:54421)'
                    .')'
                    .'|(\\d+)/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54505)'
                    .'|(\\d+)/search/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54595)'
                    .'|(\\d+)/search\\-ids/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54690)'
                    .'|(\\d+)/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54773)'
                    .'|(\\d+)/product\\-property/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:54875)'
                    .')'
                    .'|(\\d+)/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54962)'
                    .'|(\\d+)/search/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55055)'
                    .'|(\\d+)/search\\-ids/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55153)'
                    .'|(\\d+)/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55239)'
                    .'|(\\d+)/product\\-review/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:55339)'
                    .')'
                    .'|(\\d+)/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55424)'
                    .'|(\\d+)/search/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55515)'
                    .'|(\\d+)/search\\-ids/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55611)'
                    .'|(\\d+)/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55695)'
                    .'|(\\d+)/product\\-search\\-keyword/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:55804)'
                    .')'
                    .'|(\\d+)/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55898)'
                    .'|(\\d+)/search/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55998)'
                    .'|(\\d+)/search\\-ids/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56103)'
                    .'|(\\d+)/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56196)'
                    .'|(\\d+)/product\\-stream/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:56296)'
                    .')'
                    .'|(\\d+)/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56381)'
                    .'|(\\d+)/search/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56472)'
                    .'|(\\d+)/search\\-ids/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56568)'
                    .'|(\\d+)/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56652)'
                    .'|(\\d+)/product\\-stream\\-filter/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:56760)'
                    .')'
                    .'|(\\d+)/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56853)'
                    .'|(\\d+)/search/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56952)'
                    .'|(\\d+)/search\\-ids/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57056)'
                    .'|(\\d+)/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57148)'
                    .'|(\\d+)/product\\-stream\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:57261)'
                    .')'
                    .'|(\\d+)/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57359)'
                    .'|(\\d+)/search/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57463)'
                    .'|(\\d+)/search\\-ids/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57572)'
                    .'|(\\d+)/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57669)'
                    .'|(\\d+)/product\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:57766)'
                    .')'
                    .'|(\\d+)/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57848)'
                    .'|(\\d+)/search/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57936)'
                    .'|(\\d+)/search\\-ids/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58029)'
                    .'|(\\d+)/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58110)'
                    .'|(\\d+)/product\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:58215)'
                    .')'
                    .'|(\\d+)/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58305)'
                    .'|(\\d+)/search/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58401)'
                    .'|(\\d+)/search\\-ids/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58502)'
                    .'|(\\d+)/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58591)'
                    .'|(\\d+)/product\\-visibility/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:58695)'
                    .')'
                    .'|(\\d+)/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58784)'
                    .'|(\\d+)/search/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58879)'
                    .'|(\\d+)/search\\-ids/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58979)'
                    .'|(\\d+)/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59067)'
                    .'|(\\d+)/promotion/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:59161)'
                    .')'
                    .'|(\\d+)/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59240)'
                    .'|(\\d+)/search/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59325)'
                    .'|(\\d+)/search\\-ids/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59415)'
                    .'|(\\d+)/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59493)'
                    .'|(\\d+)/promotion\\-cart\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:59599)'
                    .')'
                    .'|(\\d+)/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59690)'
                    .'|(\\d+)/search/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59787)'
                    .'|(\\d+)/search\\-ids/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59889)'
                    .'|(\\d+)/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59979)'
                    .'|(\\d+)/promotion\\-discount/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:60083)'
                    .')'
                    .'|(\\d+)/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60172)'
                    .'|(\\d+)/search/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60267)'
                    .'|(\\d+)/search\\-ids/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60367)'
                    .'|(\\d+)/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60455)'
                    .'|(\\d+)/promotion\\-discount\\-prices/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:60567)'
                    .')'
                    .'|(\\d+)/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60664)'
                    .'|(\\d+)/search/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60767)'
                    .'|(\\d+)/search\\-ids/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60875)'
                    .'|(\\d+)/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60971)'
                    .'|(\\d+)/promotion\\-discount\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:61081)'
                    .')'
                    .'|(\\d+)/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61176)'
                    .'|(\\d+)/search/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61277)'
                    .'|(\\d+)/search\\-ids/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61383)'
                    .'|(\\d+)/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61477)'
                    .'|(\\d+)/promotion\\-individual\\-code/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:61589)'
                    .')'
                    .'|(\\d+)/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61686)'
                    .'|(\\d+)/search/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61789)'
                    .'|(\\d+)/search\\-ids/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61897)'
                    .'|(\\d+)/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61993)'
                    .'|(\\d+)/promotion\\-order\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:62100)'
                    .')'
                    .'|(\\d+)/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62192)'
                    .'|(\\d+)/search/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62290)'
                    .'|(\\d+)/search\\-ids/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62393)'
                    .'|(\\d+)/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62484)'
                    .'|(\\d+)/promotion\\-persona\\-customer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:62597)'
                    .')'
                    .'|(\\d+)/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62695)'
                    .'|(\\d+)/search/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62799)'
                    .'|(\\d+)/search\\-ids/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62908)'
                    .'|(\\d+)/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63005)'
                    .'|(\\d+)/promotion\\-persona\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:63114)'
                    .')'
                    .'|(\\d+)/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63208)'
                    .'|(\\d+)/search/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63308)'
                    .'|(\\d+)/search\\-ids/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63413)'
                    .'|(\\d+)/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63506)'
                    .'|(\\d+)/promotion\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:63616)'
                    .')'
                    .'|(\\d+)/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63711)'
                    .'|(\\d+)/search/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63812)'
                    .'|(\\d+)/search\\-ids/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63918)'
                    .'|(\\d+)/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64012)'
                    .'|(\\d+)/promotion\\-setgroup/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:64116)'
                    .')'
                    .'|(\\d+)/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64205)'
                    .'|(\\d+)/search/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64300)'
                    .'|(\\d+)/search\\-ids/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64400)'
                    .'|(\\d+)/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64488)'
                    .'|(\\d+)/promotion\\-setgroup\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:64598)'
                    .')'
                    .'|(\\d+)/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64693)'
                    .'|(\\d+)/search/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64794)'
                    .'|(\\d+)/search\\-ids/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64900)'
                    .'|(\\d+)/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64994)'
                    .'|(\\d+)/promotion\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:65101)'
                    .')'
                    .'|(\\d+)/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65193)'
                    .'|(\\d+)/search/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65291)'
                    .'|(\\d+)/search\\-ids/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65394)'
                    .'|(\\d+)/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65485)'
                    .'|(\\d+)/property\\-group/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:65585)'
                    .')'
                    .'|(\\d+)/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65670)'
                    .'|(\\d+)/search/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65761)'
                    .'|(\\d+)/search\\-ids/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65857)'
                    .'|(\\d+)/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65941)'
                    .'|(\\d+)/property\\-group\\-option/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:66049)'
                    .')'
                    .'|(\\d+)/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66142)'
                    .'|(\\d+)/search/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66241)'
                    .'|(\\d+)/search\\-ids/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66345)'
                    .'|(\\d+)/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66437)'
                    .'|(\\d+)/property\\-group\\-option\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:66558)'
                    .')'
                    .'|(\\d+)/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66664)'
                    .'|(\\d+)/search/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66776)'
                    .'|(\\d+)/search\\-ids/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66893)'
                    .'|(\\d+)/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66998)'
                    .'|(\\d+)/property\\-group\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:67111)'
                    .')'
                    .'|(\\d+)/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67209)'
                    .'|(\\d+)/search/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67313)'
                    .'|(\\d+)/search\\-ids/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67422)'
                    .'|(\\d+)/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67519)'
                    .'|(\\d+)/rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:67608)'
                    .')'
                    .'|(\\d+)/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67682)'
                    .'|(\\d+)/search/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67762)'
                    .'|(\\d+)/search\\-ids/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67847)'
                    .'|(\\d+)/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67920)'
                    .'|(\\d+)/rule\\-condition/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:68020)'
                    .')'
                    .'|(\\d+)/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68105)'
                    .'|(\\d+)/search/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68196)'
                    .'|(\\d+)/search\\-ids/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68292)'
                    .'|(\\d+)/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68376)'
                    .'|(\\d+)/sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:68475)'
                    .')'
                    .'|(\\d+)/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68559)'
                    .'|(\\d+)/search/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68649)'
                    .'|(\\d+)/search\\-ids/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68744)'
                    .'|(\\d+)/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68827)'
                    .'|(\\d+)/sales\\-channel\\-analytics/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:68937)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69032)'
                    .'|(\\d+)/search/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69133)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69239)'
                    .'|(\\d+)/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69333)'
                    .'|(\\d+)/sales\\-channel\\-country/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:69441)'
                    .')'
                .')'
            .')/?$}sD',
        69441 => '{^(?'
                .'|/api/v(?'
                    .'|(\\d+)/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69539)'
                    .'|(\\d+)/search/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69638)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69742)'
                    .'|(\\d+)/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69834)'
                    .'|(\\d+)/sales\\-channel\\-currency/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:69943)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70037)'
                    .'|(\\d+)/search/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70137)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70242)'
                    .'|(\\d+)/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70335)'
                    .'|(\\d+)/sales\\-channel\\-domain/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:70442)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70534)'
                    .'|(\\d+)/search/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70632)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70735)'
                    .'|(\\d+)/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70826)'
                    .'|(\\d+)/sales\\-channel\\-language/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:70935)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71029)'
                    .'|(\\d+)/search/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71129)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71234)'
                    .'|(\\d+)/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71327)'
                    .'|(\\d+)/sales\\-channel\\-payment\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:71443)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71544)'
                    .'|(\\d+)/search/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71651)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71763)'
                    .'|(\\d+)/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71863)'
                    .'|(\\d+)/sales\\-channel\\-shipping\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:71980)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72082)'
                    .'|(\\d+)/search/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72190)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72303)'
                    .'|(\\d+)/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72404)'
                    .'|(\\d+)/sales\\-channel\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:72516)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72613)'
                    .'|(\\d+)/search/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72716)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72824)'
                    .'|(\\d+)/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72920)'
                    .'|(\\d+)/sales\\-channel\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:73025)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73115)'
                    .'|(\\d+)/search/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73211)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73312)'
                    .'|(\\d+)/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73401)'
                    .'|(\\d+)/sales\\-channel\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:73519)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73622)'
                    .'|(\\d+)/search/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73731)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73845)'
                    .'|(\\d+)/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73947)'
                    .'|(\\d+)/salutation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:74042)'
                    .')'
                    .'|(\\d+)/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74122)'
                    .'|(\\d+)/search/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74208)'
                    .'|(\\d+)/search\\-ids/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74299)'
                    .'|(\\d+)/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74378)'
                    .'|(\\d+)/salutation\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:74486)'
                    .')'
                    .'|(\\d+)/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74579)'
                    .'|(\\d+)/search/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74678)'
                    .'|(\\d+)/search\\-ids/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74782)'
                    .'|(\\d+)/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74874)'
                    .'|(\\d+)/scheduled\\-task/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:74974)'
                    .')'
                    .'|(\\d+)/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75059)'
                    .'|(\\d+)/search/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75150)'
                    .'|(\\d+)/search\\-ids/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75246)'
                    .'|(\\d+)/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75330)'
                    .'|(\\d+)/seo\\-url/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:75423)'
                    .')'
                    .'|(\\d+)/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75501)'
                    .'|(\\d+)/search/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75585)'
                    .'|(\\d+)/search\\-ids/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75674)'
                    .'|(\\d+)/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75751)'
                    .'|(\\d+)/seo\\-url\\-template/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:75854)'
                    .')'
                    .'|(\\d+)/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75942)'
                    .'|(\\d+)/search/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76036)'
                    .'|(\\d+)/search\\-ids/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76135)'
                    .'|(\\d+)/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76222)'
                    .'|(\\d+)/shipping\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:76323)'
                    .')'
                    .'|(\\d+)/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76409)'
                    .'|(\\d+)/search/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76501)'
                    .'|(\\d+)/search\\-ids/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76598)'
                    .'|(\\d+)/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76683)'
                    .'|(\\d+)/shipping\\-method\\-price/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:76791)'
                    .')'
                    .'|(\\d+)/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76884)'
                    .'|(\\d+)/search/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76983)'
                    .'|(\\d+)/search\\-ids/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77087)'
                    .'|(\\d+)/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77179)'
                    .'|(\\d+)/shipping\\-method\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:77285)'
                    .')'
                    .'|(\\d+)/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77376)'
                    .'|(\\d+)/search/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77473)'
                    .'|(\\d+)/search\\-ids/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77575)'
                    .'|(\\d+)/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77665)'
                    .'|(\\d+)/shipping\\-method\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:77779)'
                    .')'
                    .'|(\\d+)/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77878)'
                    .'|(\\d+)/search/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77983)'
                    .'|(\\d+)/search\\-ids/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78093)'
                    .'|(\\d+)/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78191)'
                    .'|(\\d+)/snippet/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:78283)'
                    .')'
                    .'|(\\d+)/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78360)'
                    .'|(\\d+)/search/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78443)'
                    .'|(\\d+)/search\\-ids/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78531)'
                    .'|(\\d+)/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78607)'
                    .'|(\\d+)/snippet\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:78704)'
                    .')'
                    .'|(\\d+)/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78786)'
                    .'|(\\d+)/search/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78874)'
                    .'|(\\d+)/search\\-ids/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78967)'
                    .'|(\\d+)/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79048)'
                    .'|(\\d+)/state\\-machine/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:79147)'
                    .')'
                    .'|(\\d+)/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79231)'
                    .'|(\\d+)/search/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79321)'
                    .'|(\\d+)/search\\-ids/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79416)'
                    .'|(\\d+)/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79499)'
                    .'|(\\d+)/state\\-machine\\-history/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:79607)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79700)'
                    .'|(\\d+)/search/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79799)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79903)'
                    .'|(\\d+)/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79995)'
                    .'|(\\d+)/state\\-machine\\-state/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:80101)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80192)'
                    .'|(\\d+)/search/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80289)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80391)'
                    .'|(\\d+)/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80481)'
                    .'|(\\d+)/state\\-machine\\-state\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:80600)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80704)'
                    .'|(\\d+)/search/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80814)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80929)'
                    .'|(\\d+)/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81032)'
                    .'|(\\d+)/state\\-machine\\-transition/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:81143)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81239)'
                    .'|(\\d+)/search/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81341)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81448)'
                    .'|(\\d+)/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81543)'
                    .'|(\\d+)/state\\-machine\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:81655)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81752)'
                    .'|(\\d+)/search/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81855)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81963)'
                    .'|(\\d+)/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82059)'
                    .'|(\\d+)/swag\\-migration\\-connection/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:82171)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-connection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82268)'
                    .'|(\\d+)/search/swag\\-migration\\-connection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82371)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-connection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82479)'
                    .'|(\\d+)/swag\\-migration\\-connection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82575)'
                    .'|(\\d+)/swag\\-migration\\-data/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:82681)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82772)'
                    .'|(\\d+)/search/swag\\-migration\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82869)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82971)'
                    .'|(\\d+)/swag\\-migration\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83061)'
                    .'|(\\d+)/swag\\-migration\\-general\\-setting/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:83179)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-general\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83282)'
                    .'|(\\d+)/search/swag\\-migration\\-general\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83391)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-general\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83505)'
                    .'|(\\d+)/swag\\-migration\\-general\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83607)'
                    .'|(\\d+)/swag\\-migration\\-logging/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:83716)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-logging((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83810)'
                    .'|(\\d+)/search/swag\\-migration\\-logging((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83910)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-logging((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84015)'
                    .'|(\\d+)/swag\\-migration\\-logging((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84108)'
                    .'|(\\d+)/swag\\-migration\\-mapping/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:84217)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84311)'
                    .'|(\\d+)/search/swag\\-migration\\-mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84411)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84516)'
                    .'|(\\d+)/swag\\-migration\\-mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84609)'
                    .'|(\\d+)/swag\\-migration\\-media\\-file/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:84722)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-media\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84820)'
                    .'|(\\d+)/search/swag\\-migration\\-media\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84924)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-media\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85033)'
                    .'|(\\d+)/swag\\-migration\\-media\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85130)'
                    .'|(\\d+)/swag\\-migration\\-run/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:85235)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-run((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85325)'
                    .'|(\\d+)/search/swag\\-migration\\-run((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85421)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-run((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85522)'
                    .'|(\\d+)/swag\\-migration\\-run((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85611)'
                    .'|(\\d+)/system\\-config/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:85710)'
                    .')'
                    .'|(\\d+)/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85794)'
                    .'|(\\d+)/search/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85884)'
                    .'|(\\d+)/search\\-ids/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85979)'
                    .'|(\\d+)/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86062)'
                    .'|(\\d+)/tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:86150)'
                    .')'
                    .'|(\\d+)/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86223)'
                    .'|(\\d+)/search/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86302)'
                    .'|(\\d+)/search\\-ids/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86386)'
                    .'|(\\d+)/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86458)'
                    .'|(\\d+)/tax/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:86546)'
                    .')'
                    .'|(\\d+)/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86619)'
                    .'|(\\d+)/search/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86698)'
                    .'|(\\d+)/search\\-ids/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86782)'
                    .'|(\\d+)/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86854)'
                    .'|(\\d+)/tax\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:86948)'
                    .')'
                    .'|(\\d+)/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87027)'
                    .'|(\\d+)/search/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87112)'
                    .'|(\\d+)/search\\-ids/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87202)'
                    .'|(\\d+)/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87280)'
                    .'|(\\d+)/tax\\-rule\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:87380)'
                    .')'
                    .'|(\\d+)/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87465)'
                    .'|(\\d+)/search/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87556)'
                    .'|(\\d+)/search\\-ids/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87652)'
                    .'|(\\d+)/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87736)'
                    .'|(\\d+)/tax\\-rule\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:87849)'
                    .')'
                    .'|(\\d+)/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87947)'
                    .'|(\\d+)/search/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88051)'
                    .'|(\\d+)/search\\-ids/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88160)'
                    .'|(\\d+)/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88257)'
                    .'|(\\d+)/theme/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:88347)'
                    .')'
                    .'|(\\d+)/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88422)'
                    .'|(\\d+)/search/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88503)'
                    .'|(\\d+)/search\\-ids/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88589)'
                    .'|(\\d+)/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88663)'
                    .'|(\\d+)/theme\\-media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:88760)'
                    .')'
                    .'|(\\d+)/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88842)'
                    .'|(\\d+)/search/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88930)'
                    .'|(\\d+)/search\\-ids/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89023)'
                    .'|(\\d+)/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89104)'
                    .'|(\\d+)/theme\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:89210)'
                    .')'
                    .'|(\\d+)/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89301)'
                    .'|(\\d+)/search/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89398)'
                    .'|(\\d+)/search\\-ids/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89500)'
                    .'|(\\d+)/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89590)'
                    .'|(\\d+)/theme\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:89693)'
                    .')'
                    .'|(\\d+)/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89781)'
                    .'|(\\d+)/search/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89875)'
                    .'|(\\d+)/search\\-ids/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89974)'
                    .'|(\\d+)/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90061)'
                    .'|(\\d+)/unit/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:90150)'
                    .')'
                    .'|(\\d+)/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90224)'
                    .'|(\\d+)/search/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90304)'
                    .'|(\\d+)/search\\-ids/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90389)'
                    .'|(\\d+)/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90462)'
                    .'|(\\d+)/unit\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:90564)'
                    .')'
                    .'|(\\d+)/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90651)'
                    .'|(\\d+)/search/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90744)'
                    .'|(\\d+)/search\\-ids/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90842)'
                    .'|(\\d+)/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90928)'
                    .'|(\\d+)/user/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:91014)'
                    .'|(\\d+)/user((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91087)'
                    .'|(\\d+)/search/user((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91167)'
                    .'|(\\d+)/search\\-ids/user((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91252)'
                    .'|(\\d+)/user\\-access\\-key/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:91354)'
                    .')'
                    .'|(\\d+)/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91441)'
                    .'|(\\d+)/search/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91534)'
                    .'|(\\d+)/search\\-ids/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91632)'
                    .'|(\\d+)/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91718)'
                    .'|(\\d+)/user\\-recovery/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:91817)'
                    .')'
                    .'|(\\d+)/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91901)'
                    .'|(\\d+)/search/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91991)'
                    .'|(\\d+)/search\\-ids/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92086)'
                    .'|(\\d+)/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92169)'
                    .'|(\\d+)/version/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:92261)'
                    .')'
                    .'|(\\d+)/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92338)'
                    .'|(\\d+)/search/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92421)'
                    .'|(\\d+)/search\\-ids/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92509)'
                    .'|(\\d+)/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92585)'
                    .'|(\\d+)/version\\-commit/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:92685)'
                    .')'
                    .'|(\\d+)/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92770)'
                    .'|(\\d+)/search/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92861)'
                    .'|(\\d+)/search\\-ids/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92957)'
                    .'|(\\d+)/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93041)'
                    .'|(\\d+)/version\\-commit\\-data/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:93147)'
                    .')'
                    .'|(\\d+)/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93238)'
                    .'|(\\d+)/search/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93335)'
                    .'|(\\d+)/search\\-ids/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93437)'
                    .'|(\\d+)/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93527)'
                    .'|([^/]++)/(?'
                        .'|_info/(?'
                            .'|me(*:93560)'
                            .'|ping(*:93574)'
                        .')'
                        .'|user(?'
                            .'|/([^/]++)(?'
                                .'|(*:93604)'
                                .'|/access\\-keys/([^/]++)(*:93636)'
                                .'|(*:93646)'
                            .')'
                            .'|(*:93657)'
                        .')'
                    .')'
                .')'
                .'|/sales\\-channel\\-api/v(?'
                    .'|(\\d+)/category/([^/]++)(*:93718)'
                    .'|(\\d+)/search\\-ids/category(*:93754)'
                    .'|(\\d+)/category(*:93778)'
                    .'|(\\d+)/country/([^/]++)(*:93810)'
                    .'|(\\d+)/search\\-ids/country(*:93845)'
                    .'|(\\d+)/country(*:93868)'
                    .'|(\\d+)/country\\-state/([^/]++)(*:93907)'
                    .'|(\\d+)/search\\-ids/country\\-state(*:93949)'
                    .'|(\\d+)/country\\-state(*:93979)'
                    .'|(\\d+)/currency/([^/]++)(*:94012)'
                    .'|(\\d+)/search\\-ids/currency(*:94048)'
                    .'|(\\d+)/currency(*:94072)'
                    .'|(\\d+)/language/([^/]++)(*:94105)'
                    .'|(\\d+)/search\\-ids/language(*:94141)'
                    .'|(\\d+)/language(*:94165)'
                    .'|(\\d+)/main\\-category/([^/]++)(*:94204)'
                    .'|(\\d+)/search\\-ids/main\\-category(*:94246)'
                    .'|(\\d+)/main\\-category(*:94276)'
                    .'|(\\d+)/payment\\-method/([^/]++)(*:94316)'
                    .'|(\\d+)/search\\-ids/payment\\-method(*:94359)'
                    .'|(\\d+)/payment\\-method(*:94390)'
                    .'|(\\d+)/product/([^/]++)(*:94422)'
                    .'|(\\d+)/search\\-ids/product(*:94457)'
                    .'|(\\d+)/product(*:94480)'
                    .'|(\\d+)/salutation/([^/]++)(*:94515)'
                    .'|(\\d+)/search\\-ids/salutation(*:94553)'
                    .'|(\\d+)/salutation(*:94579)'
                    .'|(\\d+)/seo\\-url/([^/]++)(*:94612)'
                    .'|(\\d+)/search\\-ids/seo\\-url(*:94648)'
                    .'|(\\d+)/seo\\-url(*:94672)'
                    .'|(\\d+)/shipping\\-method/([^/]++)(*:94713)'
                    .'|(\\d+)/search\\-ids/shipping\\-method(*:94757)'
                    .'|(\\d+)/shipping\\-method(*:94789)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        66 => [[['_route' => 'api.action.access-key.integration', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateIntegrationKey'], ['version'], ['GET' => 0], null, false, false, null]],
        77 => [[['_route' => 'api.action.access-key.user', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateUserKey'], ['version'], ['GET' => 0], null, false, false, null]],
        98 => [[['_route' => 'api.action.access-key.sales-channel', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateSalesChannelKey'], ['version'], ['GET' => 0], null, false, false, null]],
        120 => [[['_route' => 'api.action.access-key.product-export', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateProductExportKey'], ['version'], ['GET' => 0], null, false, false, null]],
        142 => [[['_route' => 'api.composite.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::compositeSearch'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        197 => [[['_route' => 'api.clone', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::clone'], ['version', 'entity', 'id'], ['POST' => 0], null, false, true, null]],
        254 => [[['_route' => 'api.createVersion', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::createVersion'], ['version', 'entity', 'id'], ['POST' => 0], null, false, true, null]],
        317 => [[['_route' => 'api.mergeVersion', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::mergeVersion'], ['version', 'entity', 'versionId'], ['POST' => 0], null, false, true, null]],
        377 => [[['_route' => 'api.deleteVersion', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::deleteVersion'], ['version', 'versionId', 'entity', 'entityId'], ['POST' => 0], null, false, true, null]],
        430 => [[['_route' => 'api.action.cache.info', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::info'], ['version'], ['GET' => 0], null, false, false, null]],
        444 => [[['_route' => 'api.action.cache.delete_and_warmup', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearCacheAndScheduleWarmUp'], ['version'], ['DELETE' => 0], null, false, false, null]],
        453 => [[['_route' => 'api.action.cache.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearCache'], ['version'], ['DELETE' => 0], null, false, false, null]],
        472 => [[['_route' => 'api.action.captcha.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CaptchaController::list'], ['version'], ['GET' => 0], null, false, false, null]],
        487 => [[['_route' => 'api.action.cache.cleanup', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearOldCacheFolders'], ['version'], ['DELETE' => 0], null, false, false, null]],
        509 => [[['_route' => 'api.action.container-cache.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearContainerCache'], ['version'], ['DELETE' => 0], null, false, false, null]],
        526 => [[['_route' => 'api.action.cache.index', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::index'], ['version'], ['POST' => 0], null, false, false, null]],
        537 => [[['_route' => 'api.action.indexing', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IndexingController::indexing'], ['version'], ['POST' => 0], null, false, false, null]],
        553 => [[['_route' => 'api.action.sync', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SyncController::sync'], ['version'], ['POST' => 0], null, false, false, null]],
        581 => [[['_route' => 'api.custom.store.frw.start', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwStart'], ['version'], ['POST' => 0], null, false, false, null]],
        594 => [[['_route' => 'api.custom.store.frw.login', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwLogin'], ['version'], ['POST' => 0], null, false, false, null]],
        608 => [[['_route' => 'api.custom.store.frw.finish', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwFinish'], ['version'], ['POST' => 0], null, false, false, null]],
        637 => [[['_route' => 'api.custom.store.language-plugins', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getLanguagePluginList'], ['version'], ['GET' => 0], null, false, false, null]],
        666 => [[['_route' => 'api.custom.store.license-domains', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getDomainList'], ['version'], ['GET' => 0], null, false, false, null]],
        684 => [[['_route' => 'api.custom.store.license-violations', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::getLicenseViolations'], ['version'], ['POST' => 0], null, false, false, null]],
        694 => [[['_route' => 'api.custom.store.licenses', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::getLicenseList'], ['version'], ['GET' => 0], null, false, false, null]],
        710 => [[['_route' => 'api.custom.store.login', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::login'], ['version'], ['POST' => 0], null, false, false, null]],
        721 => [[['_route' => 'api.custom.store.logout', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::logout'], ['version'], ['POST' => 0], null, false, false, null]],
        753 => [[['_route' => 'api.custom.store.demo-data-plugins', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getDemoDataPluginList'], ['version'], ['GET' => 0], null, false, false, null]],
        768 => [[['_route' => 'api.custom.store.download', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::downloadPlugin'], ['version'], ['GET' => 0], null, false, false, null]],
        803 => [[['_route' => 'api.custom.store.recommendation-regions', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getRecommendationRegions'], ['version'], ['GET' => 0], null, false, false, null]],
        812 => [[['_route' => 'api.custom.store.recommendations', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getRecommendations'], ['version'], ['GET' => 0], null, false, false, null]],
        844 => [[['_route' => 'api.custom.store.verify-license-domain', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::verifyDomain'], ['version'], ['POST' => 0], null, false, false, null]],
        859 => [[['_route' => 'api.custom.store.ping', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::pingStoreAPI'], ['version'], ['GET' => 0], null, false, false, null]],
        879 => [[['_route' => 'api.action.store.plugin.search', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::searchPlugins'], ['version'], ['POST' => 0], null, false, false, null]],
        898 => [[['_route' => 'api.custom.store.checklogin', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::checkLogin'], ['version'], ['POST' => 0], null, false, false, null]],
        913 => [[['_route' => 'api.custom.store.updates', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::getUpdateList'], ['version'], ['GET' => 0], null, false, false, null]],
        943 => [[['_route' => 'api.action.scheduled-task.run', '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\ScheduledTask\\Api\\ScheduledTaskController::runScheduledTasks'], ['version'], ['POST' => 0], null, false, false, null]],
        969 => [[['_route' => 'api.action.scheduled-task.min-run-interval', '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\ScheduledTask\\Api\\ScheduledTaskController::getMinRunInterval'], ['version'], ['GET' => 0], null, false, false, null]],
        989 => [[['_route' => 'api.action.snippet-set.getList', '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getList'], ['version'], ['POST' => 0], null, false, false, null]],
        1020 => [[['_route' => 'api.action.plugin.upload', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::uploadPlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1033 => [[['_route' => 'api.action.plugin.update', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::updatePlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1051 => [[['_route' => 'api.action.plugin.uninstall', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::uninstallPlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1070 => [[['_route' => 'api.action.plugin.delete', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::deletePlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1087 => [[['_route' => 'api.action.plugin.deactivate', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::deactivatePlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1104 => [[['_route' => 'api.action.plugin.refresh', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::refreshPlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1120 => [[['_route' => 'api.action.plugin.install', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::installPlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1137 => [[['_route' => 'api.action.plugin.activate', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::activatePlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1168 => [[['_route' => 'api.custom.updateapi.check', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::updateApiCheck'], ['version'], ['GET' => 0], null, false, false, null]],
        1191 => [[['_route' => 'api.custom.update.check_requirements', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::checkRequirements'], ['version'], ['GET' => 0], null, false, false, null]],
        1222 => [[['_route' => 'api.custom.updateapi.plugin_compatibility', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::pluginCompatibility'], ['version'], ['GET' => 0], null, false, false, null]],
        1258 => [[['_route' => 'api.custom.updateapi.download_latest_update', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::downloadLatestUpdate'], ['version'], ['GET' => 0], null, false, false, null]],
        1285 => [[['_route' => 'api.custom.updateapi.deactivate-plugins', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::deactivatePlugins'], ['version'], ['GET' => 0], null, false, false, null]],
        1301 => [[['_route' => 'api.custom.updateapi.unpack', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::unpack'], ['version'], ['GET' => 0], null, false, false, null]],
        1325 => [[['_route' => 'api.custom.updateapi.finish', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::finish'], ['version', 'token'], ['GET' => 0], null, false, true, null]],
        1359 => [[['_route' => 'api.action.user.user-recovery', 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::createUserRecovery'], ['version'], ['POST' => 0], null, false, false, null]],
        1376 => [[['_route' => 'api.action.user.user-recovery.hash', 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::checkUserRecovery'], ['version'], ['GET' => 0], null, false, false, null]],
        1393 => [[['_route' => 'api.action.user.user-recovery.password', 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::updateUserPassword'], ['version'], ['PATCH' => 0], null, false, false, null]],
        1427 => [[['_route' => 'api.action.check-email-unique', '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserValidationController::isEmailUnique'], ['version'], ['POST' => 0], null, false, false, null]],
        1452 => [[['_route' => 'api.action.check-username-unique', '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserValidationController::isUsernameUnique'], ['version'], ['POST' => 0], null, false, false, null]],
        1486 => [[['_route' => 'api.action.message-queue.consume', '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\Api\\ConsumeMessagesController::consumeMessages'], ['version'], ['POST' => 0], null, false, false, null]],
        1522 => [[['_route' => 'api.action.database.sync-migration', '_controller' => 'Shopware\\Core\\Framework\\Migration\\Api\\MigrationController::syncMigrations'], ['version'], ['POST' => 0], null, false, false, null]],
        1541 => [[['_route' => 'api.action.database.migrate', '_controller' => 'Shopware\\Core\\Framework\\Migration\\Api\\MigrationController::migrate'], ['version'], ['POST' => 0], null, false, false, null]],
        1563 => [[['_route' => 'api.action.database.migrate-destructive', '_controller' => 'Shopware\\Core\\Framework\\Migration\\Api\\MigrationController::migrateDestructive'], ['version'], ['POST' => 0], null, false, false, null]],
        1600 => [[['_route' => 'api.info.openapi3', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::info'], ['version'], ['GET' => 0], null, false, false, null]],
        1628 => [[['_route' => 'api.info.open-api-schema', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::openApiSchema'], ['version'], ['GET' => 0], null, false, false, null]],
        1658 => [[['_route' => 'api.info.entity-schema', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::entitySchema'], ['version'], ['GET' => 0], null, false, false, null]],
        1680 => [[['_route' => 'api.info.swagger', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::infoHtml'], ['version'], ['GET' => 0], null, false, false, null]],
        1695 => [[['_route' => 'api.info.config', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::config'], ['version'], ['GET' => 0], null, false, false, null]],
        1726 => [[['_route' => 'api.info.events', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::events'], ['version'], ['GET' => 0], null, false, false, null]],
        1781 => [[['_route' => 'api.proxy.sales-channel', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::proxy'], ['version', 'salesChannelId', '_path'], null, null, false, true, null]],
        1813 => [[['_route' => 'api.proxy.store-api', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::proxy'], ['version', 'salesChannelId', '_path'], null, null, false, true, null]],
        1837 => [[['_route' => 'api.proxy.switch-customer', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::assignCustomer'], ['version'], ['PATCH' => 0], null, false, false, null]],
        1870 => [[['_route' => 'api.proxy.modify-shipping-costs', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::modifyShippingCosts'], ['version'], ['PATCH' => 0], null, false, false, null]],
        1909 => [[['_route' => 'api.proxy.disable-automatic-promotions', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::disableAutomaticPromotions'], ['version'], ['PATCH' => 0], null, false, false, null]],
        1947 => [[['_route' => 'api.proxy.enable-automatic-promotions', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::enableAutomaticPromotions'], ['version'], ['PATCH' => 0], null, false, false, null]],
        1993 => [[['_route' => 'api.action.snippet.get.filter', '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getFilterItems'], ['version'], ['GET' => 0], null, false, false, null]],
        2019 => [[['_route' => 'api.action.snippet-set.base-file', '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getBaseFiles'], ['version'], ['GET' => 0], null, false, false, null]],
        2034 => [[['_route' => 'api.action.snippet-set.author', '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getAuthors'], ['version'], ['GET' => 0], null, false, false, null]],
        2093 => [[['_route' => 'api.action.attribute-set.get-relations', '_controller' => 'Shopware\\Core\\System\\CustomField\\Api\\CustomFieldSetActionController::getAvailableRelations'], ['version'], ['GET' => 0], null, false, false, null]],
        2131 => [[['_route' => 'api.action.core.system-config.check', '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::checkConfiguration'], ['version'], ['GET' => 0], null, false, false, null]],
        2146 => [[['_route' => 'api.action.core.system-config', '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::getConfiguration'], ['version'], ['GET' => 0], null, false, false, null]],
        2160 => [[['_route' => 'api.action.core.save.system-config.batch', '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::batchSaveConfiguration'], ['version'], ['POST' => 0], null, false, false, null]],
        2170 => [
            [['_route' => 'api.action.core.system-config.value', '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::getConfigurationValues'], ['version'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api.action.core.save.system-config', '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::saveConfiguration'], ['version'], ['POST' => 0], null, false, false, null],
        ],
        2220 => [[['_route' => 'api.state_machine.states', '_controller' => 'Shopware\\Core\\System\\StateMachine\\Api\\StateMachineActionController::getAvailableTransitions'], ['version', 'entityName', 'entityId'], ['GET' => 0], null, false, false, null]],
        2238 => [[['_route' => 'api.state_machine.transition_state', '_controller' => 'Shopware\\Core\\System\\StateMachine\\Api\\StateMachineActionController::transitionState'], ['version', 'entityName', 'entityId', 'transition'], ['POST' => 0], null, false, true, null]],
        2296 => [[['_route' => 'api.action.number-range.reserve', 'saleschannel' => null, '_controller' => 'Shopware\\Core\\System\\NumberRange\\Api\\NumberRangeController::reserve'], ['version', 'type', 'saleschannel'], ['GET' => 0], null, false, true, null]],
        2335 => [[['_route' => 'api.action.number-range.preview-pattern', 'type' => 'default', '_controller' => 'Shopware\\Core\\System\\NumberRange\\Api\\NumberRangeController::previewPattern'], ['version', 'type'], ['GET' => 0], null, false, true, null]],
        2377 => [[['_route' => 'api.action.product.combinations', '_controller' => 'Shopware\\Core\\Content\\Product\\Api\\ProductActionController::getCombinations'], ['version', 'productId'], ['GET' => 0], null, false, false, null]],
        2406 => [[['_route' => 'api.action.product_export.validate', '_controller' => 'Shopware\\Core\\Content\\ProductExport\\Api\\ProductExportController::validate'], ['version'], ['POST' => 0], null, false, false, null]],
        2422 => [[['_route' => 'api.action.product_export.preview', '_controller' => 'Shopware\\Core\\Content\\ProductExport\\Api\\ProductExportController::preview'], ['version'], ['POST' => 0], null, false, false, null]],
        2470 => [[['_route' => 'api.action.media-folder.dissolve', '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaFolderController::dissolve'], ['version', 'folderId'], ['POST' => 0], null, false, false, null]],
        2501 => [[['_route' => 'api.action.media.upload', '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::upload'], ['version', 'mediaId'], ['POST' => 0], null, false, false, null]],
        2516 => [[['_route' => 'api.action.media.rename', '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::renameMediaFile'], ['version', 'mediaId'], ['POST' => 0], null, false, false, null]],
        2539 => [[['_route' => 'api.action.media.provide-name', '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::provideName'], ['version'], ['GET' => 0], null, false, false, null]],
        2571 => [[['_route' => 'api.action.mail_template.send', '_controller' => 'Shopware\\Core\\Content\\MailTemplate\\Api\\MailActionController::send'], ['version'], ['POST' => 0], null, false, false, null]],
        2588 => [[['_route' => 'api.action.mail_template.validate', '_controller' => 'Shopware\\Core\\Content\\MailTemplate\\Api\\MailActionController::validate'], ['version'], ['POST' => 0], null, false, false, null]],
        2628 => [[['_route' => 'api.action.import_export.features', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::features'], ['version'], ['GET' => 0], null, false, false, null]],
        2649 => [[['_route' => 'api.action.import_export.file.download', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::download'], ['version'], ['GET' => 0], null, false, false, null]],
        2669 => [[['_route' => 'api.action.import_export.initiate', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::initiate'], ['version'], ['POST' => 0], null, false, false, null]],
        2683 => [[['_route' => 'api.action.import_export.process', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::process'], ['version'], ['POST' => 0], null, false, false, null]],
        2699 => [[['_route' => 'api.action.import_export.cancel', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::cancel'], ['version'], ['POST' => 0], null, false, false, null]],
        2751 => [[['_route' => 'api.seo-url-template.validate', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::validate'], ['version'], ['POST' => 0], null, false, false, null]],
        2800 => [[['_route' => 'api.seo-url-template.preview', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::preview'], ['version'], ['POST' => 0], null, false, false, null]],
        2849 => [[['_route' => 'api.seo-url-template.context', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::getSeoUrlContext'], ['version'], ['POST' => 0], null, false, false, null]],
        2890 => [[['_route' => 'api.seo-url.canonical', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::updateCanonicalUrl'], ['version'], ['PATCH' => 0], null, false, false, null]],
        2948 => [[['_route' => 'api.seo-url-template.default', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::getDefaultSeoTemplate'], ['version', 'routeName'], ['GET' => 0], null, false, true, null]],
        3024 => [[['_route' => 'api.action.order.convert-to-cart', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderConverterController::convertToCart'], ['version', 'orderId'], ['POST' => 0], null, true, false, null]],
        3042 => [[['_route' => 'api.action.order.add-credit-item', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addCreditItemToOrder'], ['version', 'orderId'], ['POST' => 0], null, false, false, null]],
        3063 => [[['_route' => 'api.action.order.recalculate', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::recalculateOrder'], ['version', 'orderId'], ['POST' => 0], null, false, false, null]],
        3088 => [[['_route' => 'api.action.order.add-product', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addProductToOrder'], ['version', 'orderId', 'productId'], ['POST' => 0], null, false, true, null]],
        3105 => [[['_route' => 'api.action.order.add-line-item', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addCustomLineItemToOrder'], ['version', 'orderId'], ['POST' => 0], null, false, false, null]],
        3148 => [[['_route' => 'api.action.document.preview', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Checkout\\Document\\Controller\\DocumentController::previewDocument'], ['version', 'orderId', 'deepLinkCode', 'documentTypeName'], ['GET' => 0], null, false, false, null]],
        3174 => [[['_route' => 'api.action.document.invoice', '_controller' => 'Shopware\\Core\\Checkout\\Document\\DocumentGeneratorController::createDocument'], ['version', 'orderId', 'documentTypeName'], ['POST' => 0], null, false, true, null]],
        3197 => [[['_route' => 'api.action.order.state_machine.order.transition_state', '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderStateTransition'], ['version', 'orderId', 'transition'], ['POST' => 0], null, false, true, null]],
        3252 => [[['_route' => 'api.action.order.replace-order-address', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::replaceOrderAddressWithCustomerAddress'], ['version', 'orderAddressId', 'customerAddressId'], ['POST' => 0], null, false, true, null]],
        3300 => [[['_route' => 'api.action.order.state_machine.order_transaction.transition_state', '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderTransactionStateTransition'], ['version', 'orderTransactionId', 'transition'], ['POST' => 0], null, false, true, null]],
        3341 => [[['_route' => 'api.action.order.state_machine.order_delivery.transition_state', '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderDeliveryStateTransition'], ['version', 'orderDeliveryId', 'transition'], ['POST' => 0], null, false, true, null]],
        3368 => [[['_route' => 'api.action.calculate-price', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\PriceActionController::calculate'], ['version'], ['POST' => 0], null, false, false, null]],
        3406 => [[['_route' => 'api.action.download.document', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Checkout\\Document\\Controller\\DocumentController::downloadDocument'], ['version', 'documentId', 'deepLinkCode'], ['GET' => 0], null, false, true, null]],
        3421 => [[['_route' => 'api.action.document.upload', '_controller' => 'Shopware\\Core\\Checkout\\Document\\DocumentGeneratorController::uploadToDocument'], ['version', 'documentId'], ['POST' => 0], null, false, false, null]],
        3475 => [
            [['_route' => 'api.action.promotion.codes', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getIndividualCodes'], ['version', 'promotionId'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api.action.promotion.codes.remove', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::deleteIndividualCodes'], ['version', 'promotionId'], ['DELETE' => 0], null, false, false, null],
        ],
        3505 => [[['_route' => 'api.action.promotion.setgroup.packager', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getSetGroupPackagers'], ['version'], ['GET' => 0], null, false, false, null]],
        3520 => [[['_route' => 'api.action.promotion.setgroup.sorter', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getSetGroupSorters'], ['version'], ['GET' => 0], null, false, false, null]],
        3558 => [[['_route' => 'api.action.payone.refund_payment', '_controller' => 'PayonePayment\\Controller\\RefundController::refundAction'], ['version'], ['POST' => 0], null, false, false, null]],
        3583 => [[['_route' => 'api.action.payone.capture_payment', '_controller' => 'PayonePayment\\Controller\\CaptureController::captureAction'], ['version'], ['POST' => 0], null, false, false, null]],
        3631 => [[['_route' => 'api.action.payone_payment.validate.api.credentials', '_controller' => 'PayonePayment\\Controller\\SettingsController::validateApiCredentials'], ['version'], ['POST' => 0], null, false, false, null]],
        3680 => [[['_route' => 'api.action.payone_payment.get.state_machine_transition.actions', '_controller' => 'PayonePayment\\Controller\\SettingsController::getStateMachineTransitionActions'], ['version'], ['GET' => 0], null, false, false, null]],
        3726 => [[['_route' => 'api.action.theme.configuration', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::configuration'], ['version', 'themeId'], ['GET' => 0], null, false, false, null]],
        3750 => [[['_route' => 'api.action.theme.assign', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::assignTheme'], ['version', 'themeId', 'salesChannelId'], ['POST' => 0], null, false, true, null]],
        3764 => [[['_route' => 'api.action.theme.reset', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::resetTheme'], ['version', 'themeId'], ['PATCH' => 0], null, false, false, null]],
        3779 => [[['_route' => 'api.action.theme.fields', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::fields'], ['version', 'themeId'], ['GET' => 0], null, false, false, null]],
        3806 => [[['_route' => 'api.action.theme.structuredFields', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::structuredFields'], ['version', 'themeId'], ['GET' => 0], null, false, false, null]],
        3816 => [[['_route' => 'api.action.theme.update', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::updateTheme'], ['version', 'themeId'], ['PATCH' => 0], null, false, true, null]],
        3865 => [[['_route' => 'api.admin.migration.download-logs-of-run', 'auth_required' => false, '_controller' => 'SwagMigrationAssistant\\Controller\\HistoryController::downloadLogsOfRun'], ['version'], ['POST' => 0], null, false, false, null]],
        3888 => [[['_route' => 'api.admin.migration.data-selection', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::getDataSelection'], ['version'], ['GET' => 0], null, false, false, null]],
        3912 => [[['_route' => 'api.admin.migration.fetch-data', '_controller' => 'SwagMigrationAssistant\\Controller\\MigrationController::fetchData'], ['version'], ['POST' => 0], null, false, false, null]],
        3937 => [[['_route' => 'api.admin.migration.finish-migration', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::finishMigration'], ['version'], ['POST' => 0], null, false, false, null]],
        3973 => [[['_route' => 'api.admin.migration.update-write-progress', '_controller' => 'SwagMigrationAssistant\\Controller\\MigrationController::updateWriteProgress'], ['version'], ['POST' => 0], null, false, false, null]],
        4004 => [[['_route' => 'api.admin.migration.update-media-files-progress', '_controller' => 'SwagMigrationAssistant\\Controller\\MigrationController::updateMediaFilesProgress'], ['version'], ['POST' => 0], null, false, false, null]],
        4036 => [[['_route' => 'api.admin.migration.update-connection-credentials', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::updateConnectionCredentials'], ['version'], ['POST' => 0], null, false, false, null]],
        4060 => [[['_route' => 'api.admin.migration.write-data', '_controller' => 'SwagMigrationAssistant\\Controller\\MigrationController::writeData'], ['version'], ['POST' => 0], null, false, false, null]],
        4079 => [[['_route' => 'api.admin.migration.write-premapping', '_controller' => 'SwagMigrationAssistant\\Controller\\PremappingController::writePremapping'], ['version'], ['POST' => 0], null, false, false, null]],
        4103 => [[['_route' => 'api.admin.migration.process-media', '_controller' => 'SwagMigrationAssistant\\Controller\\MigrationController::processMedia'], ['version'], ['POST' => 0], null, false, false, null]],
        4120 => [[['_route' => 'api.action.migration.indexing', '_controller' => 'SwagMigrationAssistant\\Controller\\MigrationController::indexing'], ['version'], ['POST' => 0], null, false, false, null]],
        4152 => [[['_route' => 'api.admin.migration.generate-premapping', '_controller' => 'SwagMigrationAssistant\\Controller\\PremappingController::generatePremapping'], ['version'], ['POST' => 0], null, false, false, null]],
        4190 => [[['_route' => 'api.admin.migration.get-profile-information', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::getProfileInformation'], ['version'], ['GET' => 0], null, false, false, null]],
        4200 => [[['_route' => 'api.admin.migration.get-profiles', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::getProfiles'], ['version'], ['GET' => 0], null, false, false, null]],
        4218 => [[['_route' => 'api.admin.migration.get-gateways', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::getGateways'], ['version'], ['GET' => 0], null, false, false, null]],
        4232 => [[['_route' => 'api.admin.migration.get-state', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::getState'], ['version'], ['POST' => 0], null, false, false, null]],
        4254 => [[['_route' => 'api.admin.migration.get-reset-status', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::getResetStatus'], ['version'], ['GET' => 0], null, false, false, null]],
        4285 => [[['_route' => 'api.admin.migration.check-connection', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::checkConnection'], ['version'], ['POST' => 0], null, false, false, null]],
        4310 => [[['_route' => 'api.admin.migration.create-migration', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::createMigration'], ['version'], ['POST' => 0], null, false, false, null]],
        4342 => [[['_route' => 'api.admin.migration.cleanup-migration-data', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::cleanupMigrationData'], ['version'], ['POST' => 0], null, false, false, null]],
        4371 => [[['_route' => 'api.admin.migration.takeover-migration', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::takeoverMigration'], ['version'], ['POST' => 0], null, false, false, null]],
        4399 => [[['_route' => 'api.admin.migration.abort-migration', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::abortMigration'], ['version'], ['POST' => 0], null, false, false, null]],
        4421 => [[['_route' => 'api.admin.migration.assign-themes', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::assignThemes'], ['version'], ['POST' => 0], null, false, false, null]],
        4447 => [[['_route' => 'api.admin.migration.reset-checksums', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::resetChecksums'], ['version'], ['POST' => 0], null, false, false, null]],
        4471 => [[['_route' => 'api.admin.snippets', '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::snippets'], ['version'], ['GET' => 0], null, false, false, null]],
        4518 => [[['_route' => 'api.admin.migration.get-grouped-logs-of-run', '_controller' => 'SwagMigrationAssistant\\Controller\\HistoryController::getGroupedLogsOfRun'], ['version'], ['GET' => 0], null, false, false, null]],
        4612 => [
            [['_route' => 'api.acl_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-role'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.acl_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'acl-role'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'acl-role'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        4690 => [[['_route' => 'api.acl_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-role'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        4774 => [[['_route' => 'api.acl_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        4863 => [[['_route' => 'api.acl_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        4940 => [[['_route' => 'api.acl_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'acl-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5039 => [
            [['_route' => 'api.acl_user_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-user-role'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'acl-user-role'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'acl-user-role'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        5123 => [[['_route' => 'api.acl_user_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-user-role'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        5213 => [[['_route' => 'api.acl_user_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-user-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5308 => [[['_route' => 'api.acl_user_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-user-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5391 => [[['_route' => 'api.acl_user_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'acl-user-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5483 => [
            [['_route' => 'api.category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        5560 => [[['_route' => 'api.category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        5643 => [[['_route' => 'api.category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5731 => [[['_route' => 'api.category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5807 => [[['_route' => 'api.category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5904 => [
            [['_route' => 'api.category_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        5986 => [[['_route' => 'api.category_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        6074 => [[['_route' => 'api.category_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6167 => [[['_route' => 'api.category_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6248 => [[['_route' => 'api.category_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6353 => [
            [['_route' => 'api.category_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        6443 => [[['_route' => 'api.category_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        6539 => [[['_route' => 'api.category_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6640 => [[['_route' => 'api.category_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6729 => [[['_route' => 'api.category_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6823 => [
            [['_route' => 'api.cms_block.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-block'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-block'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-block'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        6902 => [[['_route' => 'api.cms_block.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-block'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        6987 => [[['_route' => 'api.cms_block.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-block'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7077 => [[['_route' => 'api.cms_block.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-block'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7155 => [[['_route' => 'api.cms_block.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-block'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7248 => [
            [['_route' => 'api.cms_page.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        7326 => [[['_route' => 'api.cms_page.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        7410 => [[['_route' => 'api.cms_page.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7499 => [[['_route' => 'api.cms_page.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7576 => [[['_route' => 'api.cms_page.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7682 => [
            [['_route' => 'api.cms_page_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        7773 => [[['_route' => 'api.cms_page_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        7870 => [[['_route' => 'api.cms_page_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7972 => [[['_route' => 'api.cms_page_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8062 => [[['_route' => 'api.cms_page_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8158 => [
            [['_route' => 'api.cms_section.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-section'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-section'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-section'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        8239 => [[['_route' => 'api.cms_section.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-section'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        8326 => [[['_route' => 'api.cms_section.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-section'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8418 => [[['_route' => 'api.cms_section.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-section'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8498 => [[['_route' => 'api.cms_section.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-section'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8591 => [
            [['_route' => 'api.cms_slot.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        8669 => [[['_route' => 'api.cms_slot.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        8753 => [[['_route' => 'api.cms_slot.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8842 => [[['_route' => 'api.cms_slot.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8919 => [[['_route' => 'api.cms_slot.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9025 => [
            [['_route' => 'api.cms_slot_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        9116 => [[['_route' => 'api.cms_slot_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        9213 => [[['_route' => 'api.cms_slot_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9315 => [[['_route' => 'api.cms_slot_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9405 => [[['_route' => 'api.cms_slot_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9496 => [
            [['_route' => 'api.country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        9572 => [[['_route' => 'api.country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        9654 => [[['_route' => 'api.country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9741 => [[['_route' => 'api.country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9816 => [[['_route' => 'api.country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9914 => [
            [['_route' => 'api.country_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        9997 => [[['_route' => 'api.country_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        10086 => [[['_route' => 'api.country_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10181 => [[['_route' => 'api.country_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10264 => [[['_route' => 'api.country_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10376 => [
            [['_route' => 'api.country_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        10473 => [[['_route' => 'api.country_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        10576 => [[['_route' => 'api.country_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10684 => [[['_route' => 'api.country_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10780 => [[['_route' => 'api.country_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10885 => [
            [['_route' => 'api.country_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        10975 => [[['_route' => 'api.country_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        11071 => [[['_route' => 'api.country_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11172 => [[['_route' => 'api.country_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11261 => [[['_route' => 'api.country_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11354 => [
            [['_route' => 'api.currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        11432 => [[['_route' => 'api.currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        11516 => [[['_route' => 'api.currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11605 => [[['_route' => 'api.currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11682 => [[['_route' => 'api.currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11788 => [
            [['_route' => 'api.currency_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        11879 => [[['_route' => 'api.currency_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        11976 => [[['_route' => 'api.currency_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        12078 => [[['_route' => 'api.currency_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        12168 => [[['_route' => 'api.currency_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        12266 => [
            [['_route' => 'api.custom_field.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        12349 => [[['_route' => 'api.custom_field.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        12388 => [[['_route' => 'frontend.account.order.single.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderSingleOverview'], ['deepLinkCode'], ['GET' => 0], null, false, true, null]],
        12404 => [[['_route' => 'frontend.account.order.cancel', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::cancelOrder'], [], ['POST' => 0], null, false, false, null]],
        12427 => [[['_route' => 'frontend.account.edit-order.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::editOrder'], ['orderId'], ['GET' => 0], null, false, true, null]],
        12453 => [[['_route' => 'frontend.account.edit-order.change-payment-method', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderChangePayment'], ['orderId'], ['POST' => 0], null, false, true, null]],
        12478 => [[['_route' => 'frontend.account.edit-order.update-order', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::updateOrder'], ['orderId'], ['POST' => 0], null, false, true, null]],
        12508 => [[['_route' => 'frontend.account.address.edit.page', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountEditAddress'], ['addressId'], ['GET' => 0], null, false, true, null]],
        12547 => [[['_route' => 'frontend.account.address.set-default-address', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::switchDefaultAddress'], ['type', 'addressId'], ['POST' => 0], null, false, true, null]],
        12570 => [[['_route' => 'frontend.account.address.delete', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::deleteAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        12587 => [[['_route' => 'frontend.account.address.create', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], [], ['POST' => 0], null, false, false, null]],
        12605 => [[['_route' => 'frontend.account.address.edit.save', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        12649 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        12671 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        12719 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        12735 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        12757 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        12772 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        12784 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        12859 => [[['_route' => 'sales-channel-api.info.openapi3', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelApiSchemaController::info'], ['version'], ['GET' => 0], null, false, false, null]],
        12888 => [[['_route' => 'sales-channel-api.info.open-api-schema', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelApiSchemaController::openApiSchema'], ['version'], ['GET' => 0], null, false, false, null]],
        12912 => [[['_route' => 'sales-channel-api.info.swagger', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelApiSchemaController::infoHtml'], ['version'], ['GET' => 0], null, false, false, null]],
        12936 => [
            [['_route' => 'sales-channel-api.context.update', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelContextController::update'], ['version'], ['PATCH' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.context.get', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelContextController::getContext'], ['version'], ['GET' => 0], null, false, false, null],
        ],
        12964 => [[['_route' => 'sales-channel-api.cms.page', '_controller' => 'Shopware\\Core\\Content\\Cms\\SalesChannel\\SalesChannelCmsPageController::getPage'], ['version', 'pageId'], ['GET' => 0], null, false, true, null]],
        12992 => [
            [['_route' => 'sales-channel-api.checkout.cart.detail', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::getCart'], ['version'], ['GET' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.checkout.cart.create', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::createCart'], ['version'], ['POST' => 0], null, false, false, null],
        ],
        13022 => [[['_route' => 'sales-channel-api.checkout.frontend.cart.product.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::addProduct'], ['version', 'id'], ['POST' => 0], null, false, true, null]],
        13045 => [[['_route' => 'sales-channel-api.checkout.frontend.cart.code.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::addCode'], ['version', 'code'], ['POST' => 0], null, false, true, null]],
        13080 => [
            [['_route' => 'sales-channel-api.checkout.cart.line-item.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::addLineItem'], ['version', 'id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'sales-channel-api.checkout.cart.line-item.delete', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::removeLineItem'], ['version', 'id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sales-channel-api.checkout.cart.line-item.update', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::updateLineItem'], ['version', 'id'], ['PATCH' => 0], null, false, true, null],
        ],
        13099 => [[['_route' => 'sales-channel-api.checkout.cart.line-items.delete', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::removeLineItems'], ['version'], ['POST' => 0], null, false, false, null]],
        13111 => [[['_route' => 'sales-channel-api.checkout.cart.cancel', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::cancelCart'], ['version'], ['DELETE' => 0], null, false, false, null]],
        13130 => [[['_route' => 'sales-channel-api.checkout.order.create', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::createOrder'], ['version'], ['POST' => 0], null, false, false, null]],
        13153 => [[['_route' => 'sales-channel-api.checkout.order.pay', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::payOrder'], ['version', 'orderId'], ['POST' => 0], null, false, false, null]],
        13179 => [[['_route' => 'sales-channel-api.checkout.guest-order.create', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::createGuestOrder'], ['version'], ['POST' => 0], null, false, false, null]],
        13198 => [[['_route' => 'sales-channel-api.checkout.guest-order.detail', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::getDeepLinkOrder'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        13232 => [[['_route' => 'sales-channel-api.customer.login', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::login'], ['version'], ['POST' => 0], null, false, false, null]],
        13245 => [[['_route' => 'sales-channel-api.customer.logout', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::logout'], ['version'], ['POST' => 0], null, false, false, null]],
        13261 => [[['_route' => 'sales-channel-api.customer.order.list', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::orderList'], ['version'], ['GET' => 0], null, false, false, null]],
        13276 => [[['_route' => 'sales-channel-api.customer.email.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::saveEmail'], ['version'], ['PATCH' => 0], null, false, false, null]],
        13294 => [[['_route' => 'sales-channel-api.customer.password.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::savePassword'], ['version'], ['PATCH' => 0], null, false, false, null]],
        13314 => [[['_route' => 'sales-channel-api.customer.address.list', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::getAddresses'], ['version'], ['GET' => 0], null, false, false, null]],
        13336 => [
            [['_route' => 'sales-channel-api.customer.address.detail', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::getAddress'], ['version', 'id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sales-channel-api.customer.address.delete', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::deleteAddress'], ['version', 'id'], ['DELETE' => 0], null, false, true, null],
        ],
        13367 => [[['_route' => 'sales-channel-api.customer.address.set-default-shipping-address', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::setDefaultShippingAddress'], ['version', 'id'], ['PATCH' => 0], null, false, false, null]],
        13384 => [[['_route' => 'sales-channel-api.customer.address.set-default-billing-address', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::setDefaultBillingAddress'], ['version', 'id'], ['PATCH' => 0], null, false, false, null]],
        13396 => [[['_route' => 'sales-channel-api.customer.address.create', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::upsertAddress'], ['version'], ['POST' => 0, 'PATCH' => 1], null, false, false, null]],
        13408 => [
            [['_route' => 'sales-channel-api.customer.create', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::register'], ['version'], ['POST' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.customer.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::saveProfile'], ['version'], ['PATCH' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.customer.detail', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::getCustomerDetail'], ['version'], ['GET' => 0], null, false, false, null],
        ],
        13451 => [[['_route' => 'sales-channel-api.product.cross-selling', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\CrossSelling\\SalesChannelCrossSellingController::getCrossSelling'], ['version', 'id'], ['GET' => 0], null, false, false, null]],
        13484 => [[['_route' => 'sales-channel-api.newsletter.subscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\SalesChannelNewsletterController::subscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        13501 => [[['_route' => 'sales-channel-api.newsletter.confirm', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\SalesChannelNewsletterController::confirm'], ['version'], ['POST' => 0], null, false, false, null]],
        13522 => [[['_route' => 'sales-channel-api.newsletter.unsubscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\SalesChannelNewsletterController::unsubscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        13583 => [[['_route' => 'store-api.info.openapi3', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::info'], ['version'], ['GET' => 0], null, false, false, null]],
        13612 => [[['_route' => 'store-api.info.open-api-schema', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::openApiSchema'], ['version'], ['GET' => 0], null, false, false, null]],
        13636 => [[['_route' => 'store-api.info.swagger', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::infoHtml'], ['version'], ['GET' => 0], null, false, false, null]],
        13666 => [
            [['_route' => 'store-api.context', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\ContextRoute::load'], ['version'], ['GET' => 0], null, false, false, null],
            [['_route' => 'store-api.switch-context', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\ContextSwitchRoute::switchContext'], ['version'], ['PATCH' => 0], null, false, false, null],
        ],
        13686 => [[['_route' => 'store-api.contact.form', '_controller' => 'Shopware\\Core\\Content\\ContactForm\\SalesChannel\\ContactFormRoute::load'], ['version'], ['POST' => 0], null, false, false, null]],
        13702 => [[['_route' => 'store-api.country', '_controller' => 'Shopware\\Core\\System\\Country\\SalesChannel\\CountryRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13720 => [[['_route' => 'store-api.currency', '_controller' => 'Shopware\\Core\\System\\Currency\\SalesChannel\\CurrencyRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13746 => [[['_route' => 'store-api.category.detail', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\CategoryRoute::load'], ['version', 'navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        13767 => [[['_route' => 'store-api.cms.detail', '_controller' => 'Shopware\\Core\\Content\\Cms\\SalesChannel\\CmsRoute::load'], ['version', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        13795 => [[['_route' => 'store-api.checkout.cart.delete', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartDeleteRoute::delete'], ['version'], ['DELETE' => 0], null, false, false, null]],
        13819 => [
            [['_route' => 'store-api.checkout.cart.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemAddRoute::add'], ['version'], ['POST' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.remove-item', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemRemoveRoute::remove'], ['version'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.update-lineitem', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemUpdateRoute::change'], ['version'], ['PATCH' => 0], null, false, false, null],
        ],
        13830 => [[['_route' => 'store-api.checkout.cart.read', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartLoadRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13846 => [[['_route' => 'store-api.checkout.cart.order', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartOrderRoute::order'], ['version'], ['POST' => 0], null, false, false, null]],
        13866 => [[['_route' => 'store-api.language', '_controller' => 'Shopware\\Core\\System\\Language\\SalesChannel\\LanguageRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13889 => [[['_route' => 'store-api.salutation', '_controller' => 'Shopware\\Core\\System\\Salutation\\SalesChannel\\SalutationRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13910 => [[['_route' => 'store-api.search', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Search\\ProductSearchRoute::load'], ['version'], ['POST' => 0], null, false, false, null]],
        13929 => [[['_route' => 'store-api.search.suggest', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Suggest\\ProductSuggestRoute::load'], ['version'], ['POST' => 0], null, false, false, null]],
        13946 => [[['_route' => 'store-api.seo.url', '_controller' => 'Shopware\\Core\\Content\\Seo\\SalesChannel\\SeoUrlRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13972 => [[['_route' => 'store-api.shipping.method', '_controller' => 'Shopware\\Core\\Checkout\\Shipping\\SalesChannel\\ShippingMethodRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14014 => [[['_route' => 'store-api.navigation', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\NavigationRoute::load'], ['version', 'requestActiveId', 'requestRootId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        14044 => [[['_route' => 'store-api.newsletter.confirm', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterConfirmRoute::confirm'], ['version'], ['POST' => 0], null, false, false, null]],
        14063 => [[['_route' => 'store-api.newsletter.subscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::subscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        14084 => [[['_route' => 'store-api.newsletter.unsubscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterUnsubscribeRoute::unsubscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        14124 => [[['_route' => 'store-api.product.listing', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Listing\\ProductListingRoute::load'], ['version', 'categoryId'], ['POST' => 0], null, false, true, null]],
        14148 => [[['_route' => 'store-api.payment.method', '_controller' => 'Shopware\\Core\\Checkout\\Payment\\SalesChannel\\PaymentMethodRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14174 => [[['_route' => 'store-api.payment.handle', '_controller' => 'Shopware\\Core\\Checkout\\Payment\\SalesChannel\\HandlePaymentMethodRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14219 => [[['_route' => 'store-api.account.change-profile', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeCustomerProfileRoute::change'], ['version'], ['POST' => 0], null, false, false, null]],
        14239 => [[['_route' => 'store-api.account.change-password', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePasswordRoute::change'], ['version'], ['POST' => 0], null, false, false, null]],
        14271 => [[['_route' => 'store-api.account.set.payment-method', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePaymentMethodRoute::change'], ['version', 'paymentMethodId'], ['POST' => 0], null, false, true, null]],
        14288 => [[['_route' => 'store-api.account.change-email', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeEmailRoute::change'], ['version'], ['POST' => 0], null, false, false, null]],
        14306 => [[['_route' => 'store-api.account.customer', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerRoute::load'], ['version'], ['GET' => 0], null, false, false, null]],
        14325 => [[['_route' => 'store-api.account.login', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LoginRoute::login'], ['version'], ['POST' => 0], null, false, false, null]],
        14338 => [[['_route' => 'store-api.account.logout', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LogoutRoute::logout'], ['version'], ['POST' => 0], null, false, false, null]],
        14372 => [[['_route' => 'store-api.account.register.confirm', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RegisterConfirmRoute::confirm'], ['version'], ['POST' => 0], null, false, false, null]],
        14382 => [[['_route' => 'store-api.account.register', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RegisterRoute::register'], ['version'], ['POST' => 0], null, false, false, null]],
        14421 => [[['_route' => 'store-api.account.recovery.password', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ResetPasswordRoute::resetPassword'], ['version'], ['POST' => 0], null, false, false, null]],
        14431 => [[['_route' => 'store-api.account.recovery.send.mail', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SendPasswordRecoveryMailRoute::sendRecoveryMail'], ['version'], ['POST' => 0], null, false, false, null]],
        14468 => [[['_route' => 'store-api.order.state.cancel', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\CancelOrderRoute::cancel'], ['version'], ['POST' => 0], null, false, false, null]],
        14485 => [[['_route' => 'store-api.order.set-payment', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\SetPaymentOrderRoute::setPayment'], ['version'], ['POST' => 0], null, false, false, null]],
        14496 => [[['_route' => 'store-api.order', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\OrderRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14550 => [[['_route' => 'widgets.account.order.detail', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::ajaxOrderDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        14580 => [[['_route' => 'frontend.cms.page', 'id' => null, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::page'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        14618 => [[['_route' => 'frontend.cms.navigation.page', 'navigationId' => null, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::category'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        14644 => [[['_route' => 'frontend.cms.navigation.filter', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::filter'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14696 => [[['_route' => 'frontend.checkout.line-item.delete', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::deleteLineItem'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        14731 => [[['_route' => 'frontend.checkout.line-item.change-quantity', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::changeQuantity'], ['id'], ['POST' => 0], null, false, true, null]],
        14774 => [[['_route' => 'frontend.maintenance.singlepage', '_controller' => 'Shopware\\Storefront\\Controller\\MaintenanceController::renderSinglePage'], ['id'], ['GET' => 0], null, false, true, null]],
        14804 => [[['_route' => 'frontend.navigation.page', '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::index'], ['navigationId'], ['GET' => 0], null, false, true, null]],
        14833 => [[['_route' => 'frontend.detail.page', '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::index'], ['productId'], ['GET' => 0], null, false, true, null]],
        14850 => [[['_route' => 'frontend.detail.switch', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::switch'], ['productId'], ['GET' => 0], null, false, false, null]],
        14880 => [[['_route' => 'widgets.quickview.minimal', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::quickviewMinimal'], ['productId'], ['GET' => 0], null, false, true, null]],
        14917 => [[['_route' => 'frontend.detail.review.save', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::saveReview'], ['productId'], ['POST' => 0], null, false, false, null]],
        14933 => [[['_route' => 'frontend.product.reviews', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::loadReviews'], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14969 => [[['_route' => 'frontend.export', '_controller' => 'Shopware\\Storefront\\Controller\\ProductExportController::index'], ['accessKey', 'fileName'], ['GET' => 0], null, false, true, null]],
        15064 => [[['_route' => 'api.custom_field.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15158 => [[['_route' => 'api.custom_field.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15240 => [[['_route' => 'api.custom_field.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15343 => [
            [['_route' => 'api.custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        15431 => [[['_route' => 'api.custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        15525 => [[['_route' => 'api.custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15624 => [[['_route' => 'api.custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15711 => [[['_route' => 'api.custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15824 => [
            [['_route' => 'api.custom_field_set_relation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        15922 => [[['_route' => 'api.custom_field_set_relation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        16026 => [[['_route' => 'api.custom_field_set_relation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16135 => [[['_route' => 'api.custom_field_set_relation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16232 => [[['_route' => 'api.custom_field_set_relation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16325 => [
            [['_route' => 'api.customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        16403 => [[['_route' => 'api.customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        16487 => [[['_route' => 'api.customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16576 => [[['_route' => 'api.customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16653 => [[['_route' => 'api.customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16755 => [
            [['_route' => 'api.customer_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-address'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-address'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-address'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        16842 => [[['_route' => 'api.customer_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-address'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        16935 => [[['_route' => 'api.customer_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17033 => [[['_route' => 'api.customer_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17119 => [[['_route' => 'api.customer_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17219 => [
            [['_route' => 'api.customer_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        17304 => [[['_route' => 'api.customer_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        17395 => [[['_route' => 'api.customer_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17491 => [[['_route' => 'api.customer_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17575 => [[['_route' => 'api.customer_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17688 => [
            [['_route' => 'api.customer_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        17786 => [[['_route' => 'api.customer_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        17890 => [[['_route' => 'api.customer_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17999 => [[['_route' => 'api.customer_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18096 => [[['_route' => 'api.customer_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18199 => [
            [['_route' => 'api.customer_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-recovery'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-recovery'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        18287 => [[['_route' => 'api.customer_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        18381 => [[['_route' => 'api.customer_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18480 => [[['_route' => 'api.customer_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18567 => [[['_route' => 'api.customer_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18665 => [
            [['_route' => 'api.customer_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        18748 => [[['_route' => 'api.customer_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        18837 => [[['_route' => 'api.customer_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18931 => [[['_route' => 'api.customer_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19013 => [[['_route' => 'api.customer_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19111 => [
            [['_route' => 'api.dead_message.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'dead-message'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.dead_message.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'dead-message'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.dead_message.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'dead-message'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        19194 => [[['_route' => 'api.dead_message.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'dead-message'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        19283 => [[['_route' => 'api.dead_message.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'dead-message'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19377 => [[['_route' => 'api.dead_message.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'dead-message'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19459 => [[['_route' => 'api.dead_message.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'dead-message'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19558 => [
            [['_route' => 'api.delivery_time.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        19642 => [[['_route' => 'api.delivery_time.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        19732 => [[['_route' => 'api.delivery_time.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19827 => [[['_route' => 'api.delivery_time.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19910 => [[['_route' => 'api.delivery_time.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20022 => [
            [['_route' => 'api.delivery_time_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        20119 => [[['_route' => 'api.delivery_time_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        20222 => [[['_route' => 'api.delivery_time_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20330 => [[['_route' => 'api.delivery_time_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20426 => [[['_route' => 'api.delivery_time_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20519 => [
            [['_route' => 'api.document.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        20597 => [[['_route' => 'api.document.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        20681 => [[['_route' => 'api.document.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20770 => [[['_route' => 'api.document.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20847 => [[['_route' => 'api.document.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20954 => [
            [['_route' => 'api.document_base_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        21046 => [[['_route' => 'api.document_base_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        21144 => [[['_route' => 'api.document_base_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21247 => [[['_route' => 'api.document_base_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21338 => [[['_route' => 'api.document_base_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21461 => [
            [['_route' => 'api.document_base_config_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        21569 => [[['_route' => 'api.document_base_config_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        21683 => [[['_route' => 'api.document_base_config_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21802 => [[['_route' => 'api.document_base_config_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21909 => [[['_route' => 'api.document_base_config_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22008 => [
            [['_route' => 'api.document_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        22092 => [[['_route' => 'api.document_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        22182 => [[['_route' => 'api.document_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22277 => [[['_route' => 'api.document_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22360 => [[['_route' => 'api.document_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22472 => [
            [['_route' => 'api.document_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        22569 => [[['_route' => 'api.document_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        22672 => [[['_route' => 'api.document_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22780 => [[['_route' => 'api.document_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22876 => [[['_route' => 'api.document_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22974 => [
            [['_route' => 'api.event_action.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'event-action'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.event_action.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'event-action'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.event_action.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'event-action'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        23057 => [[['_route' => 'api.event_action.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'event-action'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        23146 => [[['_route' => 'api.event_action.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'event-action'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23240 => [[['_route' => 'api.event_action.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'event-action'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23322 => [[['_route' => 'api.event_action.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'event-action'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23427 => [
            [['_route' => 'api.import_export_file.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-file'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-file'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-file'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        23517 => [[['_route' => 'api.import_export_file.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-file'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        23613 => [[['_route' => 'api.import_export_file.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23714 => [[['_route' => 'api.import_export_file.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23803 => [[['_route' => 'api.import_export_file.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23907 => [
            [['_route' => 'api.import_export_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-log'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-log'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-log'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        23996 => [[['_route' => 'api.import_export_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-log'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        24091 => [[['_route' => 'api.import_export_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-log'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24191 => [[['_route' => 'api.import_export_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-log'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24279 => [[['_route' => 'api.import_export_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-log'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24387 => [
            [['_route' => 'api.import_export_profile.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        24480 => [[['_route' => 'api.import_export_profile.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        24579 => [[['_route' => 'api.import_export_profile.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24683 => [[['_route' => 'api.import_export_profile.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24775 => [[['_route' => 'api.import_export_profile.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24896 => [
            [['_route' => 'api.import_export_profile_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        25002 => [[['_route' => 'api.import_export_profile_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        25114 => [[['_route' => 'api.import_export_profile_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25231 => [[['_route' => 'api.import_export_profile_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25336 => [[['_route' => 'api.import_export_profile_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25432 => [
            [['_route' => 'api.integration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'integration'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.integration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        25513 => [[['_route' => 'api.integration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        25600 => [[['_route' => 'api.integration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25692 => [[['_route' => 'api.integration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25772 => [[['_route' => 'api.integration.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'integration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25865 => [
            [['_route' => 'api.language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'language'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'language'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'language'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        25943 => [[['_route' => 'api.language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'language'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        26027 => [[['_route' => 'api.language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26116 => [[['_route' => 'api.language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26193 => [[['_route' => 'api.language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26284 => [
            [['_route' => 'api.locale.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        26360 => [[['_route' => 'api.locale.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        26442 => [[['_route' => 'api.locale.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26529 => [[['_route' => 'api.locale.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26604 => [[['_route' => 'api.locale.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26708 => [
            [['_route' => 'api.locale_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        26797 => [[['_route' => 'api.locale_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        26892 => [[['_route' => 'api.locale_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26992 => [[['_route' => 'api.locale_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27080 => [[['_route' => 'api.locale_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27175 => [
            [['_route' => 'api.log_entry.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'log-entry'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'log-entry'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'log-entry'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        27255 => [[['_route' => 'api.log_entry.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'log-entry'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        27341 => [[['_route' => 'api.log_entry.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'log-entry'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27432 => [[['_route' => 'api.log_entry.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'log-entry'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27511 => [[['_route' => 'api.log_entry.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'log-entry'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27616 => [
            [['_route' => 'api.mail_header_footer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        27706 => [[['_route' => 'api.mail_header_footer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        27802 => [[['_route' => 'api.mail_header_footer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27903 => [[['_route' => 'api.mail_header_footer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27992 => [[['_route' => 'api.mail_header_footer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28110 => [
            [['_route' => 'api.mail_header_footer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        28213 => [[['_route' => 'api.mail_header_footer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        28322 => [[['_route' => 'api.mail_header_footer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28436 => [[['_route' => 'api.mail_header_footer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28538 => [[['_route' => 'api.mail_header_footer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28637 => [
            [['_route' => 'api.mail_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        28721 => [[['_route' => 'api.mail_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        28811 => [[['_route' => 'api.mail_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28906 => [[['_route' => 'api.mail_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28989 => [[['_route' => 'api.mail_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29095 => [
            [['_route' => 'api.mail_template_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        29186 => [[['_route' => 'api.mail_template_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        29283 => [[['_route' => 'api.mail_template_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29385 => [[['_route' => 'api.mail_template_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29475 => [[['_route' => 'api.mail_template_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29590 => [
            [['_route' => 'api.mail_template_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        29690 => [[['_route' => 'api.mail_template_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        29796 => [[['_route' => 'api.mail_template_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29907 => [[['_route' => 'api.mail_template_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30006 => [[['_route' => 'api.mail_template_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30118 => [
            [['_route' => 'api.mail_template_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        30215 => [[['_route' => 'api.mail_template_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        30318 => [[['_route' => 'api.mail_template_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30426 => [[['_route' => 'api.mail_template_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30522 => [[['_route' => 'api.mail_template_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30627 => [
            [['_route' => 'api.mail_template_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        30717 => [[['_route' => 'api.mail_template_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        30813 => [[['_route' => 'api.mail_template_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30914 => [[['_route' => 'api.mail_template_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31003 => [[['_route' => 'api.mail_template_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31121 => [
            [['_route' => 'api.mail_template_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        31224 => [[['_route' => 'api.mail_template_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        31333 => [[['_route' => 'api.mail_template_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31447 => [[['_route' => 'api.mail_template_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31549 => [[['_route' => 'api.mail_template_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31648 => [
            [['_route' => 'api.main_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'main-category'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.main_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'main-category'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.main_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'main-category'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        31732 => [[['_route' => 'api.main_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'main-category'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        31822 => [[['_route' => 'api.main_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'main-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31917 => [[['_route' => 'api.main_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'main-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32000 => [[['_route' => 'api.main_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'main-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32090 => [
            [['_route' => 'api.media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        32165 => [[['_route' => 'api.media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        32246 => [[['_route' => 'api.media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32332 => [[['_route' => 'api.media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32406 => [[['_route' => 'api.media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32513 => [
            [['_route' => 'api.media_default_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-default-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-default-folder'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-default-folder'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        32605 => [[['_route' => 'api.media_default_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-default-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        32703 => [[['_route' => 'api.media_default_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-default-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32806 => [[['_route' => 'api.media_default_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-default-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32897 => [[['_route' => 'api.media_default_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-default-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32995 => [
            [['_route' => 'api.media_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        33078 => [[['_route' => 'api.media_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        33167 => [[['_route' => 'api.media_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33261 => [[['_route' => 'api.media_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33343 => [[['_route' => 'api.media_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33456 => [
            [['_route' => 'api.media_folder_configuration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        33554 => [[['_route' => 'api.media_folder_configuration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        33658 => [[['_route' => 'api.media_folder_configuration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33767 => [[['_route' => 'api.media_folder_configuration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33864 => [[['_route' => 'api.media_folder_configuration.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34001 => [
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        34123 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        34251 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34384 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34505 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34600 => [
            [['_route' => 'api.media_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        34680 => [[['_route' => 'api.media_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        34766 => [[['_route' => 'api.media_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34857 => [[['_route' => 'api.media_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34936 => [[['_route' => 'api.media_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35037 => [
            [['_route' => 'api.media_thumbnail.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        35123 => [[['_route' => 'api.media_thumbnail.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        35215 => [[['_route' => 'api.media_thumbnail.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35312 => [[['_route' => 'api.media_thumbnail.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35397 => [[['_route' => 'api.media_thumbnail.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35504 => [
            [['_route' => 'api.media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        35596 => [[['_route' => 'api.media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        35694 => [[['_route' => 'api.media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35797 => [[['_route' => 'api.media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35888 => [[['_route' => 'api.media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35991 => [
            [['_route' => 'api.media_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        36079 => [[['_route' => 'api.media_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        36173 => [[['_route' => 'api.media_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36272 => [[['_route' => 'api.media_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36359 => [[['_route' => 'api.media_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36465 => [
            [['_route' => 'api.message_queue_stats.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.message_queue_stats.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.message_queue_stats.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        36556 => [[['_route' => 'api.message_queue_stats.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        36653 => [[['_route' => 'api.message_queue_stats.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36755 => [[['_route' => 'api.message_queue_stats.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36845 => [[['_route' => 'api.message_queue_stats.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36951 => [
            [['_route' => 'api.newsletter_recipient.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        37042 => [[['_route' => 'api.newsletter_recipient.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        37139 => [[['_route' => 'api.newsletter_recipient.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37241 => [[['_route' => 'api.newsletter_recipient.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37331 => [[['_route' => 'api.newsletter_recipient.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37442 => [
            [['_route' => 'api.newsletter_recipient_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        37538 => [[['_route' => 'api.newsletter_recipient_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        37640 => [[['_route' => 'api.newsletter_recipient_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37747 => [[['_route' => 'api.newsletter_recipient_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37842 => [[['_route' => 'api.newsletter_recipient_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37940 => [
            [['_route' => 'api.number_range.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        38023 => [[['_route' => 'api.number_range.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        38112 => [[['_route' => 'api.number_range.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38206 => [[['_route' => 'api.number_range.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38288 => [[['_route' => 'api.number_range.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38402 => [
            [['_route' => 'api.number_range_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        38501 => [[['_route' => 'api.number_range_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        38606 => [[['_route' => 'api.number_range_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38716 => [[['_route' => 'api.number_range_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38814 => [[['_route' => 'api.number_range_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38919 => [
            [['_route' => 'api.number_range_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-state'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-state'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-state'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        39009 => [[['_route' => 'api.number_range_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-state'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        39105 => [[['_route' => 'api.number_range_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39206 => [[['_route' => 'api.number_range_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39295 => [[['_route' => 'api.number_range_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39406 => [
            [['_route' => 'api.number_range_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        39502 => [[['_route' => 'api.number_range_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        39604 => [[['_route' => 'api.number_range_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39711 => [[['_route' => 'api.number_range_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39806 => [[['_route' => 'api.number_range_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39910 => [
            [['_route' => 'api.number_range_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        39999 => [[['_route' => 'api.number_range_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        40094 => [[['_route' => 'api.number_range_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40194 => [[['_route' => 'api.number_range_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40282 => [[['_route' => 'api.number_range_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40399 => [
            [['_route' => 'api.number_range_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        40501 => [[['_route' => 'api.number_range_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        40609 => [[['_route' => 'api.number_range_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40722 => [[['_route' => 'api.number_range_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40823 => [[['_route' => 'api.number_range_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40913 => [
            [['_route' => 'api.order.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        40988 => [[['_route' => 'api.order.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        41069 => [[['_route' => 'api.order.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41155 => [[['_route' => 'api.order.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41229 => [[['_route' => 'api.order.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41328 => [
            [['_route' => 'api.order_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-address'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-address'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-address'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        41412 => [[['_route' => 'api.order_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-address'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        41502 => [[['_route' => 'api.order_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41597 => [[['_route' => 'api.order_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41680 => [[['_route' => 'api.order_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41780 => [
            [['_route' => 'api.order_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-customer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-customer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        41865 => [[['_route' => 'api.order_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        41956 => [[['_route' => 'api.order_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42052 => [[['_route' => 'api.order_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42136 => [[['_route' => 'api.order_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42242 => [
            [['_route' => 'api.order_delivery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        42327 => [[['_route' => 'api.order_delivery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        42418 => [[['_route' => 'api.order_delivery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42514 => [[['_route' => 'api.order_delivery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42598 => [[['_route' => 'api.order_delivery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42708 => [
            [['_route' => 'api.order_delivery_position.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        42803 => [[['_route' => 'api.order_delivery_position.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        42904 => [[['_route' => 'api.order_delivery_position.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43010 => [[['_route' => 'api.order_delivery_position.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43104 => [[['_route' => 'api.order_delivery_position.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43206 => [
            [['_route' => 'api.order_line_item.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-line-item'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-line-item'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-line-item'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        43293 => [[['_route' => 'api.order_line_item.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-line-item'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        43386 => [[['_route' => 'api.order_line_item.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-line-item'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43484 => [[['_route' => 'api.order_line_item.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-line-item'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43570 => [[['_route' => 'api.order_line_item.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-line-item'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43665 => [
            [['_route' => 'api.order_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        43745 => [[['_route' => 'api.order_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        43831 => [[['_route' => 'api.order_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43922 => [[['_route' => 'api.order_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44001 => [[['_route' => 'api.order_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44104 => [
            [['_route' => 'api.order_transaction.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        44192 => [[['_route' => 'api.order_transaction.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        44286 => [[['_route' => 'api.order_transaction.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44385 => [[['_route' => 'api.order_transaction.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44472 => [[['_route' => 'api.order_transaction.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44572 => [
            [['_route' => 'api.payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        44657 => [[['_route' => 'api.payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        44748 => [[['_route' => 'api.payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44844 => [[['_route' => 'api.payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44928 => [[['_route' => 'api.payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45041 => [
            [['_route' => 'api.payment_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        45139 => [[['_route' => 'api.payment_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        45243 => [[['_route' => 'api.payment_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45352 => [[['_route' => 'api.payment_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45449 => [[['_route' => 'api.payment_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45555 => [
            [['_route' => 'api.payone_payment_card.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payone_payment_card.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payone_payment_card.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        45646 => [[['_route' => 'api.payone_payment_card.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        45743 => [[['_route' => 'api.payone_payment_card.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45845 => [[['_route' => 'api.payone_payment_card.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45935 => [[['_route' => 'api.payone_payment_card.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46044 => [
            [['_route' => 'api.payone_payment_mandate.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payone_payment_mandate.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payone_payment_mandate.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        46138 => [[['_route' => 'api.payone_payment_mandate.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        46238 => [[['_route' => 'api.payone_payment_mandate.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46343 => [[['_route' => 'api.payone_payment_mandate.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46436 => [[['_route' => 'api.payone_payment_mandate.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46527 => [
            [['_route' => 'api.plugin.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        46603 => [[['_route' => 'api.plugin.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        46685 => [[['_route' => 'api.plugin.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46772 => [[['_route' => 'api.plugin.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46847 => [[['_route' => 'api.plugin.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46951 => [
            [['_route' => 'api.plugin_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        47040 => [[['_route' => 'api.plugin_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        47135 => [[['_route' => 'api.plugin_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47235 => [[['_route' => 'api.plugin_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47323 => [[['_route' => 'api.plugin_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47415 => [
            [['_route' => 'api.product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        47492 => [[['_route' => 'api.product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        47575 => [[['_route' => 'api.product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47663 => [[['_route' => 'api.product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47739 => [[['_route' => 'api.product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47841 => [
            [['_route' => 'api.product_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        47928 => [[['_route' => 'api.product_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        48021 => [[['_route' => 'api.product_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48119 => [[['_route' => 'api.product_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48205 => [[['_route' => 'api.product_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48313 => [
            [['_route' => 'api.product_category_tree.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category-tree'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category-tree'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category-tree'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        48406 => [[['_route' => 'api.product_category_tree.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category-tree'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        48505 => [[['_route' => 'api.product_category_tree.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category-tree'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48609 => [[['_route' => 'api.product_category_tree.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category-tree'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48701 => [[['_route' => 'api.product_category_tree.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category-tree'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48816 => [
            [['_route' => 'api.product_configurator_setting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        48916 => [[['_route' => 'api.product_configurator_setting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        49022 => [[['_route' => 'api.product_configurator_setting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49133 => [[['_route' => 'api.product_configurator_setting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49232 => [[['_route' => 'api.product_configurator_setting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49340 => [
            [['_route' => 'api.product_cross_selling.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        49433 => [[['_route' => 'api.product_cross_selling.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        49532 => [[['_route' => 'api.product_cross_selling.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49636 => [[['_route' => 'api.product_cross_selling.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49728 => [[['_route' => 'api.product_cross_selling.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49856 => [
            [['_route' => 'api.product_cross_selling_assigned_products.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        49969 => [[['_route' => 'api.product_cross_selling_assigned_products.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        50088 => [[['_route' => 'api.product_cross_selling_assigned_products.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50212 => [[['_route' => 'api.product_cross_selling_assigned_products.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50324 => [[['_route' => 'api.product_cross_selling_assigned_products.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50445 => [
            [['_route' => 'api.product_cross_selling_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        50551 => [[['_route' => 'api.product_cross_selling_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        50663 => [[['_route' => 'api.product_cross_selling_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50780 => [[['_route' => 'api.product_cross_selling_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50885 => [[['_route' => 'api.product_cross_selling_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50997 => [
            [['_route' => 'api.product_custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        51094 => [[['_route' => 'api.product_custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        51197 => [[['_route' => 'api.product_custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51305 => [[['_route' => 'api.product_custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51401 => [[['_route' => 'api.product_custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51501 => [
            [['_route' => 'api.product_export.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-export'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_export.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-export'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_export.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-export'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        51586 => [[['_route' => 'api.product_export.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-export'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        51677 => [[['_route' => 'api.product_export.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-export'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51773 => [[['_route' => 'api.product_export.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-export'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51857 => [[['_route' => 'api.product_export.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-export'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51970 => [
            [['_route' => 'api.product_keyword_dictionary.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        52068 => [[['_route' => 'api.product_keyword_dictionary.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        52172 => [[['_route' => 'api.product_keyword_dictionary.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52281 => [[['_route' => 'api.product_keyword_dictionary.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52378 => [[['_route' => 'api.product_keyword_dictionary.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52484 => [
            [['_route' => 'api.product_manufacturer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        52575 => [[['_route' => 'api.product_manufacturer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        52672 => [[['_route' => 'api.product_manufacturer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52774 => [[['_route' => 'api.product_manufacturer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52864 => [[['_route' => 'api.product_manufacturer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52983 => [
            [['_route' => 'api.product_manufacturer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        53087 => [[['_route' => 'api.product_manufacturer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        53197 => [[['_route' => 'api.product_manufacturer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53312 => [[['_route' => 'api.product_manufacturer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53415 => [[['_route' => 'api.product_manufacturer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53514 => [
            [['_route' => 'api.product_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        53598 => [[['_route' => 'api.product_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        53688 => [[['_route' => 'api.product_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53783 => [[['_route' => 'api.product_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53866 => [[['_route' => 'api.product_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53966 => [
            [['_route' => 'api.product_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-option'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-option'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-option'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        54051 => [[['_route' => 'api.product_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-option'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        54142 => [[['_route' => 'api.product_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54238 => [[['_route' => 'api.product_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54322 => [[['_route' => 'api.product_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54421 => [
            [['_route' => 'api.product_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-price'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-price'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-price'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        54505 => [[['_route' => 'api.product_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-price'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        54595 => [[['_route' => 'api.product_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54690 => [[['_route' => 'api.product_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54773 => [[['_route' => 'api.product_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54875 => [
            [['_route' => 'api.product_property.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-property'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_property.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-property'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_property.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-property'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        54962 => [[['_route' => 'api.product_property.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-property'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        55055 => [[['_route' => 'api.product_property.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-property'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55153 => [[['_route' => 'api.product_property.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-property'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55239 => [[['_route' => 'api.product_property.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-property'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55339 => [
            [['_route' => 'api.product_review.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-review'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_review.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-review'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_review.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-review'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        55424 => [[['_route' => 'api.product_review.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-review'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        55515 => [[['_route' => 'api.product_review.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-review'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55611 => [[['_route' => 'api.product_review.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-review'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55695 => [[['_route' => 'api.product_review.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-review'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55804 => [
            [['_route' => 'api.product_search_keyword.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        55898 => [[['_route' => 'api.product_search_keyword.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        55998 => [[['_route' => 'api.product_search_keyword.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56103 => [[['_route' => 'api.product_search_keyword.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56196 => [[['_route' => 'api.product_search_keyword.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56296 => [
            [['_route' => 'api.product_stream.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        56381 => [[['_route' => 'api.product_stream.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        56472 => [[['_route' => 'api.product_stream.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56568 => [[['_route' => 'api.product_stream.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56652 => [[['_route' => 'api.product_stream.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56760 => [
            [['_route' => 'api.product_stream_filter.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        56853 => [[['_route' => 'api.product_stream_filter.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        56952 => [[['_route' => 'api.product_stream_filter.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57056 => [[['_route' => 'api.product_stream_filter.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57148 => [[['_route' => 'api.product_stream_filter.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57261 => [
            [['_route' => 'api.product_stream_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        57359 => [[['_route' => 'api.product_stream_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        57463 => [[['_route' => 'api.product_stream_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57572 => [[['_route' => 'api.product_stream_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57669 => [[['_route' => 'api.product_stream_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57766 => [
            [['_route' => 'api.product_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        57848 => [[['_route' => 'api.product_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        57936 => [[['_route' => 'api.product_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58029 => [[['_route' => 'api.product_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58110 => [[['_route' => 'api.product_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58215 => [
            [['_route' => 'api.product_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        58305 => [[['_route' => 'api.product_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        58401 => [[['_route' => 'api.product_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58502 => [[['_route' => 'api.product_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58591 => [[['_route' => 'api.product_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58695 => [
            [['_route' => 'api.product_visibility.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-visibility'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-visibility'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-visibility'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        58784 => [[['_route' => 'api.product_visibility.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-visibility'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        58879 => [[['_route' => 'api.product_visibility.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-visibility'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58979 => [[['_route' => 'api.product_visibility.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-visibility'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59067 => [[['_route' => 'api.product_visibility.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-visibility'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59161 => [
            [['_route' => 'api.promotion.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        59240 => [[['_route' => 'api.promotion.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        59325 => [[['_route' => 'api.promotion.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59415 => [[['_route' => 'api.promotion.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59493 => [[['_route' => 'api.promotion.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59599 => [
            [['_route' => 'api.promotion_cart_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        59690 => [[['_route' => 'api.promotion_cart_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        59787 => [[['_route' => 'api.promotion_cart_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59889 => [[['_route' => 'api.promotion_cart_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59979 => [[['_route' => 'api.promotion_cart_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60083 => [
            [['_route' => 'api.promotion_discount.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        60172 => [[['_route' => 'api.promotion_discount.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        60267 => [[['_route' => 'api.promotion_discount.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60367 => [[['_route' => 'api.promotion_discount.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60455 => [[['_route' => 'api.promotion_discount.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60567 => [
            [['_route' => 'api.promotion_discount_prices.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        60664 => [[['_route' => 'api.promotion_discount_prices.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        60767 => [[['_route' => 'api.promotion_discount_prices.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60875 => [[['_route' => 'api.promotion_discount_prices.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60971 => [[['_route' => 'api.promotion_discount_prices.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61081 => [
            [['_route' => 'api.promotion_discount_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        61176 => [[['_route' => 'api.promotion_discount_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        61277 => [[['_route' => 'api.promotion_discount_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61383 => [[['_route' => 'api.promotion_discount_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61477 => [[['_route' => 'api.promotion_discount_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61589 => [
            [['_route' => 'api.promotion_individual_code.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        61686 => [[['_route' => 'api.promotion_individual_code.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        61789 => [[['_route' => 'api.promotion_individual_code.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61897 => [[['_route' => 'api.promotion_individual_code.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61993 => [[['_route' => 'api.promotion_individual_code.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62100 => [
            [['_route' => 'api.promotion_order_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        62192 => [[['_route' => 'api.promotion_order_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        62290 => [[['_route' => 'api.promotion_order_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62393 => [[['_route' => 'api.promotion_order_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62484 => [[['_route' => 'api.promotion_order_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62597 => [
            [['_route' => 'api.promotion_persona_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        62695 => [[['_route' => 'api.promotion_persona_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        62799 => [[['_route' => 'api.promotion_persona_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62908 => [[['_route' => 'api.promotion_persona_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63005 => [[['_route' => 'api.promotion_persona_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63114 => [
            [['_route' => 'api.promotion_persona_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        63208 => [[['_route' => 'api.promotion_persona_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        63308 => [[['_route' => 'api.promotion_persona_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63413 => [[['_route' => 'api.promotion_persona_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63506 => [[['_route' => 'api.promotion_persona_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63616 => [
            [['_route' => 'api.promotion_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        63711 => [[['_route' => 'api.promotion_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        63812 => [[['_route' => 'api.promotion_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63918 => [[['_route' => 'api.promotion_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64012 => [[['_route' => 'api.promotion_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64116 => [
            [['_route' => 'api.promotion_setgroup.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        64205 => [[['_route' => 'api.promotion_setgroup.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        64300 => [[['_route' => 'api.promotion_setgroup.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64400 => [[['_route' => 'api.promotion_setgroup.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64488 => [[['_route' => 'api.promotion_setgroup.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64598 => [
            [['_route' => 'api.promotion_setgroup_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        64693 => [[['_route' => 'api.promotion_setgroup_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        64794 => [[['_route' => 'api.promotion_setgroup_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64900 => [[['_route' => 'api.promotion_setgroup_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64994 => [[['_route' => 'api.promotion_setgroup_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65101 => [
            [['_route' => 'api.promotion_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        65193 => [[['_route' => 'api.promotion_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        65291 => [[['_route' => 'api.promotion_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65394 => [[['_route' => 'api.promotion_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65485 => [[['_route' => 'api.promotion_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65585 => [
            [['_route' => 'api.property_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        65670 => [[['_route' => 'api.property_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        65761 => [[['_route' => 'api.property_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65857 => [[['_route' => 'api.property_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65941 => [[['_route' => 'api.property_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66049 => [
            [['_route' => 'api.property_group_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        66142 => [[['_route' => 'api.property_group_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        66241 => [[['_route' => 'api.property_group_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66345 => [[['_route' => 'api.property_group_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66437 => [[['_route' => 'api.property_group_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66558 => [
            [['_route' => 'api.property_group_option_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        66664 => [[['_route' => 'api.property_group_option_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        66776 => [[['_route' => 'api.property_group_option_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66893 => [[['_route' => 'api.property_group_option_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66998 => [[['_route' => 'api.property_group_option_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67111 => [
            [['_route' => 'api.property_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        67209 => [[['_route' => 'api.property_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        67313 => [[['_route' => 'api.property_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67422 => [[['_route' => 'api.property_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67519 => [[['_route' => 'api.property_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67608 => [
            [['_route' => 'api.rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        67682 => [[['_route' => 'api.rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        67762 => [[['_route' => 'api.rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67847 => [[['_route' => 'api.rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67920 => [[['_route' => 'api.rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68020 => [
            [['_route' => 'api.rule_condition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule-condition'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule-condition'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule-condition'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        68105 => [[['_route' => 'api.rule_condition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule-condition'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        68196 => [[['_route' => 'api.rule_condition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule-condition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68292 => [[['_route' => 'api.rule_condition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule-condition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68376 => [[['_route' => 'api.rule_condition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule-condition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68475 => [
            [['_route' => 'api.sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        68559 => [[['_route' => 'api.sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        68649 => [[['_route' => 'api.sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68744 => [[['_route' => 'api.sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68827 => [[['_route' => 'api.sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68937 => [
            [['_route' => 'api.sales_channel_analytics.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        69032 => [[['_route' => 'api.sales_channel_analytics.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        69133 => [[['_route' => 'api.sales_channel_analytics.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69239 => [[['_route' => 'api.sales_channel_analytics.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69333 => [[['_route' => 'api.sales_channel_analytics.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69441 => [
            [['_route' => 'api.sales_channel_country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        69539 => [[['_route' => 'api.sales_channel_country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        69638 => [[['_route' => 'api.sales_channel_country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69742 => [[['_route' => 'api.sales_channel_country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69834 => [[['_route' => 'api.sales_channel_country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69943 => [
            [['_route' => 'api.sales_channel_currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        70037 => [[['_route' => 'api.sales_channel_currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        70137 => [[['_route' => 'api.sales_channel_currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70242 => [[['_route' => 'api.sales_channel_currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70335 => [[['_route' => 'api.sales_channel_currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70442 => [
            [['_route' => 'api.sales_channel_domain.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        70534 => [[['_route' => 'api.sales_channel_domain.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        70632 => [[['_route' => 'api.sales_channel_domain.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70735 => [[['_route' => 'api.sales_channel_domain.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70826 => [[['_route' => 'api.sales_channel_domain.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70935 => [
            [['_route' => 'api.sales_channel_language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        71029 => [[['_route' => 'api.sales_channel_language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        71129 => [[['_route' => 'api.sales_channel_language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71234 => [[['_route' => 'api.sales_channel_language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71327 => [[['_route' => 'api.sales_channel_language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71443 => [
            [['_route' => 'api.sales_channel_payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        71544 => [[['_route' => 'api.sales_channel_payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        71651 => [[['_route' => 'api.sales_channel_payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71763 => [[['_route' => 'api.sales_channel_payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71863 => [[['_route' => 'api.sales_channel_payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71980 => [
            [['_route' => 'api.sales_channel_shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        72082 => [[['_route' => 'api.sales_channel_shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        72190 => [[['_route' => 'api.sales_channel_shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72303 => [[['_route' => 'api.sales_channel_shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72404 => [[['_route' => 'api.sales_channel_shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72516 => [
            [['_route' => 'api.sales_channel_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        72613 => [[['_route' => 'api.sales_channel_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        72716 => [[['_route' => 'api.sales_channel_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72824 => [[['_route' => 'api.sales_channel_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72920 => [[['_route' => 'api.sales_channel_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73025 => [
            [['_route' => 'api.sales_channel_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        73115 => [[['_route' => 'api.sales_channel_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        73211 => [[['_route' => 'api.sales_channel_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73312 => [[['_route' => 'api.sales_channel_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73401 => [[['_route' => 'api.sales_channel_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73519 => [
            [['_route' => 'api.sales_channel_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        73622 => [[['_route' => 'api.sales_channel_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        73731 => [[['_route' => 'api.sales_channel_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73845 => [[['_route' => 'api.sales_channel_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73947 => [[['_route' => 'api.sales_channel_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74042 => [
            [['_route' => 'api.salutation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        74122 => [[['_route' => 'api.salutation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        74208 => [[['_route' => 'api.salutation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74299 => [[['_route' => 'api.salutation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74378 => [[['_route' => 'api.salutation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74486 => [
            [['_route' => 'api.salutation_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        74579 => [[['_route' => 'api.salutation_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        74678 => [[['_route' => 'api.salutation_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74782 => [[['_route' => 'api.salutation_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74874 => [[['_route' => 'api.salutation_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74974 => [
            [['_route' => 'api.scheduled_task.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'scheduled-task'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'scheduled-task'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'scheduled-task'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        75059 => [[['_route' => 'api.scheduled_task.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'scheduled-task'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        75150 => [[['_route' => 'api.scheduled_task.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'scheduled-task'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75246 => [[['_route' => 'api.scheduled_task.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'scheduled-task'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75330 => [[['_route' => 'api.scheduled_task.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'scheduled-task'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75423 => [
            [['_route' => 'api.seo_url.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        75501 => [[['_route' => 'api.seo_url.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        75585 => [[['_route' => 'api.seo_url.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75674 => [[['_route' => 'api.seo_url.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75751 => [[['_route' => 'api.seo_url.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75854 => [
            [['_route' => 'api.seo_url_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url-template'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url-template'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url-template'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        75942 => [[['_route' => 'api.seo_url_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url-template'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        76036 => [[['_route' => 'api.seo_url_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76135 => [[['_route' => 'api.seo_url_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76222 => [[['_route' => 'api.seo_url_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76323 => [
            [['_route' => 'api.shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        76409 => [[['_route' => 'api.shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        76501 => [[['_route' => 'api.shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76598 => [[['_route' => 'api.shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76683 => [[['_route' => 'api.shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76791 => [
            [['_route' => 'api.shipping_method_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        76884 => [[['_route' => 'api.shipping_method_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        76983 => [[['_route' => 'api.shipping_method_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77087 => [[['_route' => 'api.shipping_method_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77179 => [[['_route' => 'api.shipping_method_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77285 => [
            [['_route' => 'api.shipping_method_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        77376 => [[['_route' => 'api.shipping_method_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        77473 => [[['_route' => 'api.shipping_method_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77575 => [[['_route' => 'api.shipping_method_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77665 => [[['_route' => 'api.shipping_method_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77779 => [
            [['_route' => 'api.shipping_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        77878 => [[['_route' => 'api.shipping_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        77983 => [[['_route' => 'api.shipping_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78093 => [[['_route' => 'api.shipping_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78191 => [[['_route' => 'api.shipping_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78283 => [
            [['_route' => 'api.snippet.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        78360 => [[['_route' => 'api.snippet.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        78443 => [[['_route' => 'api.snippet.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78531 => [[['_route' => 'api.snippet.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78607 => [[['_route' => 'api.snippet.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78704 => [
            [['_route' => 'api.snippet_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet-set'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet-set'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet-set'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        78786 => [[['_route' => 'api.snippet_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet-set'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        78874 => [[['_route' => 'api.snippet_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78967 => [[['_route' => 'api.snippet_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79048 => [[['_route' => 'api.snippet_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79147 => [
            [['_route' => 'api.state_machine.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        79231 => [[['_route' => 'api.state_machine.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        79321 => [[['_route' => 'api.state_machine.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79416 => [[['_route' => 'api.state_machine.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79499 => [[['_route' => 'api.state_machine.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79607 => [
            [['_route' => 'api.state_machine_history.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-history'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-history'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-history'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        79700 => [[['_route' => 'api.state_machine_history.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-history'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        79799 => [[['_route' => 'api.state_machine_history.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-history'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79903 => [[['_route' => 'api.state_machine_history.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-history'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79995 => [[['_route' => 'api.state_machine_history.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-history'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80101 => [
            [['_route' => 'api.state_machine_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        80192 => [[['_route' => 'api.state_machine_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        80289 => [[['_route' => 'api.state_machine_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80391 => [[['_route' => 'api.state_machine_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80481 => [[['_route' => 'api.state_machine_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80600 => [
            [['_route' => 'api.state_machine_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        80704 => [[['_route' => 'api.state_machine_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        80814 => [[['_route' => 'api.state_machine_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80929 => [[['_route' => 'api.state_machine_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81032 => [[['_route' => 'api.state_machine_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81143 => [
            [['_route' => 'api.state_machine_transition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        81239 => [[['_route' => 'api.state_machine_transition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        81341 => [[['_route' => 'api.state_machine_transition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81448 => [[['_route' => 'api.state_machine_transition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81543 => [[['_route' => 'api.state_machine_transition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81655 => [
            [['_route' => 'api.state_machine_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        81752 => [[['_route' => 'api.state_machine_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        81855 => [[['_route' => 'api.state_machine_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81963 => [[['_route' => 'api.state_machine_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82059 => [[['_route' => 'api.state_machine_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82171 => [
            [['_route' => 'api.swag_migration_connection.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_connection.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_connection.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        82268 => [[['_route' => 'api.swag_migration_connection.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        82371 => [[['_route' => 'api.swag_migration_connection.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82479 => [[['_route' => 'api.swag_migration_connection.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82575 => [[['_route' => 'api.swag_migration_connection.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82681 => [
            [['_route' => 'api.swag_migration_data.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_data.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_data.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        82772 => [[['_route' => 'api.swag_migration_data.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        82869 => [[['_route' => 'api.swag_migration_data.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82971 => [[['_route' => 'api.swag_migration_data.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83061 => [[['_route' => 'api.swag_migration_data.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83179 => [
            [['_route' => 'api.swag_migration_general_setting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_general_setting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_general_setting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        83282 => [[['_route' => 'api.swag_migration_general_setting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        83391 => [[['_route' => 'api.swag_migration_general_setting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83505 => [[['_route' => 'api.swag_migration_general_setting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83607 => [[['_route' => 'api.swag_migration_general_setting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83716 => [
            [['_route' => 'api.swag_migration_logging.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_logging.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_logging.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        83810 => [[['_route' => 'api.swag_migration_logging.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        83910 => [[['_route' => 'api.swag_migration_logging.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84015 => [[['_route' => 'api.swag_migration_logging.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84108 => [[['_route' => 'api.swag_migration_logging.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84217 => [
            [['_route' => 'api.swag_migration_mapping.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_mapping.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_mapping.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        84311 => [[['_route' => 'api.swag_migration_mapping.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        84411 => [[['_route' => 'api.swag_migration_mapping.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84516 => [[['_route' => 'api.swag_migration_mapping.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84609 => [[['_route' => 'api.swag_migration_mapping.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84722 => [
            [['_route' => 'api.swag_migration_media_file.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_media_file.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_media_file.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        84820 => [[['_route' => 'api.swag_migration_media_file.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        84924 => [[['_route' => 'api.swag_migration_media_file.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85033 => [[['_route' => 'api.swag_migration_media_file.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85130 => [[['_route' => 'api.swag_migration_media_file.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85235 => [
            [['_route' => 'api.swag_migration_run.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_run.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_run.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        85325 => [[['_route' => 'api.swag_migration_run.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        85421 => [[['_route' => 'api.swag_migration_run.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85522 => [[['_route' => 'api.swag_migration_run.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85611 => [[['_route' => 'api.swag_migration_run.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85710 => [
            [['_route' => 'api.system_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'system-config'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.system_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'system-config'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.system_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'system-config'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        85794 => [[['_route' => 'api.system_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'system-config'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        85884 => [[['_route' => 'api.system_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'system-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85979 => [[['_route' => 'api.system_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'system-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86062 => [[['_route' => 'api.system_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'system-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86150 => [
            [['_route' => 'api.tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        86223 => [[['_route' => 'api.tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        86302 => [[['_route' => 'api.tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86386 => [[['_route' => 'api.tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86458 => [[['_route' => 'api.tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86546 => [
            [['_route' => 'api.tax.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        86619 => [[['_route' => 'api.tax.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        86698 => [[['_route' => 'api.tax.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86782 => [[['_route' => 'api.tax.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86854 => [[['_route' => 'api.tax.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86948 => [
            [['_route' => 'api.tax_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        87027 => [[['_route' => 'api.tax_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        87112 => [[['_route' => 'api.tax_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87202 => [[['_route' => 'api.tax_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87280 => [[['_route' => 'api.tax_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87380 => [
            [['_route' => 'api.tax_rule_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        87465 => [[['_route' => 'api.tax_rule_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        87556 => [[['_route' => 'api.tax_rule_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87652 => [[['_route' => 'api.tax_rule_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87736 => [[['_route' => 'api.tax_rule_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87849 => [
            [['_route' => 'api.tax_rule_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        87947 => [[['_route' => 'api.tax_rule_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        88051 => [[['_route' => 'api.tax_rule_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88160 => [[['_route' => 'api.tax_rule_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88257 => [[['_route' => 'api.tax_rule_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88347 => [
            [['_route' => 'api.theme.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        88422 => [[['_route' => 'api.theme.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        88503 => [[['_route' => 'api.theme.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88589 => [[['_route' => 'api.theme.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88663 => [[['_route' => 'api.theme.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88760 => [
            [['_route' => 'api.theme_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        88842 => [[['_route' => 'api.theme_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        88930 => [[['_route' => 'api.theme_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89023 => [[['_route' => 'api.theme_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89104 => [[['_route' => 'api.theme_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89210 => [
            [['_route' => 'api.theme_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        89301 => [[['_route' => 'api.theme_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        89398 => [[['_route' => 'api.theme_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89500 => [[['_route' => 'api.theme_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89590 => [[['_route' => 'api.theme_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89693 => [
            [['_route' => 'api.theme_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        89781 => [[['_route' => 'api.theme_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        89875 => [[['_route' => 'api.theme_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89974 => [[['_route' => 'api.theme_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90061 => [[['_route' => 'api.theme_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90150 => [
            [['_route' => 'api.unit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        90224 => [[['_route' => 'api.unit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        90304 => [[['_route' => 'api.unit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90389 => [[['_route' => 'api.unit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90462 => [[['_route' => 'api.unit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90564 => [
            [['_route' => 'api.unit_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        90651 => [[['_route' => 'api.unit_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        90744 => [[['_route' => 'api.unit_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90842 => [[['_route' => 'api.unit_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90928 => [[['_route' => 'api.unit_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91014 => [[['_route' => 'api.user.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        91087 => [[['_route' => 'api.user.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        91167 => [[['_route' => 'api.user.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91252 => [[['_route' => 'api.user.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91354 => [
            [['_route' => 'api.user_access_key.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-access-key'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-access-key'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-access-key'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        91441 => [[['_route' => 'api.user_access_key.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-access-key'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        91534 => [[['_route' => 'api.user_access_key.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-access-key'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91632 => [[['_route' => 'api.user_access_key.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-access-key'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91718 => [[['_route' => 'api.user_access_key.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-access-key'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91817 => [
            [['_route' => 'api.user_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-recovery'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-recovery'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        91901 => [[['_route' => 'api.user_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        91991 => [[['_route' => 'api.user_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92086 => [[['_route' => 'api.user_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92169 => [[['_route' => 'api.user_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92261 => [
            [['_route' => 'api.version.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        92338 => [[['_route' => 'api.version.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        92421 => [[['_route' => 'api.version.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92509 => [[['_route' => 'api.version.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92585 => [[['_route' => 'api.version.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92685 => [
            [['_route' => 'api.version_commit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        92770 => [[['_route' => 'api.version_commit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        92861 => [[['_route' => 'api.version_commit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92957 => [[['_route' => 'api.version_commit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93041 => [[['_route' => 'api.version_commit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93147 => [
            [['_route' => 'api.version_commit_data.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit-data'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit-data'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit-data'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        93238 => [[['_route' => 'api.version_commit_data.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit-data'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        93335 => [[['_route' => 'api.version_commit_data.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93437 => [[['_route' => 'api.version_commit_data.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93527 => [[['_route' => 'api.version_commit_data.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93560 => [[['_route' => 'api.info.me', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::me'], ['version'], ['GET' => 0], null, false, false, null]],
        93574 => [[['_route' => 'api.info.ping', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::status'], ['version'], ['GET' => 0], null, false, false, null]],
        93604 => [[['_route' => 'api.user.delete', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUser'], ['version', 'userId'], ['DELETE' => 0], null, false, true, null]],
        93636 => [[['_route' => 'api.user_access_keys.delete', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserAccessKey'], ['version', 'userId', 'id'], ['DELETE' => 0], null, false, true, null]],
        93646 => [[['_route' => 'api.user.update', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertUser'], ['version', 'userId'], ['PATCH' => 0], null, false, true, null]],
        93657 => [[['_route' => 'api.user.create', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertUser'], ['version'], ['POST' => 0], null, false, false, null]],
        93718 => [[['_route' => 'sales-channel-api.category.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'category'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        93754 => [[['_route' => 'sales-channel-api.category.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'category'], ['version'], ['POST' => 0], null, false, false, null]],
        93778 => [[['_route' => 'sales-channel-api.category.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'category'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        93810 => [[['_route' => 'sales-channel-api.country.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'country'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        93845 => [[['_route' => 'sales-channel-api.country.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'country'], ['version'], ['POST' => 0], null, false, false, null]],
        93868 => [[['_route' => 'sales-channel-api.country.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'country'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        93907 => [[['_route' => 'sales-channel-api.country_state.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'country-state'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        93949 => [[['_route' => 'sales-channel-api.country_state.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'country-state'], ['version'], ['POST' => 0], null, false, false, null]],
        93979 => [[['_route' => 'sales-channel-api.country_state.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'country-state'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94012 => [[['_route' => 'sales-channel-api.currency.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'currency'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94048 => [[['_route' => 'sales-channel-api.currency.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'currency'], ['version'], ['POST' => 0], null, false, false, null]],
        94072 => [[['_route' => 'sales-channel-api.currency.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'currency'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94105 => [[['_route' => 'sales-channel-api.language.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'language'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94141 => [[['_route' => 'sales-channel-api.language.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'language'], ['version'], ['POST' => 0], null, false, false, null]],
        94165 => [[['_route' => 'sales-channel-api.language.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'language'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94204 => [[['_route' => 'sales-channel-api.main_category.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'main-category'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94246 => [[['_route' => 'sales-channel-api.main_category.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'main-category'], ['version'], ['POST' => 0], null, false, false, null]],
        94276 => [[['_route' => 'sales-channel-api.main_category.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'main-category'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94316 => [[['_route' => 'sales-channel-api.payment_method.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'payment-method'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94359 => [[['_route' => 'sales-channel-api.payment_method.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'payment-method'], ['version'], ['POST' => 0], null, false, false, null]],
        94390 => [[['_route' => 'sales-channel-api.payment_method.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'payment-method'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94422 => [[['_route' => 'sales-channel-api.product.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'product'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94457 => [[['_route' => 'sales-channel-api.product.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'product'], ['version'], ['POST' => 0], null, false, false, null]],
        94480 => [[['_route' => 'sales-channel-api.product.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'product'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94515 => [[['_route' => 'sales-channel-api.salutation.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'salutation'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94553 => [[['_route' => 'sales-channel-api.salutation.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'salutation'], ['version'], ['POST' => 0], null, false, false, null]],
        94579 => [[['_route' => 'sales-channel-api.salutation.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'salutation'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94612 => [[['_route' => 'sales-channel-api.seo_url.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'seo-url'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94648 => [[['_route' => 'sales-channel-api.seo_url.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'seo-url'], ['version'], ['POST' => 0], null, false, false, null]],
        94672 => [[['_route' => 'sales-channel-api.seo_url.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'seo-url'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94713 => [[['_route' => 'sales-channel-api.shipping_method.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'shipping-method'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94757 => [[['_route' => 'sales-channel-api.shipping_method.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'shipping-method'], ['version'], ['POST' => 0], null, false, false, null]],
        94789 => [
            [['_route' => 'sales-channel-api.shipping_method.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'shipping-method'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
