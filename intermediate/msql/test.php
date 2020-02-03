<?php
require('config/db.php');

$itemId = mysqli_real_escape_string($conn, $_GET['id']);
// echo $itemId;
// create query
$query = 'SELECT * FROM gear WHERE id = 1';

// get results
$result = mysqli_query($conn, $query);

// fetch data
$data = mysqli_fetch_array($result);

// echo $data['name'];

// // free result
mysqli_free_result($result);

// Close connection
mysqli_close($conn);

?>