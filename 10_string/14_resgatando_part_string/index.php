<?php

$str = "Esta é a minha string";

$minha = substr($str, 10, 5); // String Pai, Indice Inicial, Comprimento da Palavra

echo $str . "<br>";

echo $minha . "<br>";

$str2= "Testando esta string";

$novaString = substr($str2, 8);// Omitir Comprimento = Pegar Até o fim

echo $novaString . "<br>";

$novastring2 = substr($str, 8, -3); // Comprimento Negativo = REMOVAENDO ULTIMO INDICE

echo $novastring2 . "<br>";