<?php

//classe PDO é nativa do PHP
class Sql extends PDO {

    private $conn;

    //faz a conexão no banco de dados
    public function __construct() {

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    }

    
    private function setParams($statement, $parameters = array()) {

        foreach ($parameters as $key => $value) {

            $this->setParam($statement, $key, $value);

        }

    }

    private function setParam($statement, $key, $value){

        $statement->bindParam($key, $value);

    }

    //primeiro parametro é onde recebe o comando SQL Ex: Insert, Select, Update, Delete...
    //segundo parametro é os dados que vamos receber
    public function queryTeste($rawQuery, $params = array()) {

        //variavel stmt não tem this, para funcionar apenas dentro do método
        //ele está pegando a conn que já está conectada ao banco e preparando o comando sql que passei como parametro
        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;

    }

    public function select($rawQuery, $params = array()):array
    {
        
        $stmt = $this->queryTeste($rawQuery, $params);
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>