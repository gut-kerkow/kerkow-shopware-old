import AnalyticsEvent from '../analytics-event';
import DomAccessHelper from 'src/helper/dom-access.helper';
import ProductBuilder from "../helper/product-builder.helper";
import DataLayer from "../helper/data-layer.helper";
import Console from "../helper/console.helper";

/**
 * @since 1.0.0
 */
export default class AddToCartByNumberEvent extends AnalyticsEvent
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
        return controllerName === 'checkout' && controllerAction === 'cartpage';
    }

    /**
     * @since 1.0.0
     */
    execute() {
        const addToCartForm = DomAccessHelper.querySelector(document, '.cart-add-product', false);
        if (!addToCartForm) {
            return;
        }

        addToCartForm.addEventListener('submit', this._formSubmit.bind(this));
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @param {object} event
     *
     * @return {Promise<void>}
     */
    async _formSubmit(event) {
        if (!this.active) {
            return;
        }

        const productId = this._findProductId(event.currentTarget);
        if (!productId) {
            Console.warn('Product ID not found. Skipping.');
            return;
        }

        await this._buildDataAndPushToDataLayer(productId, event.currentTarget);
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @param {Node} element
     *
     * @return {string|null}
     */
    _findProductId(element) {
        const input = DomAccessHelper.querySelector(element, '.form-control');

        return input.value || null;
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
