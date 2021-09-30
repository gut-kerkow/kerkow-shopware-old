import template from './productfeed-condition-product-price.html.twig';
import './productfeed-condition-product-price.scss';

const { Component } = Shopware;
const { mapPropertyErrors } = Component.getComponentHelper();

Component.extend('productfeed-condition-product-price', 'sw-condition-base', {
    template,

    data() {
        return {
            showFilterModal: false
        };
    },

    computed: {
        operators() {
            return this.conditionDataProviderService.getOperatorSet('number');
        },

        value: {
            get() {
                this.ensureValueExist();
                return this.condition.value.value;
            },
            set(value) {
                this.ensureValueExist();
                this.condition.value = { ...this.condition.value, value };
            }
        },

        ...mapPropertyErrors('condition', ['value.operator', 'value.price']),

        currentError() {
            return this.conditionValueOperatorError || this.conditionValueAmountError;
        }
    }
});
