<?php

require_once APP_PATH . "/models/model.php";

function getRegister()
{
    if (!isLoggedIn()) {
        render("user.register");
    } else {
        http_response_code(401);
        render("error.401");
    }
}

function postRegister()
{
    $user["username"] = $_POST["username"];
    $user["fullname"] = $_POST["fullname"];
    $user["email"] = $_POST["email"];
    $user["password"] = $_POST["password"];
    $user["confirm_password"] = $_POST["confirm_password"];
    $message = getUserError($user);
    if (is_null($message)) {
        $message = [
            "type" => "success",
            "body" => "Your account has been created successfully!"
        ];
        unset($user["confirm_password"]);
        $user["created_at"] = $user["updated_at"] = date("Y-m-d H:i:s");
        $user["role_id"] = 2;
        $user["password"] = hash("sha256", $user["password"]);
        $id = createEntity("user", $user);
        setSession("user_id", $id);
        setSession("username", $user["username"]);
        render("user.register", compact("message"));
        redirect("/", 10);
    } else {
        render("user.register", compact("user", "message"));
    }
}

function getUsers()
{
    $users = getAll("user");
    // var_dump($users);die;
    render("user.users", ["users" => $users]);
}

function getUser(int $id)
{
    $user = getById("user", $id);
    $_SESSION["user_id"] = $id;
    render("user.user", ["user" => $user, "id" => $id]);
}

function editUser()
{
    echo __FUNCTION__;
}

function deleteUser()
{
    echo __FUNCTION__;
}

function getAddUser()
{
    echo __FUNCTION__;
}

function addUser()
{
    echo __FUNCTION__;
}