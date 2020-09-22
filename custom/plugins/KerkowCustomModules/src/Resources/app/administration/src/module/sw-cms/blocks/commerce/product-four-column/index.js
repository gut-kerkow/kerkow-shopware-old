import "./component";
import "./preview";

Shopware.Service("cmsService").registerCmsBlock({
  name: "product-four-column",
  label: "sw-cms.blocks.commerce.productFourColumn.label",
  category: "commerce",
  component: "sw-cms-block-product-four-column",
  previewComponent: "sw-cms-preview-product-four-column",
  defaultConfig: {
    marginBottom: "20px",
    marginTop: "20px",
    marginLeft: "20px",
    marginRight: "20px",
    sizingMode: "boxed",
  },
  slots: {
    one: "product-box",
    two: "product-box",
    three: "product-box",
    four: "product-box",
  },
});
