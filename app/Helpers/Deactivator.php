<?php

namespace App\Helpers;

class Deactivator
{
    public static function deactivate()
    {
        flush_rewrite_rules();
    }
}
