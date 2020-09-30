import OffcanvasMenuPlugin from "src/plugin/main-menu/offcanvas-menu.plugin";
import OffCanvas from "src/plugin/offcanvas/offcanvas.plugin";
import Iterator from "src/helper/iterator.helper";
import DomAccess from "src/helper/dom-access.helper";
import ButtonLoadingIndicator from "src/utility/loading-indicator/button-loading-indicator.util";
import ArrowNavigationHelper from "src/helper/arrow-navigation.helper";
import HttpClient from "src/service/http-client.service";
import DeviceDetection from "src/helper/device-detection.helper";
import ViewportDetection from "src/helper/viewport-detection.helper";

export default class OffcanvasMenuExtensionPlugin extends OffcanvasMenuPlugin {
  static options = {
    navigationUrl: window.router["frontend.menu.offcanvas"],
    position: "left",
    tiggerEvent: "click",

    additionalOffcanvasClass: "navigation-offcanvas",
    linkSelector: ".js-navigation-offcanvas-link",
    loadingIconSelector: ".js-navigation-offcanvas-loading-icon",
    linkLoadingClass: "is-loading",
    menuSelector: ".js-navigation-offcanvas",
    overlayContentSelector: ".js-navigation-offcanvas-overlay-content",
    initialContentSelector: ".js-navigation-offcanvas-initial-content",

    homeBtnClass: "is-home-link",
    backBtnClass: "is-back-link",
    transitionClass: "has-transition",
    overlayClass: ".navigation-offcanvas-overlay",
    placeholderClass: ".navigation-offcanvas-placeholder",

    forwardAnimationType: "forwards",
    backwardAnimationType: "backwards",

    // ToggleButton Elements
    menuOpenButton: ".js-offcanvas-open-button",
    menuCloseButton: ".js-offcanvas-close-button",

    // add elements for search widget
    searchForm: ".js-header-search-form",
    searchInputField: "input[type=search]",
    searchSubmitButton: "button[type=submit]",
    searchFormSearchResults: ".js-search-result",
    searchFormSearchResult: ".js-result",

    dataUrl: "data-url",
    hiddenClass: "d-none",

    // add Elements for account widget
    accountWidgetTriggerButton: ".js-account-menu-btn",
    accountDropdownMenuSelector: ".js-account-menu-dropdown",
    accountMenuOffcanvas: "account-menu-offcanvas",

    // add Elements for zip widget
    zipWidgetTriggerButton: ".js-zip-menu-btn",
    zipDropdownMenuSelector: ".js-zip-menu-dropdown",
    zipFormSelector: ".js-add-zip-form-header",
    zipMenuOffcanvas: "zip-menu-offcanvas",
    headerZipBodySelector: ".js-zip-form-container",
    headerZipRemoveLinkSelector: ".js-header-zip-widget-remove-link",
    zipShopZipRegex: /^01\d{2}[1-9]|0[2-9]\d{3}|[1-9]\d{3}[0-8]|[1-9]\d{3}(?<!9999)9$/,
  };
  /**
   * register triggers
   *
   * @private
   */
  _registerEvents() {
    this.el.removeEventListener(
      this.options.tiggerEvent,
      this._getLinkEventHandler.bind(this)
    );
    this.el.addEventListener(
      this.options.tiggerEvent,
      this._getLinkEventHandler.bind(this)
    );

    if (OffCanvas.exists()) {
      const offCanvasElements = OffCanvas.getOffCanvas();

      Iterator.iterate(offCanvasElements, (offcanvas) => {
        const links = offcanvas.querySelectorAll(this.options.linkSelector);
        Iterator.iterate(links, (link) => {
          OffcanvasMenuPlugin._resetLoader(link);
          link.addEventListener("click", (event) => {
            this._getLinkEventHandler(event, link);
          });
        });
        // Add Search suggest functionality
        this._appendSearchWidget(offcanvas);

        // Add EVent listener for account action
        this._appendAccountWidget(offcanvas);

        // Add EVent listener for account action
        this._appendZipWidget(offcanvas);
      });
    }
  }

