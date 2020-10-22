import Plugin from "src/plugin-system/plugin.class";
import DomAccess from "src/helper/dom-access.helper";
import HttpClient from "src/service/http-client.service";
import Iterator from "src/helper/iterator.helper";

export default class AddressEditCheckPlugin extends Plugin {
  static options = {
    /**
     * Selector for the home zip
     */
    zipInputSelector: "js-check-address-zip",
    submitButtonSelector: "button[type=submit]",
    addressEditButtonSelector: "js-address-editor-edit",
    addressEditFormSelector: "#address-create-edit",
    addressCreateButtonSelector: "js-address-editor-create",
    addressCreateFormSelector: "#address-create-new",
    existingAddressSelector: "js-existing-address-check",

    changeModeAttribute: "data-change-shipping",
    addressModeAttribute: "data-address-mode",
    zipAttribute: "data-zip",
    dataUrl: "data-url",

    zipShopZipRegex: /\d{5}/,
    showClass: "d-block",
    hideClass: "d-none",
  };

  init() {
    try {
      this._zipInputFields = this.el.querySelectorAll(
        `.${this.options.zipInputSelector}`
      );
      this._submitButtons = this.el.querySelectorAll(
        this.options.submitButtonSelector
      );
      this._url = DomAccess.getAttribute(this.el, this.options.dataUrl);
      this._addressMode = DomAccess.getAttribute(
        this.el,
        this.options.addressModeAttribute
      );
      this._changeMode = DomAccess.getAttribute(
        this.el,
        this.options.changeModeAttribute
      );
      this._addressEditButton = DomAccess.querySelector(
        this.el,
        `.${this.options.addressEditButtonSelector}`
      );
      this._addressCreateButton = DomAccess.querySelector(
        this.el,
        `.${this.options.addressCreateButtonSelector}`
      );
      this._addressEditForm = DomAccess.querySelector(
        this.el,
        this.options.addressEditFormSelector
      );
      this._addressCreateForm = DomAccess.querySelector(
        this.el,
        this.options.addressCreateFormSelector
      );
      this._existingAdresses = this.el.querySelectorAll(
        `.${this.options.existingAddressSelector}`
      );
    } catch (e) {
      console.log("catch", e);
      return;
    }

    // Disable Submit Button by default
    Iterator.iterate(this._submitButtons, (button) => (button.disabled = true));

    // Check existing Adress for deliverability
    this._checkSavedAddresses();

    this._client = new HttpClient();

    this._registerEventListeners();
  }

  /**
   * Register events to handle opening the zip check modal
   * by clicking a defined trigger selector
   * @private
   */
  _registerEventListeners() {
    const event = "input";
    Iterator.iterate(this._zipInputFields, (el) =>
      el.addEventListener(event, this._checkZip.bind(this, el))
    );

    this._addressEditButton.addEventListener(
      "click",
      this._preCheckForm.bind(this, this._addressEditButton)
    );
    this._addressCreateButton.addEventListener(
      "click",
      this._preCheckForm.bind(this, this._addressCreateButton)
    );
  }

  /**
   * Function check the form if its prefilled
   * @private
   */
  _preCheckForm(el) {
    const isEdit = el.classList.contains(this.options.addressEditButtonSelector)
      ? true
      : false;
    const form = isEdit ? this._addressEditForm : this._addressCreateForm;
    const zipField = DomAccess.querySelector(
      form,
      `.${this.options.zipInputSelector}`
    );
    console.log(this);
    this._checkZip(zipField);
  }

  /**
   * Function to check the zip
   * @private
   */
  _checkZip(el) {
    Iterator.iterate(this._submitButtons, (button) => (button.disabled = true));
    const value = el.value;
    const url = this._url + encodeURIComponent(value);
    const mode = this._changeMode ? "shipping" : "billing";
    if (this._changeMode) {
      this._addressMode = "shipping";
    }
    console.log(mode, this._addressMode);
    if (value.match(this.options.zipShopZipRegex)) {
      if (this._addressMode == mode) {
        this._client.abort();
        this._client.get(url, (response) => {
          const result = JSON.parse(response);
          // remove indicator
          if (result.postalcode) {
            console.log(response);
            // Unlock continue button
            el.classList.remove("is-invalid");

            el.nextElementSibling.classList.remove(this.options.showClass);
            Iterator.iterate(
              this._submitButtons,
              (button) => (button.disabled = false)
            );
          } else {
            // Show Message and lock button
            el.classList.add("is-invalid");
            el.nextElementSibling.classList.add(this.options.showClass);
            Iterator.iterate(
              this._submitButtons,
              (button) => (button.disabled = true)
            );
          }
        });
      }
    }
  }

  /**
   * Function to check existing address
   * @private
   */
  _checkSavedAddresses() {
    const mode = this._changeMode ? "shipping" : "billing";
    if (this._changeMode) {
      this._addressMode = "shipping";
    }
    console.log(mode, this._addressMode);
    Iterator.iterate(this._existingAdresses, (form) => {
      // Get Button
      const button = DomAccess.querySelector(
        form,
        this.options.submitButtonSelector
      );

      if (this._addressMode == mode) {
        // Get Zip
        const zip = DomAccess.getAttribute(form, this.options.zipAttribute);
        const url = this._url + encodeURIComponent(zip);

        const client = new HttpClient();
        client.abort();
        client.get(url, (response) => {
          const result = JSON.parse(response);
          // remove indicator
          if (result.postalcode) {
            console.log(response);
            // Unlock button
            button.disabled = false;
            // Show Button
            button.classList.remove(this.options.hideClass);
          } else {
            button.disabled = true;
            button.classList.remove(this.options.showClass);
            button.classList.add(this.options.hideClass);
          }
        });
      } else {
        // release button if mode is shipping but billing address gets changed
        button.disabled = false;
        // Show Button
        button.classList.remove(this.options.hideClass);
      }
    });
  }
}
