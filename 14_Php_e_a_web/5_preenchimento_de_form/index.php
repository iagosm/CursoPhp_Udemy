<?php

$usuario = [
    'nome'=> 'iago',
    'idade' => 30,
    'profissao' => 'programador'
];

if($usuario){

    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];

}

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

    <form action="">

    <div>
        <input type="text" name="nome" placeholder="Digite seu nome" value="<?php echo $nome;?>">
    </div>

    <div>
        <input type="text" name="idade" placeholder="Digite sua idade" value="<?php echo $idade;?>">
    </div>

    <div>
        <input type="text" name="profissao" placeholder="Digite sua profissao" value="<?php echo $profissao;?>">
    </div>

    <div>
        <input type="submit" value="Enviar">
    </div>

    </form>

</body>
</html>