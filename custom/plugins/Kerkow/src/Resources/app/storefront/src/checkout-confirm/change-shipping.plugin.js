import Plugin from "src/plugin-system/plugin.class";
import Iterator from "src/helper/iterator.helper";

export default class changeShippingPlugin extends Plugin {
  static options = {
    inputSelector: "input[type=radio]",
  };

  init() {
    try {
      this._inputFields = this.el.querySelectorAll(this.options.inputSelector);
    } catch (e) {
      return;
    }

    this._registerEvents();
    this._selectShippingIfOnlyOne();
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

  _selectShippingIfOnlyOne() {
    if (this._inputFields.length <= 1) {
      if (!this._inputFields[0].checked) {
        this._inputFields[0].checked = true;
        this.el.submit();
      }
    }
  }
}
