import "./component";
import "./preview";

Shopware.Service("cmsService").registerCmsBlock({
  name: "custom-form",
  label: "sw-cms.blocks.form.custom-form.label",
  category: "form",
  component: "sw-cms-block-custom-form",
  previewComponent: "sw-cms-preview-custom-form",
  defaultConfig: {
    marginBottom: "20px",
    marginTop: "20px",
    marginLeft: "20px",
    marginRight: "20px",
    sizingMode: "boxed",
  },
  slots: {
    content: {
      type: "form",
    },
  },
});
