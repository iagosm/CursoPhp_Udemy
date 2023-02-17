<?php

$nome = "Iago Sousa";

echo "Testando texto de aspas duplas com nome $nome <br>";

echo 'Testando texto de aspas simples <br>';

echo "Ele disse: 'Olá'<br>";


echo 'Ele disse: "Olá" <br>';


if(is_string($nome)){
    echo "$nome é uma string";
}