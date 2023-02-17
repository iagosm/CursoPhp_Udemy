<?php

function soma($a, $b){

    print_r(func_get_args()); //Pega os argumentos passados
    echo "<br>";
    print_r(func_num_args()); //Numero de argumentos

    return $a + $b;
}

soma(2, 34);


