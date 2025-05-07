<?php
    // Pagination helps manage and organize large sets of content by breaking them into smaller, more manageable parts across multiple pages.
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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagination Practice</title>
        <style>
            div {
                background: #f5f5f5;
                padding: 20px;
                max-width: 400px;
                margin: 20px auto;
                border: 5px solid #ffffff;
            }
            .nav-links, .nav-icon {
                text-decoration: none;
                display: inline-block;
                padding: 10px 15px;
                background: #ffe4c4;
                color: #000000;
                margin: 0 5px;
                border-radius: 30px;
                font-size: 16px;
                font-weight: 600;
            }
            .nav-icon {
                background: #6b9fff;
                color: #ffffff;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div>
            <h2>Teacher List:</h2>
            
            <?php
                $per_page = 4;
                $q = $pdo->prepare("SELECT * FROM teachers");
                $q->execute();
                $total_rows = $q->rowCount();
                // echo $total_rows;

                $total_pages = ceil($total_rows/$per_page);
                // echo $total_pages;

                // Page 1 = 1 2 3 4         -> Start = 1   -> $per_page
                // Page 2 = 5 6 7 8         -> Start = 5   -> $per_page * (p-1) + 1
                // Page 3 = 9 10 11 12      -> Start = 9   -> $per_page * (p-1) + 1
                // Page 4 = 13 14 15 16     -> Start = 13  -> $per_page * (p-1) + 1
                // Page 5 = 17              -> Start = 17  -> $per_page * (p-1) + 1

                if(!isset($_REQUEST['p'])) {
                    $start = 1;
                } else {
                    $start = $per_page * ($_REQUEST['p']-1) + 1;
                }
                // echo $start;
                $j = 0;
                $k = 0;
                $arr = [];
                $r = $q->fetchAll();
                
                foreach($r as $row) {
                    $j++;
                    if($j >= $start) {
                        $k++;
                        if($k > $per_page) {
                            break;
                        }
                        $arr[] = $row['id'] .' ';
                    }
                }

                // Select all data from database table
                $statement = $pdo->prepare("SELECT * FROM teachers");
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                foreach($result as $row) {
                    if(!in_array($row['id'], $arr)) {
                        continue;
                    }
                    echo "<div>";
                    echo "Name: " .$row['name'] ."<br>";
                    echo "Email: " .$row['email'];
                    echo "</div>";
                }

                // Prev Array Key
                if(isset($_REQUEST['p'])) {

                    if($_REQUEST['p'] == 1) {
                        echo '<a href="javascript:void" class="nav-icon" style="background: #ddd;"> << </a>';
                    } else {
                        echo '<a href="http://localhost:8888/php/class06/pagination/index.php?p='.($_REQUEST['p']-1).'" class="nav-icon"> << </a>';
                    }
            
                } else {
                    echo '<a href="javascript:void" class="nav-icon" style="background: #ddd;"> << </a>';
                }

                // Pagination
                for($i=1; $i<=$total_pages; $i++) {
                    echo '<a href="http://localhost:8888/php/class06/pagination/index.php?p='.$i.'" class="nav-links">' .$i .'</a>';
                }

                // Next Array Key
                if(isset($_REQUEST['p'])) {

                    if($_REQUEST['p'] == $total_pages) {
                        echo '<a href="javascript:void" class="nav-icon" style="background: #ddd;"> >> </a>';
                    } else {
                        echo '<a href="http://localhost:8888/php/class06/pagination/index.php?p='.($_REQUEST['p']+1).'" class="nav-icon"> >> </a>';
                    }
            
                } else {
                    echo '<a href="http://localhost:8888/php/class06/pagination/index.php?p=2" class="nav-icon"> >> </a>';
                }

            ?>
        </div>
    </body>
</html>