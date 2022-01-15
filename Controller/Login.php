<?php
session_start();
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
if (empty($errors)) {

    if (!$app->isNameValid($_POST["name"])) {
        $errors['name'] = "Invalid name";
    }

    if(!$app->checkForUser($_POST["name"]) && empty($errors["name"])) {
        $errors['name'] = "User not found";

    }
    if(!$app->verifyPassword($_POST["name"], $_POST["password"]) && empty($errors["name"])) {
        $errors['password'] = "Password is not correct";
    }

}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Success!';
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $_POST["name"];
}

echo json_encode($data);