import ProductfeedService from '../services/productfeed.service';

Shopware.Application.addServiceProvider('productfeed', container => {
    const initContainer = Shopware.Application.getContainer('init');
    return new ProductfeedService(initContainer.httpClient, container.loginService);
});
