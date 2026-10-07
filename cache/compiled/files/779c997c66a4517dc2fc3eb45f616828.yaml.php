<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/kaffekos1/user/plugins/flex-objects/flex-objects.yaml',
    'modified' => 1791376799,
    'size' => 2299,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'media_proxy' => [
            'enabled' => false,
            'base' => '/flex-media',
            'authorize' => false,
            'cache_control' => 'public, max-age=604800'
        ],
        'security' => [
            'restrict_page_frontmatter' => true
        ],
        'admin_list' => [
            'per_page' => 15,
            'order' => [
                'by' => 'updated_timestamp',
                'dir' => 'desc'
            ]
        ],
        'directories' => [
            0 => 'blueprints://flex-objects/pages.yaml',
            1 => 'blueprints://flex-objects/user-accounts.yaml',
            2 => 'blueprints://flex-objects/user-groups.yaml'
        ]
    ]
];
