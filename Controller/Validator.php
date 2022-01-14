<?php

class Validator {

    public function isEmailValid(string $email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);

    }

    public function isNameValid(string $name) {
        return ctype_alpha($name);
    }

    public function sanitizeString(string $name) {
        return filter_var($name, FILTER_SANITIZE_STRING);
    }

    public function equalPasswords(string $pass1, string $pass2) {
        return $pass1 == $pass2;
    }

    public function passLength(string $pass) {
        return strlen($pass) > 4;
    }


}