  /**
   * Append EventListeners for the zip widget
   * in the offcanvas menu
   * @private
   */
  _appendZipWidget(offcanvas) {
    this._zipButtons = offcanvas.querySelectorAll(
      this.options.zipWidgetTriggerButton
    );
    const event = DeviceDetection.isTouchDevice() ? "touchstart" : "click";

    Iterator.iterate(this._zipButtons, (button) => {
      button.addEventListener(
        event,
        this._onClickZipMenuTrigger.bind(this, button)
      );
    });

    document.addEventListener(
      "Viewport/hasChanged",
      this._onViewportHasChanged.bind(this)
    );
  }

  /**
   * Append EventListeners for the account widget
   * in the offcanvas menu
   * @private
   */
  _appendAccountWidget(offcanvas) {
    this._accountButtons = offcanvas.querySelectorAll(
      this.options.accountWidgetTriggerButton
    );
    const event = DeviceDetection.isTouchDevice() ? "touchstart" : "click";

    Iterator.iterate(this._accountButtons, (button) => {
      button.addEventListener(
        event,
        this._onClickAccountMenuTrigger.bind(this, button)
      );
    });

    document.addEventListener(
      "Viewport/hasChanged",
      this._onViewportHasChanged.bind(this)
    );
  }

  /**
   * Append EventListeners for the search widget
   * in the offcanvas menu
   * @private
   */
  _appendSearchWidget(offcanvas) {
    this._searchForms = offcanvas.querySelectorAll(this.options.searchForm);
    Iterator.iterate(this._searchForms, (form) => {
      const inputEl = DomAccess.querySelector(
        form,
        this.options.searchInputField
      );
      const submitButton = DomAccess.querySelector(
        form,
        this.options.searchSubmitButton
      );
      // Add EventListeners
      this._navigationHelper = new ArrowNavigationHelper(
        inputEl,
        this.options.searchFormSearchResults,
        this.options.searchFormSearchResult,
        true
      );
      const url = form.getAttribute(this.options.dataUrl);
      const client = new HttpClient();
      inputEl.addEventListener(
        "input",
        this._handleInputEvent.bind(
          this,
          form,
          inputEl,
          submitButton,
          client,
          url
        )
      );
    });
    // add click event listener to body
    const event = DeviceDetection.isTouchDevice() ? "touchstart" : "click";
    document.body.addEventListener(event, this._onBodyClick.bind(this));
  }

  /**
   * On clicking the trigger item the account menu OffCanvas shall open
   * and the dropdown content may be fetched and shown inside the OffCanvas.
   * @param trigger
   * @private
   */
  _onClickAccountMenuTrigger(trigger) {
    // if the current viewport is not allowed return
    if (this._isInAllowedViewports() === false) return;
    const header = document.querySelector("header");
    var style = document.createElement("style");
    style.innerHTML =
      ".account-menu-offcanvas {top: " +
      header.offsetHeight +
      "px; height: " +
      (window.innerHeight - header.offsetHeight) +
      "px;} .modal-backdrop {top: " +
      header.offsetHeight +
      "px;}";
    header.appendChild(style);

    this._dropdown = DomAccess.querySelector(
      trigger.parentNode,
      this.options.accountDropdownMenuSelector
    );

    this._dropdown.classList.add(this.options.hiddenClass);

    OffCanvas.open(
      this._dropdown.innerHTML,
      null,
      this.options.position,
      true,
      OffCanvas.REMOVE_OFF_CANVAS_DELAY()
    );

    OffCanvas.setAdditionalClassName(this.options.accountMenuOffcanvas);

    this.$emitter.publish("onClickAccountMenuTrigger");
  }

