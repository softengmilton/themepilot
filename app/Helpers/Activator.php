<?php

namespace App\Helpers;

class Activator
{
    public static function activate()
    {
        flush_rewrite_rules();
        \App\Models\Model::register();
    }
}
