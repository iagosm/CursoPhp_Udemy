<?php 

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "root";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

#Assunto da aula

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

$nome = "Pc gamer 2023";
$descricao = "Pc gamer com a placa rtx3080 e i9, rodando todos os jogos da atualidade.";

//Declaração dos parametros
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();