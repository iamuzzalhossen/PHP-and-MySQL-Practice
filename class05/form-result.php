<!-- Show submitted form info -->
<?php
    echo "<h3>User submitted info:</h3>";

    if(isset($_POST['name']) || ($_POST['email']) || ($_POST['phone']) || ($_POST['message'])) {
        echo $_POST['name'] ."<br>";
        echo $_POST['email'] ."<br>";
        echo $_POST['phone'] ."<br>";
        echo $_POST['message'] ."<br>";
    }

    echo "<h4>Thank you for submitting the form!</h4>";
?>