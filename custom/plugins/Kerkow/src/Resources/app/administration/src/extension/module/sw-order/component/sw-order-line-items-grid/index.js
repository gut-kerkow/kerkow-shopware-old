import template from "./sw-order-line-items-grid.html.twig";

Shopware.Component.override("sw-order-line-items-grid", {
  template,
  computed: {
    getLineItemColumns() {
      const columns = this.$super("getLineItemColumns");

      columns.push({
        property: "referenceWeight",
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
      columns.unshift({
        property: "articleNumber",
        label: "sw-order.list.articleNumber",
        allowResize: false,
        align: "right",
        width: "80px",
      });
      return columns;
    },
  },
});
