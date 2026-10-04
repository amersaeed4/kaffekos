<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/kaffekos1/user/themes/kaffekos/blueprints/menu-category.yaml',
    'modified' => 1791100724,
    'size' => 2446,
    'data' => [
        'title' => 'Menu Category',
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'banner' => [
                            'unset@' => true
                        ],
                        'content' => [
                            'title' => 'Category & Photos',
                            'fields' => [
                                'content' => [
                                    'unset@' => true
                                ],
                                'header.title' => [
                                    'label' => 'Category name',
                                    'help' => 'For example Coffee, Cold Drinks, Bakes, Breakfast.'
                                ],
                                'header.description' => [
                                    'type' => 'textarea',
                                    'rows' => 2,
                                    'label' => 'Short description (optional)'
                                ]
                            ]
                        ],
                        'items' => [
                            'type' => 'tab',
                            'title' => 'Menu Items',
                            'fields' => [
                                'items_help' => [
                                    'type' => 'spacer',
                                    'title' => 'Add items with the + button',
                                    'text' => 'Price: just type the number (e.g. 650), or write Small 450 / Large 600. Photos are chosen from this category\'s Page Media (first tab).'
                                ],
                                'header.items' => [
                                    'type' => 'list',
                                    'label' => 'Items',
                                    'style' => 'vertical',
                                    'collapsed' => true,
                                    'fields' => [
                                        '.name' => [
                                            'type' => 'text',
                                            'label' => 'Item name'
                                        ],
                                        '.price' => [
                                            'type' => 'text',
                                            'label' => 'Price'
                                        ],
                                        '.description' => [
                                            'type' => 'textarea',
                                            'rows' => 2,
                                            'label' => 'Description'
                                        ],
                                        '.image' => [
                                            'type' => 'filepicker',
                                            'label' => 'Photo (optional)',
                                            'preview_images' => true
                                        ],
                                        '.badge' => [
                                            'type' => 'select',
                                            'label' => 'Label',
                                            'default' => '',
                                            'options' => [
                                                '' => 'None',
                                                'New' => 'New',
                                                'Signature' => 'Signature',
                                                'Vegetarian' => 'Vegetarian',
                                                'Vegan' => 'Vegan',
                                                'Spicy' => 'Spicy',
                                                'Seasonal' => 'Seasonal'
                                            ]
                                        ],
                                        '.featured' => [
                                            'type' => 'toggle',
                                            'label' => 'Show on Home page',
                                            'highlight' => 0,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'Yes',
                                                0 => 'No'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        '.soldout' => [
                                            'type' => 'toggle',
                                            'label' => 'Sold out / hide',
                                            'highlight' => 0,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'Hide it',
                                                0 => 'Available'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
