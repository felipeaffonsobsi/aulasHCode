<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "", array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" //PARA CARACTERES
));

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

$stmt->execute();

//$conn->rollback(); ele cancela a ultima transação

$conn->commit(); // ele permite a transação 

echo "Dados excluidos";

?>