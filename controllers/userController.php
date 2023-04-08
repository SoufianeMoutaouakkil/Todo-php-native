<?php

require_once APP_PATH . "/models/model.php";

function getRegister()
{
    echo __FUNCTION__;
}

function postRegister()
{
    echo __FUNCTION__;
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
