<?php
require('config/config.php');
require('config/db.php');

// create query
$query = 'SELECT * FROM test';

// get results
$result = mysqli_query($conn, $query);

// fetch data
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result
mysqli_free_result($result);

// Close connection
mysqli_close($conn);

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


DB Entries:

<?php foreach($data as $person): ?>
    <div><?php echo $person['name'].": ".$person['email']; ?></div>
<?php endforeach ?>
</body>
</html>