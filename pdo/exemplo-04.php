<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "", array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" //PARA CARACTERES
));

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados excluidos";

?>