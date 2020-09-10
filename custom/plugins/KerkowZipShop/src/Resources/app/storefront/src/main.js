// Import all necessary Storefront plugins and scss files
import ZipShopPlugin from "./zip-shop/zip-shop.plugin";

// Register them via the existing PluginManager
const PluginManager = window.PluginManager;
PluginManager.register("ZipShopPlugin", ZipShopPlugin, "[data-zip-modal]");
