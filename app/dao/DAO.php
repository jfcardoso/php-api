<?php

namespace App\dao;

use \PDO;

abstract class DAO {

    protected $conn;

    public function __construct(){
        // DSN (Data Source Name) onde o servidor MySQL será encontrado
        $dsn = "mysql:host=" . $_ENV['db']['host'] . ";dbname=" . $_ENV['db']['database'];

        $this->conn = new PDO($dsn, $_ENV['db']['user'], $_ENV['db']['pass']);
    }

}