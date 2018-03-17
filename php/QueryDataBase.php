<!-- by Caroline -->

<?php

    // Function insertUser in table Users
    function insertUser(PDO $conn,$userMail,$nameUser,$message){
        $user_mail = $userMail;
        $name = $nameUser;
        $requete = $conn->prepare(
            "INSERT INTO Users (user_mail, name)
            VALUES  (:user_mail, :name)"
            );
        $requete->bindParam(':user_mail', $user_mail);
        $requete->bindParam(':name', $name);
        if ((isset($user_mail)) && ($user_mail <> "")){
            $result = $requete->execute();
            echo "<em>Insertion réussie " . $message .".</em>";
        }
        else {
        echo "<em>Veuillez entrer le mail ". $message ." </em>";
        }

        return $result;
    }


    // Insertion Sender in DataBase
    if((isset($_POST['mail-sender'])) && ($_POST['mail-sender'] <> ''))
    {
        include ('php/param.php');
        include ('php/connexiondb.php');
        insertUser($conn,$_POST["mail-sender"],$_POST["name"], "de l'expéditeur");
        unset($_POST["name"]);
        unset($_POST["mail-sender"]);
    }

    // Insertion Recipient in DataBase               
    if((isset($_POST['recipient'])) && ($_POST['recipient'] <> ''))
    {
        include ('php/param.php');
        include ('php/connexiondb.php');
        insertUser($conn,$_POST["recipient"],"","du destinataire");
        unset($_POST["recipient"]);
    }

    // TO DO: vérifier si les User sont déjà insérés dans la BDD
    // si Name vide, le mettre à jour

    $conn = null;
?>