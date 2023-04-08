<?php

/**
 * return a table of the paths to json data files
 */
function getJsonDataFiles() :array
{
    return [
        "user" => __DIR__ . "/datas/users.json",
        "task" => __DIR__ . "/datas/tasks.json",
        "step" => __DIR__ . "/datas/steps.json",
    ];
}

function getModelType()
{
    $possibleValues = [
        "json" => "json",
        "yml" => "yml",
        "xml" => "xml",
        "sql" => "sql"
    ];

    return $possibleValues["json"];
}

function getRoutes() :array
{
    return [
        '/' => 'home',
        '/login' => [
            "get" => 'getLogin',
            "post" => 'postLogin'
        ],
        '/logout' => 'logout',
        '/register' => [
            "get" => 'getRegister',
            "post" => 'postRegister'
        ],
        '/profile' => 'showProfile',
        '/profile/edit' => [
            "get" => 'getEditProfile',
            "post" => 'editProfile',
        ],
        '/profile/edit/password' => [
            "get" => 'getEditPassword',
            "post" => 'editPassword',
        ],
        '/users' => 'getUsers',
        '/tasks' => 'getTasks',
        '/user/(\d+)/tasks' => 'getTasksByUser',
        '/task/(\d+)/steps' => 'getSteps',
        '/user/(\d+)' => [
            "get" => 'getUser',
            "post" => 'editUser',
            "delete" => 'deleteUser',
        ],
        '/task/(\d+)' => [
            "get" => 'getTask',
            "post" => 'editTask',
            "delete" => 'deleteTask',
        ],
        '/task/(\d+)/step/(\d+)' => [
            "get" => 'getStep',
            "post" => 'editStep',
            "delete" => 'deleteStep',
        ],
        '/add-user' => [
            "get" => 'getAddUser',
            "post" => 'addUser'
        ],
        '/add-task' => [
            "get" => 'getAddTask',
            "post" => 'addTask'
        ],
        '/task/(\d+)/add-step' => [
            "get" => 'getAddStep',
            "post" => 'addStep'
        ]
    ];
}
