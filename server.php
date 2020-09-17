<?php

    $servername = 'localhost';
    $username = 'root';
    $pass = 'root';
    $dbname = 'accounts';

    $conn = mysqli_connect($servername, $username, $pass, $dbname);

    if (!$conn) {
        echo ('Connection error: ' . mysqli_connect_error());
    } else {
        echo 'DB connection successful!';
    }

?>