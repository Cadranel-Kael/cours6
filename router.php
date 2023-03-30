<?php

function routeToController(string $path): void
{
    $routes = require BASE_PATH . 'routes.php';
    if (array_key_exists($path, $routes)) {
        $controller = $routes[$path];
        require CONTROLLERS_PATH . "/{$controller}";
    } else {
        Response::abort();
    }
}
