<?php

$nome = "Iago Sousa";
$idade = 22;
$correndo = [];

if(is_int($nome)){
    echo "É um inteiro! <br>";
}else{
    echo "A variavel acima é um ".gettype($nome). "<br>";
}

if(is_int($idade)){
    echo "É um inteiro! <br>";
}else{
    echo "A variavel acima é um ".gettype($idade) . "<br>";
}

if(is_int($correndo)){
    echo "É um inteiro! <br>";
}else{
    echo "A variavel acima é um ".gettype($correndo) . "<br>";
}