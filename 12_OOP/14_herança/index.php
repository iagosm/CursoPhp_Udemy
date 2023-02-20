<?php

#Herança possibilita herdar metódos e propriedades de outras classes 
#A palavra reservada é Extendes
//exemplo class Programador extends Pessoa{ }

class Humano{
    public $idade = 29;
    
    // Public
    public function falar(){
        echo "Olá mundo <br>";
    }

    //Private
    private function gritar(){
        echo "ESTOU GRITANDO <br>";
    }

    //Como acessar Private
    public function acessarGritar(){
        $this->gritar();
    }

    //Protected
    protected function falarBaixinho(){
        echo "lalala <br>";
    }

    //Como acessar Protected
    public function acessarFalarBaixinho(){
        $this->falarBaixinho();
    }

}


    class Programador extends Humano{

        public function acessarFalarBaixinhoProgramador(){
            $this->falarBaixinho();
        }

    }


$iago = new Humano;

$iago->falar();

$matheus = new Programador;
echo $matheus->idade . "<br>";
$matheus->falar();
$matheus->acessarGritar();
$iago->acessarGritar();
$iago->acessarFalarBaixinho();
$matheus->acessarFalarBaixinhoProgramador();