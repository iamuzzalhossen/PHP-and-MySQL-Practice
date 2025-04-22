<?php
    // String functions
    // -> Built-in
    // -> User defined

    // strlen(), strtoupper(), strtolower(), ucwords(), trim(), str_replace(search, replace, string), substr(str, offset, length), printf(), str_repeat(string, int), str_word_count(string), strrev(string), strpos(string_in_where_to_search, which_one_to_search), strip_tags() ---> Built-in
    
    // strlen()
    $str = strlen("PHP is a programming language.");
    $str1 = "PHP is a programming language.";
    $result = strlen($str1);

    echo $str;
    echo "<br>";
    echo $result;
    echo "<br>";

    // strtoupper()
    $str2 = "Bangladesh is my country";
    $result = strtoupper($str2);

    echo $result;
    echo "<br>";

    // strtolower()
    $str3 = "Bangladesh is my country";
    $result = strtolower($str3);

    echo $result;
    echo "<br>";

    // ucwords()
    $str4 = "Bangladesh is my country";
    $result = ucwords($str4);

    echo $result;
    echo "<br>";

    // trim()
    $str5 = " Hypertext Preprocessor ";
    $result = trim($str5);

    echo $result;
    echo "<br>";

    // str_replace(search, replace, string)
    $str6 = "PHP is a programming language.";
    $result = str_replace("PHP", "Java", $str6);

    echo $result;
    echo "<br>";

    // substr(str, offset, length)
    $date = "2025-04-20";
    $result1 = substr($date, 8, 2);
    $result2 = substr($date, 5, 2);
    $result3 = substr($date, 0, 4);

    echo $result1 . "-";
    echo $result2 . "-";
    echo $result3;
    echo "<br>";

    // printf()
    $lang1 = "PHP";
    $lang2 = "Python";
    $lang3 = "Java";
    $lang4 = "Javascript";
    $total = 4;

    printf("Top %d programming languages are %s, %s, %s, %s", $total, $lang1, $lang2, $lang3, $lang4);
    echo "<br>";

    // str_repeat(string, int)
    $str7 = "Bangladesh";
    $result = str_repeat($str7, 5);

    echo $result;
    echo "<br>";

    // str_word_count(string)
    $str8 = "Bangladesh is a beautiful country.";
    $result = str_word_count($str8);

    echo $result;
    echo "<br>";

    // strrev(string)
    $str9 = "Bangladesh";
    $result = strrev($str9);

    echo $result;
    echo "<br>";

    // strpos(string_in_where_to_search, which_one_to_search)
    $str10 = "Bangladesh is a beautiful country";
    $result = strpos($str10, "beautiful");

    echo $result;
    echo "<br>";

    // strip_tags()
    $str11 = "<script>alert('Safe Output!')</script>";
    $result = strip_tags($str11);

    echo $result;
?>