  /**
   * On clicking the trigger item the account menu OffCanvas shall open
   * and the dropdown content may be fetched and shown inside the OffCanvas.
   * @param trigger
   * @private
   */
  _onClickZipMenuTrigger(trigger) {
    // if the current viewport is not allowed return
    if (this._isInAllowedViewports() === false) return;
    const header = document.querySelector("header");
    var style = document.createElement("style");
    style.innerHTML =
      ".zip-menu-offcanvas {top: " +
      header.offsetHeight +
      "px; height: " +
      (window.innerHeight - header.offsetHeight) +
      "px;} .modal-backdrop {top: " +
      header.offsetHeight +
      "px;}";
    header.appendChild(style);

    this._dropdown = DomAccess.querySelector(
      trigger.parentNode,
      this.options.zipDropdownMenuSelector
    );

    this._dropdown.classList.add(this.options.hiddenClass);

    OffCanvas.open(
      this._dropdown.innerHTML,
      null,
      this.options.position,
      true,
      OffCanvas.REMOVE_OFF_CANVAS_DELAY()
    );
    OffCanvas.setAdditionalClassName(this.options.zipMenuOffcanvas);
    const offcanvas = OffCanvas.getOffCanvas();

    const zipForm = DomAccess.querySelector(
      offcanvas[0],
      this.options.zipFormSelector
    );

    zipForm.addEventListener(
      "submit",
      this._onZipFormSubmission.bind(event, this, offcanvas[0])
    );

    const zipRemove = DomAccess.querySelector(
      offcanvas[0],
      this.options.headerZipRemoveLinkSelector
    );
    zipRemove.addEventListener(
      "click",
      this._onZipHeaderRemoveZip.bind(event, this, offcanvas[0])
    );
    this.$emitter.publish("onClickZipMenuTrigger");
  }

  /**
   * On submiting the form validate if the entered zip is valid and
   * if so trigger the actual query
   * @private
   */
  _onZipFormSubmission(This, offcanvas) {
    event.preventDefault();
    event.stopPropagation();
    const form = DomAccess.querySelector(offcanvas, "form");
    const inputField = DomAccess.querySelector(form, "input");
    const value = inputField.value;
    const url = form.getAttribute(This.options.dataUrl);
    const submitButton = DomAccess.querySelector(form, "button[type=submit]");
    if (!This._validateZip(value)) {
      inputField.classList.add("is-invalid");
      return;
    }
    inputField.classList.add("is-valid");
    inputField.classList.remove("is-invalid");

    This._queryZip(form, value, url, submitButton, offcanvas);

    This.$emitter.publish("handleZipFormSubmissionEvent", { value });
  }

  /**
   * Process the AJAX suggest and show results
   * @param {string} value
   * @private
   */
  _queryZip(form, value, url, submitButton, offcanvas) {
    const encodedUrl = url + encodeURIComponent(value);

    // init loading indicator
    const indicator = new ButtonLoadingIndicator(submitButton);
    indicator.create();

    this.$emitter.publish("beforeSearch");

    this._client.abort();
    this._client.get(encodedUrl, (response) => {
      // remove indicator
      indicator.remove();

      // attach zip query result to modal
      const body = DomAccess.querySelector(
        offcanvas,
        this.options.headerZipBodySelector
      );
      body.innerHTML = response;
      const newZipForm = DomAccess.querySelector(body, "form");
      newZipForm.addEventListener(
        "submit",
        this._onZipFormSubmission.bind(event, this, offcanvas)
      );

      const zipRemove = DomAccess.querySelector(
        body,
        this.options.headerZipRemoveLinkSelector
      );
      zipRemove.addEventListener(
        "click",
        this._onZipHeaderRemoveZip.bind(event, this, offcanvas)
      );

      this.$emitter.publish("afterSuggest");
    });
  }

  /**
   * Process the AJAX suggest and show results
   * @param {string} value
   * @private
   */
  _validateZip(value) {
    if (!value.match(this.options.zipShopZipRegex)) {
      return false;
    }
    return true;
  }

  /**
   * On clicking the remove link
   * @param trigger
   * @private
   */
  _onZipHeaderRemoveZip(This, offcanvas) {
    event.preventDefault();
    event.stopPropagation();
    const url = DomAccess.getAttribute(event.target, "data-url");

    This.$emitter.publish("beforeRemove");

    const body = DomAccess.querySelector(
      offcanvas,
      This.options.headerZipBodySelector
    );
    This._client.abort();
    This._client.get(url, (response) => {
      // attach result to header action
      body.innerHTML = response;

      const newZipForm = DomAccess.querySelector(body, "form");
      newZipForm.addEventListener(
        "submit",
        This._onZipFormSubmission.bind(event, This, offcanvas)
      );

      const zipRemove = DomAccess.querySelector(
        body,
        This.options.headerZipRemoveLinkSelector
      );
      zipRemove.addEventListener(
        "click",
        This._onZipHeaderRemoveZip.bind(event, This, body)
      );

      This.$emitter.publish("afterRemove");
    });
  }

