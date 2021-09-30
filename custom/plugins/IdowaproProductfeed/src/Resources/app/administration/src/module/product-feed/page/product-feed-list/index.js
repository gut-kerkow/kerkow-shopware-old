import template from './product-feed-list.html.twig';


const {Criteria} = Shopware.Data;

Shopware.Component.register('product-feed-list', {
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
            fileRepository: null,
            feeds: null,
            isLoading: true
        }
    },

    created: async function () {
        this.repository = this.repositoryFactory.create('productfeed_productfeed');
        this.fileRepository = this.repositoryFactory.create('productfeed_file');
        let criteria = new Criteria();
        this.feeds = await this.repository.search(criteria, Shopware.Context.api);
        this.feeds.forEach(feed => {
            feed.formattedFileType = this.$tc(this.productfeed.formatFileType(feed.filetype));
            let fileCriteria = new Criteria(1, 1);
            fileCriteria.addFilter(Criteria.equals('productfeedId', feed.id))
            fileCriteria.addSorting(Criteria.sort('createdAt', 'DESC'))

            this.fileRepository.search(fileCriteria, Shopware.Context.api).then(response => {
                let latestFile = response[0];
                if (latestFile) {
                    feed.formattedLastTimeGenerated = this.productfeed.formatTimestamp(latestFile.createdAt);
                    feed.latestFile = latestFile;
                } else {
                    feed.formattedLastTimeGenerated = '--';
                }
                this.addIntervalToFeed(feed);
                this.addNextGeneration(feed);
                this.addLastGeneratedLink(feed);
            });
        });
        this.isLoading = false;
    },

    computed: {
        columns() {
            return [
                {
                    property: 'name',
                    dataIndex: 'name',
                    label: this.$t('product-feed.list.name'),
                    allowResize: true,
                    primary: true
                },
                {
                    property: 'lastGeneratedLink',
                    dataIndex: 'name',
                    label: this.$t('product-feed.list.lastGeneratedLink'),
                    allowResize: true,
                },
                {
                    property: 'formattedLastTimeGenerated',
                    dataIndex: 'filename',
                    label: this.$t('product-feed.list.lastTimeGenerated'),
                    allowResize: true,
                },
                {
                    property: 'nextGeneration',
                    dataIndex: 'filename',
                    label: this.$t('product-feed.list.nextGeneration'),
                    allowResize: true,
                },
                {
                    property: 'formattedExecutionType',
                    dataIndex: 'executionMode',
                    label: this.$t('product-feed.list.executionType'),
                    allowResize: true,
                }
            ];
        }
    },

    methods: {
        addIntervalToFeed(feed) {
            if (feed.executionMode === 'execution_type_cron') {
                let timeObj = this.productfeed.formatInteval(feed.interval);
                let timeString = ''; 
                if (timeObj.weeks) {
                    if (timeString) {
                        timeString += ', ';
                    }
                    timeString += this.$tc('product-feed.detail.weeks', timeObj.weeks);
                }
                if (timeObj.days) {
                    if (timeString) {
                        timeString += ', ';
                    }
                    timeString += this.$tc('product-feed.detail.days', timeObj.days);
                }
                if (timeObj.hours) {
                    if (timeString) {
                        timeString += ', ';
                    }
                    timeString += this.$tc('product-feed.detail.hours', timeObj.hours);
                }
                if (timeObj.minutes) {
                    if (timeString) {
                        timeString += ', ';
                    }
                    timeString += this.$tc('product-feed.detail.minutes', timeObj.minutes);
                }
                timeString = '(' + timeString + ')';

                feed.formattedExecutionType = this.$tc(this.productfeed.formatExecutionType(feed.executionMode)) + ' ' + timeString;
            } else {
                feed.formattedExecutionType = this.$tc(this.productfeed.formatExecutionType(feed.executionMode));
            }
        },

        addNextGeneration(feed) {
            if (feed.executionMode === 'execution_type_manual') {
                feed.nextGeneration = '--';
                return;
            }

            if (feed.latestFile != null) {
                feed.nextGeneration = new Date(new Date(feed.latestFile.createdAt).getTime() + feed.interval).toLocaleString();
            } else {
                feed.nextGeneration = new Date(new Date(feed.createdAt).getTime() + feed.interval).toLocaleString();
            }
        },

        addLastGeneratedLink(feed) {
            feed.linkToLastGenerated = feed.filename + "." + this.productfeed.formatFileTypeRaw(feed.filetype);
        }
    }
});
