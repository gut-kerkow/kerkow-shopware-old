const { Component } = Shopware;

Component.extend(
  "kerkow-product-bundles-create",
  "kerkow-product-bundles-detail",
  {
    methods: {
      getBundle() {
        this.bundle = this.repository.create(Shopware.Context.api);
        console.log("this bundle", this.bundle);
      },
      onClickSave() {
        this.isLoading = true;

        this.repository
          .save(this.bundle, Shopware.Context.api)
          .then(() => {
            this.isLoading = false;
            this.$router.push({
              name: "kerkow.product.bundles.detail",
              params: { id: this.bundle.id },
            });
          })
          .catch((exception) => {
            this.isLoading = false;

            this.createNotificationError({
              title: this.$tc("kerkow-product-bundles.detail.errorTitle"),
              message: exception,
            });
          });
      },
    },
  }
);
