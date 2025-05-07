<?php
    setcookie('username', 'admin', time() -1);
    setcookie('password', '12345', time() -1);

    header("location: index.php");
    exit;
?>