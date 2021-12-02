<?php
require "Email.php";
class DBStorage {

    private $con;
    public function __construct() {
        try {
            $this->con = new PDO("mysql:host=localhost;dbname=powerWashers","root","dtb456");
            $this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Chyba:* " . $e->getMessage());
        }
    }

    public function insertEmail(Email $email) {
        $name = $email->getName();
        $subject = $email->getSubject();
        $mail = $email->getEmail();
        $message = $email->getMessage();
        $stmt = $this->con->prepare("INSERT INTO emails (name,subject,email,message) values(?,?,?,?)");
        return $stmt->execute([$name,$subject,$mail,$message]);
    }

    public function insertNewsletter( string $email,string $name) {
        $stmt = $this->con->prepare("INSERT INTO newsletter (email,name) values(?,?)");
        try {
            $stmt->execute([$email, $name]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function removeNewsletter(string $email) {
        $stmt = $this->con->prepare("DELETE FROM newsletter WHERE email = ?");
        $stmt->execute([$email]);
        $count = $stmt->rowCount();
        return ($count > 0);
    }

    public function getVisitors() {
        $stmt = $this->con->prepare("SELECT * FROM visitors");
        $stmt->execute();
        $row =  $stmt->fetch();
        return $row["count"];
    }

    public function updateVisitors() {
        $this->con->prepare("UPDATE visitors SET count = count + 1")->execute();
    }

}