import template from "./kerkow-postalcodes-detail.html.twig";

const { Component, Mixin } = Shopware;

Component.register("kerkow-postalcodes-detail", {
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
      postalcode: null,
      isLoading: false,
      processSuccess: false,
      repository: null,
    };
  },

  created() {
    this.repository = this.repositoryFactory.create("kerkow_postalcodes");
    this.getPostalcode();
  },

  methods: {
    getPostalcode() {
      this.repository
        .get(this.$route.params.id, Shopware.Context.api)
        .then((entity) => {
          this.postalcode = entity;
        });
    },

    onClickSave() {
      this.isLoading = true;

      this.repository
        .save(this.postalcode, Shopware.Context.api)
        .then(() => {
          this.getPostalcode();
          this.isLoading = false;
          this.processSuccess = true;
        })
        .catch((exception) => {
          this.isLoading = false;
          this.createNotificationError({
            title: "Postleitzahl konnte nicht gespeichert werden",
            message: exception,
          });
        });
    },

    saveFinish() {
      this.processSuccess = false;
    },
  },
});
