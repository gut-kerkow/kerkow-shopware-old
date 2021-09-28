import EventAwareAnalyticsEvent from '../event-aware-analytics-event';
import DataLayer from "../helper/data-layer.helper";

/**
 * @since 1.0.0
 */
export default class SignUpEvent extends EventAwareAnalyticsEvent
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
     * @param {Event} event
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
     * @param {Event} event
     */
    _buildDataAndPushToDataLayer(event) {
        const target = event.target;
        if (!target.classList.contains('register-form') || !event.detail.validity) {
            return;
        }

        const method = 'mail';

        DataLayer.push({
            'event': 'shop_studio_google_tag_manager_cloud_sign_up',
            'google_analytics': {
                'event': 'sign_up',
                'method': method
            },
            'facebook': {
                'event': 'CompleteRegistration',
                'content_name': method,
                'status': true
            },
            'pinterest': {
                'event': 'Signup',
                'lead_type': method
            },
            'data': {
                'method': method
            }
        }, {
            debugEnabled: this.debugEnabled
        });
    }
}
