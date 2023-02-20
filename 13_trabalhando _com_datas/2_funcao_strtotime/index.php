<?php 


//strtotime realizamos a adição de um tempo
echo date('d/m/y', strtotime('+2years')) . "<br>";//2 anos a mais

$cincoDias = strtotime("10 days");

echo $cincoDias . "<br>";

$dataAtualMais = date('d/m/y', $cincoDias);

echo $dataAtualMais . "<br>";

$doisMeses = strtotime("2 months");
echo $doisMeses . "<br>";

echo $dataAtualMais2 = date('d-m-y', $doisMeses) . "<br>";

$dozenos = strtotime("12 years");

echo date('d-m-y', $dozenos);