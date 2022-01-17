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
    <link rel="stylesheet" href="css/newsletter.css"/>
    <script src="plugins/toast/jquery.toast.min.js"></script>
    <link rel="stylesheet" href="plugins/toast/jquery.toast.min.css"/>
    <script src="js/forms.js"></script>

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


<div class="row mx-auto mt-3">
    <div class="col col-md-4 mx-auto">
        <div class="card border-dark bg-light mb-3">
            <div class="card-header">Newsletter signup</div>
            <div class="card-body">
                <h5 class="card-title">Ready to get serious about your surface cleanliness?</h5>
                <p class="card-text">Subscribe to our newsletter and get 10% off your next cleaning!</p>
                <form method="POST" onsubmit="return false" id="news-form">
                    <div class="row  mt-3 mb-1">
                        <div class="col-md-7  mx-auto news-input" id="name-input">
                            <input type="text" class="form-control name-input" placeholder="Name" id="name" required>
                        </div>
                    </div>
                    <div class="row  mb-3">
                        <div class="col-md-7  mx-auto news-input" id="email-input">
                            <input type="email" class="form-control email-input" placeholder="Email address" id="mail"
                                   required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-7 mx-auto text-center">
                            <button type="submit" onclick="newsletterSignUp()" class="btn btn-block btn-outline-dark"
                                    value="Subscribe">Subscribe
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>

</body>
</html>

