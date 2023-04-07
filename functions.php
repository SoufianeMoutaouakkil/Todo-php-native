<?php

require_once "models/json.php";

function home()
{
    echo __FUNCTION__;
}

function getLogin()
{
    echo __FUNCTION__;
}

function postLogin()
{
    echo __FUNCTION__;
}

function logout()
{
    echo __FUNCTION__;
}

function getRegister()
{
    echo __FUNCTION__;
}

function postRegister()
{
    echo __FUNCTION__;
}

function getProfile()
{
    echo __FUNCTION__;
}

function editProfile()
{
    echo __FUNCTION__;
}

function deleteProfile()
{
    echo __FUNCTION__;
}

function getUsers()
{
    $users = getAll("user");
    // var_dump($users);die;
    render("users", ["users" => $users]);
}

function getTasks()
{
    $userId = $_SESSION["user_id"] ?? 0;
    $tasks = getByKeyValue("task", "user_id", $userId);
    render("tasks", ["tasks" => $tasks, "userId" => $userId]);
}

function getTasksByUser()
{
    echo __FUNCTION__;
}

function getSteps()
{
    echo __FUNCTION__;
}

function getUser(int $id)
{
    $user = getById("user", $id);
    $_SESSION["user_id"] = $id;
    render("user", ["user" => $user, "id" => $id]);
}

function editUser()
{
    echo __FUNCTION__;
}

function deleteUser()
{
    echo __FUNCTION__;
}

function getTask()
{
    echo __FUNCTION__;
}

function editTask()
{
    echo __FUNCTION__;
}

function deleteTask()
{
    echo __FUNCTION__;
}

function getStep()
{
    echo __FUNCTION__;
}

function editStep()
{
    echo __FUNCTION__;
}

function deleteStep()
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

function getAddTask()
{
    echo __FUNCTION__;
}

function addTask()
{
    echo __FUNCTION__;
}

function getAddStep()
{
    echo __FUNCTION__;
}

function addStep()
{
    echo __FUNCTION__;
}