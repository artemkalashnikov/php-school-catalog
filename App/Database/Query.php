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

    public function exec($sql, $params = [])
    {
        $query = $this->connection->prepare($sql);
        $result = $query->execute($params);
        if (!$result) {
            throw new \Exception(implode("\n", $query->errorInfo()));
        }

        return $query;
    }

    public function lastInsertId()
    {
        return $this->connection->lastInsertId();
    }
}
