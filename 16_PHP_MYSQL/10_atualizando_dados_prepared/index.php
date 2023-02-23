<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

#ASSUNTO DA AULA

$id = 23;
//Preparando a query
$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");
//declarar as variaveis
$nome = "Monitor Husky 27p";
$descricao = "Monitor gamer 27 polegadar 144hz";

//Ajustar os parametros seguindo a ordem
$stmt->bind_param("ssi",$nome,$descricao, $id);

$stmt->execute();
//Verificar se ocorreu algum erro
if($stmt->error){
    echo "Erro: " . $stmt->error;
}