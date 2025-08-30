<?php

namespace App\Hooks\Handlers;


class EnqueueHandler
{
    public function register()
    {
        add_action('admin_enqueue_scripts', [$this, 'enqueueStyles']);
        add_action('admin_enqueue_scripts', [$this, 'enqueueAdminScripts']);
        add_action('admin_enqueue_scripts', [$this, 'loadVueAssets']);
    }

    public function enqueueStyles()
    {
        wp_enqueue_style('themepilot-admin-style', THEMEPILOT_URL . 'app/public/assets/css/style.css');
    }
    public function enqueueAdminScripts()
    {
        wp_enqueue_script('themepilot-admin-script', THEMEPILOT_URL . 'app/public/assets/js/script.js');
    }

    public function loadVueAssets($hook)
    {
        if (strpos($hook, 'themepilot') === false) return;

        if (defined('THEMEPILOT_DEV') && THEMEPILOT_DEV) {
            // Development - Vite server
            echo '<script type="module" src="http://localhost:5173/src/main.js"></script>';
        } else {
            // Production - Built assets
            wp_enqueue_script('themepilot-vue', THEMEPILOT_URL . 'frontend/dist/assets/index.js', [], null, true);
            wp_enqueue_style('themepilot-vue-css', THEMEPILOT_URL . 'frontend/dist/assets/index.css');
        }
    }
}
