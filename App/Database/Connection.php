<?php

namespace App\Database;

use App\Config;
use PDO;

class Connection
{
    public static function connect()
    {
        $config = Config::get('db');

        $dsn = sprintf('mysql:host=%s;dbname=%s', $config['host'], $config['database']);
        $connection = new PDO($dsn, $config['username'], $config['password']);

        return $connection;
    }
}
