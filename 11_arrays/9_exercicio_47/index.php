<?php

    $carro = ["Jaguar", "3.0","azul", 18, "Teto Solar", "Automatico"];

    print_r($carro);
    list($marca, $motor,$cor, $aro, $extra, $cambio) = $carro;

    echo "<br>";

    echo $marca . "<br>";
    echo $motor . "<br>";
    echo $cor . "<br>";
    echo $aro . "<br>";
    echo $extra . "<br>";
    echo $cambio . "<br>";