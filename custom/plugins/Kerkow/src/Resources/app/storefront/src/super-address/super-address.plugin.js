import Plugin from "src/plugin-system/plugin.class";
import DomAccess from "src/helper/dom-access.helper";

export default class SuperAddressPlugin extends Plugin {
  static options = {
    inputSelector: ".js_gimme_junk",
    formSelector: ".register-form",

    hiddenClass: "for-bees",
  };

  init() {
    try {
      this._honeyInput = DomAccess.querySelector(
        this.el,
        this.options.inputSelector
      );
      this._form = DomAccess.querySelector(document, this.options.formSelector);
    } catch (e) {
      console.log(e);
      return;
    }
    this._honeyInput.classList.add(this.options.hiddenClass);
    this._registerEvents();
  }

  /**
   * Register events
   * @private
   */
  _registerEvents() {
    this._form.addEventListener("submit", this._checkForHoney.bind(this));
  }

  /**
   * Register events
   * @private
   */
  _checkForHoney(event) {
    // Check if the form field has content
    const value = this._honeyInput.value;
    if (value) {
      event.preventDefault();
      window.history.back();
    }
  }
}
