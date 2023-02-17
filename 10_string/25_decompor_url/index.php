<?php

$url = "https://www.google.com";

$arryUrl = parse_url($url);

print_r($arryUrl);
echo "<br>";

echo $arryUrl["host"];
echo "<br>";

$url2 = "http://www.horadecodar.com.br/usuarios/iagosousa?id=12&nome=Iago";
$arrayurl2 = parse_url($url2);
print_r($arrayurl2);
echo "<br>";
