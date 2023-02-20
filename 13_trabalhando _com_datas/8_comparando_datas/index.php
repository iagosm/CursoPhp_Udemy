<?php

    $dataA = new DateTime();
    $dataB = new DateTime(); 

    $dataC = new DateTime();


    $dataB->setDate(2023, 02,25);
    $dataC->setDate(2023, 02,25);



    if($dataB > $dataA){
        echo "A data b é maior que a data a <br>";
    }

    if($dataA< $dataB){
        echo "A data a é maior que a data b <br>";
    }

    if($dataA <= $dataC){
        echo "A data C é maior que data A <br>";
    }

    if($dataB == $dataC){
        echo "É a mesma data! <br>";
    }