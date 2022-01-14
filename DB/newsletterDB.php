<?php

class newsletterDB {

    public static function insertNewsletter(string $email, string $name, PDO $con) {
        $stmt = $con->prepare("INSERT INTO newsletter (email,name) values(?,?)");
        try {
            $stmt->execute([$email, $name]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function removeNewsletter(string $email, PDO $con) {
        $stmt = $con->prepare("DELETE FROM newsletter WHERE email = ?");
        $stmt->execute([$email]);
        $count = $stmt->rowCount();
        return ($count > 0);
    }

}
