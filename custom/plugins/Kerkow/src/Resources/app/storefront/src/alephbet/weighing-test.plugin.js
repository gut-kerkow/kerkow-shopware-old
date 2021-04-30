import Plugin from "src/plugin-system/plugin.class";
import DomAccess from "src/helper/dom-access.helper";

export default class WheighingTest extends Plugin {
  init() {
    this._elm = document.querySelector("[data-dvsn-product-option]");
    this._registerEvents();
  }

  /**
   * Register events
   * @private
   */
  _registerEvents() {
    var variant = false;
    const that = this;
    const tracking_adapter = false;
    const weighing_experiment = new AlephBet.Experiment({
      name: "Weighing markup", // the name of this experiment; required.
      tracking_adapter: tracking_adapter,
      variants: {
        // variants for this experiment; required.
        surcharge: {
          activate: function () {
            // activate function to execute if variant is selected
            const $elm = $("[data-dvsn-product-option]");
            $elm.find("input[type='checkbox']").each(function () {
              $(this).prop("checked", "true");
              $(this).trigger("change");
            });
            // Show surcharge info
            $(".product-detail-price-surcharge").show();
            // Track the view of a PDP with surcharge
            variant = "surcharge";
            if ($elm.length) {
              that._track("view_product", variant);
            }
          },
        },
        noSurcharge: {
          activate: function () {
            const $elm = $("[data-dvsn-product-option]");
            variant = "noSurcharge";
            if ($elm.length) {
              that._track("view_product", variant);
            }
          },
        },
      },
    });

    // creating a goal
    const buy_button_clicked_goal = new AlephBet.Goal("Clicked Add to cart");
    $(".btn-buy").on("click", function () {
      // The chosen variant will be tied to the goal automatically
      that._track("add_to_cart", variant);
      buy_button_clicked_goal.complete();
    });

    // creating a goal
    const order_button_clicked_goal = new AlephBet.Goal("Clicked Add to cart");
    $("#confirmFormSubmit").on("click", function () {
      // The chosen variant will be tied to the goal automatically
      that._track("buy", variant);
      order_button_clicked_goal.complete();
    });

    // alternatively - add the goal to the experiment
    weighing_experiment.add_goal(buy_button_clicked_goal);
    weighing_experiment.add_goal(order_button_clicked_goal);
  }

  /**
   * track
   * @private
   */
  _track(action, variant) {
    gtag("event", action, {
      event_category: "ab_testing",
      event_label: variant,
    });
  }
}
