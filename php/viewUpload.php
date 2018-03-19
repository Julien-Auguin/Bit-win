<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BIT-WIN !</title>
</head>

<body>
    <div>
        <p></p>

        <form method="POST" action="" enctype="multipart/form-data">
            <p>
                <input type="file" name="select[]" id="" class="select" multiple >
            </p>
        
            <p>
                <input type="email" name="mail-sender" id="" class="email" placeholder="Votre e-mail">
            </p>
            <p>
                <input type="email" name="recipient" id="" class="email" placeholder="E-mail du destinataire">
            </p>
            <p>
                <input type="text" name="name" id="" class="text" placeholder="Votre nom">
            </p>
            <p>
                <textarea name="message" id="" class="message" placeholder="Votre message"></textarea>
            </p>
            <p>
                <input type="submit" value="" name="upload">
            </p>
                
        </form>
        <?php
          include "queryDataBase.php";
        ?>


    </div>
    <div>
        <!-- commentaire -->
    </div>
</body>

</html>
