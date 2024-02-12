<?php

namespace App\dao;

use \PDO;

abstract class DAO {

    protected $conn;

    public function __construct(){
        // DSN (Data Source Name) onde o servidor MySQL será encontrado
        $dsn = "mysql:host=localhost:3306;dbname=db_cliente";

        $this->conn = new PDO($dsn, 'root', 'admin@2024');
    }

}