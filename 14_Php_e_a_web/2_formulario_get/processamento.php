<?php

if(isset($_GET['nome'])){
    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $email = $_GET['email'];
}else{
    header("Location: index.php");
}



?>

<h2 style="font-size: 29px;">O seu nome é <?= "$nome $sobrenome";?></h2>
<h4>Os dados serão enviados diretamente para o seu <?= $email;?></h4>