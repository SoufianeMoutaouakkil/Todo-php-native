<?php

/**
 * return a table of the allowed routes
 */
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
        '/profile' => [
            "get" => 'getProfile',
            "post" => 'editProfile',
            "delete" => 'deleteProfile',
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
