import Plugin from "src/plugin-system/plugin.class";
import DomAccess from "src/helper/dom-access.helper";
import Iterator from "src/helper/iterator.helper";
import DeviceDetection from "src/helper/device-detection.helper";

export default class AnimalPartsPlugin extends Plugin {
  static options = {
    partsAreaSelector: "#parts",
    partsElementSelector: "path",
    partsJsonSelector: "#animal-parts-translations",
    animalTypeSelector: "data-animal-type",
    partsOverlaySelector: "parts-info-overlay",
    partsOverlayHeadlineClass: "info-headline",
    partsOverlayContentClass: "info-content",
    partsOverlayLinkClass: "info-link",
    partsMobileInstructorSelector: ".parts-instruction-mobile",
    partsInstructorSelector: ".parts-instruction",
    partsIsActiveClass: "is-active",
    hiddenClass: "d-none",
  };

  init() {
    try {
      this._partsArea = DomAccess.querySelector(
        this.el,
        this.options.partsAreaSelector
      );

      this._partsEls = this._partsArea.querySelectorAll(
        this.options.partsElementSelector
      );
      const partsJson = DomAccess.querySelector(
        document,
        this.options.partsJsonSelector
      );
      this._partsTranslations = JSON.parse(partsJson.innerHTML);
      this._animalType = this.el.getAttribute(this.options.animalTypeSelector);
      this._instruction = DomAccess.querySelector(
        document,
        this.options.partsInstructorSelector
      );
      this._mobileInstruction = DomAccess.querySelector(
        document,
        this.options.partsMobileInstructorSelector
      );
    } catch (e) {
      console.log(e);
      return;
    }
    // hide mobile instruction if is desktop device-detection
    if (DeviceDetection.isTouchDevice()) {
      this._instruction.classList.add(this.options.hiddenClass);
      this._mobileInstruction.classList.remove(this.options.hiddenClass);
    } else {
      this._instruction.classList.remove(this.options.hiddenClass);
      this._mobileInstruction.classList.add(this.options.hiddenClass);
    }
    this._registerEvents();
  }

  /**
   * Register events
   * @private
   */
  _registerEvents() {
    // register opening triggers
    Iterator.iterate(this._partsEls, (part) => {
      part.addEventListener("click", this._handlePartInfoEvent.bind(this));
    });
    // add click event listener to body
    const event = DeviceDetection.isTouchDevice() ? "touchstart" : "click";
    document.body.addEventListener(event, this._onBodyClick.bind(this));
  }

  /**
   * Register events
   * @private
   */
  _handlePartInfoEvent() {
    //fade out instructions
    this._fadeOutEffect(this._mobileInstruction);
    this._fadeOutEffect(this._instruction);
    const id = event.target.getAttribute("id");
    // Find translations
    const partContent = this._partsTranslations["animals"][this._animalType][
      id
    ];
    this._attachInfoOverlay(partContent, event);
  }

  /**
   * Register events
   * @private
   */
  _attachInfoOverlay(partContent, event) {
    //remove existing overlays
    this._removeInfoOverlays();
    event.target.classList.add(this.options.partsIsActiveClass);

    const headline = partContent["headline"];
    const content = partContent["content"];
    const link = partContent["link"];

    const infoOverlay = document.createElement("div");
    infoOverlay.classList.add(this.options.partsOverlaySelector);

    const headlineEl = document.createElement("p");
    headlineEl.classList.add(this.options.partsOverlayHeadlineClass);
    headlineEl.innerHTML = headline;

    const contentEl = document.createElement("p");
    contentEl.classList.add(this.options.partsOverlayContentClass);

    contentEl.innerHTML = content;

    const linkEl = document.createElement("p");
    linkEl.classList.add(this.options.partsOverlayLinkClass);

    linkEl.innerHTML = link;

    infoOverlay.appendChild(headlineEl);
    infoOverlay.appendChild(contentEl);
    infoOverlay.appendChild(linkEl);

    this.el.appendChild(infoOverlay);
  }

  /**
   * Register events
   * @private
   */
  _removeInfoOverlays() {
    const overlays = this.el.querySelectorAll(
      `.${this.options.partsOverlaySelector}`
    );
    Iterator.iterate(this._partsEls, (part) =>
      part.classList.remove(this.options.partsIsActiveClass)
    );
    Iterator.iterate(overlays, (overlay) => overlay.remove());
  }

  /**
   * Close/remove the search results from DOM if user
   * clicks outside the form or the results popover
   * @param {Event} e
   * @private
   */
  _onBodyClick(e) {
    // remove infoOverlays if click outside of animal
    if (e.target.nodeName != "path") {
      this._removeInfoOverlays();
    }

    this.$emitter.publish("onBodyClick");
  }

  /**
   * Close/remove the search results from DOM if user
   * clicks outside the form or the results popover
   * @private
   */
  _fadeOutEffect(element) {
    var fadeTarget = element;
    var fadeEffect = setInterval(function () {
      if (!fadeTarget.style.opacity) {
        fadeTarget.style.opacity = 1;
      }
      if (fadeTarget.style.opacity > 0) {
        fadeTarget.style.opacity -= 0.1;
      } else {
        element.remove();
        clearInterval(fadeEffect);
      }
    }, 30);
  }
}
