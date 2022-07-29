<?php

$name = "images";

if (!is_dir($name)){ //verifica se existe ou não a pasta
    mkdir($name); //ele cria a pasta
    echo "Diretório $name Criado";
}else{
    //rmdir($name); // remove a pasta
    echo "Diretório $name removido!";
}



?>