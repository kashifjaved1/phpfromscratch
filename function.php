<?php

    include 'database/Connection.php';
    include 'database/QueryBuilder.php';
    
    $pdo = Connection::make();

    $query = new QueryBuilder($pdo);

    $tasks = $query->selectAll('todo');

    require 'index.view.php';

?>