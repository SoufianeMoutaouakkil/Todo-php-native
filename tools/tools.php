<?php

function getViewPath(string $view) :string
{
    $view = str_replace(".", DIRECTORY_SEPARATOR, $view);
    $path = APP_PATH . "/views/$view.php";

    if (is_file($path)) {
        return $path;
    } else {
        throw new Exception("the view '$view' doesn't exist!");
    }
}

function render(string $view, array $data = []) :void
{
    extract($data);
    ob_start();
        include_once getViewPath($view);
    $content = ob_get_clean();
    include_once("./views/layout/template.php");
}

function dd()
{
    dump(...func_get_args());
    die;
}

function dump()
{
    $args = func_get_args();
    foreach ($args as $arg) {
        echo "<pre>";
        var_dump($arg);
        echo "</pre>";
        echo "####################</br>";
    }
}

function redirect(string $path)
{
    header("location: " . $path);
    exit;
}
