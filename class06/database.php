<?php
    // MySQL 
    // - An open-source relational database management system (RDBMS)
    // - It stores, organizes, and manages large amounts of data using a structured format (tables, rows, and columns)
    // Database -> Tables (rows + columns) -> Fields
    /*
    Example:
    Database name: php_mysql_practice
    Table name: students_info
    id        name       roll       phone          email           address       photo
    1       Abdullah      01      011122233     user1@email.com     Dhaka      abdullah.jpg
    2       Md.Hasan      02      011122244     user2@email.com     Dhaka      hasan.jpg
    */

    // Query language
    // CRUD -> Create, Read, Update, Delete
    // php + apache/nginx + mysql + phpmyadmin
    // phpmyadmin -> default username: root

    // Signed integer -> can store both positive and negative numbers (-150, -250.....)
    // Unsigned integer -> can store only positive numbers (0, 150, 250.....)

    // mysql -> php 5 (deprecated)
    // mysqli
    // pdo -> php data object (most popular)

    // Connect config.php to setup database connection
    require 'config.php';

    // INSERT data
    $statement = $pdo->prepare("INSERT INTO students_info (name, email) VALUES(?, ?)");
    $statement->execute(['Abdullah','user1@email.com']);
    $statement->execute(['Hasan','user2@email.com']);
    $statement->execute(['Hossen','user3@email.com']);
    
    // Check if the execution of the statement was successfull 
    // if ($statement->execute(['Hossen','user3@email.com'])) {
    //     echo "User added!";
    // } else {
    //     echo "Insert failed!";
    // }

    // Create a new table
    $sql = "CREATE TABLE IF NOT EXISTS teachers (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL
    )";
    $pdo->exec($sql);

    $statement = $pdo->prepare("INSERT INTO teachers (name, email) VALUES(?, ?)");
    $statement->execute(['Uzzal', 'user10@email.com']);

    // UPDATE data
    $statement = $pdo->prepare("UPDATE teachers SET name=?, email=? WHERE id=?");
    $statement->execute(['Hossen', 'user11@email.com', 1]);

    // DELETE data
    $statement = $pdo->prepare("DELETE FROM teachers WHERE id=?");
    $statement->execute([5]);
?>