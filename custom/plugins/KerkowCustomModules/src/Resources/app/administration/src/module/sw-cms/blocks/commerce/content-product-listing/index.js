import "./component";
import "./preview";

Shopware.Service("cmsService").registerCmsBlock({
  name: "content-product-listing",
  label: "sw-cms.blocks.commerce.contentProductLisitng.label",
  category: "commerce",
  component: "sw-cms-block-content-product-listing",
  previewComponent: "sw-cms-preview-content-product-listing",
  defaultConfig: {
    marginBottom: null,
    marginTop: null,
    marginLeft: null,
    marginRight: null,
    sizingMode: "boxed",
  },
  slots: {
    products: "product-listing",
    animal: "text",
    content: "text",
  },
});
