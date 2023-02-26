<?php

include_once("models/Car.php");


    #Irá fazer toda manipulação com o banco de dados
    class CarDAO implements CarDAOinterface {

        private $conn;
        public function __construct(PDO $conn){
            $this->conn = $conn;
        }

        public function findAll(){
            $cars = [];

            $stmt = $this->conn->query("SELECT * FROM cars");
            
            //retornando o array de objetos
            $data = $stmt->fetchAll();

            //expressando o array com o foreach
            foreach($data as $item){

                $car = new Car();

                $car->setId($item["id"]);
                $car->setBrand($item["brand"]);
                $car->setKm($item["km"]);
                $car->setColor($item["color"]);

                //Jogar todos os objetos para o array, podendo ser dessa forma ou arraypush
                $cars[] = $car;
            }
            
            return $cars;
        }

        public function create(Car $car){

            $stmt = $this->conn->prepare("INSERT INTO cars (brand, km ,color) VALUES(:brand, :km, :color)");

            $stmt->bindParam(":brand", $car->getBrand());
            $stmt->bindParam(":km", $car->getKm());
            $stmt->bindParam(":color", $car->getColor());

            $stmt->execute();
        }


    }   