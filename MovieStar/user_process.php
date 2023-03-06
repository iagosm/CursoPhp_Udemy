<?php

    require_once("globals.php");
    require_once("db.php");
    require_once("models/Menssage.php");
    require_once("models/User.php");
    require_once("dao/UserDAO.php");

    $message = new Message($BASE_URL);

    $userDao = new UserDAO($conn, $BASE_URL);

    //Resgatar o tipo de formulario
    $type = filter_input(INPUT_POST, "type");

    //Atualizar usuário
    if($type == "update"){

        //Resgata dados do usuário
        $userData = $userDao->verifyToken();
        
        //Receber dados do post
        $name = filter_input(INPUT_POST,"name");
        $lastname = filter_input(INPUT_POST,"lastname");
        $email = filter_input(INPUT_POST,"email");
        $bio = filter_input(INPUT_POST,"bio");

        //Criar novo objeto de usuario
        $user = new User();
        
        //Preencher os dados
        $userData->name = $name;
        $userData->lastname = $lastname;
        $userData->email = $email;
        $userData->bio = $bio;

        //upload img
        if(isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])){
            
            $image = $_FILES["image"];
            $imageTypes = ["image/jpeg", "image/jpg", "image/png"];

            //checar o tipo da imagem
            if(in_array($image["type"], $imageTypes)){

            }else{
                //se n for o tipo valido, msg erro
                $message->setMenssage("Esse tipo de imagem não é valido!", "error", "editprofile.php");

            }
        }        

        $userDao->update($userData);

        //Atualizar senha
    }else if($type == "changepassword"){
        echo "a";
    }else{
        $message->setMenssage("Informações inválidas!", "error", "index.php");   
    }