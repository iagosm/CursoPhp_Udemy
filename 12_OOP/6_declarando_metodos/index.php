<?php

// Declarando método

    class Pessoa {
        //metodo
        function falar(){
            echo "Olá, eu sou um objeto <br>";
        }

        function somar($x, $y){
            echo $x + $y . "<br>";
        }

    }

    //Instanciando
    $iago = new Pessoa;
    $iago->falar();
    $iago->falar();

    $joao = new Pessoa;
    $joao->falar();

    $iago->somar(2,2);
    $joao->somar(22,22);