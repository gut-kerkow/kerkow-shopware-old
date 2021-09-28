import DomAccessHelper from 'src/helper/dom-access.helper';

/**
 * @since 1.0.0
 */
export default class ProductBuilder {

    /**
     * @since 1.0.0
     */
    static options = {
        productNumberAttr: 'data-shop-studio-google-tag-manager-cloud-product-number',
        productPriceAttr: 'data-shop-studio-google-tag-manager-cloud-product-price'
    };

    /**
     * @since 1.0.0
     *
     * @param {string} productId
     * @param {object} cart
     * @param {object} context
     *
     * @return {object|null}
     */
    static productByCart(productId, cart, context) {
        const productList = ProductBuilder.productListByCart(cart, context);

        return productList.find(product => product.id === productId) || null;
    }

    /**
     * @since 1.0.0
     *
     * @param {object} cart
     * @param {object} context
     *
     * @return {object[]}
     */
    static productListByCart(cart, context) {
        const productList = [];

        if (cart && cart.hasOwnProperty('lineItems')) {
            for (const lineItem of cart.lineItems) {
                if (lineItem.type === 'product') {
                    productList.push({
                        id: lineItem.id,
                        number: lineItem.payload.productNumber,
                        name: lineItem.label,
                        price: parseFloat(lineItem.price.unitPrice),
                        currency: context.currency.isoCode,
                        quantity: lineItem.quantity,
                        variant: this._buildVariantByCartLineItem(lineItem)
                    });
                }
            }
        }

        return productList;
    }

    /**
     * @since 1.0.0
     *
     * @param {object} order
     * @param {object} context
     *
     * @return {object[]}
     */
    static productListByOrder(order, context) {
        const productList = [];

        if (order && order.hasOwnProperty('lineItems')) {
            for (const lineItem of order.lineItems) {
                if (lineItem.type === 'product') {
                    productList.push({
                        id: lineItem.id,
                        number: lineItem.payload.productNumber,
                        name: lineItem.label,
                        price: parseFloat(lineItem.unitPrice),
                        currency: context.currency.isoCode,
                        quantity: lineItem.quantity,
                        variant: this._buildVariantByCartLineItem(lineItem)
                    });
                }
            }
        }

        return productList;
    }

    /**
     * @since 1.0.0
     *
     * @param {object} productDetail
     * @param {object} context
     *
     * @return {object|null}
     */
    static productByProductDetail(productDetail, context) {
        return {
            id: productDetail.product.id,
            number: productDetail.product.productNumber,
            name: productDetail.product.translated.name,
            price: ProductBuilder._buildPriceByProductDetail(productDetail),
            currency: context.currency.isoCode,
            quantity: 1,
            variant: ProductBuilder._buildVariantByProductDetail(productDetail)
        };
    }

    /**
     * @since 1.0.0
     *
     * @return {object[]}
     */
    static productListByProductListingDom(context) {
        const productBoxes = DomAccessHelper.querySelectorAll(document, '.product-box', false);
        if (!productBoxes) {
            return [];
        }

        const lineItems = [];

        productBoxes.forEach(item => {
            const id = DomAccessHelper.querySelector(item, 'input[name=product-id]').value;
            const number = DomAccessHelper.getAttribute(DomAccessHelper.querySelector(item, `template[${this.options.productNumberAttr}]`), this.options.productNumberAttr);
            const name = DomAccessHelper.querySelector(item, 'input[name=product-name]').value;
            const price = DomAccessHelper.getAttribute(DomAccessHelper.querySelector(item, `template[${this.options.productPriceAttr}]`), this.options.productPriceAttr) || null;

            if (!id || !number || !name) {
                return;
            }

            lineItems.push({
                id,
                number,
                name,
                price: price ? parseFloat(price) : null,
                currency: context.currency.isoCode,
                quantity: 1
            });
        });

        return lineItems;
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @param {object} lineItem
     *
     * @return {string|null}
     */
    static _buildVariantByCartLineItem(lineItem) {
        if (lineItem.payload.options.length === 0) {
            return null;
        }

        let variant = lineItem.payload.options.map(option => option.option);

        return variant.join('/');
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @param {object} productDetail
     *
     * @return {float|null}
     */
    static _buildPriceByProductDetail(productDetail) {
        let price = ((productDetail.product.calculatedPrices || [])[0] || {}).unitPrice || null;
        if (!price) {
            price = productDetail.product.calculatedPrice.unitPrice;
        }

        if (price) {
            price = parseFloat(price);
        }

        return price;
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @param {object} productDetail
     *
     * @return {string|null}
     */
    static _buildVariantByProductDetail(productDetail) {
        const activeOptions = productDetail.product.optionIds || [];
        let variant = [];

        for (const propertyGroup of productDetail.configurator) {
            for (const option of propertyGroup.options) {
                if (activeOptions.includes(option.id)) {
                    variant.push(option.translated.name);
                }
            }
        }

        return variant.length > 0 ? variant.join('/') : null;
    }
}
