<?php

$carroAssoc = ['Cor'=> 'azul', 'Categoria' => 'B', 'Marca' => 'Bmw'];

$carro = ["Azul". "B", "BMW"];

print_r($carroAssoc);

$marca = $carroAssoc['Marca'];
$cor = $carroAssoc['Cor'];

echo "<br>";

echo "O carro é da marca $marca e tem a cor $cor";