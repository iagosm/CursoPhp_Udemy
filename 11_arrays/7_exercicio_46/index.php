<?php

    $arr = [
        ['Iago','Sousa','Miranda', 21],
        ['Suporte','Tecnico','Dev', 2023],
        ['PHP','Javascript','Java', 'Python']
    ];

    //Loop no array externo
    for($i =0;$i < count($arr);$i++){

        // Imprimindo Array
        echo "Imprimindo array Externo: " . ($i + 1) . "<br>";

        // Imprimindo o array interno
        for($j = 0;$j < count($arr[$i]); $j++){
            
            echo $arr[$i][$j] . "<br>";
        }
        
    }