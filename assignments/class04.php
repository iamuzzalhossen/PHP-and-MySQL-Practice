<?php
    // 01. Print all even numbers from an array
    $arr1 = [11, 22, 35, 42, 59, 68];

    foreach($arr1 as $arr) {
        if($arr % 2 == 0) {
            echo $arr ." ";
        }
    }
    echo "<br>"."<br>";

    // 02. Print total number of characters in each city name
    $arr2 =  ["Khulna", "Dhaka", "Chattogram"];

    foreach($arr2 as $arr) {
        echo $arr ." = " .strlen($arr). ' ' ."<br>";
    }
    echo "<br>"."<br>";

    // 03. Print students who passed (marks >= 33)
    $arr3 = [
        "Jamal" => 45,
        "Rina" => 22,
        "Suman" => 60,
        "Asha" => 29
    ];

    foreach($arr3 as $arrkey => $arrval) {
        if($arrval >= 33) {
           echo $arrkey .": " ."Passed" ."<br>";
        }
    }
    echo "<br>"."<br>";

    // 04. Print country names in UPPERCASE
    $arr4 = ["Bangladesh", "India", "Nepal"];

    foreach($arr4 as $arr) {
        echo strtoupper($arr) ."<br>";
    }
    echo "<br>"."<br>";

    // 05. Print sum of all ages
    $arr5 = [21, 33, 45, 18, 27];
    $i = 0;

    foreach($arr5 as $arr) {
        $i += $arr;
    }
    echo "Total: " .$i;
    echo "<br>"."<br>";

    // 06. Print only names of students who scored above 80
    $arr6 = [
        "Nina" => 76,
        "Sumon" => 88,
        "Rafi" => 92,
        "Lina" => 65
    ];

    foreach($arr6 as $arrkey => $arrval) {
        if($arrval > 80) {
            echo $arrkey ."<br>";
        }
    }
    echo "<br>"."<br>";

    // 07. Count how many numbers are divisible by 5
    $arr7 = [10, 15, 18, 20, 33, 40];
    $count = 0;

    foreach($arr7 as $arrkey => $arrval) {
        if($arrval%5 == 0) {
            $count++;
        }
    }
    echo "Count: " .$count;
    echo "<br>"."<br>";

    // 08. Reverse an array using a loop
    $arr8 = [10, 20, 30, 40, 50];
    rsort($arr8);

    foreach($arr8 as $arrkey => $arrval) {
        echo $arrval ."<br>";
    }
    echo "<br>"."<br>";

    // 09. Print persons older than 30
    $arr9 = [
        ["name" => "Jamal","age" => 29],
        ["name" => "Tina", "age" => 33],
        ["name" => "Robin", "age" => 41]
    ];

    foreach($arr9 as $arr) {
        if(($arr["age"]) > 30) {
            echo $arr["name"] ."<br>";
        }
    }
    echo "<br>"."<br>";

    // 10. Count total vowels in all city names
    $arr10 = ["Dhaka", "Rajshahi", "Barisal"];
    $vowels = ["a", "e", "i", "o", "u"];
    $total_vowels = 0;

    foreach($arr10 as $arr) {
        $letters = str_split(strtolower($arr));

        foreach($letters as $letter) {
            if(in_array($letter, $vowels)) {
                $total_vowels++;
            }
        }
    }
    echo "Total Vowels: " .$total_vowels;
    echo "<br>"."<br>";

    // 11. Print only odd numbers and their square
    $arr11 = [3, 6, 7, 10, 13];

    foreach($arr11 as $arr) {
        if($arr%2 != 0) {
            echo $arr ." : " .$arr * $arr ."<br>";
        }
    }
    echo "<br>"."<br>";

    // 12. Show each student’s name with length of name
    $arr12 = ["Hasan", "Tania", "Rifat"];

    foreach($arr12 as $arr) {
        echo $arr .": " .strlen($arr) ."<br>";
    }
    echo "<br>"."<br>";

    // 13. Print each letter of every name
    $arr13 = ["Ali", "Sara"];

    foreach($arr13 as $arr) {
        $chars = str_split($arr);

        foreach($chars as $char) {
            echo $char ."<br>";
        }
    }
    echo "<br>"."<br>";

    // 14. Print first letters of each word in array
    $arr14 = ["Green", "Red", "Yellow"];

    foreach($arr14 as $arr) {
        echo $arr[0] ."<br>";
    }
    echo "<br>"."<br>";

    // 15. Check if a name exists in an array
    // Check for: "Mahi"
    $arr15 = ["Sabbir", "Mahi", "Rifat"];
    $check = "Mahi";

    foreach($arr15 as $arr) {
        if($arr == $check) {
            echo "Found";
        }
    }
?>