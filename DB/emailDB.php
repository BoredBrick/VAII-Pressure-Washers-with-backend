<?php
require ($_SERVER['DOCUMENT_ROOT']."/vajko/Model/Email.php");
class emailDB {

    public static function insertEmail(Email $email, PDO $con) {
        $name = $email->getName();
        $subject = $email->getSubject();
        $mail = $email->getEmail();
        $message = $email->getMessage();
        $stmt = $con->prepare("INSERT INTO emails (name,subject,email,message) values(?,?,?,?)");
        return $stmt->execute([$name,$subject,$mail,$message]);
    }


}