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
                            .'|(\\d+)/search/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12438)'
                            .'|(\\d+)/search\\-ids/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12532)'
                            .'|(\\d+)/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12614)'
                            .'|(\\d+)/custom\\-field\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:12717)'
                            .')'
                        .')'
                    .')'
                    .'|ccount/(?'
                        .'|order/(?'
                            .'|([^/]++)(*:12757)'
                            .'|cancel(*:12773)'
                            .'|edit/([^/]++)(*:12796)'
                            .'|payment/([^/]++)(*:12822)'
                            .'|update/([^/]++)(*:12847)'
                        .')'
                        .'|address/(?'
                            .'|([^/]++)(*:12877)'
                            .'|de(?'
                                .'|fault\\-([^/]++)/([^/]++)(*:12916)'
                                .'|lete/([^/]++)(*:12939)'
                            .')'
                            .'|create(*:12956)'
                            .'|([^/]++)(*:12974)'
                        .')'
                    .')'
                .')'
                .'|/s(?'
                    .'|ales\\-channel\\-api/v([^/]++)/(?'
                        .'|_info/(?'
                            .'|open(?'
                                .'|api3\\.json(*:13050)'
                                .'|\\-api\\-schema\\.json(*:13079)'
                            .')'
                            .'|swagger\\.html(*:13103)'
                        .')'
                        .'|c(?'
                            .'|ontext(?'
                                .'|(*:13127)'
                            .')'
                            .'|ms\\-page/([^/]++)(*:13155)'
                            .'|heckout/(?'
                                .'|cart(?'
                                    .'|(*:13183)'
                                    .'|/(?'
                                        .'|product/([^/]++)(*:13213)'
                                        .'|code/([^/]++)(*:13236)'
                                        .'|line\\-item(?'
                                            .'|/([^/]++)(?'
                                                .'|(*:13271)'
                                            .')'
                                            .'|s/delete(*:13290)'
                                        .')'
                                    .')'
                                    .'|(*:13302)'
                                .')'
                                .'|order(?'
                                    .'|(*:13321)'
                                    .'|/([^/]++)/pay(*:13344)'
                                .')'
                                .'|guest\\-order(?'
                                    .'|(*:13370)'
                                    .'|/([^/]++)(*:13389)'
                                .')'
                            .')'
                            .'|ustomer(?'
                                .'|/(?'
                                    .'|log(?'
                                        .'|in(*:13423)'
                                        .'|out(*:13436)'
                                    .')'
                                    .'|order(*:13452)'
                                    .'|email(*:13467)'
                                    .'|password(*:13485)'
                                    .'|address(?'
                                        .'|(*:13505)'
                                        .'|/([^/]++)(?'
                                            .'|(*:13527)'
                                            .'|/default\\-(?'
                                                .'|shipping(*:13558)'
                                                .'|billing(*:13575)'
                                            .')'
                                        .')'
                                        .'|(*:13587)'
                                    .')'
                                .')'
                                .'|(*:13599)'
                            .')'
                        .')'
                        .'|product/([^/]++)/cross\\-selling(*:13642)'
                        .'|newsletter/(?'
                            .'|subscribe(*:13675)'
                            .'|confirm(*:13692)'
                            .'|unsubscribe(*:13713)'
                        .')'
                    .')'
                    .'|tore\\-api/v([^/]++)/(?'
                        .'|_info/(?'
                            .'|open(?'
                                .'|api3\\.json(*:13774)'
                                .'|\\-api\\-schema\\.json(*:13803)'
                            .')'
                            .'|swagger\\.html(*:13827)'
                        .')'
                        .'|c(?'
                            .'|o(?'
                                .'|nt(?'
                                    .'|ext(?'
                                        .'|(*:13857)'
                                    .')'
                                    .'|act\\-form(*:13877)'
                                .')'
                                .'|untry(*:13893)'
                            .')'
                            .'|urrency(*:13911)'
                            .'|ategory/([^/]++)(*:13937)'
                            .'|ms/([^/]++)(*:13958)'
                            .'|heckout/(?'
                                .'|cart(?'
                                    .'|(*:13986)'
                                    .'|/line\\-item(?'
                                        .'|(*:14010)'
                                    .')'
                                    .'|(*:14021)'
                                .')'
                                .'|order(*:14037)'
                            .')'
                        .')'
                        .'|language(*:14057)'
                        .'|s(?'
                            .'|alutation(*:14080)'
                            .'|e(?'
                                .'|arch(?'
                                    .'|(*:14101)'
                                    .'|\\-suggest(*:14120)'
                                .')'
                                .'|o\\-url(*:14137)'
                            .')'
                            .'|hipping\\-method(*:14163)'
                        .')'
                        .'|n(?'
                            .'|avigation/([^/]++)/([^/]++)(*:14205)'
                            .'|ewsletter/(?'
                                .'|confirm(*:14235)'
                                .'|subscribe(*:14254)'
                                .'|unsubscribe(*:14275)'
                            .')'
                        .')'
                        .'|p(?'
                            .'|roduct\\-listing/([^/]++)(*:14315)'
                            .'|ayment\\-method(*:14339)'
                        .')'
                        .'|handle\\-payment(*:14365)'
                        .'|account/(?'
                            .'|c(?'
                                .'|hange\\-(?'
                                    .'|p(?'
                                        .'|rofile(*:14410)'
                                        .'|a(?'
                                            .'|ssword(*:14430)'
                                            .'|yment\\-method/([^/]++)(*:14462)'
                                        .')'
                                    .')'
                                    .'|email(*:14479)'
                                .')'
                                .'|ustomer(*:14497)'
                            .')'
                            .'|log(?'
                                .'|in(*:14516)'
                                .'|out(*:14529)'
                            .')'
                            .'|re(?'
                                .'|gister(?'
                                    .'|\\-confirm(*:14563)'
                                    .'|(*:14573)'
                                .')'
                                .'|covery\\-password(?'
                                    .'|\\-confirm(*:14612)'
                                    .'|(*:14622)'
                                .')'
                            .')'
                        .')'
                        .'|order(?'
                            .'|/(?'
                                .'|state/cancel(*:14659)'
                                .'|payment(*:14676)'
                            .')'
                            .'|(*:14687)'
                        .')'
                    .')'
                .')'
                .'|/widgets/(?'
                    .'|account/order/detail/([^/]++)(*:14741)'
                    .'|cms(?'
                        .'|(?:/([^/]++))?(*:14771)'
                        .'|/navigation(?'
                            .'|(?:/([^/]++))?(*:14809)'
                            .'|/([^/]++)/filter(*:14835)'
                        .')'
                    .')'
                .')'
                .'|/checkout/line\\-item/(?'
                    .'|delete/([^/]++)(*:14887)'
                    .'|change\\-quantity/([^/]++)(*:14922)'
                .')'
                .'|/maintenance/singlepage/([^/]++)(*:14965)'
                .'|/navigation/([^/]++)(*:14995)'
                .'|/detail/([^/]++)(?'
                    .'|(*:15024)'
                    .'|/switch(*:15041)'
                .')'
                .'|/quickview/([^/]++)(*:15071)'
                .'|/product/([^/]++)/r(?'
                    .'|ating(*:15108)'
                    .'|eviews(*:15124)'
                .')'
                .'|/export/([^/]++)/([^/]++)(*:15160)'
            .')/?$}sD',
        15160 => '{^(?'
                .'|/api/v(?'
                    .'|(\\d+)/custom\\-field\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:15266)'
                    .'|(\\d+)/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15353)'
                    .'|(\\d+)/search/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15447)'
                    .'|(\\d+)/search\\-ids/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15546)'
                    .'|(\\d+)/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15633)'
                    .'|(\\d+)/custom\\-field\\-set\\-relation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:15746)'
                    .')'
                    .'|(\\d+)/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15844)'
                    .'|(\\d+)/search/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15948)'
                    .'|(\\d+)/search\\-ids/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16057)'
                    .'|(\\d+)/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16154)'
                    .'|(\\d+)/customer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:16247)'
                    .')'
                    .'|(\\d+)/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16325)'
                    .'|(\\d+)/search/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16409)'
                    .'|(\\d+)/search\\-ids/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16498)'
                    .'|(\\d+)/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16575)'
                    .'|(\\d+)/customer\\-address/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:16677)'
                    .')'
                    .'|(\\d+)/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16764)'
                    .'|(\\d+)/search/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16857)'
                    .'|(\\d+)/search\\-ids/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16955)'
                    .'|(\\d+)/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17041)'
                    .'|(\\d+)/customer\\-group/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:17141)'
                    .')'
                    .'|(\\d+)/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17226)'
                    .'|(\\d+)/search/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17317)'
                    .'|(\\d+)/search\\-ids/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17413)'
                    .'|(\\d+)/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17497)'
                    .'|(\\d+)/customer\\-group\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:17610)'
                    .')'
                    .'|(\\d+)/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17708)'
                    .'|(\\d+)/search/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17812)'
                    .'|(\\d+)/search\\-ids/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17921)'
                    .'|(\\d+)/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18018)'
                    .'|(\\d+)/customer\\-recovery/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:18121)'
                    .')'
                    .'|(\\d+)/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18209)'
                    .'|(\\d+)/search/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18303)'
                    .'|(\\d+)/search\\-ids/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18402)'
                    .'|(\\d+)/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18489)'
                    .'|(\\d+)/customer\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:18587)'
                    .')'
                    .'|(\\d+)/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18670)'
                    .'|(\\d+)/search/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18759)'
                    .'|(\\d+)/search\\-ids/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18853)'
                    .'|(\\d+)/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18935)'
                    .'|(\\d+)/dead\\-message/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:19033)'
                    .')'
                    .'|(\\d+)/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19116)'
                    .'|(\\d+)/search/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19205)'
                    .'|(\\d+)/search\\-ids/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19299)'
                    .'|(\\d+)/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19381)'
                    .'|(\\d+)/delivery\\-time/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:19480)'
                    .')'
                    .'|(\\d+)/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19564)'
                    .'|(\\d+)/search/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19654)'
                    .'|(\\d+)/search\\-ids/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19749)'
                    .'|(\\d+)/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19832)'
                    .'|(\\d+)/delivery\\-time\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:19944)'
                    .')'
                    .'|(\\d+)/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20041)'
                    .'|(\\d+)/search/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20144)'
                    .'|(\\d+)/search\\-ids/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20252)'
                    .'|(\\d+)/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20348)'
                    .'|(\\d+)/document/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:20441)'
                    .')'
                    .'|(\\d+)/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20519)'
                    .'|(\\d+)/search/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20603)'
                    .'|(\\d+)/search\\-ids/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20692)'
                    .'|(\\d+)/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20769)'
                    .'|(\\d+)/document\\-base\\-config/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:20876)'
                    .')'
                    .'|(\\d+)/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20968)'
                    .'|(\\d+)/search/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21066)'
                    .'|(\\d+)/search\\-ids/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21169)'
                    .'|(\\d+)/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21260)'
                    .'|(\\d+)/document\\-base\\-config\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:21383)'
                    .')'
                    .'|(\\d+)/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21491)'
                    .'|(\\d+)/search/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21605)'
                    .'|(\\d+)/search\\-ids/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21724)'
                    .'|(\\d+)/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21831)'
                    .'|(\\d+)/document\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:21930)'
                    .')'
                    .'|(\\d+)/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22014)'
                    .'|(\\d+)/search/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22104)'
                    .'|(\\d+)/search\\-ids/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22199)'
                    .'|(\\d+)/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22282)'
                    .'|(\\d+)/document\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:22394)'
                    .')'
                    .'|(\\d+)/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22491)'
                    .'|(\\d+)/search/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22594)'
                    .'|(\\d+)/search\\-ids/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22702)'
                    .'|(\\d+)/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22798)'
                    .'|(\\d+)/event\\-action/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:22896)'
                    .')'
                    .'|(\\d+)/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22979)'
                    .'|(\\d+)/search/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23068)'
                    .'|(\\d+)/search\\-ids/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23162)'
                    .'|(\\d+)/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23244)'
                    .'|(\\d+)/import\\-export\\-file/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:23349)'
                    .')'
                    .'|(\\d+)/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23439)'
                    .'|(\\d+)/search/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23535)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23636)'
                    .'|(\\d+)/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23725)'
                    .'|(\\d+)/import\\-export\\-log/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:23829)'
                    .')'
                    .'|(\\d+)/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23918)'
                    .'|(\\d+)/search/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24013)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24113)'
                    .'|(\\d+)/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24201)'
                    .'|(\\d+)/import\\-export\\-profile/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:24309)'
                    .')'
                    .'|(\\d+)/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24402)'
                    .'|(\\d+)/search/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24501)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24605)'
                    .'|(\\d+)/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24697)'
                    .'|(\\d+)/import\\-export\\-profile\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:24818)'
                    .')'
                    .'|(\\d+)/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24924)'
                    .'|(\\d+)/search/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25036)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25153)'
                    .'|(\\d+)/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25258)'
                    .'|(\\d+)/integration/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:25354)'
                    .')'
                    .'|(\\d+)/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25435)'
                    .'|(\\d+)/search/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25522)'
                    .'|(\\d+)/search\\-ids/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25614)'
                    .'|(\\d+)/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25694)'
                    .'|(\\d+)/language/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:25787)'
                    .')'
                    .'|(\\d+)/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25865)'
                    .'|(\\d+)/search/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25949)'
                    .'|(\\d+)/search\\-ids/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26038)'
                    .'|(\\d+)/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26115)'
                    .'|(\\d+)/locale/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:26206)'
                    .')'
                    .'|(\\d+)/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26282)'
                    .'|(\\d+)/search/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26364)'
                    .'|(\\d+)/search\\-ids/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26451)'
                    .'|(\\d+)/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26526)'
                    .'|(\\d+)/locale\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:26630)'
                    .')'
                    .'|(\\d+)/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26719)'
                    .'|(\\d+)/search/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26814)'
                    .'|(\\d+)/search\\-ids/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26914)'
                    .'|(\\d+)/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27002)'
                    .'|(\\d+)/log\\-entry/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:27097)'
                    .')'
                    .'|(\\d+)/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27177)'
                    .'|(\\d+)/search/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27263)'
                    .'|(\\d+)/search\\-ids/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27354)'
                    .'|(\\d+)/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27433)'
                    .'|(\\d+)/mail\\-header\\-footer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:27538)'
                    .')'
                    .'|(\\d+)/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27628)'
                    .'|(\\d+)/search/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27724)'
                    .'|(\\d+)/search\\-ids/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27825)'
                    .'|(\\d+)/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27914)'
                    .'|(\\d+)/mail\\-header\\-footer\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:28032)'
                    .')'
                    .'|(\\d+)/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28135)'
                    .'|(\\d+)/search/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28244)'
                    .'|(\\d+)/search\\-ids/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28358)'
                    .'|(\\d+)/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28460)'
                    .'|(\\d+)/mail\\-template/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:28559)'
                    .')'
                    .'|(\\d+)/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28643)'
                    .'|(\\d+)/search/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28733)'
                    .'|(\\d+)/search\\-ids/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28828)'
                    .'|(\\d+)/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28911)'
                    .'|(\\d+)/mail\\-template\\-media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:29017)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29108)'
                    .'|(\\d+)/search/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29205)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29307)'
                    .'|(\\d+)/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29397)'
                    .'|(\\d+)/mail\\-template\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:29512)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29612)'
                    .'|(\\d+)/search/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29718)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29829)'
                    .'|(\\d+)/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29928)'
                    .'|(\\d+)/mail\\-template\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:30040)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30137)'
                    .'|(\\d+)/search/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30240)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30348)'
                    .'|(\\d+)/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30444)'
                    .'|(\\d+)/mail\\-template\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:30549)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30639)'
                    .'|(\\d+)/search/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30735)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30836)'
                    .'|(\\d+)/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30925)'
                    .'|(\\d+)/mail\\-template\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:31043)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31146)'
                    .'|(\\d+)/search/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31255)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31369)'
                    .'|(\\d+)/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31471)'
                    .'|(\\d+)/main\\-category/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:31570)'
                    .')'
                    .'|(\\d+)/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31654)'
                    .'|(\\d+)/search/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31744)'
                    .'|(\\d+)/search\\-ids/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31839)'
                    .'|(\\d+)/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31922)'
                    .'|(\\d+)/media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:32012)'
                    .')'
                    .'|(\\d+)/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32087)'
                    .'|(\\d+)/search/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32168)'
                    .'|(\\d+)/search\\-ids/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32254)'
                    .'|(\\d+)/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32328)'
                    .'|(\\d+)/media\\-default\\-folder/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:32435)'
                    .')'
                    .'|(\\d+)/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32527)'
                    .'|(\\d+)/search/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32625)'
                    .'|(\\d+)/search\\-ids/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32728)'
                    .'|(\\d+)/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32819)'
                    .'|(\\d+)/media\\-folder/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:32917)'
                    .')'
                    .'|(\\d+)/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33000)'
                    .'|(\\d+)/search/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33089)'
                    .'|(\\d+)/search\\-ids/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33183)'
                    .'|(\\d+)/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33265)'
                    .'|(\\d+)/media\\-folder\\-configuration/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:33378)'
                    .')'
                    .'|(\\d+)/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33476)'
                    .'|(\\d+)/search/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33580)'
                    .'|(\\d+)/search\\-ids/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33689)'
                    .'|(\\d+)/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33786)'
                    .'|(\\d+)/media\\-folder\\-configuration\\-media\\-thumbnail\\-size/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:33923)'
                    .')'
                    .'|(\\d+)/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34045)'
                    .'|(\\d+)/search/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34173)'
                    .'|(\\d+)/search\\-ids/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34306)'
                    .'|(\\d+)/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34427)'
                    .'|(\\d+)/media\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:34522)'
                    .')'
                    .'|(\\d+)/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34602)'
                    .'|(\\d+)/search/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34688)'
                    .'|(\\d+)/search\\-ids/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34779)'
                    .'|(\\d+)/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34858)'
                    .'|(\\d+)/media\\-thumbnail/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:34959)'
                    .')'
                    .'|(\\d+)/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35045)'
                    .'|(\\d+)/search/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35137)'
                    .'|(\\d+)/search\\-ids/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35234)'
                    .'|(\\d+)/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35319)'
                    .'|(\\d+)/media\\-thumbnail\\-size/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:35426)'
                    .')'
                    .'|(\\d+)/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35518)'
                    .'|(\\d+)/search/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35616)'
                    .'|(\\d+)/search\\-ids/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35719)'
                    .'|(\\d+)/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35810)'
                    .'|(\\d+)/media\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:35913)'
                    .')'
                    .'|(\\d+)/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36001)'
                    .'|(\\d+)/search/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36095)'
                    .'|(\\d+)/search\\-ids/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36194)'
                    .'|(\\d+)/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36281)'
                    .'|(\\d+)/message\\-queue\\-stats/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:36387)'
                    .')'
                    .'|(\\d+)/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36478)'
                    .'|(\\d+)/search/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36575)'
                    .'|(\\d+)/search\\-ids/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36677)'
                    .'|(\\d+)/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36767)'
                    .'|(\\d+)/newsletter\\-recipient/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:36873)'
                    .')'
                    .'|(\\d+)/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36964)'
                    .'|(\\d+)/search/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37061)'
                    .'|(\\d+)/search\\-ids/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37163)'
                    .'|(\\d+)/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37253)'
                    .'|(\\d+)/newsletter\\-recipient\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:37364)'
                    .')'
                    .'|(\\d+)/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37460)'
                    .'|(\\d+)/search/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37562)'
                    .'|(\\d+)/search\\-ids/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37669)'
                    .'|(\\d+)/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37764)'
                    .'|(\\d+)/number\\-range/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:37862)'
                    .')'
                    .'|(\\d+)/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37945)'
                    .'|(\\d+)/search/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38034)'
                    .'|(\\d+)/search\\-ids/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38128)'
                    .'|(\\d+)/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38210)'
                    .'|(\\d+)/number\\-range\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:38324)'
                    .')'
                    .'|(\\d+)/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38423)'
                    .'|(\\d+)/search/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38528)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38638)'
                    .'|(\\d+)/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38736)'
                    .'|(\\d+)/number\\-range\\-state/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:38841)'
                    .')'
                    .'|(\\d+)/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38931)'
                    .'|(\\d+)/search/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39027)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39128)'
                    .'|(\\d+)/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39217)'
                    .'|(\\d+)/number\\-range\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:39328)'
                    .')'
                    .'|(\\d+)/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39424)'
                    .'|(\\d+)/search/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39526)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39633)'
                    .'|(\\d+)/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39728)'
                    .'|(\\d+)/number\\-range\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:39832)'
                    .')'
                    .'|(\\d+)/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39921)'
                    .'|(\\d+)/search/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40016)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40116)'
                    .'|(\\d+)/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40204)'
                    .'|(\\d+)/number\\-range\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:40321)'
                    .')'
                    .'|(\\d+)/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40423)'
                    .'|(\\d+)/search/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40531)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40644)'
                    .'|(\\d+)/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40745)'
                    .'|(\\d+)/order/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:40835)'
                    .')'
                    .'|(\\d+)/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40910)'
                    .'|(\\d+)/search/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40991)'
                    .'|(\\d+)/search\\-ids/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41077)'
                    .'|(\\d+)/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41151)'
                    .'|(\\d+)/order\\-address/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:41250)'
                    .')'
                    .'|(\\d+)/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41334)'
                    .'|(\\d+)/search/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41424)'
                    .'|(\\d+)/search\\-ids/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41519)'
                    .'|(\\d+)/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41602)'
                    .'|(\\d+)/order\\-customer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:41702)'
                    .')'
                    .'|(\\d+)/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41787)'
                    .'|(\\d+)/search/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41878)'
                    .'|(\\d+)/search\\-ids/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41974)'
                    .'|(\\d+)/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42058)'
                    .'|(\\d+)/order\\-delivery/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:42158)'
                    .')'
                .')'
            .')/?$}sD',
        42158 => '{^(?'
                .'|/api/v(?'
                    .'|(\\d+)/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42248)'
                    .'|(\\d+)/search/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42339)'
                    .'|(\\d+)/search\\-ids/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42435)'
                    .'|(\\d+)/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42519)'
                    .'|(\\d+)/order\\-delivery\\-position/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:42629)'
                    .')'
                    .'|(\\d+)/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42724)'
                    .'|(\\d+)/search/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42825)'
                    .'|(\\d+)/search\\-ids/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42931)'
                    .'|(\\d+)/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43025)'
                    .'|(\\d+)/order\\-line\\-item/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:43127)'
                    .')'
                    .'|(\\d+)/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43214)'
                    .'|(\\d+)/search/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43307)'
                    .'|(\\d+)/search\\-ids/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43405)'
                    .'|(\\d+)/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43491)'
                    .'|(\\d+)/order\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:43586)'
                    .')'
                    .'|(\\d+)/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43666)'
                    .'|(\\d+)/search/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43752)'
                    .'|(\\d+)/search\\-ids/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43843)'
                    .'|(\\d+)/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43922)'
                    .'|(\\d+)/order\\-transaction/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:44025)'
                    .')'
                    .'|(\\d+)/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44113)'
                    .'|(\\d+)/search/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44207)'
                    .'|(\\d+)/search\\-ids/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44306)'
                    .'|(\\d+)/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44393)'
                    .'|(\\d+)/payment\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:44493)'
                    .')'
                    .'|(\\d+)/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44578)'
                    .'|(\\d+)/search/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44669)'
                    .'|(\\d+)/search\\-ids/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44765)'
                    .'|(\\d+)/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44849)'
                    .'|(\\d+)/payment\\-method\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:44962)'
                    .')'
                    .'|(\\d+)/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45060)'
                    .'|(\\d+)/search/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45164)'
                    .'|(\\d+)/search\\-ids/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45273)'
                    .'|(\\d+)/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45370)'
                    .'|(\\d+)/payone\\-payment\\-card/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:45476)'
                    .')'
                    .'|(\\d+)/payone\\-payment\\-card((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45567)'
                    .'|(\\d+)/search/payone\\-payment\\-card((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45664)'
                    .'|(\\d+)/search\\-ids/payone\\-payment\\-card((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45766)'
                    .'|(\\d+)/payone\\-payment\\-card((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45856)'
                    .'|(\\d+)/payone\\-payment\\-mandate/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:45965)'
                    .')'
                    .'|(\\d+)/payone\\-payment\\-mandate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46059)'
                    .'|(\\d+)/search/payone\\-payment\\-mandate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46159)'
                    .'|(\\d+)/search\\-ids/payone\\-payment\\-mandate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46264)'
                    .'|(\\d+)/payone\\-payment\\-mandate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46357)'
                    .'|(\\d+)/plugin/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:46448)'
                    .')'
                    .'|(\\d+)/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46524)'
                    .'|(\\d+)/search/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46606)'
                    .'|(\\d+)/search\\-ids/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46693)'
                    .'|(\\d+)/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46768)'
                    .'|(\\d+)/plugin\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:46872)'
                    .')'
                    .'|(\\d+)/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46961)'
                    .'|(\\d+)/search/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47056)'
                    .'|(\\d+)/search\\-ids/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47156)'
                    .'|(\\d+)/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47244)'
                    .'|(\\d+)/product/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:47336)'
                    .')'
                    .'|(\\d+)/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47413)'
                    .'|(\\d+)/search/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47496)'
                    .'|(\\d+)/search\\-ids/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47584)'
                    .'|(\\d+)/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47660)'
                    .'|(\\d+)/product\\-category/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:47762)'
                    .')'
                    .'|(\\d+)/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47849)'
                    .'|(\\d+)/search/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47942)'
                    .'|(\\d+)/search\\-ids/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48040)'
                    .'|(\\d+)/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48126)'
                    .'|(\\d+)/product\\-category\\-tree/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:48234)'
                    .')'
                    .'|(\\d+)/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48327)'
                    .'|(\\d+)/search/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48426)'
                    .'|(\\d+)/search\\-ids/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48530)'
                    .'|(\\d+)/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48622)'
                    .'|(\\d+)/product\\-configurator\\-setting/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:48737)'
                    .')'
                    .'|(\\d+)/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48837)'
                    .'|(\\d+)/search/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48943)'
                    .'|(\\d+)/search\\-ids/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49054)'
                    .'|(\\d+)/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49153)'
                    .'|(\\d+)/product\\-cross\\-selling/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:49261)'
                    .')'
                    .'|(\\d+)/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49354)'
                    .'|(\\d+)/search/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49453)'
                    .'|(\\d+)/search\\-ids/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49557)'
                    .'|(\\d+)/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49649)'
                    .'|(\\d+)/product\\-cross\\-selling\\-assigned\\-products/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:49777)'
                    .')'
                    .'|(\\d+)/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49890)'
                    .'|(\\d+)/search/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50009)'
                    .'|(\\d+)/search\\-ids/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50133)'
                    .'|(\\d+)/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50245)'
                    .'|(\\d+)/product\\-cross\\-selling\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:50366)'
                    .')'
                    .'|(\\d+)/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50472)'
                    .'|(\\d+)/search/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50584)'
                    .'|(\\d+)/search\\-ids/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50701)'
                    .'|(\\d+)/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50806)'
                    .'|(\\d+)/product\\-custom\\-field\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:50918)'
                    .')'
                    .'|(\\d+)/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51015)'
                    .'|(\\d+)/search/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51118)'
                    .'|(\\d+)/search\\-ids/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51226)'
                    .'|(\\d+)/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51322)'
                    .'|(\\d+)/product\\-export/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:51422)'
                    .')'
                    .'|(\\d+)/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51507)'
                    .'|(\\d+)/search/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51598)'
                    .'|(\\d+)/search\\-ids/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51694)'
                    .'|(\\d+)/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51778)'
                    .'|(\\d+)/product\\-keyword\\-dictionary/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:51891)'
                    .')'
                    .'|(\\d+)/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51989)'
                    .'|(\\d+)/search/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52093)'
                    .'|(\\d+)/search\\-ids/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52202)'
                    .'|(\\d+)/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52299)'
                    .'|(\\d+)/product\\-manufacturer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:52405)'
                    .')'
                    .'|(\\d+)/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52496)'
                    .'|(\\d+)/search/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52593)'
                    .'|(\\d+)/search\\-ids/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52695)'
                    .'|(\\d+)/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52785)'
                    .'|(\\d+)/product\\-manufacturer\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:52904)'
                    .')'
                    .'|(\\d+)/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53008)'
                    .'|(\\d+)/search/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53118)'
                    .'|(\\d+)/search\\-ids/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53233)'
                    .'|(\\d+)/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53336)'
                    .'|(\\d+)/product\\-media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:53435)'
                    .')'
                    .'|(\\d+)/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53519)'
                    .'|(\\d+)/search/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53609)'
                    .'|(\\d+)/search\\-ids/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53704)'
                    .'|(\\d+)/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53787)'
                    .'|(\\d+)/product\\-option/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:53887)'
                    .')'
                    .'|(\\d+)/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53972)'
                    .'|(\\d+)/search/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54063)'
                    .'|(\\d+)/search\\-ids/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54159)'
                    .'|(\\d+)/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54243)'
                    .'|(\\d+)/product\\-price/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:54342)'
                    .')'
                    .'|(\\d+)/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54426)'
                    .'|(\\d+)/search/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54516)'
                    .'|(\\d+)/search\\-ids/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54611)'
                    .'|(\\d+)/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54694)'
                    .'|(\\d+)/product\\-property/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:54796)'
                    .')'
                    .'|(\\d+)/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54883)'
                    .'|(\\d+)/search/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54976)'
                    .'|(\\d+)/search\\-ids/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55074)'
                    .'|(\\d+)/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55160)'
                    .'|(\\d+)/product\\-review/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:55260)'
                    .')'
                    .'|(\\d+)/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55345)'
                    .'|(\\d+)/search/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55436)'
                    .'|(\\d+)/search\\-ids/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55532)'
                    .'|(\\d+)/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55616)'
                    .'|(\\d+)/product\\-search\\-keyword/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:55725)'
                    .')'
                    .'|(\\d+)/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55819)'
                    .'|(\\d+)/search/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55919)'
                    .'|(\\d+)/search\\-ids/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56024)'
                    .'|(\\d+)/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56117)'
                    .'|(\\d+)/product\\-stream/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:56217)'
                    .')'
                    .'|(\\d+)/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56302)'
                    .'|(\\d+)/search/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56393)'
                    .'|(\\d+)/search\\-ids/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56489)'
                    .'|(\\d+)/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56573)'
                    .'|(\\d+)/product\\-stream\\-filter/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:56681)'
                    .')'
                    .'|(\\d+)/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56774)'
                    .'|(\\d+)/search/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56873)'
                    .'|(\\d+)/search\\-ids/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56977)'
                    .'|(\\d+)/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57069)'
                    .'|(\\d+)/product\\-stream\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:57182)'
                    .')'
                    .'|(\\d+)/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57280)'
                    .'|(\\d+)/search/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57384)'
                    .'|(\\d+)/search\\-ids/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57493)'
                    .'|(\\d+)/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57590)'
                    .'|(\\d+)/product\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:57687)'
                    .')'
                    .'|(\\d+)/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57769)'
                    .'|(\\d+)/search/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57857)'
                    .'|(\\d+)/search\\-ids/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57950)'
                    .'|(\\d+)/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58031)'
                    .'|(\\d+)/product\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:58136)'
                    .')'
                    .'|(\\d+)/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58226)'
                    .'|(\\d+)/search/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58322)'
                    .'|(\\d+)/search\\-ids/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58423)'
                    .'|(\\d+)/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58512)'
                    .'|(\\d+)/product\\-visibility/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:58616)'
                    .')'
                    .'|(\\d+)/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58705)'
                    .'|(\\d+)/search/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58800)'
                    .'|(\\d+)/search\\-ids/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58900)'
                    .'|(\\d+)/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58988)'
                    .'|(\\d+)/promotion/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:59082)'
                    .')'
                    .'|(\\d+)/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59161)'
                    .'|(\\d+)/search/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59246)'
                    .'|(\\d+)/search\\-ids/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59336)'
                    .'|(\\d+)/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59414)'
                    .'|(\\d+)/promotion\\-cart\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:59520)'
                    .')'
                    .'|(\\d+)/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59611)'
                    .'|(\\d+)/search/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59708)'
                    .'|(\\d+)/search\\-ids/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59810)'
                    .'|(\\d+)/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59900)'
                    .'|(\\d+)/promotion\\-discount/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:60004)'
                    .')'
                    .'|(\\d+)/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60093)'
                    .'|(\\d+)/search/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60188)'
                    .'|(\\d+)/search\\-ids/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60288)'
                    .'|(\\d+)/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60376)'
                    .'|(\\d+)/promotion\\-discount\\-prices/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:60488)'
                    .')'
                    .'|(\\d+)/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60585)'
                    .'|(\\d+)/search/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60688)'
                    .'|(\\d+)/search\\-ids/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60796)'
                    .'|(\\d+)/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60892)'
                    .'|(\\d+)/promotion\\-discount\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:61002)'
                    .')'
                    .'|(\\d+)/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61097)'
                    .'|(\\d+)/search/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61198)'
                    .'|(\\d+)/search\\-ids/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61304)'
                    .'|(\\d+)/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61398)'
                    .'|(\\d+)/promotion\\-individual\\-code/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:61510)'
                    .')'
                    .'|(\\d+)/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61607)'
                    .'|(\\d+)/search/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61710)'
                    .'|(\\d+)/search\\-ids/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61818)'
                    .'|(\\d+)/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61914)'
                    .'|(\\d+)/promotion\\-order\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:62021)'
                    .')'
                    .'|(\\d+)/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62113)'
                    .'|(\\d+)/search/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62211)'
                    .'|(\\d+)/search\\-ids/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62314)'
                    .'|(\\d+)/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62405)'
                    .'|(\\d+)/promotion\\-persona\\-customer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:62518)'
                    .')'
                    .'|(\\d+)/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62616)'
                    .'|(\\d+)/search/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62720)'
                    .'|(\\d+)/search\\-ids/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62829)'
                    .'|(\\d+)/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62926)'
                    .'|(\\d+)/promotion\\-persona\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:63035)'
                    .')'
                    .'|(\\d+)/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63129)'
                    .'|(\\d+)/search/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63229)'
                    .'|(\\d+)/search\\-ids/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63334)'
                    .'|(\\d+)/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63427)'
                    .'|(\\d+)/promotion\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:63537)'
                    .')'
                    .'|(\\d+)/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63632)'
                    .'|(\\d+)/search/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63733)'
                    .'|(\\d+)/search\\-ids/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63839)'
                    .'|(\\d+)/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63933)'
                    .'|(\\d+)/promotion\\-setgroup/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:64037)'
                    .')'
                    .'|(\\d+)/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64126)'
                    .'|(\\d+)/search/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64221)'
                    .'|(\\d+)/search\\-ids/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64321)'
                    .'|(\\d+)/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64409)'
                    .'|(\\d+)/promotion\\-setgroup\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:64519)'
                    .')'
                    .'|(\\d+)/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64614)'
                    .'|(\\d+)/search/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64715)'
                    .'|(\\d+)/search\\-ids/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64821)'
                    .'|(\\d+)/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64915)'
                    .'|(\\d+)/promotion\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:65022)'
                    .')'
                    .'|(\\d+)/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65114)'
                    .'|(\\d+)/search/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65212)'
                    .'|(\\d+)/search\\-ids/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65315)'
                    .'|(\\d+)/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65406)'
                    .'|(\\d+)/property\\-group/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:65506)'
                    .')'
                    .'|(\\d+)/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65591)'
                    .'|(\\d+)/search/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65682)'
                    .'|(\\d+)/search\\-ids/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65778)'
                    .'|(\\d+)/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65862)'
                    .'|(\\d+)/property\\-group\\-option/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:65970)'
                    .')'
                    .'|(\\d+)/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66063)'
                    .'|(\\d+)/search/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66162)'
                    .'|(\\d+)/search\\-ids/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66266)'
                    .'|(\\d+)/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66358)'
                    .'|(\\d+)/property\\-group\\-option\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:66479)'
                    .')'
                    .'|(\\d+)/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66585)'
                    .'|(\\d+)/search/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66697)'
                    .'|(\\d+)/search\\-ids/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66814)'
                    .'|(\\d+)/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66919)'
                    .'|(\\d+)/property\\-group\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:67032)'
                    .')'
                    .'|(\\d+)/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67130)'
                    .'|(\\d+)/search/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67234)'
                    .'|(\\d+)/search\\-ids/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67343)'
                    .'|(\\d+)/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67440)'
                    .'|(\\d+)/rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:67529)'
                    .')'
                    .'|(\\d+)/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67603)'
                    .'|(\\d+)/search/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67683)'
                    .'|(\\d+)/search\\-ids/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67768)'
                    .'|(\\d+)/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67841)'
                    .'|(\\d+)/rule\\-condition/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:67941)'
                    .')'
                    .'|(\\d+)/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68026)'
                    .'|(\\d+)/search/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68117)'
                    .'|(\\d+)/search\\-ids/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68213)'
                    .'|(\\d+)/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68297)'
                    .'|(\\d+)/sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:68396)'
                    .')'
                    .'|(\\d+)/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68480)'
                    .'|(\\d+)/search/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68570)'
                    .'|(\\d+)/search\\-ids/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68665)'
                    .'|(\\d+)/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68748)'
                    .'|(\\d+)/sales\\-channel\\-analytics/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:68858)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68953)'
                    .'|(\\d+)/search/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69054)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69160)'
                    .'|(\\d+)/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69254)'
                    .'|(\\d+)/sales\\-channel\\-country/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:69362)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69455)'
                .')'
            .')/?$}sD',
        69455 => '{^(?'
                .'|/api/v(?'
                    .'|(\\d+)/search/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69560)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69664)'
                    .'|(\\d+)/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69756)'
                    .'|(\\d+)/sales\\-channel\\-currency/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:69865)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69959)'
                    .'|(\\d+)/search/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70059)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70164)'
                    .'|(\\d+)/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70257)'
                    .'|(\\d+)/sales\\-channel\\-domain/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:70364)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70456)'
                    .'|(\\d+)/search/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70554)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70657)'
                    .'|(\\d+)/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70748)'
                    .'|(\\d+)/sales\\-channel\\-language/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:70857)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70951)'
                    .'|(\\d+)/search/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71051)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71156)'
                    .'|(\\d+)/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71249)'
                    .'|(\\d+)/sales\\-channel\\-payment\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:71365)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71466)'
                    .'|(\\d+)/search/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71573)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71685)'
                    .'|(\\d+)/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71785)'
                    .'|(\\d+)/sales\\-channel\\-shipping\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:71902)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72004)'
                    .'|(\\d+)/search/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72112)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72225)'
                    .'|(\\d+)/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72326)'
                    .'|(\\d+)/sales\\-channel\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:72438)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72535)'
                    .'|(\\d+)/search/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72638)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72746)'
                    .'|(\\d+)/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72842)'
                    .'|(\\d+)/sales\\-channel\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:72947)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73037)'
                    .'|(\\d+)/search/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73133)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73234)'
                    .'|(\\d+)/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73323)'
                    .'|(\\d+)/sales\\-channel\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:73441)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73544)'
                    .'|(\\d+)/search/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73653)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73767)'
                    .'|(\\d+)/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73869)'
                    .'|(\\d+)/salutation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:73964)'
                    .')'
                    .'|(\\d+)/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74044)'
                    .'|(\\d+)/search/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74130)'
                    .'|(\\d+)/search\\-ids/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74221)'
                    .'|(\\d+)/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74300)'
                    .'|(\\d+)/salutation\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:74408)'
                    .')'
                    .'|(\\d+)/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74501)'
                    .'|(\\d+)/search/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74600)'
                    .'|(\\d+)/search\\-ids/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74704)'
                    .'|(\\d+)/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74796)'
                    .'|(\\d+)/scheduled\\-task/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:74896)'
                    .')'
                    .'|(\\d+)/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74981)'
                    .'|(\\d+)/search/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75072)'
                    .'|(\\d+)/search\\-ids/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75168)'
                    .'|(\\d+)/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75252)'
                    .'|(\\d+)/seo\\-url/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:75345)'
                    .')'
                    .'|(\\d+)/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75423)'
                    .'|(\\d+)/search/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75507)'
                    .'|(\\d+)/search\\-ids/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75596)'
                    .'|(\\d+)/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75673)'
                    .'|(\\d+)/seo\\-url\\-template/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:75776)'
                    .')'
                    .'|(\\d+)/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75864)'
                    .'|(\\d+)/search/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75958)'
                    .'|(\\d+)/search\\-ids/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76057)'
                    .'|(\\d+)/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76144)'
                    .'|(\\d+)/shipping\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:76245)'
                    .')'
                    .'|(\\d+)/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76331)'
                    .'|(\\d+)/search/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76423)'
                    .'|(\\d+)/search\\-ids/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76520)'
                    .'|(\\d+)/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76605)'
                    .'|(\\d+)/shipping\\-method\\-price/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:76713)'
                    .')'
                    .'|(\\d+)/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76806)'
                    .'|(\\d+)/search/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76905)'
                    .'|(\\d+)/search\\-ids/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77009)'
                    .'|(\\d+)/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77101)'
                    .'|(\\d+)/shipping\\-method\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:77207)'
                    .')'
                    .'|(\\d+)/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77298)'
                    .'|(\\d+)/search/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77395)'
                    .'|(\\d+)/search\\-ids/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77497)'
                    .'|(\\d+)/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77587)'
                    .'|(\\d+)/shipping\\-method\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:77701)'
                    .')'
                    .'|(\\d+)/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77800)'
                    .'|(\\d+)/search/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77905)'
                    .'|(\\d+)/search\\-ids/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78015)'
                    .'|(\\d+)/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78113)'
                    .'|(\\d+)/snippet/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:78205)'
                    .')'
                    .'|(\\d+)/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78282)'
                    .'|(\\d+)/search/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78365)'
                    .'|(\\d+)/search\\-ids/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78453)'
                    .'|(\\d+)/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78529)'
                    .'|(\\d+)/snippet\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:78626)'
                    .')'
                    .'|(\\d+)/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78708)'
                    .'|(\\d+)/search/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78796)'
                    .'|(\\d+)/search\\-ids/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78889)'
                    .'|(\\d+)/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78970)'
                    .'|(\\d+)/state\\-machine/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:79069)'
                    .')'
                    .'|(\\d+)/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79153)'
                    .'|(\\d+)/search/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79243)'
                    .'|(\\d+)/search\\-ids/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79338)'
                    .'|(\\d+)/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79421)'
                    .'|(\\d+)/state\\-machine\\-history/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:79529)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79622)'
                    .'|(\\d+)/search/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79721)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79825)'
                    .'|(\\d+)/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79917)'
                    .'|(\\d+)/state\\-machine\\-state/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:80023)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80114)'
                    .'|(\\d+)/search/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80211)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80313)'
                    .'|(\\d+)/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80403)'
                    .'|(\\d+)/state\\-machine\\-state\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:80522)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80626)'
                    .'|(\\d+)/search/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80736)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80851)'
                    .'|(\\d+)/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80954)'
                    .'|(\\d+)/state\\-machine\\-transition/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:81065)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81161)'
                    .'|(\\d+)/search/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81263)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81370)'
                    .'|(\\d+)/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81465)'
                    .'|(\\d+)/state\\-machine\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:81577)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81674)'
                    .'|(\\d+)/search/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81777)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81885)'
                    .'|(\\d+)/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81981)'
                    .'|(\\d+)/swag\\-migration\\-connection/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:82093)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-connection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82190)'
                    .'|(\\d+)/search/swag\\-migration\\-connection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82293)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-connection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82401)'
                    .'|(\\d+)/swag\\-migration\\-connection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82497)'
                    .'|(\\d+)/swag\\-migration\\-data/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:82603)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82694)'
                    .'|(\\d+)/search/swag\\-migration\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82791)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82893)'
                    .'|(\\d+)/swag\\-migration\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82983)'
                    .'|(\\d+)/swag\\-migration\\-general\\-setting/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:83101)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-general\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83204)'
                    .'|(\\d+)/search/swag\\-migration\\-general\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83313)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-general\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83427)'
                    .'|(\\d+)/swag\\-migration\\-general\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83529)'
                    .'|(\\d+)/swag\\-migration\\-logging/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:83638)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-logging((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83732)'
                    .'|(\\d+)/search/swag\\-migration\\-logging((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83832)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-logging((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83937)'
                    .'|(\\d+)/swag\\-migration\\-logging((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84030)'
                    .'|(\\d+)/swag\\-migration\\-mapping/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:84139)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84233)'
                    .'|(\\d+)/search/swag\\-migration\\-mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84333)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84438)'
                    .'|(\\d+)/swag\\-migration\\-mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84531)'
                    .'|(\\d+)/swag\\-migration\\-media\\-file/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:84644)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-media\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84742)'
                    .'|(\\d+)/search/swag\\-migration\\-media\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84846)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-media\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84955)'
                    .'|(\\d+)/swag\\-migration\\-media\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85052)'
                    .'|(\\d+)/swag\\-migration\\-run/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:85157)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-run((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85247)'
                    .'|(\\d+)/search/swag\\-migration\\-run((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85343)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-run((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85444)'
                    .'|(\\d+)/swag\\-migration\\-run((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85533)'
                    .'|(\\d+)/system\\-config/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:85632)'
                    .')'
                    .'|(\\d+)/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85716)'
                    .'|(\\d+)/search/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85806)'
                    .'|(\\d+)/search\\-ids/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85901)'
                    .'|(\\d+)/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85984)'
                    .'|(\\d+)/tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:86072)'
                    .')'
                    .'|(\\d+)/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86145)'
                    .'|(\\d+)/search/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86224)'
                    .'|(\\d+)/search\\-ids/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86308)'
                    .'|(\\d+)/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86380)'
                    .'|(\\d+)/tax/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:86468)'
                    .')'
                    .'|(\\d+)/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86541)'
                    .'|(\\d+)/search/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86620)'
                    .'|(\\d+)/search\\-ids/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86704)'
                    .'|(\\d+)/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86776)'
                    .'|(\\d+)/tax\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:86870)'
                    .')'
                    .'|(\\d+)/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86949)'
                    .'|(\\d+)/search/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87034)'
                    .'|(\\d+)/search\\-ids/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87124)'
                    .'|(\\d+)/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87202)'
                    .'|(\\d+)/tax\\-rule\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:87302)'
                    .')'
                    .'|(\\d+)/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87387)'
                    .'|(\\d+)/search/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87478)'
                    .'|(\\d+)/search\\-ids/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87574)'
                    .'|(\\d+)/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87658)'
                    .'|(\\d+)/tax\\-rule\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:87771)'
                    .')'
                    .'|(\\d+)/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87869)'
                    .'|(\\d+)/search/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87973)'
                    .'|(\\d+)/search\\-ids/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88082)'
                    .'|(\\d+)/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88179)'
                    .'|(\\d+)/theme/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:88269)'
                    .')'
                    .'|(\\d+)/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88344)'
                    .'|(\\d+)/search/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88425)'
                    .'|(\\d+)/search\\-ids/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88511)'
                    .'|(\\d+)/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88585)'
                    .'|(\\d+)/theme\\-media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:88682)'
                    .')'
                    .'|(\\d+)/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88764)'
                    .'|(\\d+)/search/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88852)'
                    .'|(\\d+)/search\\-ids/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88945)'
                    .'|(\\d+)/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89026)'
                    .'|(\\d+)/theme\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:89132)'
                    .')'
                    .'|(\\d+)/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89223)'
                    .'|(\\d+)/search/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89320)'
                    .'|(\\d+)/search\\-ids/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89422)'
                    .'|(\\d+)/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89512)'
                    .'|(\\d+)/theme\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:89615)'
                    .')'
                    .'|(\\d+)/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89703)'
                    .'|(\\d+)/search/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89797)'
                    .'|(\\d+)/search\\-ids/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89896)'
                    .'|(\\d+)/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89983)'
                    .'|(\\d+)/unit/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:90072)'
                    .')'
                    .'|(\\d+)/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90146)'
                    .'|(\\d+)/search/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90226)'
                    .'|(\\d+)/search\\-ids/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90311)'
                    .'|(\\d+)/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90384)'
                    .'|(\\d+)/unit\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:90486)'
                    .')'
                    .'|(\\d+)/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90573)'
                    .'|(\\d+)/search/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90666)'
                    .'|(\\d+)/search\\-ids/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90764)'
                    .'|(\\d+)/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90850)'
                    .'|(\\d+)/user/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:90936)'
                    .'|(\\d+)/user((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91009)'
                    .'|(\\d+)/search/user((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91089)'
                    .'|(\\d+)/search\\-ids/user((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91174)'
                    .'|(\\d+)/user\\-access\\-key/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:91276)'
                    .')'
                    .'|(\\d+)/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91363)'
                    .'|(\\d+)/search/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91456)'
                    .'|(\\d+)/search\\-ids/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91554)'
                    .'|(\\d+)/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91640)'
                    .'|(\\d+)/user\\-recovery/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:91739)'
                    .')'
                    .'|(\\d+)/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91823)'
                    .'|(\\d+)/search/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91913)'
                    .'|(\\d+)/search\\-ids/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92008)'
                    .'|(\\d+)/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92091)'
                    .'|(\\d+)/version/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:92183)'
                    .')'
                    .'|(\\d+)/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92260)'
                    .'|(\\d+)/search/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92343)'
                    .'|(\\d+)/search\\-ids/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92431)'
                    .'|(\\d+)/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92507)'
                    .'|(\\d+)/version\\-commit/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:92607)'
                    .')'
                    .'|(\\d+)/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92692)'
                    .'|(\\d+)/search/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92783)'
                    .'|(\\d+)/search\\-ids/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92879)'
                    .'|(\\d+)/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92963)'
                    .'|(\\d+)/version\\-commit\\-data/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:93069)'
                    .')'
                    .'|(\\d+)/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93160)'
                    .'|(\\d+)/search/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93257)'
                    .'|(\\d+)/search\\-ids/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93359)'
                    .'|(\\d+)/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93449)'
                    .'|([^/]++)/(?'
                        .'|_info/(?'
                            .'|me(*:93482)'
                            .'|ping(*:93496)'
                        .')'
                        .'|user(?'
                            .'|/([^/]++)(?'
                                .'|(*:93526)'
                                .'|/access\\-keys/([^/]++)(*:93558)'
                                .'|(*:93568)'
                            .')'
                            .'|(*:93579)'
                        .')'
                    .')'
                .')'
                .'|/sales\\-channel\\-api/v(?'
                    .'|(\\d+)/category/([^/]++)(*:93640)'
                    .'|(\\d+)/search\\-ids/category(*:93676)'
                    .'|(\\d+)/category(*:93700)'
                    .'|(\\d+)/country/([^/]++)(*:93732)'
                    .'|(\\d+)/search\\-ids/country(*:93767)'
                    .'|(\\d+)/country(*:93790)'
                    .'|(\\d+)/country\\-state/([^/]++)(*:93829)'
                    .'|(\\d+)/search\\-ids/country\\-state(*:93871)'
                    .'|(\\d+)/country\\-state(*:93901)'
                    .'|(\\d+)/currency/([^/]++)(*:93934)'
                    .'|(\\d+)/search\\-ids/currency(*:93970)'
                    .'|(\\d+)/currency(*:93994)'
                    .'|(\\d+)/language/([^/]++)(*:94027)'
                    .'|(\\d+)/search\\-ids/language(*:94063)'
                    .'|(\\d+)/language(*:94087)'
                    .'|(\\d+)/main\\-category/([^/]++)(*:94126)'
                    .'|(\\d+)/search\\-ids/main\\-category(*:94168)'
                    .'|(\\d+)/main\\-category(*:94198)'
                    .'|(\\d+)/payment\\-method/([^/]++)(*:94238)'
                    .'|(\\d+)/search\\-ids/payment\\-method(*:94281)'
                    .'|(\\d+)/payment\\-method(*:94312)'
                    .'|(\\d+)/product/([^/]++)(*:94344)'
                    .'|(\\d+)/search\\-ids/product(*:94379)'
                    .'|(\\d+)/product(*:94402)'
                    .'|(\\d+)/salutation/([^/]++)(*:94437)'
                    .'|(\\d+)/search\\-ids/salutation(*:94475)'
                    .'|(\\d+)/salutation(*:94501)'
                    .'|(\\d+)/seo\\-url/([^/]++)(*:94534)'
                    .'|(\\d+)/search\\-ids/seo\\-url(*:94570)'
                    .'|(\\d+)/seo\\-url(*:94594)'
                    .'|(\\d+)/shipping\\-method/([^/]++)(*:94635)'
                    .'|(\\d+)/search\\-ids/shipping\\-method(*:94679)'
                    .'|(\\d+)/shipping\\-method(*:94711)'
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
        1600 => [[['_route' => 'api.info.openapi3', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::info'], ['version'], ['GET' => 0], null, false, false, null]],
        1628 => [[['_route' => 'api.info.open-api-schema', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::openApiSchema'], ['version'], ['GET' => 0], null, false, false, null]],
        1658 => [[['_route' => 'api.info.entity-schema', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::entitySchema'], ['version'], ['GET' => 0], null, false, false, null]],
        1680 => [[['_route' => 'api.info.swagger', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::infoHtml'], ['version'], ['GET' => 0], null, false, false, null]],
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
        12438 => [[['_route' => 'api.custom_field.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        12532 => [[['_route' => 'api.custom_field.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        12614 => [[['_route' => 'api.custom_field.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        12717 => [
            [['_route' => 'api.custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
        ],
        12757 => [[['_route' => 'frontend.account.order.single.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderSingleOverview'], ['deepLinkCode'], ['GET' => 0], null, false, true, null]],
        12773 => [[['_route' => 'frontend.account.order.cancel', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::cancelOrder'], [], ['POST' => 0], null, false, false, null]],
        12796 => [[['_route' => 'frontend.account.edit-order.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::editOrder'], ['orderId'], ['GET' => 0], null, false, true, null]],
        12822 => [[['_route' => 'frontend.account.edit-order.change-payment-method', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderChangePayment'], ['orderId'], ['POST' => 0], null, false, true, null]],
        12847 => [[['_route' => 'frontend.account.edit-order.update-order', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::updateOrder'], ['orderId'], ['POST' => 0], null, false, true, null]],
        12877 => [[['_route' => 'frontend.account.address.edit.page', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountEditAddress'], ['addressId'], ['GET' => 0], null, false, true, null]],
        12916 => [[['_route' => 'frontend.account.address.set-default-address', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::switchDefaultAddress'], ['type', 'addressId'], ['POST' => 0], null, false, true, null]],
        12939 => [[['_route' => 'frontend.account.address.delete', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::deleteAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        12956 => [[['_route' => 'frontend.account.address.create', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], [], ['POST' => 0], null, false, false, null]],
        12974 => [[['_route' => 'frontend.account.address.edit.save', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        13050 => [[['_route' => 'sales-channel-api.info.openapi3', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelApiSchemaController::info'], ['version'], ['GET' => 0], null, false, false, null]],
        13079 => [[['_route' => 'sales-channel-api.info.open-api-schema', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelApiSchemaController::openApiSchema'], ['version'], ['GET' => 0], null, false, false, null]],
        13103 => [[['_route' => 'sales-channel-api.info.swagger', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelApiSchemaController::infoHtml'], ['version'], ['GET' => 0], null, false, false, null]],
        13127 => [
            [['_route' => 'sales-channel-api.context.update', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelContextController::update'], ['version'], ['PATCH' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.context.get', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelContextController::getContext'], ['version'], ['GET' => 0], null, false, false, null],
        ],
        13155 => [[['_route' => 'sales-channel-api.cms.page', '_controller' => 'Shopware\\Core\\Content\\Cms\\SalesChannel\\SalesChannelCmsPageController::getPage'], ['version', 'pageId'], ['GET' => 0], null, false, true, null]],
        13183 => [
            [['_route' => 'sales-channel-api.checkout.cart.detail', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::getCart'], ['version'], ['GET' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.checkout.cart.create', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::createCart'], ['version'], ['POST' => 0], null, false, false, null],
        ],
        13213 => [[['_route' => 'sales-channel-api.checkout.frontend.cart.product.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::addProduct'], ['version', 'id'], ['POST' => 0], null, false, true, null]],
        13236 => [[['_route' => 'sales-channel-api.checkout.frontend.cart.code.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::addCode'], ['version', 'code'], ['POST' => 0], null, false, true, null]],
        13271 => [
            [['_route' => 'sales-channel-api.checkout.cart.line-item.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::addLineItem'], ['version', 'id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'sales-channel-api.checkout.cart.line-item.delete', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::removeLineItem'], ['version', 'id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sales-channel-api.checkout.cart.line-item.update', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::updateLineItem'], ['version', 'id'], ['PATCH' => 0], null, false, true, null],
        ],
        13290 => [[['_route' => 'sales-channel-api.checkout.cart.line-items.delete', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::removeLineItems'], ['version'], ['POST' => 0], null, false, false, null]],
        13302 => [[['_route' => 'sales-channel-api.checkout.cart.cancel', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::cancelCart'], ['version'], ['DELETE' => 0], null, false, false, null]],
        13321 => [[['_route' => 'sales-channel-api.checkout.order.create', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::createOrder'], ['version'], ['POST' => 0], null, false, false, null]],
        13344 => [[['_route' => 'sales-channel-api.checkout.order.pay', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::payOrder'], ['version', 'orderId'], ['POST' => 0], null, false, false, null]],
        13370 => [[['_route' => 'sales-channel-api.checkout.guest-order.create', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::createGuestOrder'], ['version'], ['POST' => 0], null, false, false, null]],
        13389 => [[['_route' => 'sales-channel-api.checkout.guest-order.detail', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::getDeepLinkOrder'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        13423 => [[['_route' => 'sales-channel-api.customer.login', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::login'], ['version'], ['POST' => 0], null, false, false, null]],
        13436 => [[['_route' => 'sales-channel-api.customer.logout', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::logout'], ['version'], ['POST' => 0], null, false, false, null]],
        13452 => [[['_route' => 'sales-channel-api.customer.order.list', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::orderList'], ['version'], ['GET' => 0], null, false, false, null]],
        13467 => [[['_route' => 'sales-channel-api.customer.email.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::saveEmail'], ['version'], ['PATCH' => 0], null, false, false, null]],
        13485 => [[['_route' => 'sales-channel-api.customer.password.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::savePassword'], ['version'], ['PATCH' => 0], null, false, false, null]],
        13505 => [[['_route' => 'sales-channel-api.customer.address.list', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::getAddresses'], ['version'], ['GET' => 0], null, false, false, null]],
        13527 => [
            [['_route' => 'sales-channel-api.customer.address.detail', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::getAddress'], ['version', 'id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sales-channel-api.customer.address.delete', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::deleteAddress'], ['version', 'id'], ['DELETE' => 0], null, false, true, null],
        ],
        13558 => [[['_route' => 'sales-channel-api.customer.address.set-default-shipping-address', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::setDefaultShippingAddress'], ['version', 'id'], ['PATCH' => 0], null, false, false, null]],
        13575 => [[['_route' => 'sales-channel-api.customer.address.set-default-billing-address', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::setDefaultBillingAddress'], ['version', 'id'], ['PATCH' => 0], null, false, false, null]],
        13587 => [[['_route' => 'sales-channel-api.customer.address.create', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::upsertAddress'], ['version'], ['POST' => 0, 'PATCH' => 1], null, false, false, null]],
        13599 => [
            [['_route' => 'sales-channel-api.customer.create', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::register'], ['version'], ['POST' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.customer.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::saveProfile'], ['version'], ['PATCH' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.customer.detail', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::getCustomerDetail'], ['version'], ['GET' => 0], null, false, false, null],
        ],
        13642 => [[['_route' => 'sales-channel-api.product.cross-selling', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\CrossSelling\\SalesChannelCrossSellingController::getCrossSelling'], ['version', 'id'], ['GET' => 0], null, false, false, null]],
        13675 => [[['_route' => 'sales-channel-api.newsletter.subscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\SalesChannelNewsletterController::subscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        13692 => [[['_route' => 'sales-channel-api.newsletter.confirm', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\SalesChannelNewsletterController::confirm'], ['version'], ['POST' => 0], null, false, false, null]],
        13713 => [[['_route' => 'sales-channel-api.newsletter.unsubscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\SalesChannelNewsletterController::unsubscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        13774 => [[['_route' => 'store-api.info.openapi3', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::info'], ['version'], ['GET' => 0], null, false, false, null]],
        13803 => [[['_route' => 'store-api.info.open-api-schema', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::openApiSchema'], ['version'], ['GET' => 0], null, false, false, null]],
        13827 => [[['_route' => 'store-api.info.swagger', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::infoHtml'], ['version'], ['GET' => 0], null, false, false, null]],
        13857 => [
            [['_route' => 'store-api.context', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\ContextRoute::load'], ['version'], ['GET' => 0], null, false, false, null],
            [['_route' => 'store-api.switch-context', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\ContextSwitchRoute::switchContext'], ['version'], ['PATCH' => 0], null, false, false, null],
        ],
        13877 => [[['_route' => 'store-api.contact.form', '_controller' => 'Shopware\\Core\\Content\\ContactForm\\SalesChannel\\ContactFormRoute::load'], ['version'], ['POST' => 0], null, false, false, null]],
        13893 => [[['_route' => 'store-api.country', '_controller' => 'Shopware\\Core\\System\\Country\\SalesChannel\\CountryRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13911 => [[['_route' => 'store-api.currency', '_controller' => 'Shopware\\Core\\System\\Currency\\SalesChannel\\CurrencyRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13937 => [[['_route' => 'store-api.category.detail', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\CategoryRoute::load'], ['version', 'navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        13958 => [[['_route' => 'store-api.cms.detail', '_controller' => 'Shopware\\Core\\Content\\Cms\\SalesChannel\\CmsRoute::load'], ['version', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        13986 => [[['_route' => 'store-api.checkout.cart.delete', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartDeleteRoute::delete'], ['version'], ['DELETE' => 0], null, false, false, null]],
        14010 => [
            [['_route' => 'store-api.checkout.cart.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemAddRoute::add'], ['version'], ['POST' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.remove-item', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemRemoveRoute::remove'], ['version'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.update-lineitem', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemUpdateRoute::change'], ['version'], ['PATCH' => 0], null, false, false, null],
        ],
        14021 => [[['_route' => 'store-api.checkout.cart.read', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartLoadRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14037 => [[['_route' => 'store-api.checkout.cart.order', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartOrderRoute::order'], ['version'], ['POST' => 0], null, false, false, null]],
        14057 => [[['_route' => 'store-api.language', '_controller' => 'Shopware\\Core\\System\\Language\\SalesChannel\\LanguageRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14080 => [[['_route' => 'store-api.salutation', '_controller' => 'Shopware\\Core\\System\\Salutation\\SalesChannel\\SalutationRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14101 => [[['_route' => 'store-api.search', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Search\\ProductSearchRoute::load'], ['version'], ['POST' => 0], null, false, false, null]],
        14120 => [[['_route' => 'store-api.search.suggest', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Suggest\\ProductSuggestRoute::load'], ['version'], ['POST' => 0], null, false, false, null]],
        14137 => [[['_route' => 'store-api.seo.url', '_controller' => 'Shopware\\Core\\Content\\Seo\\SalesChannel\\SeoUrlRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14163 => [[['_route' => 'store-api.shipping.method', '_controller' => 'Shopware\\Core\\Checkout\\Shipping\\SalesChannel\\ShippingMethodRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14205 => [[['_route' => 'store-api.navigation', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\NavigationRoute::load'], ['version', 'requestActiveId', 'requestRootId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        14235 => [[['_route' => 'store-api.newsletter.confirm', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterConfirmRoute::confirm'], ['version'], ['POST' => 0], null, false, false, null]],
        14254 => [[['_route' => 'store-api.newsletter.subscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::subscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        14275 => [[['_route' => 'store-api.newsletter.unsubscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterUnsubscribeRoute::unsubscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        14315 => [[['_route' => 'store-api.product.listing', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Listing\\ProductListingRoute::load'], ['version', 'categoryId'], ['POST' => 0], null, false, true, null]],
        14339 => [[['_route' => 'store-api.payment.method', '_controller' => 'Shopware\\Core\\Checkout\\Payment\\SalesChannel\\PaymentMethodRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14365 => [[['_route' => 'store-api.payment.handle', '_controller' => 'Shopware\\Core\\Checkout\\Payment\\SalesChannel\\HandlePaymentMethodRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14410 => [[['_route' => 'store-api.account.change-profile', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeCustomerProfileRoute::change'], ['version'], ['POST' => 0], null, false, false, null]],
        14430 => [[['_route' => 'store-api.account.change-password', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePasswordRoute::change'], ['version'], ['POST' => 0], null, false, false, null]],
        14462 => [[['_route' => 'store-api.account.set.payment-method', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePaymentMethodRoute::change'], ['version', 'paymentMethodId'], ['POST' => 0], null, false, true, null]],
        14479 => [[['_route' => 'store-api.account.change-email', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeEmailRoute::change'], ['version'], ['POST' => 0], null, false, false, null]],
        14497 => [[['_route' => 'store-api.account.customer', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerRoute::load'], ['version'], ['GET' => 0], null, false, false, null]],
        14516 => [[['_route' => 'store-api.account.login', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LoginRoute::login'], ['version'], ['POST' => 0], null, false, false, null]],
        14529 => [[['_route' => 'store-api.account.logout', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LogoutRoute::logout'], ['version'], ['POST' => 0], null, false, false, null]],
        14563 => [[['_route' => 'store-api.account.register.confirm', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RegisterConfirmRoute::confirm'], ['version'], ['POST' => 0], null, false, false, null]],
        14573 => [[['_route' => 'store-api.account.register', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RegisterRoute::register'], ['version'], ['POST' => 0], null, false, false, null]],
        14612 => [[['_route' => 'store-api.account.recovery.password', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ResetPasswordRoute::resetPassword'], ['version'], ['POST' => 0], null, false, false, null]],
        14622 => [[['_route' => 'store-api.account.recovery.send.mail', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SendPasswordRecoveryMailRoute::sendRecoveryMail'], ['version'], ['POST' => 0], null, false, false, null]],
        14659 => [[['_route' => 'store-api.order.state.cancel', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\CancelOrderRoute::cancel'], ['version'], ['POST' => 0], null, false, false, null]],
        14676 => [[['_route' => 'store-api.order.set-payment', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\SetPaymentOrderRoute::setPayment'], ['version'], ['POST' => 0], null, false, false, null]],
        14687 => [[['_route' => 'store-api.order', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\OrderRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14741 => [[['_route' => 'widgets.account.order.detail', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::ajaxOrderDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        14771 => [[['_route' => 'frontend.cms.page', 'id' => null, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::page'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        14809 => [[['_route' => 'frontend.cms.navigation.page', 'navigationId' => null, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::category'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        14835 => [[['_route' => 'frontend.cms.navigation.filter', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::filter'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14887 => [[['_route' => 'frontend.checkout.line-item.delete', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::deleteLineItem'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        14922 => [[['_route' => 'frontend.checkout.line-item.change-quantity', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::changeQuantity'], ['id'], ['POST' => 0], null, false, true, null]],
        14965 => [[['_route' => 'frontend.maintenance.singlepage', '_controller' => 'Shopware\\Storefront\\Controller\\MaintenanceController::renderSinglePage'], ['id'], ['GET' => 0], null, false, true, null]],
        14995 => [[['_route' => 'frontend.navigation.page', '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::index'], ['navigationId'], ['GET' => 0], null, false, true, null]],
        15024 => [[['_route' => 'frontend.detail.page', '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::index'], ['productId'], ['GET' => 0], null, false, true, null]],
        15041 => [[['_route' => 'frontend.detail.switch', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::switch'], ['productId'], ['GET' => 0], null, false, false, null]],
        15071 => [[['_route' => 'widgets.quickview.minimal', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::quickviewMinimal'], ['productId'], ['GET' => 0], null, false, true, null]],
        15108 => [[['_route' => 'frontend.detail.review.save', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::saveReview'], ['productId'], ['POST' => 0], null, false, false, null]],
        15124 => [[['_route' => 'frontend.product.reviews', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::loadReviews'], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        15160 => [[['_route' => 'frontend.export', '_controller' => 'Shopware\\Storefront\\Controller\\ProductExportController::index'], ['accessKey', 'fileName'], ['GET' => 0], null, false, true, null]],
        15266 => [[['_route' => 'api.custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set'], ['version', 'path'], ['DELETE' => 0], null, false, true, null]],
        15353 => [[['_route' => 'api.custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        15447 => [[['_route' => 'api.custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15546 => [[['_route' => 'api.custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15633 => [[['_route' => 'api.custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15746 => [
            [['_route' => 'api.custom_field_set_relation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        15844 => [[['_route' => 'api.custom_field_set_relation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        15948 => [[['_route' => 'api.custom_field_set_relation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16057 => [[['_route' => 'api.custom_field_set_relation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16154 => [[['_route' => 'api.custom_field_set_relation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16247 => [
            [['_route' => 'api.customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        16325 => [[['_route' => 'api.customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        16409 => [[['_route' => 'api.customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16498 => [[['_route' => 'api.customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16575 => [[['_route' => 'api.customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16677 => [
            [['_route' => 'api.customer_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-address'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-address'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-address'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        16764 => [[['_route' => 'api.customer_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-address'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        16857 => [[['_route' => 'api.customer_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16955 => [[['_route' => 'api.customer_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17041 => [[['_route' => 'api.customer_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17141 => [
            [['_route' => 'api.customer_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        17226 => [[['_route' => 'api.customer_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        17317 => [[['_route' => 'api.customer_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17413 => [[['_route' => 'api.customer_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17497 => [[['_route' => 'api.customer_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17610 => [
            [['_route' => 'api.customer_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        17708 => [[['_route' => 'api.customer_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        17812 => [[['_route' => 'api.customer_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17921 => [[['_route' => 'api.customer_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18018 => [[['_route' => 'api.customer_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18121 => [
            [['_route' => 'api.customer_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-recovery'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-recovery'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        18209 => [[['_route' => 'api.customer_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        18303 => [[['_route' => 'api.customer_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18402 => [[['_route' => 'api.customer_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18489 => [[['_route' => 'api.customer_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18587 => [
            [['_route' => 'api.customer_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        18670 => [[['_route' => 'api.customer_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        18759 => [[['_route' => 'api.customer_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18853 => [[['_route' => 'api.customer_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18935 => [[['_route' => 'api.customer_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19033 => [
            [['_route' => 'api.dead_message.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'dead-message'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.dead_message.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'dead-message'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.dead_message.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'dead-message'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        19116 => [[['_route' => 'api.dead_message.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'dead-message'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        19205 => [[['_route' => 'api.dead_message.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'dead-message'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19299 => [[['_route' => 'api.dead_message.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'dead-message'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19381 => [[['_route' => 'api.dead_message.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'dead-message'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19480 => [
            [['_route' => 'api.delivery_time.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        19564 => [[['_route' => 'api.delivery_time.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        19654 => [[['_route' => 'api.delivery_time.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19749 => [[['_route' => 'api.delivery_time.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19832 => [[['_route' => 'api.delivery_time.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19944 => [
            [['_route' => 'api.delivery_time_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        20041 => [[['_route' => 'api.delivery_time_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        20144 => [[['_route' => 'api.delivery_time_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20252 => [[['_route' => 'api.delivery_time_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20348 => [[['_route' => 'api.delivery_time_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20441 => [
            [['_route' => 'api.document.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        20519 => [[['_route' => 'api.document.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        20603 => [[['_route' => 'api.document.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20692 => [[['_route' => 'api.document.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20769 => [[['_route' => 'api.document.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20876 => [
            [['_route' => 'api.document_base_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        20968 => [[['_route' => 'api.document_base_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        21066 => [[['_route' => 'api.document_base_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21169 => [[['_route' => 'api.document_base_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21260 => [[['_route' => 'api.document_base_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21383 => [
            [['_route' => 'api.document_base_config_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        21491 => [[['_route' => 'api.document_base_config_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        21605 => [[['_route' => 'api.document_base_config_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21724 => [[['_route' => 'api.document_base_config_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21831 => [[['_route' => 'api.document_base_config_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21930 => [
            [['_route' => 'api.document_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        22014 => [[['_route' => 'api.document_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        22104 => [[['_route' => 'api.document_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22199 => [[['_route' => 'api.document_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22282 => [[['_route' => 'api.document_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22394 => [
            [['_route' => 'api.document_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        22491 => [[['_route' => 'api.document_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        22594 => [[['_route' => 'api.document_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22702 => [[['_route' => 'api.document_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22798 => [[['_route' => 'api.document_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22896 => [
            [['_route' => 'api.event_action.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'event-action'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.event_action.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'event-action'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.event_action.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'event-action'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        22979 => [[['_route' => 'api.event_action.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'event-action'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        23068 => [[['_route' => 'api.event_action.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'event-action'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23162 => [[['_route' => 'api.event_action.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'event-action'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23244 => [[['_route' => 'api.event_action.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'event-action'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23349 => [
            [['_route' => 'api.import_export_file.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-file'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-file'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-file'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        23439 => [[['_route' => 'api.import_export_file.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-file'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        23535 => [[['_route' => 'api.import_export_file.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23636 => [[['_route' => 'api.import_export_file.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23725 => [[['_route' => 'api.import_export_file.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23829 => [
            [['_route' => 'api.import_export_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-log'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-log'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-log'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        23918 => [[['_route' => 'api.import_export_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-log'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        24013 => [[['_route' => 'api.import_export_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-log'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24113 => [[['_route' => 'api.import_export_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-log'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24201 => [[['_route' => 'api.import_export_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-log'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24309 => [
            [['_route' => 'api.import_export_profile.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        24402 => [[['_route' => 'api.import_export_profile.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        24501 => [[['_route' => 'api.import_export_profile.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24605 => [[['_route' => 'api.import_export_profile.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24697 => [[['_route' => 'api.import_export_profile.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24818 => [
            [['_route' => 'api.import_export_profile_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        24924 => [[['_route' => 'api.import_export_profile_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        25036 => [[['_route' => 'api.import_export_profile_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25153 => [[['_route' => 'api.import_export_profile_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25258 => [[['_route' => 'api.import_export_profile_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25354 => [
            [['_route' => 'api.integration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'integration'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.integration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        25435 => [[['_route' => 'api.integration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        25522 => [[['_route' => 'api.integration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25614 => [[['_route' => 'api.integration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25694 => [[['_route' => 'api.integration.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'integration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25787 => [
            [['_route' => 'api.language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'language'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'language'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'language'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        25865 => [[['_route' => 'api.language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'language'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        25949 => [[['_route' => 'api.language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26038 => [[['_route' => 'api.language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26115 => [[['_route' => 'api.language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26206 => [
            [['_route' => 'api.locale.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        26282 => [[['_route' => 'api.locale.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        26364 => [[['_route' => 'api.locale.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26451 => [[['_route' => 'api.locale.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26526 => [[['_route' => 'api.locale.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26630 => [
            [['_route' => 'api.locale_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        26719 => [[['_route' => 'api.locale_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        26814 => [[['_route' => 'api.locale_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26914 => [[['_route' => 'api.locale_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27002 => [[['_route' => 'api.locale_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27097 => [
            [['_route' => 'api.log_entry.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'log-entry'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'log-entry'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'log-entry'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        27177 => [[['_route' => 'api.log_entry.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'log-entry'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        27263 => [[['_route' => 'api.log_entry.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'log-entry'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27354 => [[['_route' => 'api.log_entry.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'log-entry'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27433 => [[['_route' => 'api.log_entry.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'log-entry'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27538 => [
            [['_route' => 'api.mail_header_footer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        27628 => [[['_route' => 'api.mail_header_footer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        27724 => [[['_route' => 'api.mail_header_footer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27825 => [[['_route' => 'api.mail_header_footer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27914 => [[['_route' => 'api.mail_header_footer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28032 => [
            [['_route' => 'api.mail_header_footer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        28135 => [[['_route' => 'api.mail_header_footer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        28244 => [[['_route' => 'api.mail_header_footer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28358 => [[['_route' => 'api.mail_header_footer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28460 => [[['_route' => 'api.mail_header_footer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28559 => [
            [['_route' => 'api.mail_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        28643 => [[['_route' => 'api.mail_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        28733 => [[['_route' => 'api.mail_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28828 => [[['_route' => 'api.mail_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28911 => [[['_route' => 'api.mail_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29017 => [
            [['_route' => 'api.mail_template_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        29108 => [[['_route' => 'api.mail_template_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        29205 => [[['_route' => 'api.mail_template_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29307 => [[['_route' => 'api.mail_template_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29397 => [[['_route' => 'api.mail_template_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29512 => [
            [['_route' => 'api.mail_template_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        29612 => [[['_route' => 'api.mail_template_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        29718 => [[['_route' => 'api.mail_template_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29829 => [[['_route' => 'api.mail_template_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29928 => [[['_route' => 'api.mail_template_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30040 => [
            [['_route' => 'api.mail_template_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        30137 => [[['_route' => 'api.mail_template_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        30240 => [[['_route' => 'api.mail_template_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30348 => [[['_route' => 'api.mail_template_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30444 => [[['_route' => 'api.mail_template_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30549 => [
            [['_route' => 'api.mail_template_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        30639 => [[['_route' => 'api.mail_template_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        30735 => [[['_route' => 'api.mail_template_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30836 => [[['_route' => 'api.mail_template_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30925 => [[['_route' => 'api.mail_template_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31043 => [
            [['_route' => 'api.mail_template_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        31146 => [[['_route' => 'api.mail_template_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        31255 => [[['_route' => 'api.mail_template_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31369 => [[['_route' => 'api.mail_template_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31471 => [[['_route' => 'api.mail_template_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31570 => [
            [['_route' => 'api.main_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'main-category'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.main_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'main-category'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.main_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'main-category'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        31654 => [[['_route' => 'api.main_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'main-category'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        31744 => [[['_route' => 'api.main_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'main-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31839 => [[['_route' => 'api.main_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'main-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31922 => [[['_route' => 'api.main_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'main-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32012 => [
            [['_route' => 'api.media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        32087 => [[['_route' => 'api.media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        32168 => [[['_route' => 'api.media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32254 => [[['_route' => 'api.media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32328 => [[['_route' => 'api.media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32435 => [
            [['_route' => 'api.media_default_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-default-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-default-folder'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-default-folder'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        32527 => [[['_route' => 'api.media_default_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-default-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        32625 => [[['_route' => 'api.media_default_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-default-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32728 => [[['_route' => 'api.media_default_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-default-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32819 => [[['_route' => 'api.media_default_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-default-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32917 => [
            [['_route' => 'api.media_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        33000 => [[['_route' => 'api.media_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        33089 => [[['_route' => 'api.media_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33183 => [[['_route' => 'api.media_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33265 => [[['_route' => 'api.media_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33378 => [
            [['_route' => 'api.media_folder_configuration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        33476 => [[['_route' => 'api.media_folder_configuration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        33580 => [[['_route' => 'api.media_folder_configuration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33689 => [[['_route' => 'api.media_folder_configuration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33786 => [[['_route' => 'api.media_folder_configuration.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33923 => [
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        34045 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        34173 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34306 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34427 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34522 => [
            [['_route' => 'api.media_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        34602 => [[['_route' => 'api.media_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        34688 => [[['_route' => 'api.media_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34779 => [[['_route' => 'api.media_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34858 => [[['_route' => 'api.media_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34959 => [
            [['_route' => 'api.media_thumbnail.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        35045 => [[['_route' => 'api.media_thumbnail.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        35137 => [[['_route' => 'api.media_thumbnail.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35234 => [[['_route' => 'api.media_thumbnail.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35319 => [[['_route' => 'api.media_thumbnail.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35426 => [
            [['_route' => 'api.media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        35518 => [[['_route' => 'api.media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        35616 => [[['_route' => 'api.media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35719 => [[['_route' => 'api.media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35810 => [[['_route' => 'api.media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35913 => [
            [['_route' => 'api.media_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        36001 => [[['_route' => 'api.media_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        36095 => [[['_route' => 'api.media_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36194 => [[['_route' => 'api.media_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36281 => [[['_route' => 'api.media_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36387 => [
            [['_route' => 'api.message_queue_stats.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.message_queue_stats.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.message_queue_stats.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        36478 => [[['_route' => 'api.message_queue_stats.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        36575 => [[['_route' => 'api.message_queue_stats.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36677 => [[['_route' => 'api.message_queue_stats.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36767 => [[['_route' => 'api.message_queue_stats.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36873 => [
            [['_route' => 'api.newsletter_recipient.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        36964 => [[['_route' => 'api.newsletter_recipient.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        37061 => [[['_route' => 'api.newsletter_recipient.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37163 => [[['_route' => 'api.newsletter_recipient.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37253 => [[['_route' => 'api.newsletter_recipient.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37364 => [
            [['_route' => 'api.newsletter_recipient_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        37460 => [[['_route' => 'api.newsletter_recipient_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        37562 => [[['_route' => 'api.newsletter_recipient_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37669 => [[['_route' => 'api.newsletter_recipient_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37764 => [[['_route' => 'api.newsletter_recipient_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37862 => [
            [['_route' => 'api.number_range.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        37945 => [[['_route' => 'api.number_range.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        38034 => [[['_route' => 'api.number_range.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38128 => [[['_route' => 'api.number_range.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38210 => [[['_route' => 'api.number_range.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38324 => [
            [['_route' => 'api.number_range_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        38423 => [[['_route' => 'api.number_range_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        38528 => [[['_route' => 'api.number_range_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38638 => [[['_route' => 'api.number_range_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38736 => [[['_route' => 'api.number_range_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38841 => [
            [['_route' => 'api.number_range_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-state'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-state'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-state'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        38931 => [[['_route' => 'api.number_range_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-state'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        39027 => [[['_route' => 'api.number_range_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39128 => [[['_route' => 'api.number_range_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39217 => [[['_route' => 'api.number_range_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39328 => [
            [['_route' => 'api.number_range_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        39424 => [[['_route' => 'api.number_range_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        39526 => [[['_route' => 'api.number_range_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39633 => [[['_route' => 'api.number_range_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39728 => [[['_route' => 'api.number_range_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39832 => [
            [['_route' => 'api.number_range_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        39921 => [[['_route' => 'api.number_range_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        40016 => [[['_route' => 'api.number_range_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40116 => [[['_route' => 'api.number_range_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40204 => [[['_route' => 'api.number_range_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40321 => [
            [['_route' => 'api.number_range_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        40423 => [[['_route' => 'api.number_range_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        40531 => [[['_route' => 'api.number_range_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40644 => [[['_route' => 'api.number_range_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40745 => [[['_route' => 'api.number_range_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40835 => [
            [['_route' => 'api.order.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        40910 => [[['_route' => 'api.order.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        40991 => [[['_route' => 'api.order.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41077 => [[['_route' => 'api.order.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41151 => [[['_route' => 'api.order.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41250 => [
            [['_route' => 'api.order_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-address'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-address'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-address'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        41334 => [[['_route' => 'api.order_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-address'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        41424 => [[['_route' => 'api.order_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41519 => [[['_route' => 'api.order_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41602 => [[['_route' => 'api.order_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41702 => [
            [['_route' => 'api.order_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-customer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-customer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        41787 => [[['_route' => 'api.order_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        41878 => [[['_route' => 'api.order_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41974 => [[['_route' => 'api.order_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42058 => [[['_route' => 'api.order_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42158 => [
            [['_route' => 'api.order_delivery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        42248 => [[['_route' => 'api.order_delivery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        42339 => [[['_route' => 'api.order_delivery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42435 => [[['_route' => 'api.order_delivery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42519 => [[['_route' => 'api.order_delivery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42629 => [
            [['_route' => 'api.order_delivery_position.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        42724 => [[['_route' => 'api.order_delivery_position.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        42825 => [[['_route' => 'api.order_delivery_position.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42931 => [[['_route' => 'api.order_delivery_position.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43025 => [[['_route' => 'api.order_delivery_position.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43127 => [
            [['_route' => 'api.order_line_item.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-line-item'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-line-item'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-line-item'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        43214 => [[['_route' => 'api.order_line_item.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-line-item'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        43307 => [[['_route' => 'api.order_line_item.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-line-item'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43405 => [[['_route' => 'api.order_line_item.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-line-item'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43491 => [[['_route' => 'api.order_line_item.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-line-item'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43586 => [
            [['_route' => 'api.order_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        43666 => [[['_route' => 'api.order_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        43752 => [[['_route' => 'api.order_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43843 => [[['_route' => 'api.order_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43922 => [[['_route' => 'api.order_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44025 => [
            [['_route' => 'api.order_transaction.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        44113 => [[['_route' => 'api.order_transaction.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        44207 => [[['_route' => 'api.order_transaction.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44306 => [[['_route' => 'api.order_transaction.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44393 => [[['_route' => 'api.order_transaction.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44493 => [
            [['_route' => 'api.payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        44578 => [[['_route' => 'api.payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        44669 => [[['_route' => 'api.payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44765 => [[['_route' => 'api.payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44849 => [[['_route' => 'api.payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44962 => [
            [['_route' => 'api.payment_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        45060 => [[['_route' => 'api.payment_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        45164 => [[['_route' => 'api.payment_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45273 => [[['_route' => 'api.payment_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45370 => [[['_route' => 'api.payment_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45476 => [
            [['_route' => 'api.payone_payment_card.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payone_payment_card.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payone_payment_card.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        45567 => [[['_route' => 'api.payone_payment_card.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        45664 => [[['_route' => 'api.payone_payment_card.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45766 => [[['_route' => 'api.payone_payment_card.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45856 => [[['_route' => 'api.payone_payment_card.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45965 => [
            [['_route' => 'api.payone_payment_mandate.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payone_payment_mandate.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payone_payment_mandate.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        46059 => [[['_route' => 'api.payone_payment_mandate.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        46159 => [[['_route' => 'api.payone_payment_mandate.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46264 => [[['_route' => 'api.payone_payment_mandate.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46357 => [[['_route' => 'api.payone_payment_mandate.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46448 => [
            [['_route' => 'api.plugin.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        46524 => [[['_route' => 'api.plugin.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        46606 => [[['_route' => 'api.plugin.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46693 => [[['_route' => 'api.plugin.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46768 => [[['_route' => 'api.plugin.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46872 => [
            [['_route' => 'api.plugin_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        46961 => [[['_route' => 'api.plugin_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        47056 => [[['_route' => 'api.plugin_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47156 => [[['_route' => 'api.plugin_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47244 => [[['_route' => 'api.plugin_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47336 => [
            [['_route' => 'api.product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        47413 => [[['_route' => 'api.product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        47496 => [[['_route' => 'api.product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47584 => [[['_route' => 'api.product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47660 => [[['_route' => 'api.product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47762 => [
            [['_route' => 'api.product_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        47849 => [[['_route' => 'api.product_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        47942 => [[['_route' => 'api.product_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48040 => [[['_route' => 'api.product_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48126 => [[['_route' => 'api.product_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48234 => [
            [['_route' => 'api.product_category_tree.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category-tree'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category-tree'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category-tree'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        48327 => [[['_route' => 'api.product_category_tree.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category-tree'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        48426 => [[['_route' => 'api.product_category_tree.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category-tree'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48530 => [[['_route' => 'api.product_category_tree.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category-tree'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48622 => [[['_route' => 'api.product_category_tree.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category-tree'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48737 => [
            [['_route' => 'api.product_configurator_setting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        48837 => [[['_route' => 'api.product_configurator_setting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        48943 => [[['_route' => 'api.product_configurator_setting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49054 => [[['_route' => 'api.product_configurator_setting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49153 => [[['_route' => 'api.product_configurator_setting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49261 => [
            [['_route' => 'api.product_cross_selling.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        49354 => [[['_route' => 'api.product_cross_selling.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        49453 => [[['_route' => 'api.product_cross_selling.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49557 => [[['_route' => 'api.product_cross_selling.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49649 => [[['_route' => 'api.product_cross_selling.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49777 => [
            [['_route' => 'api.product_cross_selling_assigned_products.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        49890 => [[['_route' => 'api.product_cross_selling_assigned_products.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        50009 => [[['_route' => 'api.product_cross_selling_assigned_products.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50133 => [[['_route' => 'api.product_cross_selling_assigned_products.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50245 => [[['_route' => 'api.product_cross_selling_assigned_products.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50366 => [
            [['_route' => 'api.product_cross_selling_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        50472 => [[['_route' => 'api.product_cross_selling_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        50584 => [[['_route' => 'api.product_cross_selling_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50701 => [[['_route' => 'api.product_cross_selling_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50806 => [[['_route' => 'api.product_cross_selling_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50918 => [
            [['_route' => 'api.product_custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        51015 => [[['_route' => 'api.product_custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        51118 => [[['_route' => 'api.product_custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51226 => [[['_route' => 'api.product_custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51322 => [[['_route' => 'api.product_custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51422 => [
            [['_route' => 'api.product_export.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-export'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_export.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-export'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_export.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-export'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        51507 => [[['_route' => 'api.product_export.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-export'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        51598 => [[['_route' => 'api.product_export.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-export'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51694 => [[['_route' => 'api.product_export.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-export'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51778 => [[['_route' => 'api.product_export.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-export'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51891 => [
            [['_route' => 'api.product_keyword_dictionary.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        51989 => [[['_route' => 'api.product_keyword_dictionary.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        52093 => [[['_route' => 'api.product_keyword_dictionary.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52202 => [[['_route' => 'api.product_keyword_dictionary.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52299 => [[['_route' => 'api.product_keyword_dictionary.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52405 => [
            [['_route' => 'api.product_manufacturer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        52496 => [[['_route' => 'api.product_manufacturer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        52593 => [[['_route' => 'api.product_manufacturer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52695 => [[['_route' => 'api.product_manufacturer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52785 => [[['_route' => 'api.product_manufacturer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52904 => [
            [['_route' => 'api.product_manufacturer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        53008 => [[['_route' => 'api.product_manufacturer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        53118 => [[['_route' => 'api.product_manufacturer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53233 => [[['_route' => 'api.product_manufacturer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53336 => [[['_route' => 'api.product_manufacturer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53435 => [
            [['_route' => 'api.product_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        53519 => [[['_route' => 'api.product_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        53609 => [[['_route' => 'api.product_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53704 => [[['_route' => 'api.product_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53787 => [[['_route' => 'api.product_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53887 => [
            [['_route' => 'api.product_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-option'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-option'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-option'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        53972 => [[['_route' => 'api.product_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-option'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        54063 => [[['_route' => 'api.product_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54159 => [[['_route' => 'api.product_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54243 => [[['_route' => 'api.product_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54342 => [
            [['_route' => 'api.product_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-price'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-price'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-price'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        54426 => [[['_route' => 'api.product_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-price'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        54516 => [[['_route' => 'api.product_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54611 => [[['_route' => 'api.product_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54694 => [[['_route' => 'api.product_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54796 => [
            [['_route' => 'api.product_property.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-property'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_property.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-property'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_property.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-property'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        54883 => [[['_route' => 'api.product_property.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-property'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        54976 => [[['_route' => 'api.product_property.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-property'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55074 => [[['_route' => 'api.product_property.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-property'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55160 => [[['_route' => 'api.product_property.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-property'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55260 => [
            [['_route' => 'api.product_review.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-review'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_review.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-review'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_review.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-review'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        55345 => [[['_route' => 'api.product_review.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-review'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        55436 => [[['_route' => 'api.product_review.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-review'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55532 => [[['_route' => 'api.product_review.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-review'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55616 => [[['_route' => 'api.product_review.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-review'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55725 => [
            [['_route' => 'api.product_search_keyword.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        55819 => [[['_route' => 'api.product_search_keyword.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        55919 => [[['_route' => 'api.product_search_keyword.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56024 => [[['_route' => 'api.product_search_keyword.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56117 => [[['_route' => 'api.product_search_keyword.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56217 => [
            [['_route' => 'api.product_stream.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        56302 => [[['_route' => 'api.product_stream.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        56393 => [[['_route' => 'api.product_stream.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56489 => [[['_route' => 'api.product_stream.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56573 => [[['_route' => 'api.product_stream.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56681 => [
            [['_route' => 'api.product_stream_filter.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        56774 => [[['_route' => 'api.product_stream_filter.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        56873 => [[['_route' => 'api.product_stream_filter.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56977 => [[['_route' => 'api.product_stream_filter.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57069 => [[['_route' => 'api.product_stream_filter.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57182 => [
            [['_route' => 'api.product_stream_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        57280 => [[['_route' => 'api.product_stream_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        57384 => [[['_route' => 'api.product_stream_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57493 => [[['_route' => 'api.product_stream_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57590 => [[['_route' => 'api.product_stream_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57687 => [
            [['_route' => 'api.product_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        57769 => [[['_route' => 'api.product_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        57857 => [[['_route' => 'api.product_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57950 => [[['_route' => 'api.product_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58031 => [[['_route' => 'api.product_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58136 => [
            [['_route' => 'api.product_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        58226 => [[['_route' => 'api.product_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        58322 => [[['_route' => 'api.product_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58423 => [[['_route' => 'api.product_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58512 => [[['_route' => 'api.product_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58616 => [
            [['_route' => 'api.product_visibility.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-visibility'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-visibility'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-visibility'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        58705 => [[['_route' => 'api.product_visibility.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-visibility'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        58800 => [[['_route' => 'api.product_visibility.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-visibility'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58900 => [[['_route' => 'api.product_visibility.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-visibility'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58988 => [[['_route' => 'api.product_visibility.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-visibility'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59082 => [
            [['_route' => 'api.promotion.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        59161 => [[['_route' => 'api.promotion.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        59246 => [[['_route' => 'api.promotion.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59336 => [[['_route' => 'api.promotion.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59414 => [[['_route' => 'api.promotion.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59520 => [
            [['_route' => 'api.promotion_cart_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        59611 => [[['_route' => 'api.promotion_cart_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        59708 => [[['_route' => 'api.promotion_cart_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59810 => [[['_route' => 'api.promotion_cart_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59900 => [[['_route' => 'api.promotion_cart_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60004 => [
            [['_route' => 'api.promotion_discount.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        60093 => [[['_route' => 'api.promotion_discount.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        60188 => [[['_route' => 'api.promotion_discount.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60288 => [[['_route' => 'api.promotion_discount.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60376 => [[['_route' => 'api.promotion_discount.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60488 => [
            [['_route' => 'api.promotion_discount_prices.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        60585 => [[['_route' => 'api.promotion_discount_prices.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        60688 => [[['_route' => 'api.promotion_discount_prices.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60796 => [[['_route' => 'api.promotion_discount_prices.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60892 => [[['_route' => 'api.promotion_discount_prices.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61002 => [
            [['_route' => 'api.promotion_discount_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        61097 => [[['_route' => 'api.promotion_discount_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        61198 => [[['_route' => 'api.promotion_discount_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61304 => [[['_route' => 'api.promotion_discount_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61398 => [[['_route' => 'api.promotion_discount_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61510 => [
            [['_route' => 'api.promotion_individual_code.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        61607 => [[['_route' => 'api.promotion_individual_code.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        61710 => [[['_route' => 'api.promotion_individual_code.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61818 => [[['_route' => 'api.promotion_individual_code.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61914 => [[['_route' => 'api.promotion_individual_code.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62021 => [
            [['_route' => 'api.promotion_order_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        62113 => [[['_route' => 'api.promotion_order_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        62211 => [[['_route' => 'api.promotion_order_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62314 => [[['_route' => 'api.promotion_order_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62405 => [[['_route' => 'api.promotion_order_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62518 => [
            [['_route' => 'api.promotion_persona_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        62616 => [[['_route' => 'api.promotion_persona_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        62720 => [[['_route' => 'api.promotion_persona_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62829 => [[['_route' => 'api.promotion_persona_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62926 => [[['_route' => 'api.promotion_persona_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63035 => [
            [['_route' => 'api.promotion_persona_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        63129 => [[['_route' => 'api.promotion_persona_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        63229 => [[['_route' => 'api.promotion_persona_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63334 => [[['_route' => 'api.promotion_persona_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63427 => [[['_route' => 'api.promotion_persona_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63537 => [
            [['_route' => 'api.promotion_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        63632 => [[['_route' => 'api.promotion_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        63733 => [[['_route' => 'api.promotion_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63839 => [[['_route' => 'api.promotion_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63933 => [[['_route' => 'api.promotion_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64037 => [
            [['_route' => 'api.promotion_setgroup.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        64126 => [[['_route' => 'api.promotion_setgroup.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        64221 => [[['_route' => 'api.promotion_setgroup.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64321 => [[['_route' => 'api.promotion_setgroup.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64409 => [[['_route' => 'api.promotion_setgroup.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64519 => [
            [['_route' => 'api.promotion_setgroup_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        64614 => [[['_route' => 'api.promotion_setgroup_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        64715 => [[['_route' => 'api.promotion_setgroup_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64821 => [[['_route' => 'api.promotion_setgroup_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64915 => [[['_route' => 'api.promotion_setgroup_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65022 => [
            [['_route' => 'api.promotion_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        65114 => [[['_route' => 'api.promotion_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        65212 => [[['_route' => 'api.promotion_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65315 => [[['_route' => 'api.promotion_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65406 => [[['_route' => 'api.promotion_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65506 => [
            [['_route' => 'api.property_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        65591 => [[['_route' => 'api.property_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        65682 => [[['_route' => 'api.property_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65778 => [[['_route' => 'api.property_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65862 => [[['_route' => 'api.property_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65970 => [
            [['_route' => 'api.property_group_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        66063 => [[['_route' => 'api.property_group_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        66162 => [[['_route' => 'api.property_group_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66266 => [[['_route' => 'api.property_group_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66358 => [[['_route' => 'api.property_group_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66479 => [
            [['_route' => 'api.property_group_option_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        66585 => [[['_route' => 'api.property_group_option_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        66697 => [[['_route' => 'api.property_group_option_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66814 => [[['_route' => 'api.property_group_option_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66919 => [[['_route' => 'api.property_group_option_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67032 => [
            [['_route' => 'api.property_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        67130 => [[['_route' => 'api.property_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        67234 => [[['_route' => 'api.property_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67343 => [[['_route' => 'api.property_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67440 => [[['_route' => 'api.property_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67529 => [
            [['_route' => 'api.rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        67603 => [[['_route' => 'api.rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        67683 => [[['_route' => 'api.rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67768 => [[['_route' => 'api.rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67841 => [[['_route' => 'api.rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67941 => [
            [['_route' => 'api.rule_condition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule-condition'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule-condition'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule-condition'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        68026 => [[['_route' => 'api.rule_condition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule-condition'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        68117 => [[['_route' => 'api.rule_condition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule-condition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68213 => [[['_route' => 'api.rule_condition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule-condition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68297 => [[['_route' => 'api.rule_condition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule-condition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68396 => [
            [['_route' => 'api.sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        68480 => [[['_route' => 'api.sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        68570 => [[['_route' => 'api.sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68665 => [[['_route' => 'api.sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68748 => [[['_route' => 'api.sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68858 => [
            [['_route' => 'api.sales_channel_analytics.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        68953 => [[['_route' => 'api.sales_channel_analytics.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        69054 => [[['_route' => 'api.sales_channel_analytics.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69160 => [[['_route' => 'api.sales_channel_analytics.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69254 => [[['_route' => 'api.sales_channel_analytics.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69362 => [
            [['_route' => 'api.sales_channel_country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        69455 => [[['_route' => 'api.sales_channel_country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        69560 => [[['_route' => 'api.sales_channel_country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69664 => [[['_route' => 'api.sales_channel_country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69756 => [[['_route' => 'api.sales_channel_country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69865 => [
            [['_route' => 'api.sales_channel_currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        69959 => [[['_route' => 'api.sales_channel_currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        70059 => [[['_route' => 'api.sales_channel_currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70164 => [[['_route' => 'api.sales_channel_currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70257 => [[['_route' => 'api.sales_channel_currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70364 => [
            [['_route' => 'api.sales_channel_domain.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        70456 => [[['_route' => 'api.sales_channel_domain.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        70554 => [[['_route' => 'api.sales_channel_domain.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70657 => [[['_route' => 'api.sales_channel_domain.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70748 => [[['_route' => 'api.sales_channel_domain.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70857 => [
            [['_route' => 'api.sales_channel_language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        70951 => [[['_route' => 'api.sales_channel_language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        71051 => [[['_route' => 'api.sales_channel_language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71156 => [[['_route' => 'api.sales_channel_language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71249 => [[['_route' => 'api.sales_channel_language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71365 => [
            [['_route' => 'api.sales_channel_payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        71466 => [[['_route' => 'api.sales_channel_payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        71573 => [[['_route' => 'api.sales_channel_payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71685 => [[['_route' => 'api.sales_channel_payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71785 => [[['_route' => 'api.sales_channel_payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71902 => [
            [['_route' => 'api.sales_channel_shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        72004 => [[['_route' => 'api.sales_channel_shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        72112 => [[['_route' => 'api.sales_channel_shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72225 => [[['_route' => 'api.sales_channel_shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72326 => [[['_route' => 'api.sales_channel_shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72438 => [
            [['_route' => 'api.sales_channel_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        72535 => [[['_route' => 'api.sales_channel_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        72638 => [[['_route' => 'api.sales_channel_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72746 => [[['_route' => 'api.sales_channel_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72842 => [[['_route' => 'api.sales_channel_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72947 => [
            [['_route' => 'api.sales_channel_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        73037 => [[['_route' => 'api.sales_channel_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        73133 => [[['_route' => 'api.sales_channel_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73234 => [[['_route' => 'api.sales_channel_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73323 => [[['_route' => 'api.sales_channel_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73441 => [
            [['_route' => 'api.sales_channel_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        73544 => [[['_route' => 'api.sales_channel_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        73653 => [[['_route' => 'api.sales_channel_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73767 => [[['_route' => 'api.sales_channel_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73869 => [[['_route' => 'api.sales_channel_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73964 => [
            [['_route' => 'api.salutation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        74044 => [[['_route' => 'api.salutation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        74130 => [[['_route' => 'api.salutation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74221 => [[['_route' => 'api.salutation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74300 => [[['_route' => 'api.salutation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74408 => [
            [['_route' => 'api.salutation_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        74501 => [[['_route' => 'api.salutation_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        74600 => [[['_route' => 'api.salutation_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74704 => [[['_route' => 'api.salutation_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74796 => [[['_route' => 'api.salutation_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74896 => [
            [['_route' => 'api.scheduled_task.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'scheduled-task'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'scheduled-task'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'scheduled-task'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        74981 => [[['_route' => 'api.scheduled_task.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'scheduled-task'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        75072 => [[['_route' => 'api.scheduled_task.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'scheduled-task'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75168 => [[['_route' => 'api.scheduled_task.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'scheduled-task'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75252 => [[['_route' => 'api.scheduled_task.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'scheduled-task'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75345 => [
            [['_route' => 'api.seo_url.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        75423 => [[['_route' => 'api.seo_url.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        75507 => [[['_route' => 'api.seo_url.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75596 => [[['_route' => 'api.seo_url.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75673 => [[['_route' => 'api.seo_url.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75776 => [
            [['_route' => 'api.seo_url_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url-template'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url-template'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url-template'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        75864 => [[['_route' => 'api.seo_url_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url-template'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        75958 => [[['_route' => 'api.seo_url_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76057 => [[['_route' => 'api.seo_url_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76144 => [[['_route' => 'api.seo_url_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76245 => [
            [['_route' => 'api.shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        76331 => [[['_route' => 'api.shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        76423 => [[['_route' => 'api.shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76520 => [[['_route' => 'api.shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76605 => [[['_route' => 'api.shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76713 => [
            [['_route' => 'api.shipping_method_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        76806 => [[['_route' => 'api.shipping_method_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        76905 => [[['_route' => 'api.shipping_method_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77009 => [[['_route' => 'api.shipping_method_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77101 => [[['_route' => 'api.shipping_method_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77207 => [
            [['_route' => 'api.shipping_method_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        77298 => [[['_route' => 'api.shipping_method_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        77395 => [[['_route' => 'api.shipping_method_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77497 => [[['_route' => 'api.shipping_method_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77587 => [[['_route' => 'api.shipping_method_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77701 => [
            [['_route' => 'api.shipping_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        77800 => [[['_route' => 'api.shipping_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        77905 => [[['_route' => 'api.shipping_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78015 => [[['_route' => 'api.shipping_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78113 => [[['_route' => 'api.shipping_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78205 => [
            [['_route' => 'api.snippet.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        78282 => [[['_route' => 'api.snippet.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        78365 => [[['_route' => 'api.snippet.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78453 => [[['_route' => 'api.snippet.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78529 => [[['_route' => 'api.snippet.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78626 => [
            [['_route' => 'api.snippet_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet-set'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet-set'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet-set'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        78708 => [[['_route' => 'api.snippet_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet-set'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        78796 => [[['_route' => 'api.snippet_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78889 => [[['_route' => 'api.snippet_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78970 => [[['_route' => 'api.snippet_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79069 => [
            [['_route' => 'api.state_machine.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        79153 => [[['_route' => 'api.state_machine.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        79243 => [[['_route' => 'api.state_machine.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79338 => [[['_route' => 'api.state_machine.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79421 => [[['_route' => 'api.state_machine.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79529 => [
            [['_route' => 'api.state_machine_history.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-history'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-history'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-history'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        79622 => [[['_route' => 'api.state_machine_history.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-history'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        79721 => [[['_route' => 'api.state_machine_history.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-history'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79825 => [[['_route' => 'api.state_machine_history.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-history'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79917 => [[['_route' => 'api.state_machine_history.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-history'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80023 => [
            [['_route' => 'api.state_machine_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        80114 => [[['_route' => 'api.state_machine_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        80211 => [[['_route' => 'api.state_machine_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80313 => [[['_route' => 'api.state_machine_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80403 => [[['_route' => 'api.state_machine_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80522 => [
            [['_route' => 'api.state_machine_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        80626 => [[['_route' => 'api.state_machine_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        80736 => [[['_route' => 'api.state_machine_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80851 => [[['_route' => 'api.state_machine_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80954 => [[['_route' => 'api.state_machine_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81065 => [
            [['_route' => 'api.state_machine_transition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        81161 => [[['_route' => 'api.state_machine_transition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        81263 => [[['_route' => 'api.state_machine_transition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81370 => [[['_route' => 'api.state_machine_transition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81465 => [[['_route' => 'api.state_machine_transition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81577 => [
            [['_route' => 'api.state_machine_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        81674 => [[['_route' => 'api.state_machine_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        81777 => [[['_route' => 'api.state_machine_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81885 => [[['_route' => 'api.state_machine_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81981 => [[['_route' => 'api.state_machine_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82093 => [
            [['_route' => 'api.swag_migration_connection.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_connection.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_connection.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        82190 => [[['_route' => 'api.swag_migration_connection.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        82293 => [[['_route' => 'api.swag_migration_connection.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82401 => [[['_route' => 'api.swag_migration_connection.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82497 => [[['_route' => 'api.swag_migration_connection.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82603 => [
            [['_route' => 'api.swag_migration_data.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_data.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_data.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        82694 => [[['_route' => 'api.swag_migration_data.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        82791 => [[['_route' => 'api.swag_migration_data.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82893 => [[['_route' => 'api.swag_migration_data.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82983 => [[['_route' => 'api.swag_migration_data.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83101 => [
            [['_route' => 'api.swag_migration_general_setting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_general_setting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_general_setting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        83204 => [[['_route' => 'api.swag_migration_general_setting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        83313 => [[['_route' => 'api.swag_migration_general_setting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83427 => [[['_route' => 'api.swag_migration_general_setting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83529 => [[['_route' => 'api.swag_migration_general_setting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83638 => [
            [['_route' => 'api.swag_migration_logging.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_logging.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_logging.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        83732 => [[['_route' => 'api.swag_migration_logging.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        83832 => [[['_route' => 'api.swag_migration_logging.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83937 => [[['_route' => 'api.swag_migration_logging.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84030 => [[['_route' => 'api.swag_migration_logging.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84139 => [
            [['_route' => 'api.swag_migration_mapping.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_mapping.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_mapping.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        84233 => [[['_route' => 'api.swag_migration_mapping.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        84333 => [[['_route' => 'api.swag_migration_mapping.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84438 => [[['_route' => 'api.swag_migration_mapping.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84531 => [[['_route' => 'api.swag_migration_mapping.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84644 => [
            [['_route' => 'api.swag_migration_media_file.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_media_file.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_media_file.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        84742 => [[['_route' => 'api.swag_migration_media_file.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        84846 => [[['_route' => 'api.swag_migration_media_file.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84955 => [[['_route' => 'api.swag_migration_media_file.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85052 => [[['_route' => 'api.swag_migration_media_file.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85157 => [
            [['_route' => 'api.swag_migration_run.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_run.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_run.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        85247 => [[['_route' => 'api.swag_migration_run.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        85343 => [[['_route' => 'api.swag_migration_run.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85444 => [[['_route' => 'api.swag_migration_run.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85533 => [[['_route' => 'api.swag_migration_run.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85632 => [
            [['_route' => 'api.system_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'system-config'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.system_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'system-config'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.system_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'system-config'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        85716 => [[['_route' => 'api.system_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'system-config'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        85806 => [[['_route' => 'api.system_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'system-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85901 => [[['_route' => 'api.system_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'system-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85984 => [[['_route' => 'api.system_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'system-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86072 => [
            [['_route' => 'api.tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        86145 => [[['_route' => 'api.tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        86224 => [[['_route' => 'api.tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86308 => [[['_route' => 'api.tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86380 => [[['_route' => 'api.tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86468 => [
            [['_route' => 'api.tax.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        86541 => [[['_route' => 'api.tax.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        86620 => [[['_route' => 'api.tax.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86704 => [[['_route' => 'api.tax.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86776 => [[['_route' => 'api.tax.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86870 => [
            [['_route' => 'api.tax_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        86949 => [[['_route' => 'api.tax_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        87034 => [[['_route' => 'api.tax_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87124 => [[['_route' => 'api.tax_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87202 => [[['_route' => 'api.tax_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87302 => [
            [['_route' => 'api.tax_rule_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        87387 => [[['_route' => 'api.tax_rule_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        87478 => [[['_route' => 'api.tax_rule_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87574 => [[['_route' => 'api.tax_rule_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87658 => [[['_route' => 'api.tax_rule_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87771 => [
            [['_route' => 'api.tax_rule_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        87869 => [[['_route' => 'api.tax_rule_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        87973 => [[['_route' => 'api.tax_rule_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88082 => [[['_route' => 'api.tax_rule_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88179 => [[['_route' => 'api.tax_rule_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88269 => [
            [['_route' => 'api.theme.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        88344 => [[['_route' => 'api.theme.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        88425 => [[['_route' => 'api.theme.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88511 => [[['_route' => 'api.theme.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88585 => [[['_route' => 'api.theme.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88682 => [
            [['_route' => 'api.theme_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        88764 => [[['_route' => 'api.theme_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        88852 => [[['_route' => 'api.theme_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88945 => [[['_route' => 'api.theme_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89026 => [[['_route' => 'api.theme_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89132 => [
            [['_route' => 'api.theme_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        89223 => [[['_route' => 'api.theme_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        89320 => [[['_route' => 'api.theme_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89422 => [[['_route' => 'api.theme_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89512 => [[['_route' => 'api.theme_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89615 => [
            [['_route' => 'api.theme_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        89703 => [[['_route' => 'api.theme_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        89797 => [[['_route' => 'api.theme_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89896 => [[['_route' => 'api.theme_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89983 => [[['_route' => 'api.theme_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90072 => [
            [['_route' => 'api.unit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        90146 => [[['_route' => 'api.unit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        90226 => [[['_route' => 'api.unit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90311 => [[['_route' => 'api.unit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90384 => [[['_route' => 'api.unit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90486 => [
            [['_route' => 'api.unit_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        90573 => [[['_route' => 'api.unit_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        90666 => [[['_route' => 'api.unit_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90764 => [[['_route' => 'api.unit_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90850 => [[['_route' => 'api.unit_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90936 => [[['_route' => 'api.user.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        91009 => [[['_route' => 'api.user.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        91089 => [[['_route' => 'api.user.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91174 => [[['_route' => 'api.user.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91276 => [
            [['_route' => 'api.user_access_key.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-access-key'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-access-key'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-access-key'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        91363 => [[['_route' => 'api.user_access_key.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-access-key'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        91456 => [[['_route' => 'api.user_access_key.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-access-key'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91554 => [[['_route' => 'api.user_access_key.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-access-key'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91640 => [[['_route' => 'api.user_access_key.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-access-key'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91739 => [
            [['_route' => 'api.user_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-recovery'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-recovery'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        91823 => [[['_route' => 'api.user_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        91913 => [[['_route' => 'api.user_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92008 => [[['_route' => 'api.user_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92091 => [[['_route' => 'api.user_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92183 => [
            [['_route' => 'api.version.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        92260 => [[['_route' => 'api.version.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        92343 => [[['_route' => 'api.version.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92431 => [[['_route' => 'api.version.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92507 => [[['_route' => 'api.version.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92607 => [
            [['_route' => 'api.version_commit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        92692 => [[['_route' => 'api.version_commit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        92783 => [[['_route' => 'api.version_commit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92879 => [[['_route' => 'api.version_commit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92963 => [[['_route' => 'api.version_commit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93069 => [
            [['_route' => 'api.version_commit_data.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit-data'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit-data'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit-data'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        93160 => [[['_route' => 'api.version_commit_data.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit-data'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        93257 => [[['_route' => 'api.version_commit_data.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93359 => [[['_route' => 'api.version_commit_data.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93449 => [[['_route' => 'api.version_commit_data.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93482 => [[['_route' => 'api.info.me', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::me'], ['version'], ['GET' => 0], null, false, false, null]],
        93496 => [[['_route' => 'api.info.ping', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::status'], ['version'], ['GET' => 0], null, false, false, null]],
        93526 => [[['_route' => 'api.user.delete', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUser'], ['version', 'userId'], ['DELETE' => 0], null, false, true, null]],
        93558 => [[['_route' => 'api.user_access_keys.delete', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserAccessKey'], ['version', 'userId', 'id'], ['DELETE' => 0], null, false, true, null]],
        93568 => [[['_route' => 'api.user.update', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertUser'], ['version', 'userId'], ['PATCH' => 0], null, false, true, null]],
        93579 => [[['_route' => 'api.user.create', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertUser'], ['version'], ['POST' => 0], null, false, false, null]],
        93640 => [[['_route' => 'sales-channel-api.category.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'category'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        93676 => [[['_route' => 'sales-channel-api.category.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'category'], ['version'], ['POST' => 0], null, false, false, null]],
        93700 => [[['_route' => 'sales-channel-api.category.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'category'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        93732 => [[['_route' => 'sales-channel-api.country.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'country'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        93767 => [[['_route' => 'sales-channel-api.country.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'country'], ['version'], ['POST' => 0], null, false, false, null]],
        93790 => [[['_route' => 'sales-channel-api.country.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'country'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        93829 => [[['_route' => 'sales-channel-api.country_state.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'country-state'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        93871 => [[['_route' => 'sales-channel-api.country_state.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'country-state'], ['version'], ['POST' => 0], null, false, false, null]],
        93901 => [[['_route' => 'sales-channel-api.country_state.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'country-state'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        93934 => [[['_route' => 'sales-channel-api.currency.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'currency'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        93970 => [[['_route' => 'sales-channel-api.currency.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'currency'], ['version'], ['POST' => 0], null, false, false, null]],
        93994 => [[['_route' => 'sales-channel-api.currency.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'currency'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94027 => [[['_route' => 'sales-channel-api.language.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'language'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94063 => [[['_route' => 'sales-channel-api.language.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'language'], ['version'], ['POST' => 0], null, false, false, null]],
        94087 => [[['_route' => 'sales-channel-api.language.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'language'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94126 => [[['_route' => 'sales-channel-api.main_category.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'main-category'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94168 => [[['_route' => 'sales-channel-api.main_category.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'main-category'], ['version'], ['POST' => 0], null, false, false, null]],
        94198 => [[['_route' => 'sales-channel-api.main_category.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'main-category'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94238 => [[['_route' => 'sales-channel-api.payment_method.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'payment-method'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94281 => [[['_route' => 'sales-channel-api.payment_method.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'payment-method'], ['version'], ['POST' => 0], null, false, false, null]],
        94312 => [[['_route' => 'sales-channel-api.payment_method.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'payment-method'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94344 => [[['_route' => 'sales-channel-api.product.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'product'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94379 => [[['_route' => 'sales-channel-api.product.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'product'], ['version'], ['POST' => 0], null, false, false, null]],
        94402 => [[['_route' => 'sales-channel-api.product.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'product'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94437 => [[['_route' => 'sales-channel-api.salutation.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'salutation'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94475 => [[['_route' => 'sales-channel-api.salutation.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'salutation'], ['version'], ['POST' => 0], null, false, false, null]],
        94501 => [[['_route' => 'sales-channel-api.salutation.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'salutation'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94534 => [[['_route' => 'sales-channel-api.seo_url.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'seo-url'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94570 => [[['_route' => 'sales-channel-api.seo_url.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'seo-url'], ['version'], ['POST' => 0], null, false, false, null]],
        94594 => [[['_route' => 'sales-channel-api.seo_url.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'seo-url'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94635 => [[['_route' => 'sales-channel-api.shipping_method.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'shipping-method'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94679 => [[['_route' => 'sales-channel-api.shipping_method.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'shipping-method'], ['version'], ['POST' => 0], null, false, false, null]],
        94711 => [
            [['_route' => 'sales-channel-api.shipping_method.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'shipping-method'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
