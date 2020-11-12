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
    <title>PHP Practice</title>

    <style>
        header{
            background-color: #e3e3e3;
            padding: 3em;
            text-align: center;
        }
    </style>

</head>
<body> -->
    
    <!-- <header>
        <h1>
            <?php
                //$greeting = 'Hello, World';
                //echo $greeting;
            ?>
        </h1>
    </header> -->

    <!-- <header>
        <h1>
            <?php //echo $greeting = 'Hello, '. $_GET['name']; ?><br>
            <?php // = $greeting = 'Hello, '. $_GET['name']; ?><br>
            <?php //echo $greeting = 'Hello, '. htmlspecialchars($_GET['name']); ?><br>
            <?php //echo $greeting = 'Hello, '. htmlspecialchars('<a href="https://www.google.com">Google</a>'); ?>
        </h1>
    </header>

</body>
</html> -->

<?php
    
    //$greeting = 'Hello, World';

    // $names = [
    //     'Kashif Javed',
    //     'Bilal Akbar',
    //     'Faisal Malik'
    // ];

    // $person = [
    //     'name' => 'Kashif Javed',
    //     'age' => 21,
    //     'job' => 'Junior Full Stack Programmer',
    // ];

    // echo "var_dump() = ";
    // var_dump($person);
    // echo "<br>";

    //unset($person['age']);

    // echo "print_r() = ";
    // print_r($person);

    // die();

    $task = [
        'title' => 'Maths Assignment',
        'due' => 'Jan 10, 2021',
        'assignee' => 'John Albert',
        // 'status' => 'pending'
        'status' => true
    ];
    
    require 'index.view.php';

?>