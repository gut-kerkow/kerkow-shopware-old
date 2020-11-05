import Plugin from "src/plugin-system/plugin.class";
import DomAccess from "src/helper/dom-access.helper";
import DeviceDetection from "src/helper/device-detection.helper";

export default class changeDeliveryDatePlugin extends Plugin {
  static options = {
    saveButtonSelector: ".js-save-delivery-time-slot",
    deliverySlotSelector: ".js-delivery-date-select",
    deliveryDateSelector: ".js-select-date-picker",
    deliveryDisplaySelector: ".product-detail-deliver-date",
    deliveryDateInputSelector: ".js-delivery-date-input-field",
    deliverySlotInputSelector: ".js-delivery-slot-input-field",
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
  _saveDates() {
    const deliverySlot = this._deliverySlot.value;
    const deliveryDate = new Date(this._deliveryDate.value);
    // Refresh delivery date display
    this._refreshDateDisplay(deliveryDate, deliverySlot);
    // Update form fields
    this._deliveryDateInput.value = this._deliveryDate.value;
    this._deliverySlotInput.value = deliverySlot;
    // Close Modal
    $("#confirmShippingDateModal").modal("hide");
  }
  /**
   * Save the dates
   * @private
   */
  _refreshDateDisplay(date, slot) {
    const dayString = this.options.weekdays[date.getDay()];
    const monthString = this.options.month[date.getMonth()];
    const slotString = slot == "18to20" ? "18 und 20 Uhr." : "19 und 21 Uhr.";
    const displayString =
      dayString +
      ", " +
      date.getDate() +
      ". " +
      monthString +
      " zwischen " +
      slotString;
    this._deliveryDisplay.innerHTML = displayString;
  }
}
