<?php 
    
    $query = require 'core/bootstrap.php';

    $router = new Router;

    require 'routes.php';

    die(var_dump($_SERVER));

    $uri = trim($_SERVER['REQUEST_URI'], '/');

    return $router->direct($uri);