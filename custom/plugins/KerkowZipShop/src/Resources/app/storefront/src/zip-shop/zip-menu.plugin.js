import Plugin from "src/plugin-system/plugin.class";
import DomAccess from "src/helper/dom-access.helper";
import OffCanvas from "src/plugin/offcanvas/offcanvas.plugin";
import DeviceDetection from "src/helper/device-detection.helper";
import ViewportDetection from "src/helper/viewport-detection.helper";
import ButtonLoadingIndicator from "src/utility/loading-indicator/button-loading-indicator.util";
import HttpClient from "src/service/http-client.service";

export default class OffCanvasZipMenu extends Plugin {
  static options = {
    /**
     * selector for the dropdown menu content which is inserted into the offcanvas
     */
    dropdownMenuSelector: "js-zip-menu-dropdown",

    /**
     * additional class for the offcanvas
     */
    additionalClass: "zip-menu-offcanvas",

    /**
     * ID for the form
     */
    headerZipFormSelector: ".js-add-zip-form-header",

    headerZipShopUrlDataAttribute: "data-url",

    headerZipShopSubmitButtonSelector: "button[type=submit]",

    headerZipBodySelector: ".js-zip-form-container",

    headerZipRemoveLinkSelector: ".js-header-zip-widget-remove-link",

    /**
     * class is used to hide the dropdown on viewports where the offcanvas is used
     */
    hiddenClass: "d-none",

    /**
     * from which direction the
     * offcanvas opens
     */
    offcanvasPostion: "left",

    zipShopZipRegex: /\d{5}/,
  };

  init() {
    try {
      this._form = DomAccess.querySelector(
        document,
        this.options.headerZipFormSelector
      );
      this._url = DomAccess.getAttribute(
        this._form,
        this.options.headerZipShopUrlDataAttribute
      );
      this._submitButton = DomAccess.querySelector(
        this._form,
        this.options.headerZipShopSubmitButtonSelector
      );
      this._removeLink = DomAccess.querySelector(
        document,
        this.options.headerZipRemoveLinkSelector
      );
      this._removeUrl = DomAccess.getAttribute(this._removeLink, "data-url");
    } catch (e) {
      console.log("catch", e);
      return;
    }
    this._client = new HttpClient();
    this._registerEventListeners();
  }

  /**
   * Register events to handle opening the account menu OffCanvas
   * by clicking a defined trigger selector
   * @private
   */
  _registerEventListeners() {
    const event = DeviceDetection.isTouchDevice() ? "touchstart" : "click";
    this.el.addEventListener(
      event,
      this._onClickAccountMenuTrigger.bind(this, this.el)
    );

    this._form.addEventListener(
      "submit",
      this._onZipFormSubmission.bind(this, this.el)
    );

    this._removeLink.addEventListener(
      "click",
      this._onZipHeaderRemoveZip.bind(this)
    );

    document.addEventListener(
      "Viewport/hasChanged",
      this._onViewportHasChanged.bind(this)
    );
  }

  /**
   * On clicking the trigger item the account menu OffCanvas shall open
   * and the dropdown content may be fetched and shown inside the OffCanvas.
   * @param trigger
   * @private
   */
  _onClickAccountMenuTrigger(trigger) {
    // if the current viewport is not allowed return
    if (this._isInAllowedViewports() === false) return;

    this._dropdown = DomAccess.querySelector(
      trigger.parentNode,
      `.${this.options.dropdownMenuSelector}`
    );

    this._dropdown.classList.add(this.options.hiddenClass);

    OffCanvas.open(
      this._dropdown.innerHTML,
      null,
      this.options.offcanvasPostion,
      true,
      OffCanvas.REMOVE_OFF_CANVAS_DELAY()
    );
    OffCanvas.setAdditionalClassName(this.options.additionalClass);

    this.$emitter.publish("onClickAccountMenuTrigger");
  }

  /**
   * On submiting the form validate if the entered zip is valid and
   * if so trigger the actual query
   * @param trigger
   * @private
   */
  _onZipFormSubmission(trigger) {
    event.preventDefault();
    event.stopPropagation();
    this._inputField = DomAccess.querySelector(this._form, "input");
    const value = this._inputField.value;
    if (!this._validateZip(value)) {
      this._inputField.classList.add("is-invalid");
      return;
    }
    this._inputField.classList.add("is-valid");
    this._inputField.classList.remove("is-invalid");

    this._queryZip(value);

    this.$emitter.publish("handleZipFormSubmissionEvent", { value });
  }

  /**
   * Process the AJAX suggest and show results
   * @param {string} value
   * @private
   */
  _validateZip(value) {
    if (!value.match(this.options.zipShopZipRegex)) {
      return false;
    }
    return true;
  }

  /**
   * Process the AJAX suggest and show results
   * @param {string} value
   * @private
   */
  _queryZip(value) {
    const url = this._url + encodeURIComponent(value);

    // init loading indicator
    const indicator = new ButtonLoadingIndicator(this._submitButton);
    indicator.create();

    this.$emitter.publish("beforeSearch");

    this._client.abort();
    this._client.get(url, (response) => {
      // remove indicator
      indicator.remove();

      // attach zip query result to modal
      const body = DomAccess.querySelector(
        document,
        this.options.headerZipBodySelector
      );
      body.innerHTML = response;
      this.init();

      this.$emitter.publish("afterSuggest");
    });
  }

  /**
   * On clicking the remove link
   * @param trigger
   * @private
   */
  _onZipHeaderRemoveZip() {
    event.preventDefault();
    event.stopPropagation();
    const url = this._removeUrl;
    // init loading indicator
    const indicator = new ButtonLoadingIndicator(this._submitButton);
    indicator.create();

    this.$emitter.publish("beforeRemove");

    this._client.abort();
    this._client.get(url, (response) => {
      // remove indicator
      indicator.remove();

      // attach result to header action
      const body = DomAccess.querySelector(
        document,
        this.options.headerZipBodySelector
      );
      body.innerHTML = response;
      this.init();

      this.$emitter.publish("afterRemove");
    });
  }

  /**
   * If viewport has changed verify whether to close
   * an already open account menu offcanvas/dropwdown or not
   * @private
   */
  _onViewportHasChanged() {
    if (this._isInAllowedViewports() === false && OffCanvas.exists()) {
      OffCanvas.close();
    }

    if (this._dropdown) {
      if (this._isInAllowedViewports() === false) {
        this._dropdown.classList.remove(this.options.hiddenClass);
      } else {
        this._dropdown.classList.add(this.options.hiddenClass);
      }
    }

    this.$emitter.publish("onViewportHasChanged");
  }

  /**
   * Returns if the browser is in the allowed viewports
   * @returns {boolean}
   * @private
   */
  _isInAllowedViewports() {
    return ViewportDetection.isXS() || ViewportDetection.isSM();
  }
}
