<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Admin 2 dashboard widget "Google rating (Kaffekos)".
 *
 * The widget's web component is served by the API's own route /gpm/plugins/kaffekos-admin/widget-script
 * (admin-next/widgets/kaffekos-admin.js). The numbers travel inside the widget definition as JSON in
 * `dataEndpoint`, so no extra API route is needed (a route registered here would sit behind the API's
 * route cache). They are read from the Kaffekos theme every time the dashboard asks for its widgets.
 */
class KaffekosAdminPlugin extends Plugin
{
    public static function getSubscribedEvents(): array
    {
        return [
            'onApiDashboardWidgets' => ['onApiDashboardWidgets', 0],
        ];
    }

    public function onApiDashboardWidgets(Event $event): void
    {
        if (class_exists('\Grav\Theme\Kaffekos') && method_exists('\Grav\Theme\Kaffekos', 'googleStatusData')) {
            $status = \Grav\Theme\Kaffekos::googleStatusData();
        } else {
            $status = ['level' => 'off', 'setup' => false, 'message' => 'The Kaffekos theme is not the active theme, so there is no Google status to show.'];
        }
        $status['generated'] = time();

        $widgets   = $event['widgets'];
        $widgets[] = [
            'id'           => 'kaffekos-admin.google-rating',
            'label'        => 'Google rating (Kaffekos)',
            'icon'         => 'Star',
            'sizes'        => ['md', 'lg', 'xl'],
            'defaultSize'  => 'lg',
            'authorize'    => 'api.system.read',
            'priority'     => 1000, // sorts above the saved positions of the core widgets, so it is the first card after login
            'plugin'       => 'kaffekos-admin',
            'scriptUrl'    => '/gpm/plugins/kaffekos-admin/widget-script',
            'dataEndpoint' => json_encode($status, JSON_UNESCAPED_UNICODE),
        ];
        $event['widgets'] = $widgets;
    }
}
