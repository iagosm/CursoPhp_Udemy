<?php

// Unir dois ou mais arrays em um só

$arr1 = [1, 2 ,3];
$arr2 = [10, 40 ,90];
$arr3 = [21.2, 44.5, 43.9];
$arr4 = ['Iago', 'Sousa', 'Miranda'];

$arrMerge = array_merge($arr1, $arr2, $arr3, $arr4);

print_r($arrMerge); //Criou um array completo com todos os itens
echo "<br>";