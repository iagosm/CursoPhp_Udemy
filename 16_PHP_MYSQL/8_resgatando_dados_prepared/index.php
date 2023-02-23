<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

#ASSUNTO DA AULA

$id = 4;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");
//parametros
$stmt->bind_param("i", $id);//tratando o id como integer
$stmt->execute();

//Nova variavel para o resultado
$result = $stmt->get_result();
//Nova variavel com result-fetchall
$data = $result->fetch_all();
print_r($data);



