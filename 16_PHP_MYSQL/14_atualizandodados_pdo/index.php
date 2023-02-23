<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "root";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

#Assunto da aula

$id = 1;
$nome = "Teclado Microsoft";
$descricao = "Esté teclado é novo e está na caixa.";

$stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();
 