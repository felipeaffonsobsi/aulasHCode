<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "", array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" //PARA CARACTERES
));

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Felipe";
$password = "ededads";
$id = 8;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados alterados";

?>