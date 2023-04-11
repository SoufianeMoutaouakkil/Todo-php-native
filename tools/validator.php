<?php

function isValideUsername($subject, $min = 5, $max = 20)
{
    $preg = "/^[a-zA-Z_]{" . $min . "," . $max . "}$/";
    return 1 === preg_match($preg, $subject);
}

function isValideEmail($email)
{
    return (boolean) filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isValideName($subject, $min = 5, $max = 20)
{
    $preg = "/^[a-zA-Z ]{" . $min . "," . $max . "}$/";

    return 1 === preg_match($preg, $subject);
}

function isValidePassword($subject, $min = 5, $max = 20)
{
    $preg = "/^[a-zA-Z_-]{" . $min . "," . $max . "}$/";

    return 1 === preg_match($preg, $subject);
}

function getInvalidFieldValue($username, $fullname, $email): ?string
{
    if (!isValideUsername($username)) {
        $error = "Username";
    } elseif (!isValideEmail($email)) {
        $error = "E-mail";
    } elseif (!isValideName($fullname)) {
        $error = "Full name";
    }

    return $error ?? null;
}

function getPassError($pass, $oldPass, $newPass, $confirmPass): ?string
{
    if ($pass !== $oldPass) {
        $error = "Invalid password!";
    } elseif (!isValidePassword($newPass)) {
        $error = "The new password is invalid!";
    } elseif ($newPass !== $confirmPass) {
        $error = "The confirm password doesn't match the new password!";
    }

    return $error ?? null;
}

function getUserError($user)
{
    $fieldError = getInvalidFieldValue($user["username"], $user["fullname"], $user["email"]);
    if (!is_null($fieldError)) {
        $message = [
            "type" => "danger",
            "body" => "Invalid values. $fieldError's value is invalid!"
        ];
    } elseif (!isValidePassword($user["password"])) {
        $message = [
            "type" => "danger",
            "body" => "Invalid password!"
        ];
    } elseif ($user["password"] !== $user["confirm_password"]) {
        $message = [
            "type" => "danger",
            "body" => "The confirm password doesn't match the password!"
        ];
    }

    return $message ?? null;
}
