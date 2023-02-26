<?php

include_once("db.php");
include_once("dao/CarDAOMysql.php");


$carDAO = new CarDao($conn);

$cars = $carDAO->findAll();

?>

<h1>Inserida um carro:</h1>
<form action="process.php" method="POST">
    <div>
        <label for="brand">Marca do Carro:</label>
        <input type="text" name="brand" placeholder="Insira a marca">
    </div>

    <div>
        <label for="km">Km do Carro:</label>
        <input type="text" name="km" placeholder="Insira o Km do carro">
    </div>

    <div>
        <label for="color">Cor do Carro:</label>
        <input type="text" name="color" placeholder="Insira a cor do carro">
    </div>
    <input type="submit" value="Salvar">
</form>
<ul>
    <?php foreach($cars as $car): ?>
        <li> <?= $car->getBrand()?> <?= $car->getKm() ?> <?= $car->getColor()?> </li>
    <?php endforeach; ?>
</ul>