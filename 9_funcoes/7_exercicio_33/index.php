<?php


function sayName($nome, $idade, $genero){
    if($genero == "masculino"){
        echo "Olá! Eu sou o $nome e tenho $idade anos! <br>";
    }else if($genero == "feminimo"){
        echo "Olá! Eu sou a $nome e tenho $idade anos! <br>";
    }
    
}

sayName("Iago Sousa", 25, "masculino");
sayName("Jorginia", 55, "feminimo");