<?php

//Funciona como qualquer outra classe
$pessoa = new class(){

    public $nome = "Iago";
    
    public function dizerNome(){
        echo "Olá meu nome é $this->nome <br>";
    }
};

echo $pessoa->nome . "<br>";

$pessoa->dizerNome();