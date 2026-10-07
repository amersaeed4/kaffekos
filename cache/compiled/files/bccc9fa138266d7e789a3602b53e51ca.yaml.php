<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/kaffekos1/user/plugins/api/api.yaml',
    'modified' => 1791376789,
    'size' => 7189,
    'data' => [
        'enabled' => true,
        'route' => '/api',
        'version_prefix' => 'v1',
        'auth' => [
            'api_keys_enabled' => true,
            'jwt_enabled' => true,
            'jwt_algorithm' => 'HS256',
            'jwt_expiry' => 3600,
            'jwt_refresh_expiry' => 604800,
            'session_enabled' => true
        ],
        'login' => [
            'captcha' => [
                'enabled' => false,
                'provider' => 'cap',
                'mode' => 'invisible',
                'flows' => [
                    'login' => true,
                    'forgot_password' => true,
                    'setup' => false
                ],
                'cap' => [
                    'challenge_count' => 30,
                    'challenge_size' => 32,
                    'challenge_difficulty' => 4,
                    'expires_ms' => 600000
                ]
            ]
        ],
        'cors' => [
            'enabled' => true,
            'origins' => [
                
            ],
            'methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PATCH',
                3 => 'DELETE',
                4 => 'OPTIONS'
            ],
            'headers' => [
                0 => 'Content-Type',
                1 => 'Authorization',
                2 => 'X-API-Key',
                3 => 'X-API-Token',
                4 => 'X-Grav-Environment',
                5 => 'If-Match',
                6 => 'If-None-Match'
            ],
            'expose_headers' => [
                0 => 'ETag',
                1 => 'X-Invalidates',
                2 => 'X-RateLimit-Limit',
                3 => 'X-RateLimit-Remaining',
                4 => 'X-RateLimit-Reset'
            ],
            'max_age' => 86400,
            'credentials' => false
        ],
        'compression' => 'auto',
        'rate_limit' => [
            'enabled' => true,
            'requests' => 120,
            'window' => 60,
            'storage' => 'file'
        ],
        'demo' => [
            'writable' => [
                0 => 'api.pages.write',
                1 => 'api.media.write'
            ],
            'reset_interval' => 30,
            'reset_on_request' => true,
            'reset_on_schedule' => true,
            'keep_safety_snapshots' => 5
        ],
        'translation_overrides' => true,
        'allow_draft_preview' => true,
        'preview_token_ttl' => 300,
        'flex_backend' => [
            'pages' => true,
            'accounts' => true
        ],
        'media_metadata' => [
            'fields' => [
                0 => [
                    'key' => 'alt',
                    'label' => 'Alt Text',
                    'type' => 'text'
                ],
                1 => [
                    'key' => 'title',
                    'label' => 'Title',
                    'type' => 'text'
                ],
                2 => [
                    'key' => 'caption',
                    'label' => 'Caption',
                    'type' => 'textarea'
                ],
                3 => [
                    'key' => 'description',
                    'label' => 'Description',
                    'type' => 'textarea'
                ],
                4 => [
                    'key' => 'tags',
                    'label' => 'Tags',
                    'type' => 'tags'
                ]
            ],
            'max_length' => 2000
        ],
        'pagination' => [
            'default_per_page' => 20,
            'max_per_page' => 1000
        ],
        'invitations' => [
            'expiration' => 604800
        ],
        'popularity' => [
            'enabled' => true,
            'exclude_admin' => true,
            'exclude_ips' => [
                
            ],
            'exclude_non_browsers' => true,
            'exclude_agents' => [
                
            ],
            'history' => [
                'daily' => 30,
                'monthly' => 12
            ],
            'ignore' => [
                0 => '/test*',
                1 => '/modular'
            ]
        ]
    ]
];
