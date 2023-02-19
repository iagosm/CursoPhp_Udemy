<?php

//Foreach loop entre itens de array
// Usando a notação chave => valor = conseguimos acesso a array associativos


    $pessoa =[
        'nome' => 'Iago',
        'profissao' => 'tecnico',
        'tamanho' => '1.69',
        'cabelo' => 'preto',
        'barba' => 'grande',
        'careca' => false,
        'trabalhando' => true
    ];

    $pc = [
        'processador' =>'i5',
        'placa_mae' => '360M',
        'memoriaRam' => '16gb',
        'placa_de_Video' => 'GTX1650',
        'fonte' => '550w'
    ];

    foreach($pessoa as $carac => $value){
        echo "$carac: $value <br>";
    }

    echo "<br><br>";

    foreach($pc as $config => $value){
        echo "$config: $value <br>";
    }

    echo "<br><br>";


