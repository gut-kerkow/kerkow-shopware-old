import template from './productfeed-condition-category-name.html.twig';

const { Component } = Shopware;
const { mapPropertyErrors } = Component.getComponentHelper();

Component.extend('productfeed-condition-category-name', 'sw-condition-base', {
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

        ...mapPropertyErrors('condition', ['value.operator', 'value.categoryName']),

        currentError() {
            return this.conditionCategoryOperatorError || this.conditionValueCategoryNameError;
        }
    }
});
