<?php

$velocidadeAtual = 120;
$velocidadeMaxima = 40;

if($velocidadeAtual < $velocidadeMaxima){
    echo "Está na velocidade correta! <br>";
}else if($velocidadeAtual == $velocidadeMaxima){
    echo "Tome cuidado com a velocidade";
}else if($velocidadeAtual > $velocidadeMaxima){
    echo "Está multado por excesso de velocidade.";
}