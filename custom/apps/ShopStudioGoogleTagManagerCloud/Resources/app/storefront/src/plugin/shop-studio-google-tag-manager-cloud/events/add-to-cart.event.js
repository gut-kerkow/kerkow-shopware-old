import EventAwareAnalyticsEvent from '../event-aware-analytics-event';
import Console from '../helper/console.helper';
import DataLayer from '../helper/data-layer.helper';
import ProductBuilder from '../helper/product-builder.helper';

/**
 * @since 1.0.0
 */
export default class AddToCartEvent extends EventAwareAnalyticsEvent
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
     * @return {string}
     */
    getPluginName() {
        return 'AddToCart';
    }

    /**
     * @since 1.0.0
     *
     * @return {object}
     */
    getEvents() {
        return {
            'beforeFormSubmit':  this._beforeFormSubmit.bind(this)
        };
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @param {object} event
     */
    async _beforeFormSubmit(event) {
        if (!this.active) {
            return;
        }

        const productId = this._findProductId(event.detail);
        if (!productId) {
            Console.warn('Product ID not found. Skipping.');
            return;
        }

        await this._buildDataAndPushToDataLayer(productId, event.detail);
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @param {FormData} formData
     *
     * @return {string|null}
     */
    _findProductId(formData) {
        let productId = null;

        formData.forEach((value, key) => {
            if (key.endsWith('[id]')) {
                productId = value;
            }
        });

        if (!productId) {
            console.warn('[Google Tag Manager Cloud Plugin] Product ID could not be fetched. Skipping.');
        }

        return productId;
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @param {string} productId
     * @param {FormData} formData
     *
     * @return {Promise<void>}
     */
    async _buildDataAndPushToDataLayer(productId, formData) {
        const productDetail = await this.storeApiClient.loadProductDetail(productId);
        if (!productDetail) {
            Console.warn(`Product "${productId}" could not not be fetched. Skipping.`);
            return;
        }

        const product = ProductBuilder.productByProductDetail(productDetail, this.context);
        if (!product) {
            Console.warn(`Product "${productId}" could not be build by product detail. Skipping.`);
            return;
        }

        let quantity = formData.get('lineItems[' + productId + '][quantity]');
        if (quantity !== null) {
            quantity = parseInt(quantity.toString());
        }

        DataLayer.push({
            'event': 'shop_studio_google_tag_manager_cloud_add_to_cart',
            'google_analytics': {
                'event': 'add_to_cart',
                'value': product.price,
                'currency': product.currency,
                'items': [
                    {
                        'google_business_vertical': 'retail',
                        'id': product.number,
                        'name': product.name,
                        'price': product.price,
                        'currency': product.currency,
                        'quantity': quantity,
                        'variant': product.variant
                    }
                ]
            },
            'google_ads': {
                'event': 'conversion',
                'value': product.price,
                'currency': product.currency
            },
            'facebook': {
                'event': 'AddToCart',
                'value': product.price,
                'currency': product.currency,
                'content_type': 'product',
                'content_ids': [product.number],
                'contents': [
                    {
                        'id': product.number,
                        'quantity': quantity
                    }
                ]
            },
            'pinterest': {
                'event': 'AddToCart',
                'line_items': [
                    {
                        'product_id': product.number,
                        'product_name': product.name,
                        'product_price': product.price,
                        'product_currency': product.currency,
                        'product_quantity': quantity,
                        'product_variant': product.variant
                    }
                ]
            },
            'data': {
                'total_price': product.price,
                'currency': product.currency,
                'product_ids': [product.number],
                'products': [
                    {
                        'id': product.number,
                        'name': product.name,
                        'price': product.price,
                        'currency': product.currency,
                        'quantity': quantity,
                        'variant': product.variant
                    }
                ]
            }
        }, {
            debugEnabled: this.debugEnabled
        });
    }
}