  /**
   * If viewport has changed verify whether to close
   * an already open account menu offcanvas/dropwdown or not
   * @private
   */
  _onViewportHasChanged() {
    if (this._isInAllowedViewports() === false && OffCanvas.exists()) {
      OffCanvas.close();
    }

    if (this._dropdown) {
      if (this._isInAllowedViewports() === false) {
        this._dropdown.classList.remove(this.options.hiddenClass);
      } else {
        this._dropdown.classList.add(this.options.hiddenClass);
      }
    }

    this.$emitter.publish("onViewportHasChanged");
  }

  /**
   * Returns if the browser is in the allowed viewports
   * @returns {boolean}
   * @private
   */
  _isInAllowedViewports() {
    return ViewportDetection.isXS() || ViewportDetection.isSM();
  }

  /**
   * Fire the XHR request if user inputs a search term
   * @private
   */
  _handleInputEvent(form, inputEl, submitButton, client, url) {
    const value = inputEl.value;

    // stop search if minimum input value length has not been reached
    if (value.length < 3) {
      // further clear possibly existing search results
      this._clearSuggestResults();
      return;
    }

    this._suggest(value, form, submitButton, client, url);

    this.$emitter.publish("handleInputEvent", { value });
  }

  /**
   * Process the AJAX suggest and show results
   * @param {string} value
   * @private
   */
  _suggest(value, form, submitButton, client, url) {
    const encodedUrl = url + encodeURIComponent(value);

    // init loading indicator
    const indicator = new ButtonLoadingIndicator(submitButton);
    indicator.create();

    this.$emitter.publish("beforeSearch");

    client.abort();
    client.get(encodedUrl, (response) => {
      // remove existing search results popover first
      this._clearSuggestResults();

      // remove indicator
      indicator.remove();

      // attach search results to the DOM
      form.insertAdjacentHTML("beforeend", response);

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
      this.options.searchFormSearchResults
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
    if (e.target.closest(this.options.searchForm)) {
      return;
    }

    // early return if click target is the search result or any of it's children
    if (e.target.closest(this.options.searchFormSearchResults)) {
      return;
    }
    // remove existing search results popover
    //this._clearSuggestResults();

    this.$emitter.publish("onBodyClick");
    // remove existing search results popover
    this._clearSuggestResults();
  }

  _openMenu(event) {
    OffcanvasMenuPlugin._stopEvent(event);
    // Determine height of header to set the menu top position below it
    const header = document.querySelector("header");
    var style = document.createElement("style");
    style.innerHTML =
      ".navigation-offcanvas {top: " +
      header.offsetHeight +
      "px; height: " +
      (window.innerHeight - header.offsetHeight) +
      "px;} .modal-backdrop {top: " +
      header.offsetHeight +
      "px;}";
    header.appendChild(style);
    this._toggleMenuIcon();
    OffCanvas.open(
      this._content,
      this._registerEvents.bind(this),
      this.options.position
    );
    OffCanvas.setAdditionalClassName(this.options.additionalOffcanvasClass);

    this.$emitter.publish("openMenu");
  }

  /**
   * update the overlay content with the
   * subcategory navigation
   *
   * @param {string} animationType
   * @param {string} content
   * @private
   */
  _updateOverlay(animationType, content) {
    this._content = content;

    if (OffCanvas.exists()) {
      const offcanvasMenu = OffcanvasMenuPlugin._getOffcanvasMenu();

      // if there is no content present
      // insert the whole response into the offcanvas
      if (!offcanvasMenu) {
        this._replaceOffcanvasContent(content);
      }

      this._createOverlayElements();
      const currentContent = OffcanvasMenuPlugin._getOverlayContent(
        offcanvasMenu
      );
      const menuContent = OffcanvasMenuPlugin._getMenuContentFromResponse(
        content
      );

      this._replaceOffcanvasMenuContent(
        animationType,
        menuContent,
        currentContent
      );
      this._registerEvents();
    }

    this.$emitter.publish("updateOverlay");
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
