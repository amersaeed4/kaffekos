<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/kaffekos1/user/plugins/flex-objects/blueprints/flex-objects.yaml',
    'modified' => 1791376799,
    'size' => 771,
    'data' => [
        'type' => 'flex-objects',
        'form' => [
            'fields' => [
                'tools_section' => [
                    'type' => 'section',
                    'field_classes' => 'overlay bottom',
                    'fields' => [
                        '_post_entries_save' => [
                            'label' => 'PLUGIN_FLEX_OBJECTS.AFTER_SAVE',
                            'type' => 'save-redirect',
                            'default' => 'create-new',
                            'options' => [
                                'create-new' => 'PLUGIN_FLEX_OBJECTS.ACTION.CREATE_NEW',
                                'edit' => 'PLUGIN_FLEX_OBJECTS.ACTION.EDIT_ITEM',
                                'list' => 'PLUGIN_FLEX_OBJECTS.ACTION.LIST_ITEMS'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
