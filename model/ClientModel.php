<?php

/**
 * A camada model é responsável por transportar os dados da Controller até a DAO e vice-versa.
 * Também é atribuído a Model a validação dos dados da View e controle de acesso aos métodos
 * da DAO.
 */
class ClientModel{

    public $id, $nome, $sexo, $cpf, $data_nascimento, $email, $tel, $cep, $endereco, $bairro, $cidade, $uf, $created_at;
    
    
    // Propriedade que armazenará o array retornado da DAO com a listagem dos clientes.    
    public $rows;

    //chama a DAO para gravar no banco de dados o model preenchido.
    public function save(){

        include 'dao/ClientDAO.php';

        $dao = new ClientDAO();

        if(empty($this->id)){            
            $dao->insert($this);
        } else {
            $dao->update($this); // Como existe um id, passando o model para ser atualizado.
        }        
    }
    
    public function getAllRows()
    {
        include 'dao/ClientDAO.php';
        
        $dao = new ClientDAO();
       
        $this->rows = $dao->select();
    }

    public function getById(int $id){

        include 'dao/ClientDAO.php';
        
        $dao = new ClientDAO();

        $obj = $dao->selectById($id); // Obtendo um model preenchido da camada DAO
        
        return ($obj) ? $obj : new ClientModel();       
    }

    public function delete(int $id){

        include 'dao/ClientDAO.php';
        
        $dao = new ClientDAO();

        $dao->delete($id);
    }
}