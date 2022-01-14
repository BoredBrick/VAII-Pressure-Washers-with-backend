<?php

require "App.php";
$app = new App();

$errors = [];
$data = [];


if (empty($_POST['mail'])) {
    $errors['mail'] = 'Email is required.';
}

if (empty($errors)) {
    if (!$app->isEmailValid($_POST["mail"])) {
        $errors['mail'] = "Email not valid";
    }

    if (empty($errors)) {
        if(!$app->removeNewsLetter($_POST["mail"])) {
            $errors['mail'] = "Email not subscribed";
        }
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