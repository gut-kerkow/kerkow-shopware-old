import AnalyticsEvent from '../analytics-event';
import DomAccessHelper from 'src/helper/dom-access.helper';
import ProductBuilder from "../helper/product-builder.helper";
import DataLayer from "../helper/data-layer.helper";

/**
 * @since 1.0.0
 */
export default class ViewProductListEvent extends AnalyticsEvent
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
        const listingWrapper = DomAccessHelper.querySelector(document, '.cms-element-product-listing-wrapper', false);
        return !!listingWrapper;
    }

    /**
     * @since 1.0.0
     */
    execute() {
        if (!this.active) {
            return;
        }

        this._buildDataAndPushToDataLayer();
    }

    /**
     * @since 1.0.0
     *
     * @private
     */
    _buildDataAndPushToDataLayer() {
        const products = ProductBuilder.productListByProductListingDom(this.context);
        const totalPrice = products.reduce((accumulator, product) => accumulator + product.price, 0);
        const currency = this.context.currency.isoCode;

        DataLayer.push({
            'event': 'shopstudio_google_tag_manager_cloud_view_product_list',
            'google_analytics': {
                'event': 'view_item_list',
                'value': totalPrice,
                'currency': currency,
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
                'currency': currency,
                'product_ids': products.map(product => product.number),
                'products': products
            }
        }, {
            debugEnabled: this.debugEnabled
        });
    }
}
