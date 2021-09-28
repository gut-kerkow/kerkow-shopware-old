import AnalyticsEvent from './analytics-event';

/**
 * @since 1.0.0
 */
export default class EventAwareAnalyticsEvent extends AnalyticsEvent
{
    /**
     * @since 1.0.0
     */
    execute() {
        const events = this.getEvents();
        const pluginRegistry = window.PluginManager;

        pluginRegistry.getPluginInstances(this.getPluginName()).forEach((pluginInstance) => {
            Object.keys(events).forEach((eventName) => {
                pluginInstance.$emitter.subscribe(eventName, events[eventName]);
            });
        });
    }

    /**
     * @since 1.0.0
     *
     * @return {object}
     */
    getEvents() {
        console.warn('[Google Tag Manager Cloud Plugin] Method \'getEvents\' was not overridden by `' + this.constructor.name + '`.');
        return {};
    }

    /**
     * @since 1.0.0
     *
     * @return {string}
     */
    getPluginName() {
        console.warn('[Google Tag Manager Cloud Plugin] Method \'getPluginName\' was not overridden by `' + this.constructor.name + '`.');
    }
}
