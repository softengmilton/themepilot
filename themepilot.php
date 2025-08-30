<?php
defined('ABSPATH') or die;

/*
 * Plugin Name:       Theme Pilot
 * Plugin URI:        https://themeplugin.com
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Milton Dey
 * Author URI:        https://author.themeplugin.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://themeplugin.com/my-plugin/
 * Text Domain:       themepilot
 * Domain Path:       /languages
 */


define('THEMEPILOT_PATH', plugin_dir_path(__FILE__));
define('THEMEPILOT_URL', plugin_dir_url(__FILE__));
define('THEMEPILOT_BASENAME', plugin_basename(__FILE__));
define('THEMEPILOT_VERSION', '1.10.3');
define('THEMEPILOT_DEV', true); // Set to false for production

class ThemePilot
{
    public function init()
    {
        $this->autoload();
        register_activation_hook(__FILE__, array($this, 'activatePlugin'));
        register_deactivation_hook(__FILE__, array($this, 'deactivatePlugin'));
    }

    public function activatePlugin()
    {
        \App\Helpers\Activator::activate();
    }

    public function deactivatePlugin()
    {
        \App\Helpers\Deactivator::deactivate();
    }

    // composer autoload
    private function autoload()
    {
        if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
            require_once dirname(__FILE__) . '/vendor/autoload.php';
        }
        // Load Hooks
        require_once THEMEPILOT_PATH . 'app/Hooks/hooks.php';
    }
}


(new ThemePilot())->init();
