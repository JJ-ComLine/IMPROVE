<?php

function db_connection() {

    //$con = mysqli_connect("127.0.0.1", "root", "improve-root", "improve");
    $con = mysqli_connect("localhost", "S4100636", "giandanigian", "S4100636");

    if (mysqli_connect_errno($con)) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error($con);
    }

    return $con;
}

?>