import CookiePermissionPlugin from "src/plugin/cookie/cookie-permission.plugin";
import CookieStorage from "src/helper/storage/cookie-storage.helper";
import Debouncer from "src/helper/debouncer.helper";
import DeviceDetection from "src/helper/device-detection.helper";

// this event will be published via a global (document) EventEmitter
export const COOKIE_CONFIGURATION_UPDATE = "CookieConfiguration_Update";
export default class CookiePermissionPluginExtension extends CookiePermissionPlugin {
  static options = {
    /**
     * cookie expiration time
     * the amount of days until the cookie bar will be displayed again
     */
    cookieExpiration: 30,

    /**
     * cookie set to determine if cookies were accepted or denied
     */
    cookieName: "cookie-preference",

    /**
     * cookie dismiss button selector
     */
    buttonSelector: ".js-cookie-permission-button",

    /**
     * cookie input field selector
     */
    cookieSelector: "input[type=hidden]",

    /**
     * cookie accept button selector
     */
    acceptButtonSelector: ".js-cookie-accept-button",

    /**
     * resize debounce delay
     */
    resizeDebounceTime: 200,
  };

  init() {
    this._button = this.el.querySelector(this.options.buttonSelector);
    this._acceptButton = this.el.querySelector(
      this.options.acceptButtonSelector
    );

    if (!this._isPreferenceSet()) {
      this._setBodyPadding();
      this._registerEvents();
    }
  }

  /**
   * register all needed events
   *
   * @private
   */
  _registerEvents() {
    if (this._button) {
      const submitEvent = DeviceDetection.isTouchDevice()
        ? "touchstart"
        : "click";
      this._button.addEventListener(
        submitEvent,
        this._handleDenyButton.bind(this)
      );
    }

    if (this._acceptButton) {
      const submitEvent = DeviceDetection.isTouchDevice()
        ? "touchstart"
        : "click";
      this._acceptButton.addEventListener(
        submitEvent,
        this._handleAcceptButton.bind(this)
      );
    }

    window.addEventListener(
      "resize",
      Debouncer.debounce(
        this._setBodyPadding.bind(this),
        this.options.resizeDebounceTime
      ),
      {
        capture: true,
        passive: true,
      }
    );
  }

  /**
   * Checks if a cookie preference is already set.
   * If not, the cookie bar is displayed.
   */
  _isPreferenceSet() {
    const cookiePermission = CookieStorage.getItem(this.options.cookieName);

    if (!cookiePermission) {
      this._showCookieBar();
      return false;
    }

    return true;
  }

  /**
   * Event handler for the cookie bar 'deny' button
   * Sets the 'cookie-preference' cookie to hide the cookie bar
   * @private
   */
  _handleAcceptButton() {
    const { cookieExpiration, cookieName } = this.options;
    this._handleAccept();
    this._hideCookieBar();
    this._removeBodyPadding();

    this.$emitter.publish("onClickAcceptButton");
  }

  /**
   * Event handler for the 'Accept' button inside cookie bar
   *
   * accepts all desired cookies
   *
   * @private
   */
  _handleAccept() {
    const acceptedCookies = this._getCookies();
    const { cookieName } = this.options;

    const activeCookieNames = [];

    /**
     * Cookies without value are passed to the updateListener
     * ( see "_handleUpdateListener" method )
     */
    acceptedCookies.forEach(({ cookie, value, expiration }) => {
      acceptedCookies.push(cookie);

      if (cookie && value) {
        CookieStorage.setItem(cookie, value, expiration);
      }
    });

    CookieStorage.setItem(cookieName, "1", "30");

    this._handleUpdateListener(activeCookieNames, []);
  }

  _handleUpdateListener(active, inactive) {
    const updatedCookies = this._getUpdatedCookies(active, inactive);

    document.$emitter.publish(COOKIE_CONFIGURATION_UPDATE, updatedCookies);
  }

  /**
   * Compare the current in-/active cookies to the initialState and return updated cookies only
   *
   * @param active
   * @param inactive
   * @private
   */
  _getUpdatedCookies(active, inactive) {
    const { lastState } = this;
    const updated = {};

    active.forEach((currentCheckbox) => {
      if (lastState.inactive.includes(currentCheckbox)) {
        updated[currentCheckbox] = true;
      }
    });

    inactive.forEach((currentCheckbox) => {
      if (lastState.active.includes(currentCheckbox)) {
        updated[currentCheckbox] = false;
      }
    });

    return updated;
  }

  /**
   * Get cookies passed by accepting all
   * Can be filtered by "all", "active" or "inactive"
   *
   * Always excludes "required" cookies, since they are assumed to be set separately.
   *
   * @param type
   * @returns {Array}
   * @private
   */
  _getCookies() {
    const { cookieSelector } = this.options;

    return Array.from(this.el.querySelectorAll(cookieSelector))
      .filter(() => {
        return true;
      })
      .map((filteredInput) => {
        const {
          cookie,
          cookieValue,
          cookieExpiration,
          cookieRequired,
        } = filteredInput.dataset;
        return {
          cookie,
          value: cookieValue,
          expiration: cookieExpiration,
          required: cookieRequired,
        };
      });
  }
}
