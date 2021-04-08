/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

import template from './dvsn-product-option-detail.html.twig';
import './dvsn-product-option-detail.scss';

const { Component, Mixin, StateDeprecated } = Shopware;
const { Criteria } = Shopware.Data;

Component.register('dvsn-product-option-detail', {
    template,

    inject: [
        'repositoryFactory'
    ],

    mixins: [
        Mixin.getByName('placeholder'),
        Mixin.getByName('notification')
    ],

    metaInfo() {
        return {
            title: this.$createTitle()
        };
    },

    data() {
        return {
            productOption: null,
            isLoading: false,
            isSaveSuccessful: false,
            type: [
                { value: 'percental', label: this.$tc('dvsn-product-option.general.type.percental') },
                { value: 'absolute', label: this.$tc('dvsn-product-option.general.type.absolute') }
            ],
            calculation: [
                { value: 'once', label: this.$tc('dvsn-product-option.general.calculation.once') },
                { value: 'quantity', label: this.$tc('dvsn-product-option.general.calculation.quantity') }
            ],
            icon: [
                { value: 'bag', label: this.$tc('dvsn-product-option.general.icon.bag') },
                { value: 'bag-product', label: this.$tc('dvsn-product-option.general.icon.bag-product') },
                { value: 'warning', label: this.$tc('dvsn-product-option.general.icon.warning') },
                { value: 'alert', label: this.$tc('dvsn-product-option.general.icon.alert') },
                { value: 'trophy', label: this.$tc('dvsn-product-option.general.icon.trophy') },
                { value: 'star', label: this.$tc('dvsn-product-option.general.icon.star') },
                { value: 'plus', label: this.$tc('dvsn-product-option.general.icon.plus') },
                { value: 'plus-block', label: this.$tc('dvsn-product-option.general.icon.plus-block') },
                { value: 'plus-circle', label: this.$tc('dvsn-product-option.general.icon.plus-circle') },
                { value: 'plus-wide', label: this.$tc('dvsn-product-option.general.icon.plus-wide') },
                { value: 'checkmark', label: this.$tc('dvsn-product-option.general.icon.checkmark') },
                { value: 'checkmark-block', label: this.$tc('dvsn-product-option.general.icon.checkmark-block') },
                { value: 'checkmark-circle', label: this.$tc('dvsn-product-option.general.icon.checkmark-circle') },
                { value: 'checkmark-wide', label: this.$tc('dvsn-product-option.general.icon.checkmark-wide') },
                { value: 'arrow-circle-down', label: this.$tc('dvsn-product-option.general.icon.arrow-circle-down') },
                { value: 'arrow-circle-left', label: this.$tc('dvsn-product-option.general.icon.arrow-circle-left') },
                { value: 'arrow-circle-right', label: this.$tc('dvsn-product-option.general.icon.arrow-circle-right') },
                { value: 'arrow-circle-up', label: this.$tc('dvsn-product-option.general.icon.arrow-circle-up') }
            ],
        };
    },

    created() {
        this.getProductOption();
    },

    computed: {
        repository() {
            return this.repositoryFactory.create('dvsn_product_option');
        },

        criteria() {
            const criteria = new Criteria();
            criteria
                .addAssociation('tax')
                .addAssociation('media')
                .addSorting(Criteria.sort('createdAt', 'DESC'));
            return criteria;
        }
    },

    methods: {
        getProductOption() {
            this.isLoading = true;
            this.repository
                .get(this.$route.params.id, Shopware.Context.api, this.criteria)
                .then((entity) => {
                    this.productOption = entity;
                    this.isLoading = false;
                });
        },

        abortOnLanguageChange() {
            return this.repository.hasChanges(this.productOption);
        },

        saveOnLanguageChange() {
            return this.onClickSave();
        },

        onChangeLanguage() {
            this.getProductOption();
        },

        onClickSave() {
            if (this.productOption.surchargeType === 'absolute' && this.productOption.taxId === null) {
                return this.createNotificationError({
                    title: this.$t('dvsn-product-option.detail.error-message-tax-required-title'),
                    message: this.$t('dvsn-product-option.detail.error-message-tax-required-message')
                });
            }

            this.isLoading = true;
            this.isSaveSuccessful = false;
            this.repository
                .save(this.productOption, Shopware.Context.api, this.criteria)
                .then(() => {
                    this.getProductOption();
                    this.isLoading = false;
                    this.isSaveSuccessful = true;

                }).catch((exception) => {
                    this.isLoading = false;
                    this.createNotificationError({
                        title: this.$t('dvsn-product-option.detail.error-message'),
                        message: exception
                    });
                });
        },

        saveFinish() {
        }
    }
});
