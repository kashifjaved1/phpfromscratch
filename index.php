<?php 
    
    include 'database/Connection.php';
    include 'database/QueryBuilder.php';
    include 'Task.php';
    
    $pdo = Connection::make();

    $query = new QueryBuilder($pdo);

    $tasks = $query->selectAll('todo', 'Task');
    
    require 'index.view.php';

?>