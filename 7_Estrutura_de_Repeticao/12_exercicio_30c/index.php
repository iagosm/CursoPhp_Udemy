<?php


$iago = [];

for($i = 10; $i <= 20; $i++){
    
    array_push($iago, $i);
}
print_r($iago) . "<br>";

echo "<br>"; 

for($i =0; $i < count($iago); $i++){

    if($iago[$i] % 2 != 0){
        echo "Numero impar".$iago[$i]."<br>";
    }

}

echo "<hr>";


$par = [];

for($z = 10; $z <= 20; $z++){
    array_push($par, $z);
}

print_r($par) . "<br>";

echo "<br>";

for($z =0; $z < count($par); $z++){
    if($par[$z] % 2 == 0){
        echo "Numero par: $par[$z] <br>";
    }
}