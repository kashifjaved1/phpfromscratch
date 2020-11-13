<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page</title>
</head>
<body>

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

</body>
</html>