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

        <form id="form">
            <p>
                <input type="file" name="select" id="file" class="select" multiple required>
            </p>
            <p>
                <input type="email" name="mail-sender" id="mail-from" class="email" placeholder="Votre e-mail">
            </p>
            <p>
                <input type="email" name="recipient" id="mail-to" class="email" placeholder="E-mail du destinataire">
            </p>
            <p>
                <input type="text" name="name" id="pseudo" class="text" placeholder="Votre nom">
            </p>
            <p>
                <textarea name="message" id="message" class="message" placeholder="Votre message"></textarea>
            </p>
            <p>
                <input type="button" value="Confirmation!" name="check" id="check" disabled="disabled">
            </p>
                
        </form>


    </div>
    <div>
        <!-- commentaire -->
    </div>
    <script type="text/javascript" src="javascript/form.js"></script>
</body>

</html>