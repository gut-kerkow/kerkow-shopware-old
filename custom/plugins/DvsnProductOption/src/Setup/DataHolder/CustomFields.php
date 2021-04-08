<?php

/**
 * digitvision
 *
 * @category  digitvision
 * @package   Shopware\Plugins\DvsnProductOption
 * @copyright (c) 2020 digitvision
 */

namespace Dvsn\ProductOption\Setup\DataHolder;

use Shopware\Core\System\CustomField\CustomFieldTypes;

class CustomFields
{
    /**
     * ...
     *
     * @var array
     */
    public static $customFields = [
        [
            'id' => null,
            'name' => 'dvsn_product_option_product',
            'config' => [
                'label' => [
                    'en-GB' => 'Optionale Zusatz/Pseudo Artikel',
                    'de-DE' => 'Optional product options'
                ]
            ],
            'customFields' => [
                [
                    'id' => null,
                    'name' => 'dvsn_product_option_product_option_1',
                    'type' => CustomFieldTypes::JSON,
                    'config' => [
                        'label' => [
                            'en-GB' => 'Artikel I',
                            'de-DE' => 'Option I'
                        ],
                        'componentName' => "sw-entity-single-select",
                        'entity' => 'dvsn_product_option',
                        'customFieldType' => CustomFieldTypes::JSON,
                        'customFieldPosition' => 20
                    ]
                ],
                [
                    'id' => null,
                    'name' => 'dvsn_product_option_product_option_2',
                    'type' => CustomFieldTypes::JSON,
                    'config' => [
                        'label' => [
                            'en-GB' => 'Artikel II',
                            'de-DE' => 'Option II'
                        ],
                        'componentName' => "sw-entity-single-select",
                        'entity' => 'dvsn_product_option',
                        'customFieldType' => CustomFieldTypes::JSON,
                        'customFieldPosition' => 25
                    ]
                ],
                [
                    'id' => null,
                    'name' => 'dvsn_product_option_product_option_3',
                    'type' => CustomFieldTypes::JSON,
                    'config' => [
                        'label' => [
                            'en-GB' => 'Artikel III',
                            'de-DE' => 'Option III'
                        ],
                        'componentName' => "sw-entity-single-select",
                        'entity' => 'dvsn_product_option',
                        'customFieldType' => CustomFieldTypes::JSON,
                        'customFieldPosition' => 30
                    ]
                ],
            ],
            'relations' => [
                [
                    'entityName' => 'product',
                ]
            ],
        ],
    ];
}
