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
      "2020-12-23",
      "2020-12-24",
      "2020-12-25",
      "2020-12-26",
      "2020-12-31",
      "2021-01-01",
      "2021-01-02",
      "2021-03-08",
      "2021-03-09",
      "2021-03-30",
      "2021-04-02",
      "2021-04-03",
      "2021-04-05",
      "2021-04-06",
      "2021-05-01",
      "2021-05-13",
      "2021-05-24",
      "2021-05-25",
      "2021-10-03",
      "2021-12-24",
      "2021-12-25",
      "2021-12-26",
      "2021-12-31",
      "2022-01-01",
    ],
    angel_holidays: [
      "2021-11-30",
      "2021-12-02",
      "2021-12-07",
      "2021-12-09",
      "2021-12-14",
      "2021-12-16",
      "2021-12-28",
      "2021-12-30",
      "2022-01-04",
      "2022-01-06",
      "2022-01-11",
      "2022-01-13",
      "2022-01-18",
      "2022-01-20",
      "2022-01-25",
      "2022-01-27",
    ],
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
    if (this.options.shippingMethod == "Angel") {
      this.options.holidays = this.options.holidays.concat(
        this.options.angel_holidays
      );
    }
    this.options.minDate = this.el.dataset.mindate;
    this.options.defaultDate = this.el.dataset.defaultdate;
    const minDateObject = new Date(this.options.minDate);
    const maxDateObject = new Date(
      minDateObject.setMonth(minDateObject.getMonth() + 2)
    );
    this.options.maxDate =
      maxDateObject.getFullYear() +
      "-" +
      ("0" + (maxDateObject.getMonth() + 1)).slice(-2) +
      "-" +
      ("0" + maxDateObject.getDate()).slice(-2);
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
      if (
        (this.options.shippingMethod == "Angel" &&
          (date.getDay() == 1 ||
            date.getDay() == 2 ||
            date.getDay() == 3 ||
            date.getDay() == 4 ||
            date.getDay() == 5)) ||
        (this.options.shippingMethod != "Angel" &&
          (date.getDay() == 2 ||
            date.getDay() == 3 ||
            date.getDay() == 4 ||
            date.getDay() == 5))
      ) {
        var dateString =
          date.getFullYear() +
          "-" +
          ("0" + (date.getMonth() + 1)).slice(-2) +
          "-" +
          ("0" + date.getDate()).slice(-2);
        if (!this.options.holidays.includes(dateString)) {
          deliverableDates.push(dateString);
        } else {
          if (this.options.shippingMethod != "Angel") {
            let nextDay = new Date(date.getTime());
            nextDay.setDate(nextDay.getDate() + 1);
            var nextDateString =
              nextDay.getFullYear() +
              "-" +
              ("0" + (nextDay.getMonth() + 1)).slice(-2) +
              "-" +
              ("0" + nextDay.getDate()).slice(-2);
            this.options.holidays.push(nextDateString);
          }
        }
      }
    }

    return deliverableDates;
  }
}
