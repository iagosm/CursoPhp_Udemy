<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

#ASSUNTO DA AULA

$id = 4;
//Preparando a query
$stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

//chamando o resultado.
$result = $stmt->get_result();

$data = $result->fetch_row();


print_r($data);