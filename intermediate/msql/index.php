<?php
require('config/config.php');
require('config/db.php');

// create query
$query = 'SELECT * FROM gear';

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
    <title>MySQL Exercise</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/flatly/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Climbing gear</h1>

        <?php foreach ($data as $item): ?>
            <div class="card">
            <?php if(isset($data['img'])): ?>
                <img src="<?php echo $data['img']; ?>">
            <?php endif ?>
                <div class="card-body">
                    <div class="card-title">
                        <h3><?php echo $item['name']; ?></h3>
                    </div>
                    <div>
                        Created at: <?php echo $item['created_at']; ?>
                    </div>
                    <div>
                        Checked at: <?php echo $item['checked_at']; ?>
                    </div>
                    <div>
                        Expired at: <?php echo $item['expired_at']; ?>
                    </div>
                    <div class="card-text">
                        Notes:
                        <?php echo $item['Notes']; ?>
                    </div>
                    <a href="<?php echo ROOT_URL; ?>item.php?id=<?php echo $item['id']; ?>" class="btn btn-primary">Edit Item</a>
                </div>
            </div>
        <?php endforeach ?>

    </div>
</body>

</html>