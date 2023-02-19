<?php


    $carro = [
        'marca' => 'Bwm',
        'motor' => '2.4',
        'teto_solar' => true,
        'cambio' => 'Manual',
        'portas '=> 4
    ];

    // Para saber as chaves de um array
    $chaves = array_keys($carro);
    print_r($chaves);
    echo "<br>";

    // Valores de um array
    $valores = array_values($carro);
    print_r($valores);
    echo "<br>";