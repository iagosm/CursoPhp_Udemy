<?php


//contador / condição / incremento(de)
for ($i=0; $i <= 10; $i+= 2) { 
    
    if($i === 4){
        echo "Olá iago <br>";
        $i+=2;
    }
    
    if($i === 8){
        echo "Parando o codigo <br>";
        break;
    }

    echo $i."<br>";
}