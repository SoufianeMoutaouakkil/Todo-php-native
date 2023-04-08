<?php

require_once "session.php";

function isAuthorized(string $role)
{
    $userRole = getUserRole();
    if (is_null($userRole)) {
        return false;
    }
    $targetRole = getByKeyValue("role", "role", $role);
    return $userRole["level"] >= $targetRole["level"];
}

function checkUserRole($role)
{
    $userRole = getUserRole();

    return $userRole["title"] === strtolower($role);
}

function getUserRole()
{
    $userId = getSession("user_id", null);
    if (is_null($userId)) {
        return null;
    }

    $user = getById("user", $userId);

    return getById("role", $user["role_id"]);
}

function isLoggedIn()
{
    return !is_null(getSession("user_id", null));
}
