<?php

$host = "localhost";
$db = "moviestars";
$user = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);

//Habilitar erros PDO
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
