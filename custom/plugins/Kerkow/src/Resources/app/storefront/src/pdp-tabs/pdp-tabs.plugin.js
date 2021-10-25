import Plugin from "src/plugin-system/plugin.class";
import DomAccess from "src/helper/dom-access.helper";
import Iterator from "src/helper/iterator.helper";

export default class PdpTabsPlugin extends Plugin {
  static options = {
    tabButtonSelector: ".js_tab_button",
    hiddenClass: "d-none",
    openclass: "open",
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
    if (button.classList.contains(this.options.openActionSelector)) {
      this._openTab(button);
    } else {
      this._closeTab(button);
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
    // Close all open tabs
    Iterator.iterate(openTabs, (tab) => {
      const tabButton = DomAccess.querySelector(
        tab,
        this.options.tabButtonSelector
      );
      this._closeTab(tabButton);
    });
    contentText.classList.add(this.options.openclass);
    tab.classList.add(this.options.openTabclass);
    contentText.classList.remove(this.options.hiddenClass);
    button.classList.add(this.options.hiddenClass);
    closeButton.classList.remove(this.options.hiddenClass);
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
    contentText.classList.remove(this.options.openclass);
    contentText.classList.add(this.options.hiddenClass);
    tab.classList.remove(this.options.openTabclass);

    button.classList.add(this.options.hiddenClass);
    openButton.classList.remove(this.options.hiddenClass);
  }
}
