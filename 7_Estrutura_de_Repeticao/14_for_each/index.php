<?php

$iago = ["Iago", "Sousa", "Miranda", 23, 1.67, 67, "Bahia", "Salvador", "Lauro"];

foreach($iago as $sobre){
    echo $sobre."<br>";
    if($sobre == 1.67){
        break;
    }
}