import template from './product-feed-detail.html.twig';
import './product-feed-detail.scss';

const { Criteria } = Shopware.Data;
const { Context, Mixin, Component } = Shopware;
const { mapPropertyErrors } = Component.getComponentHelper();

Shopware.Component.register('product-feed-detail', {
    template,

    inject: [
        'repositoryFactory',
        'feedConditionDataProviderService',
        'productfeed',
        'template'
    ],

    mixins: [Mixin.getByName('notification')],

    metaInfo() {
        return {
            title: this.$createTitle()
        };
    },


    data() {
        return {
            repository: null,
            fileRepository: null,
            productfeedProductStreamRepository: null,
            productStreamRepository: null,
            isLoading: false,
            feed: null,
            interval: {},
            email: {},
            selectedMessageEvents: null,
            conditions: null,
            processSuccess: false,
            rule: null,
            deletedIds: [],
            generateSuccess: false,
            firstTry: true,
            loaded: false,
            salesChannel: null,
            manufacturers: null,
            showPopover: false,
            showDiscardChangesModal: false,
            tempTemplateData: null,
            latestFile: null,
            dynamicProductGroups: []
        }
    },

    created: function () {
        this.createdComponent();
    },

    computed: {

        ...mapPropertyErrors('feed', ['name', 'filename']),

        templateError() {
            if (this.checkErrorFunction(this.feed.template)) return null;
            return {
                detail: "product-feed.general.textRequired",
                code: "fieldMustNotBeEmpty"
            }
        },

        hostUrlError() {
            if (this.feed.deliveryEnabled === false || this.checkErrorFunction(this.feed.hostUrl)) return null;
            return {
                detail: "product-feed.general.textRequired",
                code: "fieldMustNotBeEmpty"
            }
        },

        hostUsernameError() {
            if (this.feed.deliveryEnabled === false || this.checkErrorFunction(this.feed.hostUsername)) return null;
            return {
                detail: "product-feed.general.textRequired",
                code: "fieldMustNotBeEmpty"
            }
        },

        hostPasswordError() {
            if (this.feed.deliveryEnabled === false || this.checkErrorFunction(this.feed.hostPassword)) return null;
            return {
                detail: "product-feed.general.textRequired",
                code: "fieldMustNotBeEmpty"
            }
        },

        hostDirectoryError() {
            if (this.feed.deliveryEnabled === false || this.checkErrorFunction(this.feed.hostDirectoryPath)) return null;
            return {
                detail: "product-feed.general.textRequired",
                code: "fieldMustNotBeEmpty"
            }
        },

        emailAddressesError() {
            if (!this.feed.notificationsEnabled || this.checkErrorFunction(this.feed.notificationAddresses)) return null;
            return {
                detail: "product-feed.general.textRequired",
                code: "fieldMustNotBeEmpty"
            }
        },

        emailEventsError() {
            if (!this.feed.notificationsEnabled || this.checkErrorFunction(this.feed.notificationEvents))
                return null;
            return {
                detail: "product-feed.general.textRequired",
                code: "fieldMustNotBeEmpty"
            }
        },

        executionTimeError() {
            if (!this.feed.executionMode.includes('cron') || this.checkErrorFunction(this.interval.time)) return null;
            return {
                detail: "product-feed.general.textRequired",
                code: "fieldMustNotBeEmpty"
            }
        },

        manualExecutionMode() {
            return this.productfeed.getExecutionModes().find(e => e.includes('manual'));
        },

        ruleRepository() {
            return this.repositoryFactory.create('rule');
        },

        availableModuleTypes() {
            return this.ruleConditionDataProviderService.getModuleTypes(moduleType => moduleType);
        },

        moduleTypes: {
            get() {
                if (!this.rule || !this.rule.moduleTypes) {
                    return [];
                }
                return this.rule.moduleTypes.types;
            },

            set(value) {
                if (value === null || value.length === 0) {
                    this.rule.moduleTypes = null;
                    return;
                }
                this.rule.moduleTypes = { types: value };
            }
        },

        timeIntervals() {
            return [
                {
                    label: this.$tc("product-feed.general.week_key"),
                    value: 1000 * 60 * 60 * 24 * 7
                },
                {
                    label: this.$tc("product-feed.general.day_key"),
                    value: 1000 * 60 * 60 * 24
                },
                {
                    label: this.$tc("product-feed.general.hour_key"),
                    value: 1000 * 60 * 60
                },
                {
                    label: this.$tc("product-feed.general.minute_key"),
                    value: 1000 * 60
                },
            ];

        },

        detailMode: function () {
            return Boolean(this.$route.params.id);
        },

        formattedNotificationEvents() {
            return this.productfeed.getNotificationEvents().map(event => {
                let obj = {};
                obj.label = this.$tc(this.productfeed.formatNotificationEvents(event));
                obj.value = event;
                return obj;
            });
        },

        formattedExecutionModes() {
            return this.productfeed.getExecutionModes().map(mode => {
                let obj = {};
                obj.label = this.$tc(this.productfeed.formatExecutionMode(mode));
                obj.value = mode;
                return obj;
            });
        },

        formattedFileTypes() {
            return this.productfeed.getFileTypes().map(type => {
                let obj = {};
                obj.label = this.$tc(this.productfeed.formatFileType(type));
                obj.value = type;
                return obj;
            });
        },

        formattedFileTransferProtocols() {
            return this.productfeed.getFileTransferProtocols().map(protocol => {
                let obj = {};
                obj.label = this.$tc(this.productfeed.formatFileTransferProtocol(protocol));
                obj.value = protocol;
                return obj;
            });
        },

        conditionRepository() {
            if (!this.rule) {
                return null;
            }
            return this.repositoryFactory.create(
                this.rule.conditions.entity,
                this.rule.conditions.source
            );
        },

        nameCriteria() {
            let criteria = new Criteria();
            criteria.addSorting(Criteria.sort('name', 'ASC'));
            return criteria;
        }
    },

    methods: {
        async createdComponent() {
            this.repository = this.repositoryFactory.create('productfeed_productfeed');
            this.notificationRepository = this.repositoryFactory.create('productfeed_notification');
            this.fileRepository = this.repositoryFactory.create('productfeed_file');
            let manufacturerRepository = this.repositoryFactory.create('product_manufacturer');
            this.productfeedProductStreamRepository = this.repositoryFactory.create('productfeed_product_stream');
            this.productStreamRepository = this.repositoryFactory.create('product_stream');

            // get sales channels (only promise)
            let salesChannelRepository = this.repositoryFactory.create('sales_channel');
            this.salesChannel = salesChannelRepository.search(new Criteria(), Shopware.Context.api);
            this.manufacturers = await manufacturerRepository.search(new Criteria(), Shopware.Context.api);
            
            // show modal if no feed is given
            if (!this.$route.params.id) {
                this.showTemplateModal();
            }

            // wait for enums to be safe loaded
            await this.productfeed.wait();

            // wait for feed and saleschannel promise
            await this.getFeed();

            await this.loadDynamicProductGroups();

            // resolve promise
            this.salesChannel = await this.salesChannel;

            // set default value
            this.feed.salesChannel = this.salesChannel[0].id;

            this.loaded = true;
            this.isLoading = false;
        },

        async getFeed() {
            if (!this.$route.params.id) {
                return;
            }

            let criteria = new Criteria();
            criteria.addFilter(Criteria.equals('id', this.$route.params.id));
            criteria.addAssociation('productfeedProductStreams.productStream');
            this.feed = (await this.repository.search(criteria, Shopware.Context.api)).first();
            criteria = new Criteria();

            criteria.addFilter(Criteria.equals('productfeedId', this.feed.id));
            let search = this.notificationRepository.search(criteria, Shopware.Context.api);

            // sets interval of feed
            this.fillInterval();
            this.feed.notification = {};

            this.updateLatestFile();

            // set events
            let events = this.productfeed.getNotificationEvents();
            this.feed.notificationEvents = [];
            if (this.feed.messageWhenCreateSuccess) {
                this.feed.notificationEvents.push(
                    events.find(e => e.includes('create') && e.includes('success'))
                );
            }
            if (this.feed.messageWhenCreateError) {
                this.feed.notificationEvents.push(
                    events.find(e => e.includes('create') && e.includes('error'))
                );
            }
            if (this.feed.messageWhenDeliverySuccess) {
                this.feed.notificationEvents.push(
                    events.find(e => e.includes('delivery') && e.includes('success'))
                );
            }
            if (this.feed.messageWhenDeliveryError) {
                this.feed.notificationEvents.push(
                    events.find(e => e.includes('delivery') && e.includes('error'))
                );
            }

            // get notifications for feed
            this.feed.notificationAddresses = '';
            // resolve notification query
            let response = await search;
            response.forEach((n, i) => {
                if (i !== 0) {
                    this.feed.notificationAddresses += ',';
                }
                this.feed.notificationAddresses += n.emailAddress;
            });

            // set rule
            if (!this.feed.ruleId) {
                this.createRule();
            } else {
                this.ruleId = this.feed.ruleId;
                this.loadEntityData(this.feed.ruleId);
            }
        },

        showTemplateModal() {
            this.showPopover = true;
        },

        closeModal() {
            this.showPopover = false;
        },

        async selectTemplate(name) {
            let data = await this.template.fetchDefaults(name);

            if (this.feed.name || this.feed.filename || this.feed.template) {
                this.openDiscardChangesModal(data);
                return;
            }

            this.feed.name = data.name;
            this.feed.filename = data.filename;
            this.feed.template = data.template;
            this.feed.countryId = data.countryId;
            this.feed.currencyId = data.currencyId;
            this.feed.languageId = data.languageId;
            this.closeModal();
        },

        openDiscardChangesModal(tempData) {
            this.closeModal();

            // app crashes with 2 open modals at the same time
            // so wait for the tick after first modal was closed
            this.$nextTick(() => {
                this.tempTemplateData = tempData;
                this.showDiscardChangesModal = true;
            });
        },

        closeDiscardChangesModal() {
            this.closeModal();
            this.showDiscardChangesModal = false;
            this.showTemplateData = null;
        },

        deleteChanges() {
            let data = this.tempTemplateData;
            this.feed.name = data.name;
            this.feed.filename = data.filename;
            this.feed.template = data.template;
            this.showDiscardChangesModal = false;
            this.showTemplateData = null;
        },

        createRule() {
            this.rule = this.ruleRepository.create(Context.api);
            this.conditions = this.rule.conditions;
        },

        loadEntityData(ruleId) {
            this.isLoading = true;
            this.conditions = null;

            return this.ruleRepository.get(ruleId, Context.api).then((rule) => {
                this.rule = rule;
                return this.loadConditions();
            });
        },

        loadConditions(conditions = null) {
            if (conditions === null) {
                return this.conditionRepository.search(new Criteria(), Context.api).then((searchResult) => {
                    return this.loadConditions(searchResult);
                });
            }

            if (conditions.total <= conditions.length) {
                this.conditions = conditions;
                return Promise.resolve();
            }

            const criteria = new Criteria(
                conditions.criteria.page + 1,
                conditions.criteria.limit
            );

            return this.conditionRepository.search(criteria, conditions.context).then((searchResult) => {
                conditions.push(...searchResult);
                conditions.criteria = searchResult.criteria;
                conditions.total = searchResult.total;

                return this.loadConditions(conditions);
            });
        },

        conditionsChanged({ conditions, deletedIds }) {
            this.conditionTree = conditions;
            this.deletedIds = [...this.deletedIds, ...deletedIds];
            this.rule.conditions = conditions;
        },

        async saveFeed() {
            // check if, when notifications are enabled all required fields are filled
            if (this.checkBeforeRequest()) {
                return;
            }
            this.isLoading = true;

            if (this.detailMode) {
                await this.removeOldNotifications();
            }

            // save filter & rule when given
            let filter = this.generateProductFilter();
            if (filter) {
                this.feed.filter = filter;
                this.feed.ruleId = this.rule.id;
                this.rule.priority = 1;
                this.rule.name = this.feed.name + '_feed_generator_rule';
                this.feed.rule = this.rule;
                try {
                    await this.ruleRepository.save(this.rule, Shopware.Context.api);
                    // complete rule has to be reloaded, with conditions
                    this.loadEntityData(this.feed.ruleId);
                } catch (e) {
                    this.createNotificationError({
                        title: this.$tc('product-feed.general.error'),
                        message: this.$tc('product-feed.general.errorOccurred')
                    });
                    this.isLoading = false;
                    return;
                }
            } else {
                this.feed.rule = null;
                this.feed.ruleId = null;
                this.feed.filter = null;
            }

            // prepare some feed values
            this.feed.interval = this.interval.time * this.interval.multiplicator;
            this.feed.hostDirectory = this.feed.hostDirectoryPath;
            if (this.feed.notificationsEnabled) {
                this.setNotificationsToFeed();
            }

            // save feed
            try {
                await this.repository.save(this.feed, Shopware.Context.api)
            } catch (e) {
                this.createNotificationError({
                    title: this.$tc('product-feed.general.error'),
                    message: this.$tc('product-feed.detail.requiredFieldsAreEmpty')
                });
                this.isLoading = false;
                return;
            }

            // add notifications
            try {
                if (this.feed.notificationsEnabled && this.feed.notificationAddresses) {
                    let mails = this.feed.notificationAddresses.split(',');
                    let promises = [];
                    for (let mail of mails) {
                        let notification = this.notificationRepository.create(Shopware.Context.api);
                        notification.emailAddress = mail;
                        notification.enabled = true;
                        notification.productfeedId = this.feed.id;
                        promises.push(this.notificationRepository.save(notification, Shopware.Context.api));
                    }
                    await Promise.all(promises);
                }
            } catch (e) {
                this.createNotificationError({
                    title: this.$tc('product-feed.general.error'),
                    message: this.$tc('product-feed.general.errorOccurred')
                });
                this.isLoading = false;
                return;
            }

            await this.saveProductStream();

            // create user notification
            this.createNotificationSuccess({
                title: this.$tc('product-feed.general.success'),
                message: this.$tc('product-feed.detail.feedWasSaved')
            });
            if (!this.detailMode) {
                this.$router.push({ name: 'product.feed.detail', params: { id: this.feed.id } });
                return;
            }

            // reload feed
            this.rule = null;
            this.ruleId = null;
            await this.getFeed();
            this.isLoading = false;
        },

        async saveProductStream() {

            const criteria = new Criteria();
            criteria.addFilter(Criteria.equals('productfeedId', this.feed.id));
            let oldEntities = await this.productfeedProductStreamRepository.search(criteria, Shopware.Context.api);
            await Promise.all(
                oldEntities.map(entity => this.productfeedProductStreamRepository.delete(entity.id, Shopware.Context.api))
            );

            let promises = [];
            this.dynamicProductGroups.forEach(group => {
                let productfeedProductStreamEntity = this.productfeedProductStreamRepository.create(Shopware.Context.api);
                productfeedProductStreamEntity.productfeedId = this.feed.id;
                productfeedProductStreamEntity.productStreamId = group.id;

                promises.push(this.productfeedProductStreamRepository.save(productfeedProductStreamEntity, Shopware.Context.api));
            });

            await Promise.all(promises);
        },

        async removeOldNotifications() {
            // remove old notifications
            const criteria = new Criteria();
            criteria.addFilter(Criteria.equals('productfeedId', this.feed.id));
            let notifications = await this.notificationRepository.search(criteria, Shopware.Context.api);
            let promises = [];
            notifications.forEach(n => promises.push(this.notificationRepository.delete(n.id, Shopware.Context.api)));
            await Promise.all(promises);
        },

        async onBtnGenerate() {
            this.isLoading = true;
            try {
                await this.productfeed.generateFeed(this.feed.id);
                this.createNotificationSuccess({
                    title: this.$tc('global.default.success'),
                    message: this.$tc('product-feed.detail.generateSuccess')
                });
                this.generateSuccess = true;
                this.updateLatestFile();
                setTimeout(() => this.generateSuccess = false, 2000);
            } catch (e) {
                if (e.response.data.data) {
                    this.createNotificationError({
                        title: this.$tc('global.default.error'),
                        message: this.$tc(e.response.data.data)
                    });
                } else {
                    this.createNotificationError({
                        title: this.$tc('global.default.error'),
                        message: this.$tc('product-feed.detail.generateError')
                    });
                }
            } finally {
                this.isLoading = false;
            }
        },

        saveFinish() {
            this.processSuccess = false;
        },

        checkBeforeRequest() {
            this.firstTry = false;
            if (this.checkError()) {
                if (this.feed.name && this.feed.filename) {
                    this.createNotificationError({
                        title: this.$tc('product-feed.general.error'),
                        message: this.$tc('product-feed.detail.requiredFieldsAreEmpty')
                    });
                    return true;
                }
            }
            return false;
        },

        generateProductFilter() {
            // check if something is in the productfilter
            let toCheck = this.rule.conditions[0];
            if (!toCheck) {
                return null;
            }
            let exists;
            while (true) {
                if (toCheck.type === 'andContainer' || toCheck.type === 'orContainer') {
                    if (toCheck.children[0]) {
                        toCheck = toCheck.children[0];
                    } else {
                        exists = false;
                        break;
                    }
                } else {
                    if (!toCheck.type) {
                        exists = false;
                        break;
                    } else {
                        exists = true;
                        break;
                    }
                }
            }
            if (this.rule.conditions[0] && exists) {
                return this.resolveCondition(this.rule.conditions[0]);
            }
            return null;
        },

        resolveCondition(condition) {
            let result = {};
            if (condition.type === 'andContainer') {
                result.and = [];
                condition.children.forEach(child => {
                    result.and.push(this.resolveCondition(child));
                });
            } else if (condition.type === 'orContainer') {
                result.or = [];
                condition.children.forEach(child => {
                    result.or.push(this.resolveCondition(child));
                });
            } else {
                result.type = condition.type;
                result.operator = condition.value.operator;
                result.value = condition.value.value;
                if (!result.value) {
                    result.value = condition.value.values;
                }
            }
            return result;
        },

        fillInterval() {
            let minutes = this.feed.interval / 60 / 1000;
            let hours = minutes / 60;
            let days = hours / 24;
            let weeks = days / 7;

            if (this.isInt(weeks)) {
                this.interval.time = weeks;
                this.interval.multiplicator = this.timeIntervals[0].value.toString();
            } else if (this.isInt(days)) {
                this.interval.time = days;
                this.interval.multiplicator = this.timeIntervals[1].value.toString();
            } else if (this.isInt(hours)) {
                this.interval.time = hours;
                this.interval.multiplicator = this.timeIntervals[2].value.toString();
            } else if (this.isInt(minutes)) {
                this.interval.time = minutes;
                this.interval.multiplicator = this.timeIntervals[3].value.toString();
            }
        },

        isInt(n) {
            return n % 1 === 0;
        },

        setNotificationsToFeed() {
            if (this.feed.notificationEvents) {
                this.feed.messageWhenCreateSuccess = this.feed.notificationEvents.indexOf('notification_events_create_success') >= 0;
                this.feed.messageWhenCreateError = this.feed.notificationEvents.indexOf('notification_events_create_error') >= 0;
                this.feed.messageWhenDeliverySuccess = this.feed.notificationEvents.indexOf('notification_events_delivery_success') >= 0;
                this.feed.messageWhenDeliveryError = this.feed.notificationEvents.indexOf('notification_events_delivery_error') >= 0;
            }
        },

        checkError() {
            return this.executionTimeError !== null ||
                this.emailEventsError !== null ||
                this.emailAddressesError !== null ||
                this.hostDirectoryError !== null ||
                this.hostPasswordError !== null ||
                this.hostUsernameError !== null ||
                this.hostUrlError !== null ||
                this.templateError !== null;
        },

        checkErrorFunction(...values) {
            values.push(this.firstTry);
            // checks if any value is set (true or different value)
            return values.some(value => !!value);
        },

        resetFirstTry() {
            this.firstTry = true;
        },

        async updateLatestFile() {
            let criteria = new Criteria();
            criteria.addFilter(Criteria.equals('productfeedId', this.feed.id));
            criteria.addSorting(Criteria.sort('createdAt', 'DESC'));
            let files = await this.fileRepository.search(criteria, Shopware.Context.api)
            this.latestFile = files.first();
        },


        async loadDynamicProductGroups() {
            if (!this.feed.productfeedProductStreams || this.feed.productfeedProductStreams.length === 0) {
                let criteria = new Criteria(1, 1);
                const streams = await this.productStreamRepository.search(criteria, Shopware.Context.api)
                streams.pop();
                this.setDynamicProductGroups(streams);
                return;
            }
            let criteria = new Criteria();
            criteria.addAssociation('productStream');
            criteria.addFilter(Criteria.equalsAny('id', this.feed.productfeedProductStreams.getIds()));
            const productfeedProductStreams = await this.productfeedProductStreamRepository.search(criteria, Shopware.Context.api);
            const ids = productfeedProductStreams.map(e => e.productStreamId);
            criteria = new Criteria();
            criteria.addFilter(Criteria.equalsAny('id', ids));
            const streams = await this.productStreamRepository.search(criteria, Shopware.Context.api);
            this.setDynamicProductGroups(streams);
        },

        setDynamicProductGroups(values) {
            this.dynamicProductGroups = values;
        }
    },
});
