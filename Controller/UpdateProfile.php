<?php
session_start();
require "App.php";
$app = new App();

$errors = [];
$data = [];


if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}

if (!empty($_POST['name']) && $app->checkForUser($_POST['name']) && ($_POST['name'] != $_SESSION['username']) ) {
    $errors['name'] = 'Name already taken.';
}

if (empty($_POST['mail'])) {
    $errors['mail'] = 'Email is required.';
}
if (empty($_POST['password']) && !empty($_POST['passwordConfirm'])) {
    $errors['password'] = 'Password is required.';
}

if (!empty($_POST['password']) && empty($_POST['passwordConfirm'])) {
    $errors['passwordConfirm'] = 'Password confirmation is required.';
}

if (empty($errors)) {
    if (!$app->isEmailValid($_POST["mail"])) {
        $errors['mail'] = "Email not valid";
    }
    if (!$app->isNameValid($_POST["name"])) {
        $errors['name'] = "Invalid name";
    }

    if(!empty($_POST['password']) && !empty($_POST['passwordConfirm'])) {

        if (!$app->equalPasswords($_POST["password"], $_POST["passwordConfirm"])) {
            $errors['password'] = "Passwords do not match";
        }

        if (!$app->passLength($_POST["password"]) && empty($errors['password'])) {
            $errors['password'] = "Password must have at least 5 characters";
        }

    }

    if (empty($errors)) {
        $app->updateName($_POST["name"], $_POST["id"]);
        $app->updateMail($_POST["mail"], $_POST["id"]);
        $_SESSION['username'] = $_POST["name"];
        if(!empty($_POST['password'])) {
            $hashed_pass = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $app->updatePassword($hashed_pass, $_POST["id"]);
        }
    }

}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
}

echo json_encode($data);