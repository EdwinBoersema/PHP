<?php
    // isset checks if the value is set
    // htmlentities converts data to html without executing anything

    if (isset($_GET['name'])) {
        $name = htmlentities($_GET['name']);
        echo $name;
    };

    // if (isset($_POST['name'])) {
    //     $name = htmlentities($_POST['name']);
    //     echo $name;
    // };

    // if (isset($_REQUEST['name'])) {
    //     print_r($_REQUEST);
    //     $name = htmlentities($_POST['name']);
    //     echo $name;
    // };

    // echo $_SERVER['QUERY_STRING'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post with PHP</title>
</head>

<body>
    <form action="post.php" method="GET">
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>

    <ul>
        <li>
            <a href="post.php?name=Brad">Brad</a>
        </li>
    </ul>
    <ul>
        <li>
            <a href="post.php?name=Steve">Steve</a>
        </li>
    </ul>
    <h1>
        <?php echo "{$name}'s Profile"; ?>
    </h1>
</body>

</html>