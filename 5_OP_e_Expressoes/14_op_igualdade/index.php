<?php

if(5 == 5){
    echo "Ambos numeros são iguais!";
}

echo "<br>";

if(3 == 4){
    echo "Ambos numeros são iguais!";
}else{
    echo "Os numeros são diferentes!";
}

echo "<br>";

$a = 12;
$b = 12;
$c = 100;


if($a == $b){
    echo "Comparação verdadeira";
}else{
    echo "Comparação falsa";
}

echo "<br>";

if($a == $c){
    echo "Comparação verdadeira";
}else{
    echo "Comparação falsa";
}


$nome = "Iago";
$nomeSistema = "Iago";
echo "<br>";

if( $nome == $nomeSistema){
    echo "O nome é verdadeiro";
}

?>