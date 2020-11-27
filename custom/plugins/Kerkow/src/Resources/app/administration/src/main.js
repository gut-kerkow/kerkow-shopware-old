import template from "./extension/module/sw-order/component/sw-order-user-card.html.twig";
import "./extension/module/sw-order/component/sw-order-line-items-grid/";
import "./module/sw-order/page/sw-order-list/";

import deDE from "./snippet/de-DE.json";
import enGB from "./snippet/en-GB.json";

Shopware.Locale.extend("de-DE", deDE);
Shopware.Locale.extend("en-GB", enGB);

const { Component, Mixin } = Shopware;

Shopware.Component.override("sw-order-user-card", {
  template,
});
