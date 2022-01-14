<?php

require($_SERVER['DOCUMENT_ROOT'] . "/vajko/DB/DBStorage.php");
require ($_SERVER['DOCUMENT_ROOT'] ."/vajko/Controller/Validator.php");

class App {
    private $storage;
    private $validator;

    public function __construct() {

        $this->storage = new DBStorage();
        $this->validator = new Validator();

        if (isset($_REQUEST["contact-form"])) {
            $mail = new Email();
            $mail->name = $_POST["name"];
            $mail->subject = $_POST["subject"];
            $mail->email = $_POST["email"];
            $mail->message = $_POST["message"];
            $this->storage->insertEmail($mail);
            header("Location: contact.php?mailsend");
        }

    }

    public function getVisitors() {
        return $this->storage->getVisitors();
    }

    public function updateVisitors() {
        $this->storage->updateVisitors();
    }

    public function isEmailValid(string $email) {
        return $this->validator->isEmailValid($email);
    }

    public function isNameValid(string $name) {
        return $this->validator->isNameValid($name);
    }

    public function equalPasswords(string $pass1, string $pass2){
        return $this->validator->equalPasswords($pass1, $pass2);
    }

    public function removeNewsLetter(string $email) {
        return $this->storage->removeNewsletter($email);
    }

    public function insertNewsletter(string $email, string $name) {
        return $this->storage->insertNewsletter($email, $name);
    }

    public function insertEmail(Email $email) {
        return $this->storage->insertEmail($email);
    }

    public function insertUser(User $user) {
        return $this->storage->insertUser($user);
    }
}