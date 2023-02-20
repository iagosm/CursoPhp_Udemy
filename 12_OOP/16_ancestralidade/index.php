<?php

#Ancestralidade = instanceof
//Pode ser inserido no if q vai aparecer se é true ou false

class Humano{

}


class Animal{

}

class Professor extends Humano{

}


$turca = new Animal;
$marcos = new Humano;

if($marcos instanceof Humano){
    echo "Marcos é um Humano <br>";
}else{
    echo "Não é um humano <br>";
}


if($turca instanceof Humano){
    echo "Turca é um animal <br>";
}else{
    echo "Turca não é um animal <br>";
}

$pedro = new Professor;

if($pedro instanceof Humano){
    echo "Pedro é um Humano <br>";
}else{
    echo "Pedro não é um Humano <br>";
}

if($pedro instanceof Professor){
    echo "Pedro é um Professor <br>";
}else{
    echo "Pedro não é um Professor <br>";
}

if($turca instanceof Professor){
    echo "Turca é um Professor <br>";
}else{
    echo "Turca não é um Professor <br>";
}