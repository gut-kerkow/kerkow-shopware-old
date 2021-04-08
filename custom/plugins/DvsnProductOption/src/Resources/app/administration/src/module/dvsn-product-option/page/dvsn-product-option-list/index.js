/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

import template from './dvsn-product-option-list.html.twig';
import './dvsn-product-option-list.scss';

const { Component, Mixin } = Shopware;
const { Criteria } = Shopware.Data;

Component.register('dvsn-product-option-list', {
    template,

    inject: [
        'repositoryFactory'
    ],

    mixins: [
        Mixin.getByName('notification'),
        Mixin.getByName('listing')
    ],

    data() {
        return {
            productOptions: null,
            isLoading: true,
        };
    },

    metaInfo() {
        return {
            title: this.$createTitle()
        };
    },

    computed: {
        columns() {
            return this.getColumns();
        },

        repository() {
            return this.getRepository();
        },
    },

    methods: {
        getColumns() {
            return [{
                property: 'name',
                dataIndex: 'name',
                label: this.$t('dvsn-product-option.list.column-name'),
                allowResize: true
            }, {
                property: 'number',
                dataIndex: 'number',
                label: this.$t('dvsn-product-option.list.column-number'),
                allowResize: true
            }, {
                property: 'active',
                dataIndex: 'active',
                label: this.$t('dvsn-product-option.list.column-active'),
                allowResize: true
            }, {
                property: 'createdAt',
                dataIndex: 'createdAt',
                label: this.$t('dvsn-product-option.list.column-created-at'),
                allowResize: true
            }];
        },

        getRepository() {
            return this.repositoryFactory.create('dvsn_product_option');
        },

        getList() {
            this.isLoading = true;

            const criteria = new Criteria();
            criteria
                .addSorting(Criteria.sort('createdAt', 'DESC'));
            criteria.setTerm(this.term);

            this.repository
                .search(criteria, Shopware.Context.api)
                .then((result) => {
                    this.productOptions = result;
                    this.isLoading = false;
                });
        },
    },

    created() {
    }
});
