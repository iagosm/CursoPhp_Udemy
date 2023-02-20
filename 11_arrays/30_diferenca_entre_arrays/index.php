<?php

    $arr1 = [1, 2, 3];
    $arr2 = [2, 4, 6];

    $diff = array_diff($arr1, $arr2);
    

    //Mostra a diferença de um arraay para o outro
    print_r($diff);
    echo "<br>";


    $diff2 = array_diff($arr2, $arr1);
    print_r($diff2);
    echo "<br>";



    $arr3 = [4, 6];

    $diff3 = array_diff($arr2, $arr1, $arr3);
    print_r($diff3);// Vazio, pois todos os elementos aparecem no array 
    echo "<br>";