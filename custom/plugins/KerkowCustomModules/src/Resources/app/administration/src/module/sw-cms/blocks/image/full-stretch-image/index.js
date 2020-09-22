import "./component";
import "./preview";

Shopware.Service("cmsService").registerCmsBlock({
  name: "full-stretch-image",
  label: "sw-cms.blocks.image.fullStretchImage.label",
  category: "image",
  component: "sw-cms-block-full-stretch-image",
  previewComponent: "sw-cms-preview-full-stretch-image",
  defaultConfig: {
    marginBottom: "20px",
    marginTop: "20px",
    marginLeft: "20px",
    marginRight: "20px",
    sizingMode: "boxed",
  },
  slots: {
    image: {
      type: "image",
      default: {
        data: {
          media: {
            url: "/administration/static/img/cms/preview_mountain_large.jpg",
          },
        },
      },
    },
  },
});
