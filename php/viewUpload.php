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

    <form method="POST" action="confirm.php" target="#modal" id="slide">
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
    </form>

    <div id="files"></div>


        <!-- SCRIPTS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <script type="text/javascript" src="js/event.js"></script>

    <script type="text/javascript">

        $(function(){ // JQuery open

              $("#select").focus();

        }); // JQuery close
              var wrap = 0;

              var up = document.getElementById("up");
              up.addEventListener('mouseover', function (){
                console.log("up");
                if (wrap > 0) {
                  hideWrap(wrap);
                  wrap--;
                  showWrap(wrap);
                }
              });

              var down = document.getElementById("down");
              down.addEventListener('mouseover', function (){
                console.log("down");
                if (wrap < 4) {
                  hideWrap(wrap);
                  wrap++;
                  showWrap(wrap);
                }
              });

              var inputs = document.getElementsByClassName('wrap');
              function hideWrap(wrap) {
                inputs[wrap].className = 'wrap hide';
                console.log("hide" + wrap);
              }
              function showWrap(wrap) {
                inputs[wrap].className = 'wrap show';
                console.log("show" + wrap);
              }


    </script>


         <!-- <script type="text/javascript">
        //     $(function() {  // jquery start
        //       // Focus on file input
        //       $("#select").focus();
        //
        //       $("#slide").on({
        //         mouseenter: function () {
        //           var pos'-50em'
        //            $("#inputs").css('top', pos).fade;
        //         }
        //         // mouseleave:function () {
        //         //    $(this).css('border', 'none');
        //         // }
        //       },'#up');

              // $('#up').hover(function() {
              //   alert(0);
              //   $(this).css('src', 'img/bottom.svg');
              //   // var pos = $('#inputs').css('top');
              //   // alert(pos);
              //   // pos = pos.replace('px', '');
              //   // $('#inputs').css('top', pos + 25 + 'px');
              // });
              // $('#inputs').on('click keypress', function(e) {
              //   if ( (e.keyCode==9) && !($('#name').focus()) ){
              //     e.preventDefault;
              //     $('#inputs').css('top', 25 + "em");
              //     console.log($('#inputs').offset.top);
              //     console.log($('#inputs').css('top'));
              //   }
              // });
              // var pos = 0;
              // var dir = -1;
              // var step = 50;
              // $('body').bind('keypress', function(e) {
              //   alert($('#inputs').css("top") + " " + $('#inputs').offset.top);
                  // if ( (e.keyCode==9) && !($('#name').focus()) ){
                  //   e.preventDefault;
                  //   if ($('#select').focus()) {
                  //     pos = 1;
                  //   }
                  //   if ($('#mail-sender').focus()) {
                  //     pos = 2;
                  //   }
                  //   if ($('#message').focus()) {
                  //     pos = 3;
                  //   }
                  //   if ($('#select').focus()) {
                  //     pos = 4;
                  //   }
                  //
                  //   if (e.shiftKey) {
                  //     dir = -1;
                  //   }
                  //   else {
                  //     dir = 1;
                  //   }
                  //   var move = (pos + dir) * step + "em";
                  //   $('#inputs').css("top", move);
                  // }
              // });

          }); // JQuery end
        </script> -->
</body>

</html>
