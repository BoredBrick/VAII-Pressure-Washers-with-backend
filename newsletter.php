<?php
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
    <script src="js/forms.js"
    "></script>

    <title>PowerWashers</title>
</head>
<body>
<?php include("header.html") ?>
<div class="container about-newsletter">
    <section class="news-cont">
        <h1 class="news-text">Ready to get</h1>
        <h1 class="news-text">serious about your</h1>
        <h1 class="news-text">surface cleanliness?</h1>
    </section>
    <p>Subscribe to our newsletter and get 10% off your next cleaning!</p>

    <div class="container mx-auto form-cont">
        <form method="POST" onsubmit="return false" id="news-form"
            <div class="row  mb-3">
                <div class="col-sm-3 har-error mx-auto news-input" id="name-input">
                    <input type="text" class="form-control name-input" placeholder="Name" id="name"  required>
                </div>
            </div>
            <div class="row  mb-3">
                <div class="col-sm-3 mx-auto news-input" id="email-input">
                    <input type="email" class="form-control email-input" placeholder="Email address" id="mail"  required>
                </div>
            </div>
            <div class="container">
                <button type="submit" class="btn btn-outline-dark" value="Subscribe"
                        onclick="newsletterSignUp()">Subscribe
                </button>
            </div>
        </form>
    </div>

</div>

<<?php include("footer.php") ?>

</body>
</html>

