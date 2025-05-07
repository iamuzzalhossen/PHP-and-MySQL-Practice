<?php
    require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial_scale=1.0">
        <title>Test CRUD Project</title>
        <style>
            table {
                width: 100%;
                max-width: 800px;
                text-align: center;
                font-size: 18px;
            }
            div a {
                display: inline-block;
                text-decoration: none;
                background: #dddddd;
                color: #000000;
                font-size: 20px;
                font-weight: 600;
                padding: 15px 20px;
                margin: 10px;
            }
            table a {
                text-decoration: none;
                color: #000000;
            }
            table a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <h1>Test CRUD Project</h1>
        <div>
            <a href="create.php">Add New Teacher</a>
            <a href="index.php">Teachers List</a>
        </div>
        <h3>All Teachers Info:</h3>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

            <?php
                // Get all data from a table using fetchAll
                $statement = $pdo->prepare("SELECT * FROM teachers");
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                foreach($result as $row) {
                    ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td>
                                <a href="update.php?id=<?php echo $row['id']?>">Update</a> |
                                <a href="delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this Teacher?')">Delete</a>
                            </td>
                        </tr>
                    <?php
                };
            ?>
        </table>
    </body>
</html>