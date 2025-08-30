<?php
defined('ABSPATH') || exit;

use App\Services\Router;
use App\Controllers\SettingController;


// Initialize the router
$router = new Router('my-plugin/v1');

// Define routes for each controller
$router->get('/settings', [SettingController::class, 'getSettings']);
$router->post('/settings', [SettingController::class, 'saveSettings']);





// You can also add custom permission callbacks
$router->get('/public-data', [SettingController::class, 'getPublicData'], [
    'permission_callback' => '__return_true' // Publicly accessible
]);
