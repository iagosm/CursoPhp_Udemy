<?php

//Cria arrays a partir de variaveis

$marca = "Bwm";
$motor = "3.0";
$tetoSolar = true;
$portas = 4;

//Digita a variavel como se fosse uma string
$carro = compact("marca", "motor", "tetoSolar", "portas");

print_r($carro);
echo "<br>";