<?php

    class Car{

        //Criar as propriedades correspondentes as tabelas do banco
        private $id;
        private $brand;
        private $km;
        private $color;

        //Funções de get e set para resgatar e transferir
        public function getId(){
            return $this->id; 
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getBrand(){
            return $this->brand;
        }

        public function setBrand($brand){
            $this->brand = $brand;
        }

        public function getKm(){
            return $this->km;
        }

        public function setKm($km){
            $this->km = intval($km);
        }

        public function getColor(){
            return $this->color;
        }

        public function setColor($color){
            $this->color = $color;
        }

    }

        //Todos os metodos que eu quero aplicar no meu DAO
        interface CarDAOinterface{

            public function create(Car $car);
            public function findAll();


        }