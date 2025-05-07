<?php
    // File I/O -> file input and output
    // $dir_content = scandir('/folder-path');

    // echo "<pre>";
    // print_r($dir_content);
    // echo "</pre>";

    // How to Read file -> Way 01 ('r' mode)
    if($file = fopen('city.txt', 'r')) {
        while(!feof($file)) {
            $line = fgets($file);
            echo $line ."<br>";
        }
    }
    fclose($file);
    echo "<br>";

    // How to Read file -> Way 02
    $file2 = file_get_contents('city.txt');
    echo nl2br($file2);
    echo "<br>"."<br>";

    // How to Read file -> Way 03
    $file_lines = file('city.txt');
    foreach($file_lines as $line) {
        echo $line ."<br>";
    }
    echo "<br>"."<br>";

    // Create new file, Open file & Write contents ('w' mode)
    $file_name = 'country.txt';
    $new_file = fopen($file_name, 'w');
    if($new_file == false) {
        echo "Error while opening the file!";
        exit;
    }
    fwrite($new_file, "Bangladesh\nUSA\nUK\nUAE\nAUS");
    fclose($new_file);
    echo "<br>"."<br>";

    // Open existing file, Delete everything & Write new contents ('w' mode)
    $file_name2 = 'country2.txt';
    $new_file2 = fopen($file_name2, 'w');
    if($new_file2 == false) {
        echo "Error while opening the file!";
        exit;
    }
    fwrite($new_file2, "Saudi Arabia\nCanada\nJermany");
    fclose($new_file2);

    // Open existing file, Append or Write new contents ('a' mode)
    $file_name3 = 'country3.txt';
    $new_file3 = fopen($file_name3, 'a');
    if($new_file3 == false) {
        echo "Error while opening the file!";
        exit;
    }
    fwrite($new_file3, "\nNew-zealand\nSwitzerland\nNetherland");
    fclose($new_file3);  
?>