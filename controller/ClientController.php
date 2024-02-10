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
}