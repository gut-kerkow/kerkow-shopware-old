import EventAwareAnalyticsEvent from '../event-aware-analytics-event';
import DataLayer from "../helper/data-layer.helper";

/**
 * @since 1.0.0
 */
export default class LoginEvent extends EventAwareAnalyticsEvent
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
        return (controllerName === 'auth' && controllerAction === 'loginpage') || (controllerName === 'register' && controllerAction === 'checkoutregisterpage');
    }

    /**
     * @since 1.0.0
     *
     * @return string
     */
    getPluginName() {
        return 'FormValidation';
    }

    /**
     * @since 1.0.0
     *
     * @return {object}
     */
    getEvents() {
        return {
            'onFormSubmit': this._onFormSubmit.bind(this)
        };
    }

    /**
     * @since 1.0.0
     *
     * @private
     *
     * @param {object} event
     */
    _onFormSubmit(event) {
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
     * @param {object} event
     */
    _buildDataAndPushToDataLayer(event) {
        const target = event.target;
        if (!target.classList.contains('login-form') || !event.detail.validity) {
            return;
        }

        const method = 'mail'

        DataLayer.push({
            'event': 'shop_studio_google_tag_manager_cloud_login',
            'google_analytics': {
                'event': 'login',
                'method': method
            },
            'data': {
                'method': method
            }
        }, {
            debugEnabled: this.debugEnabled
        });
    }
}
