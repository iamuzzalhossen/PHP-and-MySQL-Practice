<?php
    // Loop -> for, while, do while, foreach
    // normal loop / nested loop
    
    // for loop
    // iteration -> means executing a set of instructions repeatedly in a loop
    /*
        for(initialization; condition; increment/decrement) {

        }
    */
    for($i = 1; $i <= 10; $i++) {
        echo $i. " ";
    }

    echo "<br>";

    for($i = 1; $i <= 8; $i++) {
        echo "Bangladesh" . " ";
    }

    echo "<br>";

    for($i = 8; $i >= 1; $i--) {
        echo $i . " ";
    }

    echo "<br>";

    /*
        for(initialization; condition; increment/decrement) :

        endfor;
    */
    $n = 10;

    for($i = 1; $i <= 8; $i++) :
        echo $n++ . " ";
    endfor;

    echo "<br>";

    $n2 = 10;

    for($i = 8; $i >= 1; $i--) :
        echo $n2-- . " ";
    endfor;

    echo "<br>";

    // Summation of numbers that start from 1 to 5 (1+2+3+4+5 = 15)
    /*
    0 + 1 = 1
    1 + 2 = 3
    3 + 3 = 6
    6 + 4 = 10
    10 + 5 = 15
    */
    $total = 0;
    for($i = 1; $i <= 5; $i++) :
        $total = $total + $i;
    endfor;
    echo $total;

    echo "<br>";

    // while loop
    $i = 1;

    while($i <= 10) {
        echo $i++ . " ";
    }

    echo "<br>";

    // Summation of numbers that start from 5 to 10
    $total2 = 0;
    $num = 5;
    while($num <= 10) :
        $total2 = $total2 + $num;
        $num++;
    endwhile;
    echo $total2;

    echo "<br>";

    // do while loop
    $i = 10;

    do {
        echo $i++ . " ";
    } while($i <= 20);

    echo "<br>";

    // Summation of numbers that start from 15 to 20
    $total3 = 0;
    $num2 = 15;
    do {
        $total3 = $total3 + $num2;
        $num2++;
    } while($num2 <= 20);

    echo $total3;

    echo "<br>";

    // foreach loop (later)

    // Break
    for($i = 1; $i <= 20; $i++) {
        echo "PHP" ." ";
        if($i > 5) {
            break;
        }
    }

    echo "<br>";

    // Continue
    for($i = 1; $i <= 10; $i++) {
        if($i == 5) {
            continue;
        }
        echo $i ." ";
    }

    echo "<br>";

    // Nested loop
    for($i = 1; $i <= 5; $i++) {
        echo "Team " .$i ." = ";

        for($j = 1; $j <= 11; $j++) {
            echo $j . " ";
        }

        echo "<br>";
    }

    // Piramid shape
    /*
        1
        1 2
        1 2 3
        1 2 3 4
        1 2 3 4 5
    */
    for($i = 1; $i <= 5; $i++) {
        for($p = 1; $p <= $i; $p++) {
            echo $p . " ";
        }
        echo "<br>";
    }
    /*
                    1   
                2   1   2
            3   2   1   2   3
        4   3   2   1   2   3   4 
    */
    for($i = 1; $i <= 4; $i++) {
        for($p1 = 3; $p1 >= $i; $p1--) {
            echo "&nbsp;&nbsp;&nbsp;";
        }
        for($p2 = $i; $p2 >= 1; $p2--) {
            echo $p2 ." ";
        }
        for($p3 = 2; $p3 <= $i; $p3++) {
            echo $p3 ." ";
        }
        echo "<br>";
    }
?>