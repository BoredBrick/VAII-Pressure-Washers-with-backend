<?php
require ($_SERVER['DOCUMENT_ROOT']."/vajko/Model/Email.php");
class emailDB {

    public static function insertEmail(Email $email, PDO $con) {
        $name = $email->getName();
        $subject = $email->getSubject();
        $mail = $email->getEmail();
        $message = $email->getMessage();
        $stmt = $con->prepare("INSERT INTO emails (name,subject,email,message, date_sent) values(?,?,?,?,now())");
        return $stmt->execute([$name,$subject,$mail,$message]);
    }

    public static function getEmails(PDO $con):array {
        $stmt = $con->prepare("SELECT * FROM emails");
        $stmt->execute();
        return $stmt->fetchAll();
    }


}