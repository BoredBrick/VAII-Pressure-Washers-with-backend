<?php

class Validator {

    public function isEmailValid(string $email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        return filter_var($email, FILTER_VALIDATE_EMAIL);

    }

    public function isNameValid(string $name) {
        return ctype_alpha($name);
    }
}