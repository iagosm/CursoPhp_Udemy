<?php

class Humano{

    public $idade;
    public $nome;
    public $profissao;

    public function falar(){}

    public function andar(){}

}


#class_exists() -> verifica se uma classe existe
if(class_exists("Humano")){
    echo "A class Humano existe <br>";
}

if(class_exists("Cachorro")){
    echo "A class Humano existe <br>";
}else{
    echo "A class Humano não existe <br>";
}




#get_class_methods() -> verifica os metodos de uma classe
print_r(get_class_methods("Humano"));





#get_class_vars -> mapeamento das propriedades de uma classe

print_r(get_class_vars("Humano"));
