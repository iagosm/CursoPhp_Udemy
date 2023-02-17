<?php

class Pessoa {
    function falar(){
        echo "Olá! Tudo bem?";
    }
}


$matheus = new Pessoa();

$matheus->nome = "Matheus";

echo $matheus->nome;

echo "<br>";

$matheus->falar();
