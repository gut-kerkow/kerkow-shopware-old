import Plugin from "src/plugin-system/plugin.class";
import Iterator from "src/helper/iterator.helper";
import DomAccess from "src/helper/dom-access.helper";

export default class changePaymentPlugin extends Plugin {
  static options = {
    inputSelector: "input",
  };

  init() {
    try {
      this._inputFields = this.el.querySelectorAll(this.options.inputSelector);
    } catch (e) {
      console.log(e);
      return;
    }

    this._registerEvents();
  }

  /**
   * Register events
   * @private
   */
  _registerEvents() {
    // add click event listener to body
    Iterator.iterate(this._inputFields, (input) => {
      input.addEventListener("change", this._submitForm.bind(this));
    });
  }

  /**
   * Register events
   * @private
   */
  _submitForm() {
    this.el.submit();
  }
}
