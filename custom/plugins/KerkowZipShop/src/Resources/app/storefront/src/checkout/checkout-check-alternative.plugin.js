import Plugin from "src/plugin-system/plugin.class";
import DomAccess from "src/helper/dom-access.helper";
import DeviceDetection from "src/helper/device-detection.helper";

export default class CheckoutCheckAlternative extends Plugin {
  static options = {
    /**
     * Selector for the link to check the alternative
     */
    checkAlternativeLinkSelector: ".js_check_alternative_zip",

    /**
     * ID for the modal
     */
    modalSelector: "#kerkowZipModal",
  };

  init() {
    try {
      this._link = DomAccess.querySelector(
        this.el,
        this.options.checkAlternativeLinkSelector
      );
      this._modal = DomAccess.querySelector(
        document,
        this.options.modalSelector
      );
    } catch (e) {
      console.log("catch", e);
      return;
    }

    this._registerEventListeners();
  }

  /**
   * Register events to handle opening the zip check modal
   * by clicking a defined trigger selector
   * @private
   */
  _registerEventListeners() {
    const event = DeviceDetection.isTouchDevice() ? "touchstart" : "click";
    this._link.addEventListener(
      event,
      this._onClickCheckAlternativeZip.bind(this)
    );
  }

  /**
   * Function to open the modal
   * @private
   */
  _onClickCheckAlternativeZip(e) {
    if (e.cancelable) {
      e.preventDefault();
    }
    // Show the modal
    $("#kerkowZipModal").modal("show");
  }
}
