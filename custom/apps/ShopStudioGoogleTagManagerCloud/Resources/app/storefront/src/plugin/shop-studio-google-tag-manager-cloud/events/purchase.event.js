import AnalyticsEvent from '../analytics-event';
import Console from "../helper/console.helper";
import ProductBuilder from "../helper/product-builder.helper";
import DataLayer from "../helper/data-layer.helper";

/**
 * @since 1.0.0
 */
export default class PurchaseEvent extends AnalyticsEvent
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
        return controllerName === 'checkout' && controllerAction === 'finishpage';
    }

    /**
     * @since 1.0.0
     */
    async execute() {
        const urlParams = new URLSearchParams(window.location.search);

        const orderId = urlParams.get('orderId');
        if (!orderId) {
            Console.warn('Order ID not found. Skipping');
            return;
        }

        await this._buildDataAndPushToDataLayer(orderId);
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @param {string} orderId
     *
     * @return {Promise<void>}
     */
    async _buildDataAndPushToDataLayer(orderId) {
        const order = await this.storeApiClient.loadOrder(orderId);
        if (!order) {
            Console.warn(`Order "${orderId}" could not not be fetched. Skipping.`);
            return;
        }

        const orderNumber = order.orderNumber;
        const totalPrice = order.amountTotal;
        const netPrice = order.amountNet;
        const currency = this.context.currency.isoCode;
        const tax = order.price.calculatedTaxes.reduce((accumulator, calculatedTax) => accumulator + calculatedTax.tax, 0);
        const shipping = order.shippingTotal || 0;
        const affiliation = order.affiliateCode && order.campaignCode ? `${order.affiliateCode}/${order.campaignCode}` : null;
        const coupon = (order.lineItems.find(lineItem => lineItem.type === 'promotion') || {}).referenceId || null;
        const products = ProductBuilder.productListByOrder(order, this.context);

        DataLayer.push({
            'event': 'shop_studio_google_tag_manager_cloud_purchase',
            'google_analytics': {
                'event': 'purchase',
                'transaction_id': orderNumber,
                'value': totalPrice,
                'currency': currency,
                'tax': tax,
                'shipping': shipping,
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
                'transaction_id': orderNumber,
                'value': totalPrice,
                'currency': currency
            },
            'facebook': {
                'event': 'Purchase',
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
            'pinterest': {
                'event': 'Checkout',
                'value': totalPrice,
                'currency': currency,
                'order_id': orderNumber,
                'order_quantity': products.length,
                'product_ids': products.map(product => product.number),
                'line_items': products.map(product => {
                    return {
                        'product_id': product.number,
                        'product_name': product.name,
                        'product_price': product.price,
                        'product_currency': product.currency,
                        'product_quantity': product.quantity,
                        'product_variant': product.variant
                    }
                })
            },
            'data': {
                'order_number': orderNumber,
                'total_price': totalPrice,
                'net_price': netPrice,
                'currency': currency,
                'tax': tax,
                'shipping': shipping,
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
