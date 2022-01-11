<?php

require "App.php";
$app = new App();

$errors = [];
$data = [];


if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}

if (empty($_POST['mail'])) {
    $errors['email'] = 'Email is required.';
}

if (isset($_POST["mail"]) && isset($_POST["name"])) {
    if (!$app->isEmailValid($_POST["mail"])) {
        $errors['email'] = "Email not valid";
    }
    if (!$app->isNameValid($_POST["name"])) {
        $errors['name'] = "Invalid name";
    }
    if(empty($errors)) {
        if(!$app->insertNewsletter($_POST["mail"], $_POST["name"])) {
            $errors['mail'] = "Email already registered";
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