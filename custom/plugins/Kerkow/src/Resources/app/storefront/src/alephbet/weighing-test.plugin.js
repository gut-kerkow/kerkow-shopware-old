import Plugin from "src/plugin-system/plugin.class";
import DomAccess from "src/helper/dom-access.helper";

export default class WheighingTest extends Plugin {
  static options = {
    track_url:
      "https://r2miso5e6e.execute-api.eu-central-1.amazonaws.com/prod/track",
    namespace: "alephbet",
  };

  init() {
    this._elm = document.querySelector("[data-dvsn-product-option]");
    this._registerEvents();
  }

  /**
   * Register events
   * @private
   */
  _registerEvents() {
    this._weighing_experiment = new AlephBet.Experiment({
      name: "Weighing markup", // the name of this experiment; required.
      tracking_adapter: new AlephBet.LamedAdapter(
        this.options.track_url,
        this.options.namespace
      ),
      variants: {
        // variants for this experiment; required.
        markup: {
          activate: function () {
            // activate function to execute if variant is selected
            const $elm = $("[data-dvsn-product-option]");
            $elm.find("input[type='checkbox']").each(function () {
              $(this).prop("checked", "true");
              $(this).trigger("change");
            });
            // Show surcharge info
            $(".product-detail-price-surcharge").show();
            console.log("markup");
          },
        },
        noneMarkup: {
          activate: function () {},
        },
      },
    });

    // creating a goal
    const buy_button_clicked_goal = new AlephBet.Goal("Clicked Add to cart");
    $(".btn-buy").on("click", function () {
      // The chosen variant will be tied to the goal automatically
      buy_button_clicked_goal.complete();
    });

    // creating a goal
    const order_button_clicked_goal = new AlephBet.Goal("Clicked Add to cart");
    $("#confirmFormSubmit").on("click", function () {
      // The chosen variant will be tied to the goal automatically
      order_button_clicked_goal.complete();
    });

    // alternatively - add the goal to the experiment
    this._weighing_experiment.add_goal(buy_button_clicked_goal);
    this._weighing_experiment.add_goal(order_button_clicked_goal);
  }
}
