import Plugin from "src/plugin-system/plugin.class";
import DomAccess from "src/helper/dom-access.helper";
import Iterator from "src/helper/iterator.helper";

export default class PdpTabsPlugin extends Plugin {
  static options = {
    tabButtonSelector: ".js_tab_toggle",
    tabOpenClass: "js_tab_open",
    tabClosedClass: "js_tab_closed",
    hiddenClass: "d-none",
    openTabclass: "open_tab",
    closeActionSelector: "js_close_button",
    openActionSelector: "js_open_button",
    contentTextSelector: ".tab-content-text",
  };

  init() {
    try {
      this._tabButtons = this.el.querySelectorAll(
        this.options.tabButtonSelector
      );
    } catch (e) {
      return;
    }

    this._registerEvents();
  }

  /**
   * Register events
   * @private
   */
  _registerEvents() {
    Iterator.iterate(this._tabButtons, (button) => {
      button.addEventListener("click", this._toggleTab.bind(this, button));
    });
  }

  /**
   * Append EventListeners for the zip widget
   * in the offcanvas menu
   * @private
   */
  _toggleTab(button) {
    //check state
    if (button.classList.contains(this.options.tabOpenClass)) {
      this._closeTab(button);
    } else {
      this._openTab(button);
    }
  }
  /**
   * Append EventListeners for the zip widget
   * in the offcanvas menu
   * @private
   */
  _openTab(button) {
    // Get parent of button
    const tab = button.parentElement.parentElement;
    const openTabs = this.el.querySelectorAll(`.${this.options.openTabclass}`);
    const contentText = DomAccess.querySelector(
      tab,
      this.options.contentTextSelector
    );
    const closeButton = DomAccess.querySelector(
      tab,
      `.${this.options.closeActionSelector}`
    );
    const openButton = DomAccess.querySelector(
      tab,
      `.${this.options.openActionSelector}`
    );
    // Close all open tabs
    Iterator.iterate(openTabs, (tab) => {
      const tabButton = DomAccess.querySelector(
        tab,
        this.options.tabButtonSelector
      );
      this._closeTab(tabButton);
    });
    button.classList.add(this.options.tabOpenClass);
    button.classList.remove(this.options.tabClosedClass);
    tab.classList.add(this.options.openTabclass);
    contentText.classList.remove(this.options.hiddenClass);
    closeButton.classList.remove(this.options.hiddenClass);
    openButton.classList.add(this.options.hiddenClass);
  }

  /**
   * Append EventListeners for the zip widget
   * in the offcanvas menu
   * @private
   */
  _closeTab(button) {
    // Get parent of button
    const tab = button.parentElement.parentElement;
    const contentText = DomAccess.querySelector(
      tab,
      this.options.contentTextSelector
    );
    const openButton = DomAccess.querySelector(
      tab,
      `.${this.options.openActionSelector}`
    );
    const closeButton = DomAccess.querySelector(
      tab,
      `.${this.options.closeActionSelector}`
    );
    button.classList.remove(this.options.tabOpenClass);
    button.classList.add(this.options.tabClosedClass);
    contentText.classList.add(this.options.hiddenClass);
    tab.classList.remove(this.options.openTabclass);
    openButton.classList.remove(this.options.hiddenClass);
    closeButton.classList.add(this.options.hiddenClass);
  }
}
