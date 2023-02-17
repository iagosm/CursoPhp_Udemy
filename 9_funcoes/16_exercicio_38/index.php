<?php

$lista = ["Prateleira", "Lanchonete", "Estoque", "Escritorio"];


function Arr1($arr){
    $string = "Você levou estes itens do mercado:";

    for($i = 0; $i < count($arr); $i++){

        if($i +1 == count($arr)){
        $string .= "$arr[$i]. ";
        }else{
            $string .= "$arr[$i], ";
        }

}

return $string;
}

echo Arr1($lista);
