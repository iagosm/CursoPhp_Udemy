<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

#ASSUNTO DA AULA
//Preparando a query sem utilizar algo do bindo parametro
$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

$nome = "Suporte de microfone";
$descricao = "Suporte novo e foi fabricado na china";

//Bind_param -> identifica os parametros e o tpos. Só irá deixar passar os dados validos para isso.
$stmt->bind_param("ss", $nome,$descricao); //s = string, i = integer, d = double

$stmt->execute();


