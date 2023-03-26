<?php
// Feed in the hostname, the database username, the password, and database name.
$con = mysqli_connect("localhost","root","","borabora");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

?>