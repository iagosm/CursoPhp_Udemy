<?php

    include_once("db.php");
    include_once("dao/CarDAOMysql.php");

    //Criando uma classe baseada no DAO
    $carDAO = new CarDao($conn); 

    $brand = $_POST["brand"];
    $km = $_POST["km"];
    $color = $_POST["color"];

    //Criar um objeto para receber os dados acima
    $newCar = new Car();

    $newCar->setBrand($brand);
    $newCar->setKm($km);
    $newCar->setColor($color);

    $carDAO->create($newCar);

    header("Location: index.php");