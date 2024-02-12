<?php

// responsável por executar os SQL junto ao banco de dados.
class ClientDAO{

    private $conn;

    public function __construct(){

         // DSN (Data Source Name) onde o servidor MySQL será encontrado
        $dsn = "mysql:host=localhost:3306;dbname=db_cliente";

        $this->conn = new PDO($dsn, 'root', 'admin@2024');
    }

    // Método que recebe um model e extrai os dados para realizar o insert na tabela correspondente.
    public function insert(ClientModel $clientModel){

        $sql = "INSERT INTO cliente (nome, sexo, cpf, data_nascimento, email, tel, cep, endereco, bairro, cidade, uf) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

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

    // recebe o Model preenchido e atualiza no banco de dados.
    public function update(ClientModel $clientModel){

        $sql = "UPDATE cliente SET nome=?, sexo=?, cpf=?, data_nascimento=?, email=?, tel=?, cep=?, endereco=?, bairro=?, cidade=?, uf=? WHERE id=? ";

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
        $stmt->bindValue(12, $clientModel->id);

        $stmt->execute();
    }

    // retorna todos os registros da tabela client no banco de dados.
    public function select(){

        $sql = "SELECT * FROM cliente ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        // Retorna um array com as linhas retornadas da consulta.
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    
    // Retorna um registro específico da tabela client do banco de dados.    
    public function selectById(int $id){       

        $sql = "SELECT * FROM cliente WHERE id = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchObject("ClientModel"); // Retornando um objeto específico ClientModel
    }
    
    //Remove um registro da tabela client do banco de dados.    
    public function delete(int $id)
    {
        $sql = "DELETE FROM cliente WHERE id = ? ";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}