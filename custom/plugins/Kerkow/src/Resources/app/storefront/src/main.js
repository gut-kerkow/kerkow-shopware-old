// Import all necessary Storefront plugins and scss files
import SearchFlyoutMenuPlugin from "./main-menu/search-flyout-menu.plugin";
import NavigationSearchWidgetPlugin from "./main-menu/navigation-search-widget.plugin";
import OffcanvasMenuExtensionPlugin from "./main-menu/offcanvas-menu-extension.plugin";
import OffCanvasCartPluginExtension from "./offcanvas-cart/offcanvas-cart-extension.plugin";
import ContenProductListPlugin from "./conten-product-list/content-product-list.plugin";
import toggleLoginRegisterPlugin from "./checkout-register/toggle-login-register.plugin";
import changePaymentPlugin from "./checkout-confirm/change-payment.plugin";
import changeShippingPlugin from "./checkout-confirm/change-shipping.plugin";
import DatePickerExtensionPlugin from "./checkout-confirm/date-picker-extension.plugin";
import ChangeDeliveryDatePlugin from "./checkout-confirm/change-delivery-date.plugin";
import ContentFlyoutPlugin from "./content-flyout/content-flyout.plugin";

// Register them via the existing PluginManager
const PluginManager = window.PluginManager;
PluginManager.register("SearchFlyoutMenuPlugin", SearchFlyoutMenuPlugin);
PluginManager.register(
  "NavigationSearchWidgetPlugin",
  NavigationSearchWidgetPlugin,
  "[data-navigation-search-form]"
);
PluginManager.register(
  "ContenProductList",
  ContenProductListPlugin,
  "[data-content-product-list]"
);

PluginManager.override(
  "OffcanvasMenu",
  OffcanvasMenuExtensionPlugin,
  "[data-offcanvas-menu]"
);
PluginManager.override(
  "OffCanvasCart",
  OffCanvasCartPluginExtension,
  "[data-offcanvas-cart]"
);
PluginManager.register(
  "ToggleLoginRegister",
  toggleLoginRegisterPlugin,
  "[data-toggle-login-register]"
);
PluginManager.register(
  "ChangePayment",
  changePaymentPlugin,
  "[data-change-payment]"
);
PluginManager.register(
  "ChangeShipping",
  changeShippingPlugin,
  "[data-change-shipping]"
);
PluginManager.override(
  "DatePicker",
  DatePickerExtensionPlugin,
  "[data-date-picker]"
);
PluginManager.register(
  "ChangeDeliveryDate",
  ChangeDeliveryDatePlugin,
  "[data-change-delivery-date]"
);
PluginManager.register("ContentFlyout", ContentFlyoutPlugin);
