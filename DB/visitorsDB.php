<?php

class visitorsDB {

    public static function getVisitors(PDO $con) {
        $stmt = $con->prepare("SELECT * FROM visitors");
        $stmt->execute();
        $row =  $stmt->fetch();
        return $row["count"];
    }

    public static function updateVisitors(PDO $con) {
        $con->prepare("UPDATE visitors SET count = count + 1")->execute();
    }
}