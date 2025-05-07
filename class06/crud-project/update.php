<?php
    require "../config.php";

    // echo $_REQUEST['id'];

    if(isset($_POST['add_teacher_form'])) {
        try {

            if($_POST['name'] == '') {
                throw new Exception("Name can not be empty!");
            }

            if($_POST['email'] == '') {
                throw new Exception("Email can not be empty!");
            }

            // Check if email is valid
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                throw new Exception("Email is Invalid!");
            }

            // Check if email already exists
            $statement = $pdo->prepare("SELECT * FROM teachers WHERE email=? AND id!=?");
            $statement->execute([$_POST['email'], $_REQUEST['id']]);
            $user_email = $statement->fetch(PDO::FETCH_ASSOC);

            if($user_email) {
                throw new Exception("Email already exists!");
            }

            // Update data
            $statement = $pdo->prepare("UPDATE teachers SET name=?, email=? WHERE id=?;");
            $statement->execute([$_POST['name'], $_POST['email'], $_REQUEST['id']]);

            $success_message = "Teacher info has been updated successfully!";

        } catch(Exception $e) {
            $error_message = $e->getMessage();
        }
    }

    // Select data using Id
    $statement = $pdo->prepare("SELECT * FROM teachers WHERE id=?");
    $statement->execute([$_REQUEST['id']]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial_scale=1.0">
        <title>Test CRUD Project</title>
        <style>
            div {
                padding-bottom: 10px;
            }
            input, button {
                width: 300px;
                height: 30px;
            }
            button {
                cursor: pointer;
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
            .error-msg, .success-msg {
                font-size: 18px;
                font-weight: 600;
                font-style: italic;
                color: #de0202;
                display: block;
                margin: 20px 10px;
            }
            .success-msg {
                color: #069806;
            }
        </style>
    </head>
    <body>
        <h1>Test CRUD Project</h1>
        <div>
            <a href="create.php">Add New Teacher</a>
            <a href="index.php">Teachers List</a>
        </div>
        <h3>Update Teacher Info:</h3>
        <form action="" method="post">
            <div>
                <label>
                    Name: <br>
                    <input type="text" name="name" value="<?php echo $result['name']?>">
                </label>
            </div>
            <div>
                <label>
                    Email: <br>
                    <input type="email" name="email" value="<?php echo $result['email']?>">
                </label>
            </div>
            <button type="submit" name="add_teacher_form">Update Info</button>
        </form>

        <!-- Show Error or Success message -->
        <?php
        // Error message
        if(isset($error_message)) {
            ?>
            <div>
                <span class="error-msg"><?php echo $error_message; ?></span>
            </div>
            <?php
        }

        // Success message
        if(isset($success_message)) {
            ?>
            <div>
                <span class="success-msg"><?php echo $success_message; ?></span>
            </div>
            <?php
        }
        ?>
    </body>
</html>