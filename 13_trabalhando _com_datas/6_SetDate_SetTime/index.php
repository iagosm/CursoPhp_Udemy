<?php

#setDate -> Recebe Ano, mês e dia, alteraçando completamente a data
#setTime -> Recebe hora, minuto e segundo, alterando o tempo da data

    $data = new DateTime();
    
    print_r($data);
    echo "<br>";

    //Ajustando a data
    $data->setDate(2000,06,30);

    print_r($data);
    echo "<br>";

    //Ajustando a hora
    $data->setTime(21,07,10);

    print_r($data);
    echo "<br>";

    echo $data->format('d/m/Y') . "<br>";