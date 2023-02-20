<?php

    $arr = ['Banana', 'Maça', 'Batata', 'pera', 'mamao'];

    if(in_array('Batata',$arr)){
        echo "Existe o item <br>";
    }else{
        echo "Não existe o item <br>";
    }

    if(in_array('Feijao',$arr)){
        echo "Existe o item <br>";
    }else{
        echo "Não existe o item <br>";
    }

    $b = 'Banana';

    if(in_array($b,$arr)){
        echo "Existe o item $b<br>";
    }else{
        echo "Não existe o item <br>";
    }