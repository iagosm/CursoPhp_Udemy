<?php

//Ambos são da Classe DateTime
#Format-> Formata a data;
#Modify -> Altera a data;


//Data atual
    $data = new DateTime();

    echo $data->format('d/m/y');// Formatando a data passada pelo DateTime

    echo "<br>";

    echo $data->format('D-M-Y') . "<br>";
    
    
    echo $data->format('l . F . Y') . "<br>";

    //Modify

    //Data + 5 dias
    $data->modify('+5 days');
    
    echo $data->format('d/m/y');
    $data->modify('+2 days');
    echo "<br>";
    echo $data->format('d/m/y');

    $data->modify('-3 years');
    echo "<br>";
    echo $data->format('d/m/y');