<?php
require "App.php";
$app = new App();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <script type = "text/javascript" src="js/script.js"></script>

    <title>PowerWashers</title>
</head>
<body>
<?php include("header.html") ?>

    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-md-12 col-lg-6 map-column"><div id="map"></div></div>
          <script
                  async
                  defer
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC48-Hcs0h5FaXDkrw76EUufFJnMI_om-Y&callback=initMap"
          ></script>

          <?php
          $mailErr = $nameErr = $messageErr = $subjectErr =  '';
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if(isset($_POST["send-mail"])){
                  if(!isset($_POST["name"])) {
                      $nameErr = "Name field must not be empty";
                  }
                  if(!isset($_POST["subject"])) {
                      $subjectErr = "Subject field must not be empty";
                  }
                  if(!isset($_POST["mail"])) {
                      $mailErr = "Mail field must not be empty";
                  }
                  if(!isset($_POST["message"])) {
                      $messageErr = "Message field must not be empty";
                  }
                  if($mailErr == '' && $nameErr == '' && $subjectErr == '' && $messageErr == '') {
                      if(!$app->isNameValid($_POST["name"])) {
                          $nameErr = "Invalid name";
                      }
                      if(!$app->isEmailValid($_POST["mail"])) {
                          $mailErr = "Invalid mail";
                      }
                      if($nameErr == '' && $mailErr == '') {
                          $email = new Email($_POST["name"], $_POST["subject"], $_POST["mail"], $_POST["message"]);
                          if($app->insertEmail($email)) { ?>
                              <script>
                              alert("Email has been sent");
                              </script>
                          <?php } else { ?>
                              <div class="alert alert-warning" role="alert"> An error occured. </div>
                          <?php }
                      }
                  }
              }
          }

          ?>

        <div class="col-md-12 col-lg-6 contact-form">
          <h2>Contact us</h2>
          <form class="contact-form" name="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <input type="text" name="name" placeholder="&#xF007;  Name" required />
              <span class="error"><?php echo $nameErr;?></span>
          <input type="text" name="subject" placeholder="&#xF0e0;  Subject" required />
              <span class="error"><?php echo $subjectErr;?></span>
          <input type="email" name="mail" placeholder="&#xF0e0; Email"  required/>
              <span class="error"><?php echo $mailErr;?></span>

          <textarea
            cols="30"
            rows="10"
            placeholder="Enter your message"
            name = "message"
            required
          ></textarea>
              <span class="error"><?php echo $messageErr;?></span>
          <br />
            <button type="submit" class="btn btn-dark" name="send-mail">SEND MAIL</button>
          </form>
        </div>
      </div>
    </div>

<?php include("footer.php") ?>
  </body>
</html>
