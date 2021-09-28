import AnalyticsEvent from '../analytics-event';
import DomAccessHelper from 'src/helper/dom-access.helper';
import DataLayer from "../helper/data-layer.helper";
import ProductBuilder from "../helper/product-builder.helper";

/**
 * @since 1.0.0
 */
export default class ViewProductSearchResults extends AnalyticsEvent
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
        return controllerName === 'search' && controllerAction === 'search';
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
        const searchInput = DomAccessHelper.querySelector(document, '.header-search-input');
        const searchTerm = searchInput.value;
        const totalPrice = products.reduce((accumulator, product) => accumulator + product.price, 0);
        const currency = this.context.currency.isoCode;

        DataLayer.push({
            'event': 'shopstudio_google_tag_manager_cloud_view_product_search_results',
            'google_analytics': {
                'event': 'view_search_results',
                'search_term': searchTerm,
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
                'search_term': searchTerm,
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
