<?php

#Criação de data
//Recebe parametros como HORA,MINUTO,SEGUNDO,MES,DIA E ANO


$DataNasc = mktime(02, 12 , 33, 06, 30, 2000);

echo $DataNasc . "<br>";

$dataNascFormat = date('d/m/Y', $DataNasc);

echo $dataNascFormat . "<br>";

$dataEspec = mktime(10,20,11, 02,19,2023);

$dataEspecFormat = date('m/d/Y', $dataEspec);

echo $dataEspecFormat . "<br>";