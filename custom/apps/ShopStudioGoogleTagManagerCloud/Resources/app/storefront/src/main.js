import ShopStudioGoogleTagManagerCloud from './plugin/shop-studio-google-tag-manager-cloud/shop-studio-google-tag-manager-cloud.plugin';

const { PluginManager } = window;

PluginManager.register('ShopStudioGoogleTagManagerCloud', ShopStudioGoogleTagManagerCloud, '[data-shop-studio-google-tag-manager-cloud]');

if (module.hot) {
    module.hot.accept();
}
