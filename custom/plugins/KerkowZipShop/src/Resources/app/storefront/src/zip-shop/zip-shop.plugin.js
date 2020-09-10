import Plugin from "src/plugin-system/plugin.class";
import DomAccess from "src/helper/dom-access.helper";
import Debouncer from "src/helper/debouncer.helper";
import HttpClient from "src/service/http-client.service";
import ButtonLoadingIndicator from "src/utility/loading-indicator/button-loading-indicator.util";
import DeviceDetection from "src/helper/device-detection.helper";
import Iterator from "src/helper/iterator.helper";

export default class ZipShopPlugin extends Plugin {
  static options = {
    zipShopOverlayFormSelector: "form",
    zipShopOverlayInputSelector: "input[type=text]",
    zipShopSubmitButtonSelector: "button[type=submit]",
    zipShopUrlDataAttribute: "data-url",
    zipShopBodyContentSelector: ".js-modal-body",
    zipShopCloseModalSelector: ".js-close-modal",

    zipShopOverlayDelay: 250,
    zipShopZipRegex: /^01\d{2}[1-9]|0[2-9]\d{3}|[1-9]\d{3}[0-8]|[1-9]\d{3}(?<!9999)9$/,
  };

  init() {
    try {
      console.log("klar");
      this._form = DomAccess.querySelector(
        this.el,
        this.options.zipShopOverlayFormSelector
      );
      this._inputField = DomAccess.querySelector(
        this.el,
        this.options.zipShopOverlayInputSelector
      );
      this._submitButton = DomAccess.querySelector(
        this.el,
        this.options.zipShopSubmitButtonSelector
      );
      this._url = DomAccess.getAttribute(
        this._form,
        this.options.zipShopUrlDataAttribute
      );
    } catch (e) {
      console.log(e);
      return;
    }

    this._client = new HttpClient();
    this._showModal();
  }

  /**
   * Show Modal
   * @private
   */
  _showModal() {
    // Show the modal
    $("#kerkowZipModal").modal("show");

    this._registerEvents();
  }

  /**
   * Register events
   * @private
   */
  _registerEvents() {
    // add listener to the form's submit event
    this._form.addEventListener("submit", this._handleSubmitEvent.bind(this));
    this._inputField.addEventListener(
      "input",
      this._handleInputEvent.bind(this)
    );
  }

  /**
   * Fire the XHR request if user submits the form
   * @private
   */
  _handleInputEvent(event) {
    const value = this._inputField.value;
    if (!this._validateZip(value)) {
      this._inputField.classList.remove("is-valid");
      this._inputField.classList.add("is-invalid");
    } else {
      this._inputField.classList.remove("is-invalid");
      this._inputField.classList.add("is-valid");
    }

    this.$emitter.publish("handleInputEvent", { value });
  }

  /**
   * Fire the XHR request if user submits the form
   * @private
   */
  _handleSubmitEvent(event) {
    event.preventDefault();
    event.stopPropagation();
    console.log(event);
    const value = this._inputField.value;
    if (!this._validateZip(value)) {
      this._inputField.classList.add("is-invalid");
      return;
    }

    this._inputField.classList.add("is-valid");
    this._inputField.classList.remove("is-invalid");

    this._queryZip(value);

    this.$emitter.publish("handleInputEvent", { value });
  }

  /**
   * Process the AJAX suggest and show results
   * @param {string} value
   * @private
   */
  _queryZip(value) {
    console.log("querying");
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
      const body = document.querySelector(
        this.options.zipShopBodyContentSelector
      );
      body.insertAdjacentHTML("beforeend", response);

      this.$emitter.publish("afterSuggest");
    });
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
   * Remove existing search results popover from DOM
   * @private
   */
  _attachResult() {
    // remove modals body content
    const body = document.querySelector(
      this.options.zipShopBodyContentSelector
    );
    //body.style.display = "none";

    body.insertAdjacentHTML("beforeend", response);

    this.$emitter.publish("clearSuggestResults");
  }
}
