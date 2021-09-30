import TemplateService from '../services/template.service';

Shopware.Application.addServiceProvider('template', container => {
    const initContainer = Shopware.Application.getContainer('init');
    return new TemplateService(initContainer.httpClient, container.loginService);
});
