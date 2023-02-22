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

// $q = "CREATE TABLE teste(nome VARCHAR(100), sobrenome VARCHAR(100))";

$q = "DROP TABLE teste";


$conn->query($q);
$conn->close();