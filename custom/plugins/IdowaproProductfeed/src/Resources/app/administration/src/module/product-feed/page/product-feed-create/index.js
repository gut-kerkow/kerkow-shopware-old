import template from '../product-feed-detail/product-feed-detail.html.twig';

Shopware.Component.extend('product-feed-create', 'product-feed-detail', {

    template,


    methods: {
        async getFeed() {
            this.feed = this.repository.create(Shopware.Context.api);
            // some default values for fields
            this.feed.enabled = true;
            this.feed.deliveryEnabled = false;
            this.feed.notificationsEnabled = false;
            this.feed.notification = {};
            this.feed.fileTransferProtocol = this.productfeed.getFileTransferProtocols()[0];
            this.feed.filetype = this.productfeed.getFileTypes()[0];
            this.feed.executionMode = this.productfeed.getExecutionModes()[0];
            this.interval.time = 1;
            this.interval.multiplicator = (1000 * 60 * 60).toString();
            this.feed.ruleFilterEnabled = false;
            this.feed.productStreamFilterEnabled = false;

            this.salesChannel = await this.salesChannel;
            this.feed.salesChannelId = this.salesChannel[0].id;
            this.createRule();
        },
    },
});
