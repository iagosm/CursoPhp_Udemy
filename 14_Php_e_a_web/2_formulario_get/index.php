<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="processamento.php" method="GET">
        <div>
        <label for="nome">Nome</label> <br>
        <input type="text" name="nome" placeholder="Preencha seu nome">
        <br><br>
        </div>

        <div>
        <label for="sobrenome">Sobrenome</label> <br>
        <input type="text" name="sobrenome" placeholder="Preencha seu sobrenome">
        <br><br>
        </div>

        <div>
        <label for="email">E-mail</label> <br>
        <input type="email" name="email" placeholder="Preencha seu email">
        <br><br>
        </div>
        
    <div>
        <input type="submit" value="Enviar">
    </div>
    </form>

</body>
</html>