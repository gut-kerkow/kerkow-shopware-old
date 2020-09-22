import "./component";
import "./preview";

Shopware.Service("cmsService").registerCmsBlock({
  name: "two-full-stretch-images",
  label: "sw-cms.blocks.textImage.twoFullStretchImages.label",
  category: "text-image",
  component: "sw-cms-block-two-full-stretch-images",
  previewComponent: "sw-cms-preview-two-full-stretch-images",
  defaultConfig: {
    marginBottom: "20px",
    marginTop: "20px",
    marginLeft: "20px",
    marginRight: "20px",
    sizingMode: "boxed",
  },
  slots: {
    content: {
      type: "text",
      default: {
        config: {
          content: {
            source: "static",
            value: `
                  <h2 style="text-align: center; color: #FFFFFF">Lorem Ipsum</h2>
                  <p style="text-align: center; color: #FFFFFF">Lorem ipsum dolor sit amet, consetetur
                  sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                  lorem ipsum dolor sit amet.</p>
                  `.trim(),
          },
        },
      },
    },
    left: {
      type: "image",
      default: {
        data: {
          media: {
            url: "/administration/static/img/cms/preview_mountain_large.jpg",
          },
        },
      },
    },
    right: {
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
