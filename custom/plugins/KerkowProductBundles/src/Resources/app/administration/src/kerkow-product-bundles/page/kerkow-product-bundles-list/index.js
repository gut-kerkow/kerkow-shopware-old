import template from "./kerkow-product-bundles-list.html.twig";

const { Component } = Shopware;
const { Criteria } = Shopware.Data;

Component.register("kerkow-product-bundles-list", {
  template,
  inject: ["repositoryFactory"],
  data() {
    return {
      repository: null,
      bundles: null,
    };
  },
  metaInfo() {
    return {
      title: this.$createTitle(),
    };
  },
  computed: {
    columns() {
      return [
        {
          property: "name",
          dataIndex: "name",
          label: this.$tc("kerkow-product-bundles.list.columnName"),
          routerLink: "kerkow.product.bundles.detail",
          inlineEdit: "string",
          allowResize: true,
          primary: true,
        },
        {
          property: "discount",
          dataIndex: "discount",
          label: this.$tc("kerkow-product-bundles.list.columnDiscount"),
          inlineEdit: "number",
          allowResize: true,
        },
        {
          property: "discountType",
          dataIndex: "discountType",
          label: this.$tc("kerkow-product-bundles.list.columnDiscountType"),
          allowResize: true,
        },
      ];
    },
  },
  created() {
    this.repository = this.repositoryFactory.create("kerkow_product_bundles");
    this.repository
      .search(new Criteria(), Shopware.Context.api)
      .then((result) => {
        this.bundles = result;
      });
  },
});
