<?php

require_once("config.php");

//CARREGA 1 USUARIO
//$root = new Usuario();
//$root->loadById(5);
//echo $root;

//CARREGA UMA LISTA DE USUARIO
//$lista = Usuario::getList();
//echo json_encode($lista);

//CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
//$search = Usuario::search("e");
//echo json_encode($search);

//CARREGA UM USUARIO USANDO O LOGIN E SENHA
$usuario = new Usuario();
$usuario->login("user", "12345");
echo $usuario;

?>