<?php

    class Cachorro{

        public $nome;
        public $patas;
        public $orelhas;
        public $rabo;

        function __construct($nome, $patas, $orelhas, $rabo){

            $this->nome = $nome;
            $this->patas = $patas;
            $this->orelhas = $orelhas;
            $this->rabo = $rabo;

        }

        public function exibirAnimal(){
            echo "Meu cachorro se chama $this->nome! Ele possui $this->patas patas, $this->orelhas orelhas e $this->rabo rabo <br>";
        }

    }


$turca = new Cachorro("Apolo", 4, 2 ,1);
$turca->exibirAnimal();

$nome = "Tubarao";

$tubarao = new Cachorro($nome, 4, 2, 1);
$tubarao->exibirAnimal();