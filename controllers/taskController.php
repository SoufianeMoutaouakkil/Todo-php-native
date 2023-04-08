<?php

require_once APP_PATH . "/models/model.php";

function getTasks()
{
    $userId = getSession("user_id");
    $tasks = getByKeyValue("task", "user_id", $userId);
    render("task.tasks", compact("tasks", "userId"));
}

function getTasksByUser()
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

function getAddTask()
{
    echo __FUNCTION__;
}

function addTask()
{
    echo __FUNCTION__;
}
