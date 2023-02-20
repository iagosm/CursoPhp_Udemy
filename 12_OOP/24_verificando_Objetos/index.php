<?php

class Humano{

    public function falar(){
        echo "Ola";
    }

}

$mathues = new Humano;
$teste = 10;


#is_object() -> verifica se uma variavel é um objeto

if(is_object($mathues)){
    echo "É um objeto <br>";
}else{
    echo "Não é um objeto <br>";
}

if(is_object($teste)){
    echo "É um objeto <br>";
}else{
    echo "Não é um objeto <br>";
}


#get_class() -> verifica se uma variavel é um objeto


echo get_class($mathues) . "<br>";

#method_exists() -> verifica se uma variavel é um objeto

if(method_exists($mathues, "falar")){
    echo "Metodo existe <br>";
}else{
    echo "Metodo não existe <br>";
}

if(method_exists($mathues, "andar")){
    echo "Metodo existe <br>";
}else{
    echo "Metodo não existe <br>";
}