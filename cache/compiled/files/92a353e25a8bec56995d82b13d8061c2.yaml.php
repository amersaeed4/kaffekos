<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/kaffekos1/user/themes/kaffekos/blueprints/default.yaml',
    'modified' => 1791099920,
    'size' => 719,
    'data' => [
        'title' => 'Standard Page',
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'banner' => [
                            'type' => 'tab',
                            'title' => 'Page Banner',
                            'fields' => [
                                'header.banner.image' => [
                                    'type' => 'filepicker',
                                    'label' => 'Banner photo (optional)',
                                    'preview_images' => true,
                                    'help' => 'Wide photo behind the page title. Upload it on the first tab (Page Media) and pick it here. If empty, a warm navy banner with a Nordic pattern is shown.'
                                ],
                                'header.banner.eyebrow' => [
                                    'type' => 'text',
                                    'label' => 'Small line above the title'
                                ],
                                'header.banner.subtitle' => [
                                    'type' => 'textarea',
                                    'rows' => 2,
                                    'label' => 'Line under the title'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
