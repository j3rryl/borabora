// create a session for the user
<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: index.php");
        exit();
    }
?>