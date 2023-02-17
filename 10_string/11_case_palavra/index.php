<?php

$frase = "testando o case de um uma palavra <br>";
$frase2 = "Testando o case de um uma palavra <br>";
$frase3 = "testando o case de um uma palavra <br>";

//Primeira letra em maiusculo
echo ucfirst($frase);


//Todas as palavras com as iniciais maiusculas
echo ucwords($frase3);
echo ucwords($frase2);