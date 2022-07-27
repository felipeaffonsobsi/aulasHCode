<?php 

spl_autoload_register
    (function($nomeClass){
        if (file_exists($nomeClass.".php")) {
            var_dump($nomeClass); // mostra as classes que foram carregadas
            require_once($nomeClass.".php");
        }
    }
);

    $carro = new DelRey();
    $carro->acelerar(80);
?>