<?php


$textoHtml = "<p>Testando paragrafo.</p><div>Uma div</div> <br> Olá";
 
echo $textoHtml . "<br>";

$salvarTextoBanco = strip_tags($textoHtml);

echo $salvarTextoBanco;