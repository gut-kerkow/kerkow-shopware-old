import template from "./kerkow-product-bundles-detail.html.twig";

const { Component, Mixin } = Shopware;

Component.register("kerkow-product-bundles-detail", {
  template,

  inject: ["repositoryFactory"],

  mixins: [Mixin.getByName("notification")],

  metaInfo() {
    return {
      title: this.$createTitle(),
    };
  },

  data() {
    return {
      bundle: null,
      isLoading: false,
      processSuccess: false,
      repository: null,
    };
  },

  computed: {
    options() {
      return [
        {
          value: "absolute",
          name: this.$tc("kerkow-product-bundles.detail.absoluteText"),
        },
        {
          value: "percentage",
          name: this.$tc("kerkow-product-bundles.detail.percentageText"),
        },
      ];
    },
  },

  created() {
    this.repository = this.repositoryFactory.create("kerkow_product_bundles");
    console.log("this repository", this.repository);
    this.getBundle();
  },

  methods: {
    getBundle() {
      this.repository
        .get(this.$route.params.id, Shopware.Context.api)
        .then((entity) => {
          this.bundle = entity;
        });
    },

    onClickSave() {
      this.isLoading = true;

      this.repository
        .save(this.bundle, Shopware.Context.api)
        .then(() => {
          this.getBundle();
          this.isLoading = false;
          this.processSuccess = true;
        })
        .catch((exception) => {
          this.isLoading = false;
          this.createNotificationError({
            title: this.$tc("kerkow-product-bundles.detail.errorTitle"),
            message: exception,
          });
        });
    },

    saveFinish() {
      this.processSuccess = false;
    },
  },
});
