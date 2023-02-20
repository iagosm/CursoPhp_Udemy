<?php


#Podemos inicilizar objetos com valores de propriedades unicos para cada objeto


 class Cars{

    public $portas;
    public $cor;
    public $Marca;

    function __construct($portas, $cor, $Marca){

        $this->portas = $portas;
        $this->cor = $cor;
        $this->Marca = $Marca;

    }
}

$ferrari = new Cars(4, "Verde", "Ferrari");

echo "O carro é da Marca $ferrari->Marca e tem a cor $ferrari->cor <br>";

$bmw = new Cars(2, "Vermelho", "Bmw");
echo "O carro é da Marca $bmw->Marca e tem a cor $bmw->cor <br>";