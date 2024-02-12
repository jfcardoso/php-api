<?php

// Classe responsável por processar as requisições do usuário.
class ClientController{
    
    // retorna uma view com a listagem dos clientes cadastrados
    public static function index(){       

        $clientModel = new ClientModel();
        $clientModel->getAllRows();

        include 'view/modules/Client/ListClient.php';
    }

    // retorna uma view contendo um formulário para cadastro de cliente.
    public static function form(){       

        $clientModel = new ClientModel();

        if(isset($_GET['id']))
            $clientModel = $clientModel->getById( (int) $_GET['id']); // obtendo o model preenchido vindo da DAO.

        include 'view/modules/Client/FormClient.php';
    }

    // preenche um model para que seja enviado ao BD para salvar.
    public static function save(){
// include 'model/ClientModel.php';

       $clientModel = new ClientModel();

       $clientModel->id = $_POST['id'];
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

    public static function delete(){       

        $clientModel = new ClientModel();

        $clientModel->delete( (int) $_GET['id'] );

        header("Location: /client");
    }
}