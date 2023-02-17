<?php



$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$contador = count($arr);
$y = 0;


while($y < $contador){

    $numeroAtual = $arr[$y];
    
    if($numeroAtual === 30 || $numeroAtual === 40){
        $y++;
        continue;
    }

    echo "Elemento: $numeroAtual  <br>";
    $y++;

}