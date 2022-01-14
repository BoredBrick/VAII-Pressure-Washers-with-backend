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

    public static function checkForUser(string $name, PDO $con) {
        $stmt = $con->prepare("SELECT username FROM users WHERE username=:name");
        $stmt->bindParam(":name", $name);
        $stmt->execute();
        $count = $stmt->rowCount();
        return ($count > 0);
    }

    public static function verifyPassword(string $name, string $pass,PDO $con) {
        $stmt = $con->prepare("SELECT password FROM users WHERE username=:name");
        $stmt->bindParam(":name", $name);
        $stmt->execute();
        $hashed = $stmt->fetchColumn();
        return password_verify($pass, $hashed);
    }


}