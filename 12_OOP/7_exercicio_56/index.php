<?php

class Cachorro{
    function latir(){
        echo "Latindo <br>";
    }

    function andar($m){
        echo "O cachorro andou $m metros <br>";
    }

}

$apolo = new Cachorro;
$ayla = new Cachorro;
$cristal = new Cachorro;

$apolo->andar(23);
$apolo->latir();

$cristal->latir();
$cristal->latir();

$ayla->andar(55);
$ayla->andar(120);

