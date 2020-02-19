<?php
    $conn = mysqli_connect('localhost', 'root', '', 'GearInventory');

    if(mysqli_connect_errno()){
        echo 'Error '. mysqli_connect_errno();
    }