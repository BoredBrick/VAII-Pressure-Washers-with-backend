<?php
session_start();

require "Controller/App.php";
$app = new App();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
    <script src="js/forms.js"></script>
    <script src="js/map.js"></script>
    <script src="plugins/toast/jquery.toast.min.js"></script>
    <link rel="stylesheet" href="plugins/toast/jquery.toast.min.css"/>
    <link rel="stylesheet" href="css/contact_us.css"/>

    <title>PowerWashers</title>
</head>
<body>
<?php
if ($app->loggedIn()) {
    include("header_logged_in.php");
} else {
    include("header.php");
}
?>
<div class="container  text-center">
    <div class="row ">
        <div class="col-xs-12 col-xl-6 map-column">
            <div id="map"></div>
        </div>
        <script
                async
                defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC48-Hcs0h5FaXDkrw76EUufFJnMI_om-Y&callback=initMap"
        ></script>

        <div class="col-xs-12 col-xl-6 contact-form">
            <h2>Contact us</h2>
            <form class="contact-form " id="form-cont" onsubmit="return false" name="contact-form" method="POST">

                <div class="row mb-3">
                    <div class="col-md-6 mx-auto name-input" id="name-input">
                        <input type="text" class="form-control" name="name" id="name" placeholder="&#xF007;  Name"
                               required/>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6  mx-auto" id="subject-input">
                        <input type="text" class="form-control" name="subject" id="subject"
                               placeholder="&#xF0e0;  Subject"
                               required/>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6  mx-auto" id="email-input">
                        <input type="email" class="form-control" name="mail" id="mail" placeholder="&#xF0e0; Email"
                               required/>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 mx-auto" id="message-input">
                             <textarea
                                     class="form-control"
                                     cols="30"
                                     rows="10"
                                     placeholder="Enter your message"
                                     name="message"
                                     id="message"
                                     required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <button type="submit" onclick="sendEmail()" class="btn btn-dark" name="send-mail">SEND MAIL
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("footer.php") ?>
</body>
</html>
