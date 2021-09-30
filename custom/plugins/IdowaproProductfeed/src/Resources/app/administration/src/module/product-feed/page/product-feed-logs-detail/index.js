import template from './product-feed-logs-detail.html.twig';

const {Criteria} = Shopware.Data;
const { Component, Mixin, Context } = Shopware;


Shopware.Component.register('product-feed-logsDetail', {
    template,

    inject: [
        'repositoryFactory',
        'productfeed'
    ],

    metaInfo() {
        return {
            title: this.$createTitle()
        };
    },


    data() {
        return {
            repository: null,
            isLoading: true,
            log: null
        }
    },

    created: async function () {
        await this.createdComponent();
    },

    computed: {
        logfile() {
            if (this.isLoading) {
                return;
            }
            return this.log.fileName;
        },
        createdAtTimestampFormatted() {
            return new Date(this.log.createdAt).toLocaleString();
        },

        creationMode() {
            return this.$tc(this.productfeed.formatExecutionType(this.log.executionType));
        },

        feedstatus() {
            return this.$tc(this.productfeed.formatFeedState(this.log.state));
        },

        deliveryEnabled() {
            return this.log.deliveryEnabled ? 'enabled' : 'disabled';
        },

        deliveryProtocol() {
            return this.productfeed.formatFileTransferProtocol(this.log.deliveryProtocol);
        }
    },

    watch: {
    },

    methods: {
        async createdComponent() {
            this.repository = this.repositoryFactory.create('productfeed_file');
            await this.getLog();
            this.isLoading = false;
        },

        async getLog() {
            this.log = await this.repository.get(this.$route.params.id, Shopware.Context.api);
        }
    },
});
