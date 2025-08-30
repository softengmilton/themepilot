<?php
defined('ABSPATH') || exit;

use App\Services\Router;
use App\Controllers\SettingController;
use App\Controllers\ThemeController;

// Initialize the router
$router = new Router('my-plugin/v1');

// Theme routes
$router->get('/themes', [ThemeController::class, 'getAllThemes']);
$router->get('/themes/(?P<id>\d+)', [ThemeController::class, 'getTheme']);
$router->post('/themes', [ThemeController::class, 'createTheme']);
$router->put('/themes/(?P<id>\d+)', [ThemeController::class, 'updateTheme']);
$router->delete('/themes/(?P<id>\d+)', [ThemeController::class, 'deleteTheme']);


// You can also add custom permission callbacks
$router->get('/public-data', [SettingController::class, 'getPublicData'], [
    'permission_callback' => '__return_true' // Publicly accessible
]);
