<?php


#Operador de conversão ( CAST ) - Forçamos uma variável ser de um determinado tipo;

$a = (int) "12";

echo $a."<br>";
echo $a + 10;
echo "<br>";

if($a === 12){
    echo "A é identico a 12 <br>";
}

if($a + 10 === 22){
    echo "A é identico a 22 <br>";
}

$b = (float) "3.14656565";

if($b === 3.14656565){
    echo "B é identico a 3.14 <br>";
}

$c = (string) 34;

echo $c."<br>";

if($c === "34"){
    echo "C é uma string";
}