<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/kaffekos1/system/config/scheduler.yaml',
    'modified' => 1790904721,
    'size' => 1403,
    'data' => [
        'defaults' => [
            'output' => true,
            'output_type' => 'file',
            'email' => NULL
        ],
        'status' => [
            
        ],
        'custom_jobs' => [
            
        ],
        'modern' => [
            'workers' => 1,
            'retry' => [
                'enabled' => true,
                'max_attempts' => 3,
                'backoff' => 'exponential'
            ],
            'queue' => [
                'path' => 'user-data://scheduler/queue',
                'max_size' => 1000
            ],
            'webhook' => [
                'enabled' => false,
                'token' => NULL,
                'path' => '/scheduler/webhook'
            ],
            'health' => [
                'enabled' => true,
                'path' => '/scheduler/health'
            ],
            'history' => [
                'enabled' => true,
                'retention_days' => 30,
                'path' => 'user-data://scheduler/history'
            ],
            'performance' => [
                'job_timeout' => 300,
                'lock_timeout' => 10
            ],
            'monitoring' => [
                'enabled' => false,
                'alert_on_failure' => true,
                'alert_email' => NULL,
                'webhook_url' => NULL
            ],
            'triggers' => [
                'check_cron' => true,
                'check_systemd' => true,
                'check_webhook' => true,
                'check_external' => true
            ]
        ]
    ]
];
