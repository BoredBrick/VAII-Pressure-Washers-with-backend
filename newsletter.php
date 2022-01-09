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
    <link rel="stylesheet" href="css/newsletter.css" />
    <script type = "text/javascript" src="js/script.js"></script>

    <title>PowerWashers</title>
</head>
<body>
<?php include("header.html") ?>


<?php
$mailErr = $nameErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["subscribe"])){
        if(isset($_POST["mail"]) && isset($_POST["name"])) {
            if (!$app->isEmailValid($_POST["mail"])) {
                $mailErr = "Email not valid";
            }
            if (!$app->isNameValid($_POST["name"])) {
                $nameErr = "Invalid name";
            }
            if($mailErr == '' && $nameErr == '') {
                if (!$app->insertNewsletter($_POST["mail"], $_POST["name"])) { ?>
                    <div class="alert alert-warning" role="alert"> Mail already registered. </div>
                <?php } else {?>
                    <script>
                        alert("You have successfully signed up for our newsletter");
                    </script>
            <?php }
            }

        } else { ?>
            <div class="alert alert-warning" role="alert"> Fields must not be empty. </div>
        <?php }
        }
}
?>

<div class="container about-newsletter">
    <section class="news-cont">
    <h1 class="news-text">Ready to get</h1>
    <h1 class="news-text">serious about your</h1>
    <h1 class="news-text">surface cleanliness?</h1>
    </section>
    <p>Subscribe to our newsletter and get 10% off your next cleaning!</p>
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <section class="news-sect">
        <div class="container news-input" >
            <input type="text" placeholder="Name" name="name" required>
        </div>
        <div class="container news-input">
            <input type="text" placeholder="Email address" name="mail" required>
        </div>
        <span class="error"><?php echo $nameErr;?></span>
        <span class="error"><?php echo $mailErr;?></span>
        <div class="container">
            <button type="submit" class="btn btn-outline-dark" value="Subscribe" name="subscribe">Subscribe</button>
        </div>
        </section>
    </form>
</div>

<<?php include("footer.php") ?>

</body>
</html>

