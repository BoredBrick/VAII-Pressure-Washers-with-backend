<?php
require "Controller/App.php";
$app = new App();
session_start();
if (!$_SESSION["loggedin"]) {
    header("Location:index.php");
}
$name = $_SESSION['username'];
$mail = $app->getMail($name);
$id = $app->getID($name);
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
    <link rel="stylesheet" href="css/view-mail.css"/>
    <script type="text/javascript" src="js/forms.js"></script>
    <script type="text/javascript" src="js/modals.js"></script>
    <script src="plugins/toast/jquery.toast.min.js""></script>
    <link rel="stylesheet" href="plugins/toast/jquery.toast.min.css"/>

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
<h2 class="your-mails">Your emails</h2>
<div class="container mt-5">
    <div class="accordion accordion-flush " id="accordion">
        <?php
        $emails = array_reverse($app->getEmails());
        foreach ($emails as $email) {
            $id = $email['id'];
            $message = filter_var ($email['message'], FILTER_SANITIZE_STRING);
            $subject = filter_var ($email['subject'], FILTER_SANITIZE_STRING);
            $name = filter_var ($email['name'], FILTER_SANITIZE_EMAIL);
            $mail = filter_var ($email['email'], FILTER_SANITIZE_STRING);
            echo '
        <div class="container col-6 mb-1  border-bottom">
            <div class="accordion-item ">
                 <h2 class="accordion-header " id="heading_' . $id . '">
                 <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_' . $id . '">
                        <div class="container  row">
                            <div class="container mx-auto col">
                                ' . $subject . '
                            </div>
                            <div class="container  col">
                                ' . $email['date_sent'] . '
                            </div>
                        </div>
                </button>
                </h2>
                <div id="collapse_' . $id . '" class="accordion-collapse collapse"  data-bs-parent="#accordion">
                    <div class="container">
                        <div class="container row">
                            <div class="accordion-body">
                                You have received an email from <strong> ' . $name . '. </strong><br> 
                                Their email address is <strong> ' . $mail . '</strong> <br>
                                <hr>
                                ' . $message . '
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        ';

        } ?>
    </div>
</div>


<?php include("footer.php") ?>

</body>