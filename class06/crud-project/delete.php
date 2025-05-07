<?php
    require "../config.php";

    // echo $_REQUEST['id'];
    // Delete data from a table using Id
    $statement = $pdo->prepare("DELETE FROM teachers WHERE id=?");
    $statement->execute([$_REQUEST['id']]);

    // Redirection
    header("location: index.php");
    exit;
?>