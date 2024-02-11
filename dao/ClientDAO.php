<?php

class ClientDAO{

    private $conn;

    public function __construct(){

        $dsn = "mysql:host=localhost:3306;dbname=db_client";

        $this->conn = new PDO($dsn, 'root', 'admin@2024');
    }

    public function insert(ClientModel $clientModel){
        $sql = "INSERT INTO client (nome, sexo, cpf, data_nascimento, email, tel, cep, endereco, bairro, cidade, uf) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindValue(1, $clientModel->nome);
        $stmt->bindValue(2, $clientModel->sexo);
        $stmt->bindValue(3, $clientModel->cpf);
        $stmt->bindValue(4, $clientModel->data_nascimento);
        $stmt->bindValue(5, $clientModel->email);
        $stmt->bindValue(6, $clientModel->tel);
        $stmt->bindValue(7, $clientModel->cep);
        $stmt->bindValue(8, $clientModel->endereco);
        $stmt->bindValue(9, $clientModel->bairro);
        $stmt->bindValue(10, $clientModel->cidade);
        $stmt->bindValue(11, $clientModel->uf);

        $stmt->execute();
    }

    public function update(ClientModel $clientModel){

    }

    public function select(){

    }

}