<?php

    require_once("models/User.php");
    require_once("models/Menssage.php");
    require_once("dao/UserDAO.PHP");
    require_once("globals.php");
    require_once("db.php");

    $message = new Message($BASE_URL);

    $userDAO = new UserDAO($conn, $BASE_URL);

    //Resgata o tipo do formulario

    $type = filter_input(INPUT_POST,"type"); //função para resgatar inputs livres de dados maliciosos

    //Verificação do tipo de formulario
    if($type === "register") {

    $name = filter_input(INPUT_POST,"name"); //função para resgatar inputs livres de dados maliciosos
    $lastname = filter_input(INPUT_POST,"lastname"); //função para resgatar inputs livres de dados maliciosos
    $email = filter_input(INPUT_POST,"email"); //função para resgatar inputs livres de dados maliciosos
    $password = filter_input(INPUT_POST,"password"); //função para resgatar inputs livres de dados maliciosos
    $confirmpassword = filter_input(INPUT_POST,"confirmpassword"); //função para resgatar inputs livres de dados maliciosos

        //Verificação de dados minimmos
        if($name && $lastname && $email && $password){

            //verificar se as senhas batem
            if($password === $confirmpassword){

                //verificar se o e-mail já está cadastrado no sistema
                if($userDAO->findByEmail($email) == false){

                    $user = new User();
                    
                    //Criação de token e senha = duas hashs
                    $userToken = $user->generateToken();
                    $finalPassword = $user->generatePassword($password);
                    //Após criação de senha, vamos para a montagem do objeto

                    $user->name = $name;
                    $user->lastname = $lastname;
                    $user->email = $email;
                    $user->password = $finalPassword;
                    $user->token = $userToken;
                    
                    $auth = true;
                    $userDAO->create($user, $auth);


                }else{
                    //Erro, email já existente
                    $message->setMenssage("Usuário já cadastrado, tente outro E-mail.", "error", "back");
                }


            }else{
                //Message de erro, senhas incorreta
                $message->setMenssage("As senhas não estão digitadas corretamente.", "error", "back");
            }


        }else{
            //Enviar uma mensagem de erro de dados faltantes   
            $message->setMenssage("Por favor, preencha todos os campos.", "error", "back");
        }

    }else if($type === "login"){

        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");

        // Tenta autenticar usuario
        if($userDAO->authenticateUser($email, $password)){

            $message->setMenssage("Seja Bem-vindo!", "sucess", "editprofile.php");
            
            
        //Redireciona caso n consiga autenticar
        }else{
            
            $message->setMenssage("E-mail e/ou senha incorretos!", "error", "auth.php");

        }

    }else{
        $message->setMenssage("Por favor, preencha os campos corretamente!", "error", "index.php");
    }