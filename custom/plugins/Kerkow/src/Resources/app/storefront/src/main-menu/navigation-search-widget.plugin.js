import Plugin from "src/plugin-system/plugin.class";
import DomAccess from "src/helper/dom-access.helper";
import Debouncer from "src/helper/debouncer.helper";
import HttpClient from "src/service/http-client.service";
import ButtonLoadingIndicator from "src/utility/loading-indicator/button-loading-indicator.util";
import DeviceDetection from "src/helper/device-detection.helper";
import ArrowNavigationHelper from "src/helper/arrow-navigation.helper";
import Iterator from "src/helper/iterator.helper";

export default class NavigationSearchWidgetPlugin extends Plugin {
  static options = {
    searchWidgetSelector: ".js-search-form",
    searchWidgetResultSelector: ".js-search-result",
    searchWidgetResultItemSelector: ".js-result",
    searchWidgetInputFieldSelector: "input[type=search]",
    searchWidgetButtonFieldSelector: "button[type=submit]",
    searchWidgetUrlDataAttribute: "data-url",
    searchWidgetCollapseButtonSelector: ".js-search-toggle-btn",
    searchWidgetCollapseClass: "collapsed",

    searchWidgetDelay: 250,
    searchWidgetMinChars: 3,
  };

  init() {
    console.log("navsearch called");
    try {
      this._inputEls = document.querySelectorAll(
        this.options.searchWidgetInputFieldSelector
      );
      this._buttonEls = this.el.querySelectorAll(
        this.options.searchWidgetButtonFieldSelector
      );

      this._url = DomAccess.getAttribute(
        this.el,
        this.options.searchWidgetUrlDataAttribute
      );
    } catch (e) {
      console.log(e);
      console.log(e);
      return;
    }

    this._client = new HttpClient();

    // initialize the arrow navigation
    Iterator.iterate(this._inputEls, (el) => {
      this._navigationHelper = new ArrowNavigationHelper(
        el,
        this.options.searchWidgetResultSelector,
        this.options.searchWidgetResultItemSelector,
        true
      );
    });

    this._registerEvents();
  }

  /**
   * Register events
   * @private
   */
  _registerEvents() {
    // register opening triggers
    Iterator.iterate(this._inputEls, (el) => {
      console.log(el);
      el.addEventListener(
        "input",
        Debouncer.debounce(
          this._handleInputEvent.bind(this, el),
          this.options.searchWidgetDelay
        ),
        {
          capture: true,
          passive: true,
        }
      );
    });

    this.el.addEventListener("submit", this._handleSearchEvent.bind(this));

    // add click event listener to body
    const event = DeviceDetection.isTouchDevice() ? "touchstart" : "click";
    document.body.addEventListener(event, this._onBodyClick.bind(this));

    // add click event for mobile search
    this._registerInputFocus();
  }

  _handleSearchEvent(event) {
    const value = this._inputField.value;

    // stop search if minimum input value length has not been reached
    if (value.length !== 0) {
      return;
    }

    event.preventDefault();
    event.stopPropagation();
  }

  /**
   * Fire the XHR request if user inputs a search term
   * @private
   */
  _handleInputEvent(el) {
    console.log("inputevent triggered");
    const value = el.value;

    // stop search if minimum input value length has not been reached
    if (value.length < this.options.searchWidgetMinChars) {
      // further clear possibly existing search results
      this._clearSuggestResults();
      return;
    }

    this._suggest(value);

    this.$emitter.publish("handleInputEvent", { value });
  }

  /**
   * Process the AJAX suggest and show results
   * @param {string} value
   * @private
   */
  _suggest(value) {
    const url = this._url + encodeURIComponent(value);

    // init loading indicator
    const indicator = new ButtonLoadingIndicator(this._submitButton);
    indicator.create();

    this.$emitter.publish("beforeSearch");

    this._client.abort();
    this._client.get(url, (response) => {
      // remove existing search results popover first
      this._clearSuggestResults();

      // remove indicator
      indicator.remove();

      // attach search results to the DOM
      this.el.insertAdjacentHTML("beforeend", response);

      this.$emitter.publish("afterSuggest");
    });
  }

  /**
   * Remove existing search results popover from DOM
   * @private
   */
  _clearSuggestResults() {
    // reseet arrow navigation helper to enable form submit on enter
    this._navigationHelper.resetIterator();

    // remove all result popovers
    const results = document.querySelectorAll(
      this.options.searchWidgetResultSelector
    );
    Iterator.iterate(results, (result) => result.remove());

    this.$emitter.publish("clearSuggestResults");
  }

  /**
   * Close/remove the search results from DOM if user
   * clicks outside the form or the results popover
   * @param {Event} e
   * @private
   */
  _onBodyClick(e) {
    // early return if click target is the search form or any of it's children
    if (e.target.closest(this.options.searchWidgetSelector)) {
      return;
    }

    // early return if click target is the search result or any of it's children
    if (e.target.closest(this.options.searchWidgetResultSelector)) {
      return;
    }
    // remove existing search results popover
    //this._clearSuggestResults();

    this.$emitter.publish("onBodyClick");
  }

  /**
   * When the suggest is shown, trigger the focus on the input field
   * @private
   */
  _registerInputFocus() {
    try {
      this._toggleButton = DomAccess.querySelector(
        document,
        this.options.searchWidgetCollapseButtonSelector
      );
    } catch (e) {
      // something went wrong
      throw new Error(
        `the search-toggle-btn doesn´t own the "${this.options.searchWidgetCollapseButtonSelector}" class. So the search-input-field wont´t have an autofocus, on Mobile.`
      );
    }

    const event = DeviceDetection.isTouchDevice() ? "touchstart" : "click";
    this._toggleButton.addEventListener(event, () => {
      setTimeout(() => this._focusInput(), 0);
    });
  }

  /**
   * Sets the focus on the input field
   * @private
   */
  _focusInput() {
    if (
      !this._toggleButton.classList.contains(
        this.options.searchWidgetCollapseClass
      )
    ) {
      this._toggleButton.blur(); // otherwise iOS won´t focus the field.
      Iterator.iterate(this._inputEls, (el) => {
        el.setAttribute("tabindex", "-1");
        el.focus();
      });
    }

    this.$emitter.publish("focusInput");
  }
}
