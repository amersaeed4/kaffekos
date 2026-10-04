<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/kaffekos1/user/plugins/error/blueprints.yaml',
    'modified' => 1790904721,
    'size' => 808,
    'data' => [
        'name' => 'Error',
        'version' => '2.0.4',
        'description' => 'Displays the error page.',
        'type' => 'plugin',
        'slug' => 'error',
        'icon' => 'warning',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-error',
        'keywords' => 'error, plugin, required',
        'bugs' => 'https://github.com/getgrav/grav-plugin-error/issues',
        'license' => 'MIT',
        'compatibility' => [
            'grav' => [
                0 => '1.7',
                1 => '2.0'
            ]
        ],
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.0'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'routes.404' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'PLUGIN_ERROR.ROUTE_404',
                    'default' => '/error'
                ]
            ]
        ]
    ]
];
