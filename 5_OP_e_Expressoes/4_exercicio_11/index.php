<?php


$a = "5";
$b = 12;

$c = $a * $b;

echo $c;
echo "<br>";

echo gettype($c);
echo "<br>";

echo gettype([]);
echo "<br>";

echo gettype(12.2);
echo "<br>";

echo gettype("Iago");
echo "<br>";

echo gettype(false);
echo "<br>";

echo gettype(12);
echo "<br>";
?>