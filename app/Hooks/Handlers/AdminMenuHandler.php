<?php

namespace app\Hooks\Handlers;

class AdminMenuHandler
{
    public function register()
    {
        add_action('admin_menu', [$this, 'addAdminMenu']);
    }

    public function addAdminMenu()
    {
        // Main parent menu
        add_menu_page(
            'ThemePilot',
            'ThemePilot',
            'manage_options',
            'themepilot',
            [$this, 'renderAdminPage'],
            THEMEPILOT_URL . 'app/public/assets/img/default/menu-icon.png', // choose your icon
            59
        );

        // Submenus
        add_submenu_page(
            'themepilot',
            'Settings',
            'Settings',
            'manage_options',
            'themepilot-settings',
            [$this, 'renderSettingsPage']
        );

        add_submenu_page(
            'themepilot',
            'Social Share',
            'Social Share',
            'manage_options',
            'themepilot-social',
            [$this, 'renderSocialPage']
        );

        add_submenu_page(
            'themepilot',
            'Get Started',
            '<strong style="color:#fff;">Get Started</strong>', // Bold like screenshot
            'manage_options',
            'themepilot-get-started',
            [$this, 'renderGetStartedPage']
        );

        add_submenu_page(
            'themepilot',
            'Recommended Plugins',
            'Recommended Plugins',
            'manage_options',
            'themepilot-plugins',
            [$this, 'renderPluginsPage']
        );

        add_submenu_page(
            'themepilot',
            'Upgrade Now',
            '<span style="color:#00e676; font-weight:bold;">UPGRADE NOW &#128142;</span>', // Green like screenshot
            'manage_options',
            'themepilot-upgrade',
            [$this, 'renderUpgradePage']
        );

        remove_submenu_page('themepilot', 'themepilot');
    }

    // Pages
    public function renderAdminPage()
    {
        echo '<div class="wrap"><h1>Welcome to ThemePilot</h1><p>This is the ThemePilot admin page.</p></div>';
    }

    public function renderSettingsPage()
    {
        echo '<div class="wrap"><h1>ThemePilot Settings</h1><p>Settings page content goes here.</p></div>';
    }

    public function renderSocialPage()
    {
        echo '<div class="wrap"><h1>Social Share</h1><p>Social Share settings here.</p></div>';
    }

    public function renderGetStartedPage()
    {
        echo '<div class="wrap"><h1>Get Started</h1><p>Here is how to get started with ThemePilot.</p></div>';
    }

    public function renderPluginsPage()
    {
        echo '<div class="wrap"><h1>Recommended Plugins</h1><p>List of recommended plugins here.</p></div>';
    }

    public function renderUpgradePage()
    {
        echo '<div class="wrap"><h1>Upgrade Now</h1><p>Upgrade details and offers here.</p></div>';
    }
}
