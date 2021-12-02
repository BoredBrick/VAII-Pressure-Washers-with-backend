<?php

require "DBStorage.php";

if(isset($_POST["addNews"])) {
    $storage = new DBStorage();

    $name = $_POST["name"];
    $email = $_POST["mail"];
    $storage->insertNewsletter($email, $name);
    header("Location: newsletter.php?signUpOK");
}


if(isset($_POST["unsub"]))  {
    $storage = new DBStorage();
    $email = $_POST["mail"];
    $storage->removeNewsletter($email);
    header("Location: newsletter.php?signUpOK");
}
