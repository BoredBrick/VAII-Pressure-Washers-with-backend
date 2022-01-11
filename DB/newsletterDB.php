<?php
//session_start();



if (isset($_POST["addNews"])) {
    $storage = new DBStorage();

    $name = $_POST["name"];
    $email = $_POST["mail"];
    $storage->insertNewsletter($email, $name);
    header("Location: newsletter.php?signUpOK");
}


if (isset($_POST["unsub"])) {
    $storage = new DBStorage();
    $email = $_POST["mail"];
    $storage->removeNewsletter($email);
    header("Location: newsletter.php?signUpOK");
}
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
