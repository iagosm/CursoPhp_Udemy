<?php


$x = 0;
$nome = "Iago";


do{
    echo "Testando o While".$x."<br>";
    $x++;

}while($x < 10);

$i = 10;

do{

    if($i === 3){
        echo "Vez do personagem $nome <br>";
        $i--;
    }
    echo "Elemento i:" . $i . "<br>";
    $i--;


}while($i> 0);