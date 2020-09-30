import OffCanvasCartPlugin from "src/plugin/offcanvas-cart/offcanvas-cart.plugin";

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
    // ToggleButton Elements
    menuOpenButton: ".js-offcanvas-open-button",
    menuCloseButton: ".js-offcanvas-close-button",
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
    this._toggleMenuIcon();
    this.openOffCanvas(window.router["frontend.cart.offcanvas"], false);
  }

  /**
   * Toggle Icons
   *
   * @private
   */
  _toggleMenuIcon() {
    const menuButton = document.querySelector(this.options.menuOpenButton);
    const closeButton = document.querySelector(this.options.menuCloseButton);
    if (closeButton.classList.contains(this.options.hiddenClass)) {
      menuButton.classList.add(this.options.hiddenClass);
      closeButton.classList.remove(this.options.hiddenClass);
    } else {
      closeButton.classList.add(this.options.hiddenClass);
      menuButton.classList.remove(this.options.hiddenClass);
    }
    // add click event listener to body
    closeButton.addEventListener("click", this._toggleMenuIcon.bind(this));
  }
}
