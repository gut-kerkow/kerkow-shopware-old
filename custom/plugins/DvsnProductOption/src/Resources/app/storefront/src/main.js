/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

// import
import PluginManager from 'src/plugin-system/plugin.manager';
import DvsnProductOption from './plugin/dvsn-product-option/dvsn-product-option.plugin';

// register plugin
PluginManager.register(
    'DvsnProductOption',
    DvsnProductOption,
    '[data-dvsn-product-option]'
);
