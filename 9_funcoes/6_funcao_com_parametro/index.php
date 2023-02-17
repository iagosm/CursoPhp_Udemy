<?php

function velocidadeMaxima($vel){

    if(is_int($vel)){
    echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    }else{
        echo "Por favor, passe um número inteiro <br>";
    }

}

velocidadeMaxima(300);
velocidadeMaxima(3500);
velocidadeMaxima("teste");

//PHP ignora parametro desnecessario
velocidadeMaxima(500, "testes");

//Mais parametros
function descreverAnimal( $nome, $raca){
    echo "O $nome é da $raca <br>";
}

descreverAnimal("Batata", "Vira-lata");
descreverAnimal("Shark", "labrador");