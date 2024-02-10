<?php

$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

switch($url){
    case '/':
        echo "Página Inicial";
        break;
    case '/client':
        echo "lista todos os clientes cadastrados";
        break;    
    case '/client/form':
        echo "formulário de cadastro de cliente";
        break;
    default:
        echo "Erro 404!";
        break;        
}