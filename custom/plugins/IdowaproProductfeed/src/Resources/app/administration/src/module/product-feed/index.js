import deDE from './snippet/de-DE';
import enGB from './snippet/en-GB';


Shopware.Module.register('product-feed', {
    color: '#57D9A3',
    icon: 'default-shopping-paper-bag-product',
    title: 'product-feed.general.title',
    description: 'product-feed.general.description',
    name: "product-feed-plugin",
    type: "plugin",


    snippets: {
        'de-DE': deDE,
        'en-GB': enGB
    },


    routes: {
        list: {
            component: 'product-feed-list',
            path: 'list'
        },
        detail: {
            component: 'product-feed-detail',
            path: 'detail/:id',
            meta: {
                parentPath: 'product.feed.list'
            }
        },
        create: {
            component: 'product-feed-create',
            path: 'create'
        },
        logs: {
            component: 'product-feed-logs',
            path: 'logs'
        },
        logDetails: {
            component: 'product-feed-logsDetail',
            path: 'logsDetails/:id',
            meta: {
                parentPath: 'product.feed.logs'
            }

        }
    },
    navigation: [{
        label: 'product-feed.general.title',
        color: '#57D9A3',
        path: 'product.feed.list',
        position: 100,
        parent: 'sw-catalogue'
    }],
});
