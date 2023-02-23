<?php

$host = "localhost";
$db = "agenda";
$user = "root";
$pass = "root";


try {

    $conn = new PDO("mysql:host=$host;dbname=$db", $user , $pass);
    //Ativar modo de erros
    //Irá parar o software e exibir o erro, não será silencioso
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    //erro na conexão
    $error = $e->getMessage();
    echo "Erro: " . $error;
}

