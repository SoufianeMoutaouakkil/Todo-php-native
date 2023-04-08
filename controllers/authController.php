<?php

require_once APP_PATH . "/models/model.php";

function getLogin()
{
    render("user.login");
}

function postLogin()
{
    $username = strtolower($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";
    $user = getByKeyValue("user", "username", $username)[0] ?? [];
    if (empty($user)) {
        $errorMessage = "This user doesn't exist!";
        $data = compact("username", "password", "errorMessage");
        render("user.login", $data);
    } elseif ($password == "" || $user["password"] !== hash("sha256", $password)) {
        $errorMessage = "This user's password is wrong!";
        $data = compact("username", "password", "errorMessage");
        render("user.login", $data);
    } else {
        setSession("user_id", $user['id']);
        setSession("username", $user['username']);
        redirect("/tasks");
    }
}

function logout()
{
    clearSession();
    header("location: /login");
}
