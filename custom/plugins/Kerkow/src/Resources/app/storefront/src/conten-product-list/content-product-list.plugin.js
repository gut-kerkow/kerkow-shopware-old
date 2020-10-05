import Plugin from "src/plugin-system/plugin.class";
import DeviceDetection from "src/helper/device-detection.helper";
import DomAccess from "src/helper/dom-access.helper";
import Iterator from "src/helper/iterator.helper";

export default class ContenProductListPlugin extends Plugin {
  static options = {
    expandTriggerSelector: ".js-expand-text",
    expandableTextContainerSelector: ".js-expandable-text-container",
    textExpandButton: ".js-expand",
    textCloseButton: ".js-close",
    blurButtonSelector: ".bottom-blur",

    hiddenClass: "d-none",
    openClass: "is-open",
  };

  init() {
    try {
      this._expandableTextEls = this.el.querySelectorAll(
        this.options.expandTriggerSelector
      );
      this._expandableTextContainer = DomAccess.querySelector(
        this.el,
        this.options.expandableTextContainerSelector
      );
      this._blurEl = DomAccess.querySelector(
        this.el,
        this.options.blurButtonSelector
      );
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
    const event = DeviceDetection.isTouchDevice() ? "click" : "click";
    Iterator.iterate(this._expandableTextEls, (el) => {
      el.addEventListener(event, this._HandleExpandTextEvent.bind(this));
    });
  }

  /**
   * Register events
   * @private
   */
  _HandleExpandTextEvent() {
    //check if text is already expanded
    if (
      !this._expandableTextContainer.classList.contains(this.options.openClass)
    ) {
      this._expandText();
    } else {
      this._closeText();
    }
  }

  /**
   * Toggle Icons
   *
   * @private
   */
  _expandText() {
    this._expandableTextContainer.classList.add(this.options.openClass);
    this._blurEl.classList.add(this.options.openClass);
    this._toggleExpandIcon();
  }

  /**
   * Toggle Icons
   *
   * @private
   */
  _closeText() {
    this._expandableTextContainer.classList.remove(this.options.openClass);
    this._blurEl.classList.remove(this.options.openClass);
    this._toggleExpandIcon();
  }

  /**
   * Toggle Icons
   *
   * @private
   */
  _toggleExpandIcon() {
    const expandButton = document.querySelector(this.options.textExpandButton);
    const closeButton = document.querySelector(this.options.textCloseButton);
    if (closeButton.classList.contains(this.options.hiddenClass)) {
      expandButton.classList.add(this.options.hiddenClass);
      closeButton.classList.remove(this.options.hiddenClass);
    } else {
      closeButton.classList.add(this.options.hiddenClass);
      expandButton.classList.remove(this.options.hiddenClass);
    }
  }
}
