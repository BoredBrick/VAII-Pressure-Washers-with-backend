<?php

require($_SERVER['DOCUMENT_ROOT'] . "/vajko/DB/DBStorage.php");
require($_SERVER['DOCUMENT_ROOT'] . "/vajko/Controller/Validator.php");

class App {
    private $storage;
    private $validator;

    public function __construct() {

        $this->storage = new DBStorage();
        $this->validator = new Validator();

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

    public function equalPasswords(string $pass1, string $pass2) {
        return $this->validator->equalPasswords($pass1, $pass2);
    }

    public function passLength(string $pass) {
        return $this->validator->passLength($pass);
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

    public function checkForUser(string $name) {
        return $this->storage->checkForUser($name);
    }

    public function verifyPassword(string $name, string $pass) {
        return $this->storage->verifyPassword($name, $pass);
    }

    public function loggedIn() {
        return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true;
    }

    public function getMail(string $name) {
        return $this->storage->getMail($name);
    }

    public function getID(string $name) {
        return $this->storage->getID($name);
    }

    public function updateName(string $name, int $id) {
        return $this->storage->updateName($name, $id);
    }

    public function updateMail(string $mail, int $id) {
        return $this->storage->updateMail($mail, $id);


    }

    public function updatePassword(string $pass, int $id) {
        return $this->storage->updatePassword($pass, $id);

    }

}