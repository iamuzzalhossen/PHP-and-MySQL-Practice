<?php
    ob_start();
    session_start();

    if(!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
        header("location: index.php");
        exit;
    } else {
        if($_SESSION['username'] == "admin" && $_SESSION['password'] == "12345") {
            ?>
            <h1>Welcome to our Website!</h1>
            <h2>Enjoy learning PHP!</h2>

            <span><a href="logout.php">Log Out</a></span>
            <?php
        } else {
            header("location: index.php");
            exit;
        }
    }
?>