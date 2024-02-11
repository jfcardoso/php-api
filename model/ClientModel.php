<?php

class ClientModel{

    public $id, $nome, $sexo, $cpf, $data_nascimento, $email, $tel,
            $cep, $endereco, $bairro, $cidade, $uf, $created_at;
    
    public function save(){

        include 'dao/ClientDAO.php';

        $dao = new ClientDAO();

        $dao->insert($this);
    }    
}