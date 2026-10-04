<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledBlueprints',
    'timestamp' => 1791146846,
    'checksum' => 'fc04321beea3d0676668390041a4cda6',
    'files' => [
        'system/blueprints/config' => [
            'backups' => [
                'file' => 'system/blueprints/config/backups.yaml',
                'modified' => 1790904721
            ],
            'media' => [
                'file' => 'system/blueprints/config/media.yaml',
                'modified' => 1790904721
            ],
            'scheduler' => [
                'file' => 'system/blueprints/config/scheduler.yaml',
                'modified' => 1790904721
            ],
            'security' => [
                'file' => 'system/blueprints/config/security.yaml',
                'modified' => 1790904721
            ],
            'site' => [
                'file' => 'system/blueprints/config/site.yaml',
                'modified' => 1790904721
            ],
            'streams' => [
                'file' => 'system/blueprints/config/streams.yaml',
                'modified' => 1790904721
            ],
            'system' => [
                'file' => 'system/blueprints/config/system.yaml',
                'modified' => 1790904721
            ]
        ],
        'user/plugins' => [
            'plugins/form' => [
                'file' => 'user/plugins/form/blueprints.yaml',
                'modified' => 1790904721
            ],
            'plugins/flex-objects' => [
                'file' => 'user/plugins/flex-objects/blueprints.yaml',
                'modified' => 1790904721
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/blueprints.yaml',
                'modified' => 1790904721
            ],
            'plugins/api' => [
                'file' => 'user/plugins/api/blueprints.yaml',
                'modified' => 1790904721
            ],
            'plugins/shortcode-core' => [
                'file' => 'user/plugins/shortcode-core/blueprints.yaml',
                'modified' => 1790904721
            ],
            'plugins/github-markdown-alerts' => [
                'file' => 'user/plugins/github-markdown-alerts/blueprints.yaml',
                'modified' => 1790904721
            ],
            'plugins/admin2' => [
                'file' => 'user/plugins/admin2/blueprints.yaml',
                'modified' => 1790904721
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/blueprints.yaml',
                'modified' => 1790904721
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/blueprints.yaml',
                'modified' => 1790904721
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/blueprints.yaml',
                'modified' => 1790904721
            ]
        ],
        'user/themes' => [
            'themes/quark2' => [
                'file' => 'user/themes/quark2/blueprints.yaml',
                'modified' => 1790904721
            ],
            'themes/kaffekos' => [
                'file' => 'user/themes/kaffekos/blueprints.yaml',
                'modified' => 1791129081
            ]
        ]
    ],
    'data' => [
        'items' => [
            'backups' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'backups.history_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'backups.history_title',
                'validation' => 'loose'
            ],
            'backups.history' => [
                'type' => 'backupshistory',
                'name' => 'backups.history',
                'validation' => 'loose'
            ],
            'backups.config_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'backups.config_title',
                'validation' => 'loose'
            ],
            'backups.purge' => [
                'type' => '_parent',
                'name' => 'backups.purge',
                'form_field' => false
            ],
            'backups.purge.trigger' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.BACKUPS_STORAGE_PURGE_TRIGGER',
                'size' => 'medium',
                'default' => 'space',
                'options' => [
                    'space' => 'Maximum Backup Space',
                    'number' => 'Maximum Number of Backups',
                    'time' => 'maximum Retention Time'
                ],
                'validate' => [
                    'required' => true
                ],
                'name' => 'backups.purge.trigger',
                'validation' => 'loose'
            ],
            'backups.purge.max_backups_count' => [
                'type' => 'number',
                'label' => 'PLUGIN_ADMIN.BACKUPS_MAX_COUNT',
                'default' => 25,
                'size' => 'x-small',
                'validate' => [
                    'min' => 0,
                    'type' => 'number',
                    'required' => true,
                    'message' => 'Must be a number 0 or greater'
                ],
                'name' => 'backups.purge.max_backups_count',
                'validation' => 'loose'
            ],
            'backups.purge.max_backups_space' => [
                'type' => 'number',
                'label' => 'PLUGIN_ADMIN.BACKUPS_MAX_SPACE',
                'append' => 'in GB',
                'size' => 'x-small',
                'default' => 5,
                'validate' => [
                    'min' => 1,
                    'type' => 'number',
                    'required' => true,
                    'message' => 'Space must be 1GB or greater'
                ],
                'name' => 'backups.purge.max_backups_space',
                'validation' => 'loose'
            ],
            'backups.purge.max_backups_time' => [
                'type' => 'number',
                'label' => 'PLUGIN_ADMIN.BACKUPS_MAX_RETENTION_TIME',
                'append' => 'PLUGIN_ADMIN.BACKUPS_MAX_RETENTION_TIME_APPEND',
                'size' => 'x-small',
                'default' => 365,
                'validate' => [
                    'min' => 7,
                    'type' => 'number',
                    'required' => true,
                    'message' => 'Rentenion days must be 7 or greater'
                ],
                'name' => 'backups.purge.max_backups_time',
                'validation' => 'loose'
            ],
            'backups.profiles_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'backups.profiles_title',
                'validation' => 'loose'
            ],
            'backups.profiles' => [
                'type' => 'list',
                'style' => 'vertical',
                'label' => NULL,
                'classes' => 'backups-list compact',
                'sort' => false,
                'name' => 'backups.profiles',
                'validation' => 'loose'
            ],
            'backups.profiles.name' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.NAME',
                'validate' => [
                    'max' => 20,
                    'message' => 'Name must be less than 20 characters',
                    'required' => true
                ],
                'name' => 'backups.profiles.name',
                'validation' => 'loose'
            ],
            'backups.profiles.root' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_ROOT_FOLDER',
                'default' => '/',
                'validate' => [
                    'required' => true
                ],
                'name' => 'backups.profiles.root',
                'validation' => 'loose'
            ],
            'backups.profiles.exclude_paths' => [
                'type' => 'textarea',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_EXCLUDE_PATHS',
                'rows' => 5,
                'name' => 'backups.profiles.exclude_paths',
                'validation' => 'loose'
            ],
            'backups.profiles.exclude_files' => [
                'type' => 'textarea',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_EXCLUDE_FILES',
                'rows' => 5,
                'name' => 'backups.profiles.exclude_files',
                'validation' => 'loose'
            ],
            'backups.profiles.schedule' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_SCHEDULE',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'backups.profiles.schedule',
                'validation' => 'loose'
            ],
            'backups.profiles.schedule_at' => [
                'type' => 'cron',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_SCHEDULE_AT',
                'default' => '* 3 * * *',
                'validate' => [
                    'required' => true
                ],
                'name' => 'backups.profiles.schedule_at',
                'validation' => 'loose'
            ],
            'backups.profiles.schedule_environment' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_ENVIRONMENT',
                'default' => '',
                'options' => [
                    '' => 'Default (cli)',
                    'localhost' => 'Localhost',
                    'cli' => 'CLI'
                ],
                'name' => 'backups.profiles.schedule_environment',
                'validation' => 'loose'
            ],
            'media' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'media.types' => [
                'name' => 'media.types',
                'type' => 'list',
                'label' => 'PLUGIN_ADMIN.MEDIA_TYPES',
                'style' => 'vertical',
                'key' => 'extension',
                'controls' => 'both',
                'collapsed' => true,
                'validation' => 'loose'
            ],
            'media.types.extension' => [
                'type' => 'key',
                'label' => 'PLUGIN_ADMIN.FILE_EXTENSION',
                'name' => 'media.types.extension',
                'validation' => 'loose'
            ],
            'media.types.type' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.TYPE',
                'name' => 'media.types.type',
                'validation' => 'loose'
            ],
            'media.types.thumb' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.THUMB',
                'name' => 'media.types.thumb',
                'validation' => 'loose'
            ],
            'media.types.mime' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.MIME_TYPE',
                'validate' => [
                    'type' => 'lower'
                ],
                'name' => 'media.types.mime',
                'validation' => 'loose'
            ],
            'media.types.image' => [
                'type' => 'textarea',
                'yaml' => true,
                'label' => 'PLUGIN_ADMIN.IMAGE_OPTIONS',
                'validate' => [
                    'type' => 'yaml'
                ],
                'name' => 'media.types.image',
                'validation' => 'loose'
            ],
            'scheduler' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'scheduler.scheduler_tabs' => [
                'type' => 'tabs',
                'active' => 1,
                'name' => 'scheduler.scheduler_tabs',
                'validation' => 'loose'
            ],
            'scheduler.status_tab' => [
                'type' => 'tab',
                'name' => 'scheduler.status_tab',
                'validation' => 'loose'
            ],
            'scheduler.status_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.status_title',
                'validation' => 'loose'
            ],
            'scheduler.status' => [
                'type' => 'cronstatus',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'scheduler.status',
                'validation' => 'loose'
            ],
            'scheduler.modern_health' => [
                'type' => 'display',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_HEALTH_STATUS',
                'content' => '<div id="scheduler-health-status">
    <div class="text-muted">Loading...</div>
</div>
<script>
(function() {
    function renderHealthStatus() {
        var data = window.schedulerHealthData;
        var statusEl = document.getElementById(\'scheduler-health-status\');
        if (!statusEl || !data) return;

        var statusColor = \'#6c757d\';
        var statusLabel = data.status || \'unknown\';
        if (data.status === \'healthy\') statusColor = \'#28a745\';
        else if (data.status === \'warning\') statusColor = \'#ffc107\';
        else if (data.status === \'critical\') statusColor = \'#dc3545\';

        var html = \'<div style="display: flex; flex-direction: column; gap: 1rem;">\';

        // Status card
        html += \'<div style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 1rem; background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%); border-radius: 6px; border: 1px solid #e9ecef; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">\';
        html += \'<span style="font-weight: 500; color: #495057;">Status:</span>\';
        html += \'<span style="background: \' + statusColor + \'; color: white; padding: 0.375rem 0.75rem; font-size: 0.875rem; font-weight: 500; border-radius: 4px; text-transform: uppercase; letter-spacing: 0.025em;">\' + statusLabel + \'</span>\';
        html += \'</div>\';

        // Info grid
        html += \'<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem;">\';

        // Last run card
        html += \'<div style="background: white; border: 1px solid #e9ecef; border-radius: 6px; padding: 0.75rem; box-shadow: 0 1px 2px rgba(0,0,0,0.03);">\';
        html += \'<div style="color: #6c757d; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.25rem;">Last Run</div>\';
        if (data.last_run) {
            var age = data.last_run_age;
            var ageText = \'just now\';
            if (age > 86400) {
                ageText = Math.floor(age / 86400) + \' day(s) ago\';
            } else if (age > 3600) {
                ageText = Math.floor(age / 3600) + \' hour(s) ago\';
            } else if (age > 60) {
                ageText = Math.floor(age / 60) + \' minute(s) ago\';
            } else if (age > 0) {
                ageText = age + \' second(s) ago\';
            }
            html += \'<div style="font-size: 1rem; color: #212529; font-weight: 500;">\' + ageText + \'</div>\';
        } else {
            html += \'<div style="font-size: 1rem; color: #6c757d;">Never</div>\';
        }
        html += \'</div>\';

        // Jobs count card
        html += \'<div style="background: white; border: 1px solid #e9ecef; border-radius: 6px; padding: 0.75rem; box-shadow: 0 1px 2px rgba(0,0,0,0.03);">\';
        html += \'<div style="color: #6c757d; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.25rem;">Scheduled Jobs</div>\';
        html += \'<div style="font-size: 1rem; color: #212529; font-weight: 500;">\' + (data.scheduled_jobs || 0) + \'</div>\';
        html += \'</div>\';

        html += \'</div>\'; // Close grid

        // Queue size
        if (data.queue_size !== undefined) {
            html += \'<div style="background: white; border: 1px solid #e9ecef; border-radius: 6px; padding: 0.75rem; box-shadow: 0 1px 2px rgba(0,0,0,0.03);">\';
            html += \'<span style="color: #6c757d; font-size: 0.875rem;">Queue Size: </span>\';
            html += \'<span style="font-weight: 500;">\' + data.queue_size + \'</span>\';
            html += \'</div>\';
        }

        // Failed jobs warning
        if (data.failed_jobs_24h > 0) {
            html += \'<div style="background: #fff5f5; border: 1px solid #feb2b2; border-radius: 6px; padding: 0.75rem; color: #c53030;">\';
            html += \'<strong>Failed Jobs (24h):</strong> \' + data.failed_jobs_24h;
            html += \'</div>\';
        }

        html += \'</div>\';
        statusEl.innerHTML = html;
    }

    if (document.readyState === \'loading\') {
        document.addEventListener(\'DOMContentLoaded\', renderHealthStatus);
    } else {
        renderHealthStatus();
    }
})();
</script>
',
                'markdown' => false,
                'name' => 'scheduler.modern_health',
                'validation' => 'loose'
            ],
            'scheduler.trigger_methods' => [
                'type' => 'display',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_ACTIVE_TRIGGERS',
                'content' => '<div id="scheduler-triggers">
    <div class="text-muted">Loading...</div>
</div>
<script>
(function() {
    function goToWebhookConfig() {
        // Find the "Advanced Features" tab and click it
        var tabs = document.querySelectorAll(\'.tabs-nav a\');
        for (var i = 0; i < tabs.length; i++) {
            if (tabs[i].textContent.trim() === \'Advanced Features\') {
                tabs[i].click();
                // Scroll to "Webhook Configuration" section heading after tab switch
                setTimeout(function() {
                    var headings = document.querySelectorAll(\'h1\');
                    for (var j = 0; j < headings.length; j++) {
                        if (headings[j].textContent.trim() === \'Webhook Configuration\') {
                            headings[j].scrollIntoView({ behavior: \'smooth\', block: \'start\' });
                            return;
                        }
                    }
                }, 150);
                return;
            }
        }
    }
    // Expose globally for onclick handlers
    window.goToWebhookConfig = goToWebhookConfig;

    function renderTriggers() {
        var data = window.schedulerHealthData;
        var triggersEl = document.getElementById(\'scheduler-triggers\');
        if (!triggersEl || !data) return;

        // Check cron status from the main status field
        var cronReady = false;
        var statusDiv = document.querySelector(\'.cronstatus-status\');
        if (statusDiv) {
            var statusText = statusDiv.textContent || statusDiv.innerText;
            cronReady = statusText.includes(\'Ready\');
        }

        var html = \'<div style="display: flex; flex-direction: column; gap: 0.5rem;">\';

        // Cron trigger card
        var cronIcon = cronReady ? \'<i class="fa fa-check-circle" style="color: #28a745;"></i>\' : \'<i class="fa fa-times-circle" style="color: #6c757d;"></i>\';
        var cronStatus = cronReady ? \'Active\' : \'Not Configured\';
        var cronStatusColor = cronReady ? \'#28a745\' : \'#6c757d\';
        var cardBg = cronReady ? \'#f8f9fa\' : \'#fff\';

        html += \'<div style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 1rem; background: \' + cardBg + \'; border: 1px solid #e9ecef; border-radius: 4px;">\';
        html += \'<div style="display: flex; align-items: center; gap: 0.75rem;">\';
        html += \'<span style="font-size: 1.25rem; line-height: 1;">\' + cronIcon + \'</span>\';
        html += \'<span style="font-weight: 500; color: #212529; font-size: 1rem;">Cron:</span>\';
        html += \'</div>\';
        html += \'<span style="background: \' + cronStatusColor + \'; color: white; padding: 0.25rem 0.75rem; font-size: 0.875rem; font-weight: 500; border-radius: 3px; text-transform: uppercase; letter-spacing: 0.025em;">\' + cronStatus + \'</span>\';
        html += \'</div>\';

        // Webhook trigger card
        if (data.webhook_enabled) {
            html += \'<div style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 1rem; background: #f8f9fa; border: 1px solid #e9ecef; border-radius: 4px;">\';
            html += \'<div style="display: flex; align-items: center; gap: 0.75rem;">\';
            html += \'<span style="font-size: 1.25rem; line-height: 1;"><i class="fa fa-check-circle" style="color: #28a745;"></i></span>\';
            html += \'<span style="font-weight: 500; color: #212529; font-size: 1rem;">Webhook:</span>\';
            html += \'</div>\';
            html += \'<span style="background: #28a745; color: white; padding: 0.25rem 0.75rem; font-size: 0.875rem; font-weight: 500; border-radius: 3px; text-transform: uppercase; letter-spacing: 0.025em;">ACTIVE</span>\';
            html += \'</div>\';
        } else {
            html += \'<div onclick="goToWebhookConfig()" style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 1rem; background: #fff; border: 1px solid #e9ecef; border-radius: 4px; cursor: pointer;" title="Click to configure webhooks">\';
            html += \'<div style="display: flex; align-items: center; gap: 0.75rem;">\';
            html += \'<span style="font-size: 1.25rem; line-height: 1;"><i class="fa fa-minus-circle" style="color: #ffc107;"></i></span>\';
            html += \'<span style="font-weight: 500; color: #212529; font-size: 1rem;">Webhook:</span>\';
            html += \'</div>\';
            html += \'<span style="background: #ffc107; color: #212529; padding: 0.25rem 0.75rem; font-size: 0.875rem; font-weight: 500; border-radius: 3px; text-transform: uppercase; letter-spacing: 0.025em;">DISABLED</span>\';
            html += \'</div>\';
        }

        html += \'</div>\';

        if (!cronReady && !data.webhook_enabled) {
            html += \'<div class="alert alert-warning" style="margin-top: 1rem; cursor: pointer;" onclick="goToWebhookConfig()">\';
            html += \'<i class="fa fa-exclamation-triangle"></i> No triggers active! \';
            html += \'<a onclick="goToWebhookConfig(); event.stopPropagation();" style="cursor: pointer; text-decoration: underline;">Enable webhooks</a>\';
            html += \' or configure cron.</div>\';
        }

        triggersEl.innerHTML = html;
    }

    if (document.readyState === \'loading\') {
        document.addEventListener(\'DOMContentLoaded\', renderTriggers);
    } else {
        renderTriggers();
    }
})();
</script>
',
                'markdown' => false,
                'name' => 'scheduler.trigger_methods',
                'validation' => 'loose'
            ],
            'scheduler.jobs_tab' => [
                'type' => 'tab',
                'name' => 'scheduler.jobs_tab',
                'validation' => 'loose'
            ],
            'scheduler.jobs_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.jobs_title',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs' => [
                'type' => 'list',
                'style' => 'vertical',
                'label' => NULL,
                'classes' => 'cron-job-list compact',
                'key' => 'id',
                'name' => 'scheduler.custom_jobs',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.id' => [
                'type' => 'key',
                'label' => 'PLUGIN_ADMIN.ID',
                'validate' => [
                    'required' => true,
                    'pattern' => '[a-zа-я0-9_\\-]+',
                    'max' => 20,
                    'message' => 'ID must be lowercase with dashes/underscores only and less than 20 characters'
                ],
                'name' => 'scheduler.custom_jobs.id',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.command' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.COMMAND',
                'validate' => [
                    'required' => true
                ],
                'name' => 'scheduler.custom_jobs.command',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.args' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.EXTRA_ARGUMENTS',
                'name' => 'scheduler.custom_jobs.args',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.at' => [
                'type' => 'text',
                'wrapper_classes' => 'cron-selector',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_RUNAT',
                'validate' => [
                    'required' => true
                ],
                'name' => 'scheduler.custom_jobs.at',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.output' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_OUTPUT',
                'name' => 'scheduler.custom_jobs.output',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.output_mode' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_OUTPUT_TYPE',
                'default' => 'append',
                'options' => [
                    'append' => 'Append',
                    'overwrite' => 'Overwrite'
                ],
                'name' => 'scheduler.custom_jobs.output_mode',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.email' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_EMAIL',
                'name' => 'scheduler.custom_jobs.email',
                'validation' => 'loose'
            ],
            'scheduler.modern_tab' => [
                'type' => 'tab',
                'name' => 'scheduler.modern_tab',
                'validation' => 'loose'
            ],
            'scheduler.workers_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.workers_section',
                'validation' => 'loose'
            ],
            'scheduler.modern' => [
                'type' => '_parent',
                'name' => 'scheduler.modern',
                'form_field' => false
            ],
            'scheduler.modern.workers' => [
                'type' => 'number',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_CONCURRENT_WORKERS',
                'default' => 4,
                'size' => 'x-small',
                'append' => 'workers',
                'validate' => [
                    'type' => 'int',
                    'min' => 1,
                    'max' => 10
                ],
                'name' => 'scheduler.modern.workers',
                'validation' => 'loose'
            ],
            'scheduler.retry_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.retry_section',
                'validation' => 'loose'
            ],
            'scheduler.modern.retry' => [
                'type' => '_parent',
                'name' => 'scheduler.modern.retry',
                'form_field' => false
            ],
            'scheduler.modern.retry.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_RETRY_ENABLED',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'scheduler.modern.retry.enabled',
                'validation' => 'loose'
            ],
            'scheduler.modern.retry.max_attempts' => [
                'type' => 'number',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_RETRY_MAX_ATTEMPTS',
                'default' => 3,
                'size' => 'x-small',
                'append' => 'retries',
                'validate' => [
                    'type' => 'int',
                    'min' => 1,
                    'max' => 10
                ],
                'name' => 'scheduler.modern.retry.max_attempts',
                'validation' => 'loose'
            ],
            'scheduler.modern.retry.backoff' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_RETRY_BACKOFF',
                'default' => 'exponential',
                'options' => [
                    'linear' => 'Linear (fixed delay)',
                    'exponential' => 'Exponential (increasing delay)'
                ],
                'name' => 'scheduler.modern.retry.backoff',
                'validation' => 'loose'
            ],
            'scheduler.queue_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.queue_section',
                'validation' => 'loose'
            ],
            'scheduler.modern.queue' => [
                'type' => '_parent',
                'name' => 'scheduler.modern.queue',
                'form_field' => false
            ],
            'scheduler.modern.queue.path' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_QUEUE_PATH',
                'default' => 'user-data://scheduler/queue',
                'name' => 'scheduler.modern.queue.path',
                'validation' => 'loose'
            ],
            'scheduler.modern.queue.max_size' => [
                'type' => 'number',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_QUEUE_MAX_SIZE',
                'default' => 1000,
                'size' => 'x-small',
                'append' => 'jobs',
                'validate' => [
                    'type' => 'int',
                    'min' => 100,
                    'max' => 10000
                ],
                'name' => 'scheduler.modern.queue.max_size',
                'validation' => 'loose'
            ],
            'scheduler.history_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.history_section',
                'validation' => 'loose'
            ],
            'scheduler.modern.history' => [
                'type' => '_parent',
                'name' => 'scheduler.modern.history',
                'form_field' => false
            ],
            'scheduler.modern.history.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_HISTORY_ENABLED',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'scheduler.modern.history.enabled',
                'validation' => 'loose'
            ],
            'scheduler.modern.history.retention_days' => [
                'type' => 'number',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_HISTORY_RETENTION',
                'default' => 30,
                'size' => 'x-small',
                'append' => 'days',
                'validate' => [
                    'type' => 'int',
                    'min' => 1,
                    'max' => 365
                ],
                'name' => 'scheduler.modern.history.retention_days',
                'validation' => 'loose'
            ],
            'scheduler.webhook_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.webhook_section',
                'validation' => 'loose'
            ],
            'scheduler.webhook_plugin_status' => [
                'type' => 'webhook-status',
                'label' => NULL,
                'name' => 'scheduler.webhook_plugin_status',
                'validation' => 'loose'
            ],
            'scheduler.modern.webhook' => [
                'type' => '_parent',
                'name' => 'scheduler.modern.webhook',
                'form_field' => false
            ],
            'scheduler.modern.webhook.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_WEBHOOK_ENABLED',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'scheduler.modern.webhook.enabled',
                'validation' => 'loose'
            ],
            'scheduler.modern.webhook.token' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_WEBHOOK_TOKEN',
                'autocomplete' => 'off',
                'name' => 'scheduler.modern.webhook.token',
                'validation' => 'loose'
            ],
            'scheduler.webhook_token_generate' => [
                'type' => 'display',
                'label' => NULL,
                'content' => '<div style="margin-top: -10px; margin-bottom: 15px;">
    <button type="button" class="button button-primary" onclick="generateWebhookToken()">
        <i class="fa fa-refresh"></i> Generate Token
    </button>
</div>
<script>
function generateWebhookToken() {
    try {
        // Generate token
        const array = new Uint8Array(32);
        crypto.getRandomValues(array);
        const token = Array.from(array, byte => byte.toString(16).padStart(2, \'0\')).join(\'\');
        
        // Try multiple selectors to find the field
        let field = document.querySelector(\'[name="data[scheduler][modern][webhook][token]"]\');
        if (!field) {
            field = document.querySelector(\'input[name*="webhook][token"]\');
        }
        if (!field) {
            field = document.getElementById(\'scheduler-modern-webhook-token\');
        }
        if (!field) {
            // Look for any text input in the webhook section
            const webhookSection = document.querySelector(\'.webhook_section\');
            if (webhookSection) {
                const inputs = webhookSection.querySelectorAll(\'input[type="text"]\');
                // Find the token field by checking for the placeholder
                for (let input of inputs) {
                    if (input.placeholder && input.placeholder.includes(\'Generate\')) {
                        field = input;
                        break;
                    }
                }
            }
        }
        
        if (field) {
            field.value = token;
            field.dispatchEvent(new Event(\'change\', { bubbles: true }));
            field.dispatchEvent(new Event(\'input\', { bubbles: true }));
            // Flash the field to show it was updated
            field.style.backgroundColor = \'#d4edda\';
            setTimeout(function() {
                field.style.backgroundColor = \'\';
            }, 500);
            // Also try to trigger Grav\'s form change detection
            if (window.jQuery) {
                jQuery(field).trigger(\'change\');
            }
        } else {
            // Log more debugging info
            console.error(\'Token field not found. Looking for input fields...\');
            console.log(\'All inputs:\', document.querySelectorAll(\'input[type="text"]\'));
            alert(\'Could not find the token field. Please ensure you are in the Advanced Features tab and the Webhook Configuration section is visible.\');
        }
    } catch (e) {
        console.error(\'Error generating token:\', e);
        alert(\'Error generating token: \' + e.message);
    }
}
</script>
',
                'markdown' => false,
                'name' => 'scheduler.webhook_token_generate',
                'validation' => 'loose'
            ],
            'scheduler.modern.webhook.path' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_WEBHOOK_PATH',
                'default' => '/scheduler/webhook',
                'name' => 'scheduler.modern.webhook.path',
                'validation' => 'loose'
            ],
            'scheduler.health_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.health_section',
                'validation' => 'loose'
            ],
            'scheduler.modern.health' => [
                'type' => '_parent',
                'name' => 'scheduler.modern.health',
                'form_field' => false
            ],
            'scheduler.modern.health.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_HEALTH_CHECK_ENABLED',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'scheduler.modern.health.enabled',
                'validation' => 'loose'
            ],
            'scheduler.modern.health.path' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_HEALTH_CHECK_PATH',
                'default' => '/scheduler/health',
                'name' => 'scheduler.modern.health.path',
                'validation' => 'loose'
            ],
            'scheduler.webhook_usage' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.webhook_usage',
                'validation' => 'loose'
            ],
            'scheduler.webhook_examples' => [
                'type' => 'display',
                'label' => NULL,
                'content' => '<script src="{{ url(\'plugin://admin/themes/grav/js/clipboard-helper.js\') }}"></script>
<div class="webhook-examples">
    <script>
    // Initialize webhook commands when page loads
    document.addEventListener(\'DOMContentLoaded\', function() {
        if (typeof GravClipboard !== \'undefined\') {
            GravClipboard.initWebhookCommands();
        }
    });
    </script>
    
    <div class="alert alert-info">
        <h4>How to use webhooks:</h4>
        
        <div style="margin-bottom: 1rem;">
            <label style="display: block; margin-bottom: 0.25rem; font-weight: 500;">Trigger all due jobs (respects schedule):</label>
            <div class="form-input-wrapper form-input-addon-wrapper">
                <textarea id="webhook-all-cmd" readonly rows="2" style="font-family: monospace; background: #f5f5f5; resize: none;">Loading...</textarea>
                <div class="form-input-addon form-input-append" style="cursor: pointer;" onclick="GravClipboard.copy(this)"><i class="fa fa-copy"></i> Copy</div>
            </div>
        </div>
        
        <div style="margin-bottom: 1rem;">
            <label style="display: block; margin-bottom: 0.25rem; font-weight: 500;">Force-run specific job (ignores schedule):</label>
            <div class="form-input-wrapper form-input-addon-wrapper">
                <textarea id="webhook-job-cmd" readonly rows="2" style="font-family: monospace; background: #f5f5f5; resize: none;">Loading...</textarea>
                <div class="form-input-addon form-input-append" style="cursor: pointer;" onclick="GravClipboard.copy(this)"><i class="fa fa-copy"></i> Copy</div>
            </div>
        </div>
        
        <div style="margin-bottom: 1rem;">
            <label style="display: block; margin-bottom: 0.25rem; font-weight: 500;">Check health status:</label>
            <div class="form-input-wrapper form-input-addon-wrapper">
                <input type="text" id="webhook-health-cmd" readonly value="Loading..." style="font-family: monospace; background: #f5f5f5;">
                <div class="form-input-addon form-input-append" style="cursor: pointer;" onclick="GravClipboard.copy(this)"><i class="fa fa-copy"></i> Copy</div>
            </div>
        </div>
        
        <div style="margin-top: 1rem;">
            <p><strong>GitHub Actions example:</strong></p>
            <pre>- name: Trigger Scheduler
  run: |
    curl -X POST ${{ secrets.SITE_URL }}/scheduler/webhook \\
      -H "Authorization: Bearer ${{ secrets.WEBHOOK_TOKEN }}"</pre>
        </div>
    </div>
</div>
',
                'markdown' => false,
                'name' => 'scheduler.webhook_examples',
                'validation' => 'loose'
            ],
            'security' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'security.xss_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'security.xss_section',
                'validation' => 'loose'
            ],
            'security.xss_whitelist' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.XSS_WHITELIST_PERMISSIONS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'security.xss_whitelist',
                'validation' => 'loose'
            ],
            'security.xss_enabled' => [
                'type' => '_parent',
                'name' => 'security.xss_enabled',
                'form_field' => false
            ],
            'security.xss_enabled.on_events' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.XSS_ON_EVENTS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.xss_enabled.on_events',
                'validation' => 'loose'
            ],
            'security.xss_enabled.invalid_protocols' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.XSS_INVALID_PROTOCOLS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.xss_enabled.invalid_protocols',
                'validation' => 'loose'
            ],
            'security.xss_invalid_protocols' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.XSS_INVALID_PROTOCOLS_LIST',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'security.xss_invalid_protocols',
                'validation' => 'loose'
            ],
            'security.xss_enabled.moz_binding' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.XSS_MOZ_BINDINGS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.xss_enabled.moz_binding',
                'validation' => 'loose'
            ],
            'security.xss_enabled.html_inline_styles' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.XSS_HTML_INLINE_STYLES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.xss_enabled.html_inline_styles',
                'validation' => 'loose'
            ],
            'security.xss_enabled.dangerous_tags' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.XSS_DANGEROUS_TAGS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.xss_enabled.dangerous_tags',
                'validation' => 'loose'
            ],
            'security.xss_dangerous_tags' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.XSS_DANGEROUS_TAGS_LIST',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'security.xss_dangerous_tags',
                'validation' => 'loose'
            ],
            'security.twig_content_section' => [
                'type' => 'section',
                'text' => 'PLUGIN_ADMIN.TWIG_CONTENT_HELP',
                'underline' => true,
                'name' => 'security.twig_content_section',
                'validation' => 'loose'
            ],
            'security.twig_content' => [
                'type' => '_parent',
                'name' => 'security.twig_content',
                'form_field' => false
            ],
            'security.twig_content.process_enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_CONTENT_PROCESS_ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => false,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.twig_content.process_enabled',
                'validation' => 'loose'
            ],
            'security.twig_content.editor_enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_CONTENT_EDITOR_ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => false,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.twig_content.editor_enabled',
                'validation' => 'loose'
            ],
            'security.twig_content.config_access' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_CONTENT_CONFIG_ACCESS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => false,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.twig_content.config_access',
                'validation' => 'loose'
            ],
            'security.twig_sandbox_section' => [
                'type' => 'section',
                'text' => 'PLUGIN_ADMIN.TWIG_SANDBOX_HELP',
                'underline' => true,
                'name' => 'security.twig_sandbox_section',
                'validation' => 'loose'
            ],
            'security.twig_sandbox' => [
                'type' => '_parent',
                'name' => 'security.twig_sandbox',
                'form_field' => false
            ],
            'security.twig_sandbox.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_SANDBOX_ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.twig_sandbox.enabled',
                'validation' => 'loose'
            ],
            'security.twig_sandbox.logging' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_SANDBOX_LOGGING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.twig_sandbox.logging',
                'validation' => 'loose'
            ],
            'security.twig_sandbox.admin_hint' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_SANDBOX_ADMIN_HINT',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.twig_sandbox.admin_hint',
                'validation' => 'loose'
            ],
            'security.twig_sandbox.allowed_tags' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.TWIG_SANDBOX_ALLOWED_TAGS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'security.twig_sandbox.allowed_tags',
                'validation' => 'loose'
            ],
            'security.twig_sandbox.allowed_filters' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.TWIG_SANDBOX_ALLOWED_FILTERS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'security.twig_sandbox.allowed_filters',
                'validation' => 'loose'
            ],
            'security.twig_sandbox.allowed_functions' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.TWIG_SANDBOX_ALLOWED_FUNCTIONS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'security.twig_sandbox.allowed_functions',
                'validation' => 'loose'
            ],
            'security.twig_sandbox.allowed_methods' => [
                'type' => 'list',
                'label' => 'PLUGIN_ADMIN.TWIG_SANDBOX_ALLOWED_METHODS',
                'style' => 'vertical',
                'collapsed' => true,
                'name' => 'security.twig_sandbox.allowed_methods',
                'validation' => 'loose'
            ],
            'security.twig_sandbox.allowed_methods.class' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.TWIG_SANDBOX_CLASS',
                'size' => 'large',
                'validate' => [
                    'required' => true
                ],
                'name' => 'security.twig_sandbox.allowed_methods.class',
                'validation' => 'loose'
            ],
            'security.twig_sandbox.allowed_methods.methods' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.TWIG_SANDBOX_METHODS',
                'size' => 'large',
                'name' => 'security.twig_sandbox.allowed_methods.methods',
                'validation' => 'loose'
            ],
            'security.twig_sandbox.allowed_properties' => [
                'type' => 'list',
                'label' => 'PLUGIN_ADMIN.TWIG_SANDBOX_ALLOWED_PROPERTIES',
                'style' => 'vertical',
                'collapsed' => true,
                'name' => 'security.twig_sandbox.allowed_properties',
                'validation' => 'loose'
            ],
            'security.twig_sandbox.allowed_properties.class' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.TWIG_SANDBOX_CLASS',
                'size' => 'large',
                'validate' => [
                    'required' => true
                ],
                'name' => 'security.twig_sandbox.allowed_properties.class',
                'validation' => 'loose'
            ],
            'security.twig_sandbox.allowed_properties.methods' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.TWIG_SANDBOX_PROPERTIES',
                'size' => 'large',
                'name' => 'security.twig_sandbox.allowed_properties.methods',
                'validation' => 'loose'
            ],
            'security.read_file_section' => [
                'type' => 'section',
                'text' => 'PLUGIN_ADMIN.READ_FILE_SECTION_HELP',
                'underline' => true,
                'name' => 'security.read_file_section',
                'validation' => 'loose'
            ],
            'security.read_file' => [
                'type' => '_parent',
                'name' => 'security.read_file',
                'form_field' => false
            ],
            'security.read_file.allowed_streams' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.READ_FILE_ALLOWED_STREAMS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'security.read_file.allowed_streams',
                'validation' => 'loose'
            ],
            'security.read_file.allowed_extensions' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.READ_FILE_ALLOWED_EXTENSIONS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'security.read_file.allowed_extensions',
                'validation' => 'loose'
            ],
            'security.read_file.max_size' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.READ_FILE_MAX_SIZE',
                'default' => 1048576,
                'validate' => [
                    'type' => 'int',
                    'min' => 0
                ],
                'name' => 'security.read_file.max_size',
                'validation' => 'loose'
            ],
            'security.uploads_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'security.uploads_section',
                'validation' => 'loose'
            ],
            'security.uploads_dangerous_extensions' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.UPLOADS_DANGEROUS_EXTENSIONS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'security.uploads_dangerous_extensions',
                'validation' => 'loose'
            ],
            'security.sanitize_svg' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SANITIZE_SVG',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.sanitize_svg',
                'validation' => 'loose'
            ],
            'site' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'site.content' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'site.content',
                'validation' => 'loose'
            ],
            'site.title' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SITE_TITLE',
                'size' => 'large',
                'name' => 'site.title',
                'validation' => 'loose'
            ],
            'site.default_lang' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SITE_DEFAULT_LANG',
                'size' => 'x-small',
                'name' => 'site.default_lang',
                'validation' => 'loose'
            ],
            'site.author' => [
                'type' => '_parent',
                'name' => 'site.author',
                'form_field' => false
            ],
            'site.author.name' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_AUTHOR',
                'name' => 'site.author.name',
                'validation' => 'loose'
            ],
            'site.author.email' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_EMAIL',
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'site.author.email',
                'validation' => 'loose'
            ],
            'site.taxonomies' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.TAXONOMY_TYPES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'site.taxonomies',
                'validation' => 'loose'
            ],
            'site.summary' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'site.summary',
                'validation' => 'loose'
            ],
            'site.summary.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'site.summary.enabled',
                'validation' => 'loose'
            ],
            'site.summary.size' => [
                'type' => 'text',
                'size' => 'small',
                'append' => 'PLUGIN_ADMIN.CHARACTERS',
                'label' => 'PLUGIN_ADMIN.SUMMARY_SIZE',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 65536
                ],
                'name' => 'site.summary.size',
                'validation' => 'loose'
            ],
            'site.summary.format' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORMAT',
                'classes' => 'fancy',
                'highlight' => 'short',
                'options' => [
                    'short' => 'PLUGIN_ADMIN.SHORT',
                    'long' => 'PLUGIN_ADMIN.LONG'
                ],
                'name' => 'site.summary.format',
                'validation' => 'loose'
            ],
            'site.summary.delimiter' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.DELIMITER',
                'name' => 'site.summary.delimiter',
                'validation' => 'loose'
            ],
            'site.metadata' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.METADATA',
                'name' => 'site.metadata',
                'validation' => 'loose',
                'underline' => true
            ],
            'site.routes' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.CUSTOM_ROUTES',
                'name' => 'site.routes',
                'validation' => 'loose',
                'underline' => true
            ],
            'site.redirects' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS',
                'name' => 'site.redirects',
                'validation' => 'loose'
            ],
            'streams' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose',
                    'hidden' => true
                ]
            ],
            'streams.schemes' => [
                'type' => '_parent',
                'name' => 'streams.schemes',
                'form_field' => false
            ],
            'streams.schemes.xxx' => [
                'type' => 'array',
                'name' => 'streams.schemes.xxx',
                'validation' => 'loose'
            ],
            'system' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'system.system_tabs' => [
                'type' => 'tabs',
                'classes' => 'side-tabs',
                'name' => 'system.system_tabs',
                'validation' => 'loose'
            ],
            'system.content' => [
                'type' => 'tab',
                'name' => 'system.content',
                'validation' => 'loose'
            ],
            'system.content_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.content_section',
                'validation' => 'loose'
            ],
            'system.home' => [
                'type' => '_parent',
                'name' => 'system.home',
                'form_field' => false
            ],
            'system.home.alias' => [
                'type' => 'pages',
                'size' => 'large',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.HOME_PAGE',
                'show_all' => false,
                'show_modular' => false,
                'show_root' => false,
                'show_slug' => true,
                'name' => 'system.home.alias',
                'validation' => 'loose'
            ],
            'system.home.hide_in_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HIDE_HOME_IN_URLS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.home.hide_in_urls',
                'validation' => 'loose'
            ],
            'system.pages' => [
                'type' => '_parent',
                'name' => 'system.pages',
                'form_field' => false
            ],
            'system.pages.theme' => [
                'type' => 'themeselect',
                'classes' => 'fancy',
                'selectize' => true,
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.DEFAULT_THEME',
                'name' => 'system.pages.theme',
                'validation' => 'loose'
            ],
            'system.pages.process' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_ADMIN.PROCESS',
                'default' => [
                    0 => [
                        'markdown' => true
                    ]
                ],
                'options' => [
                    'markdown' => 'Markdown'
                ],
                'use' => 'keys',
                'name' => 'system.pages.process',
                'validation' => 'loose'
            ],
            'system.pages.types' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.PAGE_TYPES',
                'size' => 'small',
                'default' => [
                    0 => 'html',
                    1 => 'htm',
                    2 => 'json',
                    3 => 'xml',
                    4 => 'txt',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'value_only' => true,
                'name' => 'system.pages.types',
                'validation' => 'loose'
            ],
            'system.markdown_output_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.markdown_output_section',
                'validation' => 'loose'
            ],
            'system.pages.markdown_output' => [
                'type' => '_parent',
                'name' => 'system.pages.markdown_output',
                'form_field' => false
            ],
            'system.pages.markdown_output.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.MARKDOWN_OUTPUT_ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown_output.enabled',
                'validation' => 'loose'
            ],
            'system.pages.markdown_output.frontmatter' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.MARKDOWN_OUTPUT_FRONTMATTER',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown_output.frontmatter',
                'validation' => 'loose'
            ],
            'system.pages.markdown_output.links' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.MARKDOWN_OUTPUT_LINKS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown_output.links',
                'validation' => 'loose'
            ],
            'system.pages.markdown_output.max_links' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.MARKDOWN_OUTPUT_MAX_LINKS',
                'validate' => [
                    'type' => 'int',
                    'min' => 0
                ],
                'name' => 'system.pages.markdown_output.max_links',
                'validation' => 'loose'
            ],
            'system.pages.markdown_output.absolute_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.MARKDOWN_OUTPUT_ABSOLUTE_URLS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown_output.absolute_urls',
                'validation' => 'loose'
            ],
            'system.pages.markdown_output.token_header' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.MARKDOWN_OUTPUT_TOKEN_HEADER',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown_output.token_header',
                'validation' => 'loose'
            ],
            'system.timezone' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.TIMEZONE',
                'size' => 'medium',
                'classes' => 'fancy',
                'data-options@' => '\\Grav\\Common\\Utils::timezones',
                'default' => '',
                'options' => [
                    '' => 'Default (Server Timezone)'
                ],
                'name' => 'system.timezone',
                'validation' => 'loose'
            ],
            'system.pages.dateformat' => [
                'type' => '_parent',
                'name' => 'system.pages.dateformat',
                'form_field' => false
            ],
            'system.pages.dateformat.default' => [
                'type' => 'select',
                'size' => 'medium',
                'selectize' => [
                    'create' => true
                ],
                'label' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT',
                'data-options@' => '\\Grav\\Common\\Utils::dateFormats',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'system.pages.dateformat.default',
                'validation' => 'loose'
            ],
            'system.pages.dateformat.short' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT',
                'default' => 'jS M Y',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
                    'D, d M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5',
                    'Y-m-d G:i' => 'Date6',
                    'Y-m-d' => 'Date7'
                ],
                'name' => 'system.pages.dateformat.short',
                'validation' => 'loose'
            ],
            'system.pages.dateformat.long' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.LONG_DATE_FORMAT',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
                    'D, d M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5',
                    'Y-m-d G:i:s' => 'Date6',
                    'Y-m-d H:i' => 'Date7'
                ],
                'name' => 'system.pages.dateformat.long',
                'validation' => 'loose'
            ],
            'system.pages.order' => [
                'type' => '_parent',
                'name' => 'system.pages.order',
                'form_field' => false
            ],
            'system.pages.order.by' => [
                'type' => 'select',
                'size' => 'large',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDERING',
                'options' => [
                    'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                    'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                    'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                    'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                ],
                'name' => 'system.pages.order.by',
                'validation' => 'loose'
            ],
            'system.pages.order.dir' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                'highlight' => 'asc',
                'default' => 'desc',
                'options' => [
                    'asc' => 'PLUGIN_ADMIN.ASCENDING',
                    'desc' => 'PLUGIN_ADMIN.DESCENDING'
                ],
                'name' => 'system.pages.order.dir',
                'validation' => 'loose'
            ],
            'system.pages.order_digits' => [
                'type' => 'select',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.ORDER_DIGITS',
                'default' => 2,
                'options' => [
                    1 => '1 (e.g. 5.about)',
                    2 => '2 (e.g. 05.about)',
                    3 => '3 (e.g. 005.about)',
                    4 => '4 (e.g. 0005.about)'
                ],
                'validate' => [
                    'type' => 'int',
                    'min' => 1,
                    'max' => 6
                ],
                'name' => 'system.pages.order_digits',
                'validation' => 'loose'
            ],
            'system.pages.list' => [
                'type' => '_parent',
                'name' => 'system.pages.list',
                'form_field' => false
            ],
            'system.pages.list.count' => [
                'type' => 'text',
                'size' => 'x-small',
                'append' => 'PLUGIN_ADMIN.PAGES',
                'label' => 'PLUGIN_ADMIN.DEFAULT_PAGE_COUNT',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.list.count',
                'validation' => 'loose'
            ],
            'system.pages.publish_dates' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DATE_BASED_PUBLISHING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.publish_dates',
                'validation' => 'loose'
            ],
            'system.pages.events' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_ADMIN.EVENTS',
                'default' => [
                    0 => [
                        'page' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'page' => 'Page Events',
                    'twig' => 'Twig Events'
                ],
                'use' => 'keys',
                'name' => 'system.pages.events',
                'validation' => 'loose'
            ],
            'system.pages.append_url_extension' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.APPEND_URL_EXT',
                'name' => 'system.pages.append_url_extension',
                'validation' => 'loose'
            ],
            'system.pages.redirect_default_code' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_CODE',
                'default' => 302,
                'options' => [
                    301 => 'PLUGIN_ADMIN.REDIRECT_OPTION_301',
                    302 => 'PLUGIN_ADMIN.REDIRECT_OPTION_302',
                    303 => 'PLUGIN_ADMIN.REDIRECT_OPTION_303'
                ],
                'name' => 'system.pages.redirect_default_code',
                'validation' => 'loose'
            ],
            'system.pages.redirect_default_route' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_ROUTE',
                'default' => 0,
                'options' => [
                    0 => 'PLUGIN_ADMIN.REDIRECT_OPTION_NO_REDIRECT',
                    1 => 'PLUGIN_ADMIN.REDIRECT_OPTION_DEFAULT_REDIRECT',
                    301 => 'PLUGIN_ADMIN.REDIRECT_OPTION_301',
                    302 => 'PLUGIN_ADMIN.REDIRECT_OPTION_302'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'system.pages.redirect_default_route',
                'validation' => 'loose'
            ],
            'system.pages.redirect_trailing_slash' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.REDIRECT_TRAILING_SLASH',
                'default' => 1,
                'options' => [
                    0 => 'PLUGIN_ADMIN.REDIRECT_OPTION_NO_REDIRECT',
                    1 => 'PLUGIN_ADMIN.REDIRECT_OPTION_DEFAULT_REDIRECT',
                    301 => 'PLUGIN_ADMIN.REDIRECT_OPTION_301',
                    302 => 'PLUGIN_ADMIN.REDIRECT_OPTION_302'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'system.pages.redirect_trailing_slash',
                'validation' => 'loose'
            ],
            'system.pages.ignore_hidden' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IGNORE_HIDDEN',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.ignore_hidden',
                'validation' => 'loose'
            ],
            'system.pages.ignore_files' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FILES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_files',
                'validation' => 'loose'
            ],
            'system.pages.ignore_folders' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FOLDERS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_folders',
                'validation' => 'loose'
            ],
            'system.pages.hide_empty_folders' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HIDE_EMPTY_FOLDERS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.hide_empty_folders',
                'validation' => 'loose'
            ],
            'system.pages.url_taxonomy_filters' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ALLOW_URL_TAXONOMY_FILTERS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.url_taxonomy_filters',
                'validation' => 'loose'
            ],
            'system.pages.twig_first' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_FIRST',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.twig_first',
                'validation' => 'loose'
            ],
            'system.pages.never_cache_twig' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.NEVER_CACHE_TWIG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.never_cache_twig',
                'validation' => 'loose'
            ],
            'system.pages.frontmatter' => [
                'type' => '_parent',
                'name' => 'system.pages.frontmatter',
                'form_field' => false
            ],
            'system.pages.frontmatter.process_twig' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FRONTMATTER_PROCESS_TWIG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.frontmatter.process_twig',
                'validation' => 'loose'
            ],
            'system.pages.frontmatter.ignore_fields' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.FRONTMATTER_IGNORE_FIELDS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.frontmatter.ignore_fields',
                'validation' => 'loose'
            ],
            'system.pages.frontmatter.native_yaml' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FRONTMATTER_NATIVE_YAML',
                'highlight' => 0,
                'default' => false,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.frontmatter.native_yaml',
                'validation' => 'loose'
            ],
            'system.languages' => [
                'type' => 'tab',
                'name' => 'system.languages',
                'validation' => 'loose'
            ],
            'system.languages-section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.languages-section',
                'validation' => 'loose'
            ],
            'system.languages.supported' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.SUPPORTED',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.languages.supported',
                'validation' => 'loose'
            ],
            'system.languages.default_lang' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.DEFAULT_LANG',
                'name' => 'system.languages.default_lang',
                'validation' => 'loose'
            ],
            'system.languages.include_default_lang' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.INCLUDE_DEFAULT_LANG',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.include_default_lang',
                'validation' => 'loose'
            ],
            'system.languages.include_default_lang_file_extension' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.INCLUDE_DEFAULT_LANG_FILE_EXTENSION',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.include_default_lang_file_extension',
                'validation' => 'loose'
            ],
            'system.languages.content_fallback' => [
                'type' => 'list',
                'label' => 'PLUGIN_ADMIN.CONTENT_LANGUAGE_FALLBACKS',
                'name' => 'system.languages.content_fallback',
                'validation' => 'loose'
            ],
            'system.key' => [
                'type' => 'key',
                'label' => 'PLUGIN_ADMIN.LANGUAGE',
                'name' => 'system.key',
                'validation' => 'loose'
            ],
            'system.value' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE_FALLBACK_TARGETS',
                'classes' => 'fancy',
                'name' => 'system.value',
                'validation' => 'loose'
            ],
            'system.languages.pages_fallback_only' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PAGES_FALLBACK_ONLY',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.pages_fallback_only',
                'validation' => 'loose'
            ],
            'system.languages.translations' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LANGUAGE_TRANSLATIONS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations',
                'validation' => 'loose'
            ],
            'system.languages.translations_fallback' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TRANSLATIONS_FALLBACK',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations_fallback',
                'validation' => 'loose'
            ],
            'system.languages.session_store_active' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ACTIVE_LANGUAGE_IN_SESSION',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.session_store_active',
                'validation' => 'loose'
            ],
            'system.languages.http_accept_language' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.http_accept_language',
                'validation' => 'loose'
            ],
            'system.languages.http_accept_language_fallback' => [
                'type' => 'list',
                'label' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE_FALLBACK',
                'name' => 'system.languages.http_accept_language_fallback',
                'validation' => 'loose'
            ],
            'system.languages.override_locale' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.OVERRIDE_LOCALE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.override_locale',
                'validation' => 'loose'
            ],
            'system.languages.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LANGUAGE_DEBUG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.debug',
                'validation' => 'loose'
            ],
            'system.http_headers' => [
                'type' => 'tab',
                'name' => 'system.http_headers',
                'validation' => 'loose'
            ],
            'system.http_headers_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.http_headers_section',
                'validation' => 'loose'
            ],
            'system.pages.expires' => [
                'type' => 'text',
                'size' => 'x-small',
                'append' => 'GRAV.NICETIME.SECOND_PLURAL',
                'label' => 'PLUGIN_ADMIN.EXPIRES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.expires',
                'validation' => 'loose'
            ],
            'system.pages.cache_control' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.CACHE_CONTROL',
                'name' => 'system.pages.cache_control',
                'validation' => 'loose'
            ],
            'system.pages.last_modified' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LAST_MODIFIED',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.last_modified',
                'validation' => 'loose'
            ],
            'system.pages.etag' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ETAG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.etag',
                'validation' => 'loose'
            ],
            'system.pages.vary_accept_encoding' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.VARY_ACCEPT_ENCODING',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.vary_accept_encoding',
                'validation' => 'loose'
            ],
            'system.markdown' => [
                'type' => 'tab',
                'name' => 'system.markdown',
                'validation' => 'loose'
            ],
            'system.markdow_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.markdow_section',
                'validation' => 'loose'
            ],
            'system.pages.markdown' => [
                'type' => '_parent',
                'name' => 'system.pages.markdown',
                'form_field' => false
            ],
            'system.pages.markdown.extra' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.MARKDOWN_EXTRA',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.extra',
                'validation' => 'loose'
            ],
            'system.pages.markdown.auto_line_breaks' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_LINE_BREAKS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_line_breaks',
                'validation' => 'loose'
            ],
            'system.pages.markdown.auto_url_links' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_URL_LINKS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_url_links',
                'validation' => 'loose'
            ],
            'system.pages.markdown.escape_markup' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ESCAPE_MARKUP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.escape_markup',
                'validation' => 'loose'
            ],
            'system.pages.markdown.gfm' => [
                'type' => '_parent',
                'name' => 'system.pages.markdown.gfm',
                'form_field' => false
            ],
            'system.pages.markdown.gfm.task_lists' => [
                'type' => 'toggle',
                'label' => 'GFM Task Lists',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.gfm.task_lists',
                'validation' => 'loose'
            ],
            'system.pages.markdown.gfm.marks' => [
                'type' => 'toggle',
                'label' => 'GFM Highlight / Sub / Superscript',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.gfm.marks',
                'validation' => 'loose'
            ],
            'system.pages.markdown.gfm.tagfilter' => [
                'type' => 'toggle',
                'label' => 'GFM Tag Filter',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.gfm.tagfilter',
                'validation' => 'loose'
            ],
            'system.pages.markdown.gfm.autolinks' => [
                'type' => 'toggle',
                'label' => 'GFM Autolinks',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.gfm.autolinks',
                'validation' => 'loose'
            ],
            'system.pages.markdown.tables' => [
                'type' => '_parent',
                'name' => 'system.pages.markdown.tables',
                'form_field' => false
            ],
            'system.pages.markdown.tables.colspan' => [
                'type' => 'toggle',
                'label' => 'Table Cell Colspan',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.tables.colspan',
                'validation' => 'loose'
            ],
            'system.pages.markdown.tables.headerless' => [
                'type' => 'toggle',
                'label' => 'Header-less Tables',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.tables.headerless',
                'validation' => 'loose'
            ],
            'system.pages.markdown.tables.captions' => [
                'type' => 'toggle',
                'label' => 'Table Captions',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.tables.captions',
                'validation' => 'loose'
            ],
            'system.pages.markdown.tables.attributes' => [
                'type' => 'toggle',
                'label' => 'Table Attributes',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.tables.attributes',
                'validation' => 'loose'
            ],
            'system.pages.markdown.tables.multiline' => [
                'type' => 'toggle',
                'label' => 'Multi-line Table Cells',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.tables.multiline',
                'validation' => 'loose'
            ],
            'system.pages.markdown.valid_link_attributes' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.VALID_LINK_ATTRIBUTES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.markdown.valid_link_attributes',
                'validation' => 'loose'
            ],
            'system.caching' => [
                'type' => 'tab',
                'name' => 'system.caching',
                'validation' => 'loose'
            ],
            'system.caching_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.caching_section',
                'validation' => 'loose'
            ],
            'system.cache' => [
                'type' => '_parent',
                'name' => 'system.cache',
                'form_field' => false
            ],
            'system.cache.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CACHING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.enabled',
                'validation' => 'loose'
            ],
            'system.cache.check' => [
                'type' => '_parent',
                'name' => 'system.cache.check',
                'form_field' => false
            ],
            'system.cache.check.method' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.CACHE_CHECK_METHOD',
                'options' => [
                    'file' => 'Markdown + Yaml file timestamps',
                    'folder' => 'Folder timestamps',
                    'hash' => 'All files timestamps',
                    'none' => 'No timestamp checking'
                ],
                'name' => 'system.cache.check.method',
                'validation' => 'loose'
            ],
            'system.cache.check.interval' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.CACHE_CHECK_INTERVAL',
                'validate' => [
                    'type' => 'int',
                    'min' => 0
                ],
                'name' => 'system.cache.check.interval',
                'validation' => 'loose'
            ],
            'system.pages.lazy_index' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.PAGES_LAZY_INDEX',
                'default' => 'auto',
                'options' => [
                    0 => 'PLUGIN_ADMIN.NO',
                    1 => 'PLUGIN_ADMIN.YES',
                    'auto' => 'PLUGIN_ADMIN.AUTO'
                ],
                'name' => 'system.pages.lazy_index',
                'validation' => 'loose'
            ],
            'system.cache.driver' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.CACHE_DRIVER',
                'options' => [
                    'auto' => 'Auto detect',
                    'file' => 'File',
                    'apcu' => 'APCu',
                    'memcache' => 'Memcache',
                    'memcached' => 'Memcached',
                    'redis' => 'Redis'
                ],
                'name' => 'system.cache.driver',
                'validation' => 'loose'
            ],
            'system.cache.prefix' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.CACHE_PREFIX',
                'name' => 'system.cache.prefix',
                'validation' => 'loose'
            ],
            'system.cache.purge_max_age_days' => [
                'type' => 'text',
                'size' => 'x-small',
                'append' => 'GRAV.NICETIME.DAY_PLURAL',
                'label' => 'PLUGIN_ADMIN.CACHE_PURGE_AGE',
                'validate' => [
                    'type' => 'number',
                    'min' => 1,
                    'max' => 365,
                    'step' => 1
                ],
                'default' => 30,
                'name' => 'system.cache.purge_max_age_days',
                'validation' => 'loose'
            ],
            'system.cache.purge_at' => [
                'type' => 'cron',
                'label' => 'PLUGIN_ADMIN.CACHE_PURGE_JOB',
                'default' => '* 4 * * *',
                'name' => 'system.cache.purge_at',
                'validation' => 'loose'
            ],
            'system.cache.clear_at' => [
                'type' => 'cron',
                'label' => 'PLUGIN_ADMIN.CACHE_CLEAR_JOB',
                'default' => '* 3 * * *',
                'name' => 'system.cache.clear_at',
                'validation' => 'loose'
            ],
            'system.cache.clear_job_type' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.CACHE_JOB_TYPE',
                'options' => [
                    'standard' => 'Standard Cache Folders',
                    'all' => 'All Cache Folders'
                ],
                'name' => 'system.cache.clear_job_type',
                'validation' => 'loose'
            ],
            'system.cache.clear_images_by_default' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CLEAR_IMAGES_BY_DEFAULT',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.clear_images_by_default',
                'validation' => 'loose'
            ],
            'system.cache.cli_compatibility' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CLI_COMPATIBILITY',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.cli_compatibility',
                'validation' => 'loose'
            ],
            'system.cache.lifetime' => [
                'type' => 'text',
                'size' => 'small',
                'append' => 'GRAV.NICETIME.SECOND_PLURAL',
                'label' => 'PLUGIN_ADMIN.LIFETIME',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.cache.lifetime',
                'validation' => 'loose'
            ],
            'system.cache.gzip' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GZIP_COMPRESSION',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.gzip',
                'validation' => 'loose'
            ],
            'system.cache.allow_webserver_gzip' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ALLOW_WEBSERVER_GZIP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.allow_webserver_gzip',
                'validation' => 'loose'
            ],
            'system.cache.memcached' => [
                'type' => '_parent',
                'name' => 'system.cache.memcached',
                'form_field' => false
            ],
            'system.cache.memcached.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.MEMCACHED_SERVER',
                'name' => 'system.cache.memcached.server',
                'validation' => 'loose'
            ],
            'system.cache.memcached.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.MEMCACHED_PORT',
                'name' => 'system.cache.memcached.port',
                'validation' => 'loose'
            ],
            'system.cache.redis' => [
                'type' => '_parent',
                'name' => 'system.cache.redis',
                'form_field' => false
            ],
            'system.cache.redis.socket' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.REDIS_SOCKET',
                'name' => 'system.cache.redis.socket',
                'validation' => 'loose'
            ],
            'system.cache.redis.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.REDIS_SERVER',
                'name' => 'system.cache.redis.server',
                'validation' => 'loose'
            ],
            'system.cache.redis.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.REDIS_PORT',
                'name' => 'system.cache.redis.port',
                'validation' => 'loose'
            ],
            'system.cache.redis.password' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.REDIS_PASSWORD',
                'name' => 'system.cache.redis.password',
                'validation' => 'loose'
            ],
            'system.cache.redis.database' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.REDIS_DATABASE',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'system.cache.redis.database',
                'validation' => 'loose'
            ],
            'system.flex_caching' => [
                'type' => 'section',
                'name' => 'system.flex_caching',
                'validation' => 'loose'
            ],
            'system.flex' => [
                'type' => '_parent',
                'name' => 'system.flex',
                'form_field' => false
            ],
            'system.flex.cache' => [
                'type' => '_parent',
                'name' => 'system.flex.cache',
                'form_field' => false
            ],
            'system.flex.cache.index' => [
                'type' => '_parent',
                'name' => 'system.flex.cache.index',
                'form_field' => false
            ],
            'system.flex.cache.index.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FLEX_INDEX_CACHE_ENABLED',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.flex.cache.index.enabled',
                'validation' => 'loose'
            ],
            'system.flex.cache.index.lifetime' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.FLEX_INDEX_CACHE_LIFETIME',
                'default' => 60,
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'system.flex.cache.index.lifetime',
                'validation' => 'loose'
            ],
            'system.flex.cache.object' => [
                'type' => '_parent',
                'name' => 'system.flex.cache.object',
                'form_field' => false
            ],
            'system.flex.cache.object.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FLEX_OBJECT_CACHE_ENABLED',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.flex.cache.object.enabled',
                'validation' => 'loose'
            ],
            'system.flex.cache.object.lifetime' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.FLEX_OBJECT_CACHE_LIFETIME',
                'default' => 600,
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'system.flex.cache.object.lifetime',
                'validation' => 'loose'
            ],
            'system.flex.cache.render' => [
                'type' => '_parent',
                'name' => 'system.flex.cache.render',
                'form_field' => false
            ],
            'system.flex.cache.render.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FLEX_RENDER_CACHE_ENABLED',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.flex.cache.render.enabled',
                'validation' => 'loose'
            ],
            'system.flex.cache.render.lifetime' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.FLEX_RENDER_CACHE_LIFETIME',
                'default' => 600,
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'system.flex.cache.render.lifetime',
                'validation' => 'loose'
            ],
            'system.twig' => [
                'type' => 'tab',
                'name' => 'system.twig',
                'validation' => 'loose'
            ],
            'system.twig_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.twig_section',
                'validation' => 'loose'
            ],
            'system.twig.cache' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_CACHING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.cache',
                'validation' => 'loose'
            ],
            'system.twig.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_DEBUG',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.debug',
                'validation' => 'loose'
            ],
            'system.twig.auto_reload' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DETECT_CHANGES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.auto_reload',
                'validation' => 'loose'
            ],
            'system.twig.autoescape' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTOESCAPE_VARIABLES',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.autoescape',
                'validation' => 'loose'
            ],
            'system.assets' => [
                'type' => 'tab',
                'name' => 'system.assets',
                'validation' => 'loose'
            ],
            'system.general_config_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.general_config_section',
                'validation' => 'loose'
            ],
            'system.assets.enable_asset_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED_TIMESTAMPS_ON_ASSETS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.enable_asset_timestamp',
                'validation' => 'loose'
            ],
            'system.assets.enable_asset_sri' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED_SRI_ON_ASSETS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.enable_asset_sri',
                'validation' => 'loose'
            ],
            'system.assets.collections' => [
                'type' => 'multilevel',
                'label' => 'PLUGIN_ADMIN.COLLECTIONS',
                'validate' => [
                    'type' => 'array'
                ],
                'name' => 'system.assets.collections',
                'validation' => 'loose'
            ],
            'system.css_assets_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.css_assets_section',
                'validation' => 'loose'
            ],
            'system.assets.css_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline',
                'validation' => 'loose'
            ],
            'system.assets.css_pipeline_include_externals' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE_INCLUDE_EXTERNALS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline_include_externals',
                'validation' => 'loose'
            ],
            'system.assets.css_pipeline_before_excludes' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE_BEFORE_EXCLUDES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline_before_excludes',
                'validation' => 'loose'
            ],
            'system.assets.css_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify',
                'validation' => 'loose'
            ],
            'system.assets.css_minify_windows' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY_WINDOWS_OVERRIDE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify_windows',
                'validation' => 'loose'
            ],
            'system.assets.css_rewrite' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_REWRITE',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_rewrite',
                'validation' => 'loose'
            ],
            'system.js_assets_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.js_assets_section',
                'validation' => 'loose'
            ],
            'system.assets.js_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline',
                'validation' => 'loose'
            ],
            'system.assets.js_pipeline_include_externals' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_INCLUDE_EXTERNALS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline_include_externals',
                'validation' => 'loose'
            ],
            'system.assets.js_pipeline_before_excludes' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_BEFORE_EXCLUDES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline_before_excludes',
                'validation' => 'loose'
            ],
            'system.assets.js_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MINIFY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_minify',
                'validation' => 'loose'
            ],
            'system.js_module_assets_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.js_module_assets_section',
                'validation' => 'loose'
            ],
            'system.assets.js_module_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MODULE_PIPELINE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_module_pipeline',
                'validation' => 'loose'
            ],
            'system.assets.js_module_pipeline_include_externals' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MODULE_PIPELINE_INCLUDE_EXTERNALS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_module_pipeline_include_externals',
                'validation' => 'loose'
            ],
            'system.assets.js_module_pipeline_before_excludes' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MODULE_PIPELINE_BEFORE_EXCLUDES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_module_pipeline_before_excludes',
                'validation' => 'loose'
            ],
            'system.errors' => [
                'type' => 'tab',
                'name' => 'system.errors',
                'validation' => 'loose'
            ],
            'system.errors_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.errors_section',
                'validation' => 'loose'
            ],
            'system.errors.display' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.DISPLAY_ERRORS',
                'size' => 'medium',
                'highlight' => 1,
                'options' => [
                    -1 => 'PLUGIN_ADMIN.ERROR_SYSTEM',
                    0 => 'PLUGIN_ADMIN.ERROR_SIMPLE',
                    1 => 'PLUGIN_ADMIN.ERROR_FULL_BACKTRACE'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'system.errors.display',
                'validation' => 'loose'
            ],
            'system.errors.log' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LOG_ERRORS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.log',
                'validation' => 'loose'
            ],
            'system.log' => [
                'type' => '_parent',
                'name' => 'system.log',
                'form_field' => false
            ],
            'system.log.handler' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.LOG_HANDLER',
                'default' => 'file',
                'options' => [
                    'file' => 'File',
                    'syslog' => 'Syslog'
                ],
                'name' => 'system.log.handler',
                'validation' => 'loose'
            ],
            'system.log.syslog' => [
                'type' => '_parent',
                'name' => 'system.log.syslog',
                'form_field' => false
            ],
            'system.log.syslog.facility' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.SYSLOG_FACILITY',
                'default' => 'local6',
                'options' => [
                    'auth' => 'auth',
                    'authpriv' => 'authpriv',
                    'cron' => 'cron',
                    'daemon' => 'daemon',
                    'kern' => 'kern',
                    'lpr' => 'lpr',
                    'mail' => 'mail',
                    'news' => 'news',
                    'syslog' => 'syslog',
                    'user' => 'user',
                    'uucp' => 'uucp',
                    'local0' => 'local0',
                    'local1' => 'local1',
                    'local2' => 'local2',
                    'local3' => 'local3',
                    'local4' => 'local4',
                    'local5' => 'local5',
                    'local6' => 'local6',
                    'local7' => 'local7'
                ],
                'name' => 'system.log.syslog.facility',
                'validation' => 'loose'
            ],
            'system.log.syslog.tag' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.SYSLOG_TAG',
                'name' => 'system.log.syslog.tag',
                'validation' => 'loose'
            ],
            'system.debugger' => [
                'type' => 'tab',
                'name' => 'system.debugger',
                'validation' => 'loose'
            ],
            'system.debugger_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.debugger_section',
                'validation' => 'loose'
            ],
            'system.debugger.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEBUGGER',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.enabled',
                'validation' => 'loose'
            ],
            'system.debugger.provider' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.DEBUGGER_PROVIDER',
                'size' => 'medium',
                'default' => 'debugbar',
                'options' => [
                    'debugbar' => 'PLUGIN_ADMIN.DEBUGGER_DEBUGBAR',
                    'clockwork' => 'PLUGIN_ADMIN.DEBUGGER_CLOCKWORK'
                ],
                'name' => 'system.debugger.provider',
                'validation' => 'loose'
            ],
            'system.debugger.censored' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEBUGGER_CENSORED',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.censored',
                'validation' => 'loose'
            ],
            'system.debugger.token' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.DEBUGGER_TOKEN',
                'autocomplete' => 'off',
                'name' => 'system.debugger.token',
                'validation' => 'loose'
            ],
            'system.debugger.flex_render_hints' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEBUGGER_FLEX_RENDER_HINTS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.flex_render_hints',
                'validation' => 'loose'
            ],
            'system.debugger.shutdown' => [
                'type' => '_parent',
                'name' => 'system.debugger.shutdown',
                'form_field' => false
            ],
            'system.debugger.shutdown.close_connection' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SHUTDOWN_CLOSE_CONNECTION',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.shutdown.close_connection',
                'validation' => 'loose'
            ],
            'system.media' => [
                'type' => 'tab',
                'name' => 'system.media',
                'validation' => 'loose'
            ],
            'system.media_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.media_section',
                'validation' => 'loose'
            ],
            'system.images' => [
                'type' => '_parent',
                'name' => 'system.images',
                'form_field' => false
            ],
            'system.images.adapter' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.IMAGE_ADAPTER',
                'highlight' => 'gd',
                'options' => [
                    'gd' => 'GD (PHP built-in)',
                    'imagick' => 'Imagick'
                ],
                'name' => 'system.images.adapter',
                'validation' => 'loose'
            ],
            'system.images.default_image_quality' => [
                'type' => 'range',
                'append' => '%',
                'label' => 'PLUGIN_ADMIN.DEFAULT_IMAGE_QUALITY',
                'validate' => [
                    'min' => 1,
                    'max' => 100
                ],
                'name' => 'system.images.default_image_quality',
                'validation' => 'loose'
            ],
            'system.images.progressive_jpeg' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_PROGRESSIVE_JPEG',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.progressive_jpeg',
                'validation' => 'loose'
            ],
            'system.images.cache_all' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CACHE_ALL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.cache_all',
                'validation' => 'loose'
            ],
            'system.images.cache_perms' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.CACHE_PERMS',
                'highlight' => '0775',
                'options' => [
                    '0755' => '0755',
                    '0775' => '0775'
                ],
                'name' => 'system.images.cache_perms',
                'validation' => 'loose'
            ],
            'system.images.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_DEBUG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.debug',
                'validation' => 'loose'
            ],
            'system.images.auto_fix_orientation' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_AUTO_FIX_ORIENTATION',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.auto_fix_orientation',
                'validation' => 'loose'
            ],
            'system.images.url_actions' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_URL_ACTIONS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.url_actions',
                'validation' => 'loose'
            ],
            'system.images.max_pixels' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.IMAGES_MAX_PIXELS',
                'validate' => [
                    'type' => 'int',
                    'min' => 0
                ],
                'name' => 'system.images.max_pixels',
                'validation' => 'loose'
            ],
            'system.images.defaults' => [
                'type' => '_parent',
                'name' => 'system.images.defaults',
                'form_field' => false
            ],
            'system.images.defaults.loading' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.IMAGES_LOADING',
                'highlight' => 'auto',
                'options' => [
                    'auto' => 'Auto',
                    'lazy' => 'Lazy',
                    'eager' => 'Eager'
                ],
                'name' => 'system.images.defaults.loading',
                'validation' => 'loose'
            ],
            'system.images.defaults.decoding' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.IMAGES_DECODING',
                'highlight' => 'auto',
                'options' => [
                    'auto' => 'Auto',
                    'sync' => 'Sync',
                    'async' => 'Async'
                ],
                'name' => 'system.images.defaults.decoding',
                'validation' => 'loose'
            ],
            'system.images.defaults.fetchpriority' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.IMAGES_FETCHPRIORITY',
                'highlight' => 'auto',
                'options' => [
                    'auto' => 'Auto',
                    'high' => 'High',
                    'low' => 'Low'
                ],
                'name' => 'system.images.defaults.fetchpriority',
                'validation' => 'loose'
            ],
            'system.images.seofriendly' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_SEOFRIENDLY',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.seofriendly',
                'validation' => 'loose'
            ],
            'system.media.enable_media_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLE_MEDIA_TIMESTAMP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.enable_media_timestamp',
                'validation' => 'loose'
            ],
            'system.media.auto_metadata_exif' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLE_AUTO_METADATA',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.auto_metadata_exif',
                'validation' => 'loose'
            ],
            'system.media.allowed_fallback_types' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.FALLBACK_TYPES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.media.allowed_fallback_types',
                'validation' => 'loose'
            ],
            'system.media.unsupported_inline_types' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.INLINE_TYPES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.media.unsupported_inline_types',
                'validation' => 'loose'
            ],
            'system.section_images_cls' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.section_images_cls',
                'validation' => 'loose'
            ],
            'system.images.cls' => [
                'type' => '_parent',
                'name' => 'system.images.cls',
                'form_field' => false
            ],
            'system.images.cls.auto_sizes' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_CLS_AUTO_SIZES',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.cls.auto_sizes',
                'validation' => 'loose'
            ],
            'system.images.cls.aspect_ratio' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_CLS_ASPECT_RATIO',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.cls.aspect_ratio',
                'validation' => 'loose'
            ],
            'system.images.cls.retina_scale' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.IMAGES_CLS_RETINA_SCALE',
                'size' => 'small',
                'highlight' => 1,
                'options' => [
                    1 => '1X',
                    2 => '2X',
                    3 => '3X',
                    4 => '4X'
                ],
                'name' => 'system.images.cls.retina_scale',
                'validation' => 'loose'
            ],
            'system.session' => [
                'type' => 'tab',
                'name' => 'system.session',
                'validation' => 'loose'
            ],
            'system.session_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.session_section',
                'validation' => 'loose'
            ],
            'system.session.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.enabled',
                'validation' => 'loose'
            ],
            'system.session.initialize' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_INITIALIZE',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.initialize',
                'validation' => 'loose'
            ],
            'system.session.lazy' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_LAZY',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => false,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.lazy',
                'validation' => 'loose'
            ],
            'system.session.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'append' => 'GRAV.NICETIME.SECOND_PLURAL',
                'label' => 'PLUGIN_ADMIN.TIMEOUT',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'system.session.timeout',
                'validation' => 'loose'
            ],
            'system.session.name' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.NAME',
                'name' => 'system.session.name',
                'validation' => 'loose'
            ],
            'system.session.uniqueness' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.SESSION_UNIQUENESS',
                'highlight' => 'path',
                'default' => 'path',
                'options' => [
                    'path' => 'Grav\'s root file path',
                    'salt' => 'Grav\'s random security salt'
                ],
                'name' => 'system.session.uniqueness',
                'validation' => 'loose'
            ],
            'system.session.secure' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_SECURE',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => false,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.secure',
                'validation' => 'loose'
            ],
            'system.session.secure_https' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_SECURE_HTTPS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.secure_https',
                'validation' => 'loose'
            ],
            'system.session.httponly' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_HTTPONLY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.httponly',
                'validation' => 'loose'
            ],
            'system.session.domain' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.SESSION_DOMAIN',
                'name' => 'system.session.domain',
                'validation' => 'loose'
            ],
            'system.session.path' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.SESSION_PATH',
                'name' => 'system.session.path',
                'validation' => 'loose'
            ],
            'system.session.samesite' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.SESSION_SAMESITE',
                'name' => 'system.session.samesite',
                'validation' => 'loose'
            ],
            'system.session.split' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_SPLIT',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.split',
                'validation' => 'loose'
            ],
            'system.advanced' => [
                'type' => 'tab',
                'name' => 'system.advanced',
                'validation' => 'loose'
            ],
            'system.advanced_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.advanced_section',
                'validation' => 'loose'
            ],
            'system.gpm_section' => [
                'type' => 'section',
                'name' => 'system.gpm_section',
                'validation' => 'loose'
            ],
            'system.gpm' => [
                'type' => '_parent',
                'name' => 'system.gpm',
                'form_field' => false
            ],
            'system.gpm.releases' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_RELEASES',
                'highlight' => 'stable',
                'options' => [
                    'stable' => 'PLUGIN_ADMIN.STABLE',
                    'testing' => 'PLUGIN_ADMIN.TESTING'
                ],
                'name' => 'system.gpm.releases',
                'validation' => 'loose'
            ],
            'system.gpm.official_gpm_only' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_OFFICIAL_ONLY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.gpm.official_gpm_only',
                'validation' => 'loose'
            ],
            'system.http_section' => [
                'type' => 'section',
                'name' => 'system.http_section',
                'validation' => 'loose'
            ],
            'system.http' => [
                'type' => '_parent',
                'name' => 'system.http',
                'form_field' => false
            ],
            'system.http.method' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_METHOD',
                'highlight' => 'auto',
                'options' => [
                    'auto' => 'PLUGIN_ADMIN.AUTO',
                    'fopen' => 'PLUGIN_ADMIN.FOPEN',
                    'curl' => 'PLUGIN_ADMIN.CURL'
                ],
                'name' => 'system.http.method',
                'validation' => 'loose'
            ],
            'system.http.enable_proxy' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SSL_ENABLE_PROXY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => false,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.http.enable_proxy',
                'validation' => 'loose'
            ],
            'system.http.proxy_url' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.PROXY_URL',
                'name' => 'system.http.proxy_url',
                'validation' => 'loose'
            ],
            'system.http.proxy_cert_path' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.PROXY_CERT',
                'name' => 'system.http.proxy_cert_path',
                'validation' => 'loose'
            ],
            'system.http.verify_peer' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SSL_VERIFY_PEER',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.http.verify_peer',
                'validation' => 'loose'
            ],
            'system.http.verify_host' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SSL_VERIFY_HOST',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.http.verify_host',
                'validation' => 'loose'
            ],
            'system.http.concurrent_connections' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.HTTP_CONNECTIONS',
                'validate' => [
                    'min' => 1,
                    'max' => 20
                ],
                'name' => 'system.http.concurrent_connections',
                'validation' => 'loose'
            ],
            'system.misc_section' => [
                'type' => 'section',
                'name' => 'system.misc_section',
                'validation' => 'loose'
            ],
            'system.reverse_proxy_setup' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REVERSE_PROXY',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.reverse_proxy_setup',
                'validation' => 'loose'
            ],
            'system.username_regex' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.USERNAME_REGEX',
                'name' => 'system.username_regex',
                'validation' => 'loose'
            ],
            'system.pwd_regex' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.PWD_REGEX',
                'name' => 'system.pwd_regex',
                'validation' => 'loose'
            ],
            'system.pwd_rules' => [
                'type' => 'list',
                'label' => 'PLUGIN_ADMIN.PWD_RULES',
                'style' => 'vertical',
                'collapsed' => true,
                'name' => 'system.pwd_rules',
                'validation' => 'loose'
            ],
            'system.pwd_rules.id' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.PWD_RULES_ID',
                'size' => 'small',
                'name' => 'system.pwd_rules.id',
                'validation' => 'loose'
            ],
            'system.pwd_rules.label' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.PWD_RULES_LABEL',
                'size' => 'medium',
                'name' => 'system.pwd_rules.label',
                'validation' => 'loose'
            ],
            'system.pwd_rules.pattern' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.PWD_RULES_PATTERN',
                'size' => 'medium',
                'name' => 'system.pwd_rules.pattern',
                'validation' => 'loose'
            ],
            'system.intl_enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.INTL_ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.intl_enabled',
                'validation' => 'loose'
            ],
            'system.wrapped_site' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.WRAPPED_SITE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.wrapped_site',
                'validation' => 'loose'
            ],
            'system.absolute_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ABSOLUTE_URLS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.absolute_urls',
                'validation' => 'loose'
            ],
            'system.param_sep' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.PARAMETER_SEPARATOR',
                'classes' => 'fancy',
                'default' => '',
                'options' => [
                    ':' => ': (default)',
                    ';' => '; (for Apache running on Windows)'
                ],
                'name' => 'system.param_sep',
                'validation' => 'loose'
            ],
            'system.force_ssl' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORCE_SSL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.force_ssl',
                'validation' => 'loose'
            ],
            'system.force_lowercase_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORCE_LOWERCASE_URLS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.force_lowercase_urls',
                'validation' => 'loose'
            ],
            'system.custom_base_url' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.CUSTOM_BASE_URL',
                'name' => 'system.custom_base_url',
                'validation' => 'loose'
            ],
            'system.http_x_forwarded' => [
                'type' => '_parent',
                'name' => 'system.http_x_forwarded',
                'form_field' => false
            ],
            'system.http_x_forwarded.protocol' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HTTP_X_FORWARDED_PROTO_ENABLED',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.http_x_forwarded.protocol',
                'validation' => 'loose'
            ],
            'system.http_x_forwarded.host' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HTTP_X_FORWARDED_HOST_ENABLED',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.http_x_forwarded.host',
                'validation' => 'loose'
            ],
            'system.http_x_forwarded.port' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HTTP_X_FORWARDED_PORT_ENABLED',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.http_x_forwarded.port',
                'validation' => 'loose'
            ],
            'system.http_x_forwarded.ip' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HTTP_X_FORWARDED_IP_ENABLED',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.http_x_forwarded.ip',
                'validation' => 'loose'
            ],
            'system.http_x_forwarded.client_ip' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HTTP_CLIENT_IP_ENABLED',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.http_x_forwarded.client_ip',
                'validation' => 'loose'
            ],
            'system.http_x_forwarded.cf_connecting_ip' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HTTP_CF_CONNECTING_IP_ENABLED',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.http_x_forwarded.cf_connecting_ip',
                'validation' => 'loose'
            ],
            'system.strict_mode' => [
                'type' => '_parent',
                'name' => 'system.strict_mode',
                'form_field' => false
            ],
            'system.strict_mode.blueprint_compat' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.STRICT_BLUEPRINT_COMPAT',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.strict_mode.blueprint_compat',
                'validation' => 'loose'
            ],
            'system.strict_mode.yaml_compat' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.STRICT_YAML_COMPAT',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.strict_mode.yaml_compat',
                'validation' => 'loose'
            ],
            'system.strict_mode.twig2_compat' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.STRICT_TWIG_COMPAT',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.strict_mode.twig2_compat',
                'validation' => 'loose'
            ],
            'system.strict_mode.twig3_compat' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_3_COMPATIBILITY',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.strict_mode.twig3_compat',
                'validation' => 'loose'
            ],
            'system.accounts' => [
                'type' => 'tab',
                'name' => 'system.accounts',
                'validation' => 'loose'
            ],
            'system.flex_accounts' => [
                'type' => 'section',
                'name' => 'system.flex_accounts',
                'validation' => 'loose'
            ],
            'system.accounts.type' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.ACCOUNTS_TYPE',
                'highlight' => 'stable',
                'options' => [
                    'regular' => 'PLUGIN_ADMIN.REGULAR',
                    'flex' => 'PLUGIN_ADMIN.FLEX'
                ],
                'name' => 'system.accounts.type',
                'validation' => 'loose'
            ],
            'system.accounts.storage' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.ACCOUNTS_STORAGE',
                'highlight' => 'stable',
                'options' => [
                    'file' => 'PLUGIN_ADMIN.FILE',
                    'folder' => 'PLUGIN_ADMIN.FOLDER'
                ],
                'name' => 'system.accounts.storage',
                'validation' => 'loose'
            ],
            'system.accounts.avatar' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.AVATAR',
                'default' => 'gravatar',
                'options' => [
                    'multiavatar' => 'Multiavatar [local]',
                    'gravatar' => 'Gravatar [external]'
                ],
                'name' => 'system.accounts.avatar',
                'validation' => 'loose'
            ],
            'plugins.form' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins' => [
                'type' => '_parent',
                'name' => 'plugins',
                'form_field' => false
            ],
            'plugins.form.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.enabled',
                'validation' => 'strict'
            ],
            'plugins.form.general' => [
                'type' => 'section',
                'name' => 'plugins.form.general',
                'validation' => 'strict'
            ],
            'plugins.form.debug' => [
                'type' => 'toggle',
                'label' => 'Debug',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.debug',
                'validation' => 'strict'
            ],
            'plugins.form.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.USE_BUILT_IN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.form.inline_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.USE_INLINE_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.inline_css',
                'validation' => 'strict'
            ],
            'plugins.form.refresh_prevention' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.REFRESH_PREVENTION',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.refresh_prevention',
                'validation' => 'strict'
            ],
            'plugins.form.client_side_validation' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.CLIENT_SIDE_VALIDATION',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.client_side_validation',
                'validation' => 'strict'
            ],
            'plugins.form.inline_errors' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.INLINE_ERRORS',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.inline_errors',
                'validation' => 'strict'
            ],
            'plugins.form.modular_form_fix' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.MODULAR_FORM_FIX',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.modular_form_fix',
                'validation' => 'strict'
            ],
            'plugins.form.files' => [
                'type' => 'section',
                'name' => 'plugins.form.files',
                'validation' => 'strict'
            ],
            'plugins.form.files.multiple' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.ALLOW_MULTIPLE',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.files.multiple',
                'validation' => 'strict'
            ],
            'plugins.form.files.limit' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_FORM.LIMIT',
                'default' => 10,
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.form.files.limit',
                'validation' => 'strict'
            ],
            'plugins.form.files.destination' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_FORM.DESTINATION',
                'default' => '@self',
                'name' => 'plugins.form.files.destination',
                'validation' => 'strict'
            ],
            'plugins.form.files.accept' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_FORM.ACCEPT',
                'classes' => 'fancy',
                'default' => [
                    0 => 'image/*'
                ],
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.form.files.accept',
                'validation' => 'strict'
            ],
            'plugins.form.files.filesize' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.FILESIZE',
                'size' => 'x-small',
                'default' => 5,
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.form.files.filesize',
                'validation' => 'strict'
            ],
            'plugins.form.files.avoid_overwriting' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.AVOID_OVERWRITING',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.files.avoid_overwriting',
                'validation' => 'strict'
            ],
            'plugins.form.files.random_name' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.RANDOM_NAME',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.files.random_name',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha' => [
                'type' => 'section',
                'name' => 'plugins.form.recaptcha',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha.version' => [
                'type' => 'select',
                'label' => 'PLUGIN_FORM.RECAPTCHA_VERSION',
                'default' => '2-checkbox',
                'options' => [
                    '2-checkbox' => 'PLUGIN_FORM.RECAPTCHA_VERSION_V2_CHECKBOX',
                    '2-invisible' => 'PLUGIN_FORM.RECAPTCHA_VERSION_V2_INVISIBLE',
                    3 => 'PLUGIN_FORM.RECAPTCHA_VERSION_V3_LATEST'
                ],
                'name' => 'plugins.form.recaptcha.version',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha.score_threshold' => [
                'type' => 'number',
                'label' => 'PLUGIN_FORM.RECAPTCHA_SCORE_THRESHOLD',
                'default' => 0.5,
                'size' => 'small',
                'validate' => [
                    'type' => 'number',
                    'min' => 0,
                    'max' => 1,
                    'step' => 0.01
                ],
                'name' => 'plugins.form.recaptcha.score_threshold',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha.theme' => [
                'type' => 'select',
                'label' => 'PLUGIN_FORM.RECAPTCHA_THEME',
                'default' => 'light',
                'options' => [
                    'light' => 'PLUGIN_FORM.RECAPTCHA_THEME_LIGHT',
                    'dark' => 'PLUGIN_FORM.RECAPTCHA_THEME_DARK'
                ],
                'recaptcha.site_key' => NULL,
                'name' => 'plugins.form.recaptcha.theme',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha.site_key' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.RECAPTCHA_SITE_KEY',
                'default' => '',
                'name' => 'plugins.form.recaptcha.site_key',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha.secret_key' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.RECAPTCHA_SECRET_KEY',
                'default' => '',
                'name' => 'plugins.form.recaptcha.secret_key',
                'validation' => 'strict'
            ],
            'plugins.form.turnstile_captcha' => [
                'type' => 'section',
                'name' => 'plugins.form.turnstile_captcha',
                'validation' => 'strict'
            ],
            'plugins.form.turnstile' => [
                'type' => '_parent',
                'name' => 'plugins.form.turnstile',
                'form_field' => false
            ],
            'plugins.form.turnstile.theme' => [
                'type' => 'select',
                'label' => 'PLUGIN_FORM.TURNSTILE_THEME',
                'default' => 'light',
                'options' => [
                    'light' => 'PLUGIN_FORM.TURNSTILE_THEME_LIGHT',
                    'dark' => 'PLUGIN_FORM.TURNSTILE_THEME_DARK'
                ],
                'name' => 'plugins.form.turnstile.theme',
                'validation' => 'strict'
            ],
            'plugins.form.turnstile.site_key' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.TURNSTILE_SITE_KEY',
                'default' => '',
                'name' => 'plugins.form.turnstile.site_key',
                'validation' => 'strict'
            ],
            'plugins.form.turnstile.secret_key' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.TURNSTILE_SECRET_KEY',
                'default' => '',
                'name' => 'plugins.form.turnstile.secret_key',
                'validation' => 'strict'
            ],
            'plugins.form.cap_captcha' => [
                'type' => 'section',
                'name' => 'plugins.form.cap_captcha',
                'validation' => 'strict'
            ],
            'plugins.form.cap' => [
                'type' => '_parent',
                'name' => 'plugins.form.cap',
                'form_field' => false
            ],
            'plugins.form.cap.mode' => [
                'type' => 'select',
                'label' => 'Default Mode',
                'default' => 'invisible',
                'options' => [
                    'invisible' => 'Invisible (auto-solve on submit)',
                    'checkbox' => 'Checkbox widget'
                ],
                'name' => 'plugins.form.cap.mode',
                'validation' => 'strict'
            ],
            'plugins.form.cap.storage' => [
                'type' => 'select',
                'label' => 'Token Storage Backend',
                'default' => 'grav-cache',
                'options' => [
                    'grav-cache' => 'Grav Cache (PSR-16)',
                    'filesystem' => 'Filesystem (user/data/cap)'
                ],
                'name' => 'plugins.form.cap.storage',
                'validation' => 'strict'
            ],
            'plugins.form.cap.challenge_count' => [
                'type' => 'number',
                'label' => 'Challenge Count',
                'default' => 50,
                'size' => 'small',
                'validate' => [
                    'min' => 1,
                    'max' => 200,
                    'type' => 'number'
                ],
                'name' => 'plugins.form.cap.challenge_count',
                'validation' => 'strict'
            ],
            'plugins.form.cap.challenge_size' => [
                'type' => 'number',
                'label' => 'Salt Size',
                'default' => 32,
                'size' => 'small',
                'validate' => [
                    'min' => 8,
                    'max' => 64,
                    'type' => 'number'
                ],
                'name' => 'plugins.form.cap.challenge_size',
                'validation' => 'strict'
            ],
            'plugins.form.cap.challenge_difficulty' => [
                'type' => 'number',
                'label' => 'Difficulty',
                'default' => 4,
                'size' => 'small',
                'validate' => [
                    'min' => 1,
                    'max' => 8,
                    'type' => 'number'
                ],
                'name' => 'plugins.form.cap.challenge_difficulty',
                'validation' => 'strict'
            ],
            'plugins.form.cap.expires_ms' => [
                'type' => 'number',
                'label' => 'Challenge TTL (ms)',
                'default' => 600000,
                'size' => 'small',
                'validate' => [
                    'min' => 30000,
                    'type' => 'number'
                ],
                'name' => 'plugins.form.cap.expires_ms',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha' => [
                'type' => 'section',
                'name' => 'plugins.form.basic_captcha',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.image' => [
                'type' => '_parent',
                'name' => 'plugins.form.basic_captcha.image',
                'form_field' => false
            ],
            'plugins.form.basic_captcha.image.width' => [
                'type' => 'number',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_BOX_WIDTH',
                'default' => 135,
                'append' => 'px',
                'size' => 'small',
                'validate' => [
                    'min' => 100,
                    'max' => 500,
                    'type' => 'number'
                ],
                'name' => 'plugins.form.basic_captcha.image.width',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.image.height' => [
                'type' => 'number',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_BOX_HEIGHT',
                'default' => 40,
                'append' => 'px',
                'size' => 'small',
                'validate' => [
                    'min' => 30,
                    'max' => 200,
                    'type' => 'number'
                ],
                'name' => 'plugins.form.basic_captcha.image.height',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.chars' => [
                'type' => '_parent',
                'name' => 'plugins.form.basic_captcha.chars',
                'form_field' => false
            ],
            'plugins.form.basic_captcha.chars.font' => [
                'type' => 'select',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_FONT',
                'default' => 'zxx-noise.ttf',
                'options' => [
                    'zxx-noise.ttf' => 'zxx-Noise',
                    'zxx-xed.ttf' => 'zxx-Xed',
                    'zxx-camo.ttf' => 'zxx-Camo',
                    'zxx-sans.ttf' => 'zxx-Sans'
                ],
                'name' => 'plugins.form.basic_captcha.chars.font',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.chars.size' => [
                'type' => 'range',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_SIZE',
                'default' => 24,
                'append' => 'px',
                'validate' => [
                    'min' => 12,
                    'max' => 32,
                    'step' => 2
                ],
                'name' => 'plugins.form.basic_captcha.chars.size',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.chars.bg' => [
                'type' => 'colorpicker',
                'size' => 'small',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_BG_COLOR',
                'default' => '#ffffff',
                'name' => 'plugins.form.basic_captcha.chars.bg',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.chars.text' => [
                'type' => 'colorpicker',
                'size' => 'small',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_TEXT_COLOR',
                'default' => '#000000',
                'name' => 'plugins.form.basic_captcha.chars.text',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.chars.start_x' => [
                'type' => 'number',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_START_X',
                'default' => 5,
                'append' => 'px',
                'size' => 'small',
                'validate' => [
                    'min' => 0,
                    'type' => 'number'
                ],
                'name' => 'plugins.form.basic_captcha.chars.start_x',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.chars.start_y' => [
                'type' => 'number',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_START_Y',
                'default' => 30,
                'append' => 'px',
                'size' => 'small',
                'validate' => [
                    'min' => 0,
                    'type' => 'number'
                ],
                'name' => 'plugins.form.basic_captcha.chars.start_y',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.type' => [
                'type' => 'elements',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_TYPE',
                'default' => 'characters',
                'size' => 'medium',
                'options' => [
                    'characters' => 'Random Characters',
                    'math' => 'Math Puzzle'
                ],
                'name' => 'plugins.form.basic_captcha.type',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.plugins.form.characters' => [
                'type' => 'element',
                'name' => 'plugins.form.basic_captcha.plugins.form.characters',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.chars.length' => [
                'type' => 'range',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_LENGTH',
                'default' => 6,
                'validate' => [
                    'min' => 4,
                    'max' => 12
                ],
                'append' => 'characters',
                'name' => 'plugins.form.basic_captcha.chars.length',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.plugins.form.math' => [
                'type' => 'element',
                'name' => 'plugins.form.basic_captcha.plugins.form.math',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.math' => [
                'type' => '_parent',
                'name' => 'plugins.form.basic_captcha.math',
                'form_field' => false
            ],
            'plugins.form.basic_captcha.math.min' => [
                'type' => 'number',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_MATH_MIN',
                'default' => 1,
                'size' => 'small',
                'validate' => [
                    'min' => 0,
                    'type' => 'number'
                ],
                'name' => 'plugins.form.basic_captcha.math.min',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.math.max' => [
                'type' => 'number',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_MATH_MAX',
                'default' => 10,
                'size' => 'small',
                'validate' => [
                    'min' => 1,
                    'type' => 'number'
                ],
                'name' => 'plugins.form.basic_captcha.math.max',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.math.operators' => [
                'type' => 'selectize',
                'selectize' => [
                    'options' => [
                        0 => [
                            'value' => '+',
                            'text' => '+ Addition'
                        ],
                        1 => [
                            'value' => '-',
                            'text' => '- Subtraction'
                        ],
                        2 => [
                            'value' => '*',
                            'text' => 'x Multiplication'
                        ],
                        3 => [
                            'value' => '/',
                            'text' => '/ Division'
                        ]
                    ]
                ],
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_MATH_OPERATORS',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.form.basic_captcha.math.operators',
                'validation' => 'strict'
            ],
            'plugins.flex-objects' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.flex-objects.enabled' => [
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
                ],
                'name' => 'plugins.flex-objects.enabled',
                'validation' => 'loose'
            ],
            'plugins.flex-objects.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FLEX_OBJECTS.USE_BUILT_IN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.flex-objects.built_in_css',
                'validation' => 'loose'
            ],
            'plugins.flex-objects.security_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.flex-objects.security_section',
                'validation' => 'loose'
            ],
            'plugins.flex-objects.security' => [
                'type' => '_parent',
                'name' => 'plugins.flex-objects.security',
                'form_field' => false
            ],
            'plugins.flex-objects.security.restrict_page_frontmatter' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FLEX_OBJECTS.SECURITY.RESTRICT_PAGE_FRONTMATTER',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.flex-objects.security.restrict_page_frontmatter',
                'validation' => 'loose'
            ],
            'plugins.flex-objects.directories' => [
                'type' => 'flex-objects',
                'label' => 'PLUGIN_FLEX_OBJECTS.DIRECTORIES',
                'array' => true,
                'ignore_empty' => true,
                'validate' => [
                    'type' => 'array'
                ],
                'name' => 'plugins.flex-objects.directories',
                'validation' => 'loose'
            ],
            'plugins.problems' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.problems.enabled' => [
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
                ],
                'name' => 'plugins.problems.enabled',
                'validation' => 'strict'
            ],
            'plugins.problems.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PROBLEMS.BUILTIN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.problems.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.api' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.api.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin Status',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.enabled',
                'validation' => 'loose'
            ],
            'plugins.api.tabs' => [
                'type' => 'tabs',
                'classes' => 'side-tabs',
                'name' => 'plugins.api.tabs',
                'validation' => 'loose'
            ],
            'plugins.api.tab_general' => [
                'type' => 'tab',
                'name' => 'plugins.api.tab_general',
                'validation' => 'loose'
            ],
            'plugins.api.section_general' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.api.section_general',
                'validation' => 'loose'
            ],
            'plugins.api.route' => [
                'type' => 'text',
                'label' => 'API Route',
                'default' => '/api',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.api.route',
                'validation' => 'loose'
            ],
            'plugins.api.version_prefix' => [
                'type' => 'text',
                'label' => 'Version Prefix',
                'default' => 'v1',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.api.version_prefix',
                'validation' => 'loose'
            ],
            'plugins.api.section_backend' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.api.section_backend',
                'validation' => 'loose'
            ],
            'plugins.api.flex_backend' => [
                'type' => '_parent',
                'name' => 'plugins.api.flex_backend',
                'form_field' => false
            ],
            'plugins.api.flex_backend.pages' => [
                'type' => 'toggle',
                'label' => 'Flex Pages Backend',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.flex_backend.pages',
                'validation' => 'loose'
            ],
            'plugins.api.flex_backend.accounts' => [
                'type' => 'toggle',
                'label' => 'Flex Accounts Backend',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.flex_backend.accounts',
                'validation' => 'loose'
            ],
            'plugins.api.force_cache' => [
                'type' => 'toggle',
                'label' => 'Keep Cache for API Requests',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.force_cache',
                'validation' => 'loose'
            ],
            'plugins.api.compression' => [
                'type' => 'select',
                'label' => 'PLUGIN_API.COMPRESSION',
                'default' => 'auto',
                'options' => [
                    'auto' => 'PLUGIN_API.COMPRESSION_AUTO',
                    'off' => 'PLUGIN_API.COMPRESSION_OFF'
                ],
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.api.compression',
                'validation' => 'loose'
            ],
            'plugins.api.tab_authentication' => [
                'type' => 'tab',
                'name' => 'plugins.api.tab_authentication',
                'validation' => 'loose'
            ],
            'plugins.api.section_auth' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.api.section_auth',
                'validation' => 'loose'
            ],
            'plugins.api.auth' => [
                'type' => '_parent',
                'name' => 'plugins.api.auth',
                'form_field' => false
            ],
            'plugins.api.auth.api_keys_enabled' => [
                'type' => 'toggle',
                'label' => 'API Key Authentication',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.auth.api_keys_enabled',
                'validation' => 'loose'
            ],
            'plugins.api.auth.jwt_enabled' => [
                'type' => 'toggle',
                'label' => 'JWT Authentication',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.auth.jwt_enabled',
                'validation' => 'loose'
            ],
            'plugins.api.auth.jwt_expiry' => [
                'type' => 'text',
                'label' => 'JWT Access Token Expiry',
                'default' => 3600,
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.api.auth.jwt_expiry',
                'validation' => 'loose'
            ],
            'plugins.api.auth.jwt_refresh_expiry' => [
                'type' => 'text',
                'label' => 'JWT Refresh Token Expiry',
                'default' => 604800,
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.api.auth.jwt_refresh_expiry',
                'validation' => 'loose'
            ],
            'plugins.api.auth.jwt_algorithm' => [
                'type' => 'select',
                'label' => 'JWT Signing Algorithm',
                'default' => 'HS256',
                'options' => [
                    'HS256' => 'HS256',
                    'HS384' => 'HS384',
                    'HS512' => 'HS512'
                ],
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.api.auth.jwt_algorithm',
                'validation' => 'loose'
            ],
            'plugins.api.auth.session_enabled' => [
                'type' => 'toggle',
                'label' => 'Session Authentication',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.auth.session_enabled',
                'validation' => 'loose'
            ],
            'plugins.api.auth.key_cache_ttl' => [
                'type' => 'text',
                'label' => 'API Key Verification Cache',
                'default' => 600,
                'validate' => [
                    'type' => 'int',
                    'min' => 0
                ],
                'name' => 'plugins.api.auth.key_cache_ttl',
                'validation' => 'loose'
            ],
            'plugins.api.session_early_close' => [
                'type' => 'toggle',
                'label' => 'Release Session Lock Early',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.session_early_close',
                'validation' => 'loose'
            ],
            'plugins.api.protect_frontend_session' => [
                'type' => 'toggle',
                'label' => 'Protect Front-end Session',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.protect_frontend_session',
                'validation' => 'loose'
            ],
            'plugins.api.translation_overrides' => [
                'type' => 'toggle',
                'label' => 'Translation Overrides',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.translation_overrides',
                'validation' => 'loose'
            ],
            'plugins.api.allow_draft_preview' => [
                'type' => 'toggle',
                'label' => 'Allow Draft Preview',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.allow_draft_preview',
                'validation' => 'loose'
            ],
            'plugins.api.section_login_captcha' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.api.section_login_captcha',
                'validation' => 'loose'
            ],
            'plugins.api.login' => [
                'type' => '_parent',
                'name' => 'plugins.api.login',
                'form_field' => false
            ],
            'plugins.api.login.captcha' => [
                'type' => '_parent',
                'name' => 'plugins.api.login.captcha',
                'form_field' => false
            ],
            'plugins.api.login.captcha.enabled' => [
                'type' => 'toggle',
                'label' => 'Login Captcha',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.login.captcha.enabled',
                'validation' => 'loose'
            ],
            'plugins.api.login.captcha.provider' => [
                'type' => 'select',
                'label' => 'Captcha Provider',
                'default' => 'cap',
                'options' => [
                    'cap' => 'Cap (built-in, no keys)',
                    'turnstile' => 'Cloudflare Turnstile (Form plugin)',
                    'recaptcha' => 'Google reCAPTCHA (Form plugin)'
                ],
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.api.login.captcha.provider',
                'validation' => 'loose'
            ],
            'plugins.api.login.captcha.mode' => [
                'type' => 'select',
                'label' => 'Captcha Mode',
                'default' => 'invisible',
                'options' => [
                    'invisible' => 'Invisible',
                    'checkbox' => 'Checkbox'
                ],
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.api.login.captcha.mode',
                'validation' => 'loose'
            ],
            'plugins.api.login.captcha.flows' => [
                'type' => '_parent',
                'name' => 'plugins.api.login.captcha.flows',
                'form_field' => false
            ],
            'plugins.api.login.captcha.flows.login' => [
                'type' => 'toggle',
                'label' => 'Guard Login',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.login.captcha.flows.login',
                'validation' => 'loose'
            ],
            'plugins.api.login.captcha.flows.forgot_password' => [
                'type' => 'toggle',
                'label' => 'Guard Forgotten Password',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.login.captcha.flows.forgot_password',
                'validation' => 'loose'
            ],
            'plugins.api.login.captcha.flows.setup' => [
                'type' => 'toggle',
                'label' => 'Guard First-run Setup',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.login.captcha.flows.setup',
                'validation' => 'loose'
            ],
            'plugins.api.login.captcha.cap' => [
                'type' => '_parent',
                'name' => 'plugins.api.login.captcha.cap',
                'form_field' => false
            ],
            'plugins.api.login.captcha.cap.challenge_difficulty' => [
                'type' => 'text',
                'label' => 'Cap Difficulty',
                'default' => 4,
                'validate' => [
                    'type' => 'int',
                    'min' => 1,
                    'max' => 8
                ],
                'name' => 'plugins.api.login.captcha.cap.challenge_difficulty',
                'validation' => 'loose'
            ],
            'plugins.api.login.captcha.cap.challenge_count' => [
                'type' => 'text',
                'label' => 'Cap Sub-challenges',
                'default' => 30,
                'validate' => [
                    'type' => 'int',
                    'min' => 1,
                    'max' => 200
                ],
                'name' => 'plugins.api.login.captcha.cap.challenge_count',
                'validation' => 'loose'
            ],
            'plugins.api.tab_cors' => [
                'type' => 'tab',
                'name' => 'plugins.api.tab_cors',
                'validation' => 'loose'
            ],
            'plugins.api.section_cors' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.api.section_cors',
                'validation' => 'loose'
            ],
            'plugins.api.cors' => [
                'type' => '_parent',
                'name' => 'plugins.api.cors',
                'form_field' => false
            ],
            'plugins.api.cors.enabled' => [
                'type' => 'toggle',
                'label' => 'Enable CORS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.cors.enabled',
                'validation' => 'loose'
            ],
            'plugins.api.cors.origins' => [
                'type' => 'array',
                'label' => 'Allowed Origins',
                'value_only' => true,
                'name' => 'plugins.api.cors.origins',
                'validation' => 'loose'
            ],
            'plugins.api.cors.methods' => [
                'type' => 'selectize',
                'label' => 'Allowed Methods',
                'default' => [
                    0 => 'GET',
                    1 => 'POST',
                    2 => 'PATCH',
                    3 => 'DELETE',
                    4 => 'OPTIONS'
                ],
                'multiple' => true,
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.api.cors.methods',
                'validation' => 'loose'
            ],
            'plugins.api.cors.headers' => [
                'type' => 'array',
                'label' => 'Allowed Headers',
                'default' => [
                    0 => 'Content-Type',
                    1 => 'Authorization',
                    2 => 'X-API-Key',
                    3 => 'X-Grav-Environment',
                    4 => 'If-Match',
                    5 => 'If-None-Match'
                ],
                'value_only' => true,
                'name' => 'plugins.api.cors.headers',
                'validation' => 'loose'
            ],
            'plugins.api.tab_rate_limiting' => [
                'type' => 'tab',
                'name' => 'plugins.api.tab_rate_limiting',
                'validation' => 'loose'
            ],
            'plugins.api.section_rate_limit' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.api.section_rate_limit',
                'validation' => 'loose'
            ],
            'plugins.api.rate_limit' => [
                'type' => '_parent',
                'name' => 'plugins.api.rate_limit',
                'form_field' => false
            ],
            'plugins.api.rate_limit.enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Rate Limiting',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.rate_limit.enabled',
                'validation' => 'loose'
            ],
            'plugins.api.rate_limit.requests' => [
                'type' => 'text',
                'label' => 'Requests Per Window',
                'default' => 120,
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.api.rate_limit.requests',
                'validation' => 'loose'
            ],
            'plugins.api.rate_limit.window' => [
                'type' => 'text',
                'label' => 'Time Window',
                'default' => 60,
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.api.rate_limit.window',
                'validation' => 'loose'
            ],
            'plugins.api.tab_content' => [
                'type' => 'tab',
                'name' => 'plugins.api.tab_content',
                'validation' => 'loose'
            ],
            'plugins.api.section_media_metadata' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.api.section_media_metadata',
                'validation' => 'loose'
            ],
            'plugins.api.media_metadata' => [
                'type' => '_parent',
                'name' => 'plugins.api.media_metadata',
                'form_field' => false
            ],
            'plugins.api.media_metadata.max_length' => [
                'type' => 'text',
                'label' => 'Maximum Value Length',
                'default' => 2000,
                'validate' => [
                    'type' => 'int',
                    'min' => 1
                ],
                'name' => 'plugins.api.media_metadata.max_length',
                'validation' => 'loose'
            ],
            'plugins.api.media_metadata.fields' => [
                'type' => 'list',
                'label' => 'Editable Metadata Fields',
                'name' => 'plugins.api.media_metadata.fields',
                'validation' => 'loose'
            ],
            'plugins.api.media_metadata.fields.key' => [
                'type' => 'text',
                'label' => 'Key',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.api.media_metadata.fields.key',
                'validation' => 'loose'
            ],
            'plugins.api.media_metadata.fields.label' => [
                'type' => 'text',
                'label' => 'Label',
                'name' => 'plugins.api.media_metadata.fields.label',
                'validation' => 'loose'
            ],
            'plugins.api.media_metadata.fields.type' => [
                'type' => 'select',
                'label' => 'Field Type',
                'default' => 'text',
                'options' => [
                    'text' => 'Single line',
                    'textarea' => 'Multi-line',
                    'tags' => 'Tags (list)'
                ],
                'name' => 'plugins.api.media_metadata.fields.type',
                'validation' => 'loose'
            ],
            'plugins.api.section_popularity' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.api.section_popularity',
                'validation' => 'loose'
            ],
            'plugins.api.popularity' => [
                'type' => '_parent',
                'name' => 'plugins.api.popularity',
                'form_field' => false
            ],
            'plugins.api.popularity.enabled' => [
                'type' => 'toggle',
                'label' => 'Track Page Views',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.popularity.enabled',
                'validation' => 'loose'
            ],
            'plugins.api.popularity.exclude_admin' => [
                'type' => 'toggle',
                'label' => 'Exclude Logged-in Admins',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.popularity.exclude_admin',
                'validation' => 'loose'
            ],
            'plugins.api.popularity.exclude_ips' => [
                'type' => 'array',
                'label' => 'Excluded IP Addresses',
                'value_only' => true,
                'name' => 'plugins.api.popularity.exclude_ips',
                'validation' => 'loose'
            ],
            'plugins.api.popularity.exclude_non_browsers' => [
                'type' => 'toggle',
                'label' => 'Exclude Non-Browser Clients',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.popularity.exclude_non_browsers',
                'validation' => 'loose'
            ],
            'plugins.api.popularity.exclude_agents' => [
                'type' => 'array',
                'label' => 'Excluded User Agents',
                'value_only' => true,
                'name' => 'plugins.api.popularity.exclude_agents',
                'validation' => 'loose'
            ],
            'plugins.api.tab_audit_trail' => [
                'type' => 'tab',
                'name' => 'plugins.api.tab_audit_trail',
                'validation' => 'loose'
            ],
            'plugins.api.section_audit' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.api.section_audit',
                'validation' => 'loose'
            ],
            'plugins.api.audit' => [
                'type' => '_parent',
                'name' => 'plugins.api.audit',
                'form_field' => false
            ],
            'plugins.api.audit.enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Audit Trail',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.audit.enabled',
                'validation' => 'loose'
            ],
            'plugins.api.audit.coverage' => [
                'type' => 'select',
                'label' => 'Detail Level',
                'default' => 'standard',
                'options' => [
                    'standard' => 'Standard (activity stream)',
                    'detailed' => 'Detailed (with change diffs)'
                ],
                'name' => 'plugins.api.audit.coverage',
                'validation' => 'loose'
            ],
            'plugins.api.audit.retention_days' => [
                'type' => 'text',
                'label' => 'Retention (days)',
                'default' => 90,
                'validate' => [
                    'type' => 'int',
                    'min' => 0
                ],
                'name' => 'plugins.api.audit.retention_days',
                'validation' => 'loose'
            ],
            'plugins.api.audit.retention_max_rows' => [
                'type' => 'text',
                'label' => 'Maximum Entries',
                'default' => 100000,
                'validate' => [
                    'type' => 'int',
                    'min' => 0
                ],
                'name' => 'plugins.api.audit.retention_max_rows',
                'validation' => 'loose'
            ],
            'plugins.api.audit.anonymize_ip' => [
                'type' => 'toggle',
                'label' => 'Anonymize IP Addresses',
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.audit.anonymize_ip',
                'validation' => 'loose'
            ],
            'plugins.api.audit.capture' => [
                'type' => '_parent',
                'name' => 'plugins.api.audit.capture',
                'form_field' => false
            ],
            'plugins.api.audit.capture.auth' => [
                'type' => 'toggle',
                'label' => 'Capture Authentication',
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.audit.capture.auth',
                'validation' => 'loose'
            ],
            'plugins.api.audit.capture.content' => [
                'type' => 'toggle',
                'label' => 'Capture Content Changes',
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.audit.capture.content',
                'validation' => 'loose'
            ],
            'plugins.api.audit.capture.media' => [
                'type' => 'toggle',
                'label' => 'Capture Media Changes',
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.audit.capture.media',
                'validation' => 'loose'
            ],
            'plugins.api.audit.capture.users' => [
                'type' => 'toggle',
                'label' => 'Capture User & Group Changes',
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.audit.capture.users',
                'validation' => 'loose'
            ],
            'plugins.api.audit.capture.config' => [
                'type' => 'toggle',
                'label' => 'Capture Configuration Changes',
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.audit.capture.config',
                'validation' => 'loose'
            ],
            'plugins.api.audit.capture.packages' => [
                'type' => 'toggle',
                'label' => 'Capture Package Changes',
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.audit.capture.packages',
                'validation' => 'loose'
            ],
            'plugins.api.tab_demo_mode' => [
                'type' => 'tab',
                'name' => 'plugins.api.tab_demo_mode',
                'validation' => 'loose'
            ],
            'plugins.api.section_demo' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.api.section_demo',
                'validation' => 'loose'
            ],
            'plugins.api.demo' => [
                'type' => '_parent',
                'name' => 'plugins.api.demo',
                'form_field' => false
            ],
            'plugins.api.demo.notice' => [
                'type' => 'display',
                'markdown' => true,
                'content' => 'Demo mode is turned on **per account**, by granting an account the *Demo Mode* access flag (`access.api.demo`) in its permissions. A demo account can browse everything but cannot save changes except to the resources below, and server paths, logs, and backups are hidden from it. Capture the baseline and reset the content from the **Set Baseline / Reset Now** panel, or with `bin/plugin api demo:baseline` and `bin/plugin api demo:reset`.',
                'name' => 'plugins.api.demo.notice',
                'validation' => 'loose'
            ],
            'plugins.api.demo.writable' => [
                'type' => 'select',
                'multiple' => true,
                'label' => 'Writable Resources',
                'default' => [
                    0 => 'api.pages.write',
                    1 => 'api.media.write'
                ],
                'options' => [
                    'api.pages.write' => 'Pages',
                    'api.media.write' => 'Media'
                ],
                'name' => 'plugins.api.demo.writable',
                'validation' => 'loose'
            ],
            'plugins.api.demo.reset_interval' => [
                'type' => 'text',
                'label' => 'Reset Interval (minutes)',
                'default' => 30,
                'validate' => [
                    'type' => 'int',
                    'min' => 1
                ],
                'name' => 'plugins.api.demo.reset_interval',
                'validation' => 'loose'
            ],
            'plugins.api.demo.reset_on_request' => [
                'type' => 'toggle',
                'label' => 'Reset On Request (Lazy)',
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.demo.reset_on_request',
                'validation' => 'loose'
            ],
            'plugins.api.demo.reset_on_schedule' => [
                'type' => 'toggle',
                'label' => 'Reset On Schedule',
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.api.demo.reset_on_schedule',
                'validation' => 'loose'
            ],
            'plugins.api.demo.keep_safety_snapshots' => [
                'type' => 'text',
                'label' => 'Safety Snapshots to Retain',
                'default' => 5,
                'validate' => [
                    'type' => 'int',
                    'min' => 0
                ],
                'name' => 'plugins.api.demo.keep_safety_snapshots',
                'validation' => 'loose'
            ],
            'plugins.shortcode-core' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.shortcode-core.shortcode_tabs' => [
                'type' => 'tabs',
                'active' => 1,
                'name' => 'plugins.shortcode-core.shortcode_tabs',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.options' => [
                'type' => 'tab',
                'name' => 'plugins.shortcode-core.options',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin Enabled',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.enabled',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.active' => [
                'type' => 'toggle',
                'label' => 'Activated',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.active',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.active_admin' => [
                'type' => 'toggle',
                'label' => 'Activated in Admin',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.active_admin',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.admin_pages_only' => [
                'type' => 'toggle',
                'label' => 'Admin Real-Pages Only',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.admin_pages_only',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.parser' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Processor',
                'options' => [
                    'hybrid' => 'HybridParser',
                    'regular' => 'RegularParser',
                    'regex' => 'RegexParser',
                    'wordpress' => 'WordpressParser'
                ],
                'name' => 'plugins.shortcode-core.parser',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.custom_shortcodes' => [
                'type' => 'text',
                'label' => 'Custom Shortcodes Path',
                'size' => 'large',
                'name' => 'plugins.shortcode-core.custom_shortcodes',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.exclude_default_shortcodes' => [
                'type' => 'array',
                'label' => 'Excluded Default Shortcodes',
                'value_only' => true,
                'name' => 'plugins.shortcode-core.exclude_default_shortcodes',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.css' => [
                'type' => '_parent',
                'name' => 'plugins.shortcode-core.css',
                'form_field' => false
            ],
            'plugins.shortcode-core.css.notice_enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Notice Shortcode CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.css.notice_enabled',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.fontawesome' => [
                'type' => '_parent',
                'name' => 'plugins.shortcode-core.fontawesome',
                'form_field' => false
            ],
            'plugins.shortcode-core.fontawesome.load' => [
                'type' => 'toggle',
                'label' => 'Load Fontawesome Library',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.fontawesome.load',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.fontawesome.url' => [
                'type' => 'text',
                'label' => 'Fontawesome URL',
                'size' => 'large',
                'name' => 'plugins.shortcode-core.fontawesome.url',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.fontawesome.v5' => [
                'type' => 'toggle',
                'label' => 'Use Fontawesome Version 5',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.fontawesome.v5',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.builder' => [
                'type' => 'tab',
                'name' => 'plugins.shortcode-core.builder',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.shortcodes_intro' => [
                'type' => 'spacer',
                'name' => 'plugins.shortcode-core.shortcodes_intro',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.shortcodes' => [
                'type' => 'list',
                'label' => 'Shortcodes',
                'style' => 'vertical',
                'collapsed' => true,
                'btnLabel' => 'Add Shortcode',
                'name' => 'plugins.shortcode-core.shortcodes',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.shortcodes.name' => [
                'type' => 'text',
                'label' => 'Tag',
                'name' => 'plugins.shortcode-core.shortcodes.name',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.shortcodes.template' => [
                'type' => 'text',
                'label' => 'Template',
                'name' => 'plugins.shortcode-core.shortcodes.template',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.shortcodes.output' => [
                'type' => 'textarea',
                'label' => 'Inline Output',
                'rows' => 3,
                'name' => 'plugins.shortcode-core.shortcodes.output',
                'validation' => 'strict'
            ],
            'plugins.github-markdown-alerts' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.github-markdown-alerts.enabled' => [
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
                ],
                'name' => 'plugins.github-markdown-alerts.enabled',
                'validation' => 'loose'
            ],
            'plugins.github-markdown-alerts.include_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_GITHUB_MARKDOWN_ALERTS.INCLUDE_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.github-markdown-alerts.include_css',
                'validation' => 'loose'
            ],
            'plugins.github-markdown-alerts.wrapper_class' => [
                'type' => 'text',
                'label' => 'PLUGIN_GITHUB_MARKDOWN_ALERTS.WRAPPER_CLASS',
                'default' => 'md-alert md-alert--',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.github-markdown-alerts.wrapper_class',
                'validation' => 'loose'
            ],
            'plugins.github-markdown-alerts.title_class' => [
                'type' => 'text',
                'label' => 'PLUGIN_GITHUB_MARKDOWN_ALERTS.TITLE_CLASS',
                'default' => 'md-alert-title',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.github-markdown-alerts.title_class',
                'validation' => 'loose'
            ],
            'plugins.github-markdown-alerts.body_class' => [
                'type' => 'text',
                'label' => 'PLUGIN_GITHUB_MARKDOWN_ALERTS.BODY_CLASS',
                'default' => 'md-alert-body',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.github-markdown-alerts.body_class',
                'validation' => 'loose'
            ],
            'plugins.github-markdown-alerts.enable_octicons' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_GITHUB_MARKDOWN_ALERTS.ENABLE_OCTICONS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.github-markdown-alerts.enable_octicons',
                'validation' => 'loose'
            ],
            'plugins.github-markdown-alerts._advanced_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.github-markdown-alerts._advanced_section',
                'validation' => 'loose'
            ],
            'plugins.github-markdown-alerts.colors' => [
                'type' => '_parent',
                'name' => 'plugins.github-markdown-alerts.colors',
                'form_field' => false
            ],
            'plugins.github-markdown-alerts.colors.note-border' => [
                'type' => 'colorpicker',
                'label' => 'PLUGIN_GITHUB_MARKDOWN_ALERTS.NOTE_BORDER_COLOR',
                'default' => '#316dca',
                'validate' => [
                    'type' => 'color'
                ],
                'name' => 'plugins.github-markdown-alerts.colors.note-border',
                'validation' => 'loose'
            ],
            'plugins.github-markdown-alerts.colors.note-title' => [
                'type' => 'colorpicker',
                'label' => 'PLUGIN_GITHUB_MARKDOWN_ALERTS.NOTE_TITLE_COLOR',
                'default' => '#316dca',
                'validate' => [
                    'type' => 'color'
                ],
                'name' => 'plugins.github-markdown-alerts.colors.note-title',
                'validation' => 'loose'
            ],
            'plugins.github-markdown-alerts.colors.tip-border' => [
                'type' => 'colorpicker',
                'label' => 'PLUGIN_GITHUB_MARKDOWN_ALERTS.TIP_BORDER_COLOR',
                'default' => '#347d39',
                'validate' => [
                    'type' => 'color'
                ],
                'name' => 'plugins.github-markdown-alerts.colors.tip-border',
                'validation' => 'loose'
            ],
            'plugins.github-markdown-alerts.colors.tip-title' => [
                'type' => 'colorpicker',
                'label' => 'PLUGIN_GITHUB_MARKDOWN_ALERTS.TIP_TITLE_COLOR',
                'default' => '#347d39',
                'validate' => [
                    'type' => 'color'
                ],
                'name' => 'plugins.github-markdown-alerts.colors.tip-title',
                'validation' => 'loose'
            ],
            'plugins.github-markdown-alerts.colors.important-border' => [
                'type' => 'colorpicker',
                'label' => 'PLUGIN_GITHUB_MARKDOWN_ALERTS.IMPORTANT_BORDER_COLOR',
                'default' => '#8256d0',
                'validate' => [
                    'type' => 'color'
                ],
                'name' => 'plugins.github-markdown-alerts.colors.important-border',
                'validation' => 'loose'
            ],
            'plugins.github-markdown-alerts.colors.important-title' => [
                'type' => 'colorpicker',
                'label' => 'PLUGIN_GITHUB_MARKDOWN_ALERTS.IMPORTANT_TITLE_COLOR',
                'default' => '#8256d0',
                'validate' => [
                    'type' => 'color'
                ],
                'name' => 'plugins.github-markdown-alerts.colors.important-title',
                'validation' => 'loose'
            ],
            'plugins.github-markdown-alerts.colors.warning-border' => [
                'type' => 'colorpicker',
                'label' => 'PLUGIN_GITHUB_MARKDOWN_ALERTS.WARNING_BORDER_COLOR',
                'default' => '#c69026',
                'validate' => [
                    'type' => 'color'
                ],
                'name' => 'plugins.github-markdown-alerts.colors.warning-border',
                'validation' => 'loose'
            ],
            'plugins.github-markdown-alerts.colors.warning-title' => [
                'type' => 'colorpicker',
                'label' => 'PLUGIN_GITHUB_MARKDOWN_ALERTS.WARNING_TITLE_COLOR',
                'default' => '#c69026',
                'validate' => [
                    'type' => 'color'
                ],
                'name' => 'plugins.github-markdown-alerts.colors.warning-title',
                'validation' => 'loose'
            ],
            'plugins.github-markdown-alerts.colors.caution-border' => [
                'type' => 'colorpicker',
                'label' => 'PLUGIN_GITHUB_MARKDOWN_ALERTS.CAUTION_BORDER_COLOR',
                'default' => '#c93c37',
                'validate' => [
                    'type' => 'color'
                ],
                'name' => 'plugins.github-markdown-alerts.colors.caution-border',
                'validation' => 'loose'
            ],
            'plugins.github-markdown-alerts.colors.caution-title' => [
                'type' => 'colorpicker',
                'label' => 'PLUGIN_GITHUB_MARKDOWN_ALERTS.CAUTION_TITLE_COLOR',
                'default' => '#c93c37',
                'validate' => [
                    'type' => 'color'
                ],
                'name' => 'plugins.github-markdown-alerts.colors.caution-title',
                'validation' => 'loose'
            ],
            'plugins.admin2' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.admin2.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin Status',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin2.enabled',
                'validation' => 'loose'
            ],
            'plugins.admin2.route' => [
                'type' => 'text',
                'label' => 'Admin Route',
                'description' => 'The route to access Admin2 (relative to site root).',
                'default' => '/admin2',
                'name' => 'plugins.admin2.route',
                'validation' => 'loose'
            ],
            'plugins.error' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.error.enabled' => [
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
                ],
                'name' => 'plugins.error.enabled',
                'validation' => 'strict'
            ],
            'plugins.error.routes' => [
                'type' => '_parent',
                'name' => 'plugins.error.routes',
                'form_field' => false
            ],
            'plugins.error.routes.404' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ERROR.ROUTE_404',
                'default' => '/error',
                'name' => 'plugins.error.routes.404',
                'validation' => 'strict'
            ],
            'plugins.login' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.login.tabs' => [
                'type' => 'tabs',
                'active' => 1,
                'class' => 'subtle',
                'name' => 'plugins.login.tabs',
                'validation' => 'loose'
            ],
            'plugins.login.options' => [
                'type' => 'section',
                'name' => 'plugins.login.options',
                'validation' => 'loose'
            ],
            'plugins.login.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_LOGIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.enabled',
                'validation' => 'loose'
            ],
            'plugins.login.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.BUILTIN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.built_in_css',
                'validation' => 'loose'
            ],
            'plugins.login.redirect_to_login' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.REDIRECT_TO_LOGIN',
                'default' => 0,
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.redirect_to_login',
                'validation' => 'loose'
            ],
            'plugins.login.redirect_after_login' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_LOGIN',
                'force_bool' => true,
                'default' => 0,
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.redirect_after_login',
                'validation' => 'loose'
            ],
            'plugins.login.redirect_after_logout' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_LOGOUT',
                'force_bool' => true,
                'default' => 1,
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.redirect_after_logout',
                'validation' => 'loose'
            ],
            'plugins.login.parent_acl' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.USE_PARENT_ACL_LABEL',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.parent_acl',
                'validation' => 'loose'
            ],
            'plugins.login.dynamic_page_visibility' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.DYNAMIC_VISIBILITY',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.dynamic_page_visibility',
                'validation' => 'loose'
            ],
            'plugins.login.twofa_enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.2FA_ENABLED',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.twofa_enabled',
                'validation' => 'loose'
            ],
            'plugins.login.protect_protected_page_media' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.PROTECT_PROTECTED_PAGE_MEDIA_LABEL',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.protect_protected_page_media',
                'validation' => 'loose'
            ],
            'plugins.login.session_user_sync' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SESSION_USER_SYNC',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.session_user_sync',
                'validation' => 'loose'
            ],
            'plugins.login.magic_link' => [
                'type' => '_parent',
                'name' => 'plugins.login.magic_link',
                'form_field' => false
            ],
            'plugins.login.magic_link.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.MAGIC_LINK_ENABLED',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.magic_link.enabled',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme' => [
                'type' => 'section',
                'name' => 'plugins.login.rememberme',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.rememberme.enabled',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'default' => 604800,
                'label' => 'PLUGIN_ADMIN.TIMEOUT',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.rememberme.timeout',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme.name' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.NAME',
                'name' => 'plugins.login.rememberme.name',
                'validation' => 'loose'
            ],
            'plugins.login.routes' => [
                'type' => 'tab',
                'name' => 'plugins.login.routes',
                'validation' => 'loose'
            ],
            'plugins.login.route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE',
                'name' => 'plugins.login.route',
                'validation' => 'loose'
            ],
            'plugins.login.route_after_login' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_AFTER_LOGIN',
                'name' => 'plugins.login.route_after_login',
                'validation' => 'loose'
            ],
            'plugins.login.route_after_logout' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_AFTER_LOGOUT',
                'name' => 'plugins.login.route_after_logout',
                'validation' => 'loose'
            ],
            'plugins.login.route_forgot' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_FORGOT',
                'name' => 'plugins.login.route_forgot',
                'validation' => 'loose'
            ],
            'plugins.login.route_magic' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_MAGIC',
                'name' => 'plugins.login.route_magic',
                'validation' => 'loose'
            ],
            'plugins.login.route_magic_login' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_MAGIC_LOGIN',
                'name' => 'plugins.login.route_magic_login',
                'validation' => 'loose'
            ],
            'plugins.login.magic_link.redirect_after_request' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.MAGIC_LINK_REDIRECT_AFTER_REQUEST',
                'name' => 'plugins.login.magic_link.redirect_after_request',
                'validation' => 'loose'
            ],
            'plugins.login.route_reset' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_RESET',
                'name' => 'plugins.login.route_reset',
                'validation' => 'loose'
            ],
            'plugins.login.route_profile' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_PROFILE',
                'name' => 'plugins.login.route_profile',
                'validation' => 'loose'
            ],
            'plugins.login.route_activate' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_ACTIVATE',
                'name' => 'plugins.login.route_activate',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration' => [
                'type' => '_parent',
                'name' => 'plugins.login.user_registration',
                'form_field' => false
            ],
            'plugins.login.user_registration.redirect_after_activation' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_ACTIVATION',
                'name' => 'plugins.login.user_registration.redirect_after_activation',
                'validation' => 'loose'
            ],
            'plugins.login.route_register' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_REGISTER',
                'name' => 'plugins.login.route_register',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.redirect_after_registration' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_REGISTRATION',
                'name' => 'plugins.login.user_registration.redirect_after_registration',
                'validation' => 'loose'
            ],
            'plugins.login.registration' => [
                'type' => 'tab',
                'name' => 'plugins.login.registration',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.enabled',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.max_attempts_count' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_REGISTRATIONS_COUNT',
                'append' => 'PLUGIN_LOGIN.ATTEMPTS',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.login.user_registration.max_attempts_count',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.max_attempts_interval' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_REGISTRATIONS_INTERVAL',
                'append' => 'PLUGIN_LOGIN.MINUTES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.user_registration.max_attempts_interval',
                'validation' => 'loose'
            ],
            'plugins.login.registration_fields' => [
                'type' => 'section',
                'name' => 'plugins.login.registration_fields',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.fields' => [
                'type' => 'array',
                'value_only' => true,
                'label' => 'PLUGIN_LOGIN.REGISTRATION_FIELDS',
                'name' => 'plugins.login.user_registration.fields',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.default_values' => [
                'type' => 'array',
                'label' => 'PLUGIN_LOGIN.DEFAULT_VALUES',
                'name' => 'plugins.login.user_registration.default_values',
                'validation' => 'loose'
            ],
            'plugins.login.access_levels' => [
                'type' => 'section',
                'security' => 'admin.super',
                'name' => 'plugins.login.access_levels',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.groups' => [
                'type' => 'select',
                'multiple' => true,
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.GROUPS',
                'data-options@' => 'Grav\\Common\\Flex\\Types\\UserGroups\\UserGroupObject::groupNames',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.login.user_registration.groups',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.access' => [
                'type' => '_parent',
                'name' => 'plugins.login.user_registration.access',
                'form_field' => false
            ],
            'plugins.login.user_registration.access.site' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.SITE_ACCESS',
                'multiple' => false,
                'validate' => [
                    'type' => 'array'
                ],
                'name' => 'plugins.login.user_registration.access.site',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options' => [
                'type' => '_parent',
                'name' => 'plugins.login.user_registration.options',
                'form_field' => false
            ],
            'plugins.login.user_registration.options.validate_password1_and_password2' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.VALIDATE_PASSWORD1_AND_PASSWORD2',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.validate_password1_and_password2',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.set_user_disabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SET_USER_DISABLED',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.set_user_disabled',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.login_after_registration' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.LOGIN_AFTER_REGISTRATION',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.login_after_registration',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.send_activation_email' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SEND_ACTIVATION_EMAIL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.send_activation_email',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.manually_enable' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.MANUALLY_ENABLE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.manually_enable',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.send_notification_email' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SEND_NOTIFICATION_EMAIL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.send_notification_email',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.send_welcome_email' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SEND_WELCOME_EMAIL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.send_welcome_email',
                'validation' => 'loose'
            ],
            'plugins.login.Security' => [
                'type' => 'tab',
                'name' => 'plugins.login.Security',
                'validation' => 'loose'
            ],
            'plugins.login.site_host' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.SITE_HOST',
                'name' => 'plugins.login.site_host',
                'validation' => 'loose'
            ],
            'plugins.login.require_trusted_host' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.REQUIRE_TRUSTED_HOST',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.require_trusted_host',
                'validation' => 'loose'
            ],
            'plugins.login.max_pw_resets_count' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_RESETS_COUNT',
                'append' => 'PLUGIN_LOGIN.RESETS',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.login.max_pw_resets_count',
                'validation' => 'loose'
            ],
            'plugins.login.max_pw_resets_interval' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_RESETS_INTERVAL',
                'append' => 'PLUGIN_LOGIN.MINUTES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.max_pw_resets_interval',
                'validation' => 'loose'
            ],
            'plugins.login.max_token_attempts_count' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_TOKEN_ATTEMPTS_COUNT',
                'append' => 'PLUGIN_LOGIN.ATTEMPTS',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.login.max_token_attempts_count',
                'validation' => 'loose'
            ],
            'plugins.login.max_token_attempts_interval' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_TOKEN_ATTEMPTS_INTERVAL',
                'append' => 'PLUGIN_LOGIN.MINUTES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.max_token_attempts_interval',
                'validation' => 'loose'
            ],
            'plugins.login.max_twofa_count' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_2FA_COUNT',
                'append' => 'PLUGIN_LOGIN.ATTEMPTS',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.login.max_twofa_count',
                'validation' => 'loose'
            ],
            'plugins.login.max_twofa_interval' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_2FA_INTERVAL',
                'append' => 'PLUGIN_LOGIN.MINUTES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.max_twofa_interval',
                'validation' => 'loose'
            ],
            'plugins.login.max_login_count' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_LOGINS_COUNT',
                'append' => 'PLUGIN_LOGIN.ATTEMPTS',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.login.max_login_count',
                'validation' => 'loose'
            ],
            'plugins.login.max_login_interval' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_LOGINS_INTERVAL',
                'append' => 'PLUGIN_LOGIN.MINUTES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.max_login_interval',
                'validation' => 'loose'
            ],
            'plugins.login.ipv6_subnet_size' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.IPV6_SUBNET_SIZE',
                'append' => 'PLUGIN_LOGIN.MINUTES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.ipv6_subnet_size',
                'validation' => 'loose'
            ],
            'plugins.login.magic_link_section' => [
                'type' => 'section',
                'name' => 'plugins.login.magic_link_section',
                'validation' => 'loose'
            ],
            'plugins.login.magic_link.ttl' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAGIC_LINK_TTL',
                'append' => 'PLUGIN_LOGIN.MINUTES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.magic_link.ttl',
                'validation' => 'loose'
            ],
            'plugins.login.magic_link.max_requests_count' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAGIC_LINK_MAX_REQUESTS_COUNT',
                'append' => 'PLUGIN_LOGIN.ATTEMPTS',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.login.magic_link.max_requests_count',
                'validation' => 'loose'
            ],
            'plugins.login.magic_link.max_requests_interval' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAGIC_LINK_MAX_REQUESTS_INTERVAL',
                'append' => 'PLUGIN_LOGIN.MINUTES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.magic_link.max_requests_interval',
                'validation' => 'loose'
            ],
            'plugins.email' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.email.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.email.enabled',
                'validation' => 'loose'
            ],
            'plugins.email.mailer' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer',
                'form_field' => false
            ],
            'plugins.email.mailer.engine' => [
                'type' => 'select',
                'label' => 'PLUGIN_EMAIL.MAIL_ENGINE',
                'size' => 'medium',
                'description' => 'PLUGIN_EMAIL.MAIL_ENGINE_DESC',
                'data-options@' => '\\Grav\\Plugin\\EmailPlugin::getEngines',
                'name' => 'plugins.email.mailer.engine',
                'validation' => 'loose'
            ],
            'plugins.email.smtp_config' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.email.smtp_config',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer.smtp',
                'form_field' => false
            ],
            'plugins.email.mailer.smtp.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.SMTP_SERVER',
                'name' => 'plugins.email.mailer.smtp.server',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_EMAIL.SMTP_PORT',
                'validate' => [
                    'type' => 'number',
                    'min' => 1,
                    'max' => 65535
                ],
                'name' => 'plugins.email.mailer.smtp.port',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.encryption' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.SMTP_ENCRYPTION',
                'options' => [
                    'none' => 'PLUGIN_EMAIL.SMTP_ENCRYPTION_NONE',
                    'ssl' => 'SSL',
                    'tls' => 'TLS'
                ],
                'name' => 'plugins.email.mailer.smtp.encryption',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.user' => [
                'type' => 'text',
                'size' => 'medium',
                'autocomplete' => 'off',
                'label' => 'PLUGIN_EMAIL.SMTP_LOGIN_NAME',
                'name' => 'plugins.email.mailer.smtp.user',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.password' => [
                'type' => 'password',
                'size' => 'medium',
                'autocomplete' => 'new-password',
                'label' => 'PLUGIN_EMAIL.SMTP_PASSWORD',
                'name' => 'plugins.email.mailer.smtp.password',
                'validation' => 'loose'
            ],
            'plugins.email.sendmail_config' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.email.sendmail_config',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.sendmail' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer.sendmail',
                'form_field' => false
            ],
            'plugins.email.mailer.sendmail.bin' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.PATH_TO_SENDMAIL',
                'name' => 'plugins.email.mailer.sendmail.bin',
                'validation' => 'loose'
            ],
            'plugins.email.email_Defaults' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.email.email_Defaults',
                'validation' => 'loose'
            ],
            'plugins.email.content_type' => [
                'type' => 'select',
                'label' => 'PLUGIN_EMAIL.CONTENT_TYPE',
                'size' => 'medium',
                'default' => 'text/html',
                'options' => [
                    'text/plain' => 'PLUGIN_EMAIL.CONTENT_TYPE_PLAIN_TEXT',
                    'text/html' => 'HTML'
                ],
                'name' => 'plugins.email.content_type',
                'validation' => 'loose'
            ],
            'plugins.email.from' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_EMAIL.EMAIL_FORM',
                'validate' => [
                    'required' => true
                ],
                'name' => 'plugins.email.from',
                'validation' => 'loose'
            ],
            'plugins.email.to' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_EMAIL.EMAIL_TO',
                'validate' => [
                    'required' => true
                ],
                'name' => 'plugins.email.to',
                'validation' => 'loose'
            ],
            'plugins.email.cc' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_EMAIL.EMAIL_CC',
                'name' => 'plugins.email.cc',
                'validation' => 'loose'
            ],
            'plugins.email.bcc' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_EMAIL.EMAIL_BCC',
                'name' => 'plugins.email.bcc',
                'validation' => 'loose'
            ],
            'plugins.email.reply_to' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_EMAIL.EMAIL_REPLY_TO',
                'name' => 'plugins.email.reply_to',
                'validation' => 'loose'
            ],
            'plugins.email.body' => [
                'type' => 'textarea',
                'size' => 'large',
                'rows' => 10,
                'label' => 'PLUGIN_EMAIL.EMAIL_BODY',
                'name' => 'plugins.email.body',
                'validation' => 'loose'
            ],
            'plugins.email.error_message' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_EMAIL.FORM_ERROR_MESSAGE',
                'name' => 'plugins.email.error_message',
                'validation' => 'loose'
            ],
            'plugins.email.advanced_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.email.advanced_section',
                'validation' => 'loose'
            ],
            'plugins.email.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_EMAIL.DEBUG',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.email.debug',
                'validation' => 'loose'
            ],
            'plugins.email.providers_section' => [
                'type' => 'section',
                'underline' => true,
                'text' => 'PLUGIN_EMAIL.PROVIDERS_SECTION_DESC',
                'name' => 'plugins.email.providers_section',
                'validation' => 'loose'
            ],
            'plugins.email.providers' => [
                'type' => '_parent',
                'name' => 'plugins.email.providers',
                'form_field' => false
            ],
            'plugins.email.providers.send_header' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.SEND_HEADER',
                'name' => 'plugins.email.providers.send_header',
                'validation' => 'loose'
            ],
            'themes.quark2' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'themes' => [
                'type' => '_parent',
                'name' => 'themes',
                'form_field' => false
            ],
            'themes.quark2.theme-mode' => [
                'type' => 'select',
                'label' => 'Theme Mode Default',
                'size' => 'small',
                'default' => 'auto',
                'options' => [
                    'auto' => 'Auto (follows OS)',
                    'light' => 'Light',
                    'dark' => 'Dark'
                ],
                'name' => 'themes.quark2.theme-mode',
                'validation' => 'loose'
            ],
            'themes.quark2.accent-color' => [
                'type' => 'colorpicker',
                'label' => 'Accent Color',
                'default' => '#242424',
                'name' => 'themes.quark2.accent-color',
                'validation' => 'loose'
            ],
            'themes.quark2.header_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.quark2.header_section',
                'validation' => 'loose'
            ],
            'themes.quark2.custom_logo' => [
                'type' => 'file',
                'label' => 'Custom Logo',
                'size' => 'large',
                'destination' => 'theme://images/logo',
                'multiple' => false,
                'markdown' => true,
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'themes.quark2.custom_logo',
                'validation' => 'loose'
            ],
            'themes.quark2.custom_logo_mobile' => [
                'type' => 'file',
                'label' => 'Custom Logo (Mobile)',
                'size' => 'large',
                'destination' => 'theme://images/logo',
                'multiple' => false,
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'themes.quark2.custom_logo_mobile',
                'validation' => 'loose'
            ],
            'themes.quark2.custom_favicon' => [
                'type' => 'file',
                'label' => 'Custom Favicon',
                'filesize' => 0.1,
                'size' => 'large',
                'destination' => 'theme://images/favicon',
                'multiple' => false,
                'accept' => [
                    0 => 'image/png',
                    1 => 'image/svg+xml',
                    2 => '.ico'
                ],
                'name' => 'themes.quark2.custom_favicon',
                'validation' => 'loose'
            ],
            'themes.quark2.header-fixed' => [
                'type' => 'toggle',
                'label' => 'Header Fixed',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.quark2.header-fixed',
                'validation' => 'loose'
            ],
            'themes.quark2.header-animated' => [
                'type' => 'toggle',
                'label' => 'Header Animated',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.quark2.header-animated',
                'validation' => 'loose'
            ],
            'themes.quark2.header-transparent' => [
                'type' => 'toggle',
                'label' => 'Header Transparent (hero pages)',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.quark2.header-transparent',
                'validation' => 'loose'
            ],
            'themes.quark2.header-dark' => [
                'type' => 'toggle',
                'label' => 'Header Text Light',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.quark2.header-dark',
                'validation' => 'loose'
            ],
            'themes.quark2.header-light' => [
                'type' => 'toggle',
                'label' => 'Header Text Dark',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.quark2.header-light',
                'validation' => 'loose'
            ],
            'themes.quark2.footer_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.quark2.footer_section',
                'validation' => 'loose'
            ],
            'themes.quark2.sticky-footer' => [
                'type' => 'toggle',
                'label' => 'Sticky Footer',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.quark2.sticky-footer',
                'validation' => 'loose'
            ],
            'themes.quark2.blog_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.quark2.blog_section',
                'validation' => 'loose'
            ],
            'themes.quark2.blog-page' => [
                'type' => 'text',
                'label' => 'Blog Page Route',
                'size' => 'medium',
                'default' => '/blog',
                'name' => 'themes.quark2.blog-page',
                'validation' => 'loose'
            ],
            'themes.quark2.icons_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.quark2.icons_section',
                'validation' => 'loose'
            ],
            'themes.quark2.fontawesome' => [
                'type' => '_parent',
                'name' => 'themes.quark2.fontawesome',
                'form_field' => false
            ],
            'themes.quark2.fontawesome.enabled' => [
                'type' => 'toggle',
                'label' => 'Font Awesome 7',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.quark2.fontawesome.enabled',
                'validation' => 'loose'
            ],
            'themes.quark2.fontawesome.local' => [
                'type' => 'toggle',
                'label' => 'Serve Font Awesome locally',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.quark2.fontawesome.local',
                'validation' => 'loose'
            ],
            'themes.kaffekos' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'themes.kaffekos.tabs' => [
                'type' => 'tabs',
                'active' => 1,
                'name' => 'themes.kaffekos.tabs',
                'validation' => 'loose'
            ],
            'themes.kaffekos.brand' => [
                'type' => 'tab',
                'name' => 'themes.kaffekos.brand',
                'validation' => 'loose'
            ],
            'themes.kaffekos.brand_intro' => [
                'type' => 'spacer',
                'name' => 'themes.kaffekos.brand_intro',
                'validation' => 'loose'
            ],
            'themes.kaffekos.custom_logo' => [
                'type' => 'file',
                'label' => 'Logo',
                'destination' => 'theme://images/logo',
                'multiple' => false,
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'themes.kaffekos.custom_logo',
                'validation' => 'loose'
            ],
            'themes.kaffekos.custom_favicon' => [
                'type' => 'file',
                'label' => 'Browser icon (favicon)',
                'filesize' => 0.1,
                'destination' => 'theme://images/favicon',
                'multiple' => false,
                'accept' => [
                    0 => 'image/png',
                    1 => 'image/svg+xml',
                    2 => '.ico'
                ],
                'name' => 'themes.kaffekos.custom_favicon',
                'validation' => 'loose'
            ],
            'themes.kaffekos.brand.wordmark' => [
                'type' => 'text',
                'label' => 'Name shown next to the logo',
                'default' => 'Kaffekos',
                'name' => 'themes.kaffekos.brand.wordmark',
                'validation' => 'loose'
            ],
            'themes.kaffekos.brand.tagline' => [
                'type' => 'text',
                'label' => 'Small line under the name',
                'default' => 'Coffee, Comfort, Connection',
                'name' => 'themes.kaffekos.brand.tagline',
                'validation' => 'loose'
            ],
            'themes.kaffekos.header' => [
                'type' => '_parent',
                'name' => 'themes.kaffekos.header',
                'form_field' => false
            ],
            'themes.kaffekos.header.cta_label' => [
                'type' => 'text',
                'label' => 'Header button text',
                'default' => 'Visit Us',
                'name' => 'themes.kaffekos.header.cta_label',
                'validation' => 'loose'
            ],
            'themes.kaffekos.header.cta_url' => [
                'type' => 'text',
                'label' => 'Header button link',
                'default' => '/contact',
                'name' => 'themes.kaffekos.header.cta_url',
                'validation' => 'loose'
            ],
            'themes.kaffekos.announcement_title' => [
                'type' => 'spacer',
                'name' => 'themes.kaffekos.announcement_title',
                'validation' => 'loose'
            ],
            'themes.kaffekos.announcement' => [
                'type' => '_parent',
                'name' => 'themes.kaffekos.announcement',
                'form_field' => false
            ],
            'themes.kaffekos.announcement.enabled' => [
                'type' => 'toggle',
                'label' => 'Show announcement bar',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.kaffekos.announcement.enabled',
                'validation' => 'loose'
            ],
            'themes.kaffekos.announcement.text' => [
                'type' => 'text',
                'label' => 'Announcement text',
                'name' => 'themes.kaffekos.announcement.text',
                'validation' => 'loose'
            ],
            'themes.kaffekos.announcement.link' => [
                'type' => 'text',
                'label' => 'Announcement link (optional)',
                'name' => 'themes.kaffekos.announcement.link',
                'validation' => 'loose'
            ],
            'themes.kaffekos.colors' => [
                'type' => 'tab',
                'name' => 'themes.kaffekos.colors',
                'validation' => 'loose'
            ],
            'themes.kaffekos.colors_intro' => [
                'type' => 'spacer',
                'text' => 'These colours are used across the whole site. The defaults come from the Kaffekos brand (Norwegian navy and red, coffee browns, warm cream).',
                'name' => 'themes.kaffekos.colors_intro',
                'validation' => 'loose'
            ],
            'themes.kaffekos.colors.navy' => [
                'type' => 'colorpicker',
                'label' => 'Deep navy (headings, dark sections)',
                'default' => '#0f2747',
                'name' => 'themes.kaffekos.colors.navy',
                'validation' => 'loose'
            ],
            'themes.kaffekos.colors.red' => [
                'type' => 'colorpicker',
                'label' => 'Norwegian red (buttons, small accents)',
                'default' => '#ba0c2f',
                'name' => 'themes.kaffekos.colors.red',
                'validation' => 'loose'
            ],
            'themes.kaffekos.colors.gold' => [
                'type' => 'colorpicker',
                'label' => 'Gold (dividers, highlights)',
                'default' => '#c99a5b',
                'name' => 'themes.kaffekos.colors.gold',
                'validation' => 'loose'
            ],
            'themes.kaffekos.colors.cream' => [
                'type' => 'colorpicker',
                'label' => 'Cream (page background)',
                'default' => '#fbf6ec',
                'name' => 'themes.kaffekos.colors.cream',
                'validation' => 'loose'
            ],
            'themes.kaffekos.colors.sand' => [
                'type' => 'colorpicker',
                'label' => 'Sand (alternate section background)',
                'default' => '#f1e6d2',
                'name' => 'themes.kaffekos.colors.sand',
                'validation' => 'loose'
            ],
            'themes.kaffekos.colors.ink' => [
                'type' => 'colorpicker',
                'label' => 'Coffee brown (body text)',
                'default' => '#2b1a10',
                'name' => 'themes.kaffekos.colors.ink',
                'validation' => 'loose'
            ],
            'themes.kaffekos.contact' => [
                'type' => 'tab',
                'name' => 'themes.kaffekos.contact',
                'validation' => 'loose'
            ],
            'themes.kaffekos.contact_intro' => [
                'type' => 'spacer',
                'name' => 'themes.kaffekos.contact_intro',
                'validation' => 'loose'
            ],
            'themes.kaffekos.business' => [
                'type' => '_parent',
                'name' => 'themes.kaffekos.business',
                'form_field' => false
            ],
            'themes.kaffekos.business.phone' => [
                'type' => 'text',
                'label' => 'Phone number',
                'default' => '+92 300 8480123',
                'name' => 'themes.kaffekos.business.phone',
                'validation' => 'loose'
            ],
            'themes.kaffekos.business.whatsapp' => [
                'type' => 'text',
                'label' => 'WhatsApp number',
                'default' => '923008480123',
                'name' => 'themes.kaffekos.business.whatsapp',
                'validation' => 'loose'
            ],
            'themes.kaffekos.business.email' => [
                'type' => 'email',
                'label' => 'Email address',
                'default' => 'info@kaffekos.pk',
                'name' => 'themes.kaffekos.business.email',
                'validation' => 'loose'
            ],
            'themes.kaffekos.business.address' => [
                'type' => 'textarea',
                'label' => 'Street address',
                'rows' => 3,
                'default' => 'Kaffekos, Grand Park
Block A, Phase 1, Johar Town
Lahore, Pakistan',
                'name' => 'themes.kaffekos.business.address',
                'validation' => 'loose'
            ],
            'themes.kaffekos.business.maps_url' => [
                'type' => 'text',
                'label' => 'Google Maps link',
                'default' => 'https://maps.app.goo.gl/PeZXekvmyz7heDNm9',
                'name' => 'themes.kaffekos.business.maps_url',
                'validation' => 'loose'
            ],
            'themes.kaffekos.business.lat' => [
                'type' => 'text',
                'label' => 'Map latitude',
                'default' => '31.4708125',
                'name' => 'themes.kaffekos.business.lat',
                'validation' => 'loose'
            ],
            'themes.kaffekos.business.lng' => [
                'type' => 'text',
                'label' => 'Map longitude',
                'default' => '74.3024827',
                'name' => 'themes.kaffekos.business.lng',
                'validation' => 'loose'
            ],
            'themes.kaffekos.business.price_range' => [
                'type' => 'text',
                'label' => 'Price range (for Google)',
                'default' => 'Rs. 300 - 1500',
                'name' => 'themes.kaffekos.business.price_range',
                'validation' => 'loose'
            ],
            'themes.kaffekos.hours' => [
                'type' => 'list',
                'label' => 'Days',
                'style' => 'vertical',
                'collapsed' => true,
                'name' => 'themes.kaffekos.hours',
                'validation' => 'loose'
            ],
            'themes.kaffekos.hours_intro' => [
                'type' => 'spacer',
                'text' => 'Use 24-hour times like 08:00 and 23:00. A time after midnight (for example 01:00) is fine. The site shows "Open now / Closed" automatically in Lahore time.',
                'name' => 'themes.kaffekos.hours_intro',
                'validation' => 'loose'
            ],
            'themes.kaffekos.hours.day' => [
                'type' => 'text',
                'label' => 'Day',
                'name' => 'themes.kaffekos.hours.day',
                'validation' => 'loose'
            ],
            'themes.kaffekos.hours.open' => [
                'type' => 'text',
                'label' => 'Opens (24h)',
                'name' => 'themes.kaffekos.hours.open',
                'validation' => 'loose'
            ],
            'themes.kaffekos.hours.close' => [
                'type' => 'text',
                'label' => 'Closes (24h)',
                'name' => 'themes.kaffekos.hours.close',
                'validation' => 'loose'
            ],
            'themes.kaffekos.hours.closed' => [
                'type' => 'toggle',
                'label' => 'Closed all day',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.kaffekos.hours.closed',
                'validation' => 'loose'
            ],
            'themes.kaffekos.hours_note' => [
                'type' => 'text',
                'label' => 'Note under the hours',
                'name' => 'themes.kaffekos.hours_note',
                'validation' => 'loose'
            ],
            'themes.kaffekos.social' => [
                'type' => 'tab',
                'name' => 'themes.kaffekos.social',
                'validation' => 'loose'
            ],
            'themes.kaffekos.social_intro' => [
                'type' => 'spacer',
                'name' => 'themes.kaffekos.social_intro',
                'validation' => 'loose'
            ],
            'themes.kaffekos.social.instagram' => [
                'type' => 'text',
                'label' => 'Instagram link',
                'default' => 'https://www.instagram.com/kaffekospakistan/',
                'name' => 'themes.kaffekos.social.instagram',
                'validation' => 'loose'
            ],
            'themes.kaffekos.social.facebook' => [
                'type' => 'text',
                'label' => 'Facebook link',
                'default' => 'https://www.facebook.com/kaffekos',
                'name' => 'themes.kaffekos.social.facebook',
                'validation' => 'loose'
            ],
            'themes.kaffekos.social.tiktok' => [
                'type' => 'text',
                'label' => 'TikTok link',
                'name' => 'themes.kaffekos.social.tiktok',
                'validation' => 'loose'
            ],
            'themes.kaffekos.social.youtube' => [
                'type' => 'text',
                'label' => 'YouTube link',
                'name' => 'themes.kaffekos.social.youtube',
                'validation' => 'loose'
            ],
            'themes.kaffekos.social.linkedin' => [
                'type' => 'text',
                'label' => 'LinkedIn link',
                'name' => 'themes.kaffekos.social.linkedin',
                'validation' => 'loose'
            ],
            'themes.kaffekos.social.x' => [
                'type' => 'text',
                'label' => 'X (Twitter) link',
                'name' => 'themes.kaffekos.social.x',
                'validation' => 'loose'
            ],
            'themes.kaffekos.footer' => [
                'type' => 'tab',
                'name' => 'themes.kaffekos.footer',
                'validation' => 'loose'
            ],
            'themes.kaffekos.footer.about' => [
                'type' => 'textarea',
                'label' => 'Short text in the footer',
                'rows' => 3,
                'default' => 'A small piece of Norway in Lahore. Honest coffee, warm bakes and the kind of cosy corner that makes you stay a little longer.',
                'name' => 'themes.kaffekos.footer.about',
                'validation' => 'loose'
            ],
            'themes.kaffekos.footer.copyright' => [
                'type' => 'text',
                'label' => 'Copyright line',
                'default' => 'Kaffekos. All rights reserved.',
                'name' => 'themes.kaffekos.footer.copyright',
                'validation' => 'loose'
            ],
            'themes.kaffekos.footer.tagline' => [
                'type' => 'text',
                'label' => 'Small closing line',
                'default' => 'Laget med kos i Lahore',
                'name' => 'themes.kaffekos.footer.tagline',
                'validation' => 'loose'
            ],
            'themes.kaffekos.shop_title' => [
                'type' => 'spacer',
                'name' => 'themes.kaffekos.shop_title',
                'validation' => 'loose'
            ],
            'themes.kaffekos.menu' => [
                'type' => '_parent',
                'name' => 'themes.kaffekos.menu',
                'form_field' => false
            ],
            'themes.kaffekos.menu.currency' => [
                'type' => 'text',
                'label' => 'Currency shown before menu prices',
                'default' => 'Rs.',
                'name' => 'themes.kaffekos.menu.currency',
                'validation' => 'loose'
            ]
        ],
        'rules' => [
            
        ],
        'nested' => [
            'backups' => [
                'history_title' => 'backups.history_title',
                'history' => 'backups.history',
                'config_title' => 'backups.config_title',
                'purge' => [
                    'trigger' => 'backups.purge.trigger',
                    'max_backups_count' => 'backups.purge.max_backups_count',
                    'max_backups_space' => 'backups.purge.max_backups_space',
                    'max_backups_time' => 'backups.purge.max_backups_time'
                ],
                'profiles_title' => 'backups.profiles_title',
                'profiles' => [
                    'name' => 'backups.profiles.name',
                    'root' => 'backups.profiles.root',
                    'exclude_paths' => 'backups.profiles.exclude_paths',
                    'exclude_files' => 'backups.profiles.exclude_files',
                    'schedule' => 'backups.profiles.schedule',
                    'schedule_at' => 'backups.profiles.schedule_at',
                    'schedule_environment' => 'backups.profiles.schedule_environment'
                ]
            ],
            'media' => [
                'types' => [
                    'extension' => 'media.types.extension',
                    'type' => 'media.types.type',
                    'thumb' => 'media.types.thumb',
                    'mime' => 'media.types.mime',
                    'image' => 'media.types.image'
                ]
            ],
            'scheduler' => [
                'scheduler_tabs' => 'scheduler.scheduler_tabs',
                'status_tab' => 'scheduler.status_tab',
                'status_title' => 'scheduler.status_title',
                'status' => 'scheduler.status',
                'modern_health' => 'scheduler.modern_health',
                'trigger_methods' => 'scheduler.trigger_methods',
                'jobs_tab' => 'scheduler.jobs_tab',
                'jobs_title' => 'scheduler.jobs_title',
                'custom_jobs' => [
                    'id' => 'scheduler.custom_jobs.id',
                    'command' => 'scheduler.custom_jobs.command',
                    'args' => 'scheduler.custom_jobs.args',
                    'at' => 'scheduler.custom_jobs.at',
                    'output' => 'scheduler.custom_jobs.output',
                    'output_mode' => 'scheduler.custom_jobs.output_mode',
                    'email' => 'scheduler.custom_jobs.email'
                ],
                'modern_tab' => 'scheduler.modern_tab',
                'workers_section' => 'scheduler.workers_section',
                'modern' => [
                    'workers' => 'scheduler.modern.workers',
                    'retry' => [
                        'enabled' => 'scheduler.modern.retry.enabled',
                        'max_attempts' => 'scheduler.modern.retry.max_attempts',
                        'backoff' => 'scheduler.modern.retry.backoff'
                    ],
                    'queue' => [
                        'path' => 'scheduler.modern.queue.path',
                        'max_size' => 'scheduler.modern.queue.max_size'
                    ],
                    'history' => [
                        'enabled' => 'scheduler.modern.history.enabled',
                        'retention_days' => 'scheduler.modern.history.retention_days'
                    ],
                    'webhook' => [
                        'enabled' => 'scheduler.modern.webhook.enabled',
                        'token' => 'scheduler.modern.webhook.token',
                        'path' => 'scheduler.modern.webhook.path'
                    ],
                    'health' => [
                        'enabled' => 'scheduler.modern.health.enabled',
                        'path' => 'scheduler.modern.health.path'
                    ]
                ],
                'retry_section' => 'scheduler.retry_section',
                'queue_section' => 'scheduler.queue_section',
                'history_section' => 'scheduler.history_section',
                'webhook_section' => 'scheduler.webhook_section',
                'webhook_plugin_status' => 'scheduler.webhook_plugin_status',
                'webhook_token_generate' => 'scheduler.webhook_token_generate',
                'health_section' => 'scheduler.health_section',
                'webhook_usage' => 'scheduler.webhook_usage',
                'webhook_examples' => 'scheduler.webhook_examples'
            ],
            'security' => [
                'xss_section' => 'security.xss_section',
                'xss_whitelist' => 'security.xss_whitelist',
                'xss_enabled' => [
                    'on_events' => 'security.xss_enabled.on_events',
                    'invalid_protocols' => 'security.xss_enabled.invalid_protocols',
                    'moz_binding' => 'security.xss_enabled.moz_binding',
                    'html_inline_styles' => 'security.xss_enabled.html_inline_styles',
                    'dangerous_tags' => 'security.xss_enabled.dangerous_tags'
                ],
                'xss_invalid_protocols' => 'security.xss_invalid_protocols',
                'xss_dangerous_tags' => 'security.xss_dangerous_tags',
                'twig_content_section' => 'security.twig_content_section',
                'twig_content' => [
                    'process_enabled' => 'security.twig_content.process_enabled',
                    'editor_enabled' => 'security.twig_content.editor_enabled',
                    'config_access' => 'security.twig_content.config_access'
                ],
                'twig_sandbox_section' => 'security.twig_sandbox_section',
                'twig_sandbox' => [
                    'enabled' => 'security.twig_sandbox.enabled',
                    'logging' => 'security.twig_sandbox.logging',
                    'admin_hint' => 'security.twig_sandbox.admin_hint',
                    'allowed_tags' => 'security.twig_sandbox.allowed_tags',
                    'allowed_filters' => 'security.twig_sandbox.allowed_filters',
                    'allowed_functions' => 'security.twig_sandbox.allowed_functions',
                    'allowed_methods' => [
                        'class' => 'security.twig_sandbox.allowed_methods.class',
                        'methods' => 'security.twig_sandbox.allowed_methods.methods'
                    ],
                    'allowed_properties' => [
                        'class' => 'security.twig_sandbox.allowed_properties.class',
                        'methods' => 'security.twig_sandbox.allowed_properties.methods'
                    ]
                ],
                'read_file_section' => 'security.read_file_section',
                'read_file' => [
                    'allowed_streams' => 'security.read_file.allowed_streams',
                    'allowed_extensions' => 'security.read_file.allowed_extensions',
                    'max_size' => 'security.read_file.max_size'
                ],
                'uploads_section' => 'security.uploads_section',
                'uploads_dangerous_extensions' => 'security.uploads_dangerous_extensions',
                'sanitize_svg' => 'security.sanitize_svg'
            ],
            'site' => [
                'content' => 'site.content',
                'title' => 'site.title',
                'default_lang' => 'site.default_lang',
                'author' => [
                    'name' => 'site.author.name',
                    'email' => 'site.author.email'
                ],
                'taxonomies' => 'site.taxonomies',
                'summary' => [
                    'enabled' => 'site.summary.enabled',
                    'size' => 'site.summary.size',
                    'format' => 'site.summary.format',
                    'delimiter' => 'site.summary.delimiter'
                ],
                'metadata' => 'site.metadata',
                'routes' => 'site.routes',
                'redirects' => 'site.redirects'
            ],
            'streams' => [
                'schemes' => [
                    'xxx' => 'streams.schemes.xxx'
                ]
            ],
            'system' => [
                'system_tabs' => 'system.system_tabs',
                'content' => 'system.content',
                'content_section' => 'system.content_section',
                'home' => [
                    'alias' => 'system.home.alias',
                    'hide_in_urls' => 'system.home.hide_in_urls'
                ],
                'pages' => [
                    'theme' => 'system.pages.theme',
                    'process' => 'system.pages.process',
                    'types' => 'system.pages.types',
                    'markdown_output' => [
                        'enabled' => 'system.pages.markdown_output.enabled',
                        'frontmatter' => 'system.pages.markdown_output.frontmatter',
                        'links' => 'system.pages.markdown_output.links',
                        'max_links' => 'system.pages.markdown_output.max_links',
                        'absolute_urls' => 'system.pages.markdown_output.absolute_urls',
                        'token_header' => 'system.pages.markdown_output.token_header'
                    ],
                    'dateformat' => [
                        'default' => 'system.pages.dateformat.default',
                        'short' => 'system.pages.dateformat.short',
                        'long' => 'system.pages.dateformat.long'
                    ],
                    'order' => [
                        'by' => 'system.pages.order.by',
                        'dir' => 'system.pages.order.dir'
                    ],
                    'order_digits' => 'system.pages.order_digits',
                    'list' => [
                        'count' => 'system.pages.list.count'
                    ],
                    'publish_dates' => 'system.pages.publish_dates',
                    'events' => 'system.pages.events',
                    'append_url_extension' => 'system.pages.append_url_extension',
                    'redirect_default_code' => 'system.pages.redirect_default_code',
                    'redirect_default_route' => 'system.pages.redirect_default_route',
                    'redirect_trailing_slash' => 'system.pages.redirect_trailing_slash',
                    'ignore_hidden' => 'system.pages.ignore_hidden',
                    'ignore_files' => 'system.pages.ignore_files',
                    'ignore_folders' => 'system.pages.ignore_folders',
                    'hide_empty_folders' => 'system.pages.hide_empty_folders',
                    'url_taxonomy_filters' => 'system.pages.url_taxonomy_filters',
                    'twig_first' => 'system.pages.twig_first',
                    'never_cache_twig' => 'system.pages.never_cache_twig',
                    'frontmatter' => [
                        'process_twig' => 'system.pages.frontmatter.process_twig',
                        'ignore_fields' => 'system.pages.frontmatter.ignore_fields',
                        'native_yaml' => 'system.pages.frontmatter.native_yaml'
                    ],
                    'expires' => 'system.pages.expires',
                    'cache_control' => 'system.pages.cache_control',
                    'last_modified' => 'system.pages.last_modified',
                    'etag' => 'system.pages.etag',
                    'vary_accept_encoding' => 'system.pages.vary_accept_encoding',
                    'markdown' => [
                        'extra' => 'system.pages.markdown.extra',
                        'auto_line_breaks' => 'system.pages.markdown.auto_line_breaks',
                        'auto_url_links' => 'system.pages.markdown.auto_url_links',
                        'escape_markup' => 'system.pages.markdown.escape_markup',
                        'gfm' => [
                            'task_lists' => 'system.pages.markdown.gfm.task_lists',
                            'marks' => 'system.pages.markdown.gfm.marks',
                            'tagfilter' => 'system.pages.markdown.gfm.tagfilter',
                            'autolinks' => 'system.pages.markdown.gfm.autolinks'
                        ],
                        'tables' => [
                            'colspan' => 'system.pages.markdown.tables.colspan',
                            'headerless' => 'system.pages.markdown.tables.headerless',
                            'captions' => 'system.pages.markdown.tables.captions',
                            'attributes' => 'system.pages.markdown.tables.attributes',
                            'multiline' => 'system.pages.markdown.tables.multiline'
                        ],
                        'valid_link_attributes' => 'system.pages.markdown.valid_link_attributes'
                    ],
                    'lazy_index' => 'system.pages.lazy_index'
                ],
                'markdown_output_section' => 'system.markdown_output_section',
                'timezone' => 'system.timezone',
                'languages' => [
                    'supported' => 'system.languages.supported',
                    'default_lang' => 'system.languages.default_lang',
                    'include_default_lang' => 'system.languages.include_default_lang',
                    'include_default_lang_file_extension' => 'system.languages.include_default_lang_file_extension',
                    'content_fallback' => 'system.languages.content_fallback',
                    'pages_fallback_only' => 'system.languages.pages_fallback_only',
                    'translations' => 'system.languages.translations',
                    'translations_fallback' => 'system.languages.translations_fallback',
                    'session_store_active' => 'system.languages.session_store_active',
                    'http_accept_language' => 'system.languages.http_accept_language',
                    'http_accept_language_fallback' => 'system.languages.http_accept_language_fallback',
                    'override_locale' => 'system.languages.override_locale',
                    'debug' => 'system.languages.debug'
                ],
                'languages-section' => 'system.languages-section',
                'key' => 'system.key',
                'value' => 'system.value',
                'http_headers' => 'system.http_headers',
                'http_headers_section' => 'system.http_headers_section',
                'markdown' => 'system.markdown',
                'markdow_section' => 'system.markdow_section',
                'caching' => 'system.caching',
                'caching_section' => 'system.caching_section',
                'cache' => [
                    'enabled' => 'system.cache.enabled',
                    'check' => [
                        'method' => 'system.cache.check.method',
                        'interval' => 'system.cache.check.interval'
                    ],
                    'driver' => 'system.cache.driver',
                    'prefix' => 'system.cache.prefix',
                    'purge_max_age_days' => 'system.cache.purge_max_age_days',
                    'purge_at' => 'system.cache.purge_at',
                    'clear_at' => 'system.cache.clear_at',
                    'clear_job_type' => 'system.cache.clear_job_type',
                    'clear_images_by_default' => 'system.cache.clear_images_by_default',
                    'cli_compatibility' => 'system.cache.cli_compatibility',
                    'lifetime' => 'system.cache.lifetime',
                    'gzip' => 'system.cache.gzip',
                    'allow_webserver_gzip' => 'system.cache.allow_webserver_gzip',
                    'memcached' => [
                        'server' => 'system.cache.memcached.server',
                        'port' => 'system.cache.memcached.port'
                    ],
                    'redis' => [
                        'socket' => 'system.cache.redis.socket',
                        'server' => 'system.cache.redis.server',
                        'port' => 'system.cache.redis.port',
                        'password' => 'system.cache.redis.password',
                        'database' => 'system.cache.redis.database'
                    ]
                ],
                'flex_caching' => 'system.flex_caching',
                'flex' => [
                    'cache' => [
                        'index' => [
                            'enabled' => 'system.flex.cache.index.enabled',
                            'lifetime' => 'system.flex.cache.index.lifetime'
                        ],
                        'object' => [
                            'enabled' => 'system.flex.cache.object.enabled',
                            'lifetime' => 'system.flex.cache.object.lifetime'
                        ],
                        'render' => [
                            'enabled' => 'system.flex.cache.render.enabled',
                            'lifetime' => 'system.flex.cache.render.lifetime'
                        ]
                    ]
                ],
                'twig' => [
                    'cache' => 'system.twig.cache',
                    'debug' => 'system.twig.debug',
                    'auto_reload' => 'system.twig.auto_reload',
                    'autoescape' => 'system.twig.autoescape'
                ],
                'twig_section' => 'system.twig_section',
                'assets' => [
                    'enable_asset_timestamp' => 'system.assets.enable_asset_timestamp',
                    'enable_asset_sri' => 'system.assets.enable_asset_sri',
                    'collections' => 'system.assets.collections',
                    'css_pipeline' => 'system.assets.css_pipeline',
                    'css_pipeline_include_externals' => 'system.assets.css_pipeline_include_externals',
                    'css_pipeline_before_excludes' => 'system.assets.css_pipeline_before_excludes',
                    'css_minify' => 'system.assets.css_minify',
                    'css_minify_windows' => 'system.assets.css_minify_windows',
                    'css_rewrite' => 'system.assets.css_rewrite',
                    'js_pipeline' => 'system.assets.js_pipeline',
                    'js_pipeline_include_externals' => 'system.assets.js_pipeline_include_externals',
                    'js_pipeline_before_excludes' => 'system.assets.js_pipeline_before_excludes',
                    'js_minify' => 'system.assets.js_minify',
                    'js_module_pipeline' => 'system.assets.js_module_pipeline',
                    'js_module_pipeline_include_externals' => 'system.assets.js_module_pipeline_include_externals',
                    'js_module_pipeline_before_excludes' => 'system.assets.js_module_pipeline_before_excludes'
                ],
                'general_config_section' => 'system.general_config_section',
                'css_assets_section' => 'system.css_assets_section',
                'js_assets_section' => 'system.js_assets_section',
                'js_module_assets_section' => 'system.js_module_assets_section',
                'errors' => [
                    'display' => 'system.errors.display',
                    'log' => 'system.errors.log'
                ],
                'errors_section' => 'system.errors_section',
                'log' => [
                    'handler' => 'system.log.handler',
                    'syslog' => [
                        'facility' => 'system.log.syslog.facility',
                        'tag' => 'system.log.syslog.tag'
                    ]
                ],
                'debugger' => [
                    'enabled' => 'system.debugger.enabled',
                    'provider' => 'system.debugger.provider',
                    'censored' => 'system.debugger.censored',
                    'token' => 'system.debugger.token',
                    'flex_render_hints' => 'system.debugger.flex_render_hints',
                    'shutdown' => [
                        'close_connection' => 'system.debugger.shutdown.close_connection'
                    ]
                ],
                'debugger_section' => 'system.debugger_section',
                'media' => [
                    'enable_media_timestamp' => 'system.media.enable_media_timestamp',
                    'auto_metadata_exif' => 'system.media.auto_metadata_exif',
                    'allowed_fallback_types' => 'system.media.allowed_fallback_types',
                    'unsupported_inline_types' => 'system.media.unsupported_inline_types'
                ],
                'media_section' => 'system.media_section',
                'images' => [
                    'adapter' => 'system.images.adapter',
                    'default_image_quality' => 'system.images.default_image_quality',
                    'progressive_jpeg' => 'system.images.progressive_jpeg',
                    'cache_all' => 'system.images.cache_all',
                    'cache_perms' => 'system.images.cache_perms',
                    'debug' => 'system.images.debug',
                    'auto_fix_orientation' => 'system.images.auto_fix_orientation',
                    'url_actions' => 'system.images.url_actions',
                    'max_pixels' => 'system.images.max_pixels',
                    'defaults' => [
                        'loading' => 'system.images.defaults.loading',
                        'decoding' => 'system.images.defaults.decoding',
                        'fetchpriority' => 'system.images.defaults.fetchpriority'
                    ],
                    'seofriendly' => 'system.images.seofriendly',
                    'cls' => [
                        'auto_sizes' => 'system.images.cls.auto_sizes',
                        'aspect_ratio' => 'system.images.cls.aspect_ratio',
                        'retina_scale' => 'system.images.cls.retina_scale'
                    ]
                ],
                'section_images_cls' => 'system.section_images_cls',
                'session' => [
                    'enabled' => 'system.session.enabled',
                    'initialize' => 'system.session.initialize',
                    'lazy' => 'system.session.lazy',
                    'timeout' => 'system.session.timeout',
                    'name' => 'system.session.name',
                    'uniqueness' => 'system.session.uniqueness',
                    'secure' => 'system.session.secure',
                    'secure_https' => 'system.session.secure_https',
                    'httponly' => 'system.session.httponly',
                    'domain' => 'system.session.domain',
                    'path' => 'system.session.path',
                    'samesite' => 'system.session.samesite',
                    'split' => 'system.session.split'
                ],
                'session_section' => 'system.session_section',
                'advanced' => 'system.advanced',
                'advanced_section' => 'system.advanced_section',
                'gpm_section' => 'system.gpm_section',
                'gpm' => [
                    'releases' => 'system.gpm.releases',
                    'official_gpm_only' => 'system.gpm.official_gpm_only'
                ],
                'http_section' => 'system.http_section',
                'http' => [
                    'method' => 'system.http.method',
                    'enable_proxy' => 'system.http.enable_proxy',
                    'proxy_url' => 'system.http.proxy_url',
                    'proxy_cert_path' => 'system.http.proxy_cert_path',
                    'verify_peer' => 'system.http.verify_peer',
                    'verify_host' => 'system.http.verify_host',
                    'concurrent_connections' => 'system.http.concurrent_connections'
                ],
                'misc_section' => 'system.misc_section',
                'reverse_proxy_setup' => 'system.reverse_proxy_setup',
                'username_regex' => 'system.username_regex',
                'pwd_regex' => 'system.pwd_regex',
                'pwd_rules' => [
                    'id' => 'system.pwd_rules.id',
                    'label' => 'system.pwd_rules.label',
                    'pattern' => 'system.pwd_rules.pattern'
                ],
                'intl_enabled' => 'system.intl_enabled',
                'wrapped_site' => 'system.wrapped_site',
                'absolute_urls' => 'system.absolute_urls',
                'param_sep' => 'system.param_sep',
                'force_ssl' => 'system.force_ssl',
                'force_lowercase_urls' => 'system.force_lowercase_urls',
                'custom_base_url' => 'system.custom_base_url',
                'http_x_forwarded' => [
                    'protocol' => 'system.http_x_forwarded.protocol',
                    'host' => 'system.http_x_forwarded.host',
                    'port' => 'system.http_x_forwarded.port',
                    'ip' => 'system.http_x_forwarded.ip',
                    'client_ip' => 'system.http_x_forwarded.client_ip',
                    'cf_connecting_ip' => 'system.http_x_forwarded.cf_connecting_ip'
                ],
                'strict_mode' => [
                    'blueprint_compat' => 'system.strict_mode.blueprint_compat',
                    'yaml_compat' => 'system.strict_mode.yaml_compat',
                    'twig2_compat' => 'system.strict_mode.twig2_compat',
                    'twig3_compat' => 'system.strict_mode.twig3_compat'
                ],
                'accounts' => [
                    'type' => 'system.accounts.type',
                    'storage' => 'system.accounts.storage',
                    'avatar' => 'system.accounts.avatar'
                ],
                'flex_accounts' => 'system.flex_accounts'
            ],
            'plugins' => [
                'form' => [
                    'enabled' => 'plugins.form.enabled',
                    'general' => 'plugins.form.general',
                    'debug' => 'plugins.form.debug',
                    'built_in_css' => 'plugins.form.built_in_css',
                    'inline_css' => 'plugins.form.inline_css',
                    'refresh_prevention' => 'plugins.form.refresh_prevention',
                    'client_side_validation' => 'plugins.form.client_side_validation',
                    'inline_errors' => 'plugins.form.inline_errors',
                    'modular_form_fix' => 'plugins.form.modular_form_fix',
                    'files' => [
                        'multiple' => 'plugins.form.files.multiple',
                        'limit' => 'plugins.form.files.limit',
                        'destination' => 'plugins.form.files.destination',
                        'accept' => 'plugins.form.files.accept',
                        'filesize' => 'plugins.form.files.filesize',
                        'avoid_overwriting' => 'plugins.form.files.avoid_overwriting',
                        'random_name' => 'plugins.form.files.random_name'
                    ],
                    'recaptcha' => [
                        'version' => 'plugins.form.recaptcha.version',
                        'score_threshold' => 'plugins.form.recaptcha.score_threshold',
                        'theme' => 'plugins.form.recaptcha.theme',
                        'site_key' => 'plugins.form.recaptcha.site_key',
                        'secret_key' => 'plugins.form.recaptcha.secret_key'
                    ],
                    'turnstile_captcha' => 'plugins.form.turnstile_captcha',
                    'turnstile' => [
                        'theme' => 'plugins.form.turnstile.theme',
                        'site_key' => 'plugins.form.turnstile.site_key',
                        'secret_key' => 'plugins.form.turnstile.secret_key'
                    ],
                    'cap_captcha' => 'plugins.form.cap_captcha',
                    'cap' => [
                        'mode' => 'plugins.form.cap.mode',
                        'storage' => 'plugins.form.cap.storage',
                        'challenge_count' => 'plugins.form.cap.challenge_count',
                        'challenge_size' => 'plugins.form.cap.challenge_size',
                        'challenge_difficulty' => 'plugins.form.cap.challenge_difficulty',
                        'expires_ms' => 'plugins.form.cap.expires_ms'
                    ],
                    'basic_captcha' => [
                        'image' => [
                            'width' => 'plugins.form.basic_captcha.image.width',
                            'height' => 'plugins.form.basic_captcha.image.height'
                        ],
                        'chars' => [
                            'font' => 'plugins.form.basic_captcha.chars.font',
                            'size' => 'plugins.form.basic_captcha.chars.size',
                            'bg' => 'plugins.form.basic_captcha.chars.bg',
                            'text' => 'plugins.form.basic_captcha.chars.text',
                            'start_x' => 'plugins.form.basic_captcha.chars.start_x',
                            'start_y' => 'plugins.form.basic_captcha.chars.start_y',
                            'length' => 'plugins.form.basic_captcha.chars.length'
                        ],
                        'type' => 'plugins.form.basic_captcha.type',
                        'plugins' => [
                            'form' => [
                                'characters' => 'plugins.form.basic_captcha.plugins.form.characters',
                                'math' => 'plugins.form.basic_captcha.plugins.form.math'
                            ]
                        ],
                        'math' => [
                            'min' => 'plugins.form.basic_captcha.math.min',
                            'max' => 'plugins.form.basic_captcha.math.max',
                            'operators' => 'plugins.form.basic_captcha.math.operators'
                        ]
                    ]
                ],
                'flex-objects' => [
                    'enabled' => 'plugins.flex-objects.enabled',
                    'built_in_css' => 'plugins.flex-objects.built_in_css',
                    'security_section' => 'plugins.flex-objects.security_section',
                    'security' => [
                        'restrict_page_frontmatter' => 'plugins.flex-objects.security.restrict_page_frontmatter'
                    ],
                    'directories' => 'plugins.flex-objects.directories'
                ],
                'problems' => [
                    'enabled' => 'plugins.problems.enabled',
                    'built_in_css' => 'plugins.problems.built_in_css'
                ],
                'api' => [
                    'enabled' => 'plugins.api.enabled',
                    'tabs' => 'plugins.api.tabs',
                    'tab_general' => 'plugins.api.tab_general',
                    'section_general' => 'plugins.api.section_general',
                    'route' => 'plugins.api.route',
                    'version_prefix' => 'plugins.api.version_prefix',
                    'section_backend' => 'plugins.api.section_backend',
                    'flex_backend' => [
                        'pages' => 'plugins.api.flex_backend.pages',
                        'accounts' => 'plugins.api.flex_backend.accounts'
                    ],
                    'force_cache' => 'plugins.api.force_cache',
                    'compression' => 'plugins.api.compression',
                    'tab_authentication' => 'plugins.api.tab_authentication',
                    'section_auth' => 'plugins.api.section_auth',
                    'auth' => [
                        'api_keys_enabled' => 'plugins.api.auth.api_keys_enabled',
                        'jwt_enabled' => 'plugins.api.auth.jwt_enabled',
                        'jwt_expiry' => 'plugins.api.auth.jwt_expiry',
                        'jwt_refresh_expiry' => 'plugins.api.auth.jwt_refresh_expiry',
                        'jwt_algorithm' => 'plugins.api.auth.jwt_algorithm',
                        'session_enabled' => 'plugins.api.auth.session_enabled',
                        'key_cache_ttl' => 'plugins.api.auth.key_cache_ttl'
                    ],
                    'session_early_close' => 'plugins.api.session_early_close',
                    'protect_frontend_session' => 'plugins.api.protect_frontend_session',
                    'translation_overrides' => 'plugins.api.translation_overrides',
                    'allow_draft_preview' => 'plugins.api.allow_draft_preview',
                    'section_login_captcha' => 'plugins.api.section_login_captcha',
                    'login' => [
                        'captcha' => [
                            'enabled' => 'plugins.api.login.captcha.enabled',
                            'provider' => 'plugins.api.login.captcha.provider',
                            'mode' => 'plugins.api.login.captcha.mode',
                            'flows' => [
                                'login' => 'plugins.api.login.captcha.flows.login',
                                'forgot_password' => 'plugins.api.login.captcha.flows.forgot_password',
                                'setup' => 'plugins.api.login.captcha.flows.setup'
                            ],
                            'cap' => [
                                'challenge_difficulty' => 'plugins.api.login.captcha.cap.challenge_difficulty',
                                'challenge_count' => 'plugins.api.login.captcha.cap.challenge_count'
                            ]
                        ]
                    ],
                    'tab_cors' => 'plugins.api.tab_cors',
                    'section_cors' => 'plugins.api.section_cors',
                    'cors' => [
                        'enabled' => 'plugins.api.cors.enabled',
                        'origins' => 'plugins.api.cors.origins',
                        'methods' => 'plugins.api.cors.methods',
                        'headers' => 'plugins.api.cors.headers'
                    ],
                    'tab_rate_limiting' => 'plugins.api.tab_rate_limiting',
                    'section_rate_limit' => 'plugins.api.section_rate_limit',
                    'rate_limit' => [
                        'enabled' => 'plugins.api.rate_limit.enabled',
                        'requests' => 'plugins.api.rate_limit.requests',
                        'window' => 'plugins.api.rate_limit.window'
                    ],
                    'tab_content' => 'plugins.api.tab_content',
                    'section_media_metadata' => 'plugins.api.section_media_metadata',
                    'media_metadata' => [
                        'max_length' => 'plugins.api.media_metadata.max_length',
                        'fields' => [
                            'key' => 'plugins.api.media_metadata.fields.key',
                            'label' => 'plugins.api.media_metadata.fields.label',
                            'type' => 'plugins.api.media_metadata.fields.type'
                        ]
                    ],
                    'section_popularity' => 'plugins.api.section_popularity',
                    'popularity' => [
                        'enabled' => 'plugins.api.popularity.enabled',
                        'exclude_admin' => 'plugins.api.popularity.exclude_admin',
                        'exclude_ips' => 'plugins.api.popularity.exclude_ips',
                        'exclude_non_browsers' => 'plugins.api.popularity.exclude_non_browsers',
                        'exclude_agents' => 'plugins.api.popularity.exclude_agents'
                    ],
                    'tab_audit_trail' => 'plugins.api.tab_audit_trail',
                    'section_audit' => 'plugins.api.section_audit',
                    'audit' => [
                        'enabled' => 'plugins.api.audit.enabled',
                        'coverage' => 'plugins.api.audit.coverage',
                        'retention_days' => 'plugins.api.audit.retention_days',
                        'retention_max_rows' => 'plugins.api.audit.retention_max_rows',
                        'anonymize_ip' => 'plugins.api.audit.anonymize_ip',
                        'capture' => [
                            'auth' => 'plugins.api.audit.capture.auth',
                            'content' => 'plugins.api.audit.capture.content',
                            'media' => 'plugins.api.audit.capture.media',
                            'users' => 'plugins.api.audit.capture.users',
                            'config' => 'plugins.api.audit.capture.config',
                            'packages' => 'plugins.api.audit.capture.packages'
                        ]
                    ],
                    'tab_demo_mode' => 'plugins.api.tab_demo_mode',
                    'section_demo' => 'plugins.api.section_demo',
                    'demo' => [
                        'notice' => 'plugins.api.demo.notice',
                        'writable' => 'plugins.api.demo.writable',
                        'reset_interval' => 'plugins.api.demo.reset_interval',
                        'reset_on_request' => 'plugins.api.demo.reset_on_request',
                        'reset_on_schedule' => 'plugins.api.demo.reset_on_schedule',
                        'keep_safety_snapshots' => 'plugins.api.demo.keep_safety_snapshots'
                    ]
                ],
                'shortcode-core' => [
                    'shortcode_tabs' => 'plugins.shortcode-core.shortcode_tabs',
                    'options' => 'plugins.shortcode-core.options',
                    'enabled' => 'plugins.shortcode-core.enabled',
                    'active' => 'plugins.shortcode-core.active',
                    'active_admin' => 'plugins.shortcode-core.active_admin',
                    'admin_pages_only' => 'plugins.shortcode-core.admin_pages_only',
                    'parser' => 'plugins.shortcode-core.parser',
                    'custom_shortcodes' => 'plugins.shortcode-core.custom_shortcodes',
                    'exclude_default_shortcodes' => 'plugins.shortcode-core.exclude_default_shortcodes',
                    'css' => [
                        'notice_enabled' => 'plugins.shortcode-core.css.notice_enabled'
                    ],
                    'fontawesome' => [
                        'load' => 'plugins.shortcode-core.fontawesome.load',
                        'url' => 'plugins.shortcode-core.fontawesome.url',
                        'v5' => 'plugins.shortcode-core.fontawesome.v5'
                    ],
                    'builder' => 'plugins.shortcode-core.builder',
                    'shortcodes_intro' => 'plugins.shortcode-core.shortcodes_intro',
                    'shortcodes' => [
                        'name' => 'plugins.shortcode-core.shortcodes.name',
                        'template' => 'plugins.shortcode-core.shortcodes.template',
                        'output' => 'plugins.shortcode-core.shortcodes.output'
                    ]
                ],
                'github-markdown-alerts' => [
                    'enabled' => 'plugins.github-markdown-alerts.enabled',
                    'include_css' => 'plugins.github-markdown-alerts.include_css',
                    'wrapper_class' => 'plugins.github-markdown-alerts.wrapper_class',
                    'title_class' => 'plugins.github-markdown-alerts.title_class',
                    'body_class' => 'plugins.github-markdown-alerts.body_class',
                    'enable_octicons' => 'plugins.github-markdown-alerts.enable_octicons',
                    '_advanced_section' => 'plugins.github-markdown-alerts._advanced_section',
                    'colors' => [
                        'note-border' => 'plugins.github-markdown-alerts.colors.note-border',
                        'note-title' => 'plugins.github-markdown-alerts.colors.note-title',
                        'tip-border' => 'plugins.github-markdown-alerts.colors.tip-border',
                        'tip-title' => 'plugins.github-markdown-alerts.colors.tip-title',
                        'important-border' => 'plugins.github-markdown-alerts.colors.important-border',
                        'important-title' => 'plugins.github-markdown-alerts.colors.important-title',
                        'warning-border' => 'plugins.github-markdown-alerts.colors.warning-border',
                        'warning-title' => 'plugins.github-markdown-alerts.colors.warning-title',
                        'caution-border' => 'plugins.github-markdown-alerts.colors.caution-border',
                        'caution-title' => 'plugins.github-markdown-alerts.colors.caution-title'
                    ]
                ],
                'admin2' => [
                    'enabled' => 'plugins.admin2.enabled',
                    'route' => 'plugins.admin2.route'
                ],
                'error' => [
                    'enabled' => 'plugins.error.enabled',
                    'routes' => [
                        404 => 'plugins.error.routes.404'
                    ]
                ],
                'login' => [
                    'tabs' => 'plugins.login.tabs',
                    'options' => 'plugins.login.options',
                    'enabled' => 'plugins.login.enabled',
                    'built_in_css' => 'plugins.login.built_in_css',
                    'redirect_to_login' => 'plugins.login.redirect_to_login',
                    'redirect_after_login' => 'plugins.login.redirect_after_login',
                    'redirect_after_logout' => 'plugins.login.redirect_after_logout',
                    'parent_acl' => 'plugins.login.parent_acl',
                    'dynamic_page_visibility' => 'plugins.login.dynamic_page_visibility',
                    'twofa_enabled' => 'plugins.login.twofa_enabled',
                    'protect_protected_page_media' => 'plugins.login.protect_protected_page_media',
                    'session_user_sync' => 'plugins.login.session_user_sync',
                    'magic_link' => [
                        'enabled' => 'plugins.login.magic_link.enabled',
                        'redirect_after_request' => 'plugins.login.magic_link.redirect_after_request',
                        'ttl' => 'plugins.login.magic_link.ttl',
                        'max_requests_count' => 'plugins.login.magic_link.max_requests_count',
                        'max_requests_interval' => 'plugins.login.magic_link.max_requests_interval'
                    ],
                    'rememberme' => [
                        'enabled' => 'plugins.login.rememberme.enabled',
                        'timeout' => 'plugins.login.rememberme.timeout',
                        'name' => 'plugins.login.rememberme.name'
                    ],
                    'routes' => 'plugins.login.routes',
                    'route' => 'plugins.login.route',
                    'route_after_login' => 'plugins.login.route_after_login',
                    'route_after_logout' => 'plugins.login.route_after_logout',
                    'route_forgot' => 'plugins.login.route_forgot',
                    'route_magic' => 'plugins.login.route_magic',
                    'route_magic_login' => 'plugins.login.route_magic_login',
                    'route_reset' => 'plugins.login.route_reset',
                    'route_profile' => 'plugins.login.route_profile',
                    'route_activate' => 'plugins.login.route_activate',
                    'user_registration' => [
                        'redirect_after_activation' => 'plugins.login.user_registration.redirect_after_activation',
                        'redirect_after_registration' => 'plugins.login.user_registration.redirect_after_registration',
                        'enabled' => 'plugins.login.user_registration.enabled',
                        'max_attempts_count' => 'plugins.login.user_registration.max_attempts_count',
                        'max_attempts_interval' => 'plugins.login.user_registration.max_attempts_interval',
                        'fields' => 'plugins.login.user_registration.fields',
                        'default_values' => 'plugins.login.user_registration.default_values',
                        'groups' => 'plugins.login.user_registration.groups',
                        'access' => [
                            'site' => 'plugins.login.user_registration.access.site'
                        ],
                        'options' => [
                            'validate_password1_and_password2' => 'plugins.login.user_registration.options.validate_password1_and_password2',
                            'set_user_disabled' => 'plugins.login.user_registration.options.set_user_disabled',
                            'login_after_registration' => 'plugins.login.user_registration.options.login_after_registration',
                            'send_activation_email' => 'plugins.login.user_registration.options.send_activation_email',
                            'manually_enable' => 'plugins.login.user_registration.options.manually_enable',
                            'send_notification_email' => 'plugins.login.user_registration.options.send_notification_email',
                            'send_welcome_email' => 'plugins.login.user_registration.options.send_welcome_email'
                        ]
                    ],
                    'route_register' => 'plugins.login.route_register',
                    'registration' => 'plugins.login.registration',
                    'registration_fields' => 'plugins.login.registration_fields',
                    'access_levels' => 'plugins.login.access_levels',
                    'Security' => 'plugins.login.Security',
                    'site_host' => 'plugins.login.site_host',
                    'require_trusted_host' => 'plugins.login.require_trusted_host',
                    'max_pw_resets_count' => 'plugins.login.max_pw_resets_count',
                    'max_pw_resets_interval' => 'plugins.login.max_pw_resets_interval',
                    'max_token_attempts_count' => 'plugins.login.max_token_attempts_count',
                    'max_token_attempts_interval' => 'plugins.login.max_token_attempts_interval',
                    'max_twofa_count' => 'plugins.login.max_twofa_count',
                    'max_twofa_interval' => 'plugins.login.max_twofa_interval',
                    'max_login_count' => 'plugins.login.max_login_count',
                    'max_login_interval' => 'plugins.login.max_login_interval',
                    'ipv6_subnet_size' => 'plugins.login.ipv6_subnet_size',
                    'magic_link_section' => 'plugins.login.magic_link_section'
                ],
                'email' => [
                    'enabled' => 'plugins.email.enabled',
                    'mailer' => [
                        'engine' => 'plugins.email.mailer.engine',
                        'smtp' => [
                            'server' => 'plugins.email.mailer.smtp.server',
                            'port' => 'plugins.email.mailer.smtp.port',
                            'encryption' => 'plugins.email.mailer.smtp.encryption',
                            'user' => 'plugins.email.mailer.smtp.user',
                            'password' => 'plugins.email.mailer.smtp.password'
                        ],
                        'sendmail' => [
                            'bin' => 'plugins.email.mailer.sendmail.bin'
                        ]
                    ],
                    'smtp_config' => 'plugins.email.smtp_config',
                    'sendmail_config' => 'plugins.email.sendmail_config',
                    'email_Defaults' => 'plugins.email.email_Defaults',
                    'content_type' => 'plugins.email.content_type',
                    'from' => 'plugins.email.from',
                    'to' => 'plugins.email.to',
                    'cc' => 'plugins.email.cc',
                    'bcc' => 'plugins.email.bcc',
                    'reply_to' => 'plugins.email.reply_to',
                    'body' => 'plugins.email.body',
                    'error_message' => 'plugins.email.error_message',
                    'advanced_section' => 'plugins.email.advanced_section',
                    'debug' => 'plugins.email.debug',
                    'providers_section' => 'plugins.email.providers_section',
                    'providers' => [
                        'send_header' => 'plugins.email.providers.send_header'
                    ]
                ]
            ],
            'themes' => [
                'quark2' => [
                    'theme-mode' => 'themes.quark2.theme-mode',
                    'accent-color' => 'themes.quark2.accent-color',
                    'header_section' => 'themes.quark2.header_section',
                    'custom_logo' => 'themes.quark2.custom_logo',
                    'custom_logo_mobile' => 'themes.quark2.custom_logo_mobile',
                    'custom_favicon' => 'themes.quark2.custom_favicon',
                    'header-fixed' => 'themes.quark2.header-fixed',
                    'header-animated' => 'themes.quark2.header-animated',
                    'header-transparent' => 'themes.quark2.header-transparent',
                    'header-dark' => 'themes.quark2.header-dark',
                    'header-light' => 'themes.quark2.header-light',
                    'footer_section' => 'themes.quark2.footer_section',
                    'sticky-footer' => 'themes.quark2.sticky-footer',
                    'blog_section' => 'themes.quark2.blog_section',
                    'blog-page' => 'themes.quark2.blog-page',
                    'icons_section' => 'themes.quark2.icons_section',
                    'fontawesome' => [
                        'enabled' => 'themes.quark2.fontawesome.enabled',
                        'local' => 'themes.quark2.fontawesome.local'
                    ]
                ],
                'kaffekos' => [
                    'tabs' => 'themes.kaffekos.tabs',
                    'brand' => [
                        'wordmark' => 'themes.kaffekos.brand.wordmark',
                        'tagline' => 'themes.kaffekos.brand.tagline'
                    ],
                    'brand_intro' => 'themes.kaffekos.brand_intro',
                    'custom_logo' => 'themes.kaffekos.custom_logo',
                    'custom_favicon' => 'themes.kaffekos.custom_favicon',
                    'header' => [
                        'cta_label' => 'themes.kaffekos.header.cta_label',
                        'cta_url' => 'themes.kaffekos.header.cta_url'
                    ],
                    'announcement_title' => 'themes.kaffekos.announcement_title',
                    'announcement' => [
                        'enabled' => 'themes.kaffekos.announcement.enabled',
                        'text' => 'themes.kaffekos.announcement.text',
                        'link' => 'themes.kaffekos.announcement.link'
                    ],
                    'colors' => [
                        'navy' => 'themes.kaffekos.colors.navy',
                        'red' => 'themes.kaffekos.colors.red',
                        'gold' => 'themes.kaffekos.colors.gold',
                        'cream' => 'themes.kaffekos.colors.cream',
                        'sand' => 'themes.kaffekos.colors.sand',
                        'ink' => 'themes.kaffekos.colors.ink'
                    ],
                    'colors_intro' => 'themes.kaffekos.colors_intro',
                    'contact' => 'themes.kaffekos.contact',
                    'contact_intro' => 'themes.kaffekos.contact_intro',
                    'business' => [
                        'phone' => 'themes.kaffekos.business.phone',
                        'whatsapp' => 'themes.kaffekos.business.whatsapp',
                        'email' => 'themes.kaffekos.business.email',
                        'address' => 'themes.kaffekos.business.address',
                        'maps_url' => 'themes.kaffekos.business.maps_url',
                        'lat' => 'themes.kaffekos.business.lat',
                        'lng' => 'themes.kaffekos.business.lng',
                        'price_range' => 'themes.kaffekos.business.price_range'
                    ],
                    'hours' => [
                        'day' => 'themes.kaffekos.hours.day',
                        'open' => 'themes.kaffekos.hours.open',
                        'close' => 'themes.kaffekos.hours.close',
                        'closed' => 'themes.kaffekos.hours.closed'
                    ],
                    'hours_intro' => 'themes.kaffekos.hours_intro',
                    'hours_note' => 'themes.kaffekos.hours_note',
                    'social' => [
                        'instagram' => 'themes.kaffekos.social.instagram',
                        'facebook' => 'themes.kaffekos.social.facebook',
                        'tiktok' => 'themes.kaffekos.social.tiktok',
                        'youtube' => 'themes.kaffekos.social.youtube',
                        'linkedin' => 'themes.kaffekos.social.linkedin',
                        'x' => 'themes.kaffekos.social.x'
                    ],
                    'social_intro' => 'themes.kaffekos.social_intro',
                    'footer' => [
                        'about' => 'themes.kaffekos.footer.about',
                        'copyright' => 'themes.kaffekos.footer.copyright',
                        'tagline' => 'themes.kaffekos.footer.tagline'
                    ],
                    'shop_title' => 'themes.kaffekos.shop_title',
                    'menu' => [
                        'currency' => 'themes.kaffekos.menu.currency'
                    ]
                ]
            ]
        ],
        'dynamic' => [
            'system.timezone' => [
                'options' => [
                    'action' => 'data',
                    'params' => '\\Grav\\Common\\Utils::timezones'
                ]
            ],
            'system.pages.dateformat.default' => [
                'options' => [
                    'action' => 'data',
                    'params' => '\\Grav\\Common\\Utils::dateFormats'
                ]
            ],
            'plugins.login.user_registration.groups' => [
                'options' => [
                    'action' => 'data',
                    'params' => 'Grav\\Common\\Flex\\Types\\UserGroups\\UserGroupObject::groupNames'
                ]
            ],
            'plugins.email.mailer.engine' => [
                'options' => [
                    'action' => 'data',
                    'params' => '\\Grav\\Plugin\\EmailPlugin::getEngines'
                ]
            ]
        ],
        'filter' => [
            'validation' => true,
            'xss_check' => true
        ]
    ]
];
