<?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $database = "projectakhir";
    $conn = mysqli_connect($host, $username, $pass, $database);
    if (!$conn) {
        die('Ada error'.mysqli_connect_error());
    }else {
        # code...
    }
    ?>