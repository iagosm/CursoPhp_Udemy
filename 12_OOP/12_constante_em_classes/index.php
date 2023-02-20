<?php


    class Humano{

        public const Olhos =2;
        public const Bracos =2;
        public const Pernas =2;

        function mostraConstante(){
            //Utilizamos self para acessar uma constante em metodo
            echo self::Bracos . "<br>";
        }
    }

    $iago = new Humano;

    echo $iago::Olhos . "<br>";
    $iago->mostraConstante();