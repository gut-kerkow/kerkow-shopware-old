import Plugin from "src/plugin-system/plugin.class";
import DeviceDetection from "src/helper/device-detection.helper";
import DomAccess from "src/helper/dom-access.helper";
import Iterator from "src/helper/iterator.helper";

/**
 * This Plugin handles the
 * Content Pages Anchor display.
 */
export default class ContentFlyoutPlugin extends Plugin {
  static options = {
    /**
     * Hover debounce delay.
     */
    openDebounceTime: 125,
    closeDebounceTime: 1500,

    /**
     * Class to add when the flyout is active.
     */
    activeCls: "is-open",

    hiddenCls: "d-none",
    showCls: "d-block",

    /**
     * Id attribute for the flyout.
     * Should be the same as 'triggerDataAttribute'
     */
    flyoutIdDataAttribute: "data-flyout-content-id",

    /**
     * Trigger attribute for the opening elements.
     * Should be the same as 'flyoutIdDataAttribute'
     */
    triggerDataAttribute: "data-content-reference",

    /** The flyout selector */
    flyoutTabDataAttribute: "data-target",
    flyOutTabAttribute: "data-tab",
    tabTriggerLink: "a",
    tabActiveLinkCls: "active",
  };

  init() {
    this._debouncer = null;
    this._triggerEls = this.el.querySelectorAll(
      `[${this.options.triggerDataAttribute}]`
    );
    this._flyoutEls = this.el.querySelectorAll(
      `[${this.options.flyoutIdDataAttribute}]`
    );
    this._flyouts = this.el.querySelectorAll(
      `[${this.options.flyoutTabDataAttribute}]`
    );
    this._tabs = this.el.querySelectorAll(
      `[${this.options.flyOutTabAttribute}]`
    );
    this._registerEvents();
  }

  /**
   * registers all needed events
   *
   * @private
   */
  _registerEvents() {
    const clickEvent = DeviceDetection.isTouchDevice() ? "touchstart" : "click";
    const openEvent = DeviceDetection.isTouchDevice()
      ? "touchstart"
      : "mouseenter";
    const closeEvent = DeviceDetection.isTouchDevice()
      ? "touchstart"
      : "mouseleave";

    // register opening triggers
    Iterator.iterate(this._triggerEls, (el) => {
      const flyoutId = DomAccess.getDataAttribute(
        el,
        this.options.triggerDataAttribute
      );
      el.addEventListener(
        openEvent,
        this._openFlyoutById.bind(this, flyoutId, el)
      );
      el.addEventListener(closeEvent, () =>
        this._debounceClose(this._closeAllFlyouts)
      );
    });

    // register non touch events for open flyouts
    if (!DeviceDetection.isTouchDevice()) {
      Iterator.iterate(this._flyoutEls, (el) => {
        el.addEventListener("mousemove", () => this._clearDebounce());
        el.addEventListener("mouseleave", () =>
          this._debounceOpen(this._closeAllFlyouts)
        );
      });
    }

    // register change tab functionality
    if (!DeviceDetection.isTouchDevice()) {
      Iterator.iterate(this._flyouts, (el) => {
        const tabId = DomAccess.getDataAttribute(
          el,
          this.options.flyoutTabDataAttribute
        );
        const flyout = el.closest(".navigation-flyout");
        el.addEventListener(
          "mouseenter",
          this._changeTab.bind(this, el, tabId, flyout)
        );
      });
    }
  }

  /** chnages the tab of a flyout content menu on mouseover
   * @private
   */

  _changeTab(el, tabId, flyout) {
    const triggerEl = el.querySelector(this.options.tabTriggerLink);
    const tabEl = this.el.querySelector(
      `[${this.options.flyOutTabAttribute}='${tabId}']`
    );
    const tabs = flyout.querySelectorAll(
      `[${this.options.flyOutTabAttribute}]`
    );
    // hide all tabs
    Iterator.iterate(tabs, (el) => {
      el.classList.add(this.options.hiddenCls);
      el.classList.remove(this.options.showCls);
    });
    tabEl.classList.add(this.options.showCls);
    tabEl.classList.remove(this.options.hiddenCls);

    // Change active link
    const links = flyout.querySelectorAll(this.options.tabTriggerLink);
    Iterator.iterate(links, (el) => {
      el.classList.remove(this.options.tabActiveLinkCls);
    });
    triggerEl.classList.add(this.options.tabActiveLinkCls);
  }

