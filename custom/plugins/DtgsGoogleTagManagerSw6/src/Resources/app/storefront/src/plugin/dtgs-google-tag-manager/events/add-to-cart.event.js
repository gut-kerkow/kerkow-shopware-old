import EventAwareAnalyticsEvent from 'src/plugin/google-analytics/event-aware-analytics-event';

export default class GtmAddToCartEvent extends EventAwareAnalyticsEvent
{
    supports() {
        return true;
    }

    getPluginName() {
        return 'AddToCart';
    }

    getEvents() {
        return {
            'beforeFormSubmit':  this._beforeFormSubmit.bind(this)
        };
    }

    _beforeFormSubmit(event) {
        if (!this.active) {
            return;
        }

        const formData = event.detail;
        let productId = null;

        formData.forEach((value, key) => {
            if (key.endsWith('[id]')) {
                productId = value;
            }
        });

        if (!productId) {
            console.warn('[codiverse GTM] Product ID could not be fetched. Skipping.');
            return;
        }

        dataLayer.push({
            'event': 'gtmAddToCart',
            'ecommerce': {
                'currencyCode': formData.get('dtgs-gtm-currency-code'),
                'add': {
                    'products': [{
                        'name': formData.get('product-name'),
                        'id': formData.get('dtgs-gtm-product-sku'),
                        'price': formData.get('dtgs-gtm-product-price'),
                        'brand': formData.get('brand-name'),
                        'quantity': formData.get('lineItems[' + productId + '][quantity]')
                    }]
                }
            }
        });
    }
}
