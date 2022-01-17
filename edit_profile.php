<?php
require "Controller/App.php";
$app = new App();
session_start();
if (!$_SESSION["loggedin"]) {
    header("Location:index.php");
}
$name = filter_var ($_SESSION['username'], FILTER_SANITIZE_STRING);
$mail = filter_var ($app->getMail($name), FILTER_SANITIZE_EMAIL);
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
    <link rel="stylesheet" href="css/edit_profile.css"/>
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
<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-8 mx-auto">
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form onsubmit="return false">
                        <input hidden id='id' value="<?php echo $id ?>">
                        <div class="mb-3 input name-div">
                            <label class="small mb-1 " for="input-name">Username </label>
                            <input class="form-control" id="input-name" type="text" placeholder="Enter your username"
                                   value="<?php echo $name ?>">
                        </div>
                        <div class="mb-3 input mail-div">
                            <label class="small mb-1 " for="input-mail">Email address</label>
                            <input class="form-control" id="input-mail" type="email"
                                   placeholder="Enter your email address" value="<?php echo $mail ?>">
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6 input pass-div">
                                <label class="small mb-1 " for="input-pass">Password</label>
                                <input class="form-control" id="input-pass" type="password"
                                       placeholder="Enter your new password">
                            </div>
                            <div class="col-md-6 input pass-check-div">
                                <label class="small mb-1" for="input-pass-check">Confirm Password</label>
                                <input class="form-control" id="input-pass-check" type="password" name="birthday"
                                       placeholder="Confirm your new password">
                            </div>
                        </div>
                        <button class="btn btn-primary" onclick="editUser()" type="button">Save changes</button>
                        <button class="btn btn-danger pull-right" data-bs-toggle="modal" data-bs-target="#modalFormDel" type="button">Delete profile
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalFormDel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDel">Delete your profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="reg-form" onsubmit="return false" method="POST">
                    <p>To delete your profile, input your password down below. This action is irreversible.</p>
                    <div class="mb-3" id="del-pass-input">
                        <input type="password" class="form-control input" id="del-pass" name="del-pass"
                               placeholder="Password" required/>
                    </div>
                    <div class="">
                        <button type="submit" onclick="deleteUser()" class="btn btn-danger float-end">Delete profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include("footer.php") ?>
</body>