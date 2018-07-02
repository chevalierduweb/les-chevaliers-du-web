<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Les chevaliers du web ||</title>
    <link rel="shortcut icon" type="image/x-icon" href="img\7441Knight_Crusader-512.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css\style.css">
  </head>
  <body>

    <!--Start Header-->
    <header>


      <!--Title-->

        <div class="container">
          <div class="row">
            <div class="col-md-8 col-xs-6 title1">
              <h1>Les chevaliers du web</h1>
            </div>
            <div class="col-md-4 col-xs-6 knight">
              <img src="img/commu.png" alt="dessin chevalier" width="90%">
            </div>
          </div>
        </div>

        <!--Contact-form-->
        <div class="container block-count">

              <div id="countdown"></div>

        </div>

        <!--Contact-form-->
        <?php
        if(isset($_POST['submit'])){
          $to = "jo-brasier@outlook.com";
          $from = "contact@jbrasier.fr";
          $last_name = $_POST['nom'];
          $mail = $_POST['email'];
          $subject = utf8_decode($_POST['objet']);
          date_default_timezone_set("Europe/Paris");
          $date = date("d/m/Y");
          $hour = date("G:i");
          $message = htmlspecialchars(utf8_decode($date . " " . $hour . "\n\n" . $last_name . " " . "\n\n" . $mail . "\n\n" . $subject . "\n\n" . $_POST['message']));

          $headers = "From:" . $from;
          mail($to,$subject,$message,$headers);

          echo "<div class=\"container\"><div class=\"row\"><div class=\"alert alert-success\" role=\"alert\">Votre message a bien été envoyé, merci!</div></div></div>";
        }
        ?>


        <div class="container contact">
      <div class="row">
        <div class="col-md-6 left-contact">
          <h2>Nous contacter</h2>
        </div>
          <div class="col-md-6 form-contact">
            <form name="Form" action="" method="POST" onsubmit="return validateForm()">
              <input class="form-control" type="text" id="Nom" name="nom" placeholder="Nom" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="right" data-content="Votre nom">
              <input class="form-control" type="text" id="Établissement" name="etablissement" placeholder="Nom de l'établissement" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="right" data-content="Votre établissement">
              <input class="form-control" type="email" name="email" placeholder="Adresse e-mail" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="right" data-content="Votre adresse e-mail">
              <input class="form-control" type="text" name="objet" placeholder="Objet du message" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="right" data-content="L'objet de votre message">
              <textarea class="form-control" name="message" placeholder="Message" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="right" data-content="Votre message"></textarea>
              <button type="reset" name="reset" class="btn reset-btn reset-btn btn-danger">Vider</button>
              <button type="submit" name="submit" class="btn submit-btn btn-info" name="envoyer">Envoyer</button>
            </form>
          </div>
      </div>
    </div>


    </header>


    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>

    <script src="js\main.js"></script>


  </body>
</html>
