<?php

namespace App\Hooks\Handlers;


class EnqueueHandler
{
    public function register()
    {
        add_action('admin_enqueue_scripts', [$this, 'enqueueStyles']);
        add_action('admin_enqueue_scripts', [$this, 'enqueueAdminScripts']);
    }

    public function enqueueStyles()
    {
        wp_enqueue_style('themepilot-admin-style', THEMEPILOT_URL . 'app/public/assets/css/style.css');
    }
    public function enqueueAdminScripts()
    {
        wp_enqueue_script('themepilot-admin-script', THEMEPILOT_URL . 'app/public/assets/js/script.js');
    }
}
