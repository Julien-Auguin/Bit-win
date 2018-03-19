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
        && (isset($_POST['recipient'])) && ($_POST['recipient'] <> '')){
            
        // Insertion Sender in DataBase
        if((isset($_POST['mail-sender'])) && ($_POST['mail-sender'] <> '')){
            include ('php/param.php');
            include ('php/connectionDB.php');
            insertUser($conn,$_POST["mail-sender"],$_POST["name"], "sender");
            unset($_POST["name"]);
            unset($_POST["mail-sender"]);
        }

        // Insertion Recipient in DataBase               
        if((isset($_POST['recipient'])) && ($_POST['recipient'] <> '')){
            include ('php/param.php');
            include ('php/connectionDB.php');
            insertUser($conn,$_POST["recipient"],"","recipient");
            unset($_POST["recipient"]);
        }
    }
    else if ($_POST['mail-sender'] == ''){
        echo "Please enter sender mail";
    }
    else if ($_POST['recipient'] == ''){
        echo "Please enter recipient mail";
    }

    // TO DO: 
    // 1. vérifier si les User sont déjà insérés dans la BDD
    //    si Name vide, le mettre à jour
    // 3. Insérer dans la table User_Upload
    
    $conn = null;
?>
