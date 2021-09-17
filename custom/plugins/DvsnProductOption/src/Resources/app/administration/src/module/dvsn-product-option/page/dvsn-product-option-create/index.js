/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

import template from './dvsn-product-option-create.html.twig';

const { Component } = Shopware;

Component.extend('dvsn-product-option-create', 'dvsn-product-option-detail', {
    template,

    methods: {
        getProductOption() {
            // set default language
            Shopware.State.commit('context/setApiLanguageId', Shopware.Context.api.systemLanguageId)

            // create product option
            this.productOption = this.repository.create(Shopware.Context.api);

            // set default values
            this.productOption.active = true;
            this.productOption.hidden = false;
            this.productOption.mandatory = false;
            this.productOption.icon = 'arrow-circle-right';
            this.productOption.surcharge = 0;
            this.productOption.surchargeType = 'percental';
            this.productOption.surchargeCalculation = 'once';
        },

        onClickSave() {
            // force valid boolean values
            this.productOption.active = Boolean(this.productOption.active);
            this.productOption.hidden = Boolean(this.productOption.hidden);
            this.productOption.mandatory = Boolean(this.productOption.mandatory);

            // check valid tax
            if (this.productOption.surchargeType === 'absolute' && (this.productOption.taxId === null || typeof this.productOption.taxId === "undefined")) {
                return this.createNotificationError({
                    title: this.$t('dvsn-product-option.detail.error-message-tax-required-title'),
                    message: this.$t('dvsn-product-option.detail.error-message-tax-required-message')
                });
            }

            // set loading
            this.isLoading = true;

            // save the product option
            this.repository
                .save(this.productOption, Shopware.Context.api)
                .then(() => {
                    this.isLoading = false;
                    this.$router.push({ name: 'dvsn.product.option.detail', params: { id: this.productOption.id } });
                    this.createNotificationSuccess({
                        title: this.$t('dvsn-product-option.detail.success-title'),
                        message: this.$t('dvsn-product-option.detail.success-message')
                    });
                }).catch((exception) => {
                    this.isLoading = false;
                    this.createNotificationError({
                        title: this.$t('dvsn-product-option.detail.error-message'),
                        message: exception
                    });
                });
        }
    }
});
