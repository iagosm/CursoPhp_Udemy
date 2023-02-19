<?php


$arr = [];
print_r($arr);

echo "<br>";
//Adicionando valores
$arr[0] = 10;
print_r($arr);

echo "<br>";

$arr[1] = 15;
print_r($arr);

echo "<br>";

$arr[5] = 25; //Quebrando sequencia logica
print_r($arr);

echo "<br>";
//Modificando valores
$arr[1] += 55; //Quebrando sequencia logica
print_r($arr);

echo "<br>";
echo "<br>";

//Array associativo
$arrAssoc = [];
print_r($arrAssoc);
echo "<br>";


$arrAssoc["carro"] = "Bmw";
print_r($arrAssoc);

echo "<br>";

$arrAssoc["Aviao"] = "Boing";
print_r($arrAssoc);

echo "<br>";

$arrAssoc["carro"] = "Ferrari";
print_r($arrAssoc);

echo "<br>";