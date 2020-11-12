<?php

    function dd($animal){
        echo '<pre>';
        die(var_dump($animal));
        echo '</pre>';
    }

    function fetchAllTasks($pdo){
        $statement = $pdo->prepare('select * from todo');
        $statement->execute();
        var_dump($statement->fetchAll(PDO::FETCH_OBJ));
    }

?>