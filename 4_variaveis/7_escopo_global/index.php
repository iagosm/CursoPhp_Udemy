<?php

//Não podemos acessar uma global dentro de uma função
//escopo global afeta blocos de codigos que não são funções

$teste = "asd";

echo "$teste global 1 <br>";

if(5 > 2){
    $teste = "dsa";
    echo "$teste if  <br>";
}

echo "$teste Global 2  <br>";

function funcao(){
    $teste = "xsx local";
    echo "$teste local <br>";
}

funcao();

function testandoGlobal(){
    global $teste;
    echo "$teste global funcao <br>";
}

testandoGlobal();

?>
