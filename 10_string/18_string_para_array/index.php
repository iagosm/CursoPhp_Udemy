<?php

$frase = "testando explode";

$FraseArray = explode(" ", $frase);

print_r($FraseArray);
echo "<br>";

$fraseArray2 = explode(",", $frase);

print_r($fraseArray2);
echo "<br>";

$fraseB= "carro, aviao, barco, navio";
$frasebarray = explode(", ", $fraseB);
print_r($frasebarray);
echo "<br>";


for($i = 0; $i < count($frasebarray); $i++){
    echo "$frasebarray[$i] <br>";
}