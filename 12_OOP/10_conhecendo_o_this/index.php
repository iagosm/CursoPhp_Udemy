<?php

    #O this se refere a instancia atual do objeto

    class Animal{
        public $nome;
        function escolherNome($nome){
            $this->nome = $nome;
        }

        function latir(){
            return "Latindo";
        }

        function latirForte(){
            //chamando methods do proprio objeto com this
            return strtoupper($this->latir());
        }

    }

    $frida = new Animal;
    echo "O nome do animal é: $frida->nome <br>";
    $frida->escolherNome("Frida");
    echo "O nome do animal é: $frida->nome <br>";
    echo $frida->latir() . "<br>";
    echo $frida->latirForte() . "<br>";