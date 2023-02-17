<?php


$x = 10;
echo "$x Global <br>";

function teste(){

    $x = 5;
    echo "$x Local<br>";
}

teste();

echo "$x Global <br>";

function testando(){

    $x = 12;
    echo "$x Local2<br>";
}

$x = 99;

testando();
teste();
echo "$x Global <br>";


?>  