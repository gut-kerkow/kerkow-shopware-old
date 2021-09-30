const ApiService = Shopware.Classes.ApiService;

/**
 * @class
 * @property {AxiosInstance} httpClient
 */
export default class ProductfeedService extends ApiService {

    /**
     * @constructor
     * @property {AxiosInstance} httpClient
     */
    constructor(httpClient, loginService, apiEndpoint = 'productfeed') {
        super(httpClient, loginService, apiEndpoint);
        this.fetchEnums()
    }

    /**
     * @returns {null}
     */
    generateFeed(id) {
        let headers = this.getBasicHeaders();
        return this.httpClient.get(
            `_action/${this.getApiBasePath()}/generate/${id}`,
            {
                headers
            }
        ).then((response) => {
            return ApiService.handleResponse(response);
        });
    }

    async fetchEnums() {
        this.promises = [];
        let headers = this.getBasicHeaders();
        this.promises.push(this.httpClient.get(
            `_action/${this.getApiBasePath()}/getDeliveryStates`,
            {
                headers
            }
        ).then((response) => {
            return ApiService.handleResponse(response);
        }).then(states => this.deliveryStates = states));

        this.promises.push(this.httpClient.get(
            `_action/${this.getApiBasePath()}/getExecutionTypes`,
            {
                headers
            }
        ).then((response) => {
            return ApiService.handleResponse(response);
        }).then(types => this.executionTypes = types));


        this.promises.push(this.httpClient.get(
            `_action/${this.getApiBasePath()}/getFeedStates`,
            {
                headers
            }
        ).then((response) => {
            return ApiService.handleResponse(response);
        }).then(states => this.feedStates = states));


        this.promises.push(this.httpClient.get(
            `_action/${this.getApiBasePath()}/getFileTransferProtocols`,
            {
                headers
            }
        ).then((response) => {
            return ApiService.handleResponse(response);
        }).then(p => this.fileTransferProtocols = p));


        this.promises.push(this.httpClient.get(
            `_action/${this.getApiBasePath()}/getFileTypes`,
            {
                headers
            }
        ).then((response) => {
            return ApiService.handleResponse(response);
        }).then(t => this.fileTypes = t));

        this.promises.push(this.httpClient.get(
            `_action/${this.getApiBasePath()}/getNotificationEvents`,
            {
                headers
            }
        ).then((response) => {
            return ApiService.handleResponse(response);
        }).then(e => this.notificationEvents = e));
    }

    async wait() {
       await Promise.all(this.promises);
    }

    formatExecutionType(creationType) {
        switch (creationType) {
            case 'execution_type_manual':
                return 'product-feed.general.execution_type_manual';
            case 'execution_type_cron':
                return 'product-feed.general.execution_type_cron';
            default:
                console.warn(creationType);

        }
    }

    formatFeedState(state) {
        switch (state) {
            case 'feed_state_success':
                return 'product-feed.general.success';
            case 'feed_state_error':
                return 'product-feed.general.feed_state_error';
            default:
                console.warn(state);
        }
    }

    formatFileTransferProtocol(protocol) {
        switch (protocol) {
            case 'file_transfer_protocol_ftp':
                return 'product-feed.general.file_transfer_protocol_ftp';
            case 'file_transfer_protocol_sftp':
                return 'product-feed.general.file_transfer_protocol_sftp';
            default:
                console.warn(protocol);
        }
    }

    formatNotificationEvents(event) {
        switch (event) {
            case 'notification_events_create_success':
                return 'product-feed.general.notification_events_create_success';
            case 'notification_events_create_error':
                return 'product-feed.general.notification_events_create_error';
            case 'notification_events_delivery_success':
                return 'product-feed.general.notification_events_delivery_success';
            case 'notification_events_delivery_error':
                return 'product-feed.general.notification_events_delivery_error';
            default:
                console.warn(event);
        }
    }

    formatExecutionMode(mode) {
        switch (mode) {
            case 'execution_type_manual':
                return 'product-feed.general.execution_type_manual';
            case 'execution_type_cron':
                return 'product-feed.general.execution_type_cron';
        }
    }

    formatFileType(type) {
        switch (type) {
            case 'file_type_csv':
                return 'product-feed.general.file_type_csv';
            case 'file_type_txt':
                return 'product-feed.general.file_type_txt';
            case 'file_type_xml':
                return 'product-feed.general.file_type_xml';
            default:
                console.warn(type);
        }
    }

    formatFileTypeRaw(type) {
        switch (type) {
            case 'file_type_csv':
                return 'csv';
            case 'file_type_txt':
                return 'txt';
            case 'file_type_xml':
                return 'xml';
            default:
                console.warn(type);
        }
    }

    formatDeliveryState(type) {
        switch (type) {
            case 'delivery_state_disabled':
                return 'product-feed.general.delivery_state_disabled';
            case 'delivery_state_delivered':
                return 'product-feed.general.delivery_state_delivered';
            case 'delivery_state_error':
                return 'product-feed.general.delivery_state_error';
            case 'delivery_state_not_delivered_yet':
                return 'product-feed.general.delivery_state_not_delivered_yet';
            default:
                console.warn(type);
        }
    }

    formatInteval(interval) {
        let seconds = interval / 1000;
        let minutes = seconds / 60;        

        if (minutes < 60) {
            return { minutes: parseInt(minutes, 10) };
        }

        let hours = minutes / 60;
        if (hours < 24) {
            minutes = minutes % 60;
            if (minutes > 0) {
                return { hours: parseInt(hours, 10),  minutes: parseInt(minutes, 10) }; 
            }
            return { hours };
        }

        let days = hours / 24;
        if (days < 7) {
            hours = hours % 24;
            if (hours > 0) {
                return { days: parseInt(days, 10), hours: parseInt(hours, 10) }
            } else {
                return { days: parseInt(days, 10) }
            }
        }

        let weeks = days / 7;
        days = days % 7;
        if (days > 0) {
            return { weeks: parseInt(weeks, 10), days: parseInt(days, 10) };
        } else {
            return { weeks: parseInt(weeks, 10) };
        }
    }

    getNotificationEvents() {
        return this.notificationEvents;
    }

    getExecutionModes() {
        return this.executionTypes;
    }

    getFileTypes() {
        return this.fileTypes;
    }

    getDeliveryStates() {
        return this.deliveryStates;
    }

    getFileTransferProtocols() {
        return this.fileTransferProtocols;
    }

    formatTimestamp(timestamp) {
        return new Date(timestamp).toLocaleString();
    }
}
