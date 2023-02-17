<?php

// Definição do contador
$x = 0;
$y = 0;
$z = 10;
$a = 10;
$w = 10;


// Iniciou / Definição da estrutura
while($x <= 10){//loop será executado até os atributos serem falsos
    //corpo do loop
    echo $x . "<br>";

    // Incremento do Contador
    $x++; // ou x++
}

echo "<hr>";

// Iniciou / Definição da estrutura
while($y <= 10){//loop será executado até os atributos serem falsos
    //corpo do loop
    echo $y . "<br>";

    // Incremento do Contador
    $y += 2; // ou y = y + 2
}
echo "<hr>";

// Iniciou / Definição da estrutura
while($z > 0){//loop será executado até os atributos serem falsos
    //corpo do loop
    echo $z . "<br>";

    // Incremento do Contador
    $z--; // ou z = z -1
}

echo "<hr>";

// Iniciou / Definição da estrutura
while($a > 0){//loop será executado até os atributos serem falsos
    //corpo do loop
    if($a % 2 != 0){ //apenas numeros impares
        echo $a. "<br>";
    }

    // Incremento do Contador
    $a--; // ou z = z -1
}

echo "<hr>";

// Iniciou / Definição da estrutura
while($w > 0){//loop será executado até os atributos serem falsos
    //corpo do loop
    if($w % 2 != 1){ //apenas numeros pares
        echo $w. "<br>";
    }

    // Incremento do Contador
    $w--; // ou z = z -1
}