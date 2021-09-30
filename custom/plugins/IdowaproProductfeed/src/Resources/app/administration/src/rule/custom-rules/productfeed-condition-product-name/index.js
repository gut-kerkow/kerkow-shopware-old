import template from './productfeed-condition-product-name.html.twig';

const { Component } = Shopware;
const { mapPropertyErrors } = Component.getComponentHelper();

Component.extend('productfeed-condition-product-name', 'sw-condition-base', {
    template,

    computed: {
        operators() {
            return this.conditionDataProviderService.getOperatorSet('string');
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

        ...mapPropertyErrors('condition', ['value.operator', 'value.productName']),

        currentError() {
            return this.conditionValueOperatorError || this.conditionValueLastNameError;
        }
    }
});
