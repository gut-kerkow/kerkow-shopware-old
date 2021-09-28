import AnalyticsEvent from '../analytics-event';
import DomAccessHelper from 'src/helper/dom-access.helper';
import DataLayer from "../helper/data-layer.helper";
import ProductBuilder from "../helper/product-builder.helper";
import Console from "../helper/console.helper";

/**
 * @since 1.0.0
 */
export default class RemoveFromCart extends AnalyticsEvent
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
        return true;
    }

    /**
     * @since 1.0.0
     */
    execute() {
        document.addEventListener('click', this._onRemoveFromCart.bind(this));
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
    async _onRemoveFromCart(event) {
        if (!this.active) {
            return;
        }

        const closest = event.target.closest('.cart-item-remove-button');
        if (!closest) {
            return null;
        }

        const productId = this._findProductId(closest);
        if (!productId) {
            Console.warn('Product ID not found. Skipping.');
            return;
        }

        await this._buildDataAndPushToDataLayer(productId);
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
        return DomAccessHelper.getDataAttribute(element, 'product-id');
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @param {string} productId
     *
     * @return {Promise<void>}
     */
    async _buildDataAndPushToDataLayer(productId) {
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

        DataLayer.push({
            'event': 'shop_studio_google_tag_manager_cloud_remove_from_cart',
            'google_analytics': {
                'event': 'remove_from_cart',
                'value': product.price,
                'currency': product.currency,
                'items': [
                    {
                        'google_business_vertical': 'retail',
                        'id': product.number,
                        'name': product.name,
                        'price': product.price,
                        'currency': product.currency,
                        'quantity': product.quantity,
                        'variant': product.variant
                    }
                ]
            },
            'google_ads': {
                'event': 'conversion',
                'value': product.price,
                'currency': product.currency
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
                        'quantity': product.quantity,
                        'variant': product.variant
                    }
                ]
            }
        }, {
            debugEnabled: this.debugEnabled
        });
    }
}
