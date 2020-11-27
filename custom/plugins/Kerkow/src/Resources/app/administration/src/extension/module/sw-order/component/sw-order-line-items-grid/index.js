import template from "./sw-order-line-items-grid.html.twig";

Shopware.Component.override("sw-order-line-items-grid", {
  template,
  computed: {
    getLineItemColumns() {
      const columns = this.$super("getLineItemColumns");

      columns.push({
        property: "price.referencePrice",
        dataIndex: "price.referencePrice",
        label: "sw-order.detailBase.columnWeight",
        allowResize: false,
        align: "right",
        inlineEdit: true,
        width: "80px",
      });
      columns.push({
        property: "referenceBase",
        dataIndex: "price.referencePrice",
        label: "sw-order.detailBase.columnReferencePrice",
        allowResize: false,
        align: "right",
        inlineEdit: true,
        width: "80px",
      });
      return columns;
    },
  },
});
