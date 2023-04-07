<?php

require_once 'config.php';
require_once 'functions.php';
require_once("router.php");

session_start();
$handler = resolveRoute();

if (empty($handler)) {
    http_response_code(404);
    echo 'Page not found.';
} else {
    call_user_func_array($handler["function"], $handler["params"]);
}
