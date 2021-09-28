import Plugin from 'src/plugin-system/plugin.class';
import { COOKIE_CONFIGURATION_UPDATE } from 'src/plugin/cookie/cookie-configuration.plugin';
import AddToCartEvent from './events/add-to-cart.event';
import AddToCartByNumberEvent from './events/add-to-cart-by-number.event';
import BeginCheckoutEvent from './events/begin-checkout.event';
import BeginCheckoutOnCartEvent from './events/begin-checkout-on-cart.event';
import CheckoutProgressEvent from './events/checkout-progress.event';
import LoginEvent from './events/login.event';
import PurchaseEvent from './events/purchase.event';
import RemoveFromCartEvent from './events/remove-from-cart.event';
import SearchEvent from './events/search.event';
import SignUpEvent from './events/sign-up.event';
import ViewProductEvent from './events/view-product.event';
import ViewProductListEvent from './events/view-product-list.event';
import ViewProductSearchResultsEvent from './events/view-product-search-results';
import CookieStorageHelper from 'src/helper/storage/cookie-storage.helper';
import StoreApiClient from "./services/store-api-client.service";
import Console from './helper/console.helper';

/**
 * @since 1.0.0
 */
export default class ShopStudioGoogleTagManagerCloudPlugin extends Plugin
{
    /**
     * @since 1.0.0
     */
    static options = {
        containerId: null,
        debugEnabled: false,
        context: {
            controllerName: null,
            controllerAction: null,
            currency: {
                isoCode: null
            }
        }
    };

    /**
     * @since 1.0.0
     */
    init() {
        this.cookieEnabledName = 'shopstudio-google-tag-manager-cloud-cookie-consent';
        this.events = [];

        this._handleCookieChangeEvent();

        if (!CookieStorageHelper.getItem(this.cookieEnabledName)) {
            return;
        }

        this._startGoogleTagManager();
    }

    /**
     * @since 1.0.0
     *
     * @param {AnalyticsEvent} event
     */
    registerEvent(event) {
        this.events.push(new event({
            storeApiClient: new StoreApiClient(),
            context: this.options.context,
            debugEnabled: this.options.debugEnabled
        }));
    }

    /**
     * @since 1.0.0
     *
     * @private
     */
    _startGoogleTagManager() {
        const containerId = this.options.containerId;
        if (!containerId) {
            Console.error('Container ID is missing.');
            return;
        }

        window.shopStudioGoogleTagManagerCloudGtagCallback();

        this._registerDefaultEvents();
        this._handleEvents();
    }

    /**
     * @since 1.0.0
     *
     * @private
     */
    _handleEvents() {
        this.events.forEach(event => {
            if (!event.supports(this.options.context.controllerName, this.options.context.controllerAction)) {
                return;
            }

            event.execute();
        });
    }

    /**
     * @since 1.0.0
     *
     * @private
     */
    _registerDefaultEvents() {
        this.registerEvent(AddToCartEvent);
        this.registerEvent(AddToCartByNumberEvent);
        this.registerEvent(BeginCheckoutEvent);
        this.registerEvent(BeginCheckoutOnCartEvent);
        this.registerEvent(CheckoutProgressEvent);
        this.registerEvent(LoginEvent);
        this.registerEvent(PurchaseEvent);
        this.registerEvent(RemoveFromCartEvent);
        this.registerEvent(SearchEvent);
        this.registerEvent(SignUpEvent);
        this.registerEvent(ViewProductEvent);
        this.registerEvent(ViewProductListEvent);
        this.registerEvent(ViewProductSearchResultsEvent);
    }

    /**
     * @since 1.0.0
     *
     * @private
     */
    _handleCookieChangeEvent() {
        document.$emitter.subscribe(COOKIE_CONFIGURATION_UPDATE, this._handleCookies.bind(this));
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @param {object} cookieUpdateEvent
     */
    _handleCookies(cookieUpdateEvent) {
        const updatedCookies = cookieUpdateEvent.detail;

        if (!Object.prototype.hasOwnProperty.call(updatedCookies, this.cookieEnabledName)) {
            return;
        }

        if (updatedCookies[this.cookieEnabledName]) {
            this._startGoogleTagManager();
            return;
        }

        this._removeCookies();
        this._disableEvents();
    }

    /**
     * @since 1.0.0
     *
     * @private
     */
    _removeCookies() {
        const allCookies = document.cookie.split(';');
        const gaCookieRegex = /^(_swag_ga|_gat_gtag)/;

        allCookies.forEach(cookie => {
            const cookieName = cookie.split('=')[0].trim();
            if (!cookieName.match(gaCookieRegex)) {
                return;
            }

            CookieStorageHelper.removeItem(cookieName);
        });
    }

    /**
     * @since 1.0.0
     *
     * @private
     */
    _disableEvents() {
        this.events.forEach(event => {
            event.disable();
        });
    }
}
