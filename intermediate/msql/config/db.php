<?php
    // Create db connection
    $conn = mysqli_connect('localhost', 'root', '', 'GearInventory');

    if(mysqli_connect_errno()){
        // Connection failed
        echo 'Failed to connect to MSQL' . mysqli_connect_errno();
    }