  /**
   * opens a single flyout
   *
   * @param {Element} flyoutEl
   * @param {Element} triggerEl
   * @private
   */
  _openFlyout(flyoutEl, triggerEl) {
    if (!this._isOpen(triggerEl)) {
      this._closeAllFlyouts();
      flyoutEl.classList.add(this.options.activeCls);
      triggerEl.classList.add(this.options.activeCls);
    }

    this.$emitter.publish("openFlyout");
  }

  /**
   * closes a single flyout
   *
   * @param {Element} flyoutEl
   * @param {Element} triggerEl
   * @private
   */
  _closeFlyout(flyoutEl, triggerEl) {
    if (this._isOpen(triggerEl)) {
      flyoutEl.classList.remove(this.options.activeCls);
      triggerEl.classList.remove(this.options.activeCls);
    }

    this.$emitter.publish("closeFlyout");
  }

  /**
   * opens a flyout
   *
   * @param {String} flyoutId
   * @param {Element} triggerEl
   * @param {Event} event
   *
   * @private
   */
  _openFlyoutById(flyoutId, triggerEl, event) {
    const flyoutEl = this.el.querySelector(
      `[${this.options.flyoutIdDataAttribute}='${flyoutId}']`
    );

    if (flyoutEl) {
      this._debounceOpen(this._openFlyout, flyoutEl, triggerEl);
    }
    if (!this._isOpen(triggerEl)) {
      ContentFlyoutPlugin._stopEvent(event);
    }

    this.$emitter.publish("openFlyoutById");
  }

  /**
   * collect all flyouts
   * and close them
   *
   * @private
   */
  _closeAllFlyouts() {
    const flyoutEls = this.el.querySelectorAll(
      `[${this.options.flyoutIdDataAttribute}]`
    );
    Iterator.iterate(flyoutEls, (el) => {
      const triggerEl = this._retrieveTriggerEl(el);
      this._closeFlyout(el, triggerEl);
    });

    this.$emitter.publish("closeAllFlyouts");
  }

  /**
   *
   * @param {Element} el
   * @returns {Element}
   * @private
   */
  _retrieveTriggerEl(el) {
    const flyoutId = DomAccess.getDataAttribute(
      el,
      this.options.flyoutIdDataAttribute,
      false
    );
    return this.el.querySelector(
      `[${this.options.triggerDataAttribute}='${flyoutId}']`
    );
  }

  /**
   * returns if the element is opened or not
   *
   * @param {Element} el
   *
   * @returns {boolean}
   * @private
   */
  _isOpen(el) {
    return el.classList.contains(this.options.activeCls);
  }

  /**
   *
   * function to debounce menu
   * openings/closings
   *
   * @param {function} fn
   * @param {array} args
   *
   * @returns {Function}
   * @private
   */
  _debounceOpen(fn, ...args) {
    this._clearDebounce();
    this._debouncer = setTimeout(
      fn.bind(this, ...args),
      this.options.openDebounceTime
    );
  }

  /**
   *
   * function to debounce menu
   * openings/closings
   *
   * @param {function} fn
   * @param {array} args
   *
   * @returns {Function}
   * @private
   */
  _debounceClose(fn, ...args) {
    this._clearDebounce();
    this._debouncer = setTimeout(
      fn.bind(this, ...args),
      this.options.closeDebounceTime
    );
  }

  /**
   * clears the debounce timer
   *
   * @private
   */
  _clearDebounce() {
    clearTimeout(this._debouncer);
  }

  /**
   * prevents the passed event
   *
   * @param {Event} event
   * @private
   */
  static _stopEvent(event) {
    if (event && event.cancelable) {
      event.preventDefault();
      event.stopImmediatePropagation();
    }
  }
}
