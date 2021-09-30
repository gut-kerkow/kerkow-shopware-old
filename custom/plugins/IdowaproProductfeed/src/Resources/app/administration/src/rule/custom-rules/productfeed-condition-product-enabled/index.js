import template from './productfeed-condition-product-enabled.html.twig';

const { Component } = Shopware;
const { mapPropertyErrors } = Component.getComponentHelper();

Component.extend('productfeed-condition-product-enabled', 'sw-condition-base', {
    template,

    computed: {
        operators() {
            return this.conditionDataProviderService.getOperatorSet('string');
        },

        value: {
            get() {
                this.value = this.$tc('product-feed.create.condition.active');
                return this.$tc('product-feed.create.condition.active'); 
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
