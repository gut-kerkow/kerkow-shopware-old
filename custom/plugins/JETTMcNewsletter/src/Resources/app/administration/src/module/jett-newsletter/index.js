import deDE from './snippet/de-DE';
import enGB from './snippet/en-GB';
import './assets/style.scss';

Shopware.Module.register('jett-newsletter', {
    type: 'plugin',
    name:  'jett-mc-newsletter.module.title',
    title: 'jett-mc-newsletter.module.title',
    description: 'jett-mc-newsletter.module.description',
    color: '#ff3d58',
    icon: 'default-shopping-paper-bag-product',

    snippets: {
        'de-DE': deDE,
        'en-GB': enGB
    },

    routes: {
        settings: {
            component: 'jett-newsletter-settings',
            path: 'settings'
        },
    },

    navigation: [{
        label: 'jett-mc-newsletter.general.mainMenuItemGeneral',
        color: '#ff3d58',
        path: 'jett.newsletter.settings',
        icon: 'default-shopping-paper-bag-product',
        parent: 'sw-marketing',
    }],
});
