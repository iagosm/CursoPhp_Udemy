<?php

    class Humano{
        public $cabelo = "preto";
        public $altura = 1.69;
        public $oculos = true;

        function falar(){
            echo "Olá meu jovem <br>";
        }

    }

    class Professor extends Humano{
        public $materia = "ingles";
        public $formado = "2020";

        public function estaLecionando(){
            echo "O professor está dando aula de $this->materia <br>";
        }
    }

    $iago = new Humano;
    $matheus = new Professor;

    $iago->falar();
    echo "A cor do meu cabelo é $iago->cabelo e tenho $iago->altura de altura <br>";

    $matheus->falar();
    echo "Eu sou Matheus, um professor de $matheus->materia e sou formado desde $matheus->formado <br>";
    $matheus->estaLecionando();