<?php
    // Mathmatical Operation
    // - Operator ( + , - , * , / , % )
    // - Operand ( a , b , c )

    // Expression
    // Arithmetic Expression
    $num1 = 40;
    $num2 = 100;

    $exp = ($num1 + $num2) * 3;

    echo $exp;
    echo "<br>";

    // Comparison Expression
    $age = 22;

    $compare = ($age >= 30);

    var_dump($compare);
    echo "<br>";

    // Arithmetic Operator ( + , - , * , / , % )
    $a = 40;
    $b = 100;
    $c = 3;
    $d = 5;
    
    $x = ($a + $b) * $c;
    $y = ($b - $a) / $c;
    $z = ($b % $c);
    $xy = ($d ** $c); // 5*5*5 = 125
    
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    echo $z;
    echo "<br>";
    echo $xy;
    echo "<br>";

    // Assignment Operator ( = , += , -= , *= , /= , %= )
    $n1 = 50;
    $n2 = 10;
    $n3 = 2;
    $n4 = 4;

    echo $assign = $n1; // 50
    echo "<br>";
    echo $assign += $n1; // 100
    echo "<br>";
    echo $assign -= $n2; // 90
    echo "<br>";
    echo $assign *= $n3; // 180
    echo "<br>";
    echo $assign /= $n3; // 90
    echo "<br>";
    echo $assign %= $n4; // 2
    echo "<br>";

    // Comparison Operator
    $age1 = 22;
    $age2 = 30;
    $str = "30";
    $compare1 = ($age1 >= $age2); // equal or more
    $compare2 = ($age1 <= $age2); // equal or less
    $compare3 = ($age1 == $age2); // equal
    $compare4 = ($age1 != $age2); // not equal
    $compare5 = ($age1 === $age2); // identical (must be equal & same type)
    $compare6 = ($age2 === $str); // identical (must be equal & same type)
    $compare7 = ($age1 !== $age2); // not identical (not equal or not same type)
    $compare8 = ($age2 !== $str); // not identical (not equal or not same type)

    var_dump($compare1);
    echo "<br>";
    var_dump($compare2);
    echo "<br>";
    var_dump($compare3);
    echo "<br>";
    var_dump($compare4);
    echo "<br>";
    var_dump($compare5);
    echo "<br>";
    var_dump($compare6);
    echo "<br>";
    var_dump($compare7);
    echo "<br>";
    var_dump($compare8);
    echo "<br>";

    // Increment/Decrement Operator ( ++ , -- )
    // Post Increment
    $inc = 5;

    echo $inc++; // 5
    echo "<br>";
    echo $inc; // 6
    echo "<br>";

    // Pre Increment
    echo ++$inc; // 7
    echo "<br>";
    echo $inc; // 7
    echo "<br>";

    // Post Decrement
    $dec = 10;

    echo $dec--; // 10
    echo "<br>";
    echo $dec; // 9
    echo "<br>";

    // Pre Decrement
    echo --$dec; // 8
    echo "<br>";
    echo $dec; // 8
    echo "<br>";

    // Logical Operator - and -> && , or -> || , not -> ! , xor
    $log1 = 30;
    $log2 = 40;
    
    // and (&&) - return true if both conditions are true
    var_dump($log1 == 30 && $log2 == 50); 
    echo "<br>";

    // or (||) - return true if at least one condition is true
    var_dump($log1 == 60 || $log2 == 40); // 
    echo "<br>";

    // not (!) - it reverses the boolean value
    var_dump (!($log1 == 30));
    echo "<br>";

    // xor - return true if only one condition is true, not both
    var_dump($log1 == 30 xor $log2 == 40);
    echo "<br>";

    // Ternary Operator
    $mark = 85;

    // echo ($mark == 40) ? "You have passed!" : "You have failed!";
    echo ($mark > 100 || $mark < 0) ? "Invalid Mark!" :
    (($mark >= 80) ? "Your Grade is A+" :
    (($mark >= 70) ? "Your Grade is A" :
    (($mark >= 60) ? "Your Grade is A-" :
    (($mark >= 50) ? "Your Grade is B" :
    (($mark >= 40) ? "Your Grade is C" :
    "You have failed!")))));
    echo "<br>";

    // Null Coalescing - it is used to set a default value when a variable is not set or null
    $username1 = "admin";
    $username1 = $username1 ?? "user1";
    // $username2 = "editor";
    $username2 = $username2 ?? "user2";

    echo $username1;
    echo "<br>";
    echo $username2;
?>