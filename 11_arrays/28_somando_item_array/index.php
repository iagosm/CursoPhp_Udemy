<?php

    $arr = [2, 4, 5 ,123, 2, 5, 92, "Sousa"];

    $soma = array_sum($arr);

    print_r($arr);
    echo "<br>";
    //Realiza a soma de todos os valores dentro do array
    //Ignora o que não é numero.
    echo $soma . "<br>";