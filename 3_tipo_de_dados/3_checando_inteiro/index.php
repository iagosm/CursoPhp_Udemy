<?php


if(is_int(5.1)){
    echo "É um inteiro";
}else{
    echo "É um float <br>";
}

$a = 140;

if(is_int($a)){
    echo "É um inteiro o número $a";
}else{
    echo "É um float";
}

?>