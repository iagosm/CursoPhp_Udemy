<?php

$nome = "Onça";
$tipo = "Felino";
$patas = 4;
$carnivoro = true;
$cor = "Amarelo";
$idade = 39;

$animal = compact("nome","tipo","patas", "carnivoro", "cor", "idade");

print_r($animal);
echo "<br>";

foreach($animal as $caracteristica => $value){
    echo "$caracteristica: $value <br>";
}