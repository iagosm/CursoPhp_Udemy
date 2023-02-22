<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// if($conn->connect_errno){
//     echo "Deu erro, ops. <br>";
//     echo "Erro: " .  mysqli_connect_error();
// }


#ASSUNTO DA AULA

$sql = "SELECT * FROM itens";

$result = $conn->query($sql);
 
print_r($result);

$conn->close();