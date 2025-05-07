<?php
    // Regular Expressions -> preg_match(); preg_match_all(); preg_replace();

    // preg_match();
    $str = "The name of my country is bangladesh. Bangladesh is my motherland. Bangladesh is a beautiful country.";
    
    // Search 'Bangladesh' -> case sensitive match
    if(preg_match('/Bangladesh/', $str)) {
        echo "Found"; // 2 matches
    } else {
        echo "Not found";
    }
    echo "<br>";

    // Search 'Bangladesh' -> case insensitive match (i) -> return after first match
    if(preg_match('/Bangladesh/i', $str)) {
        echo "Found"; // 1 match
    } else {
        echo "Not found";
    }
    echo "<br>";

    // preg_match_all();
    // Search 'Bangladesh' -> case insensitive match (i) -> don't return after first match
    $matchCount = preg_match_all('/Bangladesh/i', $str);

    if($matchCount) {
        echo "Found $matchCount matches";
    } else {
        echo "Not found";
    }
    echo "<br>";

    // Search 'Bangladesh' start (^) of line
    if(preg_match('/^Bangladesh/', $str)) {
        echo "Found";
    } else {
        echo "Not found"; // no match
    }
    echo "<br>";

    // Search 'Bangladesh' end ($) of line
    if(preg_match('/Bangladesh$/', $str)) {
        echo "Found";
    } else {
        echo "Not found"; // no match
    }
    echo "<br>";

    // Validate Email Address
    $email = "Uzzal.123@domain.com";
    $validate_email = preg_match('/^[a-zA-Z0-9.]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,6}(\.[a-zA-Z]{2})?$/', $email);

    if($validate_email) {
        echo "Email is valid.";
    } else {
        echo "Email is invalid!";
    }
    echo "<br>";

    // Validate Phone Number
    $phone = "01500000000";
    $validate_phone = preg_match('/^[01]+(5|6|7|8|9)+[0-9]{8}$/', $phone);

    if($validate_phone) {
        echo "Phone number is valid.";
    } else {
        echo "Phone number is invalid!";
    }
    echo "<br>";

    // preg_replace(); Case sensitive
    $str2 = "Bangladesh is a beautiful country. Bangladesh is a south-asian country.";
    $str_replace = preg_replace('/Bangladesh/', 'Japan', $str2);

    echo $str_replace;
    echo "<br>";

    // preg_replace(); Case insensitive
    $str_replace2 = preg_replace('/Bangladesh/i', 'Japan', $str2);
    echo $str_replace2;
?>