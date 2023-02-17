<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$Count = count($arr);


for($y= 0; $Count > $y; $y++){

    if($arr[$y] % 2 == 0){
        echo $arr[$y]. "<br>";
  }
}

for($z = 0; $Count > $z; $z++){
    if($arr[$z] % 2 == 1){
        echo $arr[$z]."<br>";
    }
}