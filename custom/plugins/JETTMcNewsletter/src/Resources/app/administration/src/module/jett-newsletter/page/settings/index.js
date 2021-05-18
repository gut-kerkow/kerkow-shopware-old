import template from './jett-newsletter-settings.html.twig';

const { Mixin} = Shopware;

Shopware.Component.register('jett-newsletter-settings', {
    template: template,

    inject: ['JettMcApiService'],

    mixins: [
        Mixin.getByName('notification'),
    ],

    data() {
        return {
            getListsIsLoading: false,
            apiKey: null,
            isLoading: false,
            isSaveSuccessful: false,
            syncLimit: 30,
            salesChannelId: null,
            isActive: false,
            lists: [],
            selectedList: null,
            settingId: null,
            lastSyncRun: null,
            getLogsIsLoading: false,
            logs: [],
            logsTotal: 0,
            logsPage: 1,
            logsLimit: 25,
            showAdvancedSettings: false,
            doubleOptinValues: [
                { id: 0, label: 'Shopware' },
                { id: 1, label: 'Mailchimp' },
            ],
            selectedDoubleOptinOption: 0,
        }
    },

    mounted () {
        this.getSettings();
    },

    methods: {

        onSalesChannelChanged(item) {
            this.salesChannelId = item;
            this.getSettings();
            this.getLogs();
        },

        onLogPageChange(pagination) {
            this.logsPage = pagination.page;
            this.getLogs();
        },

        getSettings() {
            this.JettMcApiService.getSettings({salesChannelId: this.salesChannelId}).then((response) => {
                    if (response.apiKey) {
                        this.apiKey = response.apiKey;
                    }
                    if (response.listId) {
                        this.selectedList = response.listId;
                    }
                    if (response.id) {
                        this.settingId = response.id;
                    }
                    if (response.syncLimit) {
                        this.syncLimit = response.syncLimit;
                    }
                    if (response.salesChannelId) {
                        this.salesChannelId = response.salesChannelId;
                    }
                    if (response.active) {
                        this.isActive = response.active;
                    }
                    if (response.lastSyncRun) {
                        this.lastSyncRun = response.lastSyncRun;
                    }
                    if (response.doiOption) {
                        this.selectedDoubleOptinOption =  response.doiOption;
                    }
                    if (this.selectedList) {
                        this.getLists();
                    }

            }).catch((errorResponse) => {
                this.showErrorMessage(errorResponse);
            }).finally(() => {});
        },

        getLogs() {
            this.getLogsIsLoading = true;
            this.JettMcApiService.getLogs({
                salesChannelId: this.salesChannelId,
                page: this.logsPage,
                limit: this.logsLimit
            }).then((response) => {
                this.logs = Object.values(response.elements);
                this.logs.map(log => {
                    log.payload = JSON.parse(log.payload);
                });
                this.logsTotal = response.total
            }).catch((errorResponse) => {
                this.showErrorMessage(errorResponse);
            }).finally(() => {
                this.getLogsIsLoading = false;
            });
        },

        onSave() {
            this.isLoading = true;

            this.JettMcApiService.save({
                settingId: this.settingId,
                salesChannelId: this.salesChannelId,
                active: this.isActive,
                apiKey: this.apiKey,
                listId: this.selectedList,
                syncLimit: this.syncLimit,
                lastSyncRun: this.lastSyncRun,
                doiOption: this.selectedDoubleOptinOption
            }).then(() => {
                this.createNotificationSuccess({
                    title: this.$tc('jett-mc-newsletter.settings.status.saveSuccess.title'),
                    message: this.$tc('jett-mc-newsletter.settings.status.saveSuccess.message'),
                });
            }).catch((errorResponse) => {
                this.showErrorMessage(errorResponse);
            }).finally(() => {
                this.isLoading = false;
            });
        },

        getLists() {
            this.getListsIsLoading = true;

            this.JettMcApiService.getLists({apiKey: this.apiKey}).then((response) => {
                this.lists = response;

                this.createNotificationSuccess({
                    title: this.$tc('jett-mc-newsletter.settings.status.getSuccess.title'),
                    message: this.$tc('jett-mc-newsletter.settings.status.getSuccess.message'),
                });
            }).catch((errorResponse) => {
                this.showErrorMessage(errorResponse);
            }).finally(() => {
                this.getListsIsLoading = false;
            });
        },

        getList() {
            this.getListsIsLoading = true;

            this.JettMcApiService.getList({apiKey: this.apiKey, listId: this.selectedList}).then((response) => {
                this.lists = response;

                this.createNotificationSuccess({
                    title: this.$tc('jett-mc-newsletter.settings.status.getSuccess.title'),
                    message: this.$tc('jett-mc-newsletter.settings.status.getSuccess.message'),
                });
            }).catch((errorResponse) => {
                this.showErrorMessage(errorResponse);
            }).finally(() => {
                this.getListsIsLoading = false;
            });
        },

        clearKeyAndList() {
            this.apiKey = null;
            this.selectedList = null;
            this.lastSyncRun = null;
        },

        showErrorMessage(errorResponse) {
            var errorMessage = errorResponse.response.data.message ? errorResponse.response.data.message : errorResponse.message;
            this.createNotificationError({
                title: errorResponse.title,
                message: errorMessage,
                autoClose: false
            });
        }
    }
});
