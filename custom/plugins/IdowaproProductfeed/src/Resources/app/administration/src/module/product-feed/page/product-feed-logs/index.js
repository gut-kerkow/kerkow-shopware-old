import template from './product-feed-logs.html.twig';

const {Criteria} = Shopware.Data;

Shopware.Component.register('product-feed-logs', {
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
           logs: null,
           isLoading: true
        }
    },

    created: async function () {
        this.repository = this.repositoryFactory.create('productfeed_file');
        this.logs = await this.repository.search(new Criteria(), Shopware.Context.api);

        this.logs.forEach(log => {
            log.createdAt = this.productfeed.formatTimestamp(log.createdAt);
            log.message = this.$tc(log.message);
        });

        this.isLoading = false;
    },

    computed: {
        columns() {
            return [
                {
                    property: 'name',
                    dataIndex: 'name',
                    label: this.$t('product-feed.logs.name'),
                    allowResize: true
                },
                {
                    property: 'createdAt',
                    dataIndex: 'createdAt',
                    label: this.$t('product-feed.logs.generationTimestamp'),
                    allowResize: true
                },
                {
                    property: 'message',
                    dataIndex: 'message',
                    label: this.$t('product-feed.logs.message'),
                    allowResize: true
                }

            ]
        }
    },

    methods: {
        formatFileType(fileType) {
            switch(fileType) {
                case 'file_type_xml':
                    return 'xml';
                case 'file_type_csv':
                    return 'csv';
                case 'file_type_txt':
                    return 'txt';
            }
        }
    },
});
