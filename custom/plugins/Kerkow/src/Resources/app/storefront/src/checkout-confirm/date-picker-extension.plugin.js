import DatePickerPlugin from "src/plugin/date-picker/date-picker.plugin";
import Locales from "flatpickr/dist/l10n/index";

export default class DatePickerExtensionPlugin extends DatePickerPlugin {
  static options = {
    dateFormat: "Y-m-d",
    altFormat: "j. F Y",
    altInput: true,
    time_24hr: true,
    enableTime: false,
    noCalendar: false,
    weekNumbers: false,
    allowInput: true,
    minDate: null,
    maxDate: null,
    locale: "default",
    inline: true,
    enable: null,
    defaultDate: null,
  };

  init() {
    let localeIndex = "default";
    if (this.options.locale.substring(0, 2) !== "en") {
      localeIndex = this.options.locale.substring(0, 2);
    }

    const options = {
      altFormat: this.getAltFormat(localeIndex),
      locale: Locales[localeIndex],
      time_24hr: Locales[localeIndex].time_24hr,
    };

    this.options.shippingMethod = this.el.dataset.method;
    this.options.minDate = this.el.dataset.mindate;
    this.options.defaultDate = this.el.dataset.defaultdate;
    this.options.json = JSON.parse(this.el.dataset.json);
    this.options.maxDate = this.options.json.endOfRange;
    this.options.weekdays = this.options.json.weekdays;
    this.options.holidays = this.options.json.holidays;

    this.options.enable = this._getDeliverableDays();

    flatpickr(this.el, {
      ...this.options,
      ...options,
    });
  }

  /**
   * Parse min date from
   *
   * @private
   */
  _getDeliverableDays() {
    const minDate = new Date(this.options.minDate);
    const maxDate = new Date(this.options.maxDate);
    var deliverableDates = [];
    for (
      var date = minDate;
      date <= maxDate;
      date.setDate(date.getDate() + 1)
    ) {
      var weekday = date
        .toLocaleString("en-us", { weekday: "long" })
        .toLowerCase();
      if (this.options.weekdays.includes(weekday)) {
        var dateString =
          date.getFullYear() +
          "-" +
          ("0" + (date.getMonth() + 1)).slice(-2) +
          "-" +
          ("0" + date.getDate()).slice(-2);
        if (!this.options.holidays.includes(dateString)) {
          deliverableDates.push(dateString);
        }
      }
    }

    return deliverableDates;
  }
}
