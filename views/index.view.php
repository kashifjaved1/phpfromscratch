<?php require 'partials/header.php'; ?>

<h1>Submit your Name</h1>

<form action = "../phpfromscratch/names" method = "POST">

    <input type="text" name="name">

    <button type="submit">Submit</button>

</form>

<?php require 'partials/footer.php'; ?>