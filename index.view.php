<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <style>
        header{
            background-color: #e3e3e3;
            padding: 3em;
            text-align: center;
        }
    </style> -->

</head>
<body>
        <!-- <header>
            <h1> -->
                <?php //= $greeting;
                    // foreach($names as $name){
                    //     echo "<li>ucwords($name)</li>";
                    // }

                    //foreach($person as $key => $feature):
                    // echo "<u>Home Work</u><br>";
                    // foreach($task as $key => $val): 
                ?>
                    <!-- <li><strong><?php //= ucwords($key) . ': '; ?></strong><?php //= $val; ?></li> -->
                <?php
                    //endforeach; 
                ?>

                <!-- <h1>Conditions in php</h1> -->
                <!-- <li><strong>Task Title: </strong><?php //= $task['title']; ?></li>
                <li><strong>Due Date: </strong><?php //= $task['due']; ?></li>
                <li><strong>Person Responible: </strong><?php //= $task['assignee']; ?></li>
                <li><strong>Task Status: </strong> 
                <?php 
                    // if($task['status'] == true){
                    //     //echo "Completed";
                    //     echo "&#9989";
                    // }
                    // else{
                    //     echo "Incomplete";
                    // }
                ?></li> -->



            <!-- </h1>
        </header> -->

    <!-- Fetching and Displaying Class Objects and their values -->

    <!-- <ul>
        <?php //foreach($tasks as $task): ?>
            <li>
                <?php 
                // if($task->completed){
                //     echo "<strike>";
                //     echo $task->description;
                //     echo "</strike>";
                // }
                // else{
                //     echo $task->description;
                // }
                ?>
            </li>
        <?php //endforeach; ?>
    </ul> -->

    <!-- Fetching Tasks using Tasks Class -->

    <ul>
    <?php foreach($tasks as $task): ?>
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