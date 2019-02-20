<?php

namespace App;

class Config
{
    public static function get($section)
    {
        $config = require __DIR__ . '/../config/config.php';

        return $config[$section];
    }
}
