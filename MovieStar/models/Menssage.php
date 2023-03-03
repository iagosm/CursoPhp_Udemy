<?php

    class Message{
        
        private  $url;

        public function __construct($url){
            $this->url = $url;
        }
        
        //Inserir mensagem
        public function setMenssage($msg, $type, $redirect = "index.php"){
            $_SESSION["msg"] = $msg;
            $_SESSION["type"] = $type;

            if($redirect != "back"){
                header("Location: $this->url" . $redirect);
            }else {
                header("Location: " . $_SERVER["HTTP_REFERER"]);// REFERENCIA OU ULTIMA URL Q O USUARIO ENTROU
            }


        }

        //Pegar mensagem
        public function getMenssage(){
            if(!empty($_SESSION["msg"])){
                return[
                    "msg" => $_SESSION["msg"],
                    "type" => $_SESSION["type"]
                ];
            }else{
                return false;
            }
            
        }

        //Limpar a mensagem
        public function clearMessage(){
            $_SESSION["msg"] = "";
            $_SESSION["type"] = "";
        }

    }