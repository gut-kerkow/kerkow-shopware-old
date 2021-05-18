import JettMcApiService from '../core/service/api/JettMcApiService';

const { Application } = Shopware;

Application.addServiceProvider('JettMcApiService', (container) => {
    const initContainer = Application.getContainer('init');

    return new JettMcApiService(initContainer.httpClient, container.loginService);
});
