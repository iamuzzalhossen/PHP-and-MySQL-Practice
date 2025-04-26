<?php
    // Associative Arrays to Strings
    // Serialize -> serialize(); unserialize();
    // JSON (better) -> json_encode(); json_decode();

    // serialize()
    $arr = [
        'first_name' => 'Uzzal',
        'last_name' => 'Hossen',
        'age' => 25,
        'class' => 12
    ];

    $result = serialize($arr);
    echo $result .'<br>';

    // unserialize()
    $result2 = unserialize($result);

    echo '<pre>';
    print_r($result2);
    echo '<pre>';

    // json_encode()
    $result3 = json_encode($result2);

    echo $result3;

    // json_decode()
    $result4 = json_decode($result3, true); // true -> object to array

    echo '<pre>';
    print_r($result4);
    echo '</pre>';

    // unset() -> makes variable, array element, object property disappear 
    unset($result4['last_name']);

    echo '<pre>';
    print_r($result4);
    echo '</pre>';

    // Array Utility Functions
    // array_walk($array, callback function);
    $num = [1,2,3,4,5];

    array_walk($num, function($n){
        $r = $n * $n;
        echo 'Square of ' .$n .' is ' .$r .'<br>';
    });
    echo '<br>';

    // array_map(callback function, $array);
    $new_arr = array_map(function($n){
        return $n * $n;
    }, $num);

    echo '<pre>';
    print_r($new_arr);
    echo '</pre>';

    // array_filter($array, callback function);
    $new_arr2 = array_filter($num, function($n){
        return $n%2 == 0;
    });

    echo "<pre>";
    // print_r($new_arr2);
    print_r(array_values($new_arr2));
    echo "</pre>";

    $name = ['Abdullah', 'Uzzal', 'Hossen', 'Hasan', 'Hussain'];

    $new_arr3 = array_filter($name, function($val){
        if($val[0] == 'H') {
            return $val;
        };
    });

    echo "<pre>";
    print_r(array_values($new_arr3));
    echo "</pre>";

    $new_arr4 = array_filter($name, function($val){
        if(strlen($val) == 5) {
            return $val;
        };
    });
    
    echo "<pre>";
    print_r(array_values($new_arr4));
    echo "</pre>";

    // array_reduce($array, callback function)
    $price = [10, 20, 30, 40, 50];

    $total = array_reduce($price, function($p1, $p2){
        return $p1 + $p2;
    });
    echo $total;
    echo "<br>";

    $max_num = array_reduce($price, function($p1, $p2){
        if($p1 > $p2) {
            $max = $p1;
        } else {
            $max = $p2;
        }
        return $max;
    });
    echo $max_num;
    echo "<br>";

    // function example
    function pyramid($h) {
        for($i = 1; $i <= $h; $i++ ) {
            for($p = 1; $p <= $i; $p++) {
                echo $p .' ';
            }
            echo "<br>";
        }
    }
    echo pyramid(5);
    echo pyramid(10);
    echo "<br>";

    // include(); include_once(); require(); require_once()

    // include('about.php');
    // include('about.php');

    // include_once('about.php');
    // include_once('about.php');

    // require('about.php');
    
    require_once('about.php');

    echo "Page Contents!";
?>