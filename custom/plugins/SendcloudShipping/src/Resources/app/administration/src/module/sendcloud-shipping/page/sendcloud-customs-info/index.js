import template from './sendcloud-customs-info.html.twig';

const {Component, Mixin} = Shopware;

Component.register('sendcloud-customs-info', {
    template,

    inject: [
        'sendcloudService'
    ],

    mixins: [
        Mixin.getByName('notification'),
    ],

    props: {
        sendcloudShipmentTypes: {
            type: Array,
            required: true,
            default: []
        },

        sendcloudCountries: {
            type: Array,
            required: true,
            default: []
        },

        sendcloudCustomFields: {
            type: Array,
            required: true,
            default: []
        },

        sendcloudShipmentType: {
            type: String,
            required: true,
            default: ''
        },
    },

    data() {
        return {
            isLoading: true,
            hsCode: '',
            originCountry: '',
            mappedOriginCountry: '',
            mappedHsCode: ''
        }
    },

    created: function () {
        this.getCustomsConfig();
    },

    methods: {
        getCustomsConfig() {
            return this.sendcloudService.getCustomsInfo()
                .then((configData) => {
                        if (configData.hasOwnProperty('shipmentType') && configData.hasOwnProperty('hsCode') &&
                            configData.hasOwnProperty('originCountry') && configData.hasOwnProperty('mappedHsCode') &&
                            configData.hasOwnProperty('mappedOriginCountry')) {

                            this.sendcloudShipmentType = configData.shipmentType;
                            this.originCountry = configData.originCountry;
                            this.hsCode = configData.hsCode;
                            this.mappedHsCode = configData.mappedHsCode;
                            this.mappedOriginCountry = configData.mappedOriginCountry;
                        }
                    this.isLoading = false;
                    }
                ).catch(error => {
                    this.isLoading = false;
                });
        },

        saveConfiguration() {
            this.isLoading = true;

            let customInfoObject = {};
            customInfoObject['shipmentType'] = document.querySelector("select[name=shipmentType]").value;
            customInfoObject['originCountry'] = document.querySelector("select[name=originCountry]").value;
            customInfoObject['hsCode'] = document.querySelector("input[name=hsCode]").value;
            customInfoObject['mappedHsCode'] = document.querySelector("select[name=mappedHsCode]").value;
            customInfoObject['mappedOriginCountry'] = document.querySelector("select[name=mappedOriginCountry]").value;

            return this.sendcloudService.saveCustomsInfo(customInfoObject)
                .then((response) => {
                        this.getCustomsConfig();
                        this.createNotificationSuccess({
                            title: this.$tc('global.default.success'),
                            message: this.$tc('send-cloud.customsInfo.successfulSaveMessage')
                        });
                    }
                ).catch(error => {
                    this.isLoading = false;
                    this.createNotificationError({
                        message: error
                    });
                });
        }
    }
});