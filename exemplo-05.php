<?php 

class Pessoa {

    public $nome = "Felipe";
    protected $idade = 26;
    private $senha = "1234";

    public function verDados(){

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }

}

$objeto = new Pessoa();

$objeto->verDados();

?>