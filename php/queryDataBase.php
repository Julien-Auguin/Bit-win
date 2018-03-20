<!-- by Caroline -->

<?php

    // Function insertUser in table Users
    function insertUser(PDO $conn,$userMail,$nameUser,$message){
        $user_mail = $userMail;
        $name = $nameUser;
        $requete1 = $conn->prepare(
            "INSERT INTO Users (user_mail, name)
            VALUES  (:user_mail, :name)"
            );
        $requete1->bindParam(':user_mail', $user_mail);
        $requete1->bindParam(':name', $name);
        if ((isset($user_mail)) && ($user_mail <> "")){
            $result = $requete1->execute();
            echo "<em>Insertion " . $message ." OK.</em>";
        }
        else {
        echo "<em>Please enter ". $message ." mail </em>";
        }

        return $result;
    }


    if((isset($_POST['mail-sender'])) && ($_POST['mail-sender'] <> '') 
        && (isset($_POST['recipient'])) && ($_POST['recipient'] <> '')
        && (isset($_FILES['select'])) && ($_FILES['select']['name'] <> '')){
            
        // Insertion Sender in DataBase
        if((isset($_POST['mail-sender'])) && ($_POST['mail-sender'] <> '')){
            require 'php/param.php';
            require 'php/connectionDB.php';
            insertUser($conn,$_POST["mail-sender"],$_POST["name"], "sender");
            unset($_POST["name"]);
            unset($_POST["mail-sender"]);
        }

        // Insertion Recipient in DataBase               
        if((isset($_POST['recipient'])) && ($_POST['recipient'] <> '')){
            require 'php/param.php';
            require 'php/connectionDB.php';
            insertUser($conn,$_POST["recipient"],"","recipient");
            unset($_POST["recipient"]);
        }
           
        
        // Insertion files in table Files_Upload
        if((isset($_FILES['select'])) && ($_FILES['select']['name'] <> '')){
            
                require 'php/param.php';
                require 'php/connectionDB.php';
                
                // count the lenght of array $_FILES
                $total = count($_FILES['select']['name']);
    
                // Loop through each file
                for($i=0; $i<$total; $i++) {    
                    $file_name = $_FILES['select']['name'][$i];
                    $file_size = $_FILES['select']['size'][$i];
                    // $directory_name = ;
                    $requete2 = $conn->prepare(
                        "INSERT INTO File_Upload (file_name, file_size, directory_name)
                        VALUES  (:file_name, :file_size,:directory_name)"
                        );
                        $requete2->bindParam(':file_name', $file_name);
                        $requete2->bindParam(':file_size', $file_size);
                        $requete2->bindParam(':directory_name', $directory_name);
                        if ((isset($file_name)) && ($file_name <> "")){
                            $result2 = $requete2->execute();
                            echo "<em>Insertion file OK.</em>";
                        }
                        else {
                            echo "<em>Please select file </em>";
                        }
                }
                    // $_FILES = "";
            }
            else echo "Pas de fichier";
    }
    else {
        if (!isset($_POST['mail-sender'])){
        echo "<em>Please enter sender mail </em>";
        }   
        if (!isset($_POST['recipient'])){
        echo "<em>Please enter recipient mail </em>";
        }
        if (!isset($_FILES['select'])){
        echo "<em>Please select files </em>";
        }    
    }



    // TO DO: 
    // 1. vérifier si les User sont déjà insérés dans la BDD
    //    si Name vide, le mettre à jour
    // 3. Insérer dans la table User_Upload
    
    $conn = null;
?>
