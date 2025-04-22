<?php
    // Conditional Statement
    // if(){} , else if(){} , else(){};
    $mark = 33;
    
    if($mark >= 80 && $mark <= 100) {
        echo "You have passed and Grade is A+";
    } elseif($mark >= 70 && $mark < 80) {
        echo "You have passed and Grade is A";
    } elseif($mark >= 60 && $mark < 70) {
        echo "You have passed and Grade is A-";
    } elseif($mark >= 50 && $mark < 60) {
        echo "You have passed and Grade is B";
    } elseif($mark >= 40 && $mark < 50) {
        echo "You have passed and Grade is C";
    } elseif($mark >= 33 && $mark < 40) {
        echo "You have passed and Grade is D.";
    } elseif($mark < 33 && $mark >= 0) {
        echo "You have failed!";
    } else {
        echo "Invalid Mark!";
    }

    echo "<br>";

    // if(): , else if(): , else(): , endif;
    $mark2 = 79;

    if($mark2 >= 80 && $mark2 <= 100) :
        echo "You have passed and Grade is A+";
    elseif($mark2 >= 70 && $mark2 < 80) :
        echo "You have passed and Grade is A";
    elseif($mark2 >= 60 && $mark2 < 70) :
        echo "You have passed and Grade is A-";
    elseif($mark2 >= 50 && $mark2 < 60) :
        echo "You have passed and Grade is B";
    elseif($mark2 >= 40 && $mark2 < 50) :
        echo "You have passed and Grade is C";
    elseif($mark2 >= 33 && $mark2 < 40) :
        echo "You have passed and Grade is D.";
    elseif($mark2 < 33 && $mark2 >= 0) :
        echo "You have failed!";
    else :
        echo "Invalid Mark!";
    endif;

    echo "<br>";

    // Nested if conditions
    $a = 500;
    $b = 4000;
    $c = 300;
    $d = 2000;
    $e = 10000;

    if($a > $b) {
        if($a > $c) {
            if($a > $d) {
                if($a > $e) {
                    echo "A is larger!";
                } else {
                    echo "E is larger!";
                }
            } else {
                if($d > $e) {
                    echo "D is larger!";
                } else {
                    echo "E is larger!";
                }
            }
        } else {
            if($c > $d) {
                if($c > $e) {
                    echo "C is larger!";
                } else {
                    echo "E is larger!";
                }
            } else {
                if($d > $e) {
                    echo "D is larger!";
                } else {
                    echo "E is larger!";
                }
            }
        }
    } else {
        if($b > $c) {
            if($b > $d) {
                if($b > $e) {
                    echo "B is larger!";
                } else {
                    echo "E is larger!";
                }
            } else {
                if($d > $e) {
                    echo "D is larger!";
                } else {
                    echo "E is larger!";
                }
            }
        } else {
            if($c > $d) {
                if($c > $e) {
                    echo "C is larger!";
                } else {
                    echo "E is larger!";
                }
            } else {
                if($d > $e) {
                    echo "D is larger!";
                } else {
                    echo "E is larger!";
                }
            }
        }
    }

    echo "<br>";

    // Switch Case Condition
    $country = "Australia";

    switch($country) {
        case "Bangladesh":
            echo "I live in Bangladesh.";
            break;
        case "Australia":
            echo "I live in Australia.";
            break;
        case "Canada":
            echo "I live in Canada.";
        break;
        default:
            echo "Default Result!";
    }

    echo "<br>";

    $mark3 = 101;

    switch(true) {
        case($mark3 >= 80 && $mark3 <= 100) :
            echo "You have passed and Grade is A+";
            break;
        case($mark3 >= 70 && $mark3 < 80) :
            echo "You have passed and Grade is A";
            break;
        case($mark3 >= 60 && $mark3 < 70) :
            echo "You have passed and Grade is A-";
            break;
        case($mark3 >= 50 && $mark3 < 60) :
            echo "You have passed and Grade is B";
            break;
        case($mark3 >= 40 && $mark3 < 50) :
            echo "You have passed and Grade is C";
            break;
        case($mark3 >= 33 && $mark3 < 40) :
            echo "You have passed and Grade is D.";
            break;
        case($mark3 < 33 && $mark3 >= 0) :
            echo "You have failed!";
            break;
        default :
            echo "Invalid Mark!";
    }
?>