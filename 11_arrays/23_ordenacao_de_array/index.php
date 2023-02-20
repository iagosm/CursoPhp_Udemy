<?php


    $arr = [2 , 1, 100 ,45, 3, 5, 1,9];

    sort($arr);

    print_r($arr);
    echo "<br>"; 

    // Ordenado de forma inversa

    $arr2 = [2 , 1, 100 ,45, 3, 5, 1,9];
    rsort($arr2);

    print_r($arr2);
    echo "<br>";

    $nomes = ['Iago', 'Jose','Arceu', 'Matheus','Breno', 'Lemos', 'Carlos'];
    sort($nomes);

    print_r($nomes);
    echo "<br>";

    $nomes = ['Iago', 'Jose','Arceu', 'Matheus','Breno', 'Lemos', 'Carlos'];
    rsort($nomes);

    print_r($nomes);
    echo "<br>";