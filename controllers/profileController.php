<?php

require_once APP_PATH . "/models/model.php";
require_once APP_PATH . "/tools/validator.php";

function showProfile()
{
    if (isLoggedIn()) {
        $user = getById("user", getSession("user_id", 0));
        render("user.profile", compact("user"));
    } else {
        http_response_code(401);
        render("error.401");
    }
}

function getEditProfile()
{
    if (isLoggedIn()) {
        $user = getById("user", getSession("user_id", 0));
        render("user.profile-edit", compact("user"));
    } else {
        http_response_code(401);
        render("error.401");
    }
}

function editProfile()
{
    if (isLoggedIn()) {
        $user = getById("user", getSession("user_id", 0));
        $username = $_POST["username"];
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $invalidField = getInvalidFieldValue($username, $fullname, $email);
        if (
            $username == $user["username"] &&
            $fullname == $user["fullname"] &&
            $email == $user["email"]
        ) {
            $message = [
                "type" => "warning",
                "body" => "No change to submit"
            ];
        } else {
            $user["username"] = $username;
            $user["fullname"] = $fullname;
            $user["email"] = $email;
            if (!is_null($invalidField)) {
                $message = [
                    "type" => "danger",
                    "body" => "Invalid values. $invalidField's value is invalid!"
                ];
            } else {
                editById("user", $user["id"], $user);
                $message = [
                    "type" => "success",
                    "body" => "Your profile has been apdated successefelly!"
                ];
            }
        }
        render("user.profile-edit", compact("user", "message"));
    } else {
        http_response_code(401);
        render("error.401");
    }
}

function getEditPassword()
{
    if (isLoggedIn()) {
        render("user.profile-edit-password");
    } else {
        http_response_code(401);
        render("error.401");
    }
}

function editPassword()
{
    if (isLoggedIn()) {
        $user = getById("user", getSession("user_id", 0));
        $newPassword = $_POST["new_password"];
        $oldPassword = hash("sha256", $_POST["old_password"]);
        $confirmPassword = $_POST["confirm_password"];
        $passError = getPassError($user["password"], $oldPassword, $newPassword, $confirmPassword);
        if (!is_null($passError)) {
            $message = ["type" => "danger", "body" => $passError];
        } else {
            $message = ["type" => "success", "body" => "Updated successfully!"];
            $user["password"] = hash("sha256", $newPassword);
            $newPassword = $confirmPassword = null;
            editById("user", $user["id"], $user);
        }
        render("user.profile-edit-password", compact("message", "newPassword", "confirmPassword"));
    } else {
        http_response_code(401);
        render("error.401");
    }
}

function deleteProfile()
{
    if (isLoggedIn()) {
        $user = getById("user", getSession("user_id", 0));
        deleteById("user", $user["id"]);
        clearSession();
        redirect("/");
    } else {
        http_response_code(401);
        render("error.401");
    }
}
