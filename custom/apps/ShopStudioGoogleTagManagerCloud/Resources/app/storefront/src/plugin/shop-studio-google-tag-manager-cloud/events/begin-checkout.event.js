import EventAwareAnalyticsEvent from '../event-aware-analytics-event';
import DomAccessHelper from 'src/helper/dom-access.helper';
import Console from "../helper/console.helper";
import ProductBuilder from "../helper/product-builder.helper";
import DataLayer from "../helper/data-layer.helper";

/**
 * @since 1.0.0
 */
export default class BeginCheckoutEvent extends EventAwareAnalyticsEvent
{
    /**
     * @since 1.0.0
     *
     * @return {boolean}
     */
    supports(controllerName, controllerAction) {
        return true;
    }

    /**
     * @since 1.0.0
     *
     * @return {object}
     */
    getEvents() {
        return {
            'offCanvasOpened': this._offCanvasOpened.bind(this)
        };
    }

    /**
     * @since 1.0.0
     *
     * @return {string}
     */
    getPluginName() {
        return 'OffCanvasCart'
    }

    /**
     * @since 1.0.0
     *
     * @private
     */
    _offCanvasOpened() {
        const beginCheckoutBtn = DomAccessHelper.querySelector(document, '.begin-checkout-btn');
        if (!beginCheckoutBtn) {
            return;
        }

        beginCheckoutBtn.addEventListener('click', this._onBeginCheckout.bind(this));
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @return {Promise<void>}
     */
    async _onBeginCheckout() {
        if (!this.active) {
            return;
        }

        await this._buildDataAndPushToDataLayer()
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @return {Promise<void>}
     */
    async _buildDataAndPushToDataLayer() {
        const cart = await this.storeApiClient.loadCart();
        if (!cart) {
            Console.warn('Cart could not not be fetched. Skipping.');
            return;
        }

        const products = ProductBuilder.productListByCart(cart, this.context);
        const totalPrice = cart.price.totalPrice;
        const netPrice = cart.price.netPrice;
        const currency = this.context.currency.isoCode;
        const tax = cart.transactions.reduce((accumulator, transaction) => transaction.amount.calculatedTaxes.reduce((_accumulator, calculatedTax) => _accumulator + calculatedTax.tax, 0), 0);
        const coupon = ((cart.extensions['cart-promotions'] || {}).addedCodes || [])[0] || null;
        const affiliation = cart.affiliateCode && cart.campaignCode ? `${cart.affiliateCode}/${cart.campaignCode}` : null;

        DataLayer.push({
            'event': 'shop_studio_google_tag_manager_cloud_checkout_progress',
            'google_analytics': {
                'event': 'begin_checkout',
                'value': totalPrice,
                'currency': currency,
                'affiliation': affiliation,
                'coupon': coupon,
                'items': products.map(product => {
                    return {
                        'google_business_vertical': 'retail',
                        'id': product.number,
                        'name': product.name,
                        'price': product.price,
                        'currency': product.currency,
                        'quantity': product.quantity,
                        'variant': product.variant
                    };
                })
            },
            'google_ads': {
                'event': 'conversion',
                'value': totalPrice,
                'currency': currency
            },
            'facebook': {
                'event': 'InitiateCheckout',
                'value': totalPrice,
                'currency': currency,
                'content_type': 'product',
                'content_ids': products.map(product => product.number),
                'contents': products.map(product => {
                    return {
                        'id': product.number,
                        'quantity': product.quantity
                    };
                })
            },
            'data': {
                'total_price': totalPrice,
                'net_price': netPrice,
                'tax': tax,
                'affiliation': affiliation,
                'coupon': coupon,
                'product_ids': products.map(product => product.number),
                'products': products
            }
        }, {
            debugEnabled: this.debugEnabled
        });
    }
}
