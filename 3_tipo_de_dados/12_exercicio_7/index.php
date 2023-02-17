<?php


$pessoa = [
    'nome' => 'José Medeiros',
    'idade' => 29,
    'profissão' => 'padeiro',
    'altura' => 1.80,
    'cordoCabelo' => 'verde'
];

$idade = $pessoa['idade'];

if($idade > 18){
    echo "Está liberado! Você tem $idade anos!";
}else{
    echo "Você é menor de idade";
}