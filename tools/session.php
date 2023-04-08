<?php
function startSession()
{
    session_start();
}

function getSession($key, $default = null)
{
    return $_SESSION[$key] ?? $default;
}

function setSession($key, $value)
{
    $_SESSION[$key] = $value;
}

function unsetSession($key)
{
    unset($_SESSION[$key]);
}

function clearSession()
{
    session_unset();
}
