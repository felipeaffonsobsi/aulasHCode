<?php 

interface Veiculo {
    //aqui é um padrão de contrato com todos os métodos que vai conter as classes normais ou abstratas
    //declara apenas o que preciso colocar na minha classe serve para documentar
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
    
}

abstract class Automovel implements Veiculo {
    //classe que implementa de veiculo contendo todos os requisitos que minha classe vai extender
    public function acelerar($velocidade){

        echo "O veículo acelerou até " . $velocidade . "km/h";

    }

    public function freiar($velocidade){

        echo "O veículo freiou até " . $velocidade . "km/h";

    }

    public function trocarMarcha($marcha){

        echo "O veículo engatou a marcha " . $marcha;

    }

}

class DelRey extends Automovel {
    public function empurrar(){

    }
}


$carro = new DelRey();
$carro->acelerar(200);
?>