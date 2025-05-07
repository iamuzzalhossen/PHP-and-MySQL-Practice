<?php
    // A Session is a way to store information (in variables) to be used in multiple pages
    // Session variables last until the user closes the browser
    // ob_start(); session_start(); session_unset(); session_destroy();

    ob_start();
    session_start();

    // $_SESSION['username'] = "admin";
    // $_SESSION['password'] = "12345";

    // session_unset();
    // session_destroy();

    // echo "<pre>";
    // print_r($_SESSION);
    // echo "</pre>";

    if(isset($_POST['login_form'])) {
        try {

            if($_POST['username'] != "admin" ) {
                throw new Exception("Username doesn't match!");
            }

            if($_POST['password'] != "12345" ) {
                throw new Exception("Password doesn't match!");
            }

            $_SESSION['username'] = "admin";
            $_SESSION['password'] = "12345";

            header("location: home.php");
            exit;

        } catch(Exception $e) {
            $error_message = $e->getMessage();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial_scale=1.0">
        <title>Session Practice</title>
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
        </style>
    </head>
    <body>
        <h1>Log In Here</h1>
        <form action="" method="post">
            <div>
                <label>
                    Username: <br>
                    <input type="text" name="username">
                </label>
            </div>
            <div>
                <label>
                    Password: <br>
                    <input type="password" name="password">
                </label>
            </div>
            <button type="submit" name="login_form">Log In</button>
        </form>
        <br>
        <?php
            if(isset($error_message)) {
                echo $error_message;
            }
        ?>
    </body>
</html>