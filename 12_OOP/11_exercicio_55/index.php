<?php



    class Carro{

        public $velocidadeMaxima;
        public $cor;
        public $marca;
        public $aro;

        function setVelocidadeMaxima($vel){
            $this->velocidadeMaxima = $vel;
        }

        function getVelocidadeMaxima(){
            echo "A velocidade maxima desse carro é: $this->velocidadeMaxima km/h";
        }

    }

    $bwm = new Carro;
    $bwm-> cor = "Branco";
    $bwm-> aro = 30;
    $bwm-> marca = "audi";

    $bwm->setVelocidadeMaxima(200);
    $bwm ->getVelocidadeMaxima();

    echo "<br>";

    $ferrari = new Carro;
    $ferrari->setVelocidadeMaxima(3020);
    $ferrari->getVelocidadeMaxima();