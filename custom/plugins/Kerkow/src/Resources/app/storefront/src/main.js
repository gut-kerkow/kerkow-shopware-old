// Import all necessary Storefront plugins and scss files
import SearchFlyoutMenuPlugin from "./main-menu/search-flyout-menu.plugin";
import NavigationSearchWidgetPlugin from "./main-menu/navigation-search-widget.plugin";
import OffcanvasMenuExtensionPlugin from "./main-menu/offcanvas-menu-extension.plugin";

// Register them via the existing PluginManager
const PluginManager = window.PluginManager;
PluginManager.register("SearchFlyoutMenuPlugin", SearchFlyoutMenuPlugin);
PluginManager.register(
  "NavigationSearchWidgetPlugin",
  NavigationSearchWidgetPlugin,
  "[data-navigation-search-form]"
);

PluginManager.override(
  "OffcanvasMenu",
  OffcanvasMenuExtensionPlugin,
  "[data-offcanvas-menu]"
);
