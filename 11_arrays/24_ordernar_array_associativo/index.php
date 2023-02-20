<?php

#Array ordenado em ordem crescente
// Ordenando pelo valor

    $arr = [
        'Matheus' => 29,
        'Pedro' => 18,
        'Iago' => 24,
        'Maria' => 12
    ];

    asort($arr);

    print_r($arr);
    echo "<br>";

#Array em ordem decrescente
// Ordenando pelo valor

    $arr1 = [
        'Matheus' => 229,
        'Pedro' => 418,
        'Iago' => 214,
        'Maria' => 112
    ];

    arsort($arr1);

    print_r($arr1);
    echo "<br>";

#Ordenando da mesma forma porém pela Key

ksort($arr1);

print_r($arr1);
echo "<br>";

#Ordenando de forma decrescente
krsort($arr1);

print_r($arr1);
echo "<br>";