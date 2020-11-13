<?php

    include 'database/Connection.php';
    include 'database/QueryBuilder.php';
    include 'task.php';    

    // function dd($animal){
    //     echo '<pre>';
    //     die(var_dump($animal));
    //     echo '</pre>';
    // }

    // function fetchAllTasks($pdo){
    //     $statement = $pdo->prepare('select * from todo');
    //     $statement->execute();
    //     return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    // }

    //------------------------------------------- 
    
    $pdo = Connection::make();

    $query = new QueryBuilder($pdo);

    $tasks = $query->selectAll('todo');

    require 'index.view.php';

?>