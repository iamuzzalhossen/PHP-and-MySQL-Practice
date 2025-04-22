<?php
    // 01. Print even numbers from 2 to 20
    for($i = 2; $i <= 20; $i++) {
        if($i%2 == 0) {
            echo $i . " ";
        }
    }

    echo "<br>"."<br>";

    // 02. Print numbers in reverse from 10 to 1
    for($i = 10; $i >= 1; $i--) {
        echo $i . " ";
    }
    
    echo "<br>"."<br>";

    // 03. Print multiples from 5 upto 50
    for($i = 5; $i <= 50; $i+=5) {
        echo $i ." ";
    }

    echo "<br>"."<br>";

    // 04. Print squares of numbers from 1 to 10
    for($i = 1; $i <=10; $i++) {
        echo $i * $i ." ";
    }

    echo "<br>"."<br>";

    // 05. Print numbers from 1 to 10 with a dash
    for($i = 1; $i <= 10; $i++) {
        echo $i;
        if($i < 10) {
            echo "-";
        }
    }

    echo "<br>"."<br>";

    // 06. Print multiplication table of 2
    for($i = 2; $i <= 10; $i++) {
        echo "2 x " .$i ." = " ."2" * $i ."<br>";
    }

    echo "<br>"."<br>";

    // 07. Print all numbers between 1 to 100 that are divisible by 10
    for($i = 1; $i <= 100; $i++) {
        if($i%10 == 0) {
            echo $i ." ";
        }
    }

    echo "<br>"."<br>";

    // 08. Print number and it's double from 1 to 5
    for($i = 1; $i <= 5; $i++) {
        echo $i ." -> " .$i * 2 ."<br>";
    }

    echo "<br>"."<br>";

    // 09. Print numbers and whether it's even or odd 1-5
    for($i = 1; $i <= 5; $i++) {
        echo $i ." - ";
        if($i%2 == 0) {
            echo "Even";
        } else {
            echo "Odd";
        }
        echo "<br>";
    }

    echo "<br>"."<br>";

    // 10. Print the reverse of multiples of 3 till 30
    for($i = 30; $i >= 1; $i -= 3) {
        echo $i ." ";
    }

    echo "<br>"."<br>";

    // 11. Print hello with line number (5 times)
    for($i = 1; $i <= 5; $i++) {
        echo $i ."." ." Hello" ."<br>";
    }

    echo "<br>"."<br>";

    // 12. Print years from 2010 to 2020
    for($i = 2010; $i <= 2020; $i++) {
        echo $i ." ";
    }

    echo "<br>"."<br>";

    // 13. Create a pyramid like this:
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

    echo "<br>"."<br>";

    // 14. Create a pyramid like this:
        /*
        1
        2 2
        3 3 3
        4 4 4 4
        5 5 5 5 5
    */
    for($i = 1; $i <= 5; $i++) {
        for($p = 1; $p <= $i; $p++) {
            echo $i . " ";
        }
        echo "<br>";
    }

    echo "<br>"."<br>";

    // 15. Create a pyramid like this:
    /*
        1
        2 1
        3 2 1
        4 3 2 1
        5 4 3 2 1
    */
    for($i = 1; $i <= 5; $i++) {
        for($p = $i; $p >= 1; $p--) {
            echo $p . " ";
        }
        echo "<br>";
    }

    echo "<br>"."<br>";

    // 16. Create floyd's triangle:
    /*
        1
        2 3
        4 5 6
        7 8 9 10
    */
    for($i = 1; $i <= 10; $i++) {
        for($p = 1; $p <= 1; $p++) {
            echo $i . " ";

            if($i == 1) {
                echo "<br>";
            }
            if($i == 3) {
                echo "<br>";
            }
            if($i == 6) {
                echo "<br>";
            }
            if($i == 10) {
                echo "<br>";
            }
        }
    }

    echo "<br>"."<br>";

    // 17. Create a pyramid like this:
    /*
                    1   
                2   1   2
            3   2   1   2   3
        4   3   2   1   2   3   4 
    */
    for($i = 1; $i <= 4; $i++) {
        for($p = 3; $p >= $i; $p--) {
            echo "&nbsp;&nbsp;&nbsp;";
        }
        for($p = $i; $p >= 1; $p--) {
            echo $p ." ";
        }
        for($p = 2; $p <= $i; $p++) {
            echo $p ." ";
        }
        echo "<br>";
    }

    echo "<br>"."<br>";

    // 18. Print row-wise multiplication table (upto 5 rows)
    for($i = 1; $i <= 5; $i++) {
        for($r = 1; $r <= 5; $r++) {
            echo $i * $r . " ";
        }
        echo "<br>";
    }

    echo "<br>"."<br>";

    // 19. Print diagonal number pattern
    for($i = 0; $i <= 4; $i++) {
        for($d = 0; $d <= 4; $d++) {
            if($i == $d) {
                echo $i + 1 ." ";
            } else {
                echo "0 ";
            }
        }
        echo "<br>";
    }

    echo "<br>"."<br>";

    // 20. Print pattern with alternating 1 and 0
    for($i = 0; $i <= 3; $i++) {
        for($d = 0; $d <= $i; $d++) {
            if(($i + $d)%2 == 0) {
                echo "1 ";
            } else {
                echo "0 ";
            }
        }
        echo "<br>";
    }
    
    echo "<br>"."<br>";

    // 21. Print a checkerboard of 1s and 0s (5x5)
    for($i = 1; $i <= 5; $i++) {
        for($d = 1; $d <= 5; $d++) {
            if(($i + $d)%2 == 0) {
                echo "1 ";
            } else {
                echo "0 ";
            }
        }
        echo "<br>";
    }
    
    echo "<br>"."<br>";

    // 22. Print a box of row and column indices
    for($i = 1; $i <= 3; $i++) {
        for($c = 1; $c <= 3; $c++) {
            echo "[" .$i ."," .$c ."]" ." ";
        }
        echo "<br>";
    }

?>