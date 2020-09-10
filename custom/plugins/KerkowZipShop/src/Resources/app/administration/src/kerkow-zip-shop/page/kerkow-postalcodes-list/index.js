import template from "./kerkow-postalcodes-list.html.twig";

const { Component } = Shopware;
const { Criteria } = Shopware.Data;

Component.register("kerkow-postalcodes-list", {
  template,
  inject: ["repositoryFactory"],
  data() {
    return {
      repository: null,
      postalcodes: null,
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
          property: "zip",
          dataIndex: "zip",
          label: "Postleitzahl",
          routerLink: "kerkow.postalcodes.detail",
          inlineEdit: "number",
          allowResize: true,
          primary: true,
        },
        {
          property: "city",
          dataIndex: "city",
          label: "Ort",
          inlineEdit: "string",
          allowResize: true,
        },
      ];
    },
  },
  created() {
    this.repository = this.repositoryFactory.create("kerkow_postalcodes");
    this.repository
      .search(new Criteria(), Shopware.Context.api)
      .then((result) => {
        this.postalcodes = result;
      });
  },
});
