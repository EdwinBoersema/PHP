<?php
require('config/config.php');
require('config/db.php');

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $query = "INSERT INTO test(name, email) VALUES('$name', '$email')";
        if(mysqli_query($conn, $query)){
            header('Location: http://localhost/');
        } else {
            echo 'Error'.mysqli_error($conn);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<nav>
    <a href="index.php">Index</a>
    <a href="add.php">Add</a>
</nav>

<form action="" method="post">
    <div>
        <label>
            name
        </label>
        <input type="text" name="name" placeholder="name">
    </div>
    <label>
            email
        </label>
        <input type="email" name="email" placeholder="email">
    </div>
    <input type="submit" name="submit" value="Submit">
</form>
    
</body>
</html>