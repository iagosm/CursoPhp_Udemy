<?php

    $pessoa = ["Iago", 22, "Programador", "Verdes"];
    
    print_r($pessoa);
    echo "<br>";
    
    
    list($nome, $idade, $profissao, $cor) = $pessoa;
    
    echo $nome . "<br>";
    echo $idade . "<br>";
    echo $profissao . "<br>";
    echo $cor . "<br>";