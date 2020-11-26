import Plugin from "src/plugin-system/plugin.class";
import DomAccess from "src/helper/dom-access.helper";
import HttpClient from "src/service/http-client.service";
import ButtonLoadingIndicator from "src/utility/loading-indicator/button-loading-indicator.util";
import Iterator from "src/helper/iterator.helper";
import CookieStorage from "src/helper/storage/cookie-storage.helper";

export default class ZipShopPlugin extends Plugin {
  static options = {
    zipShopOverlayFormSelector: "form",
    zipShopOverlayInputSelector: "input[type=text]",
    zipShopSubmitButtonSelector: "button[type=submit]",
    zipShopUrlDataAttribute: "data-url",
    zipShopBodyContentSelector: ".js-modal-body",
    zipShopDenyZip: ".js-deny-zip",
    zipShopOpenOnLoadAttribute: "data-open-on-load",
    zipShopModalFooterSelector: ".js-modal-footer",
    zipShopModalSuccessMessageSelector: ".js-modal-success-message",
    zipShopModalFailureMessageSelector: ".js-modal-failure-message",
    zipShopNoZipMessageSelector: "js-zip-no-zip",
    zipShopInvalidZipMessage: "js-zip-invalid",

    otherZipInputFieldsSelector: ".js-zip-input",

    hiddenClass: "d-none",
    showClass: "d-block",

    zipShopOverlayDelay: 250,
    zipShopZipRegex: /\d{5}/,

    // Cookie Selectors
    postalcodeCookieName: "postalcode",
    postalcodeDeniedCookieName: "postalcode_denied",
  };

  init() {
    try {
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
      this._denyZipButton = DomAccess.querySelector(
        this.el,
        this.options.zipShopDenyZip
      );
      this._modalFooter = DomAccess.querySelector(
        this.el,
        this.options.zipShopModalFooterSelector
      );
      this._successMessage = DomAccess.querySelector(
        this.el,
        this.options.zipShopModalSuccessMessageSelector
      );
      this._failureMessage = DomAccess.querySelector(
        this.el,
        this.options.zipShopModalFailureMessageSelector
      );
      this._url = DomAccess.getAttribute(
        this._form,
        this.options.zipShopUrlDataAttribute
      );
      this._openOnLoad = DomAccess.getAttribute(
        this.el,
        this.options.zipShopOpenOnLoadAttribute
      );
      this._otherZipFields = document.querySelectorAll(
        this.options.otherZipInputFieldsSelector
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
    this._registerEvents();
    if (!this._openOnLoad) {
      return;
    }
    // Check the cookies
    const postalcodeCookie = CookieStorage.getItem(
      this.options.postalcodeCookieName
    );
    const postalcodeDeniedCookie = CookieStorage.getItem(
      this.options.postalcodeDeniedCookieName
    );
    if (!postalcodeDeniedCookie && !postalcodeCookie) {
      // Show the modal
      $("#kerkowZipModal").modal("show");
    }
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
    this._denyZipButton.addEventListener("click", this._notNow.bind(this));
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
   * Fire the XHR request if user submits the form
   * @private
   */
  _notNow() {
    const value = "denied";
    const url = this._url + encodeURIComponent(value);
    // init loading indicator
    const indicator = new ButtonLoadingIndicator(this._denyZipButton);
    indicator.create();

    this.$emitter.publish("beforeSearch");

    this._client.abort();
    this._client.get(url, () => {
      // remove indicator
      indicator.remove();
      //remove modal
      $("#kerkowZipModal").modal("hide");
    });
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
      const result = JSON.parse(response);
      // remove indicator
      indicator.remove();
      if (result.postalcode) {
        // Fill all other zip inout fields
        Iterator.iterate(
          this._otherZipFields,
          (input) => (input.value = result.postalcode)
        );
        //Remove input field and show Success Message
        this._inputField.classList.add(this.options.hiddenClass);
        this._submitButton.classList.add(this.options.hiddenClass);
        this._modalFooter.classList.add(this.options.hiddenClass);
        this._successMessage.classList.remove(this.options.hiddenClass);
        this._failureMessage.classList.add(this.options.hiddenClass);
        this._toggleMessages("success");
        setTimeout(
          function () {
            $("#kerkowZipModal").modal("hide");
            setTimeout(
              function () {
                // Rebuild form
                this._inputField.classList.remove(this.options.hiddenClass);
                this._submitButton.classList.remove(this.options.hiddenClass);
                this._modalFooter.classList.remove(this.options.hiddenClass);
                this._successMessage.classList.add(this.options.hiddenClass);
              }.bind(this),
              500
            );
          }.bind(this),
          2000
        );
      } else {
        this._failureMessage.classList.remove(this.options.hiddenClass);
        this._toggleMessages("invalid");
      }

      this.$emitter.publish("afterSuggest");
    });
  }

  /**
   * Process the AJAX suggest and show results
   * @param {string} status
   * @private
   */
  _toggleMessages(status) {
    const noZipMessage = document.getElementById(
      this.options.zipShopNoZipMessageSelector
    );
    const invalidZipMessage = document.getElementById(
      this.options.zipShopInvalidZipMessage
    );

    if (status == "success") {
      if (noZipMessage || invalidZipMessage) {
        noZipMessage.classList.add(this.options.hiddenClass);
        noZipMessage.classList.remove(this.options.showClass);

        invalidZipMessage.classList.add(this.options.hiddenClass);
        invalidZipMessage.classList.remove(this.options.showClass);
      }
      return;
    }

    if (status == "invalid") {
      if (noZipMessage) {
        noZipMessage.classList.add(this.options.hiddenClass);
        noZipMessage.classList.remove(this.options.showClass);
      }
      if (noZipMessage) {
        invalidZipMessage.classList.remove(this.options.hiddenClass);
        invalidZipMessage.classList.add(this.options.showClass);
      }
    }
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
