<?php


echo true."<br>";

echo false."<br>";

if(true){
    echo "É verdadeiro <br>";
}else{
    echo "É falso";
}

$podeEntrar = true;

if($podeEntrar){
    echo "Usuário pode entrar";
}

if(is_bool($podeEntrar)){
    echo "o valor é Booleano <br>";
}


if(is_bool(false)){
    echo "É um valor Booleano";
}