<?php

require_once APP_PATH . "/models/model.php";

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
        render("user.profile", compact("user"));
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
        render("user.profile-edit-password");
    } else {
        http_response_code(401);
        render("error.401");
    }
}

function deleteProfile()
{
    echo __FUNCTION__;
}
