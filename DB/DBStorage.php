<?php
require($_SERVER['DOCUMENT_ROOT'] . "/vajko/DB/emailDB.php");
require($_SERVER['DOCUMENT_ROOT'] . "/vajko/DB/newsletterDB.php");
require($_SERVER['DOCUMENT_ROOT'] . "/vajko/DB/visitorsDB.php");
require($_SERVER['DOCUMENT_ROOT'] . "/vajko/DB/userDB.php");

class DBStorage {

    private PDO $con;

    public function __construct() {
        try {
            $this->con = new PDO("mysql:host=localhost;dbname=powerWashers;charset=utf8", "root", "dtb456");
            $this->con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Chyba:* " . $e->getMessage());
        }
    }

    public function insertEmail(Email $email) {
        return emailDB::insertEmail($email, $this->con);
    }

    public function insertNewsletter(string $email, string $name) {
        return newsletterDB::insertNewsletter($email, $name, $this->con);
    }

    public function removeNewsletter(string $email) {
        return newsletterDB::removeNewsletter($email, $this->con);
    }

    public function getVisitors() {
        return visitorsDB::getVisitors($this->con);
    }

    public function updateVisitors() {
        visitorsDB::updateVisitors($this->con);
    }

    public function insertUser(User $user) {
        return userDB::insertUser($user, $this->con);
    }

    public function checkForUser(string $name) {
        return userDB::checkForUser($name, $this->con);
    }

    public function verifyPassword(string $name, string $pass) {
        return userDB::verifyPassword($name, $pass, $this->con);
    }

    public function getMail(string $name) {
        return userDB::getMail($name, $this->con);
    }

    public function getID(string $name) {
        return userDB::getID($name, $this->con);
    }

    public function updateName(string $name, int $id) {
        return userDB::updateName($name, $id, $this->con);
    }

    public function updateMail(string $mail, int $id) {
        return userDB::updateMail($mail, $id, $this->con);
    }

    public function updatePassword(string $pass, int $id) {
        return userDB::updatePassword($pass, $id, $this->con);
    }

    public function deleteUser(int $id) {
        return userDB::deleteUser($id, $this->con);
    }

    public function getEmails() {
        return emailDB::getEmails($this->con);
    }

}