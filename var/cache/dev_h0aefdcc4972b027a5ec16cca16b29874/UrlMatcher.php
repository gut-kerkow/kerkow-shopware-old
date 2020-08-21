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
        '/paypal/add-error' => [[['_route' => 'payment.paypal.add_error', 'XmlHttpRequest' => true, '_controller' => 'Swag\\PayPal\\Checkout\\ErrorController::addErrorMessage'], null, ['POST' => 0], null, false, false, null]],
        '/paypal/approve-payment' => [[['_route' => 'payment.paypal.approve_payment', 'XmlHttpRequest' => true, '_controller' => 'Swag\\PayPal\\Checkout\\ExpressCheckout\\ExpressCheckoutController::onApprove'], null, ['POST' => 0], null, false, false, null]],
        '/paypal/approve-payment-deprecated' => [[['_route' => 'paypal.approve_payment', 'XmlHttpRequest' => true, '_controller' => 'Swag\\PayPal\\Checkout\\ExpressCheckout\\ExpressCheckoutController::onApproveDeprecated'], null, ['POST' => 0], null, false, false, null]],
        '/paypal/plus/payment/finalize-transaction' => [[['_route' => 'payment.paypal.plus.finalize.transaction', 'auth_required' => false, '_controller' => 'Swag\\PayPal\\Checkout\\Plus\\PlusPaymentFinalizeController::finalizeTransaction'], null, ['GET' => 0], null, false, false, null]],
        '/paypal/plus/payment/finalize-transaction-deprecated' => [[['_route' => 'paypal.plus.payment.finalize.transaction', 'auth_required' => false, '_controller' => 'Swag\\PayPal\\Checkout\\Plus\\PlusPaymentFinalizeController::finalizeTransactionDeprecated'], null, ['GET' => 0], null, false, false, null]],
        '/paypal/webhook/execute' => [[['_route' => 'paypal.webhook.execute', 'csrf_protected' => false, '_controller' => 'Swag\\PayPal\\Webhook\\WebhookController::executeWebhookDeprecated'], null, ['POST' => 0], null, false, false, null]],
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
                                            .'|ay(?'
                                                .'|pal/(?'
                                                    .'|refund\\-payment/([^/]++)/([^/]++)/([^/]++)(*:3585)'
                                                    .'|capture\\-payment/([^/]++)/([^/]++)/([^/]++)(*:3637)'
                                                    .'|v(?'
                                                        .'|oid\\-payment/([^/]++)/([^/]++)/([^/]++)(*:3689)'
                                                        .'|alidate\\-api\\-credentials(*:3723)'
                                                    .')'
                                                    .'|saleschannel\\-default(*:3754)'
                                                    .'|get\\-api\\-credentials(*:3784)'
                                                    .'|webhook/(?'
                                                        .'|register/([^/]++)(*:3821)'
                                                        .'|execute(*:3837)'
                                                    .')'
                                                .')'
                                                .'|one(?'
                                                    .'|/(?'
                                                        .'|refund\\-payment(*:3873)'
                                                        .'|capture\\-payment(*:3898)'
                                                    .')'
                                                    .'|_payment/(?'
                                                        .'|validate\\-api\\-credentials(*:3946)'
                                                        .'|get\\-state\\-machine\\-transition\\-actions(*:3995)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|theme/([^/]++)(?'
                                            .'|/(?'
                                                .'|configuration(*:4042)'
                                                .'|assign/([^/]++)(*:4066)'
                                                .'|reset(*:4080)'
                                                .'|fields(*:4095)'
                                                .'|structured\\-fields(*:4122)'
                                            .')'
                                            .'|(*:4132)'
                                        .')'
                                        .'|migration/(?'
                                            .'|d(?'
                                                .'|ownload\\-logs\\-of\\-run(*:4181)'
                                                .'|ata\\-selection(*:4204)'
                                            .')'
                                            .'|f(?'
                                                .'|etch\\-data(*:4228)'
                                                .'|inish\\-migration(*:4253)'
                                            .')'
                                            .'|update\\-(?'
                                                .'|write\\-progress(*:4289)'
                                                .'|media\\-files\\-progress(*:4320)'
                                                .'|connection\\-credentials(*:4352)'
                                            .')'
                                            .'|write\\-(?'
                                                .'|data(*:4376)'
                                                .'|premapping(*:4395)'
                                            .')'
                                            .'|process\\-media(*:4419)'
                                            .'|indexing(*:4436)'
                                            .'|ge(?'
                                                .'|nerate\\-premapping(*:4468)'
                                                .'|t\\-(?'
                                                    .'|profile(?'
                                                        .'|\\-information(*:4506)'
                                                        .'|s(*:4516)'
                                                    .')'
                                                    .'|gateways(*:4534)'
                                                    .'|state(*:4548)'
                                                    .'|reset\\-status(*:4570)'
                                                .')'
                                            .')'
                                            .'|c(?'
                                                .'|heck\\-connection(*:4601)'
                                                .'|reate\\-migration(*:4626)'
                                                .'|leanup\\-migration\\-data(*:4658)'
                                            .')'
                                            .'|takeover\\-migration(*:4687)'
                                            .'|a(?'
                                                .'|bort\\-migration(*:4715)'
                                                .'|ssign\\-themes(*:4737)'
                                            .')'
                                            .'|reset\\-checksums(*:4763)'
                                        .')'
                                    .')'
                                    .'|dmin/snippets(*:4787)'
                                .')'
                                .'|migration/get\\-grouped\\-logs\\-of\\-run(*:4834)'
                                .'|paypal/(?'
                                    .'|payment\\-details/([^/]++)/([^/]++)(*:4887)'
                                    .'|resource\\-details/([^/]++)/([^/]++)/([^/]++)(*:4940)'
                                .')'
                            .')'
                            .'|(\\d+)/acl\\-role/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:5035)'
                            .')'
                            .'|(\\d+)/acl\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5113)'
                            .'|(\\d+)/search/acl\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5197)'
                            .'|(\\d+)/search\\-ids/acl\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5286)'
                            .'|(\\d+)/acl\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5363)'
                            .'|(\\d+)/acl\\-user\\-role/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:5462)'
                            .')'
                            .'|(\\d+)/acl\\-user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5546)'
                            .'|(\\d+)/search/acl\\-user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5636)'
                            .'|(\\d+)/search\\-ids/acl\\-user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5731)'
                            .'|(\\d+)/acl\\-user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5814)'
                            .'|(\\d+)/category/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:5906)'
                            .')'
                            .'|(\\d+)/category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5983)'
                            .'|(\\d+)/search/category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6066)'
                            .'|(\\d+)/search\\-ids/category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6154)'
                            .'|(\\d+)/category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6230)'
                            .'|(\\d+)/category\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:6327)'
                            .')'
                            .'|(\\d+)/category\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6409)'
                            .'|(\\d+)/search/category\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6497)'
                            .'|(\\d+)/search\\-ids/category\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6590)'
                            .'|(\\d+)/category\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6671)'
                            .'|(\\d+)/category\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:6776)'
                            .')'
                            .'|(\\d+)/category\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6866)'
                            .'|(\\d+)/search/category\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6962)'
                            .'|(\\d+)/search\\-ids/category\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7063)'
                            .'|(\\d+)/category\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7152)'
                            .'|(\\d+)/cms\\-block/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:7246)'
                            .')'
                            .'|(\\d+)/cms\\-block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7325)'
                            .'|(\\d+)/search/cms\\-block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7410)'
                            .'|(\\d+)/search\\-ids/cms\\-block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7500)'
                            .'|(\\d+)/cms\\-block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7578)'
                            .'|(\\d+)/cms\\-page/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:7671)'
                            .')'
                            .'|(\\d+)/cms\\-page((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7749)'
                            .'|(\\d+)/search/cms\\-page((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7833)'
                            .'|(\\d+)/search\\-ids/cms\\-page((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7922)'
                            .'|(\\d+)/cms\\-page((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7999)'
                            .'|(\\d+)/cms\\-page\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:8105)'
                            .')'
                            .'|(\\d+)/cms\\-page\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8196)'
                            .'|(\\d+)/search/cms\\-page\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8293)'
                            .'|(\\d+)/search\\-ids/cms\\-page\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8395)'
                            .'|(\\d+)/cms\\-page\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8485)'
                            .'|(\\d+)/cms\\-section/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:8581)'
                            .')'
                            .'|(\\d+)/cms\\-section((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8662)'
                            .'|(\\d+)/search/cms\\-section((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8749)'
                            .'|(\\d+)/search\\-ids/cms\\-section((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8841)'
                            .'|(\\d+)/cms\\-section((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8921)'
                            .'|(\\d+)/cms\\-slot/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:9014)'
                            .')'
                            .'|(\\d+)/cms\\-slot((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9092)'
                            .'|(\\d+)/search/cms\\-slot((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9176)'
                            .'|(\\d+)/search\\-ids/cms\\-slot((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9265)'
                            .'|(\\d+)/cms\\-slot((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9342)'
                            .'|(\\d+)/cms\\-slot\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:9448)'
                            .')'
                            .'|(\\d+)/cms\\-slot\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9539)'
                            .'|(\\d+)/search/cms\\-slot\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9636)'
                            .'|(\\d+)/search\\-ids/cms\\-slot\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9738)'
                            .'|(\\d+)/cms\\-slot\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9828)'
                            .'|(\\d+)/country/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:9919)'
                            .')'
                            .'|(\\d+)/country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9995)'
                            .'|(\\d+)/search/country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10077)'
                            .'|(\\d+)/search\\-ids/country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10165)'
                            .'|(\\d+)/country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10241)'
                            .'|(\\d+)/country\\-state/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:10340)'
                            .')'
                            .'|(\\d+)/country\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10424)'
                            .'|(\\d+)/search/country\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10514)'
                            .'|(\\d+)/search\\-ids/country\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10609)'
                            .'|(\\d+)/country\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10692)'
                            .'|(\\d+)/country\\-state\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:10804)'
                            .')'
                            .'|(\\d+)/country\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10901)'
                            .'|(\\d+)/search/country\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11004)'
                            .'|(\\d+)/search\\-ids/country\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11112)'
                            .'|(\\d+)/country\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11208)'
                            .'|(\\d+)/country\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:11313)'
                            .')'
                            .'|(\\d+)/country\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11403)'
                            .'|(\\d+)/search/country\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11499)'
                            .'|(\\d+)/search\\-ids/country\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11600)'
                            .'|(\\d+)/country\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11689)'
                            .'|(\\d+)/currency/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:11782)'
                            .')'
                            .'|(\\d+)/currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11860)'
                            .'|(\\d+)/search/currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11944)'
                            .'|(\\d+)/search\\-ids/currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12033)'
                            .'|(\\d+)/currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12110)'
                            .'|(\\d+)/currency\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:12213)'
                        .')'
                    .')'
                    .'|ccount/(?'
                        .'|order/(?'
                            .'|([^/]++)(*:12252)'
                            .'|cancel(*:12268)'
                            .'|edit/([^/]++)(*:12291)'
                            .'|payment/([^/]++)(*:12317)'
                            .'|update/([^/]++)(*:12342)'
                        .')'
                        .'|address/(?'
                            .'|([^/]++)(*:12372)'
                            .'|de(?'
                                .'|fault\\-([^/]++)/([^/]++)(*:12411)'
                                .'|lete/([^/]++)(*:12434)'
                            .')'
                            .'|create(*:12451)'
                            .'|([^/]++)(*:12469)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:12513)'
                    .'|wdt/([^/]++)(*:12535)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:12583)'
                            .'|router(*:12599)'
                            .'|exception(?'
                                .'|(*:12621)'
                                .'|\\.css(*:12636)'
                            .')'
                        .')'
                        .'|(*:12648)'
                    .')'
                .')'
                .'|/s(?'
                    .'|ales\\-channel\\-api/v([^/]++)/(?'
                        .'|_(?'
                            .'|info/(?'
                                .'|open(?'
                                    .'|api3\\.json(*:12726)'
                                    .'|\\-api\\-schema\\.json(*:12755)'
                                .')'
                                .'|swagger\\.html(*:12779)'
                            .')'
                            .'|action/paypal/(?'
                                .'|create\\-(?'
                                    .'|new\\-cart(*:12827)'
                                    .'|payment(*:12844)'
                                .')'
                                .'|spb/create\\-payment(*:12874)'
                            .')'
                        .')'
                        .'|c(?'
                            .'|ontext(?'
                                .'|(*:12899)'
                            .')'
                            .'|ms\\-page/([^/]++)(*:12927)'
                            .'|heckout/(?'
                                .'|cart(?'
                                    .'|(*:12955)'
                                    .'|/(?'
                                        .'|product/([^/]++)(*:12985)'
                                        .'|code/([^/]++)(*:13008)'
                                        .'|line\\-item(?'
                                            .'|/([^/]++)(?'
                                                .'|(*:13043)'
                                            .')'
                                            .'|s/delete(*:13062)'
                                        .')'
                                    .')'
                                    .'|(*:13074)'
                                .')'
                                .'|order(?'
                                    .'|(*:13093)'
                                    .'|/([^/]++)/pay(*:13116)'
                                .')'
                                .'|guest\\-order(?'
                                    .'|(*:13142)'
                                    .'|/([^/]++)(*:13161)'
                                .')'
                            .')'
                            .'|ustomer(?'
                                .'|/(?'
                                    .'|log(?'
                                        .'|in(*:13195)'
                                        .'|out(*:13208)'
                                    .')'
                                    .'|order(*:13224)'
                                    .'|email(*:13239)'
                                    .'|password(*:13257)'
                                    .'|address(?'
                                        .'|(*:13277)'
                                        .'|/([^/]++)(?'
                                            .'|(*:13299)'
                                            .'|/default\\-(?'
                                                .'|shipping(*:13330)'
                                                .'|billing(*:13347)'
                                            .')'
                                        .')'
                                        .'|(*:13359)'
                                    .')'
                                .')'
                                .'|(*:13371)'
                            .')'
                        .')'
                        .'|product/([^/]++)/cross\\-selling(*:13414)'
                        .'|newsletter/(?'
                            .'|subscribe(*:13447)'
                            .'|confirm(*:13464)'
                            .'|unsubscribe(*:13485)'
                        .')'
                    .')'
                    .'|tore\\-api/v([^/]++)/(?'
                        .'|_info/(?'
                            .'|open(?'
                                .'|api3\\.json(*:13546)'
                                .'|\\-api\\-schema\\.json(*:13575)'
                            .')'
                            .'|swagger\\.html(*:13599)'
                        .')'
                        .'|c(?'
                            .'|o(?'
                                .'|nt(?'
                                    .'|ext(?'
                                        .'|(*:13629)'
                                    .')'
                                    .'|act\\-form(*:13649)'
                                .')'
                                .'|untry(*:13665)'
                            .')'
                            .'|urrency(*:13683)'
                            .'|ategory/([^/]++)(*:13709)'
                            .'|ms/([^/]++)(*:13730)'
                            .'|heckout/(?'
                                .'|cart(?'
                                    .'|(*:13758)'
                                    .'|/line\\-item(?'
                                        .'|(*:13782)'
                                    .')'
                                    .'|(*:13793)'
                                .')'
                                .'|order(*:13809)'
                            .')'
                        .')'
                        .'|language(*:13829)'
                        .'|s(?'
                            .'|alutation(*:13852)'
                            .'|e(?'
                                .'|arch(?'
                                    .'|(*:13873)'
                                    .'|\\-suggest(*:13892)'
                                .')'
                                .'|o\\-url(*:13909)'
                            .')'
                            .'|hipping\\-method(*:13935)'
                        .')'
                        .'|n(?'
                            .'|avigation/([^/]++)/([^/]++)(*:13977)'
                            .'|ewsletter/(?'
                                .'|confirm(*:14007)'
                                .'|subscribe(*:14026)'
                                .'|unsubscribe(*:14047)'
                            .')'
                        .')'
                        .'|p(?'
                            .'|roduct\\-listing/([^/]++)(*:14087)'
                            .'|ayment\\-method(*:14111)'
                        .')'
                        .'|handle\\-payment(*:14137)'
                        .'|account/(?'
                            .'|c(?'
                                .'|hange\\-(?'
                                    .'|p(?'
                                        .'|rofile(*:14182)'
                                        .'|a(?'
                                            .'|ssword(*:14202)'
                                            .'|yment\\-method/([^/]++)(*:14234)'
                                        .')'
                                    .')'
                                    .'|email(*:14251)'
                                .')'
                                .'|ustomer(*:14269)'
                            .')'
                            .'|log(?'
                                .'|in(*:14288)'
                                .'|out(*:14301)'
                            .')'
                            .'|re(?'
                                .'|gister(?'
                                    .'|\\-confirm(*:14335)'
                                    .'|(*:14345)'
                                .')'
                                .'|covery\\-password(?'
                                    .'|\\-confirm(*:14384)'
                                    .'|(*:14394)'
                                .')'
                            .')'
                        .')'
                        .'|order(?'
                            .'|/(?'
                                .'|state/cancel(*:14431)'
                                .'|payment(*:14448)'
                            .')'
                            .'|(*:14459)'
                        .')'
                    .')'
                .')'
                .'|/widgets/(?'
                    .'|account/order/detail/([^/]++)(*:14513)'
                    .'|cms(?'
                        .'|(?:/([^/]++))?(*:14543)'
                        .'|/navigation(?'
                            .'|(?:/([^/]++))?(*:14581)'
                            .'|/([^/]++)/filter(*:14607)'
                        .')'
                    .')'
                .')'
                .'|/checkout/line\\-item/(?'
                    .'|delete/([^/]++)(*:14659)'
                    .'|change\\-quantity/([^/]++)(*:14694)'
                .')'
                .'|/maintenance/singlepage/([^/]++)(*:14737)'
                .'|/navigation/([^/]++)(*:14767)'
                .'|/detail/([^/]++)(?'
                    .'|(*:14796)'
                    .'|/switch(*:14813)'
                .')'
                .'|/quickview/([^/]++)(*:14843)'
                .'|/product/([^/]++)/r(?'
                    .'|ating(*:14880)'
                    .'|eviews(*:14896)'
                .')'
                .'|/export/([^/]++)/([^/]++)(*:14932)'
            .')/?$}sD',
        14932 => '{^(?'
                .'|/api/v(?'
                    .'|(\\d+)/currency\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:15044)'
                    .')'
                    .'|(\\d+)/currency\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15135)'
                    .'|(\\d+)/search/currency\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15232)'
                    .'|(\\d+)/search\\-ids/currency\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15334)'
                    .'|(\\d+)/currency\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15424)'
                    .'|(\\d+)/custom\\-field/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:15522)'
                    .')'
                    .'|(\\d+)/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15605)'
                    .'|(\\d+)/search/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15694)'
                    .'|(\\d+)/search\\-ids/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15788)'
                    .'|(\\d+)/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15870)'
                    .'|(\\d+)/custom\\-field\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:15973)'
                    .')'
                    .'|(\\d+)/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16061)'
                    .'|(\\d+)/search/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16155)'
                    .'|(\\d+)/search\\-ids/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16254)'
                    .'|(\\d+)/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16341)'
                    .'|(\\d+)/custom\\-field\\-set\\-relation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:16454)'
                    .')'
                    .'|(\\d+)/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16552)'
                    .'|(\\d+)/search/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16656)'
                    .'|(\\d+)/search\\-ids/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16765)'
                    .'|(\\d+)/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16862)'
                    .'|(\\d+)/customer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:16955)'
                    .')'
                    .'|(\\d+)/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17033)'
                    .'|(\\d+)/search/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17117)'
                    .'|(\\d+)/search\\-ids/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17206)'
                    .'|(\\d+)/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17283)'
                    .'|(\\d+)/customer\\-address/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:17385)'
                    .')'
                    .'|(\\d+)/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17472)'
                    .'|(\\d+)/search/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17565)'
                    .'|(\\d+)/search\\-ids/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17663)'
                    .'|(\\d+)/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17749)'
                    .'|(\\d+)/customer\\-group/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:17849)'
                    .')'
                    .'|(\\d+)/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17934)'
                    .'|(\\d+)/search/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18025)'
                    .'|(\\d+)/search\\-ids/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18121)'
                    .'|(\\d+)/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18205)'
                    .'|(\\d+)/customer\\-group\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:18318)'
                    .')'
                    .'|(\\d+)/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18416)'
                    .'|(\\d+)/search/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18520)'
                    .'|(\\d+)/search\\-ids/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18629)'
                    .'|(\\d+)/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18726)'
                    .'|(\\d+)/customer\\-recovery/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:18829)'
                    .')'
                    .'|(\\d+)/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18917)'
                    .'|(\\d+)/search/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19011)'
                    .'|(\\d+)/search\\-ids/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19110)'
                    .'|(\\d+)/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19197)'
                    .'|(\\d+)/customer\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:19295)'
                    .')'
                    .'|(\\d+)/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19378)'
                    .'|(\\d+)/search/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19467)'
                    .'|(\\d+)/search\\-ids/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19561)'
                    .'|(\\d+)/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19643)'
                    .'|(\\d+)/dead\\-message/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:19741)'
                    .')'
                    .'|(\\d+)/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19824)'
                    .'|(\\d+)/search/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19913)'
                    .'|(\\d+)/search\\-ids/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20007)'
                    .'|(\\d+)/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20089)'
                    .'|(\\d+)/delivery\\-time/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:20188)'
                    .')'
                    .'|(\\d+)/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20272)'
                    .'|(\\d+)/search/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20362)'
                    .'|(\\d+)/search\\-ids/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20457)'
                    .'|(\\d+)/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20540)'
                    .'|(\\d+)/delivery\\-time\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:20652)'
                    .')'
                    .'|(\\d+)/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20749)'
                    .'|(\\d+)/search/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20852)'
                    .'|(\\d+)/search\\-ids/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20960)'
                    .'|(\\d+)/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21056)'
                    .'|(\\d+)/document/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:21149)'
                    .')'
                    .'|(\\d+)/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21227)'
                    .'|(\\d+)/search/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21311)'
                    .'|(\\d+)/search\\-ids/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21400)'
                    .'|(\\d+)/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21477)'
                    .'|(\\d+)/document\\-base\\-config/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:21584)'
                    .')'
                    .'|(\\d+)/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21676)'
                    .'|(\\d+)/search/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21774)'
                    .'|(\\d+)/search\\-ids/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21877)'
                    .'|(\\d+)/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21968)'
                    .'|(\\d+)/document\\-base\\-config\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:22091)'
                    .')'
                    .'|(\\d+)/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22199)'
                    .'|(\\d+)/search/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22313)'
                    .'|(\\d+)/search\\-ids/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22432)'
                    .'|(\\d+)/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22539)'
                    .'|(\\d+)/document\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:22638)'
                    .')'
                    .'|(\\d+)/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22722)'
                    .'|(\\d+)/search/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22812)'
                    .'|(\\d+)/search\\-ids/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22907)'
                    .'|(\\d+)/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22990)'
                    .'|(\\d+)/document\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:23102)'
                    .')'
                    .'|(\\d+)/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23199)'
                    .'|(\\d+)/search/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23302)'
                    .'|(\\d+)/search\\-ids/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23410)'
                    .'|(\\d+)/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23506)'
                    .'|(\\d+)/event\\-action/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:23604)'
                    .')'
                    .'|(\\d+)/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23687)'
                    .'|(\\d+)/search/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23776)'
                    .'|(\\d+)/search\\-ids/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23870)'
                    .'|(\\d+)/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23952)'
                    .'|(\\d+)/import\\-export\\-file/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:24057)'
                    .')'
                    .'|(\\d+)/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24147)'
                    .'|(\\d+)/search/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24243)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24344)'
                    .'|(\\d+)/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24433)'
                    .'|(\\d+)/import\\-export\\-log/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:24537)'
                    .')'
                    .'|(\\d+)/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24626)'
                    .'|(\\d+)/search/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24721)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24821)'
                    .'|(\\d+)/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24909)'
                    .'|(\\d+)/import\\-export\\-profile/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:25017)'
                    .')'
                    .'|(\\d+)/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25110)'
                    .'|(\\d+)/search/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25209)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25313)'
                    .'|(\\d+)/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25405)'
                    .'|(\\d+)/import\\-export\\-profile\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:25526)'
                    .')'
                    .'|(\\d+)/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25632)'
                    .'|(\\d+)/search/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25744)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25861)'
                    .'|(\\d+)/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25966)'
                    .'|(\\d+)/integration/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:26062)'
                    .')'
                    .'|(\\d+)/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26143)'
                    .'|(\\d+)/search/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26230)'
                    .'|(\\d+)/search\\-ids/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26322)'
                    .'|(\\d+)/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26402)'
                    .'|(\\d+)/language/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:26495)'
                    .')'
                    .'|(\\d+)/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26573)'
                    .'|(\\d+)/search/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26657)'
                    .'|(\\d+)/search\\-ids/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26746)'
                    .'|(\\d+)/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26823)'
                    .'|(\\d+)/locale/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:26914)'
                    .')'
                    .'|(\\d+)/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26990)'
                    .'|(\\d+)/search/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27072)'
                    .'|(\\d+)/search\\-ids/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27159)'
                    .'|(\\d+)/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27234)'
                    .'|(\\d+)/locale\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:27338)'
                    .')'
                    .'|(\\d+)/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27427)'
                    .'|(\\d+)/search/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27522)'
                    .'|(\\d+)/search\\-ids/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27622)'
                    .'|(\\d+)/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27710)'
                    .'|(\\d+)/log\\-entry/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:27805)'
                    .')'
                    .'|(\\d+)/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27885)'
                    .'|(\\d+)/search/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27971)'
                    .'|(\\d+)/search\\-ids/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28062)'
                    .'|(\\d+)/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28141)'
                    .'|(\\d+)/mail\\-header\\-footer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:28246)'
                    .')'
                    .'|(\\d+)/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28336)'
                    .'|(\\d+)/search/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28432)'
                    .'|(\\d+)/search\\-ids/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28533)'
                    .'|(\\d+)/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28622)'
                    .'|(\\d+)/mail\\-header\\-footer\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:28740)'
                    .')'
                    .'|(\\d+)/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28843)'
                    .'|(\\d+)/search/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28952)'
                    .'|(\\d+)/search\\-ids/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29066)'
                    .'|(\\d+)/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29168)'
                    .'|(\\d+)/mail\\-template/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:29267)'
                    .')'
                    .'|(\\d+)/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29351)'
                    .'|(\\d+)/search/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29441)'
                    .'|(\\d+)/search\\-ids/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29536)'
                    .'|(\\d+)/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29619)'
                    .'|(\\d+)/mail\\-template\\-media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:29725)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29816)'
                    .'|(\\d+)/search/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29913)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30015)'
                    .'|(\\d+)/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30105)'
                    .'|(\\d+)/mail\\-template\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:30220)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30320)'
                    .'|(\\d+)/search/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30426)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30537)'
                    .'|(\\d+)/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30636)'
                    .'|(\\d+)/mail\\-template\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:30748)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30845)'
                    .'|(\\d+)/search/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30948)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31056)'
                    .'|(\\d+)/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31152)'
                    .'|(\\d+)/mail\\-template\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:31257)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31347)'
                    .'|(\\d+)/search/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31443)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31544)'
                    .'|(\\d+)/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31633)'
                    .'|(\\d+)/mail\\-template\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:31751)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31854)'
                    .'|(\\d+)/search/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31963)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32077)'
                    .'|(\\d+)/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32179)'
                    .'|(\\d+)/main\\-category/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:32278)'
                    .')'
                    .'|(\\d+)/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32362)'
                    .'|(\\d+)/search/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32452)'
                    .'|(\\d+)/search\\-ids/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32547)'
                    .'|(\\d+)/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32630)'
                    .'|(\\d+)/media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:32720)'
                    .')'
                    .'|(\\d+)/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32795)'
                    .'|(\\d+)/search/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32876)'
                    .'|(\\d+)/search\\-ids/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32962)'
                    .'|(\\d+)/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33036)'
                    .'|(\\d+)/media\\-default\\-folder/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:33143)'
                    .')'
                    .'|(\\d+)/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33235)'
                    .'|(\\d+)/search/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33333)'
                    .'|(\\d+)/search\\-ids/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33436)'
                    .'|(\\d+)/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33527)'
                    .'|(\\d+)/media\\-folder/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:33625)'
                    .')'
                    .'|(\\d+)/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33708)'
                    .'|(\\d+)/search/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33797)'
                    .'|(\\d+)/search\\-ids/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33891)'
                    .'|(\\d+)/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33973)'
                    .'|(\\d+)/media\\-folder\\-configuration/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:34086)'
                    .')'
                    .'|(\\d+)/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34184)'
                    .'|(\\d+)/search/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34288)'
                    .'|(\\d+)/search\\-ids/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34397)'
                    .'|(\\d+)/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34494)'
                    .'|(\\d+)/media\\-folder\\-configuration\\-media\\-thumbnail\\-size/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:34631)'
                    .')'
                    .'|(\\d+)/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34753)'
                    .'|(\\d+)/search/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34881)'
                    .'|(\\d+)/search\\-ids/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35014)'
                    .'|(\\d+)/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35135)'
                    .'|(\\d+)/media\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:35230)'
                    .')'
                    .'|(\\d+)/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35310)'
                    .'|(\\d+)/search/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35396)'
                    .'|(\\d+)/search\\-ids/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35487)'
                    .'|(\\d+)/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35566)'
                    .'|(\\d+)/media\\-thumbnail/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:35667)'
                    .')'
                    .'|(\\d+)/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35753)'
                    .'|(\\d+)/search/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35845)'
                    .'|(\\d+)/search\\-ids/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35942)'
                    .'|(\\d+)/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36027)'
                    .'|(\\d+)/media\\-thumbnail\\-size/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:36134)'
                    .')'
                    .'|(\\d+)/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36226)'
                    .'|(\\d+)/search/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36324)'
                    .'|(\\d+)/search\\-ids/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36427)'
                    .'|(\\d+)/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36518)'
                    .'|(\\d+)/media\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:36621)'
                    .')'
                    .'|(\\d+)/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36709)'
                    .'|(\\d+)/search/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36803)'
                    .'|(\\d+)/search\\-ids/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36902)'
                    .'|(\\d+)/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36989)'
                    .'|(\\d+)/message\\-queue\\-stats/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:37095)'
                    .')'
                    .'|(\\d+)/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37186)'
                    .'|(\\d+)/search/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37283)'
                    .'|(\\d+)/search\\-ids/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37385)'
                    .'|(\\d+)/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37475)'
                    .'|(\\d+)/newsletter\\-recipient/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:37581)'
                    .')'
                    .'|(\\d+)/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37672)'
                    .'|(\\d+)/search/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37769)'
                    .'|(\\d+)/search\\-ids/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37871)'
                    .'|(\\d+)/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37961)'
                    .'|(\\d+)/newsletter\\-recipient\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:38072)'
                    .')'
                    .'|(\\d+)/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38168)'
                    .'|(\\d+)/search/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38270)'
                    .'|(\\d+)/search\\-ids/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38377)'
                    .'|(\\d+)/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38472)'
                    .'|(\\d+)/number\\-range/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:38570)'
                    .')'
                    .'|(\\d+)/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38653)'
                    .'|(\\d+)/search/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38742)'
                    .'|(\\d+)/search\\-ids/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38836)'
                    .'|(\\d+)/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38918)'
                    .'|(\\d+)/number\\-range\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:39032)'
                    .')'
                    .'|(\\d+)/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39131)'
                    .'|(\\d+)/search/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39236)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39346)'
                    .'|(\\d+)/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39444)'
                    .'|(\\d+)/number\\-range\\-state/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:39549)'
                    .')'
                    .'|(\\d+)/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39639)'
                    .'|(\\d+)/search/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39735)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39836)'
                    .'|(\\d+)/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39925)'
                    .'|(\\d+)/number\\-range\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:40036)'
                    .')'
                    .'|(\\d+)/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40132)'
                    .'|(\\d+)/search/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40234)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40341)'
                    .'|(\\d+)/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40436)'
                    .'|(\\d+)/number\\-range\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:40540)'
                    .')'
                    .'|(\\d+)/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40629)'
                    .'|(\\d+)/search/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40724)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40824)'
                    .'|(\\d+)/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40912)'
                    .'|(\\d+)/number\\-range\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:41029)'
                    .')'
                    .'|(\\d+)/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41131)'
                    .'|(\\d+)/search/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41239)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41352)'
                    .'|(\\d+)/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41453)'
                    .'|(\\d+)/order/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:41543)'
                    .')'
                    .'|(\\d+)/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41618)'
                    .'|(\\d+)/search/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41699)'
                    .'|(\\d+)/search\\-ids/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41785)'
                    .'|(\\d+)/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41859)'
                    .'|(\\d+)/order\\-address/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:41958)'
                    .')'
                    .'|(\\d+)/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42042)'
                    .'|(\\d+)/search/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42132)'
                    .'|(\\d+)/search\\-ids/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42227)'
                    .'|(\\d+)/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42310)'
                .')'
            .')/?$}sD',
        42310 => '{^(?'
                .'|/api/v(?'
                    .'|(\\d+)/order\\-customer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:42416)'
                    .')'
                    .'|(\\d+)/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42501)'
                    .'|(\\d+)/search/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42592)'
                    .'|(\\d+)/search\\-ids/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42688)'
                    .'|(\\d+)/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42772)'
                    .'|(\\d+)/order\\-delivery/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:42872)'
                    .')'
                    .'|(\\d+)/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42957)'
                    .'|(\\d+)/search/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43048)'
                    .'|(\\d+)/search\\-ids/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43144)'
                    .'|(\\d+)/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43228)'
                    .'|(\\d+)/order\\-delivery\\-position/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:43338)'
                    .')'
                    .'|(\\d+)/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43433)'
                    .'|(\\d+)/search/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43534)'
                    .'|(\\d+)/search\\-ids/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43640)'
                    .'|(\\d+)/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43734)'
                    .'|(\\d+)/order\\-line\\-item/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:43836)'
                    .')'
                    .'|(\\d+)/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43923)'
                    .'|(\\d+)/search/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44016)'
                    .'|(\\d+)/search\\-ids/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44114)'
                    .'|(\\d+)/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44200)'
                    .'|(\\d+)/order\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:44295)'
                    .')'
                    .'|(\\d+)/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44375)'
                    .'|(\\d+)/search/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44461)'
                    .'|(\\d+)/search\\-ids/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44552)'
                    .'|(\\d+)/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44631)'
                    .'|(\\d+)/order\\-transaction/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:44734)'
                    .')'
                    .'|(\\d+)/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44822)'
                    .'|(\\d+)/search/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44916)'
                    .'|(\\d+)/search\\-ids/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45015)'
                    .'|(\\d+)/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45102)'
                    .'|(\\d+)/payment\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:45202)'
                    .')'
                    .'|(\\d+)/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45287)'
                    .'|(\\d+)/search/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45378)'
                    .'|(\\d+)/search\\-ids/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45474)'
                    .'|(\\d+)/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45558)'
                    .'|(\\d+)/payment\\-method\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:45671)'
                    .')'
                    .'|(\\d+)/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45769)'
                    .'|(\\d+)/search/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45873)'
                    .'|(\\d+)/search\\-ids/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45982)'
                    .'|(\\d+)/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46079)'
                    .'|(\\d+)/payone\\-payment\\-card/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:46185)'
                    .')'
                    .'|(\\d+)/payone\\-payment\\-card((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46276)'
                    .'|(\\d+)/search/payone\\-payment\\-card((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46373)'
                    .'|(\\d+)/search\\-ids/payone\\-payment\\-card((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46475)'
                    .'|(\\d+)/payone\\-payment\\-card((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46565)'
                    .'|(\\d+)/payone\\-payment\\-mandate/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:46674)'
                    .')'
                    .'|(\\d+)/payone\\-payment\\-mandate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46768)'
                    .'|(\\d+)/search/payone\\-payment\\-mandate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46868)'
                    .'|(\\d+)/search\\-ids/payone\\-payment\\-mandate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46973)'
                    .'|(\\d+)/payone\\-payment\\-mandate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47066)'
                    .'|(\\d+)/plugin/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:47157)'
                    .')'
                    .'|(\\d+)/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47233)'
                    .'|(\\d+)/search/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47315)'
                    .'|(\\d+)/search\\-ids/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47402)'
                    .'|(\\d+)/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47477)'
                    .'|(\\d+)/plugin\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:47581)'
                    .')'
                    .'|(\\d+)/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47670)'
                    .'|(\\d+)/search/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47765)'
                    .'|(\\d+)/search\\-ids/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47865)'
                    .'|(\\d+)/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47953)'
                    .'|(\\d+)/product/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:48045)'
                    .')'
                    .'|(\\d+)/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48122)'
                    .'|(\\d+)/search/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48205)'
                    .'|(\\d+)/search\\-ids/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48293)'
                    .'|(\\d+)/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48369)'
                    .'|(\\d+)/product\\-category/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:48471)'
                    .')'
                    .'|(\\d+)/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48558)'
                    .'|(\\d+)/search/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48651)'
                    .'|(\\d+)/search\\-ids/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48749)'
                    .'|(\\d+)/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48835)'
                    .'|(\\d+)/product\\-category\\-tree/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:48943)'
                    .')'
                    .'|(\\d+)/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49036)'
                    .'|(\\d+)/search/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49135)'
                    .'|(\\d+)/search\\-ids/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49239)'
                    .'|(\\d+)/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49331)'
                    .'|(\\d+)/product\\-configurator\\-setting/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:49446)'
                    .')'
                    .'|(\\d+)/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49546)'
                    .'|(\\d+)/search/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49652)'
                    .'|(\\d+)/search\\-ids/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49763)'
                    .'|(\\d+)/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49862)'
                    .'|(\\d+)/product\\-cross\\-selling/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:49970)'
                    .')'
                    .'|(\\d+)/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50063)'
                    .'|(\\d+)/search/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50162)'
                    .'|(\\d+)/search\\-ids/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50266)'
                    .'|(\\d+)/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50358)'
                    .'|(\\d+)/product\\-cross\\-selling\\-assigned\\-products/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:50486)'
                    .')'
                    .'|(\\d+)/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50599)'
                    .'|(\\d+)/search/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50718)'
                    .'|(\\d+)/search\\-ids/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50842)'
                    .'|(\\d+)/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50954)'
                    .'|(\\d+)/product\\-cross\\-selling\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:51075)'
                    .')'
                    .'|(\\d+)/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51181)'
                    .'|(\\d+)/search/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51293)'
                    .'|(\\d+)/search\\-ids/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51410)'
                    .'|(\\d+)/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51515)'
                    .'|(\\d+)/product\\-custom\\-field\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:51627)'
                    .')'
                    .'|(\\d+)/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51724)'
                    .'|(\\d+)/search/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51827)'
                    .'|(\\d+)/search\\-ids/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51935)'
                    .'|(\\d+)/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52031)'
                    .'|(\\d+)/product\\-export/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:52131)'
                    .')'
                    .'|(\\d+)/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52216)'
                    .'|(\\d+)/search/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52307)'
                    .'|(\\d+)/search\\-ids/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52403)'
                    .'|(\\d+)/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52487)'
                    .'|(\\d+)/product\\-keyword\\-dictionary/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:52600)'
                    .')'
                    .'|(\\d+)/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52698)'
                    .'|(\\d+)/search/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52802)'
                    .'|(\\d+)/search\\-ids/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52911)'
                    .'|(\\d+)/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53008)'
                    .'|(\\d+)/product\\-manufacturer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:53114)'
                    .')'
                    .'|(\\d+)/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53205)'
                    .'|(\\d+)/search/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53302)'
                    .'|(\\d+)/search\\-ids/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53404)'
                    .'|(\\d+)/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53494)'
                    .'|(\\d+)/product\\-manufacturer\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:53613)'
                    .')'
                    .'|(\\d+)/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53717)'
                    .'|(\\d+)/search/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53827)'
                    .'|(\\d+)/search\\-ids/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53942)'
                    .'|(\\d+)/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54045)'
                    .'|(\\d+)/product\\-media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:54144)'
                    .')'
                    .'|(\\d+)/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54228)'
                    .'|(\\d+)/search/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54318)'
                    .'|(\\d+)/search\\-ids/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54413)'
                    .'|(\\d+)/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54496)'
                    .'|(\\d+)/product\\-option/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:54596)'
                    .')'
                    .'|(\\d+)/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54681)'
                    .'|(\\d+)/search/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54772)'
                    .'|(\\d+)/search\\-ids/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54868)'
                    .'|(\\d+)/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54952)'
                    .'|(\\d+)/product\\-price/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:55051)'
                    .')'
                    .'|(\\d+)/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55135)'
                    .'|(\\d+)/search/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55225)'
                    .'|(\\d+)/search\\-ids/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55320)'
                    .'|(\\d+)/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55403)'
                    .'|(\\d+)/product\\-property/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:55505)'
                    .')'
                    .'|(\\d+)/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55592)'
                    .'|(\\d+)/search/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55685)'
                    .'|(\\d+)/search\\-ids/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55783)'
                    .'|(\\d+)/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55869)'
                    .'|(\\d+)/product\\-review/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:55969)'
                    .')'
                    .'|(\\d+)/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56054)'
                    .'|(\\d+)/search/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56145)'
                    .'|(\\d+)/search\\-ids/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56241)'
                    .'|(\\d+)/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56325)'
                    .'|(\\d+)/product\\-search\\-keyword/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:56434)'
                    .')'
                    .'|(\\d+)/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56528)'
                    .'|(\\d+)/search/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56628)'
                    .'|(\\d+)/search\\-ids/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56733)'
                    .'|(\\d+)/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56826)'
                    .'|(\\d+)/product\\-stream/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:56926)'
                    .')'
                    .'|(\\d+)/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57011)'
                    .'|(\\d+)/search/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57102)'
                    .'|(\\d+)/search\\-ids/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57198)'
                    .'|(\\d+)/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57282)'
                    .'|(\\d+)/product\\-stream\\-filter/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:57390)'
                    .')'
                    .'|(\\d+)/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57483)'
                    .'|(\\d+)/search/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57582)'
                    .'|(\\d+)/search\\-ids/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57686)'
                    .'|(\\d+)/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57778)'
                    .'|(\\d+)/product\\-stream\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:57891)'
                    .')'
                    .'|(\\d+)/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57989)'
                    .'|(\\d+)/search/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58093)'
                    .'|(\\d+)/search\\-ids/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58202)'
                    .'|(\\d+)/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58299)'
                    .'|(\\d+)/product\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:58396)'
                    .')'
                    .'|(\\d+)/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58478)'
                    .'|(\\d+)/search/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58566)'
                    .'|(\\d+)/search\\-ids/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58659)'
                    .'|(\\d+)/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58740)'
                    .'|(\\d+)/product\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:58845)'
                    .')'
                    .'|(\\d+)/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58935)'
                    .'|(\\d+)/search/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59031)'
                    .'|(\\d+)/search\\-ids/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59132)'
                    .'|(\\d+)/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59221)'
                    .'|(\\d+)/product\\-visibility/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:59325)'
                    .')'
                    .'|(\\d+)/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59414)'
                    .'|(\\d+)/search/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59509)'
                    .'|(\\d+)/search\\-ids/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59609)'
                    .'|(\\d+)/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59697)'
                    .'|(\\d+)/promotion/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:59791)'
                    .')'
                    .'|(\\d+)/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59870)'
                    .'|(\\d+)/search/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59955)'
                    .'|(\\d+)/search\\-ids/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60045)'
                    .'|(\\d+)/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60123)'
                    .'|(\\d+)/promotion\\-cart\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:60229)'
                    .')'
                    .'|(\\d+)/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60320)'
                    .'|(\\d+)/search/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60417)'
                    .'|(\\d+)/search\\-ids/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60519)'
                    .'|(\\d+)/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60609)'
                    .'|(\\d+)/promotion\\-discount/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:60713)'
                    .')'
                    .'|(\\d+)/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60802)'
                    .'|(\\d+)/search/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60897)'
                    .'|(\\d+)/search\\-ids/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60997)'
                    .'|(\\d+)/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61085)'
                    .'|(\\d+)/promotion\\-discount\\-prices/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:61197)'
                    .')'
                    .'|(\\d+)/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61294)'
                    .'|(\\d+)/search/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61397)'
                    .'|(\\d+)/search\\-ids/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61505)'
                    .'|(\\d+)/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61601)'
                    .'|(\\d+)/promotion\\-discount\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:61711)'
                    .')'
                    .'|(\\d+)/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61806)'
                    .'|(\\d+)/search/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61907)'
                    .'|(\\d+)/search\\-ids/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62013)'
                    .'|(\\d+)/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62107)'
                    .'|(\\d+)/promotion\\-individual\\-code/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:62219)'
                    .')'
                    .'|(\\d+)/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62316)'
                    .'|(\\d+)/search/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62419)'
                    .'|(\\d+)/search\\-ids/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62527)'
                    .'|(\\d+)/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62623)'
                    .'|(\\d+)/promotion\\-order\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:62730)'
                    .')'
                    .'|(\\d+)/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62822)'
                    .'|(\\d+)/search/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62920)'
                    .'|(\\d+)/search\\-ids/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63023)'
                    .'|(\\d+)/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63114)'
                    .'|(\\d+)/promotion\\-persona\\-customer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:63227)'
                    .')'
                    .'|(\\d+)/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63325)'
                    .'|(\\d+)/search/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63429)'
                    .'|(\\d+)/search\\-ids/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63538)'
                    .'|(\\d+)/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63635)'
                    .'|(\\d+)/promotion\\-persona\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:63744)'
                    .')'
                    .'|(\\d+)/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63838)'
                    .'|(\\d+)/search/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63938)'
                    .'|(\\d+)/search\\-ids/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64043)'
                    .'|(\\d+)/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64136)'
                    .'|(\\d+)/promotion\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:64246)'
                    .')'
                    .'|(\\d+)/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64341)'
                    .'|(\\d+)/search/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64442)'
                    .'|(\\d+)/search\\-ids/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64548)'
                    .'|(\\d+)/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64642)'
                    .'|(\\d+)/promotion\\-setgroup/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:64746)'
                    .')'
                    .'|(\\d+)/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64835)'
                    .'|(\\d+)/search/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64930)'
                    .'|(\\d+)/search\\-ids/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65030)'
                    .'|(\\d+)/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65118)'
                    .'|(\\d+)/promotion\\-setgroup\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:65228)'
                    .')'
                    .'|(\\d+)/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65323)'
                    .'|(\\d+)/search/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65424)'
                    .'|(\\d+)/search\\-ids/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65530)'
                    .'|(\\d+)/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65624)'
                    .'|(\\d+)/promotion\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:65731)'
                    .')'
                    .'|(\\d+)/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65823)'
                    .'|(\\d+)/search/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65921)'
                    .'|(\\d+)/search\\-ids/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66024)'
                    .'|(\\d+)/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66115)'
                    .'|(\\d+)/property\\-group/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:66215)'
                    .')'
                    .'|(\\d+)/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66300)'
                    .'|(\\d+)/search/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66391)'
                    .'|(\\d+)/search\\-ids/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66487)'
                    .'|(\\d+)/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66571)'
                    .'|(\\d+)/property\\-group\\-option/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:66679)'
                    .')'
                    .'|(\\d+)/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66772)'
                    .'|(\\d+)/search/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66871)'
                    .'|(\\d+)/search\\-ids/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66975)'
                    .'|(\\d+)/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67067)'
                    .'|(\\d+)/property\\-group\\-option\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:67188)'
                    .')'
                    .'|(\\d+)/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67294)'
                    .'|(\\d+)/search/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67406)'
                    .'|(\\d+)/search\\-ids/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67523)'
                    .'|(\\d+)/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67628)'
                    .'|(\\d+)/property\\-group\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:67741)'
                    .')'
                    .'|(\\d+)/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67839)'
                    .'|(\\d+)/search/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67943)'
                    .'|(\\d+)/search\\-ids/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68052)'
                    .'|(\\d+)/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68149)'
                    .'|(\\d+)/rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:68238)'
                    .')'
                    .'|(\\d+)/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68312)'
                    .'|(\\d+)/search/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68392)'
                    .'|(\\d+)/search\\-ids/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68477)'
                    .'|(\\d+)/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68550)'
                    .'|(\\d+)/rule\\-condition/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:68650)'
                    .')'
                    .'|(\\d+)/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68735)'
                    .'|(\\d+)/search/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68826)'
                    .'|(\\d+)/search\\-ids/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68922)'
                    .'|(\\d+)/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69006)'
                    .'|(\\d+)/sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:69105)'
                    .')'
                    .'|(\\d+)/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69189)'
                    .'|(\\d+)/search/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69279)'
                    .'|(\\d+)/search\\-ids/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69374)'
                    .'|(\\d+)/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69457)'
                    .'|(\\d+)/sales\\-channel\\-analytics/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:69567)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69662)'
                    .'|(\\d+)/search/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69763)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69869)'
                .')'
            .')/?$}sD',
        69869 => '{^(?'
                .'|/api/v(?'
                    .'|(\\d+)/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69969)'
                    .'|(\\d+)/sales\\-channel\\-country/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:70077)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70170)'
                    .'|(\\d+)/search/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70269)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70373)'
                    .'|(\\d+)/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70465)'
                    .'|(\\d+)/sales\\-channel\\-currency/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:70574)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70668)'
                    .'|(\\d+)/search/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70768)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70873)'
                    .'|(\\d+)/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70966)'
                    .'|(\\d+)/sales\\-channel\\-domain/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:71073)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71165)'
                    .'|(\\d+)/search/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71263)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71366)'
                    .'|(\\d+)/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71457)'
                    .'|(\\d+)/sales\\-channel\\-language/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:71566)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71660)'
                    .'|(\\d+)/search/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71760)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71865)'
                    .'|(\\d+)/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71958)'
                    .'|(\\d+)/sales\\-channel\\-payment\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:72074)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72175)'
                    .'|(\\d+)/search/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72282)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72394)'
                    .'|(\\d+)/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72494)'
                    .'|(\\d+)/sales\\-channel\\-shipping\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:72611)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72713)'
                    .'|(\\d+)/search/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72821)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72934)'
                    .'|(\\d+)/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73035)'
                    .'|(\\d+)/sales\\-channel\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:73147)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73244)'
                    .'|(\\d+)/search/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73347)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73455)'
                    .'|(\\d+)/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73551)'
                    .'|(\\d+)/sales\\-channel\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:73656)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73746)'
                    .'|(\\d+)/search/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73842)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73943)'
                    .'|(\\d+)/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74032)'
                    .'|(\\d+)/sales\\-channel\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:74150)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74253)'
                    .'|(\\d+)/search/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74362)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74476)'
                    .'|(\\d+)/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74578)'
                    .'|(\\d+)/salutation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:74673)'
                    .')'
                    .'|(\\d+)/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74753)'
                    .'|(\\d+)/search/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74839)'
                    .'|(\\d+)/search\\-ids/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74930)'
                    .'|(\\d+)/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75009)'
                    .'|(\\d+)/salutation\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:75117)'
                    .')'
                    .'|(\\d+)/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75210)'
                    .'|(\\d+)/search/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75309)'
                    .'|(\\d+)/search\\-ids/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75413)'
                    .'|(\\d+)/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75505)'
                    .'|(\\d+)/scheduled\\-task/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:75605)'
                    .')'
                    .'|(\\d+)/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75690)'
                    .'|(\\d+)/search/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75781)'
                    .'|(\\d+)/search\\-ids/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75877)'
                    .'|(\\d+)/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75961)'
                    .'|(\\d+)/seo\\-url/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:76054)'
                    .')'
                    .'|(\\d+)/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76132)'
                    .'|(\\d+)/search/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76216)'
                    .'|(\\d+)/search\\-ids/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76305)'
                    .'|(\\d+)/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76382)'
                    .'|(\\d+)/seo\\-url\\-template/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:76485)'
                    .')'
                    .'|(\\d+)/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76573)'
                    .'|(\\d+)/search/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76667)'
                    .'|(\\d+)/search\\-ids/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76766)'
                    .'|(\\d+)/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76853)'
                    .'|(\\d+)/shipping\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:76954)'
                    .')'
                    .'|(\\d+)/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77040)'
                    .'|(\\d+)/search/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77132)'
                    .'|(\\d+)/search\\-ids/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77229)'
                    .'|(\\d+)/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77314)'
                    .'|(\\d+)/shipping\\-method\\-price/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:77422)'
                    .')'
                    .'|(\\d+)/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77515)'
                    .'|(\\d+)/search/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77614)'
                    .'|(\\d+)/search\\-ids/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77718)'
                    .'|(\\d+)/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77810)'
                    .'|(\\d+)/shipping\\-method\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:77916)'
                    .')'
                    .'|(\\d+)/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78007)'
                    .'|(\\d+)/search/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78104)'
                    .'|(\\d+)/search\\-ids/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78206)'
                    .'|(\\d+)/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78296)'
                    .'|(\\d+)/shipping\\-method\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:78410)'
                    .')'
                    .'|(\\d+)/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78509)'
                    .'|(\\d+)/search/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78614)'
                    .'|(\\d+)/search\\-ids/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78724)'
                    .'|(\\d+)/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78822)'
                    .'|(\\d+)/snippet/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:78914)'
                    .')'
                    .'|(\\d+)/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78991)'
                    .'|(\\d+)/search/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79074)'
                    .'|(\\d+)/search\\-ids/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79162)'
                    .'|(\\d+)/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79238)'
                    .'|(\\d+)/snippet\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:79335)'
                    .')'
                    .'|(\\d+)/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79417)'
                    .'|(\\d+)/search/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79505)'
                    .'|(\\d+)/search\\-ids/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79598)'
                    .'|(\\d+)/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79679)'
                    .'|(\\d+)/state\\-machine/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:79778)'
                    .')'
                    .'|(\\d+)/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79862)'
                    .'|(\\d+)/search/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79952)'
                    .'|(\\d+)/search\\-ids/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80047)'
                    .'|(\\d+)/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80130)'
                    .'|(\\d+)/state\\-machine\\-history/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:80238)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80331)'
                    .'|(\\d+)/search/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80430)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80534)'
                    .'|(\\d+)/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80626)'
                    .'|(\\d+)/state\\-machine\\-state/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:80732)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80823)'
                    .'|(\\d+)/search/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80920)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81022)'
                    .'|(\\d+)/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81112)'
                    .'|(\\d+)/state\\-machine\\-state\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:81231)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81335)'
                    .'|(\\d+)/search/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81445)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81560)'
                    .'|(\\d+)/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81663)'
                    .'|(\\d+)/state\\-machine\\-transition/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:81774)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81870)'
                    .'|(\\d+)/search/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81972)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82079)'
                    .'|(\\d+)/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82174)'
                    .'|(\\d+)/state\\-machine\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:82286)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82383)'
                    .'|(\\d+)/search/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82486)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82594)'
                    .'|(\\d+)/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82690)'
                    .'|(\\d+)/swag\\-migration\\-connection/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:82802)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-connection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82899)'
                    .'|(\\d+)/search/swag\\-migration\\-connection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83002)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-connection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83110)'
                    .'|(\\d+)/swag\\-migration\\-connection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83206)'
                    .'|(\\d+)/swag\\-migration\\-data/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:83312)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83403)'
                    .'|(\\d+)/search/swag\\-migration\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83500)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83602)'
                    .'|(\\d+)/swag\\-migration\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83692)'
                    .'|(\\d+)/swag\\-migration\\-general\\-setting/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:83810)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-general\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83913)'
                    .'|(\\d+)/search/swag\\-migration\\-general\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84022)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-general\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84136)'
                    .'|(\\d+)/swag\\-migration\\-general\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84238)'
                    .'|(\\d+)/swag\\-migration\\-logging/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:84347)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-logging((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84441)'
                    .'|(\\d+)/search/swag\\-migration\\-logging((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84541)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-logging((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84646)'
                    .'|(\\d+)/swag\\-migration\\-logging((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84739)'
                    .'|(\\d+)/swag\\-migration\\-mapping/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:84848)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84942)'
                    .'|(\\d+)/search/swag\\-migration\\-mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85042)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85147)'
                    .'|(\\d+)/swag\\-migration\\-mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85240)'
                    .'|(\\d+)/swag\\-migration\\-media\\-file/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:85353)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-media\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85451)'
                    .'|(\\d+)/search/swag\\-migration\\-media\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85555)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-media\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85664)'
                    .'|(\\d+)/swag\\-migration\\-media\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85761)'
                    .'|(\\d+)/swag\\-migration\\-run/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:85866)'
                    .')'
                    .'|(\\d+)/swag\\-migration\\-run((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85956)'
                    .'|(\\d+)/search/swag\\-migration\\-run((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86052)'
                    .'|(\\d+)/search\\-ids/swag\\-migration\\-run((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86153)'
                    .'|(\\d+)/swag\\-migration\\-run((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86242)'
                    .'|(\\d+)/system\\-config/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:86341)'
                    .')'
                    .'|(\\d+)/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86425)'
                    .'|(\\d+)/search/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86515)'
                    .'|(\\d+)/search\\-ids/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86610)'
                    .'|(\\d+)/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86693)'
                    .'|(\\d+)/tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:86781)'
                    .')'
                    .'|(\\d+)/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86854)'
                    .'|(\\d+)/search/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86933)'
                    .'|(\\d+)/search\\-ids/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87017)'
                    .'|(\\d+)/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87089)'
                    .'|(\\d+)/tax/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:87177)'
                    .')'
                    .'|(\\d+)/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87250)'
                    .'|(\\d+)/search/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87329)'
                    .'|(\\d+)/search\\-ids/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87413)'
                    .'|(\\d+)/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87485)'
                    .'|(\\d+)/tax\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:87579)'
                    .')'
                    .'|(\\d+)/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87658)'
                    .'|(\\d+)/search/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87743)'
                    .'|(\\d+)/search\\-ids/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87833)'
                    .'|(\\d+)/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87911)'
                    .'|(\\d+)/tax\\-rule\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:88011)'
                    .')'
                    .'|(\\d+)/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88096)'
                    .'|(\\d+)/search/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88187)'
                    .'|(\\d+)/search\\-ids/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88283)'
                    .'|(\\d+)/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88367)'
                    .'|(\\d+)/tax\\-rule\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:88480)'
                    .')'
                    .'|(\\d+)/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88578)'
                    .'|(\\d+)/search/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88682)'
                    .'|(\\d+)/search\\-ids/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88791)'
                    .'|(\\d+)/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88888)'
                    .'|(\\d+)/theme/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:88978)'
                    .')'
                    .'|(\\d+)/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89053)'
                    .'|(\\d+)/search/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89134)'
                    .'|(\\d+)/search\\-ids/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89220)'
                    .'|(\\d+)/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89294)'
                    .'|(\\d+)/theme\\-media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:89391)'
                    .')'
                    .'|(\\d+)/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89473)'
                    .'|(\\d+)/search/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89561)'
                    .'|(\\d+)/search\\-ids/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89654)'
                    .'|(\\d+)/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89735)'
                    .'|(\\d+)/theme\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:89841)'
                    .')'
                    .'|(\\d+)/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89932)'
                    .'|(\\d+)/search/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90029)'
                    .'|(\\d+)/search\\-ids/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90131)'
                    .'|(\\d+)/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90221)'
                    .'|(\\d+)/theme\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:90324)'
                    .')'
                    .'|(\\d+)/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90412)'
                    .'|(\\d+)/search/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90506)'
                    .'|(\\d+)/search\\-ids/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90605)'
                    .'|(\\d+)/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90692)'
                    .'|(\\d+)/unit/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:90781)'
                    .')'
                    .'|(\\d+)/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90855)'
                    .'|(\\d+)/search/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90935)'
                    .'|(\\d+)/search\\-ids/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91020)'
                    .'|(\\d+)/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91093)'
                    .'|(\\d+)/unit\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:91195)'
                    .')'
                    .'|(\\d+)/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91282)'
                    .'|(\\d+)/search/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91375)'
                    .'|(\\d+)/search\\-ids/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91473)'
                    .'|(\\d+)/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91559)'
                    .'|(\\d+)/user/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:91645)'
                    .'|(\\d+)/user((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91718)'
                    .'|(\\d+)/search/user((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91798)'
                    .'|(\\d+)/search\\-ids/user((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91883)'
                    .'|(\\d+)/user\\-access\\-key/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:91985)'
                    .')'
                    .'|(\\d+)/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92072)'
                    .'|(\\d+)/search/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92165)'
                    .'|(\\d+)/search\\-ids/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92263)'
                    .'|(\\d+)/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92349)'
                    .'|(\\d+)/user\\-recovery/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:92448)'
                    .')'
                    .'|(\\d+)/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92532)'
                    .'|(\\d+)/search/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92622)'
                    .'|(\\d+)/search\\-ids/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92717)'
                    .'|(\\d+)/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92800)'
                    .'|(\\d+)/version/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:92892)'
                    .')'
                    .'|(\\d+)/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92969)'
                    .'|(\\d+)/search/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93052)'
                    .'|(\\d+)/search\\-ids/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93140)'
                    .'|(\\d+)/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93216)'
                    .'|(\\d+)/version\\-commit/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:93316)'
                    .')'
                    .'|(\\d+)/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93401)'
                    .'|(\\d+)/search/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93492)'
                    .'|(\\d+)/search\\-ids/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93588)'
                    .'|(\\d+)/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93672)'
                    .'|(\\d+)/version\\-commit\\-data/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:93778)'
                    .')'
                    .'|(\\d+)/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93869)'
                    .'|(\\d+)/search/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93966)'
                    .'|(\\d+)/search\\-ids/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:94068)'
                    .'|(\\d+)/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:94158)'
                    .'|([^/]++)/(?'
                        .'|_info/(?'
                            .'|me(*:94191)'
                            .'|ping(*:94205)'
                        .')'
                        .'|user(?'
                            .'|/([^/]++)(?'
                                .'|(*:94235)'
                                .'|/access\\-keys/([^/]++)(*:94267)'
                                .'|(*:94277)'
                            .')'
                            .'|(*:94288)'
                        .')'
                    .')'
                .')'
                .'|/sales\\-channel\\-api/v(?'
                    .'|(\\d+)/category/([^/]++)(*:94349)'
                    .'|(\\d+)/search\\-ids/category(*:94385)'
                    .'|(\\d+)/category(*:94409)'
                    .'|(\\d+)/country/([^/]++)(*:94441)'
                    .'|(\\d+)/search\\-ids/country(*:94476)'
                    .'|(\\d+)/country(*:94499)'
                    .'|(\\d+)/country\\-state/([^/]++)(*:94538)'
                    .'|(\\d+)/search\\-ids/country\\-state(*:94580)'
                    .'|(\\d+)/country\\-state(*:94610)'
                    .'|(\\d+)/currency/([^/]++)(*:94643)'
                    .'|(\\d+)/search\\-ids/currency(*:94679)'
                    .'|(\\d+)/currency(*:94703)'
                    .'|(\\d+)/language/([^/]++)(*:94736)'
                    .'|(\\d+)/search\\-ids/language(*:94772)'
                    .'|(\\d+)/language(*:94796)'
                    .'|(\\d+)/main\\-category/([^/]++)(*:94835)'
                    .'|(\\d+)/search\\-ids/main\\-category(*:94877)'
                    .'|(\\d+)/main\\-category(*:94907)'
                    .'|(\\d+)/payment\\-method/([^/]++)(*:94947)'
                    .'|(\\d+)/search\\-ids/payment\\-method(*:94990)'
                    .'|(\\d+)/payment\\-method(*:95021)'
                    .'|(\\d+)/product/([^/]++)(*:95053)'
                    .'|(\\d+)/search\\-ids/product(*:95088)'
                    .'|(\\d+)/product(*:95111)'
                    .'|(\\d+)/salutation/([^/]++)(*:95146)'
                    .'|(\\d+)/search\\-ids/salutation(*:95184)'
                    .'|(\\d+)/salutation(*:95210)'
                    .'|(\\d+)/seo\\-url/([^/]++)(*:95243)'
                    .'|(\\d+)/search\\-ids/seo\\-url(*:95279)'
                    .'|(\\d+)/seo\\-url(*:95303)'
                    .'|(\\d+)/shipping\\-method/([^/]++)(*:95344)'
                    .'|(\\d+)/search\\-ids/shipping\\-method(*:95388)'
                    .'|(\\d+)/shipping\\-method(*:95420)'
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
        3585 => [[['_route' => 'api.action.paypal.refund_payment', '_controller' => 'Swag\\PayPal\\Payment\\PayPalPaymentController::refundPayment'], ['version', 'resourceType', 'resourceId', 'orderId'], ['POST' => 0], null, false, true, null]],
        3637 => [[['_route' => 'api.action.paypal.catpure_payment', '_controller' => 'Swag\\PayPal\\Payment\\PayPalPaymentController::capturePayment'], ['version', 'resourceType', 'resourceId', 'orderId'], ['POST' => 0], null, false, true, null]],
        3689 => [[['_route' => 'api.action.paypal.void_payment', '_controller' => 'Swag\\PayPal\\Payment\\PayPalPaymentController::voidPayment'], ['version', 'resourceType', 'resourceId', 'orderId'], ['POST' => 0], null, false, true, null]],
        3723 => [[['_route' => 'api.action.paypal.validate.api.credentials', '_controller' => 'Swag\\PayPal\\Setting\\SettingsController::validateApiCredentials'], ['version'], ['GET' => 0], null, false, false, null]],
        3754 => [[['_route' => 'api.action.paypal.saleschannel_default', '_controller' => 'Swag\\PayPal\\Payment\\PayPalPaymentMethodController::setPayPalPaymentMethodAsSalesChannelDefault'], ['version'], ['POST' => 0], null, false, false, null]],
        3784 => [[['_route' => 'api.action.paypal.get.api.credentials', '_controller' => 'Swag\\PayPal\\Setting\\SettingsController::getApiCredentials'], ['version'], ['POST' => 0], null, false, false, null]],
        3821 => [[['_route' => 'api.action.paypal.webhook.register', '_controller' => 'Swag\\PayPal\\Webhook\\WebhookController::registerWebhook'], ['version', 'salesChannelId'], ['POST' => 0], null, false, true, null]],
        3837 => [[['_route' => 'api.action.paypal.webhook.execute', 'auth_required' => false, '_controller' => 'Swag\\PayPal\\Webhook\\WebhookController::executeWebhook'], ['version'], ['POST' => 0], null, false, false, null]],
        3873 => [[['_route' => 'api.action.payone.refund_payment', '_controller' => 'PayonePayment\\Controller\\RefundController::refundAction'], ['version'], ['POST' => 0], null, false, false, null]],
        3898 => [[['_route' => 'api.action.payone.capture_payment', '_controller' => 'PayonePayment\\Controller\\CaptureController::captureAction'], ['version'], ['POST' => 0], null, false, false, null]],
        3946 => [[['_route' => 'api.action.payone_payment.validate.api.credentials', '_controller' => 'PayonePayment\\Controller\\SettingsController::validateApiCredentials'], ['version'], ['POST' => 0], null, false, false, null]],
        3995 => [[['_route' => 'api.action.payone_payment.get.state_machine_transition.actions', '_controller' => 'PayonePayment\\Controller\\SettingsController::getStateMachineTransitionActions'], ['version'], ['GET' => 0], null, false, false, null]],
        4042 => [[['_route' => 'api.action.theme.configuration', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::configuration'], ['version', 'themeId'], ['GET' => 0], null, false, false, null]],
        4066 => [[['_route' => 'api.action.theme.assign', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::assignTheme'], ['version', 'themeId', 'salesChannelId'], ['POST' => 0], null, false, true, null]],
        4080 => [[['_route' => 'api.action.theme.reset', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::resetTheme'], ['version', 'themeId'], ['PATCH' => 0], null, false, false, null]],
        4095 => [[['_route' => 'api.action.theme.fields', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::fields'], ['version', 'themeId'], ['GET' => 0], null, false, false, null]],
        4122 => [[['_route' => 'api.action.theme.structuredFields', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::structuredFields'], ['version', 'themeId'], ['GET' => 0], null, false, false, null]],
        4132 => [[['_route' => 'api.action.theme.update', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::updateTheme'], ['version', 'themeId'], ['PATCH' => 0], null, false, true, null]],
        4181 => [[['_route' => 'api.admin.migration.download-logs-of-run', 'auth_required' => false, '_controller' => 'SwagMigrationAssistant\\Controller\\HistoryController::downloadLogsOfRun'], ['version'], ['POST' => 0], null, false, false, null]],
        4204 => [[['_route' => 'api.admin.migration.data-selection', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::getDataSelection'], ['version'], ['GET' => 0], null, false, false, null]],
        4228 => [[['_route' => 'api.admin.migration.fetch-data', '_controller' => 'SwagMigrationAssistant\\Controller\\MigrationController::fetchData'], ['version'], ['POST' => 0], null, false, false, null]],
        4253 => [[['_route' => 'api.admin.migration.finish-migration', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::finishMigration'], ['version'], ['POST' => 0], null, false, false, null]],
        4289 => [[['_route' => 'api.admin.migration.update-write-progress', '_controller' => 'SwagMigrationAssistant\\Controller\\MigrationController::updateWriteProgress'], ['version'], ['POST' => 0], null, false, false, null]],
        4320 => [[['_route' => 'api.admin.migration.update-media-files-progress', '_controller' => 'SwagMigrationAssistant\\Controller\\MigrationController::updateMediaFilesProgress'], ['version'], ['POST' => 0], null, false, false, null]],
        4352 => [[['_route' => 'api.admin.migration.update-connection-credentials', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::updateConnectionCredentials'], ['version'], ['POST' => 0], null, false, false, null]],
        4376 => [[['_route' => 'api.admin.migration.write-data', '_controller' => 'SwagMigrationAssistant\\Controller\\MigrationController::writeData'], ['version'], ['POST' => 0], null, false, false, null]],
        4395 => [[['_route' => 'api.admin.migration.write-premapping', '_controller' => 'SwagMigrationAssistant\\Controller\\PremappingController::writePremapping'], ['version'], ['POST' => 0], null, false, false, null]],
        4419 => [[['_route' => 'api.admin.migration.process-media', '_controller' => 'SwagMigrationAssistant\\Controller\\MigrationController::processMedia'], ['version'], ['POST' => 0], null, false, false, null]],
        4436 => [[['_route' => 'api.action.migration.indexing', '_controller' => 'SwagMigrationAssistant\\Controller\\MigrationController::indexing'], ['version'], ['POST' => 0], null, false, false, null]],
        4468 => [[['_route' => 'api.admin.migration.generate-premapping', '_controller' => 'SwagMigrationAssistant\\Controller\\PremappingController::generatePremapping'], ['version'], ['POST' => 0], null, false, false, null]],
        4506 => [[['_route' => 'api.admin.migration.get-profile-information', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::getProfileInformation'], ['version'], ['GET' => 0], null, false, false, null]],
        4516 => [[['_route' => 'api.admin.migration.get-profiles', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::getProfiles'], ['version'], ['GET' => 0], null, false, false, null]],
        4534 => [[['_route' => 'api.admin.migration.get-gateways', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::getGateways'], ['version'], ['GET' => 0], null, false, false, null]],
        4548 => [[['_route' => 'api.admin.migration.get-state', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::getState'], ['version'], ['POST' => 0], null, false, false, null]],
        4570 => [[['_route' => 'api.admin.migration.get-reset-status', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::getResetStatus'], ['version'], ['GET' => 0], null, false, false, null]],
        4601 => [[['_route' => 'api.admin.migration.check-connection', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::checkConnection'], ['version'], ['POST' => 0], null, false, false, null]],
        4626 => [[['_route' => 'api.admin.migration.create-migration', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::createMigration'], ['version'], ['POST' => 0], null, false, false, null]],
        4658 => [[['_route' => 'api.admin.migration.cleanup-migration-data', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::cleanupMigrationData'], ['version'], ['POST' => 0], null, false, false, null]],
        4687 => [[['_route' => 'api.admin.migration.takeover-migration', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::takeoverMigration'], ['version'], ['POST' => 0], null, false, false, null]],
        4715 => [[['_route' => 'api.admin.migration.abort-migration', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::abortMigration'], ['version'], ['POST' => 0], null, false, false, null]],
        4737 => [[['_route' => 'api.admin.migration.assign-themes', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::assignThemes'], ['version'], ['POST' => 0], null, false, false, null]],
        4763 => [[['_route' => 'api.admin.migration.reset-checksums', '_controller' => 'SwagMigrationAssistant\\Controller\\StatusController::resetChecksums'], ['version'], ['POST' => 0], null, false, false, null]],
        4787 => [[['_route' => 'api.admin.snippets', '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::snippets'], ['version'], ['GET' => 0], null, false, false, null]],
        4834 => [[['_route' => 'api.admin.migration.get-grouped-logs-of-run', '_controller' => 'SwagMigrationAssistant\\Controller\\HistoryController::getGroupedLogsOfRun'], ['version'], ['GET' => 0], null, false, false, null]],
        4887 => [[['_route' => 'api.paypal.payment_details', '_controller' => 'Swag\\PayPal\\Payment\\PayPalPaymentController::paymentDetails'], ['version', 'orderId', 'paymentId'], ['GET' => 0], null, false, true, null]],
        4940 => [[['_route' => 'api.paypal.resource_details', '_controller' => 'Swag\\PayPal\\Payment\\PayPalPaymentController::resourceDetails'], ['version', 'resourceType', 'resourceId', 'orderId'], ['GET' => 0], null, false, true, null]],
        5035 => [
            [['_route' => 'api.acl_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-role'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.acl_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'acl-role'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'acl-role'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        5113 => [[['_route' => 'api.acl_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-role'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        5197 => [[['_route' => 'api.acl_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5286 => [[['_route' => 'api.acl_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5363 => [[['_route' => 'api.acl_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'acl-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5462 => [
            [['_route' => 'api.acl_user_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-user-role'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'acl-user-role'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'acl-user-role'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        5546 => [[['_route' => 'api.acl_user_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-user-role'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        5636 => [[['_route' => 'api.acl_user_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-user-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5731 => [[['_route' => 'api.acl_user_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-user-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5814 => [[['_route' => 'api.acl_user_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'acl-user-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5906 => [
            [['_route' => 'api.category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        5983 => [[['_route' => 'api.category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        6066 => [[['_route' => 'api.category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6154 => [[['_route' => 'api.category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6230 => [[['_route' => 'api.category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6327 => [
            [['_route' => 'api.category_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        6409 => [[['_route' => 'api.category_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        6497 => [[['_route' => 'api.category_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6590 => [[['_route' => 'api.category_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6671 => [[['_route' => 'api.category_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6776 => [
            [['_route' => 'api.category_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        6866 => [[['_route' => 'api.category_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        6962 => [[['_route' => 'api.category_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7063 => [[['_route' => 'api.category_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7152 => [[['_route' => 'api.category_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7246 => [
            [['_route' => 'api.cms_block.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-block'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-block'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-block'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        7325 => [[['_route' => 'api.cms_block.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-block'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        7410 => [[['_route' => 'api.cms_block.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-block'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7500 => [[['_route' => 'api.cms_block.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-block'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7578 => [[['_route' => 'api.cms_block.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-block'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7671 => [
            [['_route' => 'api.cms_page.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        7749 => [[['_route' => 'api.cms_page.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        7833 => [[['_route' => 'api.cms_page.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7922 => [[['_route' => 'api.cms_page.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7999 => [[['_route' => 'api.cms_page.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8105 => [
            [['_route' => 'api.cms_page_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        8196 => [[['_route' => 'api.cms_page_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        8293 => [[['_route' => 'api.cms_page_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8395 => [[['_route' => 'api.cms_page_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8485 => [[['_route' => 'api.cms_page_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8581 => [
            [['_route' => 'api.cms_section.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-section'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-section'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-section'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        8662 => [[['_route' => 'api.cms_section.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-section'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        8749 => [[['_route' => 'api.cms_section.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-section'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8841 => [[['_route' => 'api.cms_section.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-section'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8921 => [[['_route' => 'api.cms_section.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-section'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9014 => [
            [['_route' => 'api.cms_slot.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        9092 => [[['_route' => 'api.cms_slot.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        9176 => [[['_route' => 'api.cms_slot.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9265 => [[['_route' => 'api.cms_slot.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9342 => [[['_route' => 'api.cms_slot.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9448 => [
            [['_route' => 'api.cms_slot_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        9539 => [[['_route' => 'api.cms_slot_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        9636 => [[['_route' => 'api.cms_slot_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9738 => [[['_route' => 'api.cms_slot_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9828 => [[['_route' => 'api.cms_slot_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9919 => [
            [['_route' => 'api.country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        9995 => [[['_route' => 'api.country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        10077 => [[['_route' => 'api.country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10165 => [[['_route' => 'api.country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10241 => [[['_route' => 'api.country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10340 => [
            [['_route' => 'api.country_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        10424 => [[['_route' => 'api.country_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        10514 => [[['_route' => 'api.country_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10609 => [[['_route' => 'api.country_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10692 => [[['_route' => 'api.country_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10804 => [
            [['_route' => 'api.country_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        10901 => [[['_route' => 'api.country_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        11004 => [[['_route' => 'api.country_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11112 => [[['_route' => 'api.country_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11208 => [[['_route' => 'api.country_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11313 => [
            [['_route' => 'api.country_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        11403 => [[['_route' => 'api.country_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        11499 => [[['_route' => 'api.country_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11600 => [[['_route' => 'api.country_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11689 => [[['_route' => 'api.country_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11782 => [
            [['_route' => 'api.currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        11860 => [[['_route' => 'api.currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        11944 => [[['_route' => 'api.currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        12033 => [[['_route' => 'api.currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        12110 => [[['_route' => 'api.currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        12213 => [[['_route' => 'api.currency_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        12252 => [[['_route' => 'frontend.account.order.single.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderSingleOverview'], ['deepLinkCode'], ['GET' => 0], null, false, true, null]],
        12268 => [[['_route' => 'frontend.account.order.cancel', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::cancelOrder'], [], ['POST' => 0], null, false, false, null]],
        12291 => [[['_route' => 'frontend.account.edit-order.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::editOrder'], ['orderId'], ['GET' => 0], null, false, true, null]],
        12317 => [[['_route' => 'frontend.account.edit-order.change-payment-method', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderChangePayment'], ['orderId'], ['POST' => 0], null, false, true, null]],
        12342 => [[['_route' => 'frontend.account.edit-order.update-order', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::updateOrder'], ['orderId'], ['POST' => 0], null, false, true, null]],
        12372 => [[['_route' => 'frontend.account.address.edit.page', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountEditAddress'], ['addressId'], ['GET' => 0], null, false, true, null]],
        12411 => [[['_route' => 'frontend.account.address.set-default-address', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::switchDefaultAddress'], ['type', 'addressId'], ['POST' => 0], null, false, true, null]],
        12434 => [[['_route' => 'frontend.account.address.delete', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::deleteAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        12451 => [[['_route' => 'frontend.account.address.create', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], [], ['POST' => 0], null, false, false, null]],
        12469 => [[['_route' => 'frontend.account.address.edit.save', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        12513 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        12535 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        12583 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        12599 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        12621 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        12636 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        12648 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        12726 => [[['_route' => 'sales-channel-api.info.openapi3', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelApiSchemaController::info'], ['version'], ['GET' => 0], null, false, false, null]],
        12755 => [[['_route' => 'sales-channel-api.info.open-api-schema', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelApiSchemaController::openApiSchema'], ['version'], ['GET' => 0], null, false, false, null]],
        12779 => [[['_route' => 'sales-channel-api.info.swagger', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelApiSchemaController::infoHtml'], ['version'], ['GET' => 0], null, false, false, null]],
        12827 => [[['_route' => 'sales-channel-api.action.paypal.create_new_cart', '_controller' => 'Swag\\PayPal\\Checkout\\ExpressCheckout\\ExpressCheckoutController::createNewCart'], ['version'], ['GET' => 0], null, false, false, null]],
        12844 => [[['_route' => 'sales-channel-api.action.paypal.create_payment', '_controller' => 'Swag\\PayPal\\Checkout\\ExpressCheckout\\ExpressCheckoutController::createPayment'], ['version'], ['GET' => 0], null, false, false, null]],
        12874 => [[['_route' => 'sales-channel-api.action.paypal.spb.create_payment', '_controller' => 'Swag\\PayPal\\Checkout\\SPBCheckout\\SPBCheckoutController::createPayment'], ['version'], ['POST' => 0], null, false, false, null]],
        12899 => [
            [['_route' => 'sales-channel-api.context.update', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelContextController::update'], ['version'], ['PATCH' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.context.get', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelContextController::getContext'], ['version'], ['GET' => 0], null, false, false, null],
        ],
        12927 => [[['_route' => 'sales-channel-api.cms.page', '_controller' => 'Shopware\\Core\\Content\\Cms\\SalesChannel\\SalesChannelCmsPageController::getPage'], ['version', 'pageId'], ['GET' => 0], null, false, true, null]],
        12955 => [
            [['_route' => 'sales-channel-api.checkout.cart.detail', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::getCart'], ['version'], ['GET' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.checkout.cart.create', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::createCart'], ['version'], ['POST' => 0], null, false, false, null],
        ],
        12985 => [[['_route' => 'sales-channel-api.checkout.frontend.cart.product.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::addProduct'], ['version', 'id'], ['POST' => 0], null, false, true, null]],
        13008 => [[['_route' => 'sales-channel-api.checkout.frontend.cart.code.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::addCode'], ['version', 'code'], ['POST' => 0], null, false, true, null]],
        13043 => [
            [['_route' => 'sales-channel-api.checkout.cart.line-item.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::addLineItem'], ['version', 'id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'sales-channel-api.checkout.cart.line-item.delete', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::removeLineItem'], ['version', 'id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sales-channel-api.checkout.cart.line-item.update', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::updateLineItem'], ['version', 'id'], ['PATCH' => 0], null, false, true, null],
        ],
        13062 => [[['_route' => 'sales-channel-api.checkout.cart.line-items.delete', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::removeLineItems'], ['version'], ['POST' => 0], null, false, false, null]],
        13074 => [[['_route' => 'sales-channel-api.checkout.cart.cancel', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::cancelCart'], ['version'], ['DELETE' => 0], null, false, false, null]],
        13093 => [[['_route' => 'sales-channel-api.checkout.order.create', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::createOrder'], ['version'], ['POST' => 0], null, false, false, null]],
        13116 => [[['_route' => 'sales-channel-api.checkout.order.pay', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::payOrder'], ['version', 'orderId'], ['POST' => 0], null, false, false, null]],
        13142 => [[['_route' => 'sales-channel-api.checkout.guest-order.create', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::createGuestOrder'], ['version'], ['POST' => 0], null, false, false, null]],
        13161 => [[['_route' => 'sales-channel-api.checkout.guest-order.detail', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::getDeepLinkOrder'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        13195 => [[['_route' => 'sales-channel-api.customer.login', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::login'], ['version'], ['POST' => 0], null, false, false, null]],
        13208 => [[['_route' => 'sales-channel-api.customer.logout', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::logout'], ['version'], ['POST' => 0], null, false, false, null]],
        13224 => [[['_route' => 'sales-channel-api.customer.order.list', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::orderList'], ['version'], ['GET' => 0], null, false, false, null]],
        13239 => [[['_route' => 'sales-channel-api.customer.email.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::saveEmail'], ['version'], ['PATCH' => 0], null, false, false, null]],
        13257 => [[['_route' => 'sales-channel-api.customer.password.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::savePassword'], ['version'], ['PATCH' => 0], null, false, false, null]],
        13277 => [[['_route' => 'sales-channel-api.customer.address.list', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::getAddresses'], ['version'], ['GET' => 0], null, false, false, null]],
        13299 => [
            [['_route' => 'sales-channel-api.customer.address.detail', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::getAddress'], ['version', 'id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sales-channel-api.customer.address.delete', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::deleteAddress'], ['version', 'id'], ['DELETE' => 0], null, false, true, null],
        ],
        13330 => [[['_route' => 'sales-channel-api.customer.address.set-default-shipping-address', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::setDefaultShippingAddress'], ['version', 'id'], ['PATCH' => 0], null, false, false, null]],
        13347 => [[['_route' => 'sales-channel-api.customer.address.set-default-billing-address', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::setDefaultBillingAddress'], ['version', 'id'], ['PATCH' => 0], null, false, false, null]],
        13359 => [[['_route' => 'sales-channel-api.customer.address.create', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::upsertAddress'], ['version'], ['POST' => 0, 'PATCH' => 1], null, false, false, null]],
        13371 => [
            [['_route' => 'sales-channel-api.customer.create', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::register'], ['version'], ['POST' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.customer.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::saveProfile'], ['version'], ['PATCH' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.customer.detail', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::getCustomerDetail'], ['version'], ['GET' => 0], null, false, false, null],
        ],
        13414 => [[['_route' => 'sales-channel-api.product.cross-selling', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\CrossSelling\\SalesChannelCrossSellingController::getCrossSelling'], ['version', 'id'], ['GET' => 0], null, false, false, null]],
        13447 => [[['_route' => 'sales-channel-api.newsletter.subscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\SalesChannelNewsletterController::subscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        13464 => [[['_route' => 'sales-channel-api.newsletter.confirm', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\SalesChannelNewsletterController::confirm'], ['version'], ['POST' => 0], null, false, false, null]],
        13485 => [[['_route' => 'sales-channel-api.newsletter.unsubscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\SalesChannelNewsletterController::unsubscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        13546 => [[['_route' => 'store-api.info.openapi3', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::info'], ['version'], ['GET' => 0], null, false, false, null]],
        13575 => [[['_route' => 'store-api.info.open-api-schema', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::openApiSchema'], ['version'], ['GET' => 0], null, false, false, null]],
        13599 => [[['_route' => 'store-api.info.swagger', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::infoHtml'], ['version'], ['GET' => 0], null, false, false, null]],
        13629 => [
            [['_route' => 'store-api.context', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\ContextRoute::load'], ['version'], ['GET' => 0], null, false, false, null],
            [['_route' => 'store-api.switch-context', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\ContextSwitchRoute::switchContext'], ['version'], ['PATCH' => 0], null, false, false, null],
        ],
        13649 => [[['_route' => 'store-api.contact.form', '_controller' => 'Shopware\\Core\\Content\\ContactForm\\SalesChannel\\ContactFormRoute::load'], ['version'], ['POST' => 0], null, false, false, null]],
        13665 => [[['_route' => 'store-api.country', '_controller' => 'Shopware\\Core\\System\\Country\\SalesChannel\\CountryRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13683 => [[['_route' => 'store-api.currency', '_controller' => 'Shopware\\Core\\System\\Currency\\SalesChannel\\CurrencyRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13709 => [[['_route' => 'store-api.category.detail', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\CategoryRoute::load'], ['version', 'navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        13730 => [[['_route' => 'store-api.cms.detail', '_controller' => 'Shopware\\Core\\Content\\Cms\\SalesChannel\\CmsRoute::load'], ['version', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        13758 => [[['_route' => 'store-api.checkout.cart.delete', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartDeleteRoute::delete'], ['version'], ['DELETE' => 0], null, false, false, null]],
        13782 => [
            [['_route' => 'store-api.checkout.cart.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemAddRoute::add'], ['version'], ['POST' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.remove-item', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemRemoveRoute::remove'], ['version'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.update-lineitem', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemUpdateRoute::change'], ['version'], ['PATCH' => 0], null, false, false, null],
        ],
        13793 => [[['_route' => 'store-api.checkout.cart.read', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartLoadRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13809 => [[['_route' => 'store-api.checkout.cart.order', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartOrderRoute::order'], ['version'], ['POST' => 0], null, false, false, null]],
        13829 => [[['_route' => 'store-api.language', '_controller' => 'Shopware\\Core\\System\\Language\\SalesChannel\\LanguageRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13852 => [[['_route' => 'store-api.salutation', '_controller' => 'Shopware\\Core\\System\\Salutation\\SalesChannel\\SalutationRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13873 => [[['_route' => 'store-api.search', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Search\\ProductSearchRoute::load'], ['version'], ['POST' => 0], null, false, false, null]],
        13892 => [[['_route' => 'store-api.search.suggest', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Suggest\\ProductSuggestRoute::load'], ['version'], ['POST' => 0], null, false, false, null]],
        13909 => [[['_route' => 'store-api.seo.url', '_controller' => 'Shopware\\Core\\Content\\Seo\\SalesChannel\\SeoUrlRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13935 => [[['_route' => 'store-api.shipping.method', '_controller' => 'Shopware\\Core\\Checkout\\Shipping\\SalesChannel\\ShippingMethodRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13977 => [[['_route' => 'store-api.navigation', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\NavigationRoute::load'], ['version', 'requestActiveId', 'requestRootId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        14007 => [[['_route' => 'store-api.newsletter.confirm', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterConfirmRoute::confirm'], ['version'], ['POST' => 0], null, false, false, null]],
        14026 => [[['_route' => 'store-api.newsletter.subscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::subscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        14047 => [[['_route' => 'store-api.newsletter.unsubscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterUnsubscribeRoute::unsubscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        14087 => [[['_route' => 'store-api.product.listing', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Listing\\ProductListingRoute::load'], ['version', 'categoryId'], ['POST' => 0], null, false, true, null]],
        14111 => [[['_route' => 'store-api.payment.method', '_controller' => 'Shopware\\Core\\Checkout\\Payment\\SalesChannel\\PaymentMethodRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14137 => [[['_route' => 'store-api.payment.handle', '_controller' => 'Shopware\\Core\\Checkout\\Payment\\SalesChannel\\HandlePaymentMethodRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14182 => [[['_route' => 'store-api.account.change-profile', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeCustomerProfileRoute::change'], ['version'], ['POST' => 0], null, false, false, null]],
        14202 => [[['_route' => 'store-api.account.change-password', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePasswordRoute::change'], ['version'], ['POST' => 0], null, false, false, null]],
        14234 => [[['_route' => 'store-api.account.set.payment-method', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePaymentMethodRoute::change'], ['version', 'paymentMethodId'], ['POST' => 0], null, false, true, null]],
        14251 => [[['_route' => 'store-api.account.change-email', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeEmailRoute::change'], ['version'], ['POST' => 0], null, false, false, null]],
        14269 => [[['_route' => 'store-api.account.customer', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerRoute::load'], ['version'], ['GET' => 0], null, false, false, null]],
        14288 => [[['_route' => 'store-api.account.login', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LoginRoute::login'], ['version'], ['POST' => 0], null, false, false, null]],
        14301 => [[['_route' => 'store-api.account.logout', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LogoutRoute::logout'], ['version'], ['POST' => 0], null, false, false, null]],
        14335 => [[['_route' => 'store-api.account.register.confirm', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RegisterConfirmRoute::confirm'], ['version'], ['POST' => 0], null, false, false, null]],
        14345 => [[['_route' => 'store-api.account.register', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RegisterRoute::register'], ['version'], ['POST' => 0], null, false, false, null]],
        14384 => [[['_route' => 'store-api.account.recovery.password', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ResetPasswordRoute::resetPassword'], ['version'], ['POST' => 0], null, false, false, null]],
        14394 => [[['_route' => 'store-api.account.recovery.send.mail', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SendPasswordRecoveryMailRoute::sendRecoveryMail'], ['version'], ['POST' => 0], null, false, false, null]],
        14431 => [[['_route' => 'store-api.order.state.cancel', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\CancelOrderRoute::cancel'], ['version'], ['POST' => 0], null, false, false, null]],
        14448 => [[['_route' => 'store-api.order.set-payment', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\SetPaymentOrderRoute::setPayment'], ['version'], ['POST' => 0], null, false, false, null]],
        14459 => [[['_route' => 'store-api.order', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\OrderRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14513 => [[['_route' => 'widgets.account.order.detail', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::ajaxOrderDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        14543 => [[['_route' => 'frontend.cms.page', 'id' => null, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::page'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        14581 => [[['_route' => 'frontend.cms.navigation.page', 'navigationId' => null, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::category'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        14607 => [[['_route' => 'frontend.cms.navigation.filter', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::filter'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14659 => [[['_route' => 'frontend.checkout.line-item.delete', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::deleteLineItem'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        14694 => [[['_route' => 'frontend.checkout.line-item.change-quantity', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::changeQuantity'], ['id'], ['POST' => 0], null, false, true, null]],
        14737 => [[['_route' => 'frontend.maintenance.singlepage', '_controller' => 'Shopware\\Storefront\\Controller\\MaintenanceController::renderSinglePage'], ['id'], ['GET' => 0], null, false, true, null]],
        14767 => [[['_route' => 'frontend.navigation.page', '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::index'], ['navigationId'], ['GET' => 0], null, false, true, null]],
        14796 => [[['_route' => 'frontend.detail.page', '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::index'], ['productId'], ['GET' => 0], null, false, true, null]],
        14813 => [[['_route' => 'frontend.detail.switch', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::switch'], ['productId'], ['GET' => 0], null, false, false, null]],
        14843 => [[['_route' => 'widgets.quickview.minimal', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::quickviewMinimal'], ['productId'], ['GET' => 0], null, false, true, null]],
        14880 => [[['_route' => 'frontend.detail.review.save', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::saveReview'], ['productId'], ['POST' => 0], null, false, false, null]],
        14896 => [[['_route' => 'frontend.product.reviews', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::loadReviews'], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14932 => [[['_route' => 'frontend.export', '_controller' => 'Shopware\\Storefront\\Controller\\ProductExportController::index'], ['accessKey', 'fileName'], ['GET' => 0], null, false, true, null]],
        15044 => [
            [['_route' => 'api.currency_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        15135 => [[['_route' => 'api.currency_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        15232 => [[['_route' => 'api.currency_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15334 => [[['_route' => 'api.currency_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15424 => [[['_route' => 'api.currency_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15522 => [
            [['_route' => 'api.custom_field.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        15605 => [[['_route' => 'api.custom_field.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        15694 => [[['_route' => 'api.custom_field.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15788 => [[['_route' => 'api.custom_field.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15870 => [[['_route' => 'api.custom_field.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15973 => [
            [['_route' => 'api.custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        16061 => [[['_route' => 'api.custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        16155 => [[['_route' => 'api.custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16254 => [[['_route' => 'api.custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16341 => [[['_route' => 'api.custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16454 => [
            [['_route' => 'api.custom_field_set_relation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        16552 => [[['_route' => 'api.custom_field_set_relation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        16656 => [[['_route' => 'api.custom_field_set_relation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16765 => [[['_route' => 'api.custom_field_set_relation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16862 => [[['_route' => 'api.custom_field_set_relation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16955 => [
            [['_route' => 'api.customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        17033 => [[['_route' => 'api.customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        17117 => [[['_route' => 'api.customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17206 => [[['_route' => 'api.customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17283 => [[['_route' => 'api.customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17385 => [
            [['_route' => 'api.customer_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-address'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-address'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-address'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        17472 => [[['_route' => 'api.customer_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-address'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        17565 => [[['_route' => 'api.customer_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17663 => [[['_route' => 'api.customer_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17749 => [[['_route' => 'api.customer_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17849 => [
            [['_route' => 'api.customer_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        17934 => [[['_route' => 'api.customer_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        18025 => [[['_route' => 'api.customer_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18121 => [[['_route' => 'api.customer_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18205 => [[['_route' => 'api.customer_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18318 => [
            [['_route' => 'api.customer_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        18416 => [[['_route' => 'api.customer_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        18520 => [[['_route' => 'api.customer_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18629 => [[['_route' => 'api.customer_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18726 => [[['_route' => 'api.customer_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18829 => [
            [['_route' => 'api.customer_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-recovery'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-recovery'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        18917 => [[['_route' => 'api.customer_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        19011 => [[['_route' => 'api.customer_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19110 => [[['_route' => 'api.customer_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19197 => [[['_route' => 'api.customer_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19295 => [
            [['_route' => 'api.customer_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        19378 => [[['_route' => 'api.customer_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        19467 => [[['_route' => 'api.customer_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19561 => [[['_route' => 'api.customer_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19643 => [[['_route' => 'api.customer_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19741 => [
            [['_route' => 'api.dead_message.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'dead-message'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.dead_message.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'dead-message'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.dead_message.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'dead-message'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        19824 => [[['_route' => 'api.dead_message.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'dead-message'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        19913 => [[['_route' => 'api.dead_message.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'dead-message'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20007 => [[['_route' => 'api.dead_message.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'dead-message'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20089 => [[['_route' => 'api.dead_message.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'dead-message'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20188 => [
            [['_route' => 'api.delivery_time.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        20272 => [[['_route' => 'api.delivery_time.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        20362 => [[['_route' => 'api.delivery_time.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20457 => [[['_route' => 'api.delivery_time.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20540 => [[['_route' => 'api.delivery_time.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20652 => [
            [['_route' => 'api.delivery_time_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        20749 => [[['_route' => 'api.delivery_time_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        20852 => [[['_route' => 'api.delivery_time_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20960 => [[['_route' => 'api.delivery_time_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21056 => [[['_route' => 'api.delivery_time_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21149 => [
            [['_route' => 'api.document.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        21227 => [[['_route' => 'api.document.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        21311 => [[['_route' => 'api.document.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21400 => [[['_route' => 'api.document.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21477 => [[['_route' => 'api.document.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21584 => [
            [['_route' => 'api.document_base_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        21676 => [[['_route' => 'api.document_base_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        21774 => [[['_route' => 'api.document_base_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21877 => [[['_route' => 'api.document_base_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21968 => [[['_route' => 'api.document_base_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22091 => [
            [['_route' => 'api.document_base_config_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        22199 => [[['_route' => 'api.document_base_config_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        22313 => [[['_route' => 'api.document_base_config_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22432 => [[['_route' => 'api.document_base_config_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22539 => [[['_route' => 'api.document_base_config_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22638 => [
            [['_route' => 'api.document_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        22722 => [[['_route' => 'api.document_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        22812 => [[['_route' => 'api.document_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22907 => [[['_route' => 'api.document_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22990 => [[['_route' => 'api.document_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23102 => [
            [['_route' => 'api.document_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        23199 => [[['_route' => 'api.document_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        23302 => [[['_route' => 'api.document_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23410 => [[['_route' => 'api.document_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23506 => [[['_route' => 'api.document_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23604 => [
            [['_route' => 'api.event_action.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'event-action'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.event_action.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'event-action'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.event_action.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'event-action'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        23687 => [[['_route' => 'api.event_action.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'event-action'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        23776 => [[['_route' => 'api.event_action.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'event-action'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23870 => [[['_route' => 'api.event_action.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'event-action'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23952 => [[['_route' => 'api.event_action.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'event-action'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24057 => [
            [['_route' => 'api.import_export_file.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-file'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-file'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-file'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        24147 => [[['_route' => 'api.import_export_file.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-file'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        24243 => [[['_route' => 'api.import_export_file.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24344 => [[['_route' => 'api.import_export_file.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24433 => [[['_route' => 'api.import_export_file.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24537 => [
            [['_route' => 'api.import_export_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-log'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-log'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-log'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        24626 => [[['_route' => 'api.import_export_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-log'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        24721 => [[['_route' => 'api.import_export_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-log'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24821 => [[['_route' => 'api.import_export_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-log'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24909 => [[['_route' => 'api.import_export_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-log'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25017 => [
            [['_route' => 'api.import_export_profile.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        25110 => [[['_route' => 'api.import_export_profile.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        25209 => [[['_route' => 'api.import_export_profile.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25313 => [[['_route' => 'api.import_export_profile.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25405 => [[['_route' => 'api.import_export_profile.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25526 => [
            [['_route' => 'api.import_export_profile_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        25632 => [[['_route' => 'api.import_export_profile_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        25744 => [[['_route' => 'api.import_export_profile_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25861 => [[['_route' => 'api.import_export_profile_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25966 => [[['_route' => 'api.import_export_profile_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26062 => [
            [['_route' => 'api.integration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'integration'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.integration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        26143 => [[['_route' => 'api.integration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        26230 => [[['_route' => 'api.integration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26322 => [[['_route' => 'api.integration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26402 => [[['_route' => 'api.integration.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'integration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26495 => [
            [['_route' => 'api.language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'language'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'language'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'language'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        26573 => [[['_route' => 'api.language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'language'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        26657 => [[['_route' => 'api.language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26746 => [[['_route' => 'api.language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26823 => [[['_route' => 'api.language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26914 => [
            [['_route' => 'api.locale.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        26990 => [[['_route' => 'api.locale.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        27072 => [[['_route' => 'api.locale.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27159 => [[['_route' => 'api.locale.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27234 => [[['_route' => 'api.locale.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27338 => [
            [['_route' => 'api.locale_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        27427 => [[['_route' => 'api.locale_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        27522 => [[['_route' => 'api.locale_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27622 => [[['_route' => 'api.locale_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27710 => [[['_route' => 'api.locale_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27805 => [
            [['_route' => 'api.log_entry.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'log-entry'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'log-entry'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'log-entry'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        27885 => [[['_route' => 'api.log_entry.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'log-entry'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        27971 => [[['_route' => 'api.log_entry.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'log-entry'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28062 => [[['_route' => 'api.log_entry.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'log-entry'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28141 => [[['_route' => 'api.log_entry.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'log-entry'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28246 => [
            [['_route' => 'api.mail_header_footer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        28336 => [[['_route' => 'api.mail_header_footer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        28432 => [[['_route' => 'api.mail_header_footer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28533 => [[['_route' => 'api.mail_header_footer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28622 => [[['_route' => 'api.mail_header_footer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28740 => [
            [['_route' => 'api.mail_header_footer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        28843 => [[['_route' => 'api.mail_header_footer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        28952 => [[['_route' => 'api.mail_header_footer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29066 => [[['_route' => 'api.mail_header_footer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29168 => [[['_route' => 'api.mail_header_footer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29267 => [
            [['_route' => 'api.mail_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        29351 => [[['_route' => 'api.mail_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        29441 => [[['_route' => 'api.mail_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29536 => [[['_route' => 'api.mail_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29619 => [[['_route' => 'api.mail_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29725 => [
            [['_route' => 'api.mail_template_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        29816 => [[['_route' => 'api.mail_template_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        29913 => [[['_route' => 'api.mail_template_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30015 => [[['_route' => 'api.mail_template_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30105 => [[['_route' => 'api.mail_template_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30220 => [
            [['_route' => 'api.mail_template_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        30320 => [[['_route' => 'api.mail_template_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        30426 => [[['_route' => 'api.mail_template_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30537 => [[['_route' => 'api.mail_template_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30636 => [[['_route' => 'api.mail_template_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30748 => [
            [['_route' => 'api.mail_template_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        30845 => [[['_route' => 'api.mail_template_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        30948 => [[['_route' => 'api.mail_template_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31056 => [[['_route' => 'api.mail_template_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31152 => [[['_route' => 'api.mail_template_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31257 => [
            [['_route' => 'api.mail_template_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        31347 => [[['_route' => 'api.mail_template_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        31443 => [[['_route' => 'api.mail_template_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31544 => [[['_route' => 'api.mail_template_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31633 => [[['_route' => 'api.mail_template_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31751 => [
            [['_route' => 'api.mail_template_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        31854 => [[['_route' => 'api.mail_template_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        31963 => [[['_route' => 'api.mail_template_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32077 => [[['_route' => 'api.mail_template_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32179 => [[['_route' => 'api.mail_template_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32278 => [
            [['_route' => 'api.main_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'main-category'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.main_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'main-category'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.main_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'main-category'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        32362 => [[['_route' => 'api.main_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'main-category'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        32452 => [[['_route' => 'api.main_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'main-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32547 => [[['_route' => 'api.main_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'main-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32630 => [[['_route' => 'api.main_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'main-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32720 => [
            [['_route' => 'api.media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        32795 => [[['_route' => 'api.media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        32876 => [[['_route' => 'api.media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32962 => [[['_route' => 'api.media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33036 => [[['_route' => 'api.media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33143 => [
            [['_route' => 'api.media_default_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-default-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-default-folder'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-default-folder'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        33235 => [[['_route' => 'api.media_default_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-default-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        33333 => [[['_route' => 'api.media_default_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-default-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33436 => [[['_route' => 'api.media_default_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-default-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33527 => [[['_route' => 'api.media_default_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-default-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33625 => [
            [['_route' => 'api.media_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        33708 => [[['_route' => 'api.media_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        33797 => [[['_route' => 'api.media_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33891 => [[['_route' => 'api.media_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33973 => [[['_route' => 'api.media_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34086 => [
            [['_route' => 'api.media_folder_configuration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        34184 => [[['_route' => 'api.media_folder_configuration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        34288 => [[['_route' => 'api.media_folder_configuration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34397 => [[['_route' => 'api.media_folder_configuration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34494 => [[['_route' => 'api.media_folder_configuration.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34631 => [
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        34753 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        34881 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35014 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35135 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35230 => [
            [['_route' => 'api.media_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        35310 => [[['_route' => 'api.media_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        35396 => [[['_route' => 'api.media_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35487 => [[['_route' => 'api.media_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35566 => [[['_route' => 'api.media_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35667 => [
            [['_route' => 'api.media_thumbnail.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        35753 => [[['_route' => 'api.media_thumbnail.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        35845 => [[['_route' => 'api.media_thumbnail.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35942 => [[['_route' => 'api.media_thumbnail.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36027 => [[['_route' => 'api.media_thumbnail.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36134 => [
            [['_route' => 'api.media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        36226 => [[['_route' => 'api.media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        36324 => [[['_route' => 'api.media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36427 => [[['_route' => 'api.media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36518 => [[['_route' => 'api.media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36621 => [
            [['_route' => 'api.media_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        36709 => [[['_route' => 'api.media_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        36803 => [[['_route' => 'api.media_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36902 => [[['_route' => 'api.media_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36989 => [[['_route' => 'api.media_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37095 => [
            [['_route' => 'api.message_queue_stats.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.message_queue_stats.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.message_queue_stats.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        37186 => [[['_route' => 'api.message_queue_stats.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        37283 => [[['_route' => 'api.message_queue_stats.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37385 => [[['_route' => 'api.message_queue_stats.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37475 => [[['_route' => 'api.message_queue_stats.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37581 => [
            [['_route' => 'api.newsletter_recipient.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        37672 => [[['_route' => 'api.newsletter_recipient.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        37769 => [[['_route' => 'api.newsletter_recipient.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37871 => [[['_route' => 'api.newsletter_recipient.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37961 => [[['_route' => 'api.newsletter_recipient.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38072 => [
            [['_route' => 'api.newsletter_recipient_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        38168 => [[['_route' => 'api.newsletter_recipient_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        38270 => [[['_route' => 'api.newsletter_recipient_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38377 => [[['_route' => 'api.newsletter_recipient_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38472 => [[['_route' => 'api.newsletter_recipient_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38570 => [
            [['_route' => 'api.number_range.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        38653 => [[['_route' => 'api.number_range.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        38742 => [[['_route' => 'api.number_range.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38836 => [[['_route' => 'api.number_range.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38918 => [[['_route' => 'api.number_range.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39032 => [
            [['_route' => 'api.number_range_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        39131 => [[['_route' => 'api.number_range_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        39236 => [[['_route' => 'api.number_range_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39346 => [[['_route' => 'api.number_range_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39444 => [[['_route' => 'api.number_range_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39549 => [
            [['_route' => 'api.number_range_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-state'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-state'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-state'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        39639 => [[['_route' => 'api.number_range_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-state'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        39735 => [[['_route' => 'api.number_range_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39836 => [[['_route' => 'api.number_range_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39925 => [[['_route' => 'api.number_range_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40036 => [
            [['_route' => 'api.number_range_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        40132 => [[['_route' => 'api.number_range_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        40234 => [[['_route' => 'api.number_range_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40341 => [[['_route' => 'api.number_range_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40436 => [[['_route' => 'api.number_range_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40540 => [
            [['_route' => 'api.number_range_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        40629 => [[['_route' => 'api.number_range_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        40724 => [[['_route' => 'api.number_range_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40824 => [[['_route' => 'api.number_range_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40912 => [[['_route' => 'api.number_range_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41029 => [
            [['_route' => 'api.number_range_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        41131 => [[['_route' => 'api.number_range_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        41239 => [[['_route' => 'api.number_range_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41352 => [[['_route' => 'api.number_range_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41453 => [[['_route' => 'api.number_range_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41543 => [
            [['_route' => 'api.order.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        41618 => [[['_route' => 'api.order.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        41699 => [[['_route' => 'api.order.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41785 => [[['_route' => 'api.order.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41859 => [[['_route' => 'api.order.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41958 => [
            [['_route' => 'api.order_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-address'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-address'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-address'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        42042 => [[['_route' => 'api.order_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-address'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        42132 => [[['_route' => 'api.order_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42227 => [[['_route' => 'api.order_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42310 => [[['_route' => 'api.order_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42416 => [
            [['_route' => 'api.order_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-customer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-customer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        42501 => [[['_route' => 'api.order_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        42592 => [[['_route' => 'api.order_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42688 => [[['_route' => 'api.order_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42772 => [[['_route' => 'api.order_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42872 => [
            [['_route' => 'api.order_delivery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        42957 => [[['_route' => 'api.order_delivery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        43048 => [[['_route' => 'api.order_delivery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43144 => [[['_route' => 'api.order_delivery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43228 => [[['_route' => 'api.order_delivery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43338 => [
            [['_route' => 'api.order_delivery_position.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        43433 => [[['_route' => 'api.order_delivery_position.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        43534 => [[['_route' => 'api.order_delivery_position.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43640 => [[['_route' => 'api.order_delivery_position.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43734 => [[['_route' => 'api.order_delivery_position.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43836 => [
            [['_route' => 'api.order_line_item.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-line-item'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-line-item'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-line-item'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        43923 => [[['_route' => 'api.order_line_item.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-line-item'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        44016 => [[['_route' => 'api.order_line_item.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-line-item'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44114 => [[['_route' => 'api.order_line_item.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-line-item'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44200 => [[['_route' => 'api.order_line_item.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-line-item'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44295 => [
            [['_route' => 'api.order_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        44375 => [[['_route' => 'api.order_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        44461 => [[['_route' => 'api.order_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44552 => [[['_route' => 'api.order_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44631 => [[['_route' => 'api.order_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44734 => [
            [['_route' => 'api.order_transaction.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        44822 => [[['_route' => 'api.order_transaction.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        44916 => [[['_route' => 'api.order_transaction.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45015 => [[['_route' => 'api.order_transaction.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45102 => [[['_route' => 'api.order_transaction.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45202 => [
            [['_route' => 'api.payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        45287 => [[['_route' => 'api.payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        45378 => [[['_route' => 'api.payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45474 => [[['_route' => 'api.payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45558 => [[['_route' => 'api.payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45671 => [
            [['_route' => 'api.payment_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        45769 => [[['_route' => 'api.payment_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        45873 => [[['_route' => 'api.payment_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45982 => [[['_route' => 'api.payment_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46079 => [[['_route' => 'api.payment_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46185 => [
            [['_route' => 'api.payone_payment_card.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payone_payment_card.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payone_payment_card.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        46276 => [[['_route' => 'api.payone_payment_card.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        46373 => [[['_route' => 'api.payone_payment_card.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46475 => [[['_route' => 'api.payone_payment_card.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46565 => [[['_route' => 'api.payone_payment_card.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payone-payment-card'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46674 => [
            [['_route' => 'api.payone_payment_mandate.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payone_payment_mandate.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payone_payment_mandate.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        46768 => [[['_route' => 'api.payone_payment_mandate.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        46868 => [[['_route' => 'api.payone_payment_mandate.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46973 => [[['_route' => 'api.payone_payment_mandate.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47066 => [[['_route' => 'api.payone_payment_mandate.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payone-payment-mandate'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47157 => [
            [['_route' => 'api.plugin.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        47233 => [[['_route' => 'api.plugin.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        47315 => [[['_route' => 'api.plugin.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47402 => [[['_route' => 'api.plugin.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47477 => [[['_route' => 'api.plugin.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47581 => [
            [['_route' => 'api.plugin_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        47670 => [[['_route' => 'api.plugin_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        47765 => [[['_route' => 'api.plugin_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47865 => [[['_route' => 'api.plugin_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47953 => [[['_route' => 'api.plugin_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48045 => [
            [['_route' => 'api.product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        48122 => [[['_route' => 'api.product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        48205 => [[['_route' => 'api.product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48293 => [[['_route' => 'api.product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48369 => [[['_route' => 'api.product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48471 => [
            [['_route' => 'api.product_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        48558 => [[['_route' => 'api.product_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        48651 => [[['_route' => 'api.product_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48749 => [[['_route' => 'api.product_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48835 => [[['_route' => 'api.product_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48943 => [
            [['_route' => 'api.product_category_tree.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category-tree'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category-tree'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category-tree'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        49036 => [[['_route' => 'api.product_category_tree.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category-tree'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        49135 => [[['_route' => 'api.product_category_tree.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category-tree'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49239 => [[['_route' => 'api.product_category_tree.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category-tree'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49331 => [[['_route' => 'api.product_category_tree.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category-tree'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49446 => [
            [['_route' => 'api.product_configurator_setting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        49546 => [[['_route' => 'api.product_configurator_setting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        49652 => [[['_route' => 'api.product_configurator_setting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49763 => [[['_route' => 'api.product_configurator_setting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49862 => [[['_route' => 'api.product_configurator_setting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49970 => [
            [['_route' => 'api.product_cross_selling.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        50063 => [[['_route' => 'api.product_cross_selling.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        50162 => [[['_route' => 'api.product_cross_selling.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50266 => [[['_route' => 'api.product_cross_selling.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50358 => [[['_route' => 'api.product_cross_selling.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50486 => [
            [['_route' => 'api.product_cross_selling_assigned_products.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        50599 => [[['_route' => 'api.product_cross_selling_assigned_products.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        50718 => [[['_route' => 'api.product_cross_selling_assigned_products.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50842 => [[['_route' => 'api.product_cross_selling_assigned_products.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50954 => [[['_route' => 'api.product_cross_selling_assigned_products.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51075 => [
            [['_route' => 'api.product_cross_selling_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        51181 => [[['_route' => 'api.product_cross_selling_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        51293 => [[['_route' => 'api.product_cross_selling_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51410 => [[['_route' => 'api.product_cross_selling_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51515 => [[['_route' => 'api.product_cross_selling_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51627 => [
            [['_route' => 'api.product_custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        51724 => [[['_route' => 'api.product_custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        51827 => [[['_route' => 'api.product_custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51935 => [[['_route' => 'api.product_custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52031 => [[['_route' => 'api.product_custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52131 => [
            [['_route' => 'api.product_export.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-export'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_export.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-export'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_export.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-export'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        52216 => [[['_route' => 'api.product_export.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-export'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        52307 => [[['_route' => 'api.product_export.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-export'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52403 => [[['_route' => 'api.product_export.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-export'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52487 => [[['_route' => 'api.product_export.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-export'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52600 => [
            [['_route' => 'api.product_keyword_dictionary.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        52698 => [[['_route' => 'api.product_keyword_dictionary.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        52802 => [[['_route' => 'api.product_keyword_dictionary.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52911 => [[['_route' => 'api.product_keyword_dictionary.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53008 => [[['_route' => 'api.product_keyword_dictionary.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53114 => [
            [['_route' => 'api.product_manufacturer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        53205 => [[['_route' => 'api.product_manufacturer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        53302 => [[['_route' => 'api.product_manufacturer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53404 => [[['_route' => 'api.product_manufacturer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53494 => [[['_route' => 'api.product_manufacturer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53613 => [
            [['_route' => 'api.product_manufacturer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        53717 => [[['_route' => 'api.product_manufacturer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        53827 => [[['_route' => 'api.product_manufacturer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53942 => [[['_route' => 'api.product_manufacturer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54045 => [[['_route' => 'api.product_manufacturer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54144 => [
            [['_route' => 'api.product_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        54228 => [[['_route' => 'api.product_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        54318 => [[['_route' => 'api.product_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54413 => [[['_route' => 'api.product_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54496 => [[['_route' => 'api.product_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54596 => [
            [['_route' => 'api.product_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-option'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-option'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-option'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        54681 => [[['_route' => 'api.product_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-option'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        54772 => [[['_route' => 'api.product_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54868 => [[['_route' => 'api.product_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54952 => [[['_route' => 'api.product_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55051 => [
            [['_route' => 'api.product_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-price'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-price'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-price'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        55135 => [[['_route' => 'api.product_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-price'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        55225 => [[['_route' => 'api.product_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55320 => [[['_route' => 'api.product_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55403 => [[['_route' => 'api.product_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55505 => [
            [['_route' => 'api.product_property.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-property'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_property.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-property'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_property.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-property'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        55592 => [[['_route' => 'api.product_property.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-property'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        55685 => [[['_route' => 'api.product_property.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-property'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55783 => [[['_route' => 'api.product_property.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-property'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55869 => [[['_route' => 'api.product_property.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-property'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55969 => [
            [['_route' => 'api.product_review.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-review'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_review.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-review'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_review.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-review'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        56054 => [[['_route' => 'api.product_review.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-review'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        56145 => [[['_route' => 'api.product_review.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-review'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56241 => [[['_route' => 'api.product_review.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-review'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56325 => [[['_route' => 'api.product_review.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-review'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56434 => [
            [['_route' => 'api.product_search_keyword.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        56528 => [[['_route' => 'api.product_search_keyword.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        56628 => [[['_route' => 'api.product_search_keyword.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56733 => [[['_route' => 'api.product_search_keyword.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56826 => [[['_route' => 'api.product_search_keyword.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56926 => [
            [['_route' => 'api.product_stream.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        57011 => [[['_route' => 'api.product_stream.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        57102 => [[['_route' => 'api.product_stream.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57198 => [[['_route' => 'api.product_stream.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57282 => [[['_route' => 'api.product_stream.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57390 => [
            [['_route' => 'api.product_stream_filter.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        57483 => [[['_route' => 'api.product_stream_filter.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        57582 => [[['_route' => 'api.product_stream_filter.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57686 => [[['_route' => 'api.product_stream_filter.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57778 => [[['_route' => 'api.product_stream_filter.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57891 => [
            [['_route' => 'api.product_stream_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        57989 => [[['_route' => 'api.product_stream_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        58093 => [[['_route' => 'api.product_stream_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58202 => [[['_route' => 'api.product_stream_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58299 => [[['_route' => 'api.product_stream_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58396 => [
            [['_route' => 'api.product_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        58478 => [[['_route' => 'api.product_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        58566 => [[['_route' => 'api.product_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58659 => [[['_route' => 'api.product_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58740 => [[['_route' => 'api.product_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58845 => [
            [['_route' => 'api.product_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        58935 => [[['_route' => 'api.product_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        59031 => [[['_route' => 'api.product_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59132 => [[['_route' => 'api.product_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59221 => [[['_route' => 'api.product_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59325 => [
            [['_route' => 'api.product_visibility.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-visibility'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-visibility'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-visibility'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        59414 => [[['_route' => 'api.product_visibility.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-visibility'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        59509 => [[['_route' => 'api.product_visibility.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-visibility'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59609 => [[['_route' => 'api.product_visibility.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-visibility'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59697 => [[['_route' => 'api.product_visibility.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-visibility'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59791 => [
            [['_route' => 'api.promotion.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        59870 => [[['_route' => 'api.promotion.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        59955 => [[['_route' => 'api.promotion.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60045 => [[['_route' => 'api.promotion.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60123 => [[['_route' => 'api.promotion.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60229 => [
            [['_route' => 'api.promotion_cart_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        60320 => [[['_route' => 'api.promotion_cart_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        60417 => [[['_route' => 'api.promotion_cart_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60519 => [[['_route' => 'api.promotion_cart_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60609 => [[['_route' => 'api.promotion_cart_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60713 => [
            [['_route' => 'api.promotion_discount.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        60802 => [[['_route' => 'api.promotion_discount.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        60897 => [[['_route' => 'api.promotion_discount.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60997 => [[['_route' => 'api.promotion_discount.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61085 => [[['_route' => 'api.promotion_discount.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61197 => [
            [['_route' => 'api.promotion_discount_prices.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        61294 => [[['_route' => 'api.promotion_discount_prices.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        61397 => [[['_route' => 'api.promotion_discount_prices.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61505 => [[['_route' => 'api.promotion_discount_prices.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61601 => [[['_route' => 'api.promotion_discount_prices.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61711 => [
            [['_route' => 'api.promotion_discount_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        61806 => [[['_route' => 'api.promotion_discount_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        61907 => [[['_route' => 'api.promotion_discount_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62013 => [[['_route' => 'api.promotion_discount_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62107 => [[['_route' => 'api.promotion_discount_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62219 => [
            [['_route' => 'api.promotion_individual_code.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        62316 => [[['_route' => 'api.promotion_individual_code.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        62419 => [[['_route' => 'api.promotion_individual_code.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62527 => [[['_route' => 'api.promotion_individual_code.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62623 => [[['_route' => 'api.promotion_individual_code.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62730 => [
            [['_route' => 'api.promotion_order_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        62822 => [[['_route' => 'api.promotion_order_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        62920 => [[['_route' => 'api.promotion_order_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63023 => [[['_route' => 'api.promotion_order_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63114 => [[['_route' => 'api.promotion_order_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63227 => [
            [['_route' => 'api.promotion_persona_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        63325 => [[['_route' => 'api.promotion_persona_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        63429 => [[['_route' => 'api.promotion_persona_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63538 => [[['_route' => 'api.promotion_persona_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63635 => [[['_route' => 'api.promotion_persona_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63744 => [
            [['_route' => 'api.promotion_persona_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        63838 => [[['_route' => 'api.promotion_persona_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        63938 => [[['_route' => 'api.promotion_persona_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64043 => [[['_route' => 'api.promotion_persona_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64136 => [[['_route' => 'api.promotion_persona_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64246 => [
            [['_route' => 'api.promotion_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        64341 => [[['_route' => 'api.promotion_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        64442 => [[['_route' => 'api.promotion_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64548 => [[['_route' => 'api.promotion_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64642 => [[['_route' => 'api.promotion_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64746 => [
            [['_route' => 'api.promotion_setgroup.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        64835 => [[['_route' => 'api.promotion_setgroup.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        64930 => [[['_route' => 'api.promotion_setgroup.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65030 => [[['_route' => 'api.promotion_setgroup.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65118 => [[['_route' => 'api.promotion_setgroup.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65228 => [
            [['_route' => 'api.promotion_setgroup_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        65323 => [[['_route' => 'api.promotion_setgroup_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        65424 => [[['_route' => 'api.promotion_setgroup_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65530 => [[['_route' => 'api.promotion_setgroup_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65624 => [[['_route' => 'api.promotion_setgroup_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65731 => [
            [['_route' => 'api.promotion_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        65823 => [[['_route' => 'api.promotion_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        65921 => [[['_route' => 'api.promotion_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66024 => [[['_route' => 'api.promotion_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66115 => [[['_route' => 'api.promotion_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66215 => [
            [['_route' => 'api.property_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        66300 => [[['_route' => 'api.property_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        66391 => [[['_route' => 'api.property_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66487 => [[['_route' => 'api.property_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66571 => [[['_route' => 'api.property_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66679 => [
            [['_route' => 'api.property_group_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        66772 => [[['_route' => 'api.property_group_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        66871 => [[['_route' => 'api.property_group_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66975 => [[['_route' => 'api.property_group_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67067 => [[['_route' => 'api.property_group_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67188 => [
            [['_route' => 'api.property_group_option_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        67294 => [[['_route' => 'api.property_group_option_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        67406 => [[['_route' => 'api.property_group_option_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67523 => [[['_route' => 'api.property_group_option_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67628 => [[['_route' => 'api.property_group_option_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67741 => [
            [['_route' => 'api.property_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        67839 => [[['_route' => 'api.property_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        67943 => [[['_route' => 'api.property_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68052 => [[['_route' => 'api.property_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68149 => [[['_route' => 'api.property_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68238 => [
            [['_route' => 'api.rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        68312 => [[['_route' => 'api.rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        68392 => [[['_route' => 'api.rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68477 => [[['_route' => 'api.rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68550 => [[['_route' => 'api.rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68650 => [
            [['_route' => 'api.rule_condition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule-condition'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule-condition'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule-condition'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        68735 => [[['_route' => 'api.rule_condition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule-condition'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        68826 => [[['_route' => 'api.rule_condition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule-condition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68922 => [[['_route' => 'api.rule_condition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule-condition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69006 => [[['_route' => 'api.rule_condition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule-condition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69105 => [
            [['_route' => 'api.sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        69189 => [[['_route' => 'api.sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        69279 => [[['_route' => 'api.sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69374 => [[['_route' => 'api.sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69457 => [[['_route' => 'api.sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69567 => [
            [['_route' => 'api.sales_channel_analytics.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        69662 => [[['_route' => 'api.sales_channel_analytics.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        69763 => [[['_route' => 'api.sales_channel_analytics.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69869 => [[['_route' => 'api.sales_channel_analytics.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69969 => [[['_route' => 'api.sales_channel_analytics.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70077 => [
            [['_route' => 'api.sales_channel_country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        70170 => [[['_route' => 'api.sales_channel_country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        70269 => [[['_route' => 'api.sales_channel_country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70373 => [[['_route' => 'api.sales_channel_country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70465 => [[['_route' => 'api.sales_channel_country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70574 => [
            [['_route' => 'api.sales_channel_currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        70668 => [[['_route' => 'api.sales_channel_currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        70768 => [[['_route' => 'api.sales_channel_currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70873 => [[['_route' => 'api.sales_channel_currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70966 => [[['_route' => 'api.sales_channel_currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71073 => [
            [['_route' => 'api.sales_channel_domain.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        71165 => [[['_route' => 'api.sales_channel_domain.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        71263 => [[['_route' => 'api.sales_channel_domain.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71366 => [[['_route' => 'api.sales_channel_domain.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71457 => [[['_route' => 'api.sales_channel_domain.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71566 => [
            [['_route' => 'api.sales_channel_language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        71660 => [[['_route' => 'api.sales_channel_language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        71760 => [[['_route' => 'api.sales_channel_language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71865 => [[['_route' => 'api.sales_channel_language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71958 => [[['_route' => 'api.sales_channel_language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72074 => [
            [['_route' => 'api.sales_channel_payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        72175 => [[['_route' => 'api.sales_channel_payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        72282 => [[['_route' => 'api.sales_channel_payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72394 => [[['_route' => 'api.sales_channel_payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72494 => [[['_route' => 'api.sales_channel_payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72611 => [
            [['_route' => 'api.sales_channel_shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        72713 => [[['_route' => 'api.sales_channel_shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        72821 => [[['_route' => 'api.sales_channel_shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72934 => [[['_route' => 'api.sales_channel_shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73035 => [[['_route' => 'api.sales_channel_shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73147 => [
            [['_route' => 'api.sales_channel_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        73244 => [[['_route' => 'api.sales_channel_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        73347 => [[['_route' => 'api.sales_channel_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73455 => [[['_route' => 'api.sales_channel_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73551 => [[['_route' => 'api.sales_channel_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73656 => [
            [['_route' => 'api.sales_channel_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        73746 => [[['_route' => 'api.sales_channel_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        73842 => [[['_route' => 'api.sales_channel_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73943 => [[['_route' => 'api.sales_channel_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74032 => [[['_route' => 'api.sales_channel_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74150 => [
            [['_route' => 'api.sales_channel_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        74253 => [[['_route' => 'api.sales_channel_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        74362 => [[['_route' => 'api.sales_channel_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74476 => [[['_route' => 'api.sales_channel_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74578 => [[['_route' => 'api.sales_channel_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74673 => [
            [['_route' => 'api.salutation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        74753 => [[['_route' => 'api.salutation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        74839 => [[['_route' => 'api.salutation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74930 => [[['_route' => 'api.salutation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75009 => [[['_route' => 'api.salutation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75117 => [
            [['_route' => 'api.salutation_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        75210 => [[['_route' => 'api.salutation_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        75309 => [[['_route' => 'api.salutation_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75413 => [[['_route' => 'api.salutation_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75505 => [[['_route' => 'api.salutation_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75605 => [
            [['_route' => 'api.scheduled_task.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'scheduled-task'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'scheduled-task'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'scheduled-task'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        75690 => [[['_route' => 'api.scheduled_task.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'scheduled-task'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        75781 => [[['_route' => 'api.scheduled_task.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'scheduled-task'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75877 => [[['_route' => 'api.scheduled_task.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'scheduled-task'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75961 => [[['_route' => 'api.scheduled_task.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'scheduled-task'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76054 => [
            [['_route' => 'api.seo_url.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        76132 => [[['_route' => 'api.seo_url.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        76216 => [[['_route' => 'api.seo_url.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76305 => [[['_route' => 'api.seo_url.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76382 => [[['_route' => 'api.seo_url.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76485 => [
            [['_route' => 'api.seo_url_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url-template'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url-template'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url-template'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        76573 => [[['_route' => 'api.seo_url_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url-template'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        76667 => [[['_route' => 'api.seo_url_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76766 => [[['_route' => 'api.seo_url_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76853 => [[['_route' => 'api.seo_url_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76954 => [
            [['_route' => 'api.shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        77040 => [[['_route' => 'api.shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        77132 => [[['_route' => 'api.shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77229 => [[['_route' => 'api.shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77314 => [[['_route' => 'api.shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77422 => [
            [['_route' => 'api.shipping_method_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        77515 => [[['_route' => 'api.shipping_method_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        77614 => [[['_route' => 'api.shipping_method_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77718 => [[['_route' => 'api.shipping_method_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77810 => [[['_route' => 'api.shipping_method_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77916 => [
            [['_route' => 'api.shipping_method_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        78007 => [[['_route' => 'api.shipping_method_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        78104 => [[['_route' => 'api.shipping_method_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78206 => [[['_route' => 'api.shipping_method_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78296 => [[['_route' => 'api.shipping_method_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78410 => [
            [['_route' => 'api.shipping_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        78509 => [[['_route' => 'api.shipping_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        78614 => [[['_route' => 'api.shipping_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78724 => [[['_route' => 'api.shipping_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78822 => [[['_route' => 'api.shipping_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78914 => [
            [['_route' => 'api.snippet.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        78991 => [[['_route' => 'api.snippet.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        79074 => [[['_route' => 'api.snippet.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79162 => [[['_route' => 'api.snippet.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79238 => [[['_route' => 'api.snippet.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79335 => [
            [['_route' => 'api.snippet_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet-set'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet-set'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet-set'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        79417 => [[['_route' => 'api.snippet_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet-set'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        79505 => [[['_route' => 'api.snippet_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79598 => [[['_route' => 'api.snippet_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79679 => [[['_route' => 'api.snippet_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79778 => [
            [['_route' => 'api.state_machine.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        79862 => [[['_route' => 'api.state_machine.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        79952 => [[['_route' => 'api.state_machine.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80047 => [[['_route' => 'api.state_machine.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80130 => [[['_route' => 'api.state_machine.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80238 => [
            [['_route' => 'api.state_machine_history.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-history'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-history'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-history'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        80331 => [[['_route' => 'api.state_machine_history.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-history'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        80430 => [[['_route' => 'api.state_machine_history.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-history'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80534 => [[['_route' => 'api.state_machine_history.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-history'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80626 => [[['_route' => 'api.state_machine_history.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-history'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80732 => [
            [['_route' => 'api.state_machine_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        80823 => [[['_route' => 'api.state_machine_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        80920 => [[['_route' => 'api.state_machine_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81022 => [[['_route' => 'api.state_machine_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81112 => [[['_route' => 'api.state_machine_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81231 => [
            [['_route' => 'api.state_machine_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        81335 => [[['_route' => 'api.state_machine_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        81445 => [[['_route' => 'api.state_machine_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81560 => [[['_route' => 'api.state_machine_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81663 => [[['_route' => 'api.state_machine_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81774 => [
            [['_route' => 'api.state_machine_transition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        81870 => [[['_route' => 'api.state_machine_transition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        81972 => [[['_route' => 'api.state_machine_transition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82079 => [[['_route' => 'api.state_machine_transition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82174 => [[['_route' => 'api.state_machine_transition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82286 => [
            [['_route' => 'api.state_machine_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        82383 => [[['_route' => 'api.state_machine_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        82486 => [[['_route' => 'api.state_machine_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82594 => [[['_route' => 'api.state_machine_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82690 => [[['_route' => 'api.state_machine_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82802 => [
            [['_route' => 'api.swag_migration_connection.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_connection.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_connection.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        82899 => [[['_route' => 'api.swag_migration_connection.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        83002 => [[['_route' => 'api.swag_migration_connection.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83110 => [[['_route' => 'api.swag_migration_connection.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83206 => [[['_route' => 'api.swag_migration_connection.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-connection'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83312 => [
            [['_route' => 'api.swag_migration_data.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_data.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_data.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        83403 => [[['_route' => 'api.swag_migration_data.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        83500 => [[['_route' => 'api.swag_migration_data.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83602 => [[['_route' => 'api.swag_migration_data.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83692 => [[['_route' => 'api.swag_migration_data.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83810 => [
            [['_route' => 'api.swag_migration_general_setting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_general_setting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_general_setting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        83913 => [[['_route' => 'api.swag_migration_general_setting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        84022 => [[['_route' => 'api.swag_migration_general_setting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84136 => [[['_route' => 'api.swag_migration_general_setting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84238 => [[['_route' => 'api.swag_migration_general_setting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-general-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84347 => [
            [['_route' => 'api.swag_migration_logging.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_logging.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_logging.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        84441 => [[['_route' => 'api.swag_migration_logging.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        84541 => [[['_route' => 'api.swag_migration_logging.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84646 => [[['_route' => 'api.swag_migration_logging.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84739 => [[['_route' => 'api.swag_migration_logging.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-logging'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84848 => [
            [['_route' => 'api.swag_migration_mapping.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_mapping.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_mapping.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        84942 => [[['_route' => 'api.swag_migration_mapping.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        85042 => [[['_route' => 'api.swag_migration_mapping.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85147 => [[['_route' => 'api.swag_migration_mapping.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85240 => [[['_route' => 'api.swag_migration_mapping.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-mapping'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85353 => [
            [['_route' => 'api.swag_migration_media_file.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_media_file.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_media_file.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        85451 => [[['_route' => 'api.swag_migration_media_file.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        85555 => [[['_route' => 'api.swag_migration_media_file.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85664 => [[['_route' => 'api.swag_migration_media_file.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85761 => [[['_route' => 'api.swag_migration_media_file.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-media-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85866 => [
            [['_route' => 'api.swag_migration_run.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_run.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_migration_run.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        85956 => [[['_route' => 'api.swag_migration_run.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        86052 => [[['_route' => 'api.swag_migration_run.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86153 => [[['_route' => 'api.swag_migration_run.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86242 => [[['_route' => 'api.swag_migration_run.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-migration-run'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86341 => [
            [['_route' => 'api.system_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'system-config'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.system_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'system-config'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.system_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'system-config'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        86425 => [[['_route' => 'api.system_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'system-config'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        86515 => [[['_route' => 'api.system_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'system-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86610 => [[['_route' => 'api.system_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'system-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86693 => [[['_route' => 'api.system_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'system-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86781 => [
            [['_route' => 'api.tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        86854 => [[['_route' => 'api.tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        86933 => [[['_route' => 'api.tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87017 => [[['_route' => 'api.tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87089 => [[['_route' => 'api.tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87177 => [
            [['_route' => 'api.tax.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        87250 => [[['_route' => 'api.tax.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        87329 => [[['_route' => 'api.tax.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87413 => [[['_route' => 'api.tax.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87485 => [[['_route' => 'api.tax.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87579 => [
            [['_route' => 'api.tax_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        87658 => [[['_route' => 'api.tax_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        87743 => [[['_route' => 'api.tax_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87833 => [[['_route' => 'api.tax_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87911 => [[['_route' => 'api.tax_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88011 => [
            [['_route' => 'api.tax_rule_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        88096 => [[['_route' => 'api.tax_rule_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        88187 => [[['_route' => 'api.tax_rule_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88283 => [[['_route' => 'api.tax_rule_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88367 => [[['_route' => 'api.tax_rule_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88480 => [
            [['_route' => 'api.tax_rule_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        88578 => [[['_route' => 'api.tax_rule_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        88682 => [[['_route' => 'api.tax_rule_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88791 => [[['_route' => 'api.tax_rule_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88888 => [[['_route' => 'api.tax_rule_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88978 => [
            [['_route' => 'api.theme.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        89053 => [[['_route' => 'api.theme.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        89134 => [[['_route' => 'api.theme.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89220 => [[['_route' => 'api.theme.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89294 => [[['_route' => 'api.theme.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89391 => [
            [['_route' => 'api.theme_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        89473 => [[['_route' => 'api.theme_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        89561 => [[['_route' => 'api.theme_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89654 => [[['_route' => 'api.theme_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89735 => [[['_route' => 'api.theme_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89841 => [
            [['_route' => 'api.theme_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        89932 => [[['_route' => 'api.theme_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        90029 => [[['_route' => 'api.theme_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90131 => [[['_route' => 'api.theme_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90221 => [[['_route' => 'api.theme_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90324 => [
            [['_route' => 'api.theme_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        90412 => [[['_route' => 'api.theme_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        90506 => [[['_route' => 'api.theme_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90605 => [[['_route' => 'api.theme_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90692 => [[['_route' => 'api.theme_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90781 => [
            [['_route' => 'api.unit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        90855 => [[['_route' => 'api.unit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        90935 => [[['_route' => 'api.unit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91020 => [[['_route' => 'api.unit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91093 => [[['_route' => 'api.unit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91195 => [
            [['_route' => 'api.unit_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        91282 => [[['_route' => 'api.unit_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        91375 => [[['_route' => 'api.unit_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91473 => [[['_route' => 'api.unit_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91559 => [[['_route' => 'api.unit_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91645 => [[['_route' => 'api.user.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        91718 => [[['_route' => 'api.user.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        91798 => [[['_route' => 'api.user.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91883 => [[['_route' => 'api.user.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91985 => [
            [['_route' => 'api.user_access_key.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-access-key'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-access-key'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-access-key'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        92072 => [[['_route' => 'api.user_access_key.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-access-key'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        92165 => [[['_route' => 'api.user_access_key.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-access-key'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92263 => [[['_route' => 'api.user_access_key.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-access-key'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92349 => [[['_route' => 'api.user_access_key.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-access-key'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92448 => [
            [['_route' => 'api.user_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-recovery'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-recovery'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        92532 => [[['_route' => 'api.user_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        92622 => [[['_route' => 'api.user_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92717 => [[['_route' => 'api.user_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92800 => [[['_route' => 'api.user_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92892 => [
            [['_route' => 'api.version.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        92969 => [[['_route' => 'api.version.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        93052 => [[['_route' => 'api.version.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93140 => [[['_route' => 'api.version.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93216 => [[['_route' => 'api.version.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93316 => [
            [['_route' => 'api.version_commit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        93401 => [[['_route' => 'api.version_commit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        93492 => [[['_route' => 'api.version_commit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93588 => [[['_route' => 'api.version_commit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93672 => [[['_route' => 'api.version_commit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93778 => [
            [['_route' => 'api.version_commit_data.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit-data'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit-data'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit-data'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        93869 => [[['_route' => 'api.version_commit_data.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit-data'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        93966 => [[['_route' => 'api.version_commit_data.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        94068 => [[['_route' => 'api.version_commit_data.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        94158 => [[['_route' => 'api.version_commit_data.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        94191 => [[['_route' => 'api.info.me', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::me'], ['version'], ['GET' => 0], null, false, false, null]],
        94205 => [[['_route' => 'api.info.ping', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::status'], ['version'], ['GET' => 0], null, false, false, null]],
        94235 => [[['_route' => 'api.user.delete', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUser'], ['version', 'userId'], ['DELETE' => 0], null, false, true, null]],
        94267 => [[['_route' => 'api.user_access_keys.delete', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserAccessKey'], ['version', 'userId', 'id'], ['DELETE' => 0], null, false, true, null]],
        94277 => [[['_route' => 'api.user.update', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertUser'], ['version', 'userId'], ['PATCH' => 0], null, false, true, null]],
        94288 => [[['_route' => 'api.user.create', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertUser'], ['version'], ['POST' => 0], null, false, false, null]],
        94349 => [[['_route' => 'sales-channel-api.category.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'category'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94385 => [[['_route' => 'sales-channel-api.category.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'category'], ['version'], ['POST' => 0], null, false, false, null]],
        94409 => [[['_route' => 'sales-channel-api.category.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'category'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94441 => [[['_route' => 'sales-channel-api.country.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'country'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94476 => [[['_route' => 'sales-channel-api.country.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'country'], ['version'], ['POST' => 0], null, false, false, null]],
        94499 => [[['_route' => 'sales-channel-api.country.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'country'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94538 => [[['_route' => 'sales-channel-api.country_state.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'country-state'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94580 => [[['_route' => 'sales-channel-api.country_state.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'country-state'], ['version'], ['POST' => 0], null, false, false, null]],
        94610 => [[['_route' => 'sales-channel-api.country_state.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'country-state'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94643 => [[['_route' => 'sales-channel-api.currency.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'currency'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94679 => [[['_route' => 'sales-channel-api.currency.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'currency'], ['version'], ['POST' => 0], null, false, false, null]],
        94703 => [[['_route' => 'sales-channel-api.currency.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'currency'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94736 => [[['_route' => 'sales-channel-api.language.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'language'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94772 => [[['_route' => 'sales-channel-api.language.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'language'], ['version'], ['POST' => 0], null, false, false, null]],
        94796 => [[['_route' => 'sales-channel-api.language.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'language'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94835 => [[['_route' => 'sales-channel-api.main_category.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'main-category'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94877 => [[['_route' => 'sales-channel-api.main_category.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'main-category'], ['version'], ['POST' => 0], null, false, false, null]],
        94907 => [[['_route' => 'sales-channel-api.main_category.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'main-category'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        94947 => [[['_route' => 'sales-channel-api.payment_method.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'payment-method'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        94990 => [[['_route' => 'sales-channel-api.payment_method.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'payment-method'], ['version'], ['POST' => 0], null, false, false, null]],
        95021 => [[['_route' => 'sales-channel-api.payment_method.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'payment-method'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        95053 => [[['_route' => 'sales-channel-api.product.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'product'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        95088 => [[['_route' => 'sales-channel-api.product.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'product'], ['version'], ['POST' => 0], null, false, false, null]],
        95111 => [[['_route' => 'sales-channel-api.product.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'product'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        95146 => [[['_route' => 'sales-channel-api.salutation.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'salutation'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        95184 => [[['_route' => 'sales-channel-api.salutation.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'salutation'], ['version'], ['POST' => 0], null, false, false, null]],
        95210 => [[['_route' => 'sales-channel-api.salutation.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'salutation'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        95243 => [[['_route' => 'sales-channel-api.seo_url.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'seo-url'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        95279 => [[['_route' => 'sales-channel-api.seo_url.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'seo-url'], ['version'], ['POST' => 0], null, false, false, null]],
        95303 => [[['_route' => 'sales-channel-api.seo_url.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'seo-url'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        95344 => [[['_route' => 'sales-channel-api.shipping_method.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'shipping-method'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        95388 => [[['_route' => 'sales-channel-api.shipping_method.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'shipping-method'], ['version'], ['POST' => 0], null, false, false, null]],
        95420 => [
            [['_route' => 'sales-channel-api.shipping_method.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'shipping-method'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
