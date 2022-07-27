<?php

abstract class Animal {

    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }

}

class Cachorro extends Animal {
    public function falar(){ //polimorfismo, ele mudou o comportamento do método falar, mesmo sendo o mesmo nome nas duas classes, quando ele herda, muda o retorno
        echo get_class($this) . "<br/>";
        return "Late";
    }

}

class Gato extends Animal {
    
    public function falar(){
        echo get_class($this) . "<br/>";
        return "Miau";
    }
}

class Passaro extends Animal {
    public function falar(){
        echo get_class($this) . "<br/>";
        return "Canta";
    }

    public function mover(){
        //$this se refere ao próprio objeto que está instanciado
        //parent se refere a classe pai
        return "Voa e " . parent::mover();
    }
}


$pluto = new Cachorro();

echo $pluto->falar()."<br/>";
echo $pluto->mover()."<br/><br/>";

$garfield = new Gato();
echo $garfield->falar()."<br/>";
echo $garfield->mover()."<br/><br/>";

$beijaflor = new Passaro();
echo $beijaflor->falar()."<br/>";
echo $beijaflor->mover()."<br/><br/>";

?>