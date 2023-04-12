<?php
    $db_connect = mysqli_connect('localhost', 'root', '', 'my_test_db');

    if ($db_connect) {
        //echo "Successfully Connected";
    } else {
        exit("Not connected");
    }
?>