<?php
    // Database Connection
    $dbhost = 'localhost';
    $dbname = 'php_mysql_practice';
    $dbuser = 'root';
    $dbpass = 'PHP12345?';

    try {

        $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname};", $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        echo "Connection Error: " .$e -> getMessage();
    }
?>