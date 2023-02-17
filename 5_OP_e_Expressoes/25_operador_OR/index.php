<?php 

#Apenas um dos lados verdadeiros para que a operação toda seja verdadeira

if( 5> 2 || 3 < 4){ // true e true
    echo "Entrou no  if 1 <br>";
}

if( 5 > 2 || 30 < 4){ // true e false
    echo "Entrou no  if 2 <br>";
}


if( 5 > 20 || 3 < 4){ // false e true 
    echo "Entrou no  if 3 <br>";
}

$a = 10;
$b = 20;
$c = 30;
$d = 40;


if( $a > $b || $d > $c){ // false e true
    echo "Entrou no  if 4 <br>";
}

if( ($a > $b || $d > $c) && $c < $d){ // true e true
    echo "Entrou no  if 5 <br>";
}

if( ($a > $b && $d > $c) || $c < $d){ // false e true
    echo "Entrou no  if 6 <br>";
}