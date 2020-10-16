import Plugin from "src/plugin-system/plugin.class";
import DomAccess from "src/helper/dom-access.helper";
import HttpClient from "src/service/http-client.service";

export default class CheckZip extends Plugin {
  static options = {
    /**
     * Selector for the home zip
     */
    billingAddressZipSelector: "js-check-billingAddress-zip",
    shippingAddressZipSelector: "js-check-shippingAddress-zip",
    differentShippingCheckboxSelector: ".js-different-shipping-checkbox",
    submitButton: "button[type=submit]",

    dataUrl: "data-url",
    zipShopZipRegex: /\d{5}/,
    showClass: "d-block",
  };

  init() {
    try {
      this._billingZip = DomAccess.querySelector(
        this.el,
        `.${this.options.billingAddressZipSelector}`
      );
      this._shippingZip = DomAccess.querySelector(
        document,
        `.${this.options.shippingAddressZipSelector}`
      );
      this._checkobox = DomAccess.querySelector(
        this.el,
        this.options.differentShippingCheckboxSelector
      );
      this._submitButton = DomAccess.querySelector(
        this.el,
        this.options.submitButton
      );
      this._url = DomAccess.getAttribute(this.el, this.options.dataUrl);
    } catch (e) {
      console.log("catch", e);
      return;
    }

    // Disable Submit Button by default
    this._submitButton.disabled = true;

    this._client = new HttpClient();

    // Initial Check if zip is already filled
    this._checkZip(this._billingZip);
    this._registerEventListeners();
  }

  /**
   * Register events to handle opening the zip check modal
   * by clicking a defined trigger selector
   * @private
   */
  _registerEventListeners() {
    const event = "input";
    this._billingZip.addEventListener(
      event,
      this._checkZip.bind(this, this._billingZip)
    );
    this._shippingZip.addEventListener(
      event,
      this._checkZip.bind(this, this._shippingZip)
    );
    this._checkobox.addEventListener(
      "change",
      this._toggleSubmitButton.bind(this, this._checkobox)
    );
  }

  /**
   * Function to check the zip
   * @private
   */
  _checkZip(el) {
    this._submitButton.disabled = true;
    const value = el.value;
    const field = el.classList.contains(this.options.billingAddressZipSelector)
      ? "billing"
      : "shipping";
    const url = this._url + encodeURIComponent(value);
    const mode = this._checkobox.checked ? "shipping" : "billing";
    if (value.match(this.options.zipShopZipRegex)) {
      if (field == mode) {
        this._client.abort();
        this._client.get(url, (response) => {
          const result = JSON.parse(response);
          // remove indicator
          if (result.postalcode) {
            // Unlock continue button
            el.classList.remove("is-invalid");

            el.nextElementSibling.classList.remove(this.options.showClass);
            this._submitButton.disabled = false;
          } else {
            // Show Message and lock button
            el.classList.add("is-invalid");
            el.nextElementSibling.classList.add(this.options.showClass);
            this._submitButton.disabled = true;
          }
        });
      }
    }
  }

  /**
   * Function to check if the shipping method gets changed
   * to tobble the submit button
   * @private
   */
  _toggleSubmitButton(el) {
    const mode = el.checked ? "shipping" : "billing";
    this._submitButton.disabled = true;
    this._shippingZip.classList.remove("is-invalid");
    this._shippingZip.nextElementSibling.classList.remove(
      this.options.showClass
    );
    this._billingZip.classList.remove("is-invalid");
    this._billingZip.nextElementSibling.classList.remove(
      this.options.showClass
    );

    if (mode == "shipping") {
      this._checkZip(this._shippingZip);
      return;
    }
    if (mode == "billing") {
      this._checkZip(this._billingZip);
      return;
    }
  }
}
