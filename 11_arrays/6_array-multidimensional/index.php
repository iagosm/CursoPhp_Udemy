<?php

$arr = [
    [1, 2, 3],
    [2 ,4 ,6]
];

print_r($arr);
echo "<br>";

//Acessar o 2
// 0 = primeiro array / 1 = primeiro elemento do array 0
echo ($arr[0][1]) . "<br>";

//Acessar o 6

echo ($arr[1][2]) . "<br>";

//Contar Array interno e externo

echo count($arr) . "<br>"; // contagem de 2 arrays
echo count($arr[0]) . "<br>"; //contagem de 3 dentro do primeiro array