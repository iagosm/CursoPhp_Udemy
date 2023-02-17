<?php


function parOuImpar($num1){
    if(is_int($num1) || is_float($num1)){
        if($num1 % 2 === 0){
            echo "Esse numero é par!<br>";
        }else if($num1 % 2 != 0){
            echo "Esse numero é impar!<br>";
        }
    }else{
        echo "Digite um numero! <br>";
    }
    }


parOuImpar("Iago");
parOuImpar(23);
parOuImpar(10);
