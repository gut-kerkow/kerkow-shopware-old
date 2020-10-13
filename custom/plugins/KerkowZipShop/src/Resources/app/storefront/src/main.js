// Import all necessary Storefront plugins and scss files
import ZipShopPlugin from "./zip-shop/zip-shop.plugin";
import OffCanvasZipMenu from "./zip-shop/zip-menu.plugin";
import CheckoutCheckAlternative from "./checkout/checkout-check-alternative.plugin";

// Register them via the existing PluginManager
const PluginManager = window.PluginManager;
PluginManager.register("ZipShopPlugin", ZipShopPlugin, "[data-zip-modal]");
PluginManager.register("OffCanvasZipMenu", OffCanvasZipMenu, "[data-zip-menu]");
PluginManager.register(
  "CheckoutCheckAlternative",
  CheckoutCheckAlternative,
  "[data-check-alternative-zip]"
);
