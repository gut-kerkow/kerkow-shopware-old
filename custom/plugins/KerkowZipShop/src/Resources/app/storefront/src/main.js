// Import all necessary Storefront plugins and scss files
import ZipShopPlugin from "./zip-shop/zip-shop.plugin";
import OffCanvasZipMenu from "./zip-shop/zip-menu.plugin";
import CheckoutCheckAlternative from "./checkout/register/checkout-check-alternative.plugin";
import CheckZip from "./checkout/register/check-zip.plugin";
import AddressEditCheckPlugin from "./checkout/confirm/address-edit-check.plugin";

// Register them via the existing PluginManager
const PluginManager = window.PluginManager;
PluginManager.register("ZipShopPlugin", ZipShopPlugin, "[data-zip-modal]");
PluginManager.register("OffCanvasZipMenu", OffCanvasZipMenu, "[data-zip-menu]");
PluginManager.register(
  "CheckoutCheckAlternative",
  CheckoutCheckAlternative,
  "[data-check-alternative-zip]"
);
PluginManager.register("CheckZip", CheckZip, "[data-check-zip]");
PluginManager.register(
  "AddressEditCheck",
  AddressEditCheckPlugin,
  "[data-address-edit-check]"
);
