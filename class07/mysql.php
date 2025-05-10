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

    // PDO::FETCH_ASSOC -> Get data as an Associative Array
    $statement = $pdo->prepare("SELECT name,email FROM students_info");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($result);
    echo "</pre>";
    echo "<br>";

    // PDO::FETCH_NUM -> Get data as a Numeric Array
    $statement = $pdo->prepare("SELECT name,email FROM students_info");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_NUM);
    
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    echo "<br>";

    // PDO::FETCH_COLUMN -> Get plain One-dimensional Array and first selected column will be fetched.
    $statement = $pdo->prepare("SELECT name,email FROM students_info");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_COLUMN);
    
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    echo "<br>";

    // PDO::FETCH_GROUP -> It organizes the query results into groups, using the first column's value as the key for each group.
    $statement = $pdo->prepare("SELECT name,email FROM students_info");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_GROUP);
    
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    echo "<br>";
    
    // PDO::FETCH_BOTH -> Get data both as an associative and numeric (indexed) array.
    $statement = $pdo->prepare("SELECT name,email FROM students_info");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_BOTH);
    
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    echo "<br>";

    // Distinct Statement -> It is used to return only distinct (different) values
    $statement = $pdo->prepare("SELECT distinct(name) FROM students_info");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_NUM);
    
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    echo "<br>";

    // MIN() -> It returns the smallest value for a column
    $statement = $pdo->prepare("SELECT MIN(id) as 'smallest ID' FROM students_info");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    echo "<br>";

    // MAX() -> It returns the largest value for a column
    $statement = $pdo->prepare("SELECT MAX(id) as 'largest ID' FROM students_info");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    echo "<br>";

    // COUNT() -> It is used to calculate the total number of rows in a database table
    $statement = $pdo->prepare("SELECT COUNT(id) as 'Total Students' FROM students_info");
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
 
    echo $result['Total Students'];
    echo "<br>";

    // SUM() -> It returns the sum of the data values
    $statement = $pdo->prepare("SELECT SUM(id) as 'Total ID Values' FROM students_info");
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
 
    echo $result['Total ID Values'];
    echo "<br>";

    // AVG() -> It returns the average of the data values
    $statement = $pdo->prepare("SELECT AVG(id) as 'Average ID Values' FROM students_info");
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
 
    echo $result['Average ID Values'];
    echo "<br>";

    // WHERE, AND, OR
    $statement = $pdo->prepare("SELECT name FROM students_info WHERE name=? AND (email=? OR email=?)");
    $statement->execute(['Abdullah', 'user1@email.com', 'user10@email.com']);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
 
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    echo "<br>";

    // WHERE BETWEEN
    $statement = $pdo->prepare("SELECT name,email FROM students_info WHERE id BETWEEN ? AND ?");
    $statement->execute([5, 10]);
    $result = $statement->fetchAll(PDO::FETCH_NUM);
 
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    echo "<br>";

    // WHERE LIKE
    $statement = $pdo->prepare("SELECT name FROM students_info WHERE name LIKE ?");
    // $statement->execute(['h%']);
    // $statement->execute(['%h']);
    $statement->execute(['%h%']);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
 
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    echo "<br>";

    // WHERE IN
    $statement = $pdo->prepare("SELECT email FROM students_info WHERE name IN (?, ?)");
    $statement->execute(['Abdullah', 'Hasan']);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
 
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    echo "<br>";

    // WHERE NOT IN
    $statement = $pdo->prepare("SELECT email FROM students_info WHERE name NOT IN (?, ?)");
    $statement->execute(['Abdullah', 'Hasan']);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
 
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    echo "<br>";

    // WHERE IN Subquery
    $statement = $pdo->prepare("SELECT name,city FROM students_info
    WHERE city IN (
    SELECT city FROM teachers
    )");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
 
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    echo "<br>";

    // ORDER BY Clause -> Ascending (ASC), Descending (DESC)
    // $statement = $pdo->prepare("SELECT name,email FROM students_info WHERE id > ? ORDER BY name ASC");
    $statement = $pdo->prepare("SELECT name,email FROM students_info WHERE id > ? ORDER BY name DESC");
    $statement->execute([5]);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
 
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    echo "<br>";

    // LIMIT Clause
    $statement = $pdo->prepare("SELECT name FROM students_info LIMIT 3");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
 
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    echo "<br>";

    // OFFSET
    $statement = $pdo->prepare("SELECT name FROM students_info LIMIT 3 OFFSET 2");
    // $statement = $pdo->prepare("SELECT name FROM students_info LIMIT 2, 3");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
 
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    echo "<br>";

    // INNER JOIN -> It combines rows from two tables only when there’s a match in both tables.
    // $pdo->exec("ALTER TABLE new_students_info ADD COLUMN department_id INT(8) NOT NULL AFTER id");
    $statement = $pdo->prepare("SELECT
        s.id,
        s.department_id,
        s.name as s_name,
        s.city,
        d.name as d_name
        FROM new_students_info s
        INNER JOIN dept_of_students d
        ON s.department_id = d.id");

    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($result as $row) {
        echo $row['s_name'] ." - ". $row['city'] ." - ". $row['d_name'] ."<br>" ;
    }
    echo "<br>";

    // LEFT JOIN
    // Returns all records from the left table, and the matched records from the right table.
    $statement = $pdo->prepare("SELECT
        s.id,
        s.department_id,
        s.name as s_name,
        s.city,
        d.name as d_name
        FROM new_students_info s
        LEFT JOIN dept_of_students d
        ON s.department_id = d.id");
    
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($result as $row) {
        echo $row['s_name'] ." - ". $row['city'] ." - ". $row['d_name'] ."<br>" ;
    }
    echo "<br>";

    // RIGHT JOIN
    // Returns all records from the right table, and the matched records from the left table.
    $statement = $pdo->prepare("SELECT
        s.id,
        s.department_id,
        s.name as s_name,
        s.city,
        d.name as d_name
        FROM new_students_info s
        RIGHT JOIN dept_of_students d
        ON s.department_id = d.id");

    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($result as $row) {
        echo $row['s_name'] ." - ". $row['city'] ." - ". $row['d_name'] ."<br>" ;
    }
    echo "<br>";

    // UNION (FULL OUTER JOIN)
    // Return all records when there is a match in either left or right table.
    $statement = $pdo->prepare("SELECT
        s.id,
        s.department_id,
        s.name as s_name,
        s.city,
        d.name as d_name
        FROM new_students_info s
        LEFT JOIN dept_of_students d
        ON s.department_id = d.id

        UNION

        SELECT
        s.id,
        s.department_id,
        s.name as s_name,
        s.city,
        d.name as d_name
        FROM new_students_info s
        RIGHT JOIN dept_of_students d
        ON s.department_id = d.id");

    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($result as $row) {
        echo $row['s_name'] ." - ". $row['city'] ." - ". $row['d_name'] ."<br>" ;
    }
    echo "<br>";

    // UNION and UNION ALL
    // UNION ALL -> It keeps all rows, including duplicates.
    $statement = $pdo->prepare("SELECT * FROM new_students_info WHERE city=?
        UNION ALL
        SELECT * FROM new_students_info WHERE city=?
    ");

    $statement->execute(['Dhaka', 'Dhaka']);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($result as $row) {
        echo $row['id'] ." - ". $row['name'] ." - ". $row['city'] ."<br>" ;
    }
    echo "<br>";

    // UNION -> It removes duplicate rows
    $statement = $pdo->prepare("SELECT * FROM new_students_info WHERE city=?
        UNION
        SELECT * FROM new_students_info WHERE city=?
    ");

    $statement->execute(['Dhaka', 'Dhaka']);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($result as $row) {
        echo $row['id'] ." - ". $row['name'] ." - ". $row['city'] ."<br>" ;
    }
    echo "<br>";

    // GROUP BY
    // The GROUP BY clause is used to group rows that have the same values in specified columns into summary rows - like counting, averaging, or summing.
    $statement = $pdo->prepare(
        "SELECT
            p.id,
            p.products_name,
            SUM(o.quantity) as total_quantity,
            SUM(o.quantity * p.price) as total_price
        FROM
            order_info o
        JOIN
            products p ON o.product_id = p.id
        GROUP BY
            p.id, p.products_name
        ORDER BY
            total_price DESC"
    );

    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $row) {
        echo $row['products_name'] ." - ". $row['total_quantity'] ." - ". $row['total_price'] ."<br>" ;
    }

?>