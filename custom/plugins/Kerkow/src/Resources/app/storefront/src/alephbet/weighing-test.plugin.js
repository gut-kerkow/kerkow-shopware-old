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
    var chosen_variant = false;
    const that = this;
    const tracking_adapter = {
      experiment_start: function (experiment, variant) {
        that._track(experiment.name + "_started", variant);
      },
      goal_complete: function (experiment, variant, event_name, _props) {
        that._track(event_name, variant);
      },
    };
    const weighing_experiment = new AlephBet.Experiment({
      name: "surcharge", // the name of this experiment; required.
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
            chosen_variant = "surcharge";
          },
        },
        noSurcharge: {
          activate: function () {
            const $elm = $("[data-dvsn-product-option]");
            chosen_variant = "noSurcharge";
          },
        },
      },
      tracking_adapter: tracking_adapter,
    });

    // creating a goal
    const buy_button_clicked_goal = new AlephBet.Goal("Clicked Add to cart");
    $(".btn-buy").on("click", function () {
      // The chosen variant will be tied to the goal automatically
      buy_button_clicked_goal.complete();
    });

    // creating a goal
    const order_button_clicked_goal = new AlephBet.Goal("Purchase");
    $("#confirmFormSubmit").on("click", function () {
      // The chosen variant will be tied to the goal automatically
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
  _track(action, chosen_variant) {
    gtag("event", action, {
      event_category: "ab_test",
      event_label: chosen_variant,
    });
  }
}
