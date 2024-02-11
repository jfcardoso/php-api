<?php

class ClientController{
    
    # retorna a listagem dos clientes cadastrados
    public static function index(){
        include 'View/modules/Client/ListClient.php';
    }

    # retorna a página de cadastro de cliente
    public static function form(){
        include 'View/modules/Client/FormClient.php';
    }

    # salva o formulário no banco
    public static function save(){

       include 'model/ClientModel.php';

       $clientModel = new ClientModel();

       $clientModel->nome = $_POST['nome'];
       $clientModel->sexo = $_POST['sexo'];
       $clientModel->cpf = $_POST['cpf'];
       $clientModel->data_nascimento = $_POST['data_nascimento'];
       $clientModel->email = $_POST['email'];
       $clientModel->tel = $_POST['tel'];
       $clientModel->cep = $_POST['cep'];
       $clientModel->endereco = $_POST['endereco'];
       $clientModel->bairro = $_POST['bairro'];
       $clientModel->cidade = $_POST['cidade'];
       $clientModel->uf = $_POST['uf'];

       $clientModel->save();

       header("Location: /client");       
    }
}