<?php 

class Pessoa {

    public $nome = "Felipe"; //todos podem ver
    protected $idade = 26; // todos da classe ou extends podem ver 
    private $senha = "1234"; // apenas a classe que esta declarada pode consultar ou manipular, extends não consegue 
                             // soluções:
                             // precisaria criar um atributo na classe extendida

    public function verDados(){

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }

}

class Programador extends Pessoa {

    public function verDados(){

        //para consultar qual método está chamando e de qual classe, utiliza o get_class
        echo get_class($this) . "<br/>"; //nesse caso o verDados() está vindo da classe Programador

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }


}

$objeto = new Programador();

$objeto->verDados();

?>