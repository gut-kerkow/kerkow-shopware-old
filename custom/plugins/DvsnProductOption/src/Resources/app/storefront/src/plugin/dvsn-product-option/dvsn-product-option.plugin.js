/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

/* eslint-disable no-unused-vars */
/* eslint-disable no-unreachable */

// import
import Plugin from 'src/plugin-system/plugin.class';

// plugin
export default class DvsnProductOption extends Plugin {
    // plugin options
    static options = {
        selectors: {
            option: 'div.option',
            content: '.content',
            checkbox: 'input[type="checkbox"]',
            inputContainer: 'div.dvsn-product-option--input-container'
        }
    };

    // on init
    init() {
        // get this
        const me = this;

        // set click listener to every checkbox
        $(me.el).find(me.options.selectors.checkbox).click(function() {
            // call listener
            me.onCheckboxClick($(this));
        });

        // set change listener to every checkbox
        $(me.el).find(me.options.selectors.checkbox).change(function() {
            // call listener
            me.onCheckboxClick($(this));
        });

        // listener for the content
        $(me.el).find(me.options.selectors.content).click(function(event) {
            // call listener
            me.onContentClick($(this), event);
        });

        // start with parsing for mandatory options
        me.parseOptions();
    }

    // ...
    onContentClick($content, event) {
        // get this
        const me = this;
    }

    // on checkbox click
    onCheckboxClick($checkbox) {
        // get this
        const me = this;

        // just parse the new options
        me.parseOptions();
    }

    // parse options
    parseOptions() {
        // get this
        const me = this;

        // get the body
        const $body = $('body');

        // clear current input holder
        $body.find(me.options.selectors.inputContainer).html('');

        // loop every selected checkbox
        $(me.el).find(me.options.selectors.checkbox).each(function () {
            // not checked?
            if (this.checked === false) {
                // ignore it
                return;
            }

            // get the checkbox and the parent
            const $checkbox = $(this);
            const $option = $checkbox.closest(me.options.selectors.option);

            // create custom hidden field
            let html = '';
            html += '<input type="hidden" name="lineItemsOptions[' + $option.data('id') + ']" value="' + $option.data('id') + '">';

            // add to container
            $body.find(me.options.selectors.inputContainer).html($body.find(me.options.selectors.inputContainer).html() + html);
        });
    }
}
