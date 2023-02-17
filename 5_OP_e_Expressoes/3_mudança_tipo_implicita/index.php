<?php


echo 5 / 2;
echo "<br>";

if(is_float(5/2)){
    echo "é um float";
}

echo "<br>";

echo 2 . 3;
echo "<br>";

if(is_string(2 . 3)){
    echo "é uma string";
}

$nome = "Iago";
$sobrenome = "Sousa";

$nomeCompleto = $nome . " " . $sobrenome;
echo "<br>";

echo $nomeCompleto;

?>