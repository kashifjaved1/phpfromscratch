<?php 
<<<<<<< HEAD
    
    include 'database/Connection.php';
    include 'database/QueryBuilder.php';
    include 'Task.php';
    
    $pdo = Connection::make();

    $query = new QueryBuilder($pdo);

    $tasks = $query->selectAll('todo');

    require 'index.view.php';

?>
=======
    
    $query = require 'core/bootstrap.php';

    $router = new Router;

    require 'routes.php';

    die(var_dump($_SERVER));

    $uri = trim($_SERVER['REQUEST_URI'], '/');

    return $router->direct('about');
>>>>>>> master
