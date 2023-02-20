<?php
#forma de como coirdena de quem e como utiliza o método

#Temos três formatos de visibilidade->
// Public, Protected e private

#Public -> A propriedade ou metodo pode ser acessada de qualquer forma


class Car{
    public $rodas = 4;
    private $vidro ="Sem pelicula"; //não há como alterar pq é privada
    protected $portas = 4;

    public function getVidro(){
        return $this->vidro;
    }

    public function getPortas(){
        return $this->portas;
    }

}

//metodo para alterar rodas
class Mecanico{
    public function alterarRodas($carro){
        $carro->rodas =10;
    }

    public function colocarPelicula($carro, $pelicula){
        $carro->vidro = $pelicula;
    }
}

$carro = new Car;
echo $carro->rodas . "<br>";

//Alterando dados de um objeto atraves de outro
$iago = new Mecanico;
$iago->alterarRodas($carro);
echo $carro->rodas . "<br>";
// Não pode alterar pq é privado
// $iago->colocarPelicula($carro, "G20");
echo $carro->getVidro() . "<br>";
echo $carro->getPortas() . "<br>";

#Protected -> A propriedade ou metodo pode ser acessada apenas pela classe de origem ou as que recebem a mesma herança




#private -: A propriedade ou metodo pode ser acessada apenas pela classe que foi criada