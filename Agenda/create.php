<?php
include_once("templates/header.php");
?>

    <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Criando Contato</h1>
    <form id="create-form" action="<?= $BASE_URL?>config/process.php" method="POST">
    <input type="hidden" name="type" value="create">
    <div class="form-group">
        <label for="name">Nome do contato:</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Digite o seu nome" required>
    </div>
    <div class="form-group">
        <label for="phone">Telefone:</label>
        <input type="text" name="phone" class="form-control" id="phone" placeholder="Digite o seu telefone" required>
    </div>  
    <div class="form-group">
        <label for="mail">E-mail</label>
        <input type="email" name="mail" class="form-control" id="mail" placeholder="Digite o seu e-mail" required>
    </div>
    <div class="form-group">
        <label for="obersvations">Observação</label>
        <textarea type="text" name="obersvations" class="form-control" id="obersvations" placeholder="Digite uma observação" rows="3"></textarea> 
    </div>  
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
    </div>

<?php
include_once("templates/footer.php");
?>