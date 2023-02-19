<?php
    //Forma na qual eu entendi.
    $arr = range(10,45);
    for ($i=0; $i < count($arr); $i+= 6) { 
       if($arr[$i] > 30){
        echo "O numero é muito alto <Br>";
       }else{
           echo $arr[$i] . "<br>";
        }
    }

    echo "<br> <br> <hr>";

    //Feito pelo Matheus

    $arr1 = range(10,45);
    for ($i=0; $i < count($arr1); $i++) { 
       $soma =$arr1[$i] + 6;
        if($soma > 30){
        echo "O numero $soma é muito alto <Br>";
       }else{
           echo $soma . "<br>";
        }
    }