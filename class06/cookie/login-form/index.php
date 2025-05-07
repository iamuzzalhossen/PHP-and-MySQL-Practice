<?php
    if(isset($_POST['login_form'])) {

        if($_REQUEST['username'] == 'admin' && $_REQUEST['password'] == '12345') {

            setcookie('username', $_REQUEST['username'], time() + 86400);
            setcookie('password', $_REQUEST['password'], time() + 86400);

            header("location: dashboard.php");
            exit;

        } else {
            header("location: index.php");
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial_scale=1.0">
        <title>Cookie Practice</title>
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
        <h1>Log in here</h1>
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
            <button type="submit" name="login_form">Log in</button>
        </form>
    </body>
</html>