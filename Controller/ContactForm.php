<?php

require "App.php";
$app = new App();

$errors = [];
$data = [];


if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}

if (empty($_POST['subject'])) {
    $errors['subject'] = 'Email is required.';
}

if (empty($_POST['mail'])) {
    $errors['mail'] = 'Email is required.';
}

if (empty($_POST['message'])) {
    $errors['message'] = 'Message is required.';
}

if (empty($errors)) {
    if (!$app->isEmailValid($_POST["mail"])) {
        $errors['email'] = "Email not valid";
    }
    if (!$app->isNameValid($_POST["name"])) {
        $errors['name'] = "Invalid name";
    }
    if (empty($errors)) {
        $email = new Email($_POST["name"], $_POST["subject"], $_POST["mail"], $_POST["message"]);
        if (!$app->insertEmail($email)) {
            $errors['mail'] = "Error sending email";
        };
    }
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
}

echo json_encode($data);