<?php
    // Cookie is a small piece of data that a website stores on a user's browser to remember information between visits.
    // setcookie(); $_COOKIE[''];
    // 1 day = 24 hours × 60 minutes × 60 seconds = 86400 seconds
    
    // Save Cookie
    // setcookie('username', 'admin', time() + 86400);
    // setcookie('password', '12345', time() + 86400);

    // Delete Cookie
    // setcookie('username', 'admin', time() - 1);
    // setcookie('password', '12345', time() - 1);

    // Show Cookies data on a webpage
    // echo $_COOKIE['username'];
    // echo "<br>";
    // echo $_COOKIE['password'];

    if(isset($_POST['review_form'])) {
        setcookie('reviews', $_REQUEST['review'], time() + 86400);
        header("location: index.php");
        exit;
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
            select, button {
                width: 300px;
                height: 30px;
            }
            button {
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <h1>Rate Our Webpage!</h1>
        <?php
            if(!isset($_COOKIE['reviews'])) :
        ?>
        <form action="" method="post">
            <div>
                <select name="review">
                    <option value="Excellent">Excellent</option>
                    <option value="Good">Good</option>
                    <option value="Average">Average</option>
                </select>
            </div>
            <div>
                <button type="submit" name="review_form">Submit</button>
            </div>
        </form>
        <?php else: ?>
            You already rated our webpage as "<?php echo $_COOKIE['reviews']; ?>". Please come back after 24 hours to submit another feedback. Thanks!
        <?php endif; ?>
    </body>
</html>