<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "root";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

#Dados da aula

$id = 5;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

$stmt->bindParam(":id", $id);

$stmt->execute();
//para mostrar apenas um resultado
$data = $stmt->fetch(PDO::FETCH_ASSOC);//transformando em array associativo
print_r($data);

//Para verificar todos os itens.
$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);// ajuda a manipular de uma melhor forma.

echo "<br> <br>";

print_r($itens);
