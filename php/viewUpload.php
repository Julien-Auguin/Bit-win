<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BIT-WIN !</title>
    <link rel="stylesheet" media="screen and (max-width: 780px)" href="css/phone.css">
    <link rel="stylesheet" media="screen and (min-width: 781px)" href="css/screen.css">
    <link rel="stylesheet" href="css/position.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div><p id="description">description</p></div>

    <form method="POST" action="index.php?modal=confirm" id="slide">
          <img src="img/top.svg" id="up">

          <div id="inputs">

            <div id="wrap-file" class="wrap show">
              <p>
                <input type="file" name="select" id="select" multiple autofocus tabindex=1 required>
                <span>Select files<input type="button" id="reset-files"></span>
              </p>
            </div>
            <div id="wrap-sender" class="wrap hide">
              <p>
                <input type="email" name="mail-sender" id="mail-sender" class="email" placeholder="Your e-mail" tabindex=2 required>
              </p>
            </div>
            <div id="wrap-message" class="wrap hide">
              <p>
                <input type="text" name="name" id="name" class="text" placeholder="Your name" tabindex=3 optional>
                <textarea name="message" id="message" class="message" placeholder="Want to add a message ?" tabindex=4 optional></textarea>
              </p>
            </div>
            <div id="wrap-recipient" class="wrap hide">
              <p>
                <input type="email" name="recipient" id="recipient" class="email" placeholder="Recipient e-mail" tabindex=5 required>
              </p>
            </div>
            <div id="wrap-submit" class="wrap hide">
              <p>
                Send
                <input type="submit" value="" name="upload" id="upload" tabindex=6>
              </p>
            </div>

          </div> <!-- inputs -->

          <img src="img/bottom.svg" id="down">
          <div id="comment"></div>
    </form>

    <div id="files"></div>



        <!-- SCRIPTS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <script type="text/javascript" src="js/event.js"></script>

    <script type="text/javascript">

        $(function(){ // JQuery open

              $("#select").focus();
              $("#select").val('');
              $("#mail-sender").val('');
              $("#name").val('');
              $("#message").val('');
              $("#recipient").val('');


              var wrap = 0;

              var up = document.getElementById("up");
              up.addEventListener('mouseover', function (){
                if (wrap > 0) {
                  hideWrap(wrap);
                  wrap--;
                  showWrap(wrap);
                }
              });

              var select = document.getElementById("select");
              var mailSender = document.getElementById("mail-sender");
              var recipient = document.getElementById("recipient");
              var down = document.getElementById("down");
              var okWrap = false;
              down.addEventListener('mouseover', function (){
                switch (wrap) {
                  case 0:
                    if (select.files.length > 0) okWrap = true;
                    else okWrap = false;
                    break;
                  case 1:
                    if ($("#mail-sender").is(':valid')) okWrap = true;
                    else okWrap = false;
                    break;
                  case 3:
                    if ($("#recipient").is(':valid')) okWrap = true;
                    else okWrap = false;
                    break;
                  case 4:
                    okWrap = false;
                }
                if (okWrap) {
                  hideWrap(wrap);
                  wrap++;
                  showWrap(wrap);
                }
              });

              var inputs = document.getElementsByClassName('wrap');
              function hideWrap(wrap) {
                inputs[wrap].className = 'wrap hide';
              }
              function showWrap(wrap) {
                inputs[wrap].className = 'wrap show';
              }

        }); // JQuery close
    </script>

</body>

</html>
