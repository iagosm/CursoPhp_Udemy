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

            // Upload da imagem
            if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])) {
            
                $image = $_FILES["image"];
                $imageTypes = ["image/jpeg", "image/jpg", "image/png", "image/gif" , "image/bmp"];
                $jpgArray = ["image/jpeg", "image/jpg"];
        
                //PEGANDO EXTENSÃO DO ARQUIVO
                $ext = strtolower(substr($image['name'],-4));
        
                // Checagem de tipo de imagem
                if(in_array($image["type"], $imageTypes)) {
        
                if($ext == ".jpg") {
        
                    $imageFile = imagecreatefromjpeg($image["tmp_name"]);
        
                } else if($ext == ".png") {
        
                    $imageFile = imagecreatefrompng($image["tmp_name"]);
        
                } else {
        
                    $message->setMenssage("Tipo inválido de imagem, insira png ou jpg!", "error", "back");
        
                }
        
                $imageName = $user->imageGenerateName($ext);
                imagejpeg($imageFile, "./img/users/" . $imageName, 100);
                $userData->image = $imageName;
        
                } else {
        
                $message->setMenssage("Tipo inválido de imagem, insira png ou jpg!", "error", "back");
        
                }
            }
        
            $userDao->update($userData);


        //Atualizar senha
    }else if($type == "changepassword"){

        //Receber os dados
        $password = filter_input(INPUT_POST, "password");
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword");
        

        //Resgatar dados do usuario
        $userData = $userDao->verifyToken();
        $id = $userData->id;

        if($password == $confirmpassword){
            //criar um novo objeto de usuario
            $user = new User();

            $finalPassword = $user->generatePassword($password);
            $user->password = $finalPassword;
            $user->id = $id;

            $userDao->changePassword($user);

        }else{

        $message->setMenssage("As senhas não são iguais!", "error", "back");   

        }

    }else{
        $message->setMenssage("Informações inválidas!", "error", "index.php");   
    }