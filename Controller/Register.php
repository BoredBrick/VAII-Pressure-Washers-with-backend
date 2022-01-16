<?php
require "App.php";
session_start();
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


    if (!$app->equalPasswords($_POST["password"], $_POST["passwordConfirm"])) {
        $errors['password'] = "Passwords do not match";
    }

    if (!$app->passLength($_POST["password"]) && empty($errors['password'])) {
        $errors['password'] = "Password must have at least 5 characters";
    }

    if (empty($errors)) {
        $hashed_pass = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $user = new User(null, $_POST["name"], $hashed_pass, $_POST["mail"]);
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
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $_POST["name"];
}

echo json_encode($data);