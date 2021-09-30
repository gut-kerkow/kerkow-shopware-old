const { Application } = Shopware;



import RuleConditionService from 'src/app/service/rule-condition.service';


Application.addServiceProvider('feedConditionDataProviderService', () => {
    return RuleConditionService();
});


Application.addServiceProviderDecorator('feedConditionDataProviderService', (ruleConditionService) => {
    ruleConditionService.addCondition('product-name', {
        component: 'productfeed-condition-product-name',
        label: 'product-feed.create.condition.productName',
        scopes: ['global']
    });
    ruleConditionService.addCondition('product-id', {
        component: 'productfeed-condition-product-id',
        label: 'product-feed.create.condition.productId',
        scopes: ['global']
    });
    ruleConditionService.addCondition('product-price', {
        component: 'productfeed-condition-product-price',
        label: 'product-feed.create.condition.productPrice',
        scopes: ['global']
    });
    ruleConditionService.addCondition('product-category', {
        component: 'productfeed-condition-product-category',
        label: 'product-feed.create.condition.productCategory',
        scopes: ['global']
    });
    ruleConditionService.addCondition('category-name', {
        component: 'productfeed-condition-category-name',
        label: 'product-feed.create.condition.categoryName',
        scopes: ['global']
    });
    ruleConditionService.addCondition('manufacturer-name', {
        component: 'productfeed-condition-manufacturer-name',
        label: 'product-feed.create.condition.manufacturerName',
        scopes: ['global']
    });
    ruleConditionService.addCondition('product-enabled', {
        component: 'productfeed-condition-product-enabled',
        label: 'product-feed.create.condition.productEnabled',
        scopes: ['global']
    });
    return ruleConditionService;
});
