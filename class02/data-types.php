<?php
    // var_dump()
    // var_dump() is a built-in PHP function that displays structured information (type+value) about one or more variables)

    // Data Types - String
    $str1 = "PHP";
    $str2 = "50";
    $str3 = "100.20";

    var_dump($str1);
    var_dump($str2);
    var_dump($str3);
    echo "<br>";

    // Data Types - Integer (int)
    $int = 100;

    var_dump($int);
    //var_dump(is_int($int));
    echo "<br>";

    // Data Types - Float/Double
    $float = 50.256;

    var_dump($float);
    // var_dump(is_float($float));
    // var_dump(is_double($float));
    echo "<br>";

    // Data Types - Boolean (bool)
    $a = true;
    $b = false;
    // $c = 100;

    var_dump($a, $b);
    // var_dump(is_bool($c));
    echo "<br>";

    // Data Types - Array (later)
    // Data Types - Object (later)

    // Type Casting
    // Type casting is the process of converting a variable from one data type to another.

    $x = (float) 50; // int converted to float
    $y = (string) 50; // int converted to string
    $z = (array) 50; // int converted to array

    $ab = (int) "PHP"; // string converted to int
    $ac = (int) 100.25; // float converted to int

    var_dump($x, $y, $z, $ab, $ac);
    echo "<br>";

    // Assign value
    $aaa = 1000;
    $bbb = $aaa;
    $aaa = "Bangladesh";
    
    // echo $bbb;
    echo $aaa;
    echo "<br>";

    // Constant
    define('DB_NAME','Uzzal2025');
    define('DB_PASS','Pass2025');

    echo DB_NAME;
    echo "<br>";
    echo DB_PASS;
?>