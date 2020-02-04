<?php
require('config/config.php');
require('config/db.php');

$id = mysqli_real_escape_string($conn, $_GET['id']);
// create query
$query = 'SELECT * FROM gear WHERE id = ' . $id;

// get results
$result = mysqli_query($conn, $query);

// fetch data
$data = mysqli_fetch_assoc($result);

// // free result
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
    <title>MySQL Exercise</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/flatly/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1><?php echo $data['name']; ?></h1>

        <?php if (isset($data['img'])) : ?>
            <img src="<?php echo $data['img']; ?>">
        <?php endif ?>
        <div>
            Created at: <?php echo $data['created_at']; ?>
        </div>
        <div>
            Checked at: <?php echo $data['checked_at']; ?>
        </div>
        <div>
            Expired at: <?php echo $data['expired_at']; ?>
        </div>
        <div class="card-text">
            Notes:
            <?php echo $data['Notes']; ?>
        </div>
        <a href="<?php echo ROOT_URL ?>">Back</a>
    </div>
</body>

</html>