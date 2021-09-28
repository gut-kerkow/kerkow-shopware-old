import ShopwareStoreApiClient from 'src/service/store-api-client.service';

/**
 * @since 1.0.0
 */
export default class StoreApiClient {

    /**
     * @since 1.0.0
     */
    constructor() {
        this.storeApiClient = new ShopwareStoreApiClient();
    }

    /**
     * @since 1.0.0
     *
     * @return {Promise<object|null>}
     */
    async loadProductDetail(productId) {
        return await this._post(`store-api/product/${productId}`);
    }

    /**
     * @since 1.0.0
     *
     * @return {Promise<object|null>}
     */
    async loadCart() {
        return await this._get('store-api/checkout/cart');
    }

    /**
     * @since 1.0.0
     *
     * @param {string} orderId
     *
     * @return {Promise<object|null>}
     */
    async loadOrder(orderId) {
        const response = await this._get('store-api/order', {
            'filter[0][field]': 'id',
            'filter[0][type]': 'equals',
            'filter[0][value]': orderId,
            'associations[lineItems][]': ''
        });

        return response.orders.elements.find(order => order.id === orderId) || null;
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @param {string} path
     * @param {object} queryParams
     *
     * @return {Promise<object>}
     */
    async _get(path, queryParams = {}) {
        return new Promise(resolve => {
            this.storeApiClient.get(this._buildPathWithQueryParams(path, queryParams), response => {
                resolve(JSON.parse(response));
            });
        });
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @param {string} path
     * @param {object} queryParams
     *
     * @return {Promise<object>}
     */
    async _post(path, queryParams = {}) {
        return new Promise(resolve => {
            this.storeApiClient.post(this._buildPathWithQueryParams(path, queryParams), JSON.stringify({}), response => {
                resolve(JSON.parse(response));
            });
        });
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @param {string} path
     * @param {object} queryParams
     *
     * @return {string}
     */
    _buildPathWithQueryParams(path, queryParams = {}) {
        if (Object.keys(queryParams).length === 0) {
            return path;
        }

        const urlSearchParams = new URLSearchParams(path);
        for (const [key, value] of Object.entries(queryParams)) {
            urlSearchParams.set(key, value.toString());
        }

        return `${path}?${urlSearchParams.toString()}`;
    }
}
