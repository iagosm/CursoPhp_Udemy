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

$table = "itens";
$nome = "xícara";
$descricao = "É uma xícara usada de cor rosa";

$q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

$conn->query($q);

$conn->close();