<?php

require_once("globals.php");
require_once("db.php");
require_once("models/Menssage.php");
require_once("models/Movie.php");
require_once("dao/UserDAO.php");
require_once("dao/MovieDAO.php");

$message = new Message($BASE_URL);
$userDao = new UserDAO($conn, $BASE_URL);
$movieDao = new MovieDAO($conn, $BASE_URL);

//Resgatar o tipo do formulario
$type = filter_input(INPUT_POST, "type");

//Resgatar dados do usuario
$userData = $userDao->verifyToken();
if($type === "create"){

    //Receber dados do input
    $title = filter_input(INPUT_POST, "title");
    $description = filter_input(INPUT_POST, "description");
    $trailer = filter_input(INPUT_POST, "trailer");
    $category = filter_input(INPUT_POST, "category");
    $length = filter_input(INPUT_POST, "length");

$movie = new Movie(); //objeto

//Validação mínima de dados
if(!empty($title) && !empty($description) && !empty($category)){

    $movie->title =$title;
    $movie->description =$description;
    $movie->trailer =$trailer;
    $movie->category =$category;
    $movie->length =$length;
    $movie->users_id = $userData->id;

    //Upload da img
    if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])){
        $image = $_FILES["image"];
        $imageTypes = ["image/jpeg", "image/jpg", "image/png", "image/gif" , "image/bmp"];
        $jpgArray = ["image/jpeg", "image/jpg"];
        //PEGANDO EXTENSÃO DO ARQUIVO
        $ext = strtolower(substr($image["name"],-4));
        
        // Checagem de tipo de imagem
        if(in_array($image["type"], $imageTypes)) {

        if($ext == ".jpg"){

            $imageFile = imagecreatefromjpeg($image["tmp_name"]);

        } else if($ext == ".png") {

            $imageFile = imagecreatefrompng($image["tmp_name"]);
        } else {

            $message->setMenssage("Tipo inválido de imagem, insira png ou jpg!", "error", "back");

        }
        
        
        $imageName = $movie->imageGenerateName($ext);
        imagejpeg($imageFile, "./img/movies/" . $imageName, 100);
        $movie->image = $imageName;

        }else{
            $message->setMenssage("Tipo inválido de imagem! A imagem precisa ser jpeg/png/jpg!", "error", "back");
        }

        

    }
    
    $movieDao->create($movie);
}else{
    $message->setMenssage("Informações incompletas! É necessário preencher todas as lacunas.", "error", "back");
}

}else if($type === "delete"){
    //Receber dados do formulario
    $id = filter_input(INPUT_POST, "id");

    $movie = $movieDao->findById($id);

    if($movie){

        //Verificar se o filme é do usuario
        if($movie->users_id === $userData->id){

            $movieDao->destroy($movie->id);

        }else{
            
            $message->setMenssage("Informações inválidas!", "error", "index.php");

        }

    }else{
    
        $message->setMenssage("Informações inválidas!", "error", "index.php");
    
    }



    } else if($type == "update"){
    //Receber dados do input
    $title = filter_input(INPUT_POST, "title");
    $description = filter_input(INPUT_POST, "description");
    $trailer = filter_input(INPUT_POST, "trailer");
    $category = filter_input(INPUT_POST, "category");
    $length = filter_input(INPUT_POST, "length");
    $id = filter_input(INPUT_POST, "id");

    $movieData = $movieDao->findById($id);

    //verifica se encontrou o filme
    if($movieData){

        //Verificar se o filme é do usuario
        if($movieData->users_id === $userData->id){

            //Validação mínima de dados
            if(!empty($title) && !empty($description) && !empty($category)){

            //edição do filme
            $movieData->title = $title;
            $movieData->description = $description;
            $movieData->trailer = $trailer;
            $movieData->category = $category;
            $movieData->length = $length;
            
                        //Upload da img
            if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])){

                    $image = $_FILES["image"];
                    $imageTypes = ["image/jpeg", "image/jpg", "image/png", "image/gif" , "image/bmp"];
                    $jpgArray = ["image/jpeg", "image/jpg"];
                    //PEGANDO EXTENSÃO DO ARQUIVO
                    $ext = strtolower(substr($image["name"],-4));
                    
                    // Checagem de tipo de imagem
                    if(in_array($image["type"], $imageTypes)) {

                    if($ext == ".jpg"){

                        $imageFile = imagecreatefromjpeg($image["tmp_name"]);

                    } else if($ext == ".png") {

                        $imageFile = imagecreatefrompng($image["tmp_name"]);
                    } else {

                        $message->setMenssage("Tipo inválido de imagem, insira png ou jpg!", "error", "back");

                    }
                    $movie = new Movie();

                    $imageName = $movie->imageGenerateName($ext);
                    imagejpeg($imageFile, "./img/movies/" . $imageName, 100);
                    $movieData->image = $imageName;

                    }else{
                        $message->setMenssage("Tipo inválido de imagem! A imagem precisa ser jpeg/png/jpg!", "error", "back");
                    }

                    

                }
                
                $movieDao->update($movieData);


            
            
            }else{
                $message->setMenssage("Informações incompletas! É necessário preencher todas as lacunas.", "error", "back");

            }
            

        }else{
            
            $message->setMenssage("Informações inválidas!", "error", "index.php");

        }

    }else{
    
        $message->setMenssage("Informações inválidas!", "error", "index.php");
    
    }


    
    } else {
        $message->setMenssage("Informações inválidas!", "error", "index.php");

    }
