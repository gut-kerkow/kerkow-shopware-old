import Plugin from "src/plugin-system/plugin.class";
import DomAccess from "src/helper/dom-access.helper";
import DeviceDetection from "src/helper/device-detection.helper";

export default class ChangeDeliveryDatePlugin extends Plugin {
  static options = {
    saveButtonSelector: ".js-save-delivery-time-slot",
    deliverySlotSelector: ".js-delivery-date-select",
    deliveryDateSelector: ".js-select-date-picker",
    deliveryDisplaySelector: ".product-detail-deliver-date",
    deliveryDateInputSelector: ".js-delivery-date-input-field",
    deliverySlotInputSelector: ".js-delivery-slot-input-field",
    deliveryForm: "#changeDeliveryDate",
    deliveryFormDateInput: "#js_delivery_date_input",
    deliveryFormSlotInput: "#js_delivery_slot_input",
    weekdays: [
      "Sonntag",
      "Montag",
      "Dienstag",
      "Mittwoch",
      "Donnerstag",
      "Freitag",
      "Samstag",
    ],
    month: [
      "Januar",
      "Februar",
      "März",
      "April",
      "Mai",
      "Juni",
      "Juli",
      "August",
      "September",
      "Oktober",
      "November",
      "Dezember",
    ],
  };

  init() {
    try {
      this._saveButton = DomAccess.querySelector(
        this.el,
        this.options.saveButtonSelector
      );
      this._deliverySlot = DomAccess.querySelector(
        this.el,
        this.options.deliverySlotSelector
      );
      this._deliveryDate = DomAccess.querySelector(
        this.el,
        this.options.deliveryDateSelector
      );
      this._deliveryDisplay = DomAccess.querySelector(
        this.el,
        this.options.deliveryDisplaySelector
      );
      this._deliveryDateInput = DomAccess.querySelector(
        document,
        this.options.deliveryDateInputSelector
      );
      this._deliverySlotInput = DomAccess.querySelector(
        document,
        this.options.deliverySlotInputSelector
      );
      this._form = DomAccess.querySelector(this.el, this.options.deliveryForm);
      this._formDateInput = DomAccess.querySelector(
        this.el,
        this.options.deliveryFormDateInput
      );
      this._formSlotInput = DomAccess.querySelector(
        this.el,
        this.options.deliveryFormSlotInput
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
    const event = DeviceDetection.isTouchDevice() ? "touchstart" : "click";
    this._saveButton.addEventListener(event, this._saveDates.bind(this));
  }

  /**
   * Save the dates
   * @private
   */
  _saveDates(event) {
    event.preventDefault();
    const deliverySlot = this._deliverySlot.value;
    const deliveryDate = new Date(this._deliveryDate.value);

    // Update the Form Fields
    this._formDateInput.value = this._deliveryDate.value;
    this._formSlotInput.value = deliverySlot;
    this._form.submit();
  }
}
