<?php

$frase = "Carro - Navio - Helicóptero - Barco - Jangada";

 $array = explode(" - ", $frase);
 print_r($array);

 for($i = 0; $i < count($array); $i++){
    echo "$array[$i] <br>";
 }