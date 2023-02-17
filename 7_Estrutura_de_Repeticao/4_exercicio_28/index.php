<?php


$contador = 4;
$limite = 30;

while($contador < $limite){

    echo $contador . "<br>";

    if($contador === 24){
        echo "Terminando a contagem <br>";
        break;
    }

    $contador += 2;

}
echo "Contagem terminada!";