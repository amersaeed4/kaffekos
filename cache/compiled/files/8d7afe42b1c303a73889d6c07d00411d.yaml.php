<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/kaffekos1/user/config/system.yaml',
    'modified' => 1791177194,
    'size' => 360,
    'data' => [
        'timezone' => NULL,
        'custom_base_url' => 'https://kaffekos.pk',
        'pages' => [
            'theme' => 'kaffekos',
            'append_url_extension' => NULL,
            'redirect_default_code' => '302'
        ],
        'cache' => [
            'redis' => [
                'socket' => NULL
            ]
        ],
        'assets' => [
            'enable_asset_timestamp' => true
        ],
        'debugger' => [
            'token' => NULL
        ],
        'images' => [
            'cls' => [
                'retina_scale' => '1'
            ]
        ],
        'gpm' => [
            'verify_peer' => true
        ],
        'updates' => [
            'safe_upgrade' => true,
            'safe_upgrade_snapshot_limit' => 5
        ]
    ]
];
