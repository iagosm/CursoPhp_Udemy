<?php


    class Pessoa{

        public $nome;
        public  $idade;

        function andar($m){
            echo "Andei hoje uns $m m até o fim da rua";
        }

    }

    $iago = new Pessoa;
    $matheus = new Pessoa;

    $iago->nome = "Iago Sousa";
    $matheus->nome = "Matheus Batisti";
    $iago->idade = 22;
    $matheus->idade = 38;

    echo "Olá meu nome é $iago->nome e tenho $iago->idade anos<br>";
    echo "Olá meu nome é $matheus->nome e tenho $matheus->idade anos<br>";

    $matheus->andar(40);

    