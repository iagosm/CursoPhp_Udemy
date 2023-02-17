<?php

$str = "testando o resto da string, pra ver se dar certo";

$resto = strstr($str, "resto");

echo $resto . "<br>";

$s = "string";

$resto2 = strstr($str, $s);

echo $resto2 . "<br>";


if(strstr($str, ".NET") === false){
    echo "Não encontramos a string";
}