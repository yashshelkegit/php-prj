<?php
    $host = 'localhost';
    $user = 'yash';
    $pass = '-cSF]HlYj@lCtbGr';
    $database = 'yash_db';

    $conn = mysqli_connect($host, $user, $pass, $database);

    if (mysqli_connect_error()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    // echo "Connected successfully";
