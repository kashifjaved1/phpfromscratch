<?php 

// class Report{
//     public function generate($user){
//         //
//     }
// }

// echo 'hello world';

// $greeting = 'Hello World';

// $greeting = 'Hello Universe';

// echo $greeting;

// $name = "Kashif Javed";

// echo 'Hello, $name'; // Displays -> Hello, $name

// echo "Hello, $name"; // Displays -> Hello Kashif Javed

// echo 'Hello, ' . $name; // Displays -> Hello Kashif Javed

// echo "Hello, {$name}"; // Displays -> Hello Kashif Javed

// $greeting = 'Hello';

// echo "$greeting, $name"; // Displays -> Hello Kashif Javed

// echo "{$greeting}, {$name}"; // Displays -> Hello Kashif Javed

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seperating Logic from Presentation</title>

    <style>
        header{
            background-color: #e3e3e3;
            padding: 3em;
            text-align: center;
        }
    </style>

</head>
<body> -->
    <!-- Displaying variable value -->
    <!-- <header>
        <h1>
            <?php
                //$greeting = 'Hello, World';
                //echo $greeting;
            ?>
        </h1>
    </header> -->

    <!-- <header>
        <h1> -->
            <!-- Fetching and Displaying Data from URL using $_GET Method -->
            <?php //echo $greeting = 'Hello, '. $_GET['name']; ?><br>
            <?php // = $greeting = 'Hello, '. $_GET['name']; ?><br>
            <!-- we can't believe on data from user so justifying it using htmlspecialchars() function -->
            <?php //echo $greeting = 'Hello, '. htmlspecialchars($_GET['name']); ?><br>
            <?php //echo $greeting = 'Hello, '. htmlspecialchars('<a href="https://www.google.com">Google</a>'); ?>
        <!-- </h1>
    </header>

</body>
</html> -->

<?php

    //------------------------------------------ Simple variable
    
    //$greeting = 'Hello, World';

    //------------------------------------------ Simple Array

    // $names = [
    //     'Kashif Javed',
    //     'Bilal Akbar',
    //     'Faisal Malik'
    // ];

    //------------------------------------------ Assosiative Array
    
    // $person = [
    //     'name' => 'Kashif Javed',
    //     'age' => 21,
    //     'job' => 'Junior Full Stack Programmer',
    // ];

    //------------------------------------------ Dumping Array using var_dump()

    // echo "var_dump() = ";
    // var_dump($person);
    // echo "<br>";

    //------------------------------------------ Deleting / Releasing / Unsetting Variable Value

    //unset($person['age']);

    //------------------------------------------ Printing Array using print_r()

    // echo "print_r() = ";
    // print_r($person);

    //------------------------------------------ Make the Execution Dead after die()

    // die();

    //------------------------------------------ Home Work

    // $task = [
    //     'title' => 'Maths Assignment',
    //     'due' => 'Jan 10, 2021',
    //     'assignee' => 'John Albert',
    //     // 'status' => 'pending'
    //     'status' => true
    // ];

    $animal = ['Cat', 'Dog'];

    function dd($animal){
        echo '<pre>';
        die(var_dump($animal));
        echo '</pre>';
    }

    dd($animal);

    dd('Hello World');
    
    require 'index.view.php';

?>