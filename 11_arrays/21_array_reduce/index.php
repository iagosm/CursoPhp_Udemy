<?php


    $arr = [1, 2, 4, 19, 22, 12, 4, 12];

    function soma($a, $b){
        return $a + $b;
    }

    function subtraacao($a, $b){
        return $a - $b;
    }

    $resultado = array_reduce($arr, "soma");
    $resultSub = array_reduce($arr, "subtraacao");

    echo "$resultado <br>";
    echo "$resultSub <br>";