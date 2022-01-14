<?php
require ($_SERVER['DOCUMENT_ROOT']."/vajko/Model/user.php");
class userDB {

    public static function insertUser(User $user, PDO $con) {
        $name = $user->getUsername();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $stmt = $con->prepare("INSERT INTO users (username,email,password,registration_date) values(?,?,?,now())");
        try {
            $stmt->execute([$name, $email, $password]);
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }


}