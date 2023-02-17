<?php

$a = 10;
$b = 15;

function testeEscopo(){
   
    static $c = 0;
    $c++;
    global $b;
    $b++;
    $a = 5;
    $a++;
    echo "Escopo Local de A: $a . <br>";
    echo "Escopo Global na funcao de B: $b . <br>";
    echo "Escopo STATIC na funcao de C: $c . <br>";
}
testeEscopo();
echo "Escopo global de A: $a . <br>";
echo "Escopo Global  de B: $b . <br>";

testeEscopo();

echo "Escopo Global  de B: $b . <br>";



testeEscopo();

