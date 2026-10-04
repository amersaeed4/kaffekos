<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/kaffekos1/user/plugins/shortcode-core/shortcode-core.yaml',
    'modified' => 1790904721,
    'size' => 918,
    'data' => [
        'enabled' => true,
        'active' => true,
        'active_admin' => true,
        'admin_pages_only' => true,
        'parser' => 'hybrid',
        'include_default_shortcodes' => true,
        'exclude_default_shortcodes' => [
            
        ],
        'css' => [
            'notice_enabled' => true
        ],
        'custom_shortcodes' => NULL,
        'shortcodes' => [
            0 => [
                'name' => 'callout',
                'template' => 'shortcodes/callout.html.twig'
            ],
            1 => [
                'name' => 'badge',
                'output' => '<span class="badge badge-{{ params.style|default("default") }}">{{ content }}</span>'
            ]
        ],
        'fontawesome' => [
            'load' => true,
            'url' => '//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css',
            'v5' => false
        ],
        'nextgen-editor' => [
            'env' => 'production',
            'dev_host' => 'localhost',
            'dev_port' => 2001
        ]
    ]
];
