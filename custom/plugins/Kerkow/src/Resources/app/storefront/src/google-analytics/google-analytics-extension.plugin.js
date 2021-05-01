import GoogleAnalyticsPlugin from "../../../../../../../../../vendor/shopware/storefront/Resources/app/storefront/src/plugin/google-analytics/google-analytics.plugin";
import AddToCartEvent from "src/plugin/google-analytics/events/add-to-cart.event";
import AddToCartByNumberEvent from "src/plugin/google-analytics/events/add-to-cart-by-number.event";
import BeginCheckoutEvent from "src/plugin/google-analytics/events/begin-checkout.event";
import BeginCheckoutOnCartEvent from "src/plugin/google-analytics/events/begin-checkout-on-cart.event";
import CheckoutProgressEvent from "src/plugin/google-analytics/events/checkout-progress.event";
import LoginEvent from "src/plugin/google-analytics/events/login.event";
import PurchaseEvent from "src/plugin/google-analytics/events/purchase.event";
import RemoveFromCartEvent from "src/plugin/google-analytics/events/remove-from-cart.event";
import SearchAjaxEvent from "src/plugin/google-analytics/events/search-ajax.event";
import SignUpEvent from "src/plugin/google-analytics/events/sign-up.event";
import ViewItemEvent from "src/plugin/google-analytics/events/view-item.event";
import ViewItemListEvent from "src/plugin/google-analytics/events/view-item-list.event";
import ViewSearchResultsEvent from "src/plugin/google-analytics/events/view-search-results";
import WheighingTest from "../alephbet/weighing-test.plugin";

export default class GoogleAnalyticsPluginExtension extends GoogleAnalyticsPlugin {
  registerDefaultEvents() {
    this.registerEvent(AddToCartEvent);
    this.registerEvent(AddToCartByNumberEvent);
    this.registerEvent(BeginCheckoutEvent);
    this.registerEvent(BeginCheckoutOnCartEvent);
    this.registerEvent(CheckoutProgressEvent);
    this.registerEvent(LoginEvent);
    this.registerEvent(PurchaseEvent);
    this.registerEvent(RemoveFromCartEvent);
    this.registerEvent(SearchAjaxEvent);
    this.registerEvent(SignUpEvent);
    this.registerEvent(ViewItemEvent);
    this.registerEvent(ViewItemListEvent);
    this.registerEvent(ViewSearchResultsEvent);
    // Custom Events
    this.registerEvent(WheighingTest);
  }
}
