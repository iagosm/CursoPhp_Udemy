<?php

$var1 = 5;
$var2 = 3;

#igualdade
if($var1 == $var2){
    echo "Valor é identico";
}else{
    echo "Valor é diferente";
}
echo "<br>";

if($var1 === $var2){
    echo "Valor é identico";
}else{
    echo "Valor é diferente 1";
}
echo "<br>";


#diferença
if($var1 != $var2){
    echo "Valor é diferente 2";
}else{
    echo "Valor é igual";
}
echo "<br>";

if($var1 != $var2){
    echo "Valor é diferente 2";
}else{
    echo "Valor é igual";
}
echo "<br>";

#identico
if($var1 === $var2){
    echo "Valor é identico 4";
}else{
    echo "Valor é diferente 4";
}
echo "<br>";

#naoidentico
if($var1 !== $var2){
    echo "Valor não identico 5";
}else{
    echo "Valor identico 5";
}
echo "<br>";