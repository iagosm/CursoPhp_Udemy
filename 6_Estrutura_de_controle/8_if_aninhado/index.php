<?php

$escopo = 10;
$escopo2 = 20;

if(10 > 2){
    echo "Entrou no primeiro if <br>";

    if("teste" == "teste"){
        echo "Entrou no segundo if <br>";
    }

}else{
    echo "entrou no primeiro else";
}

if(10 > 2){
    echo "Entrou no primeiro if <br>";

    if("teste" == "teste"){
        echo "Entrou no segundo if <br>";
        echo $escopo;
        echo " " . $escopo2. "<br>";
    }else{
        echo "Entrou no segundo else 2 <br>";
       
    }

}else{
    echo "entrou no segundo else <br>";
}