<?php

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
    case '/client/form/save':
        ClientController::save();
        break;
    case '/client/delete':
        ClientController::delete();
        break;        
    default:
        echo "Erro 404!";
        break;        
}