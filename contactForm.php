<?php

require "DBStorage.php";

if($_POST) {
    $storage = new DBStorage();
    $mail = new Email();
    $mail->name = $_POST["name"];
    $mail->subject = $_POST["subject"];
    $mail->email = $_POST["email"];
    $mail->message = $_POST["message"];
    $storage->insertEmail($mail);
    header("Location: contact.php?mailsend");
}

