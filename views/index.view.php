<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <nav>
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="/about">About Us</a>
            </li>
            <li>
                <a href="/contact">Contact Us</a>
            </li>
            <li>
                <a href="/about-culture">About Culture</a>
            </li>
        </ul>
    </nav>

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