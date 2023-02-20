<?php
    //Não é bom alterar o timezone se for um projeto internacional
    date_default_timezone_set('America/Sao_Paulo');

$data = new DateTime();

print_r($data);
echo "<br>";