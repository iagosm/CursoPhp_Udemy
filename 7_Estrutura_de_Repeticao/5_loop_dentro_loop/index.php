<?php


$i = 0;
$c = "Variavel teste";


while($i < 10){
    echo "loop externo " . $i . "<br>";

    //segundo contador
    $j = 0;
    echo "$c 1 <br>";

    while($j <= 5){
        echo "Loop interno do J " . $j . "<br>";
        echo "$c 2<br>";
        $j++;
    }

    $i++;
}