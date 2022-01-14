<?php
require "App.php";
$app = new App();

$errors = [];
$data = [];


if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}

if (empty($_POST['password'])) {
    $errors['password'] = 'Password is required.';
}

if (empty($_POST['mail'])) {
    $errors['mail'] = 'Email is required.';
}
if (empty($errors)) {
    if (!$app->isEmailValid($_POST["mail"])) {
        $errors['mail'] = "Email not valid";
    }
    if (!$app->isNameValid($_POST["name"])) {
        $errors['name'] = "Invalid name";
    }
    if (!$app->equalPasswords($_POST["password"],$_POST["passwordConfirm"])) {
        $errors['password'] = "Passwords do not match";
    }

    if (empty($errors)) {
        $user = new User(null,$_POST["name"],password_hash($_POST["password"], PASSWORD_DEFAULT),$_POST["mail"]);
        if (!$app->insertUser($user)) {
            $errors['name'] = "Username already exists.";
        };
    }
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Success!';
}

echo json_encode($data);