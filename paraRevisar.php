<?php 
    function test($callback){
        $callback();
    }

    test(function(){
        echo "Terminou!";
    });

    //isso serve para quando terminar uma determinada rotina como envio de e-mail ou cadastro chamar ela, é bom utilizar com o javascript

    //colocar isso no config.php
    //date_default_timezone_set("America/Sao_Paulo"); DEFINIR A HORA ATUAL DE SAO PAULO
?>