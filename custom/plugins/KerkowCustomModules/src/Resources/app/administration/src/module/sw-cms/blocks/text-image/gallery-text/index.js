import "./component";
import "./preview";

Shopware.Service("cmsService").registerCmsBlock({
  name: "gallery-text",
  label: "sw-cms.blocks.textImage.galleryText.label",
  category: "text-image",
  component: "sw-cms-block-gallery-text",
  previewComponent: "sw-cms-preview-gallery-text",
  defaultConfig: {
    marginBottom: "0",
    marginTop: "0",
    marginLeft: "0",
    marginRight: "0",
    sizingMode: "boxed",
  },
  slots: {
    left: "image-slider",
    right: "text",
  },
});
