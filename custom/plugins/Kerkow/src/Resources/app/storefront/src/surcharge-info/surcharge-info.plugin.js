import Plugin from "src/plugin-system/plugin.class";
import DeviceDetection from "src/helper/device-detection.helper";

export default class SurchargeInfo extends Plugin {
  static options = {
    buttonSelector: "#js-surcharge-info-selector",
    modalSelector: "#kerkowSurchargeInfo",
    surchargeBoxSelector: "[data-dvsn-product-option]",
  };

  init() {
    this._button = this.el.getElementsByTagName("span")[0];
    this._modal = document.querySelector(this.options.modalSelector);
    this._registerEvents();
  }

  /**
   * Register events
   * @private
   */
  _registerEvents() {
    const event = DeviceDetection.isTouchDevice() ? "touchstart" : "click";
    this._button.addEventListener(event, this._openSurchargeModal.bind(this));
  }
  /**
   * Register events
   * @private
   */
  _openSurchargeModal() {
    $(this.options.modalSelector).modal("show");
  }
}
