<?php

//Função para array associativos
// Criando variaveis rapidamente em arrays

$arr = [
    'cor' => 'vermelho',
    'forma' => 'retangular',
    'material' => 'aço'
];

extract($arr);

echo $cor  . "<br>";
echo $forma  . "<br>";
echo $material  . "<br>";


$nome = "Matheus";
echo $nome  . "<br>";


$pessoa = [
    'nome' => 'Joao',
    'idade' => 29
];

extract($pessoa);// O extract sobreescreve caso já tenha uma variavel

echo $nome  . "<br>";
echo $idade  . "<br>";