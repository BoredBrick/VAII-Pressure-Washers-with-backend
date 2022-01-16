<?php
session_start();
require "App.php";
$app = new App();

$errors = [];
$data = [];


if(!$app->verifyPassword($_SESSION["username"], $_POST["password"])) {
    $errors['password'] = "Password is not correct";
}
if (empty($errors)) {
    $app->deleteUser($_POST['id']);
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    unset($_SESSION["username"]);
    unset($_SESSION["loggedin"]);
}
echo json_encode($data);

