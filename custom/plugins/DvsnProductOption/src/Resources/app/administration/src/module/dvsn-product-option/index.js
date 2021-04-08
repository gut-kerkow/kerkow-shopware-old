/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

import './page/dvsn-product-option-list';
import './page/dvsn-product-option-detail';
import './page/dvsn-product-option-create';

import deDE from './snippet/de-DE.json';
import enGB from './snippet/en-GB.json';

const { Module } = Shopware;

Module.register('dvsn-product-option', {
    type: 'plugin',
    name: 'dvsn-product-option.general.name',
    title: 'dvsn-product-option.general.menu-item-name',
    description: 'dvsn-product-option.general.menu-item-description',
    color: '#57D9A3',
    icon: 'default-symbol-content',

    snippets: {
        'de-DE': deDE,
        'en-GB': enGB
    },

    routes: {
        list: {
            component: 'dvsn-product-option-list',
            path: 'list'
        },
        detail: {
            component: 'dvsn-product-option-detail',
            path: 'detail/:id',
            meta: {
                parentPath: 'dvsn.product.option.list'
            }
        },
        create: {
            component: 'dvsn-product-option-create',
            path: 'create',
            meta: {
                parentPath: 'dvsn.product.option.list'
            }
        }
    },

    navigation: [{
        id: 'dvsn-product-option',
        label: 'dvsn-product-option.general.menu-item-name',
        color: '#57D9A3',
        position: 95,
        path: 'dvsn.product.option.list',
        icon: 'default-symbol-content',
        parent: 'sw-catalogue'
    }]
});
