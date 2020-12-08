import template from "./sw-order-list.html.twig";

Shopware.Component.override("sw-order-list", {
  template,
  computed: {
    orderColumns() {
      const columns = this.getOrderColumns();

      columns.push(
        {
          property: "customFields",
          label: "sw-order.list.columnDeliveryDate",
          allowResize: false,
        },
        {
          property: "paymentType",
          label: "sw-order.list.columnPaymentType",
          allowResize: false,
        }
      );
      return columns;
    },
  },
});
