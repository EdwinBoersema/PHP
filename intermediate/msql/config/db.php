<?php
    // Create db connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if(mysqli_connect_errno()){
        // Connection failed
        echo 'Failed to connect to MSQL' . mysqli_connect_errno();
    }