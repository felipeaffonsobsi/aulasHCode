<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "", array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" //PARA CARACTERES
));

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Jacqueline";
$password = "12344123";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Dados inseridos";

?>