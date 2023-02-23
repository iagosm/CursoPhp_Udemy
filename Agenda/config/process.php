<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");
    
    $data = $_POST;
    if(!empty($data)){
        //Modificação do banco
        
        //Criar Contato
        if($data["type"] === "create"){
            $name = $data["name"];
            $phone =$data["phone"];
            $mail =$data["mail"];
            $obersvations =$data["obersvations"];

            
            $query = "INSERT INTO contacts (name, phone, mail, obersvations) VALUES (:name, :phone, :mail, :obersvations)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":mail", $mail);
            $stmt->bindParam(":obersvations", $obersvations);

            try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso!";
            
            } catch (PDOException $e) {
                //erro na conexão
                $error = $e->getMessage();
                echo "Erro: " . $error;
            }
            }else if($data["type"] === "edit"){
                $name = $data["name"];
                $phone = $data["phone"];
                $mail = $data["mail"];
                $obersvations =$data["obersvations"];
                $id = $data["id"];
                
                $query = "UPDATE contacts SET name = :name, phone = :phone, mail = :mail,obersvations = :obersvations WHERE id = :id";
                
                $stmt = $conn->prepare($query);

                $stmt->bindParam(":name", $name);
                $stmt->bindParam(":phone", $phone);
                $stmt->bindParam(":mail", $mail);
                $stmt->bindParam(":obersvations", $obersvations);
                $stmt->bindParam(":id", $id);

                try {
                    $stmt->execute();
                    $_SESSION["msg"] = "Contato atualizado com sucesso!";

                } catch(PDOException $e) {
                    $error = $e->getMessage();
                    echo "Erro: " . $error;
                }


            }else if($data["type"] === "delete"){
                $id = $data["id"];

                $query = "Delete FROM contacts WHERE id = :id";
                
                $stmt = $conn->prepare($query);

                $stmt->bindParam(":id", $id);

                try {
                   $stmt->execute();
                   $_SESSION["msg"] = "Contato deletado com sucesso!";
                } catch (PDOException $e) {
                    $error = $e->getMessage();
                    echo "Error: " . $error;
                }

            }

            // Redirecionando para home após cadastro
            header("Location:" . $BASE_URL . "../index.php");
    }else{
        //Seleção de dados
        $id;
        if(!empty($_GET)){
            $id = $_GET["id"];
        }
    
        //Retorna o dado de um contato
        if(!empty($id)){
            $query = "SELECT * FROM contacts WHERE id= :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $contact = $stmt->fetch();// Um array para ver o contato
        }else{
            //Retorna todos os contatos
            $contacts = [];
            $query = "SELECT * FROM contacts";
    
            $stmt = $conn->prepare($query);
    
            $stmt->execute();
            $contacts = $stmt->fetchAll();
        }
    }

    //Fechar Conexão
    $conn = null;
   

        
 
    
    