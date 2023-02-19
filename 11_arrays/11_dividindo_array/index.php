<?php



    $arr = range(1, 20);

    print_r(array_chunk($arr, 4));
    echo "<br>";
    echo "<br>";

    $arrays = array_chunk($arr, 10);
    print_r($arrays);
    echo "<br>";

    print_r($arrays[1]);//Irá mostrar o segundo array interno que ele criou = 10 a 20;
    echo "<br>";