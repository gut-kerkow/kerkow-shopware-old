import "./module/sw-cms/blocks/commerce/product-four-column";
import "./module/sw-cms/blocks/commerce/product-four-column-badge";
import "./module/sw-cms/blocks/commerce/content-product-listing";
import "./module/sw-cms/blocks/image/full-stretch-image";
import "./module/sw-cms/blocks/text-image/two-full-stretch-images";
import "./module/sw-cms/blocks/text-image/gallery-text";
import "./module/sw-cms/blocks/form/custom-form";

import deDE from "./module/sw-cms/snippet/de-DE.json";
import enGB from "./module/sw-cms/snippet/en-GB.json";

Shopware.Locale.extend("de-DE", deDE);
Shopware.Locale.extend("en-GB", enGB);
