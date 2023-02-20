<?php

    #A propriedade pode ser inicializada vazia e ser declarada durante o codigo

    class Car{

        //Propriedades
        public $rodas =4;
        //Propriedades
        public $aro =20;
        //Propriedade
        public $cor = "Vermelho ";

        function ligar(){
            echo "Vrumm <br>";
        }
    }

    $ferrari = new Car;
    
    $ferrari->rodas=14;


    echo $ferrari->aro . "<br>";
    echo $ferrari->rodas . "<br>";

    //Alterando o valor da propriedade
    $ferrari-> cor = "Verde <br>";
    echo $ferrari->cor;

    $ferrari->ligar();