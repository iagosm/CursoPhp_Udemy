<?php

$str = "Estamos testando o método strpos, com o strpos podemso encontrar strings";

$testeEncontrar = strpos($str, "strpos");

echo $testeEncontrar . "<br>";

$testeEncontrar1 = strpos($str, "java");

echo $testeEncontrar1 . "<br>";

if($testeEncontrar1 === false){
    echo "Palavra não encontrada <br>";
}

$palavra = "com";
$testeEncontrar2 = strpos($str,$palavra);
echo $testeEncontrar2 . "<br>";

$palavra = "to";
$testeEncontrar3 = strpos($str,$palavra);
echo $testeEncontrar3 . "<br>";