<?php

namespace App\Database;

use PDO;

class Query
{
    protected $connection;

    public function __construct($connection = null)
    {
        $this->connection = $connection ?: Connection::connect();
    }

    /**
     * @param $sql
     * @param array $params
     * @return array
     */
    public function fetchArray($sql, $params = [])
    {
        $state = $this->exec($sql, $params);
        return $state->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchRow($sql, $params = [])
    {
        $state = $this->exec($sql, $params);
        return $state->fetch(PDO::FETCH_ASSOC);
    }

    protected function exec($sql, $params = [])
    {
        $query = $this->connection->prepare($sql);
        $query->execute($params);
        return $query;
    }
}
