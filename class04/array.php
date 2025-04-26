<?php
    // Indexed Array, Associative Array, Multidimensional Array -> array(); [];
    $x = array("Uzzal", "Hasan", "Hussain");
    
    echo $x[1];
    echo "<br>"."<br>";

    $a = [];

    $a[0] = 10;
    $a[1] = 20;
    $a[2] = 30;

    var_dump($a);
    echo "<br>"."<br>";

    $b = [10, 20, 30];
    var_dump($b);
    echo "<br>"."<br>";

    $username = "Uzzal";
    $admin = "Hossen";

    $str = " ";

    $str .= "Greetings! ".$username.", <br>";
    $str .= "How are you today? I hope you are doing very well. ";
    $str .= "Thanks for signing up to our website. <br>";
    $str .= "Best Regards, <br> ".$admin." ";

    echo $str;
    echo "<br>"."<br>";

    // Indexed Array
    $info = ["Hasan", 20, "Dhaka"];

    echo "This is " .$info[0] ." and my age is " .$info[1]. ". " ."I live in " .$info[2] .".";
    echo "<br>"."<br>";

    // using for loop
    $sub = "Math";
    $marks = [50, 60, 89, 75, 45];
    
    for($i = 0; $i < count($marks); $i++) {
        echo "Student " .$i + 1 ." get " .$marks[$i] ." mark in " .$sub ."<br>";
    }
    echo "<br>"."<br>";

    // using foreach loop
    $s = 1;

    foreach ($marks as $mark) {
        echo "Student " .$s++ ." get " .$mark ." mark in " .$sub ."<br>";
    }
    echo "<br>"."<br>";

    // Associative Array
    // key -> value
    $arr = [
        "name" => "Hasan",
        "age" => 20,
        "city" => "Gazipur",
        "Dhaka",
        "country" => "Bangladesh",
    ];

    echo "Name: " .$arr["name"] ."<br>";
    echo "Division: " .$arr[0] ."<br>";
    echo "Country: " .$arr["country"] ."<br>";
    echo "<br>";

    var_dump($arr);
    echo "<br>";
    
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    // using foreach loop
    $arr2 = [
        "name" => "Hasan",
        "age" => 20,
        "city" => "Gazipur",
        "country" => "Bangladesh",
    ];

    foreach($arr2 as $key => $val) {
        echo ucwords($key) .": " .$val ."<br>";
    }
    echo "<br>"."<br>";

    // Multidimensional Array
    $persons = [
        ["Abdullah", 100],
        ["Hasan", 50],
        ["Hussain", 30],
    ];

    echo "<pre>";
    print_r($persons);
    echo "</pre>";
    
    // using for loop
    for($i = 0; $i < count($persons); $i++) {
        for($p = 0; $p < count($persons[$i]); $p++) {
            echo $persons[$i][$p] ." ";
        }
        echo "<br>";
    }
    echo "<br>";

    // using foreach loop
    foreach($persons as $person) {
        foreach($person as $val) {
            echo $val ." ";
        }
        echo "<br>";
    }
    echo "<br>";

    $fruits = [
        "mango" => [
            "weight" => "5kg",
            "price" => "500tk",
        ],
        "apple" => [
            "weight" => "3kg",
            "price" => "900tk",
        ],
        "orange" => [
            "weight" => "2kg",
            "price" => "300tk",
        ]
    ];

    foreach($fruits as $parentkey => $parentval) {
        foreach($parentval as $childkey => $childval) {
            echo ucwords($parentkey) ." " .$childkey . " = " .$childval .", ";
        }
        echo "<br>";
    }
    echo "<br>"."<br>";

    // array_values(array_unique());
    $cart = [50, 66, 33, 50, 99, 33, 85];

    echo "<pre>";
    print_r(array_unique($cart));
    echo "</pre>";

    echo "<pre>";
    print_r(array_values(array_unique($cart))); // important
    echo "</pre>";
    echo "<br>"."<br>";

    // explode()
    $date = "24-04-2025";
    $arr_result = explode("-", $date);

    echo "<pre>";
    print_r($arr_result);
    echo "</pre>";
    echo "Year: " .$arr_result[2];
    echo "<br>"."<br>";

    // implode()
    $fruit = ["Mango", "Apple", "Banana"];
    $str_result = implode(" and ", $fruit);
    
    print_r($str_result);
    echo "<br>"."<br>";

    // sorting
    $num = [50, 20, 30, 10, 05, 120];

    echo max($num);

    // sort()
    sort($num);

    echo "<pre>";
    print_r($num);
    echo "</pre>";

    // rsort()
    rsort($num);

    echo "<pre>";
    print_r($num);
    echo "</pre>";
    echo "<br>"."<br>";

    // asort -> value sorting in associative array
    $arr_fruits = [
        "mango" => 150,
        "apple" => 340,
        "banana" => 60,
    ];
    asort($arr_fruits);

    echo "<pre>";
    print_r($arr_fruits);
    echo "<pre>";

    // ksort -> key sorting in associative array
    ksort($arr_fruits);
    
    echo "<pre>";
    print_r($arr_fruits);
    echo "<pre>";
?>