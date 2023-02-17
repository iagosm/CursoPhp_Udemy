<?php

//O valor não persiste quando a gente cria uma função de escopo local

function teste(){
    $a = 0;
    $a++;
    echo $a."<br>";
}

teste();
teste();
teste();

//Já o static o valor persiste quando é chamado

function testeStatic(){
    static $a = 0;
    $a++;
    echo $a . "<br>";
}

testeStatic();
testeStatic();
testeStatic();