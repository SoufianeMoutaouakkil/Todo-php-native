<?php

define("APP_PATH", __DIR__);
require_once "config.php";
require_once "controllers.php";
require_once "tools/router.php";
require_once "tools/tools.php";
require_once "tools/session.php";
require_once "tools/authorisation.php";

startSession();
$handler = resolveRoute();

if (empty($handler)) {
    http_response_code(404);
    render("error.404");
} else {
    call_user_func_array($handler["function"], $handler["params"]);
}
