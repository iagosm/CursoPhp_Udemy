<?php

$nome = "Iago";
$idade = 122;
$tamanho = 20;

if(is_int($nome) || is_float($nome)){
    echo $nome * 2 . "<br>";
    if($nome > 100){
        echo "Esse numero é maior que 100 <br>";
    }
}else{
    echo "Não é um numero <br>";
}


if(is_int($idade)){
    echo $idade * 2 . "<br>";
    if($idade > 100){
        echo "Esse numero é maior que 100 <br>";
    }else{
        echo "Esse numero é menor que 100 <br>";
    }
}else{
    echo "Não é um numero <br>";

}

if(is_int($tamanho) || is_float($tamanho)){
    $multi = $tamanho * 2;
    if($multi > 100){
        echo "É maior que 100 <br>";
    }else{
        echo "Numero não passa de 100 <br>";
    }
}else {
    echo "Não é um numero <br>";
}