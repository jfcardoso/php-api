<?php

include 'Controller/ClientController.php';

$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

switch($url){
    case '/':
        echo "Página Inicial";
        break;
    case '/client':
       ClientController::index();
        break;    
    case '/client/form':
        ClientController::form();
        break;
    default:
        echo "Erro 404!";
        break;        
}