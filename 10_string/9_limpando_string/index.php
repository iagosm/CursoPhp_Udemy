<?php

// trim() - limpa espaços antes e depois da string
$str1 = "       Matheus   ";
echo "Está é a String 1:$str1. <br>";
$str1Limpa = trim($str1);
echo "Está é a String 1: $str1Limpa. <br>";


// ltrim() - limpa espaços da parte inicial da string
$str1Limpa1 = ltrim($str1);
echo "Está é a String 1:$str1Limpa1. <br>";



//rtrim() - limpa espaços da parte final da string
$str2Limpa1 = rtrim($str1);
echo "Está é a String 2:$str2Limpa1. <br>";