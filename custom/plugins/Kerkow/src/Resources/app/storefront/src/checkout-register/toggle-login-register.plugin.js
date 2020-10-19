import Plugin from "src/plugin-system/plugin.class";
import DomAccess from "src/helper/dom-access.helper";
import DeviceDetection from "src/helper/device-detection.helper";

export default class toggleLoginRegisterPlugin extends Plugin {
  static options = {
    loginButtonSelector: "js-login-toggle",
    registerButtonSelector: "js-register-collapse",

    loginCollapseSelector: "#loginCollapse",
    registerCollapseSelector: "#registerCollapse",
    formSelector: "form",

    hiddenClass: "d-none",
    validatedClass: "was-validated",
  };

  init() {
    try {
      this._loginButton = DomAccess.querySelector(
        this.el,
        `.${this.options.loginButtonSelector}`
      );
      this._registerButton = DomAccess.querySelector(
        this.el,
        `.${this.options.registerButtonSelector}`
      );
      this._loginCollapse = DomAccess.querySelector(
        this.el,
        this.options.loginCollapseSelector
      );
      this._registerCollapse = DomAccess.querySelector(
        this.el,
        this.options.registerCollapseSelector
      );
    } catch (e) {
      console.log(e);
      return;
    }

    this._onValidationEventHandler();

    this._registerEvents();
  }

  /**
   * Register events
   * @private
   */
  _registerEvents() {
    // add click event listener to body
    const event = DeviceDetection.isTouchDevice() ? "touchstart" : "click";
    this._loginButton.addEventListener(
      event,
      this._eventHandler.bind(this, this._loginButton)
    );
    this._registerButton.addEventListener(
      event,
      this._eventHandler.bind(this, this._registerButton)
    );
  }

  /**
   * Handle the click event
   * @private
   */
  _eventHandler(button) {
    const showButton = button.classList.contains(
      this.options.loginButtonSelector
    )
      ? this._registerButton
      : this._loginButton;

    const hideButton = button.classList.contains(
      this.options.loginButtonSelector
    )
      ? this._loginButton
      : this._registerButton;

    const hideCollapse = button.classList.contains(
      this.options.loginButtonSelector
    )
      ? this._registerCollapse
      : this._loginCollapse;

    const showCollapse = button.classList.contains(
      this.options.loginButtonSelector
    )
      ? this._loginCollapse
      : this._registerCollapse;

    this._toggleCollapse(showButton, hideButton, showCollapse, hideCollapse);
  }

  /**
   * Handle the click event
   * @private
   */
  _onValidationEventHandler() {
    const loginForm = DomAccess.querySelector(
      this._loginCollapse,
      this.options.formSelector
    );
    const registerForm = DomAccess.querySelector(
      this._registerCollapse,
      this.options.formSelector
    );

    if (loginForm.classList.contains(this.options.validatedClass)) {
      console.log("toggle login");
      const showButton = this._registerButton;
      const hideButton = this._loginButton;
      const showCollapse = this._loginCollapse;
      const hideCollapse = this._registerCollapse;
      this._toggleCollapse(showButton, hideButton, showCollapse, hideCollapse);
    } else if (registerForm.classList.contains(this.options.validatedClass)) {
      var itsLogin = false;
      const showButton = this._loginButton;
      const hideButton = this._registerButton;
      const showCollapse = this._registerCollapse;
      const hideCollapse = this._loginCollapse;
      this._toggleCollapse(showButton, hideButton, showCollapse, hideCollapse);
    } else {
      // Initially Show Login
      $(this._loginCollapse).collapse("show");
      this._loginButton.classList.add(this.options.hiddenClass);
      return;
    }
  }

  /**
   * Toggle Collapse
   * @private
   */
  _toggleCollapse(showButton, hideButton, showCollapse, hideCollapse) {
    console.log("hide", hideCollapse);
    console.log("show", showCollapse);
    // Show Button
    hideButton.classList.add(this.options.hiddenClass);
    $(showCollapse).collapse("show");
    // Hide Button

    setTimeout(() => {
      // Toggle Collapse
      showButton.classList.remove(this.options.hiddenClass);
      $(hideCollapse).collapse("hide");
    }, 300);
  }
}
