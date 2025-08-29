<?php

namespace App\Hooks;

defined('ABSPATH')  || exit;


/**
 * Init Direct Class Here
 */

(new \App\Hooks\Handlers\AdminMenuHandler())->register();
(new \App\Hooks\Handlers\EnqueueHandler())->register();
