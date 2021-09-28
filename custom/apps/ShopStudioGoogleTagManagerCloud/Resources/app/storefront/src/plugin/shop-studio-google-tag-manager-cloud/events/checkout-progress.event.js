import AnalyticsEvent from '../analytics-event';
import Console from "../helper/console.helper";
import ProductBuilder from "../helper/product-builder.helper";
import DataLayer from "../helper/data-layer.helper";

/**
 * @since 1.0.0
 */
export default class CheckoutProgressEvent extends AnalyticsEvent
{
    /**
     * @since 1.0.0
     *
     * @param {string} controllerName
     * @param {string} controllerAction
     *
     * @return {boolean}
     */
    supports(controllerName, controllerAction) {
        return controllerName === 'checkout' && controllerAction === 'confirmpage';
    }

    /**
     * @since 1.0.0
     */
    async execute() {
        if (!this.active) {
            return;
        }

        await this._buildDataAndPushToDataLayer();
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
                'event': 'checkout_progress',
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
