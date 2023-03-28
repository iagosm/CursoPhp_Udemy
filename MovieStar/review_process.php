<?php

require_once("globals.php");
require_once("db.php");
require_once("models/Menssage.php");
require_once("models/Movie.php");
require_once("models/Review.php");
require_once("dao/UserDAO.php");
require_once("dao/MovieDAO.php");
require_once("dao/ReviewDAO.php");

$message = new Message($BASE_URL);
$userDao = new UserDAO($conn, $BASE_URL);
$movieDao = new MovieDAO($conn, $BASE_URL);
$reviewDAO = new ReviewDao($conn, $BASE_URL);

//recebendo o tipo do comentario
$type = filter_input(INPUT_POST,"type");

$userData = $userDao->verifyToken();

if($type === "create"){

    //Recebendo dados do post
    $rating = filter_input(INPUT_POST, "rating");
    $review = filter_input(INPUT_POST, "review");
    $movies_id = filter_input(INPUT_POST, "movies_id");
    $users_id = $userData->id;
    
    $reviewObject = new Review();

    $movieData = $movieDao->findById($movies_id);
    

    //Validando se o filme existe
    if($movieData){
        //verificar dados minimos
        if(!empty($rating) && !empty($review) && !empty($movies_id)){
            
            $reviewObject->rating = $rating;
            $reviewObject->review = $review;
            $reviewObject->movies_id = $movies_id;
            $reviewObject->users_id = $users_id;

            $reviewDAO->create($reviewObject);

        }else{

        $message->setMenssage("Você precisa inserir as informações!", "error", "back");

        }


    }else{

        $message->setMenssage("Informações inválidas!", "error", "index.php");
    
    }


}else{
    $message->setMenssage("Informações inválidas!", "error", "index.php");
}