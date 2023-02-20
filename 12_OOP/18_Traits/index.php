<?php

#traits permitem o uso do codigo sem hierarquia de classes, ou seja sem herança

trait Objeto{

    public function teste(){
        echo "Testando Trait de objeto <br>";
    }

}


trait  Testando{
    public $y = 10;
    public function traitTeste(){
        echo "Esse metodo é da Trait Testando <br>";
    }
}


class Central {

    use Objeto;
    use Testando;
}

$x = new Central;

$x->teste();
$x->traitTeste();


echo $x->y . "<br>";

