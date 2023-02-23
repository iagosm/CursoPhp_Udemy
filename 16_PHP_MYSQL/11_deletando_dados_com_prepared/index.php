<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

#ASSUNTO DA AULA

$id = 21;

//prepara a query
$stmt = $conn->prepare("DELETE FROM itens WHERE id = ?");

//prepara o parametro
$stmt->bind_param("i", $id);
 
$stmt->execute();
$stmt->close();


