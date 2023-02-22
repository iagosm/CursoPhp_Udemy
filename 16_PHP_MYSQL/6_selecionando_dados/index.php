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

$q = "SELECT * FROM itens";

$result = $conn->query($q);
$conn->close();

//Apenas um resultado
$itens = $result->fetch_assoc();

print_r($itens);
echo "<br>";

//TODOS os resultados
$itens = $result->fetch_all();

print_r($itens);