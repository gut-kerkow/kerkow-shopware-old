import EventAwareAnalyticsEvent from '../event-aware-analytics-event';
import DataLayer from "../helper/data-layer.helper";

/**
 * @since 1.0.0
 */
export default class SearchEvent extends EventAwareAnalyticsEvent
{
    /**
     * @since 1.0.0
     *
     * @param {string} controllerName
     * @param {string} controllerAction
     *
     * @return {boolean}
     */
    supports(controllerName, controllerAction) {
        return true;
    }

    /**
     * @since 1.0.0
     *
     * @return {string}
     */
    getPluginName() {
        return 'SearchWidget';
    }

    /**
     * @since 1.0.0
     *
     * @return {object}
     */
    getEvents() {
        return {
            'handleInputEvent':  this._onSearch.bind(this)
        };
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @param {Event} event
     */
    _onSearch(event) {
        if (!this.active) {
            return;
        }

        this._buildDataAndPushToDataLayer(event);
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @param {Event} event
     */
    _buildDataAndPushToDataLayer(event) {
        const searchTerm = event.detail.value;

        DataLayer.push({
            'event': 'shop_studio_google_tag_manager_cloud_search',
            'google_analytics': {
                'event': 'search',
                'search_term': searchTerm
            },
            'facebook': {
                'event': 'Search',
                'search_string': searchTerm
            },
            'pinterest': {
                'event': 'Search',
                'search_query': searchTerm
            },
            'data': {
                'search_term': searchTerm
            }
        }, {
            debugEnabled: this.debugEnabled
        });
    }
}
