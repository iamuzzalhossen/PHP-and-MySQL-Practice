<?php
    // Number types
    $a = 50;
    $b = -50;
    $c = 50.256;
    $d = -50.256;

    // NaN (Not a Number)
    // Impossible mathmatical operation
    // Ex- 65/0 or sqrt(-144)
    $e = 60;
    $f = 0;
    $g = "PHP";
    // $m = $e/$f;
    $n = -144;

    // echo $m;
    echo sqrt($n);
    echo "<br>";
    var_dump(is_nan(sqrt($n)));
    echo "<br>";
    var_dump(is_numeric($e));
    echo "<br>";
    var_dump(is_numeric($g));
    echo "<br>";

    // pi()
    echo pi();
    echo "<br>";

    // max()
    echo max(10, 20, 30, 50, 15, 5);
    echo "<br>";

    // min()
    echo min(10, 20, 30, 50, 15, 5);
    echo "<br>";

    // abs()
    echo abs(-5250);
    echo "<br>";

    // round()
    echo round(25.26564);
    echo "<br>";
    echo round(25.6564);
    echo "<br>";
    echo round(25.26564, 3);
    echo "<br>";

    // rand()
    echo rand();
    echo "<br>";
    echo rand(1000, 5000);
    echo "<br>";

    // ceil()
    echo ceil(42.1565);
    echo "<br>";

    // floor()
    echo floor(42.1565);
    echo "<br>";

    // decbin() - decimal to binary
    echo decbin(100);
    echo "<br>";

    // bindec() - binary to decimal
    echo bindec(1100100);
    echo "<br>";

    // dechex() - decimal to hexadecimal
    echo dechex(95);
    echo "<br>";

    // hexdec() - hexadecimal to decimal
    echo hexdec("5f");
    echo "<br>";

    // decoct() - decimal to octal
    echo decoct(68);
    echo "<br>";

    // octdec() - octal to decimal
    echo octdec(104);
    echo "<br>";
?>