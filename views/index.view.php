<?php require 'partials/header.php'; ?>

<ul>
    <?php 
    //require 'function.php';
    foreach($tasks as $task): ?>
        <li>
            <?php 
            if($task->completed){
                echo "<strike>";
                echo $task->description;
                echo "</strike>";
            }
            else{
                echo $task->description;
            }
            ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php require 'partials/footer.php'; ?>