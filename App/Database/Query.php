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

        $result = [];
        foreach ($state->fetchAll(PDO::FETCH_ASSOC) as $row) {
            $result[] = $row;
        }
        return $result;
    }

    public function fetchRow($sql, $params = [])
    {
        return [
            'title' => 'First',
            'content' => 'First content',
        ];
    }

    protected function exec($sql, $params = [])
    {
        $query = $this->connection->prepare($sql);
        $query->execute($params);
        return $query;
    }
}
