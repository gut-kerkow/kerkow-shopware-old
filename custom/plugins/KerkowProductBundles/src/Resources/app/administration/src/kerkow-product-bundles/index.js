import "./page/kerkow-product-bundles-list";
import "./page/kerkow-product-bundles-detail";
import "./page/kerkow-product-bundles-create";
import deDE from "./snippet/de-DE";
import enGB from "./snippet/en-GB";

const { Module } = Shopware;

Module.register("kerkow-product-bundles", {
  type: "plugin",
  name: "Bundle",
  color: "#ff3d58",
  icon: "default-shopping-paper-bag-product",
  title: "kerkow-product-bundles.general.mainMenuItemGeneral",
  description: "kerkow-product-bundles.general.descriptionTextModule",

  snippets: {
    "de-DE": deDE,
    "en-GB": enGB,
  },

  routes: {
    list: {
      component: "kerkow-product-bundles-list",
      path: "list",
    },
    detail: {
      component: "kerkow-product-bundles-detail",
      path: "detail/:id",
      meta: {
        parentPath: "kerkow.product.bundles.list",
      },
    },
    create: {
      component: "kerkow-product-bundles-create",
      path: "create",
      meta: {
        parentPath: "kerkow.product.bundles.list",
      },
    },
  },
  navigation: [
    {
      label: "kerkow-product-bundles.general.mainMenuItemGeneral",
      color: "#ff3d58",
      path: "kerkow.product.bundles.list",
      icon: "default-shopping-paper-bag-product",
      position: 100,
    },
  ],
});
