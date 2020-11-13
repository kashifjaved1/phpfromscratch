<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
</head>
<body>
    
    <h1>About Us</h1>

    <?php
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        echo "This is about page URI: " . $uri;
    ?>

</body>
</html>