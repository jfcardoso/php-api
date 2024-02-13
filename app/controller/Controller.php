<?php

namespace App\controller;

// Classe abstrata Controller para armazenar métodos comuns às classes Controller.
abstract class Controller{

    protected static function render($view, $clientModel = null){

        $file_view = VIEWS . $view . '.php';
        
        if (file_exists($file_view)){
           include $file_view;
        }else{
           exit('Arquivo não encontrado:' . $view .'.php'); 
        }        
    }
}