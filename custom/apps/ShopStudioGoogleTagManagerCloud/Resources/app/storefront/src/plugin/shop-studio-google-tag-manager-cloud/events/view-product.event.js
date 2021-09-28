import AnalyticsEvent from '../analytics-event';
import DomAccessHelper from 'src/helper/dom-access.helper';
import ProductBuilder from "../helper/product-builder.helper";
import DataLayer from "../helper/data-layer.helper";
import Console from "../helper/console.helper";

/**
 * @since 1.0.0
 */
export default class ViewProductEvent extends AnalyticsEvent
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
        return controllerName === 'product' && controllerAction === 'index';
    }

    /**
     * @since 1.0.0
     */
    execute() {
        if (!this.active) {
            return;
        }

        const productId = this._findProductId();
        if (!productId) {
            Console.warn('Product ID not found. Skipping.');
            return;
        }

        this._buildDataAndPushToDataLayer(productId);
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @return {string|null}
     */
    _findProductId() {
        const form = DomAccessHelper.querySelector(document, '#productDetailPageBuyProductForm');
        const inputs = DomAccessHelper.querySelectorAll(form, 'input');
        let productId = null;

        inputs.forEach(item => {
            if (DomAccessHelper.getAttribute(item, 'name').endsWith('[id]')) {
                productId = item.value;
            }
        });

        return productId;
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
            Console.warn(`Product detail "${productId}" could not not be fetched. Skipping.`);
            return;
        }

        const product = ProductBuilder.productByProductDetail(productDetail, this.context);
        if (!product) {
            Console.warn(`Product "${productId}" could not be build by product detail. Skipping.`);
            return;
        }

        DataLayer.push({
            'event': 'shop_studio_google_tag_manager_cloud_view_product',
            'google_analytics': {
                'event': 'view_item',
                'value': product.price,
                'currency': product.currency,
                'items': [
                    {
                        'google_business_vertical': 'retail',
                        'id': product.number,
                        'name': product.name,
                        'price': product.price,
                        'currency': product.currency,
                        'quantity': 1,
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
                'event': 'ViewContent',
                'value': product.price,
                'currency': product.currency,
                'content_type': 'product',
                'content_name': product.name,
                'content_ids': [product.number],
                'contents': [
                    {
                        'id': product.number,
                        'quantity': 1
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
                        'quantity': 1,
                        'variant': product.variant
                    }
                ]
            }
        }, {
            debugEnabled: this.debugEnabled
        });
    }
}
