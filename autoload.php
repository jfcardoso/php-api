<?php

spl_autoload_register(function($class){

    $classe_controller = 'controller/' . $class . '.php';
    $classe_model = 'model/' . $class . '.php';
    $classe_dao = 'dao/' . $class . '.php';

    if(file_exists($classe_controller)){
        include $classe_controller;
    }else if(file_exists($classe_model)){
        include $classe_model;
    }else if(file_exists($classe_dao)){
        include $classe_dao;
    }
});