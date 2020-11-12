<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        header{
            background-color: #e3e3e3;
            padding: 3em;
            text-align: center;
        }
    </style>

</head>
<body>
        <header>
            <h1>
                <?php //= $greeting;
                    // foreach($names as $name){
                    //     echo "<li>ucwords($name)</li>";
                    // }

                    //foreach($person as $key => $feature):
                    echo "<u>Home Work</u><br>";
                    foreach($task as $key => $val): 
                ?>
                    <li><strong><?= ucwords($key) . ': '; ?></strong><?= $val; ?></li> 
                <?php   
                    endforeach; 
                ?>

                <?php

                ?>
            </h1>
        </header>
</body>
</html>