<?php

    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "cursophp";

    $conn = new mysqli("localhost","root","root","cursophp");

    if($conn->connect_errno){
        echo "Deu erro";
        // echo "Erro: " . mysqli_connect_error();
        echo "Erro: " . $conn->connect_error;
    }else{
        echo "Não deu erro";
    }