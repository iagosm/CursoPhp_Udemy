<?php


$arr = ["Maçã", "Pera","Mamao","Batata", "Feijao"];

$str = implode(", ", $arr);
echo "$str <br>";

$arr2 = ["Avião", "Tanque", "Jipe", "Metralhadora"];

$str2 = implode(" <-> ",$arr2);
echo "$str2 <br>";