<?php

require_once 'config.php';

/**
 * return the path
 * ex : domaine/path?queryString
 */
function getPath()
{
    $uri = $_SERVER['REQUEST_URI'];
    $uri = strtok($uri, '?');
    $uri = rtrim($uri, '/');
    return $uri === "" ? "/" : $uri;
}

function getMethod()
{
    return strtolower($_SERVER['REQUEST_METHOD']);
}

function resolveRoute() :array
{
    $path = getPath();
    $method = getMethod();
    $routes = getRoutes();
    foreach ($routes as $route => $handler) {
        // Replace placeholders with regular expressions
        $regexRoute = str_replace('/', '\\/', $route);
        $regexRoute = preg_replace('/\{.+\}/', '(\\d+)', $regexRoute);
        // Add delimiters and case-insensitive flag
        $regexRoute = '/^' . $regexRoute . '$/i';
    
        // Check if URI matches regular expression
        if (preg_match($regexRoute, $path, $matches)) {
            $parameters = array_slice($matches, 1);
            if (is_array($handler)) {
                $function = $handler[$method] ?? null;
                $foundRoute = isset($handler[$method]);
            } else {
                $function = $handler;
                $foundRoute = true;
            }
            
            return $foundRoute ? ["function" => $function, "params" => $parameters]: [];
        }
    }

    return [];
}
