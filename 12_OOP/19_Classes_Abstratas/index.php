<?php


#Classes abastratas -> n podem ser instanciadas

abstract class Teste{

    public static function TestandoClass(){
        echo "Esse metodo é de uma classe abastrata <br>";
     }

     abstract public function testeAbs();

}

//Executar metodo sem ser instanciada
Teste::TestandoClass();

// $t = new Teste;

class Nova extends Teste{

    public function testeAbs(){
        echo "teste metodo abstrato <br>";
    }

};

$n = new Nova;
$n->testeAbs();