// noinspection ES6UnusedImports
import StoreApiClient from './services/store-api-client.service';
import Console from './helper/console.helper';

/**
 * @since 1.0.0
 */
export default class AnalyticsEvent
{
    /**
     * @since 1.0.0
     *
     * @param {StoreApiClient} storeApiClient
     * @param {object} context
     * @param {boolean} debugEnabled
     */
    constructor({ storeApiClient, context, debugEnabled = false }) {
        this.active = true;
        this.storeApiClient = storeApiClient;
        this.context = context;
        this.debugEnabled = debugEnabled;
    }

    /**
     * @since 1.0.0
     *
     * @param {string} controllerName
     * @param {string} actionName
     *
     * @returns {boolean}
     */
    supports(controllerName, actionName) {
        Console.warn('Method \'supports\' was not overridden by `' + this.constructor.name + '`. Default return set to false.');
        return false;
    }

    /**
     * @since 1.0.0
     */
    execute() {
        Console.warn('Method \'execute\' was not overridden by `' + this.constructor.name + '`.');
    }

    /**
     * @since 1.0.0
     */
    disable() {
        this.active = false;
    }
}
