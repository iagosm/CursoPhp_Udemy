<?php

session_start(); // define as sessoes inicializadas

// print_r($_SESSION);

$_SESSION['nome'] = "Iago";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá Session</h1>
    <a href="pagina.php">a</a>
</body>
</html>