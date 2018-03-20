<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BIT-WIN !</title>
</head>

<body class="body">
    <header class = "flex">
        <svg width="50" height="50" id ="logo">
        <!-- <svg id ="logo"> -->
            <img src="img/bitwin.svg" alt="logo" >
        </svg>
        <h1>BIT-WIN !</h1>
    </header>

    <div id="lateral">
        <p>Help</p>
        <p>CGU</p>
    </div>

    <div id="modal">
        <?php
          if ($_GET['modal'] == "confirm") require "php/viewConfirm.php";
          else if ($_GET['modal'] == "download") require "php/viewConfirm.php";
          else require "php/viewUpload.php";
        ?>
    </div>

    <div id="remark">
        <p>
            <?php
              include "queryDataBase.php";
            ?>
        </p>
    </div>



</body>

</html>
