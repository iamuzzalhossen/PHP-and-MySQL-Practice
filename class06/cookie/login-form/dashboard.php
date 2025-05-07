<?php
    if(!isset($_COOKIE['username']) || !isset($_COOKIE['password'])) {
        header("location: index.php");
        exit;
    } else {
        if($_COOKIE['username'] == "admin" && $_COOKIE['password'] == "12345") {
            ?>
            <h1>Welcome to Your Dashboard!</h1>
            <h2>Enjoy learning PHP!</h2>

            <span><a href="logout.php">Log Out</a></span>
            <?php
        } else {
            header("location: index.php");
            exit;
        }
    }
?>