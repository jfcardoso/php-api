<?php

spl_autoload_register(function($class){ 

    /**
     * Defidindo o caminho absoluto até o arquivo que será incluído pelo PHP.
     * A constante BASEDIR está definida no arquivo config.php. 
     */    
    $file =  BASEDIR . $class . '.php';

      /**
     * Utilizando a função file_exists para verificar se o arquivo existe
     * de acordo com o caminho de BASEDIR e os namespaces descritos na classe.
     */
    if(file_exists($file)){       
        include $file;
    } else{
        exit('Arquivo não encontrado:' . $file);
    }   
});