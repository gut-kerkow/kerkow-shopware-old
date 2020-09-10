const { Component } = Shopware;

Component.extend("kerkow-postalcodes-create", "kerkow-postalcodes-detail", {
  methods: {
    getPostalcode() {
      this.postalcode = this.repository.create(Shopware.Context.api);
    },
    onClickSave() {
      this.isLoading = true;

      this.repository
        .save(this.postalcode, Shopware.Context.api)
        .then(() => {
          this.isLoading = false;
          this.$router.push({
            name: "kerkow.postalcode.detail",
            params: { id: this.postalcode.id },
          });
        })
        .catch((exception) => {
          this.isLoading = false;

          this.createNotificationError({
            title: "Konnte nicht gespeichert werden",
            message: exception,
          });
        });
    },
  },
});
