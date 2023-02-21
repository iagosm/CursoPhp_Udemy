<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="cadastro.php" method="POST">

    <div>
        <label for="marca">Marca do carro!</label>
        <input type="text" name="marca" placeholder="Marca do carro">
    </div>

    <div>
        <label for="preco">Preço do carro!</label>
        <input type="text" name="preco" placeholder="Preço do carro">
    </div>

    <div>
        <input type="checkbox" name="opcionais[]" id="" value="Teto Solar"> Teto Solar
    </div>


    <div>
        <input type="checkbox" name="opcionais[]" id="" value="Pelicula Solar">Pelicula
    </div>

    <div>
        <input type="checkbox" name="opcionais[]" id="" value="Blindado">Blindado
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>

    </form>

</body>
</html>