<?php

$arr = [
    'porta' => 100,
    'maçaneta' => 300,
    'motor' => 3000,
    'headset' => 450,
    'retrovisor' => 9,
    'chiclete' => 2,
    'pc' =>1
];

function itensCaros($arr){

    $arrItensCaros = [];

    foreach($arr as $item => $preco){

        if($preco < 10){
            array_push($arrItensCaros, $item);
        }

    }
    return $arrItensCaros;
}

$novoArr = itensCaros(($arr));
print_r($novoArr);