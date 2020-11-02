import OffCanvasCartPlugin from "src/plugin/offcanvas-cart/offcanvas-cart.plugin";
import NativeEventEmitter from "src/helper/emitter.helper";

export default class OffCanvasCartPluginExtension extends OffCanvasCartPlugin {
  static options = {
    removeProductTriggerSelector: ".js-offcanvas-cart-remove-product",
    changeProductQuantityTriggerSelector: ".js-offcanvas-cart-change-quantity",
    addPromotionTriggerSelector: ".js-offcanvas-cart-add-promotion",
    cartItemSelector: ".js-cart-item",
    cartPromotionSelector: ".js-offcanvas-cart-promotion",
    offcanvasPosition: "right",
    shippingContainerSelector: ".offcanvas-shipping-preference",
    shippingToggleSelector: ".js-toggle-shipping-selection",
    additionalOffcanvasClass: "cart-offcanvas",
    hiddenClass: "d-none",
  };

  /**
   * On clicking the trigger item the OffCanvas shall open and the current
   * cart template may be fetched and shown inside the OffCanvas
   *
   * @param {Event} event
   * @private
   */
  _onOpenOffCanvasCart(event) {
    event.preventDefault();
    const header = document.querySelector("header");
    var style = document.createElement("style");
    style.innerHTML =
      ".cart-offcanvas {top: " +
      header.offsetHeight +
      "px; height: " +
      (window.innerHeight - header.offsetHeight) +
      "px;} .modal-backdrop {top: " +
      header.offsetHeight +
      "px;}";
    header.appendChild(style);
    this.$emitter = new NativeEventEmitter();
    this.$emitter.publish("openMenu");
    this.openOffCanvas(window.router["frontend.cart.offcanvas"], false);
  }
}
