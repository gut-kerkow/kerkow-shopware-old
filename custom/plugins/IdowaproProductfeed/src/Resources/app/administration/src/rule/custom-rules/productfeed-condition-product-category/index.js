import template from './productfeed-condition-product-category.html.twig';

const { Component, Context } = Shopware;
const { mapPropertyErrors } = Component.getComponentHelper();
const { EntityCollection, Criteria } = Shopware.Data;

Component.extend('productfeed-condition-product-category', 'sw-condition-base', {
    template,
    inheritAttrs: false,

    inject: ['repositoryFactory'],

    created() {
        this.createdComponent();
    },

    data() {
        return {
            values: null
        };
    },

    computed: {
        categoryRepository() {
            return this.repositoryFactory.create('category');
        },

        operators() {
            return this.conditionDataProviderService.getOperatorSet('multiStore');
        },

        valueIds: {
            get() {
                this.ensureValueExist();
                return this.condition.value.values || [];
            },
            set(values) {
                this.ensureValueExist();
                this.condition.value = { ...this.condition.value, values };
            }
        },

        ...mapPropertyErrors('condition', ['value.operator', 'value.valueIds']),

        currentError() {
            return this.conditionValueOperatorError || this.conditionValueValueIdsError;
        }
    },

    methods: {
        createdComponent() {
            this.values = new EntityCollection(
                this.categoryRepository.route,
                this.categoryRepository.entityName,
                Context.api
            );

            if (this.valueIds.length <= 0) {
                return Promise.resolve();
            }

            const criteria = new Criteria();
            criteria.setIds(this.valueIds);

            return this.categoryRepository.search(criteria, Context.api).then((values) => {
                this.values = values;
            });
        },

        setValueIds(values) {
            this.valueIds = values.getIds();
            this.values = values;
        }
    }
});
