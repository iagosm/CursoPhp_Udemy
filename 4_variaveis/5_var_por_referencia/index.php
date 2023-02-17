<?php

$x = 10;
$y = & $x;

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y = 15;

echo "Atribução após ref <br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";


$x = 36;

echo "Atribução após ref2 <br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";






?>