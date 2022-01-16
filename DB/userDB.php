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

    public static function getMail(string $name, PDO $con) {
        $stmt = $con->prepare("SELECT email FROM users WHERE username=:name");
        $stmt->bindParam(":name", $name);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public static function getID(string $name, PDO $con) {
        $stmt = $con->prepare("SELECT id FROM users WHERE username=:name");
        $stmt->bindParam(":name", $name);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public static function updateName(string $name, int $id, PDO $con) {
        $stmt = $con->prepare("UPDATE users set username=:name WHERE id=:id");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
    public static function updatePassword(string $pass, int $id, PDO $con) {
        $stmt = $con->prepare("UPDATE users set password=:pass WHERE id=:id");
        $stmt->bindParam(":pass", $pass);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    public static function updateMail(string $mail, int $id, PDO $con) {
        $stmt = $con->prepare("UPDATE users set email=:mail WHERE id=:id");
        $stmt->bindParam(":mail", $mail);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    public static function deleteUser(int $id, PDO $con) {
        $stmt = $con->prepare("DELETE from users WHERE id=:id");
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

}