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
    holidays: [
      "2020-12-24",
      "2020-12-25",
      "2020-12-26",
      "2020-12-31",
      "2021-01-01",
      "2021-03-08",
      "2021-04-02",
      "2021-04-05",
      "2021-05-01",
      "2021-05-13",
      "2021-05-24",
      "2021-10-03",
      "2021-12-24",
      "2021-12-25",
      "2021-12-26",
      "2021-12-31",
    ],
    defaultDate: null,
  };

  static holidays = {};

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

    this.options.minDate = this.el.dataset.mindate;
    this.options.defaultDate = this.el.dataset.mindate;
    const minDateObject = new Date(this.options.minDate);
    const maxDateObject = new Date(
      minDateObject.setMonth(minDateObject.getMonth() + 2)
    );
    this.options.maxDate =
      maxDateObject.getFullYear() +
      "-" +
      (maxDateObject.getMonth() + 1) +
      "-" +
      maxDateObject.getDate();
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
      if (date.getDay() == 1 || date.getDay() == 3 || date.getDay() == 5) {
        var dateString =
          date.getFullYear() +
          "-" +
          (date.getMonth() + 1) +
          "-" +
          date.getDate();
        if (!this.options.holidays.includes(dateString)) {
          deliverableDates.push(dateString);
        }
      }
    }

    return deliverableDates;
  }
}
