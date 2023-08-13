<?php

namespace App\Core\Connection;

class Connection extends \PDO
{
    private $pdo;

    
    public function __construct($dsn, $username, $pass)
    {
        $this->pdo = new \PDO($dsn, $username, $pass);
    }

    public static function getConnection()
    {

    }
} 