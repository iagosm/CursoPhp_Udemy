<?php


$arr = [5,"Teste", 25, "Comandante", "Luis", "Lelo", false, true, "Beto", "Jamais Saberá"];

$contador = count($arr);
$y = 0;

while($contador > $y ){
    if(is_string($arr[$y])){
        echo $arr[$y] . "<br>";
    }
    $y++;
}