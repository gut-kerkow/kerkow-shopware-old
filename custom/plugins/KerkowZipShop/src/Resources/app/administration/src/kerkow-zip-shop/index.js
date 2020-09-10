import "./page/kerkow-postalcodes-list";
import "./page/kerkow-postalcodes-detail";
import "./page/kerkow-postalcodes-create";

const { Module } = Shopware;

Module.register("kerkow-postalcodes", {
  type: "plugin",
  name: "Kerkow Zip Shop",
  color: "#ff3d58",
  icon: "default-shopping-paper-bag-product",
  title: "Kerkow Postleitzahlen",
  description: "Postleitzahlen die von Gut Kerkow beliefert werden können",

  routes: {
    list: {
      component: "kerkow-postalcodes-list",
      path: "list",
    },
    detail: {
      component: "kerkow-postalcodes-detail",
      path: "detail/:id",
      meta: {
        parentPath: "kerkow.postalcodes.list",
      },
    },
    create: {
      component: "kerkow-postalcodes-create",
      path: "create",
      meta: {
        parentPath: "kerkow.postalcodes.list",
      },
    },
  },
  navigation: [
    {
      label: "Kerkow Liefergebiet",
      color: "#ff3d58",
      path: "kerkow.postalcodes.list",
      icon: "default-location-map",
      position: 100,
    },
  ],
});
